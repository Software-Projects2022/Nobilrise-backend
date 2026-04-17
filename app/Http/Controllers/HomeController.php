<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ClientTestimonial;
use App\Models\PsychologicalSession;
use App\Models\Service;
use App\Models\Setting;
use App\Models\TrainingCourse;
use App\Models\TrainingCourseCategory;

class HomeController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        $services = Service::all();
        $courses = TrainingCourse::with('trainingCourseCategory')->get();
        $courseCategories = TrainingCourseCategory::all();
        $sessions = PsychologicalSession::with('psychologicalSessionCategory')->get();
        $testimonials = ClientTestimonial::all();
        $about = About::first();
        $settings = Setting::first();

        return view('pages.home', compact('services', 'courses', 'courseCategories', 'sessions', 'testimonials', 'about', 'settings'));
    }
}
