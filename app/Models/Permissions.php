<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;

    
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_permission');
    }
}
