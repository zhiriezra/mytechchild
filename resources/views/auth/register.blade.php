@extends('layouts.master')

@section('content')

<section class="talk-counter space-bottom overflow-hidden" style="background-color: #FFF0E5;">
    <div class="container">
        <div class="mt-5 row justify-content-center">
            <div class="col-lg-6 col-md-8">
                {{-- <div class="row justify-content-center py-4">
                    <img src="{{ asset('ascent/assets/img/logo/techlogo1.png') }}" style="width: 200px;" alt="">
                </div> --}}

                <form method="POST" action="{{ route('register') }}" class="row g-lg-4 g-3">
                    @csrf
                    <div class="col-lg-12">
                        <div class="comment-grp">
                            <label class="" for="fullname">
                                {{ __('Full Name') }}
                            </label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name">
                            @error('name')
                                <span class="text-danger text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="comment-grp">
                            <label class="form-check-label" for="remember">
                                {{ __('Email') }}
                            </label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="text-danger text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <label class="form-check-label" for="remember">
                            {{ __('Password') }}
                        </label>
                        <div class="comment-grp">
                            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="text-danger text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <label class="form-check-label" for="remember">
                            {{ __('Confirm Password') }}
                        </label>
                        <div class="comment-grp">
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                            @error('password_confirmation')
                                <span class="text-danger text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="comment-btn">
                        <button type="submit" class="theme-btn w-100 round100 p2-bg py-3 px-xl-5 px-4">
                            <span class="white fw-medium">
                                Create an account
                            </span>
                        </button>
                    </div>
                    <div>
                        <p>Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a></p>
                    </div>
                </form>

            </div>

        </div>
    </div>
</section>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
