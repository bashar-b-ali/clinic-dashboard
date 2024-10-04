<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientFiles extends Model
{
    use HasFactory;

    protected $fillable = ['patient_id', 'file_type', 'file'];

    public function patient()
    {
        return $this->belongsTo(Patients::class);
    }
}
