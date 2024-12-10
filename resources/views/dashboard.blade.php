<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Welcome to your Dashboard, {{ Auth::user()->name }}!</h2>
    <p>Here you can manage your account, view your courses, and more.</p>
    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
    </form>

    <!-- Add your dashboard content here -->
</div>
@endsection
