<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, View;

class AdminController extends Controller
{
    /**
     * Validates and attempts admin authentication
     *
     * @param  \Illuminate\Http\Request|null  $request
     * @return response
     */
    public function authenticate(Request $request)
    {
        $adminCredentials = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required']
        ]);

        if (Auth::guard('admin')->attempt($adminCredentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Admin logout
     *
     * @return response
     */
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }

    /**
     * Get admin dashboard
     *
     * @return view
     */
    public function dashboard()
    {
        return View::make('admin.dashboard');
    }
}
