@extends('layouts.app1')

@section('content')
<!-- Service Details Section Start -->
<section class="service-dtails overflow-hidden section-padding-sm position-relative">
    <div class="container card p-4 shadow">

        <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
            <h4 class="custom-title black mb-lg-3 mb-2">
                Edit Schedules for {{ $schedule->course->title }}
            </h4>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="mb-60">

                <div>
                    <a href="{{ route('teacher.courses.schedules', ['course' => $schedule->course->id]) }}" class="btn btn-sm btn-primary">
                        <i class="fa-solid fa-arrow-left-long"></i> Back
                    </a>
                </div>

                <div class="mt-5 row justify-content-center">
                    <div class="col-lg-6 col-md-8">

                        <form method="POST" action="{{ route('teacher.update.schedule', ['schedule' => $schedule->course->id]) }}" class="row g-lg-4 g-3">
                            @csrf

                            <div class="col-lg-12">
                                <div class="comment-grp">
                                    <label class="" for="start_time">
                                        {{ __('Start Time') }}
                                    </label>
                                    <input type="datetime-local" class="form-control" name="start_time" value="{{ $schedule->start_time }}" autocomplete="start_time" step="1800">
                                    @error('start_time')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="comment-grp">
                                    <label class="form-check-label" for="remember">
                                        {{ __('End Time') }}
                                    </label>
                                    <input type="datetime-local" class="form-control" name="end_time" value="{{ $schedule->end_time }}" autocomplete="end_time">
                                    @error('end_time')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="comment-grp">
                                    <label class="form-check-label" for="remember">
                                        {{ __('Capacity') }}
                                    </label>
                                    <input type="number" class="form-control" name="capacity" value="{{ $schedule->capacity }}" autocomplete="capacity">
                                    @error('capacity')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="comment-btn">
                                <button type="submit" class="theme-btn w-100 round100 p2-bg py-3 px-xl-5 px-4">
                                    <span class="white fw-medium">
                                        Update Schedule
                                    </span>
                                </button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
@endsection
