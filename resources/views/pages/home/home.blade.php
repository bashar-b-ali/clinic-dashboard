@extends('layouts.master')

@section('body')

<div class="container mt-4" id="main-content">
    <div class="row align-items-center">
        <div class="col-12 col-lg-8 mb-4 mb-lg-5">
            <div class="row align-items-center">
                <div class="col-12 col-sm-auto mb-3 mb-sm-0">
                    <figure class="avatar avatar-120 coverimg rounded-circle"><img src="images/user-6.jpg" alt></figure>
                </div>
                <div class="col-12 col-sm">
                    <h5 class="mb-0">Good Morning!</h5>
                    <h1 class="text-theme-1">Dr. Alice</h1>
                    <p class="text-secondary mb-0">"If we want users to like our software, we should design it to behave like a likable person: respectful, generous, and helpful" <span class>- Alan Cooper</span></p>
                </div>
            </div>
        </div>
        <div class="col-100 col-lg-4 mb-4 text-end"><a href="{{route('add-patient') }}" class="btn btn-theme"><i data-feather="plus" class="me-1"></i>Add Patient</a></div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6 col-xxl-3 mb-4">
            <div class="card adminuiux-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar avatar-50 text-center rounded bg-success-subtle text-success-emphasis"><i class="bi bi-people fs-4"></i></div>
                        </div>
                        <div class="col px-0">
                            <p class="h4 mb-0">1320</p>
                            <p class="text-secondary small">Patients</p>
                        </div>
                        <div class="col-auto">
                            <div class="summarychart height-50 width-60"><canvas id="areachartgreen1"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3 mb-4">
            <div class="card adminuiux-card">
                <div class="card-body">
                    <div class="row gx-3 align-items-center">
                        <div class="col-auto">
                            <div class="avatar avatar-50 text-center rounded bg-info-subtle text-info-emphasis"><i class="bi bi-person-badge fs-4"></i></div>
                        </div>
                        <div class="col">
                            <p class="h4 mb-0">20</p>
                            <p class="text-secondary small">Active Staff</p>
                        </div>
                        <div class="col-auto">
                            <div class="summarychart height-50 width-60"><canvas id="areachartblue1"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3 mb-4">
            <div class="card adminuiux-card">
                <div class="card-body">
                    <div class="row gx-3 align-items-center">
                        <div class="col-auto">
                            <div class="avatar avatar-50 text-center rounded bg-warning-subtle text-warning-emphasis"><i class="bi bi-hospital fs-4"></i></div>
                        </div>
                        <div class="col">
                            <p class="h4 mb-0">1320</p>
                            <p class="text-secondary small">+ 75 Rooms</p>
                        </div>
                        <div class="col-auto">
                            <div class="summarychart height-50 width-60"><canvas id="areachartyellow1"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3 mb-4">
            <div class="card adminuiux-card">
                <div class="card-body">
                    <div class="row gx-3 align-items-center">
                        <div class="col-auto">
                            <div class="avatar avatar-50 text-center rounded bg-danger-subtle text-danger-emphasis"><i class="bi bi-calendar-week fs-4"></i></div>
                        </div>
                        <div class="col">
                            <p class="h4 mb-0">820</p>
                            <p class="text-secondary small">Bookings</p>
                        </div>
                        <div class="col-auto">
                            <div class="summarychart height-50 width-60"><canvas id="areachartred1"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-12 col-lg-12 col-xxl-12 ">
            <div class="card adminuiux-card mb-4">
                <div class="card-body">
        
                    <canvas id="myChart" style="width: 50%;"></canvas>
        
                </div>
            </div>
        </div>
        
    </div>
</div>



@endsection


@section('js')

    <script src="{{ asset('assets/js/clinic-dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>

    <script>
        var xValues = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        var yValues = [101, 49, 44, 24, 15];

        new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            
            datasets: [{
            data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
            display: true,
            }
        }
        });
    </script>

@endsection