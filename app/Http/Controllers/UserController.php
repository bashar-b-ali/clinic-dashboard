<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clinics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // Display a listing of users based on roles and clinics
    public function index()
    {
        $user = auth()->user();

        if ($user->role === 'admin') {
            // Admin can view all users in all clinics
            $users = User::with('clinic')->get();
        } elseif ($user->role === 'doctor') {
            // Doctor can view only their receptionists in their clinic
            $users = User::where('role', 'receptionist')
                          ->where('clinic_id', $user->clinic_id)
                          ->get();
        } else {
            // Other users can view only their own profile
            $users = User::where('id', $user->id)->get();
        }

        return view('users.index', compact('users'));
    }

    // Show the form for creating a new user
    public function create()
    {
        $this->authorize('create', User::class); // Only admin can create users
        $clinics = Clinics::all(); // Fetch all clinics for selection
        return view('users.create', compact('clinics'));
    }

    // Store a newly created user in storage
    public function store(Request $request)
    {
        $this->authorize('create', User::class); // Only admin can create users

        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:admin,receptionist,doctor',
            'clinic_id' => 'required|exists:clinics,id', // Ensure the clinic exists
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'clinic_id' => $request->clinic_id,
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // Show the specified user
    public function show(User $user)
    {
        $this->authorize('view', $user); // Check if the user can view the profile
        return view('users.show', compact('user'));
    }

    // Show the form for editing the specified user
    public function edit(User $user)
    {
        // Admin can edit any user; others can only edit their own profile
        if (auth()->user()->cannot('update', $user)) {
            abort(403);
        }

        $clinics = Clinics::all(); // Fetch clinics for selection
        return view('users.edit', compact('user', 'clinics'));
    }

    // Update the specified user in storage
    public function update(Request $request, User $user)
    {
        // Admin can update any user; others can only update their own profile
        if (auth()->user()->cannot('update', $user)) {
            abort(403);
        }

        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'role' => 'required|string|in:admin,receptionist,doctor',
            'clinic_id' => 'required|exists:clinics,id', // Ensure the clinic exists
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update the user
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'clinic_id' => $request->clinic_id,
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    // Remove the specified user from storage
    public function destroy(User $user)
    {
        $this->authorize('delete', $user); // Only admin can delete users
        $user->delete(); // Delete the user
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}