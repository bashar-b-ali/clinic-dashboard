<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'dob'];

    // Define the relationship to the PatientFile model
    public function files()
    {
        return $this->hasMany(PatientFiles::class);
    }

    public function transactions()
    {
        return $this->hasMany(FinancialTransaction::class);
    }
}
