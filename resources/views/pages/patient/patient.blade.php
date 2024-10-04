@extends('layouts.master')

@section('body')


    @include('layouts.breadcrumb.breadcrumb', with([
        'page_title' =>  $patient->name ,
        'parent_page' => "Patients",
        'parent_link' => route('patients'),
        'plus' => "",
        'plus_title' => ""
    ]))

<div class="container mt-4" id="main-content">
    <div class="card adminuiux-card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-auto text-center mb-3 mb-md-0">
                    <figure class="avatar avatar-120 mb-0 coverimg rounded-circle"><img src="images/user-6-kid.jpg" alt></figure>
                </div>
                <div class="col-12 col-sm text-center text-sm-start">
                    <div class="row mb-2">
                        <div class="col-12 col-sm mb-3 mb-sm-0">
                            <p class="h4 style-none">Alicia Smith</p>
                            <p><span class="badge badge-light rounded-pill text-bg-theme-accent-1">Revisit</span> <span class="badge badge-light rounded-pill text-bg-theme-accent-1">VIP</span></p>
                        </div>
                        <div class="col-12 col-sm-auto"><button class="btn btn-square btn-outline-success mx-2" data-bs-toggle="tooltip" aria-label="Call" title="Call"><i data-feather="phone"></i></button> <button class="btn btn-square btn-outline-warning" data-bs-toggle="tooltip"
                                aria-label="Message" title="Message"><i data-feather="message-circle"></i></button></div>
                    </div>
                    <p class="text-secondary">12, Featherstone Street, Ward, London, NG25 5AY<br>United Kingdom</p>
                </div>
            </div>
        </div>
        <div class="card-footer border-top">
            <div class="row align-items-center">
                <div class="col-auto">
                    <p class="h5">19 <small>yr</small></p>
                    <p class="text-secondary small"><i class="bi bi-cake me-1"></i> 26-04-2006</p>
                </div>
                <div class="col-auto">
                    <p class="h5">A+</p>
                    <p class="text-secondary small"><i class="bi bi-droplet-half"></i> Blood Group</p>
                </div>
                <div class="col-auto">
                    <p class="h5">38</p>
                    <p class="text-secondary small"><i class="bi bi-speedometer"></i> Weight</p>
                </div>
                <div class="col-12 col-md-auto ms-auto mt-4 mt-md-0">
                    <div class="row">
                        <div class="col-auto">
                            <div class="avatar avatar-50 bg-theme-1-subtle text-theme-accent-1 rounded"><i class="bi bi-calendar-week fs-4"></i></div>
                        </div>
                        <div class="col">
                            <p class="h5">9:30 AM, Today</p>
                            <p class="text-secondary small">Upcoming 2 min to go</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card adminuiux-card bg-orange-subtle">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <div class="avatar avatar-50 bg-white text-danger-emphasis rounded"><i class="bi bi-heart-pulse fs-4"></i></div>
                        </div>
                        <div class="col">
                            <p class="h4 mb-0">80 <small class="opacity-50 h6 fw-normal">bpm</small></p>
                            <p class="opacity-50">HeartBeat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card adminuiux-card bg-yellow-subtle">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <div class="avatar avatar-50 bg-white text-warning-emphasis rounded"><i class="bi bi-thermometer-half fs-4"></i></div>
                        </div>
                        <div class="col">
                            <p class="h4 mb-0">30.7<sup>&deg;</sup> <small class="opacity-50 h6 fw-normal">C</small></p>
                            <p class="opacity-50">Temp.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card adminuiux-card bg-cyan-subtle">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <div class="avatar avatar-50 bg-white text-info-emphasis rounded"><i class="bi bi-droplet-half fs-4"></i></div>
                        </div>
                        <div class="col">
                            <p class="h4 mb-0">98 <small class="opacity-50 h6 fw-normal">%</small></p>
                            <p class="opacity-50">Oxygen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card adminuiux-card bg-pink-subtle">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <div class="avatar avatar-50 bg-white text-pink-emphasis rounded"><i class="bi bi-boxes fs-4"></i></div>
                        </div>
                        <div class="col">
                            <p class="h4 mb-0">65 <small class="opacity-50 h6 fw-normal">mg/dl</small></p>
                            <p class="opacity-50">Glucose</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($files as $file)
            <img src="{{ URL::asset('storage/'.$file->file) }}" alt="" srcset="">
        @endforeach
        
        <form action="{{ route('patient-add-file') }}" class="request-form" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="id" value="{{ $patient->id }}" hidden>
            <div class="mb-3">
                <input class="form-control" type="file" name="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" required>
            </div>
        
            <button type="submit" class="btn btn-outline-theme">Submit</button>
        </form>

    </div>
</div>

@endsection


@section('js')
    <script src="{{ asset('assets/js/clinic-schedule-staff.js') }}"></script>
        
    <script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/calender.js') }}"></script>
    <script src="{{ asset('assets/js/clinic-add-appointment.js') }}"></script>

    <script src="{{ asset('assets/js/costume/send-request.js') }}"></script>   

@endsection