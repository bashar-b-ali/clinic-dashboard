@extends('layouts.master')

@section('body')

    @include('layouts.breadcrumb.breadcrumb', with([
        'page_title' => "Add Patient",
        'parent_page' => "Patients",
        'parent_link' => route('patients'),
        'plus' => "",
        'plus_title' => ""
    ]))

    <div class="container mt-4" id="main-content">
        <form action="{{ route('store-patient') }}" method="POST" class="request-form">
            @csrf
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xxl-8">
                    <div class="card adminuiux-card mb-4">
                        <div class="card-body">
                            <p class="h6 mb-3">Patient Details</p>
                            <div class="row mb-2">
                                <div class="col-12 col-lg-12 col-xl-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="patientname" name="name" placeholder="Enter Patient First Name" value="" required> <label for="patientname">Patient Name</label>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-lg-6 col-xl-6">
                                    <div class="form-floating mb-3"><input class="form-control" type="date" name="dob" id="dobdate" placeholder="Select Birthday"> <label for="dobdate">Select Birthday</label></div>
                                </div>
                                <div class="col-12 col-lg-6 col-xl-6">
                                    <div class="form-floating mb-3"><input class="form-control" type="number" id="phoneon" name="phone" placeholder="Enter phone" value="09" required> <label for="phoneon">Enter Phone</label></div>
                                </div>
                                <div class="col-12 col-lg-12 col-xl-12">
                                    <div class="form-floating mb-3"><input type="email" class="form-control" type="email" name="email" id="emailaddresson" placeholder="Enter Email Address" value=""> <label for="emailaddresson">Email Address</label></div>
                                </div>
                            </div>
                            <p class="h6 mb-3">Describe permanent health issues</p>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <div class="form-floating mb-3"><input class="form-control" name="description" id="healthissue" placeholder=""> <label for="healthissue">Health Issue in few words</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12 col-xxl-4">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xxl-12 mb-4">
                            <p class="h6 mb-3">Personal Documents</p>



                            <p class="text-secondary small">Upload only .jpeg, .png, .mp4, .mpeg4 file format max. file size 6MB</p>
                        </div>
                    </div>
                </div>
            </div>


            

            <div class="mb-4">
                <div class="row">
                    <div class="col">
                        
                        <button type="submit" class="btn btn-outline-accent my-2 mx-2">
                            <i class="bi bi-floppy me-2"></i>Submit
                        </button>
                    
                    </div>
                    <div class="col-auto"><button class="btn btn-link my-2" data-bs-toggle="modal" data-bs-target="#modalcancel">Cancel</button></div>
                </div>
            </div>
        </form>
        
    </div>

@endsection


@section('js')

<script src="{{ asset('assets/js/clinic-schedule-staff.js') }}"></script>
        

    <script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/clinic-add-patient.js')}}"></script>
    <script src="{{ asset('assets/js/costume/sweetalert.js') }}"></script>
    <script src="{{ asset('assets/js/costume/send-request.js') }}"></script>   
    

       
@endsection