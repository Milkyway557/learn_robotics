<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function show()
    {
        // Get the logged-in user
        $user = Auth::user();

        // Load the courses the user has enrolled in
        $courses = $user->courses;

        // Pass the user and courses to the view
        return view('account', compact('user', 'courses'));
    }
}
