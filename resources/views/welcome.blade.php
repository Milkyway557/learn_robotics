@extends('layouts.app')

@section('content')
    <section class="hero">
        <h2>Build the Future with Robotics</h2>
        <p>Take our advanced courses and start building your own robots today!</p>
        <a href="{{ route('courses') }}" class="btn">View Courses</a>
    </section>

    <section class="courses">
        <h2>Our Courses</h2>
        <div class="course-grid">
            <div class="course-card">
                <img src="{{ asset('images/course1.jpg') }}" alt="Course 1">
                <h3>Introduction to Arduino</h3>
                <p>Learn how to build and program robots using Arduino boards.</p>
            </div>
            <div class="course-card">
                <img src="{{ asset('images/course2.jpg') }}" alt="Course 2">
                <h3>Advanced Robotics</h3>
                <p>Master the art of building complex robots using various sensors and actuators.</p>
            </div>
            <div class="course-card">
                <img src="{{ asset('images/course3.jpg') }}" alt="Course 3">
                <h3>AI in Robotics</h3>
                <p>Understand how AI algorithms enhance robot functionality and automation.</p>
            </div>
        </div>
    </section>
@endsection
