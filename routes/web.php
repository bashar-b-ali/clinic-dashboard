<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/', [PagesController::class, 'main'])->name('main');
    

    Route::get('/appointment', [PagesController::class, 'appointment'])->name('appointment');
    Route::get('/appointment/create', [PagesController::class, 'createAppointment'])->name('appointment.create');

    Route::get('/patients', [PatientController::class, 'index'])->name('patients');
    Route::get('/patient/{id}', [PatientController::class, 'show'])->name('patients.show');
    Route::get('/add-patient', [PatientController::class, 'addPatient'])->name('add-patient');
    Route::post('/store-patient', [PatientController::class, 'store'])->name('store-patient');
    Route::post('/update-patient', [PatientController::class, 'update'])->name('update-patient');
    Route::post('/delete-patient', [PatientController::class, 'destroy'])->name('delete-patient');
    Route::post('/patient-add-file', [PatientController::class, 'addFile'])->name('patient-add-file');
    
    Route::get('/personalize', [PagesController::class, 'personalize'])->name('personalize');
    Route::get('/appointment/{id}', [PagesController::class, 'getMonth']);

});

// Redirect to login if not authenticated
Route::get('/login', function () {
    return view('pages.user.login'); // Your login view
})->name('login');

Route::post('/login/user', [SessionController::class, 'store'])->name('log');

// Fallback route for guests
Route::get('/{any}', function () {
    return redirect()->route('login'); // Redirect all other requests to login
})->where('any', '.*');