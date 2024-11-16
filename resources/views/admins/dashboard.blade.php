@extends('layouts.app1')

@section('content')
<!-- Service Details Section Start -->
<section class="service-dtails overflow-hidden section-padding-sm position-relative">
    <div class="container">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
            <h4 class="custom-title black mb-lg-3 mb-2">
                Admin Stats
            </h4>

            <div class="row justify-content-center g-xl-4 g-3 mb-60">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-white bg-primary h-100">
                        <div class="card-body d-flex align-items-center">
                            <div class="me-3">
                                <!-- Course Icon -->
                                <i class="fa fa-books" style="font-size: 2rem;"></i>
                            </div>
                            <div class="text-center">
                                <h5 class="card-title">Total Courses</h5>
                                <h3 class="text-white">{{ $courses->count() }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Students -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-white bg-success h-100">
                        <div class="card-body d-flex align-items-center">
                            <div class="me-3">
                                <!-- Student Icon -->
                                <i class="fa fa-users" style="font-size: 2rem;"></i>
                            </div>
                            <div class="text-center">
                                <h5 class="card-title">Total Students</h5>
                                <h3 class="text-white">{{ $students->count() }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Bookings -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-white bg-warning h-100">
                        <div class="card-body d-flex align-items-center">
                            <div class="me-3">
                                <!-- Booking Icon -->
                                <i class="fa fa-calendar-check" style="font-size: 2rem;"></i>
                            </div>
                            <div class="text-center">
                                <h5 class="card-title">Total Bookings</h5>
                                <h3 class="text-white">{{ $bookings->count() }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Teachers -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body d-flex align-items-center">
                            <div class="me-3">
                                <!-- Teacher Icon -->
                                <i class="fa fa-user" style="font-size: 2rem;"></i>
                            </div>
                            <div class="text-center">
                                <h5 class="card-title">Total Teachers</h5>
                                <h3 class="text-white">{{ $teachers->count() }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
@endsection
