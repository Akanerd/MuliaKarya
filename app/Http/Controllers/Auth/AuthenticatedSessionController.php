<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
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

        $url = "";
        if ($request->user()->role === "admin") {
            $url = "admin/dashboard";
        } elseif ($request->user()->role === "user") {
            $url = "customer/dashboard";
        }

        return redirect()->intended($url);

        // return redirect()->intended(RouteServiceProvider::HOME);
    }

    // protected function loggedOut(Request $request)
    // {
    //     // Custom logic after the user logs out
    //     // For example, you can add a flash message
    //     $request->session()->flash('success', 'You have been successfully logged out.');

    //     // Or you can perform additional actions, like redirecting to a specific page
    //     return redirect('/');
    // }
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Auth::guard('web')->logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        // return $this->loggedOut($request) ?: redirect('/');

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // return $this->loggedOut($request) ?: redirect('/');

        return redirect('/');
    }
}
