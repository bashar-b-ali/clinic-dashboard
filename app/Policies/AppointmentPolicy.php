<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Appointment;

class AppointmentPolicy
{
    public function view(User $user, Appointment $appointment)
    {
        return $user->role === 'admin' || $user->clinic_id === $appointment->clinic_id;
    }

    public function create(User $user)
    {
        return $user->role === 'admin' || $user->role === 'doctor' || $user->role === 'receptionist';
    }

    public function update(User $user, Appointment $appointment)
    {
        return $user->role === 'admin' || $user->clinic_id === $appointment->clinic_id;
    }

    public function delete(User $user, Appointment $appointment)
    {
        return $user->role === 'admin' || $user->clinic_id === $appointment->clinic_id;
    }
}