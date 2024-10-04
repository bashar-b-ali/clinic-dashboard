<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function view(User $authUser, User $user)
    {
        // Admin can view any user
        if ($authUser->role === 'admin') {
            return true;
        }

        // Users can view their own profile
        return $authUser->id === $user->id;
    }

    public function create(User $authUser)
    {
        return $authUser->role === 'admin'; // Only admin can create users
    }

    public function update(User $authUser, User $user)
    {
        // Admin can edit any user
        if ($authUser->role === 'admin') {
            return true;
        }

        // Users can edit their own profile
        return $authUser->id === $user->id;
    }

    public function delete(User $authUser, User $user)
    {
        return $authUser->role === 'admin'; // Only admin can delete users
    }
}
