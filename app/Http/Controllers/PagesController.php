<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patients;

class PagesController extends Controller
{
    public function main() {

        
        return view('pages.home.home');
    }

    public function appointment() {
        $user = User::get();
        
        return view('pages.appointments.appointments');
    }


    public function personalize() {

        
        return view('pages.personalize.personalize');
    }

    public function login() {

        
        return view('pages.user.login');
    }
}
