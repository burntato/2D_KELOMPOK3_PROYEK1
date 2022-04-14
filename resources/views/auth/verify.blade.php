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
<div class="col-lg-7 col-md-8">
    <div class="card bg-secondary border-0 mb-0">
        <div class="card-header bg-transparent pb-5">
            <div class="text-lg text-muted text-center mt-2">
                {{ __('Verify Your Email Address') }}
            </div>
        </div>
        <div class="card-body px-lg-5 py-lg-5">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
            </form>
        </div>
    </div>
</div>
@endsection
