<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialTransaction extends Model
{
    use HasFactory;

    protected $fillable = ['patient_id', 'user_id', 'amount',];

    public function patient()
    {
        return $this->belongsTo(Patients::class);
    }

    // Define the relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
