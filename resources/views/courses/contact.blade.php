@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <!-- Title -->
        <h1 class="text-center mb-5">Contact Us</h1>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Contact Form -->
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-body">
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf <!-- CSRF Token for security -->
                            
                            <!-- Full Name -->
                            <div class="mb-4">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>

                            <!-- Email Address -->
                            <div class="mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>

                            <!-- Message -->
                            <div class="mb-4">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
