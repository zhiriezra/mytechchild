@extends('layouts.app1')

@section('content')
<!-- Service Details Section Start -->
<section class="service-dtails overflow-hidden section-padding-sm position-relative">
    <div class="container card p-4 shadow">

        <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
            <h4 class="custom-title black mb-lg-3 mb-2">
                Payment for: {{ $course->title }}
            </h4>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="mb-60">

                <div>
                    {{-- <a href="" class="btn btn-sm btn-primary">
                        <i class="fa-solid fa-arrow-left-long"></i> Back
                    </a> --}}
                </div>

                <div class="mt-5 row justify-content-center">
                    <div class="col-lg-6 col-md-8">

                        <form method="POST" action="{{ route('student.process.payment', ['booking' => $booking]) }}" class="row g-lg-4 g-3">
                            @csrf
                            <div class="col-lg-12">
                                <div class="comment-grp">
                                    <label class="" for="amount">
                                        {{ __('Amount') }}
                                    </label>
                                    <input type="number" class="form-control" name="amount" value="{{ $course->amount }}" readonly="readonly">
                                    @error('amount')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label class="" for="gateway">
                                    {{ __('Choose Payment Gateway:') }}
                                </label>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gateway" value="paystack">
                                    <label class="form-check-label" for="paystack">
                                        Paystack
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gateway" value="stripe">
                                    <label class="form-check-label" for="stripe">
                                        Stripe
                                    </label>
                                </div>

                                @error('gateway')
                                    <span class="text-danger text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label class="" for="source">
                                    {{ __('Payment Source: (applicable only for stripe)') }}
                                </label>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="source" value="tok_visa">
                                    <label class="form-check-label" for="paystack">
                                        Tok Visa
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="source" value="other">
                                    <label class="form-check-label" for="stripe">
                                        Ezra Visa
                                    </label>
                                </div>

                                @error('source')
                                    <span class="text-danger text-sm">{{$message}}</span>
                                @enderror
                            </div>


                            <div class="col-lg-12">
                                <div class="comment-grp">
                                    <label class="" for="email">
                                        {{ __('Email') }}
                                    </label>
                                    <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}" readonly="readonly">
                                    @error('email')
                                        <span class="text-danger text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="comment-btn">
                                <button type="submit" class="theme-btn w-100 round100 p2-bg py-3 px-xl-5 px-4">
                                    <span class="white fw-medium">
                                        Pay Now
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
