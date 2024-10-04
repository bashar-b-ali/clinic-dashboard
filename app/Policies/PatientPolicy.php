<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Patients;

class PatientPolicy
{
    public function view(User $user, Patients $patient)
    {
        return $user->clinic_id === $patient->clinic_id || $user->role === 'admin';
    }

    public function update(User $user, Patients $patient)
    {
        return $user->role === 'admin';
    }

    public function viewTransactions(User $user, Patients $patient)
    {
        return $user->clinic_id === $patient->clinic_id || $user->role === 'admin';
    }
}