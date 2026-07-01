<?php

namespace App\Http\Controllers;

use App\Models\CourseReview;
use App\Models\TrainingCourse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CourseReviewController extends Controller
{
    public function store(Request $request, int $course): RedirectResponse
    {
        $client = auth('client')->user();

        // Verify client has completed this course
        $hasCompleted = $client->trainingCourses()
            ->where('training_course_id', $course)
            ->wherePivot('status', 'completed')
            ->exists();

        if (! $hasCompleted) {
            return back()->with('error', 'يجب إتمام الدورة أولاً لتتمكن من التقييم.');
        }

        // Prevent duplicate reviews
        $alreadyReviewed = CourseReview::where('training_course_id', $course)
            ->where('reviewer_name', $client->name)
            ->exists();

        if ($alreadyReviewed) {
            return back()->with('error', 'لقد قمت بتقييم هذه الدورة مسبقاً.');
        }

        $validated = $request->validate([
            'rating' => ['required', 'integer', 'min:1', 'max:5'],
            'review' => ['required', 'string', 'min:10', 'max:1000'],
        ]);

        CourseReview::create([
            'training_course_id' => $course,
            'reviewer_name' => $client->name,
            'reviewer_image' => $client->avatar,
            'rating' => $validated['rating'],
            'review' => $validated['review'],
            'review_date' => now()->format('d/m/Y'),
        ]);

        // Recalculate aggregate rating on the course
        $trainingCourse = TrainingCourse::findOrFail($course);
        $reviews = CourseReview::where('training_course_id', $course)->get();

        $trainingCourse->update([
            'rating' => round($reviews->avg('rating'), 1),
            'reviews_count' => $reviews->count(),
        ]);

        return redirect()->route('profile')->with('review_success', 'شكراً! تم إرسال تقييمك بنجاح.');
    }
}
