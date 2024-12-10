@extends('layouts.app')

@section('content')
    <h1>All Courses</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="course-grid">
        @foreach ($courses as $course)
            <div class="course-card">
                <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}">
                <h3>{{ $course->title }}</h3>
                <p>{{ $course->description }}</p>
            </div>
        @endforeach
    </div>
@endsection
