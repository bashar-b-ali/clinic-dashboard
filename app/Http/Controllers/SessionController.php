<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SessionController extends Controller
{
    public function store(Request $request)
    {
        // Validate the user credentials
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect to home if successful
            $user = User::where('email', $request->email)->first();
            $user = Auth::loginUsingId($user->id, $remember = true);

            return redirect()->route('main');
        }

        // Redirect back with an error if not successful
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
