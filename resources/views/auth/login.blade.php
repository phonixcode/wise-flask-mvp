@extends('layouts.auth')

@section('title', 'Login')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="login-screen row align-items-center">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="login-container">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                            <div class="login-box">
                                <a href="/" class="login-logo">
                                    <img src="{{ asset('assets/img/brand_logo.svg') }}" alt="Wise" />
                                </a>

                                @error('email')
                                <div class="alert custom alert-danger mt-2">
                                    <i class="icon-warning2"></i>{{ $message }}
                                </div>
                                @enderror

                                <div class="input-group">
                                    <span class="input-group-addon" id="email"><i
                                            class="icon-envelop"></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        aria-label="email" aria-describedby="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="password"><i
                                            class="icon-verified_user"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        aria-label="Password" aria-describedby="password" required autocomplete="current-password">
                                </div>
                                <div class="actions clearfix">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="or"></div>
                                <div class="mt-4">
                                    <a href="{{ route('register') }}" class="additional-link">Don't have an Account?
                                        <span>Create Now</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                            <div class="login-slider"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
