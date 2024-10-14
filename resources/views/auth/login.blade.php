@extends('layouts.master')

@section('content')

<!-- Talk Counter Section Start -->
<section class="talk-counter space-bottom overflow-hidden" style="background-color: #FFF0E5;">
    <div class="container">
        <div class="mt-5 row justify-content-center">
            <div class="col-lg-6 col-md-8">
                {{-- <div class="row justify-content-center py-4">
                    <img src="{{ asset('ascent/assets/img/logo/techlogo1.png') }}" style="width: 200px;" alt="">
                </div> --}}

                <form method="POST" action="{{ route('login') }}" class="row g-lg-4 g-3">
                    @csrf
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
                        <div class="comment-grp">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                    </div>


                    <div class="comment-btn">
                        <button type="submit" class="theme-btn w-100 round100 p2-bg py-3 px-xl-5 px-4">
                            <span class="white fw-medium">
                                Login Now
                            </span>
                        </button>
                    </div>
                    <div>
                        <p class="text-right">Forgot password?</p>
                        <p>Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create an account</a></p>
                    </div>
                </form>

            </div>

        </div>
    </div>
</section>
@endsection
