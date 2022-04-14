@extends('layouts.auth.app')

@section('greeting')
<div class="container">
    <div class="header-body text-center mb-7">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
        <h1 class="text-white">{{ __('Confirm Password') }}</h1>
        <p class="text-lead text-white">{{ __('Use this awesome form to confirm your password.') }}</p>
        </div>
    </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-lg-6 col-md-8">
    <div class="card bg-secondary border-0 mb-0">
        <div class="card-header bg-transparent pb-5">
            <div class="text-lg text-muted text-center mt-2">
                {{ __('Confirm Password') }}
            </div>
            @if (session('status'))
                <div class="alert alert-success mt-2" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
                <small>{{ __('Please confirm your password before continuing.') }}</small>
            </div>
            <form role="form" method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div class="form-group mb-3">
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
                <div class="row">
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-primary my-4">{{ __('Confirm Password') }}</button>
                    </div>
                    <div class="col-lg-6">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link my-4" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
                <div class="text-center">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
