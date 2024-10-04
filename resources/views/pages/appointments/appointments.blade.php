@extends('layouts.master')

@section('body')


    <div class="container-fluid mt-3">
        <div class="bg-theme-1-subtle rounded px-3 py-3">
            <div class="row gx-3 align-items-center">
                <div class="col-12 col-sm mb-2 mb-sm-0">
                    <p class="h5">Schedule by Staff</p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item bi"><a href="clinic-dashboard.html">Home</a></li>
                            <li class="breadcrumb-item active bi"><a href="clinic-schedule.html">Schedule</a></li>
                            <li class="breadcrumb-item active bi" aria-current="page">Schedule by Staff</li>
                        </ol>
                    </nav>
                </div>
                
                <div class="col-auto py-1"><a href="{{ route('appointment.create') }}" class="btn btn-theme"><i data-feather="plus" class="me-0 me-md-1"></i> <span class="d-none d-md-inline-block">Appointment</span></a></div>
            </div>
        </div>
    </div>

    <div class="container mt-4" id="main-content">
        <div class="row">
            <div class="col-12 col-md-12 col-xl-8 col-xxl-9 order-2 order-xl-1">
                <div class="card adminuiux-card mb-4">
                    <div class="card-body">
                        <div class="position-relative table-timestamp-wrap mb-4">
                            <table class="table table-scheduled-fixed-cell timepunch-table">
                                <thead>
                                    <tr>
                                        <th class="text-center align-middle fw-normal"><i class="bi bi-clock h5"></i></th>
                                        <th class>
                                            <div class="card border-0">
                                                <div class="card-body py-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <figure class="avatar avatar-50 coverimg rounded-circle"><img src="images/user-7.jpg" alt></figure>
                                                        </div>
                                                        <div class="col">
                                                            <p class="mb-1 h6">Dr. Smriti Vandana</p>
                                                            <p class="text-secondary small fw-normal">10:00am - 7:00pm</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <div id='calendar'></div>
                                <tbody class="position-relative">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="time-punch">10 AM</span></td>
                                        <td>
                                            <div class="card adminuiux-card bg-green-subtle status start" style="--aaptsminuts:60;">
                                                <div class="card-body"><span class="position-absolute top-0 end-0 badge bg-success p-1 m-1"><i class="bi bi-coin"></i> Paid</span>
                                                    <p class="mb-1 small fw-medium">10:00 am - 11:30 am</p>
                                                    <div class="row gx-2 mb-1">
                                                        <div class="col-auto"><img src="images/user-4.jpg" class="avatar avatar-20 rounded-circle" alt> <img src="https://i.pravatar.cc/300" class="avatar avatar-20 rounded-circle" alt></div>
                                                        <div class="col">Will Johnson</div>
                                                    </div>
                                                    <p class="mb-0 opacity-75 small text-truncated">High fever and cough</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="slot">
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td><span class="time-punch">30</span></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="time-punch">11 AM</span></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td><span class="time-punch">30</span></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="time-punch">12 PM</span></td>
                                        <td>
                                            <div class="card adminuiux-card bg-theme-1-space text-white status start" style="--aaptsminuts:60;">
                                                <div class="card-body"><span class="position-absolute top-0 end-0 badge bg-danger p-1 m-1"><i class="bi bi-coin"></i> Unpaid</span>
                                                    <p class="mb-1 small fw-medium">12:00 PM - 1:00 PM</p>
                                                    <div class="row gx-2 align-items-center mb-2">
                                                        <div class="col-auto"><span class="avatar avatar-20 rounded-circle"><img src="images/user-2.jpg" alt></span></div>
                                                        <div class="col">
                                                            <p class="mb-0">Alicia Deverak... <span class="badge text-bg-danger small">F</span></p>
                                                        </div>
                                                    </div>
                                                    <p class="small opacity-75">High fever and Vomiting</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="slot">
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td><span class="time-punch">30</span></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="time-punch">1 PM</span></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td><span class="time-punch">30</span></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td></td>
                                        <td>
                                            <div class="card adminuiux-card bg-danger-subtle text-danger-emphasis text-center status start" data-bs-toggle="tooltip" title="Unavailable" style="--aaptsminuts:30;">
                                                <div class="card-body d-flex align-items-center justify-content-center"><span>Unavailable</span></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="time-punch">2 PM</span></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td><span class="time-punch">30</span></td>
                                        <td>
                                            <div class="card adminuiux-card bg-primary-subtle status start" style="--aaptsminuts:30;">
                                                <div class="card-body">
                                                    <div class="row gx-2 mb-1">
                                                        <div class="col">
                                                            <p class="mw-100 text-truncate small mb-1 fw-medium">2:30 AM - 3:00 AM</p>
                                                        </div>
                                                        <div class="col-auto"><i class="text-theme-1 theme-red bi bi-coin h6" data-bs-toggle="tooltip" title="Unpaid"></i></div>
                                                        <div class="col-auto"><i class="bi bi-pencil text-secondary"></i></div>
                                                    </div>
                                                    <div class="row gx-2 mb-2">
                                                        <div class="col-auto"><span class="avatar avatar-20 rounded-circle me-1"><img src="images/user-3.jpg" alt></span></div>
                                                        <div class="col">
                                                            <p>Sweetu Sinha <span class="badge text-bg-danger mx-2">F</span></p>
                                                        </div>
                                                    </div>
                                                    <p class="small opacity-75">Vomiting Diaria</p>
                                                </div>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr class="slot">
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                        <td><span class="time-punch">3 PM</span></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td><span class="time-punch">30</span></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="time-punch">4 PM</span></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr class="slot">
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="slot">
                                        <td><span class="time-punch">30</span></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr class="slot">
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="time-punch">5 PM</span></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-xl-4 col-xxl-3 order-1 order-xl-2">
                <div class="row">
                    <div class="col-12 col-sm-6 col-xl-12 mb-4">
                        <p class="h6 mb-3">Select Date</p>
                        <div class="inlinewrap1 inline-calendar mx-auto"></div>
                        <input name="date" id="inlinewrap1" class="d-none">
                        <div id="content-area"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection


@section('js')
    <script src="{{ asset('assets/js/clinic-schedule-staff.js') }}"></script>
        
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/calender.js') }}"></script>
    <script src="{{ asset('assets/js/clinic-add-appointment.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#inlinewrap1').change(function() {
                var itemId = $(this).val();
        
                if (itemId) {
                    $('#content-area').html(itemId);
                } else {
                    $('#content-area').html(''); // Clear content if no item is selected
                }
            });
        });

    </script>
@endsection