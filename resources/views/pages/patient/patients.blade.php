@extends('layouts.master')

@section('body')

    <div class="container-fluid mt-3">
        <div class="bg-theme-1-subtle rounded px-3 py-3">
            <div class="row gx-3 align-items-center">
                <div class="col col-sm mb-2 mb-sm-0">
                    <p class="h5">Patients</p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item bi"><a href="{{ route('main') }}">Home</a></li>
                            <li class="breadcrumb-item active bi" aria-current="page">Patients</li>
                        </ol>
                    </nav>
                </div>
                    <div class="col-auto py-1">
                        <a href="javascript:void(0)" class="btn btn-theme create-patient" data-bs-toggle='modal' data-bs-target='#add-one-row'>
                            <i data-feather="plus" class="me-0 me-md-1"></i> <span class="d-none d-md-inline-block"> Add Patient </span>
                        </a>
                    </div>
                    
            </div>
        </div>
    </div>


    <div class="container" id="main-content">

        <div class="card adminuiux-card mt-4 mb-4">
            <div class="card-body">
                <table id="myDataTable" class="table w-100 nowrap">
                    <thead>
                        <tr>
                            <th class="all">ID</th>
                            <th data-breakpoints="xs sm">Patient</th>
                            <th data-breakpoints="xs sm md">Contact info</th>
                            <th class="all">Recent Schedule</th>
                            <th data-breakpoints="xs sm">Status</th>
                            <th class="all">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $patient)
                            <tr>
                                <td>
                                    {{ $patient->id }}
                                </td>


                                <td>
                                    <div class="row align-items-center flex-nowrap">
                                        <div class="col-auto">
                                        </div>
                                        <div class="col ps-0">
                                            <p class="mb-0 fw-medium">{{ $patient->name }}</p>
                                            <p class="text-secondary small">DOB: {{ $patient->dob }}</p>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <p class="mb-0">{{ $patient->phone }}</p>
                                    <p class="text-secondary small">{{ $patient->email }}</p>
                                </td>


                                <td>
                                    <p class="mb-0">9:10 AM - 9 June 2024</p>
                                    <p class="text-secondary small">Allergies -Dr. Ryan Sylia</p>
                                </td>


                                <td>
                                    <span class="badge badge-light rounded-pill text-bg-warning">
                                        Pending
                                    </span>
                                </td>


                                <td>

                                    <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-square btn-link" data-bs-toggle="tooltip" title="View">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <div class="dropdown d-inline-block">

                                        <a class="btn btn-link no-caret" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-end">

                                            <li>
                                                <a class="dropdown-item edit-patient" href="javascript:void(0)" 
                                                    data-id="{{ $patient->id }}" 
                                                    data-name="{{ $patient->name }}" 
                                                    data-dob="{{ $patient->dob }}" 
                                                    data-phone="{{ $patient->phone }}" 
                                                    data-email="{{ $patient->email }}" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#edit-one-row">
                                                        Edit
                                                </a>
                                             
                                            </li>

                                            <li>
                                                <a class="dropdown-item theme-red delete-patient" href="javascript:void(0)" 
                                                    data-id="{{ $patient->id }}" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#delete-one-row">
                                                    Delete
                                                </a>
                                            </li>
                                            
                                        </ul>
                                        
                                    </div>

                                </td>


                            </tr>    
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <div class="modal fade adminuiux-modal" id="add-one-row" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content">
                <div class="modal-header">
                    <p class="h6">Add New Patient</p>
                </div>
                <form action="{{ route('store-patient') }}" method="POST" class="request-form">
                    @csrf
                    <div class="modal-body d-block">
                        <div class="row mb-2">
                            <div class="col-12 col-lg-12 col-xl-12">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="a-name" name="name" placeholder="Enter Patient First Name" value="" required> <label for="e-name">Patient Name</label>
                                </div>
                            </div>
                            
                            <div class="col-12 col-lg-6 col-xl-6">
                                <div class="form-floating mb-3"><input class="form-control" type="date" id="a-dob" name="dob" placeholder="Select Birthday"> <label for="e-dob">Select Birthday</label></div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-6">
                                <div class="form-floating mb-3"><input class="form-control" type="number" id="a-phone" name="phone" placeholder="Enter phone" required> <label for="e-phone">Enter Phone</label></div>
                            </div>
                            <div class="col-12 col-lg-12 col-xl-12">
                                <div class="form-floating mb-3"><input class="form-control" type="email" id="a-email" name="email" placeholder="Enter Email Address" value=""> <label for="e-email">Email Address</label></div>
                            </div>
                        </div>

                        
                        <div class="row mt-4">
                            <div class="col">
                                <button class="btn btn-link" type="button" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="bi bi-trash h4 me-2"></i> Discard
                                </button>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-theme" type="submit">
                                    <i class="bi bi-send me-2"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    
    <div class="modal fade adminuiux-modal" id="edit-one-row" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content">
                <div class="modal-header">
                    <p class="h6">Edit Patient Info</p>
                </div>
                <form action="{{ route('update-patient') }}" method="POST" class="request-form">
                    @csrf
                    <input type="hidden" name="id" id="e-id">
                    <div class="modal-body d-block">
                        <div class="row mb-2">
                            <div class="col-12 col-lg-12 col-xl-12">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="e-name" name="name" placeholder="Enter Patient First Name" value="" required> <label for="e-name">Patient Name</label>
                                </div>
                            </div>
                            
                            <div class="col-12 col-lg-6 col-xl-6">
                                <div class="form-floating mb-3"><input class="form-control" type="date" id="e-dob" name="dob" placeholder="Select Birthday"> <label for="e-dob">Select Birthday</label></div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-6">
                                <div class="form-floating mb-3"><input class="form-control" type="number" id="e-phone" name="phone" placeholder="Enter phone" required> <label for="e-phone">Enter Phone</label></div>
                            </div>
                            <div class="col-12 col-lg-12 col-xl-12">
                                <div class="form-floating mb-3"><input class="form-control" type="email" id="e-email" name="email" placeholder="Enter Email Address" value=""> <label for="e-email">Email Address</label></div>
                            </div>
                        </div>

                        
                        <div class="row mt-4">
                            <div class="col">
                                <button class="btn btn-link" type="button" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="bi bi-trash h4 me-2"></i> Discard
                                </button>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-theme" type="submit">
                                    <i class="bi bi-send me-2"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="modal fade adminuiux-modal" id="delete-one-row" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content">
                <div class="modal-header">
                    <p class="h6">Delete Patient</p>
                </div>
                <form action="{{ route('delete-patient') }}" method="POST" class="request-form">
                    @csrf
                    <input type="hidden" id="d-id" name="id">
                    <div class="modal-body d-block">
                        <div class="row mb-2">
                            <div class="alert alert-danger" role="alert">
                                Are you sure you want to remove this patient?
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <button class="btn btn-link" type="button" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="bi bi-trash h4 me-2"></i> Cancel
                                </button>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-theme" type="submit">
                                    <i class="bi bi-send me-2"></i> Remove
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

@endsection


@section('js')
        
    <script src="{{ asset('assets/js/costume/patients-table.js') }}"></script>
    <script src="{{ asset('assets/js/costume/send-request.js') }}"></script>   
    
@endsection