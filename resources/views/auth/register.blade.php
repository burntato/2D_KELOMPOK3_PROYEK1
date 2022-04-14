@extends('layouts.auth.app')

@section('greeting')
<div class="container">
    <div class="header-body text-center mb-7">
        <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            <h1 class="text-white">{{ __('Create an account') }}</h1>
            <p class="text-lead text-white">{{ __('Use these awesome forms to login or create new account in your project for free.') }}</p>
        </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-lg-6 col-md-8">
    <div class="card bg-secondary border-0">
    <div class="card-header bg-transparent pb-5">
        <div class="text-muted text-center mt-2 mb-4"><small>{{ __('Sign up with') }}</small></div>
        <div class="btn-wrapper text-center">
            <a href="#" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon"><img src="{{ asset('assets/img/icons/common/github.svg') }}"></span>
                <span class="btn-inner--text">{{ __('Github') }}</span>
            </a>
            <a href="#" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon"><img src="{{ asset('assets/img/icons/common/google.svg') }}"></span>
                <span class="btn-inner--text">{{ __('Google') }}</span>
            </a>
        </div>
    </div>
    <div class="card-body px-lg-5 py-lg-5">
        <div class="text-center text-muted mb-4">
            <small>{{ __('Or sign up with credentials') }}</small>
        </div>
        <form role="form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input
                        class="form-control @error('name') is-invalid @enderror"
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        placeholder="Name"
                        autocomplete="name"
                        autofocus />
                </div>
                @error('name')
                    <span class="text-danger text-sm" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input
                        class="form-control"
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        placeholder="Email"
                        />
                </div>
                @error('email')
                    <span class="text-danger text-sm" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input
                                class="form-control @error('password') is-invalid @enderror"
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="new-password"
                                placeholder="Password"
                                />
                        </div>
                        @error('password')
                            <span class="text-danger text-sm" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                id="password"
                                type="password"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                placeholder="Confirm Password"
                                />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id="agree" type="checkbox" name="agree" {{ old('agree') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="agree">
                            <span class="text-muted">{{ __('I agree with the') }} <a href="#!">{{ __('Privacy Policy') }}</a></span>
                        </label>
                    </div>
                    @error('agree')
                        <span class="text-danger text-sm" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-4">{{ __('Create account') }}</button>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection
