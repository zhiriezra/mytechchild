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
                                <img src="{{ asset('ascent/assets/img/aservices/details-middle1.png') }}" alt="img" class="w-100 round10">
                            </div>
                            <div class="mt-2">
                                <h5>{{ $course->title }}</h5>
                            </div>

                            <div>
                                @foreach ($course->schedules as $item)
                                    {{ \Carbon\Carbon::parse($item->start_time)->toFormattedDateString() }}
                                @endforeach
                            </div>
                        </a>
                    </div>
                    {{-- <a href="{{ route('student.courses.schedules', ['course' => $course->id]) }}"> Explore Class
                    </a> --}}
                @endforeach

            </div>
        </div>

    </div>
</section>
@endsection
