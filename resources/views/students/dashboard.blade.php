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
                Schedule A Class
            </h4>

            <div class="row justify-content-center g-xl-4 g-3 mb-60">
                @foreach($courses as $key => $course)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <a href="{{ route('student.courses.schedules', ['course' => $course->id]) }}">
                            <div class="details-thumb-middile w-100">
                                <img src="{{ url('storage/images/'.$course->image) }}" alt="img" class="w-100 round10">
                            </div>
                            <div class="mt-2">
                                <h5>{{ $course->title }}</h5>
                            </div>

                            <div>
                                <div>
                                    <h6>
                                    <span>${{ number_format($course->amount_usd, 2) }}, &#8358;{{ number_format($course->amount_ngn, 2) }}</span>
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- <a href="{{ route('student.courses.schedules', ['course' => $course->id]) }}"> Explore Class
                    </a> --}}
                @endforeach

            </div>

            <h4 class="custom-title black mb-lg-3 mb-2">
                My Bookings
            </h4>

            <div class="row justify-content-center g-xl-4 g-3 mb-60">
                <table class="table table-striped text-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Class</th>
                            <th>Start time</th>
                            <th>End time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($bookings->count() > 0)
                            @foreach($bookings as $key => $booking)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $booking->courseSchedule->course->title }}</td>
                                    <td>{{ \Carbon\Carbon::parse($booking->courseSchedule->start_time)->format('l g:i A') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($booking->courseSchedule->end_time)->format('l g:i A') }}</td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm"> Join Session</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <p class="text-danger">No confirmed bookings yet</p>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>
@endsection
