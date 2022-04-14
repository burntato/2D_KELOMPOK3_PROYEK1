@extends('layouts.auth.app')

@section('greeting')
<div class="container">
    <div class="header-body text-center mb-7">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
        <h1 class="text-white">{{ __('Reset Password') }}</h1>
        <p class="text-lead text-white">{{ __('Use this awesome form to send you a password reset link.') }}</p>
        </div>
    </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-lg-5 col-md-7">
    <div class="card bg-secondary border-0 mb-0">
        <div class="card-header bg-transparent pb-5">
            <div class="text-lg text-muted text-center mt-2">
                {{ __('Reset Password') }}
            </div>
            @if (session('status'))
                <div class="alert alert-success mt-2" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="card-body px-lg-5 py-lg-5">
            <form role="form" method="POST" action="{{ route('password.email') }}">
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
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">{{ __('Send Password Reset Link') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
