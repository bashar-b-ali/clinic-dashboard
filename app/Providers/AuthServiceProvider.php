<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Clinics;
use App\Policies\ClinicPolicy;
use App\Models\Appointment;
use App\Policies\AppointmentPolicy;
use App\Models\User;
use App\Policies\UserPolicy;
use App\Models\Patients;
use App\Policies\PatientPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Clinics::class => ClinicPolicy::class,
        User::class => UserPolicy::class,
        Appointment::class => AppointmentPolicy::class,
        Patients::class => PatientPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        //
    }
}
