@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4">Create a New Course</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Course Title:</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea id="description" name="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Course Image (optional):</label>
                <input type="file" id="image" name="image" class="form-control" accept="image/*">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Create Course</button>
            </div>
        </form>
    </div>
@endsection
