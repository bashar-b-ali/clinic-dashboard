<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinics;

class ClinicsController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Clinics::class);

        $clinics = Clinics::with('users')->get(); 
        
        return view('clinics.index', compact('clinics'));
    }
}
