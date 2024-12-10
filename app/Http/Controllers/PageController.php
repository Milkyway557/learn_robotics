<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Home page
    public function index()
    {
        $courses = Course::all(); // Fetch all courses
        return view('courses.index', compact('courses'));
    }

    // Services page
    public function services()
    {
        return view('courses.services');
    }

    // Contact page
    public function contact()
    {
        return view('courses.contact');
    }
}
