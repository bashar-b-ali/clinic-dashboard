<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Clinics;

class ClinicPolicy
{
    public function viewAny(User $user)
    {
        return $user->role === 'admin'; 
    }

    public function view(User $user, Clinics $clinic)
    {
        return $user->role === 'admin'; 
    }
}
