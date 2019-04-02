@extends('layouts.master')

@section('content')

<div class="content-bg-wrap"></div>
<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
    <div class="container">
        <div class="header--standard-wrap">

            <a href="#" class="logo">
                <div class="img-wrap">
                    <img src="img/logo.png" alt="Olympus">
                    <img src="img/logo-colored-small.png" alt="Olympus" class="logo-colored">
                </div>
                <div class="title-block">
                    <h6 class="logo-title">olympus</h6>
                    <div class="sub-title">SOCIAL NETWORK</div>
                </div>
            </a>

            <a href="#" class="open-responsive-menu js-open-responsive-menu">
                <svg class="olymp-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
            </a>
        </div>
    </div>
</div>

<div class="header-spacer--standard"></div>

<div class="container">
    <div class="row display-flex">
        <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="landing-content">
                <h1>Welcome to the Biggest Social Network in the World</h1>
                <p>We are the best and biggest social network with 5 billion active users all around the world. Share you
                    thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
                </p>
                
            </div>
        </div>

        <div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
            
            <!-- Login-Registration Form  -->
            
            <div class="registration-login-form">
                <form method="POST" action="{{ route('etudiant.login.submit') }}">
                @csrf
                    <div class="container">
                        <div class="title h6">Login to your Account</div>
                        <form class="content">
                            <div class="row">
                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Your Email</label>
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="" type="email">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Your Password</label>
                                        <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="" type="password" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
            
                                    <div class="remember">
            
                                        <div class="checkbox">
                                            <label>
                                                <input name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                                Remember Me
                                            </label>
                                        </div>
                                        @if (Route::has('password.request'))
                                        <a href="#" class="forgot">Forgot my Password</a>
                                        @endif
                                    </div>
            
                                    <button type="submit" class="btn btn-lg btn-primary full-width">Login</button>
            
            
                                    <p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </form>
            </div>
        </div>
            
            <!-- ... end Login-Registration Form  -->       
    </div>
</div>
@endsection
