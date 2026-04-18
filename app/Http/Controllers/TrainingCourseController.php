<?php

namespace App\Http\Controllers;

use App\Models\PsychologicalSession;
use App\Models\TrainingCourse;
use App\Models\TrainingCourseCategory;

class TrainingCourseController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        $courses = TrainingCourse::with('trainingCourseCategory')->get();
        $categories = TrainingCourseCategory::all();
        $sessions = PsychologicalSession::with('psychologicalSessionCategory')->get();

        return view('pages.training-courses.training-courses', compact('courses', 'categories', 'sessions'));
    }

    public function show(int $id): \Illuminate\View\View
    {
        $course = TrainingCourse::with(['trainingCourseCategory', 'reviews'])->findOrFail($id);
        $relatedCourses = TrainingCourse::where('id', '!=', $id)->limit(3)->get();

        return view('pages.course-details.course-details', compact('course', 'relatedCourses'));
    }
}
