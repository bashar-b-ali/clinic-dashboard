<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use App\Models\Clinics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    // Display a listing of appointments
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            $appointments = Appointment::with('clinic', 'user')->get();
        } else {
            $appointments = Appointment::where('clinic_id', $user->clinic_id)->get();
        }

        return view('appointments.index', compact('appointments'));
    }

    // Show the form for creating a new appointment
    public function create()
    {
        $clinics = Clinics::all();
        return view('appointments.create', compact('clinics'));
    }

    // Store a newly created appointment in storage
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'clinic_id' => 'required|exists:clinics,id',
            'user_id' => 'required|exists:users,id',
            'appointment_time' => 'required|date|after:now', // Ensure the time is in the future
            'description' => 'nullable|string',
        ]);

        // Check for conflicts with existing appointments
        $this->checkForConflicts($request->clinic_id, $request->appointment_time);

        // Create the appointment
        Appointment::create($request->all());
        return redirect()->route('appointments.index')->with('success', 'Appointment created successfully.');
    }

    // Show the specified appointment
    public function show(Appointment $appointment)
    {
        return view('appointments.show', compact('appointment'));
    }

    // Show the form for editing the specified appointment
    public function edit(Appointment $appointment)
    {
        $this->authorize('update', $appointment); // Check permissions
        $clinics = Clinics::all();
        return view('appointments.edit', compact('appointment', 'clinics'));
    }

    // Update the specified appointment in storage
    public function update(Request $request, Appointment $appointment)
    {
        // Validate the request
        $request->validate([
            'clinic_id' => 'required|exists:clinics,id',
            'user_id' => 'required|exists:users,id',
            'appointment_time' => 'required|date|after:now', // Ensure the time is in the future
            'description' => 'nullable|string',
        ]);

        // Check for conflicts with existing appointments, excluding the current appointment
        $this->checkForConflicts($request->clinic_id, $request->appointment_time, $appointment->id);

        // Update the appointment
        $appointment->update($request->all());
        return redirect()->route('appointments.index')->with('success', 'Appointment updated successfully.');
    }

    // Remove the specified appointment from storage
    public function destroy(Appointment $appointment)
    {
        $this->authorize('delete', $appointment); // Check permissions
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'Appointment deleted successfully.');
    }

    // Method to check for conflicting appointments
    private function checkForConflicts($clinicId, $appointmentTime, $excludeId = null)
    {
        $conflictingAppointment = Appointment::where('clinic_id', $clinicId)
            ->where('appointment_time', $appointmentTime)
            ->when($excludeId, function ($query) use ($excludeId) {
                return $query->where('id', '!=', $excludeId);
            })
            ->first();

        if ($conflictingAppointment) {
            // Handle the conflict, e.g., throw an exception or return a validation error
            throw new \Illuminate\Validation\ValidationException("The appointment time conflicts with an existing appointment.");
        }
    }
}