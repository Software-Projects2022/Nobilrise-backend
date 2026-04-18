<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Value;

class AboutController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        $about = About::first();
        $values = Value::all();

        return view('pages.about.about', compact('about', 'values'));
    }
}
