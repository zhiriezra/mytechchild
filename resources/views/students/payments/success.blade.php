@extends('layouts.app1')

@section('content')
<!-- Service Details Section Start -->
<section class="service-dtails overflow-hidden section-padding-sm position-relative">
    <div class="container card p-4 shadow">

        <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="text-center mb-30">
                <h4 class="text-success">Thank you for your purchase</h4>
                <p>Your payment is successful and your booking is confirmed.</p>

            </div>
            <div class="text-center">
                <a href="{{ route('student.dashboard') }}" class="btn btn-primary">Back to dashboard</a>
            </div>

        </div>

    </div>
</section>
@endsection
