@extends('layouts/layout')

@section('content')
<div class="user-page d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 col-sm-8  text-center">
                    <div class="user-page-box">
                        <div class="user-logo">
                            <a href="{{ url('/') }}">
                                <img src="images/logo.png" srcset="images/logo.png 2x" alt="icon">
                            </a>
                        </div>
                        <h5>Masuk Dengan Akun Kamu</h5>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="input-item">
                                <input id="email" autocomplete="off" autofocus="" type="email" class="input-line-simple{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" required autofocus>
                                @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>errro</strong>
                                        </span>
                                @endif
                            </div>
                            <div class="input-item">
                                <input id="password"  autocomplete="off" type="password" class="input-line-simple{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>
                            </div>
                            <div class="gaps"></div>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="simple-link" href="{{ route('password.request') }}">
                                        {{ __('Lupa Password Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                    <div class="gaps size-2x"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader !remove please if you do not want -->
    <div id="preloader">
        <div id="loader"></div>
        <div class="loader-section loader-top"></div>
        <div class="loader-section loader-bottom"></div>
    </div>
    <!-- Preloader End -->
@endsection