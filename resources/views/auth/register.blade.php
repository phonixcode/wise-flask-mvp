@extends('layouts.auth')

@section('title', 'Register')

@section('content')

<div class="container">
    <div class="login-screen row align-items-center">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="login-container">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                            <div class="login-box">
                                <a href="/" class="login-logo">
                                    <img src="{{ asset('assets/img/brand_logo.svg') }}" alt="Wise" />
                                </a>
                                <div class="input-group">
                                    <span class="input-group-addon" id="fullname"><i class="icon-account_circle"></i></span>
                                    <input type="text" class="form-control" placeholder="Fullname" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                                <br>
                                @error('name')
                                <div class="alert custom alert-danger mt-2">
                                    <i class="icon-warning2"></i>{{ $message }}
                                </div>
                                @enderror
                                <div class="input-group">
                                    <span class="input-group-addon" id="email"><i class="icon-envelop"></i></span>
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>
                                <br>
                                @error('email')
                                <div class="alert custom alert-danger mt-2">
                                    <i class="icon-warning2"></i>{{ $message }}
                                </div>
                                @enderror
                                <div class="input-group">
                                    <span class="input-group-addon" id="password"><i class="icon-verified_user"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="new-password">
                                </div>
                                <br>
                                @error('password')
                                <div class="alert custom alert-danger mt-2">
                                    <i class="icon-warning2"></i>{{ $message }}
                                </div>
                                @enderror
                                <div class="input-group">
                                    <span class="input-group-addon" id="password"><i class="icon-verified_user"></i></span>
                                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="actions clearfix">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                                <div class="or"></div>
                                <div class="mt-4">
                                    <a href="{{ route('login') }}" class="additional-link">Already have an Account? <span>Login Now</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                            <div class="signup-slider"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
