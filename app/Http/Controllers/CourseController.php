<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function takeCourse($courseId)
    {
        $user = auth()->user();
        $course = Course::findOrFail($courseId);

        if (!$user->courses->contains($courseId)) {
            $user->courses()->attach($courseId); // Add the course to the user's list
            return redirect()->back()->with('success', 'You have successfully enrolled in the course!');
        }

        return redirect()->back()->with('error', 'You are already enrolled in this course.');
    }

    // List all courses
    public function index()
    {
        $courses = Course::all(); // Fetch all courses
        return view('courses.index', compact('courses'));
    }

    // Show a specific course
    public function show($id)
    {
        $course = Course::findOrFail($id); // Find the course or throw a 404
        return view('courses.show', compact('course'));
    }

    // Show the form for creating a new course
    public function create()
    {
        return view('courses.create');
    }

    // Store a new course in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
           
            $imagePath = $request->file('image')->storeAs('public/images', $imageName);

        }

        Course::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $imagePath,
        ]);

        return redirect()->route('courses.index')->with('success', 'Course created successfully!');
    }
}
