@extends('layouts.app1')

@section('content')
<!-- Service Details Section Start -->
<section class="service-dtails overflow-hidden section-padding-sm position-relative">
    <div class="container card p-4 shadow">

        <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
            <h4 class="custom-title black mb-lg-3 mb-2">
                Schedules for {{ $course->title }}
            </h4>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="mb-60">
                @livewire('courses.course-schedule-selector',['course' => $course])
                @livewire('courses.bookings', ['course' => $course])

            </div>
            <div class="text-center">
                <a href="{{ route('student.dashboard') }}" class="btn btn-primary">Back to Classes List</a>
            </div>

        </div>

    </div>
</section>
@endsection
