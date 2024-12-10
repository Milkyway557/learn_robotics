@extends('layouts.app')

@section('content')
    <section class="courses py-5">
        <div class="container">
            <h2 class="text-center mb-4">Available Courses</h2>
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <!-- Course Image -->
                            <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                            
                            <!-- Card Body -->
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title">{{ $course->title }}</h3>
                                <p class="card-text">{{ Str::limit($course->description, 100) }}</p>

                                <!-- Learn More Button -->
                                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary mt-auto">Learn More</a>

                                <!-- Take Course Button -->
                                @if(auth()->check() && !auth()->user()->courses->contains($course->id))
                                    <form action="{{ route('courses.take', $course->id) }}" method="POST" class="mt-3">
                                        @csrf
                                        <button type="submit" class="btn btn-success w-100">Take Course</button>
                                    </form>
                                @else
                                    <span class="badge bg-secondary mt-3">Already Enrolled</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
