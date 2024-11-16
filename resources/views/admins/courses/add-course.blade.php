@extends('layouts.app1')

@section('content')
<!-- Service Details Section Start -->
<section class="service-dtails overflow-hidden section-padding-sm position-relative">
    <div class="container card p-4 shadow">

        <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
            <h4 class="custom-title black mb-lg-3 mb-2">
                Add Class
            </h4>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="mb-60">

                <div>
                    <a href="{{ route('admin.courses') }}" class="btn btn-sm btn-primary">
                        <i class="fa-solid fa-arrow-left-long"></i> Back
                    </a>
                </div>

                <div class="mt-5 row justify-content-center">
                    <div class="col-lg-6 col-md-8">

                        <form method="POST" action="{{ route('admin.store.course') }}" enctype="multipart/form-data" class="row g-lg-4 g-3">
                            @csrf

                            <div class="col-lg-12">
                                <div class="comment-grp">
                                    <label class="" for="title">
                                        {{ __('Title') }}
                                    </label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Class title" autocomplete="title">
                                    @error('title')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="comment-grp">
                                    <label class="form-check-label" for="remember">
                                        {{ __('Description') }}
                                    </label>
                                    <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                                    @error('description')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="comment-grp">
                                    <label class="" for="amount_ngn">
                                        {{ __('NGN Amount') }}
                                    </label>
                                    <input type="number" class="form-control" name="amount_ngn" placeholder="0.00" value="{{ old('amount_ngn') }}">
                                    @error('amount_ngn')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="comment-grp">
                                    <label class="" for="amount_usd">
                                        {{ __('USD Amount') }}
                                    </label>
                                    <input type="number" class="form-control" name="amount_usd" placeholder="0.00" value="{{ old('amount_usd') }}">
                                    @error('amount_usd')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="comment-grp">
                                    <label class="form-check-label" for="remember">
                                        {{ __('Image') }}
                                    </label>
                                    <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                                    @error('image')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="comment-btn">
                                <button type="submit" class="theme-btn w-100 round100 p2-bg py-3 px-xl-5 px-4">
                                    <span class="white fw-medium">
                                        Add Class
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
