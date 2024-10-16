@extends('layouts.app1')


@section('content')

<section class="talk-counter space-bottom overflow-hidden" style="background-color: #FFF0E5;">
    <div class="container">
        <div class="mt-5 row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <h4 class="custom-title black mb-lg-3 mb-2">
                    Update Your Profile
                </h4>

                <form method="POST" action="{{ route('profile.update') }}" class="row g-lg-4 g-3">
                    @csrf
                    <div class="col-lg-6">
                        <div class="comment-grp">
                            <label class="" for="name">
                                {{ __('Full Name') }}
                            </label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" required autocomplete="name">
                            @error('name')
                                <span class="text-danger text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="comment-grp">
                            <label class="" for="mobile">
                                {{ __('Mobile') }}
                            </label>
                            <input type="number" class="form-control" name="mobile" value="{{ $user->mobile }}" required>
                            @error('mobile')
                                <span class="text-danger text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="comment-grp">
                            <label class="form-check-label" for="remember">
                                {{ __('Email') }}
                            </label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" disabled autocomplete="email">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="comment-grp">
                            <label class="" for="nickname">
                                {{ __('Nickname') }}
                            </label>
                            <input type="text" class="form-control" name="nickname" value="{{ $user->profile->nickname }}" required>
                            @error('nickname')
                                <span class="text-danger text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="comment-grp">
                            <label class="" for="favorite_color">
                                {{ __('Favorite Color') }}
                            </label>
                            <input type="text" class="form-control" name="favorite_color" value="{{ $user->profile->favorite_color }}" required>
                            @error('favorite_color')
                                <span class="text-danger text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="comment-grp">
                            <label class="" for="favorite_topic">
                                {{ __('Favorite Topic') }}
                            </label>
                            <input type="text" class="form-control" name="favorite_topic" value="{{ $user->profile->favorite_topic }}" required>
                            @error('favorite_topic')
                                <span class="text-danger text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="comment-grp">
                            <label class="" for="age">
                                {{ __('Age') }}
                            </label>
                            <input type="number" class="form-control" name="age" value="{{ $user->profile->age }}" required min="4" max="16">
                            @error('age')
                                <span class="text-danger text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="comment-btn">
                        <button type="submit" class="theme-btn w-100 round100 p2-bg py-3 px-xl-5 px-4">
                            <span class="white fw-medium">
                                Update account
                            </span>
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</section>

@endsection
