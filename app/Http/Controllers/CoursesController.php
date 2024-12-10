<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CoursesController extends Controller
{
    public function index()
    {
        // Fetch all courses
        $courses = Course::all();
        
        // Return the courses view and pass the courses data
        return view('courses.index', compact('courses'));
    }

    public function show($id)
    {
        // Fetch a single course by ID
        $course = Course::findOrFail($id);

        // Return the view with the course data
        return view('courses.show', compact('course'));
    }
}
