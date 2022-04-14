@extends('layouts.auth.app')

@section('greeting')
<div class="container">
    <div class="header-body text-center mb-7">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
        <h1 class="text-white">{{ __('Reset Password') }}</h1>
        <p class="text-lead text-white">{{ __('Use this awesome form to reset your password.') }}</p>
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
                {{ __('Reset Password') }}
            </div>
            @if (session('status'))
                <div class="alert alert-success mt-2" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="card-body px-lg-5 py-lg-5">
            <form role="form" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
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
                            value="{{ $email ?? old('email') }}"
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
                                    placeholder="Password"
                                    autocomplete="current-password" />
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
                                    class="form-control @error('password') is-invalid @enderror"
                                    id="password-confirm"
                                    type="password"
                                    name="password_confirmation"
                                    required
                                    placeholder="Confirm Password"
                                    autocomplete="new-password" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">{{ __('Reset Password') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
