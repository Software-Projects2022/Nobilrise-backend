<?php

namespace App\Http\Controllers;

use App\Models\PsychologicalSession;
use App\Models\TrainingCourse;
use App\Models\TrainingCourseCategory;
use Illuminate\View\View;

class TrainingCourseController extends Controller
{
    public function index(): View
    {
        $courses = TrainingCourse::with('trainingCourseCategory')->get();
        $categories = TrainingCourseCategory::all();
        $sessions = PsychologicalSession::with('psychologicalSessionCategory')->get();

        return view('pages.training-courses.training-courses', compact('courses', 'categories', 'sessions'));
    }

    public function show(int $id): View
    {
        $course = TrainingCourse::with(['trainingCourseCategory', 'reviews'])->findOrFail($id);
        $relatedCourses = TrainingCourse::where('id', '!=', $id)->limit(3)->get();

        $canSeeReviews = false;

        if (auth('client')->check()) {
            $enrollment = auth('client')->user()
                ->trainingCourses()
                ->where('training_course_id', $id)
                ->wherePivot('status', 'completed')
                ->exists();

            $canSeeReviews = $enrollment;
        }

        return view('pages.course-details.course-details', compact('course', 'relatedCourses', 'canSeeReviews'));
    }
}
