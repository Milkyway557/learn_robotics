@extends('layouts.app')

@section('content')
    <section class="course-detail">
        <h2>{{ $course->title }}</h2>
        <img src="{{ asset('images/' . $course->image) }}" alt="{{ $course->title }}">
        <p>{{ $course->description }}</p>
    </section>
@endsection
