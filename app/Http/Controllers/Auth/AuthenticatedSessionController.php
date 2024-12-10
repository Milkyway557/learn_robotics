<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{

    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
        
    $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($request->only('email', 'password'))) {
        $request->session()->regenerate();

        // Redirect user to the custom dashboard after login
        return redirect()->intended('/dashboard');  // Redirect to /dashboard or your preferred route
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
    }

    /**
     * Destroy an authenticated session.
     */
   // app/Http/Controllers/Auth/AuthenticatedSessionController.php

public function destroy(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Redirect to the home page after logout
    return redirect('/');  // Or redirect to any page you prefer
}

}
