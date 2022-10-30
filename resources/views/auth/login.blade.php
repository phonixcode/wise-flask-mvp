@extends('layouts.auth')

@section('title', 'Login')

@section('content')

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
