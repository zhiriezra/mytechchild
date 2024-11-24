@extends('layouts.app1')

@section('content')
<!-- Service Details Section Start -->
<section class="service-dtails overflow-hidden section-padding-sm position-relative">
    <div class="container card p-4 shadow">

        <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
            <h4 class="custom-title black mb-lg-3 mb-2">
                New Teacher
            </h4>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="mb-60">

                <div>
                    <a href="{{ route('admin.teachers') }}" class="btn btn-sm btn-primary">
                        <i class="fa-solid fa-arrow-left-long"></i> Back
                    </a>
                </div>

                <div class="mt-5 row justify-content-center">
                    <div class="col-lg-6 col-md-8">

                        <form method="POST" action="{{ route('admin.store.teacher') }}" enctype="multipart/form-data" class="row g-lg-4 g-3">
                            @csrf

                            <div class="col-lg-12">
                                <div class="comment-grp">
                                    <label class="" for="title">
                                        {{ __('Full Name') }}
                                    </label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Teacher name" autocomplete="name">
                                    @error('name')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="comment-grp">
                                    <label class="" for="title">
                                        {{ __('Email') }}
                                    </label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="example@gmail.com" autocomplete="email">
                                    @error('email')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="comment-grp">
                                    <label class="" for="title">
                                        {{ __('Mobile No') }}
                                    </label>
                                    <input type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="+234 7035621550" autocomplete="mobile">
                                    @error('mobile')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="comment-grp">
                                    <label class="form-check-label" for="image">
                                        {{ __('Profile Image') }}
                                    </label>
                                    <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                                    @error('image')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="comment-grp">
                                    <label class="form-check-label" for="image">
                                        {{ __('Assign Course(s)') }}
                                    </label>
                                    <select name="courses[]" id="" class="form-control" multiple="multiple">
                                        @foreach($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('courses')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="comment-btn">
                                <button type="submit" class="theme-btn w-100 round100 p2-bg py-3 px-xl-5 px-4">
                                    <span class="white fw-medium">
                                        Add Teacher
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
