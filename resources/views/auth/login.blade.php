@extends('layouts.auth.app')

@section('greeting')
<div class="container">
    <div class="header-body text-center mb-7">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
        <h1 class="text-white">{{ __('Welcome!') }}</h1>
        <p class="text-lead text-white">{{ __('Use these awesome forms to login or create new account in your project for free.') }}</p>
        </div>
    </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-lg-5 col-md-7">
    <div class="card bg-secondary border-0 mb-0">
        <div class="card-header bg-transparent pb-5">
        <div class="text-muted text-center mt-2 mb-3"><small>{{ __('Sign in with') }}</small></div>
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
                <small>{{ __('Or sign in with credentials') }}</small>
            </div>
            <form role="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input
                            class="form-control @error('email') is-invalid @enderror"
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            placeholder="Email"
                            autocomplete="email"
                            autofocus />  
                    </div>
                    @error('email')
                        <span class="text-danger text-sm" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
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
                            placeholder="Password"
                            autocomplete="current-password" />
                    </div>
                    @error('password')
                        <span class="text-danger text-sm" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input
                    class="custom-control-input"
                    id="customCheckLogin"
                    type="checkbox"
                    name="remember"
                    {{ old('remember') ? 'checked' : '' }} />
                  <label class="custom-control-label" for="customCheckLogin">
                    <span class="text-muted">{{ __('Remember me') }}</span>
                  </label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">{{ __('Sign in') }}</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6">
            <a href="{{ route('password.request') }}" class="text-light"><small>{{ __('Forgot password?') }}</small></a>
        </div>
        <div class="col-6 text-right">
            <a href="{{ route('register') }}" class="text-light"><small>{{ __('Create new account') }}</small></a>
        </div>
    </div>
</div>
@endsection
