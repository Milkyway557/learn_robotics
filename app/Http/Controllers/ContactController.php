<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show the contact form
    public function show()
    {
        return view('cources.contact'); // Adjust the view path as needed
    }

    // Handle the form submission
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Here you can handle the contact form data, such as sending an email or saving it to the database

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}
