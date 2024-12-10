@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Account Info Card -->
                <div class="card shadow-lg border-0">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <h2>Welcome, {{ auth()->user()->name }}!</h2>
                            <p class="text-muted">Your account information and courses are listed below.</p>
                        </div>

                        <!-- User Info -->
                        <div class="mb-4">
                            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                            <p><strong>Joined On:</strong> {{ auth()->user()->created_at->format('M d, Y') }}</p>
                        </div>

                        <!-- Your Courses -->
                        <h4>Your Courses</h4>
                        <div class="mb-4">
                            @if ($user->courses->count() > 0)
                                <ul class="list-group">
                                    @foreach ($user->courses as $course)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span>{{ $course->title }}</span>
                                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-outline-primary btn-sm">View</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-muted">You haven't enrolled in any courses yet.</p>
                            @endif
                        </div>

                        <!-- Logout Button -->
                        <div class="text-center">
                            <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
