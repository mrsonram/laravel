@extends('admin/theme')
@section('title', 'Admin Pet Management Login')
@section('content')
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" style="font-family: TH SarabunPSK; font-size: 30px">มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/') }}/pet" style="font-family: TH SarabunPSK; font-size: 30px">หน้าหลัก</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Headder-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0" style="font-family: TH SarabunPSK">ระบบบริหารจัดการข้อมูลสุนัข</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Admin Only</p>
    </div>
</header>

<section class="page-section portfolio" id="info">
            <div class="container">
                <!-- Pet Info Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Login</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Form Login-->
                <div class="row">
                    <div class="col"></div>
                    <div class="col-6">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                            <!-- Email input-->
                            <div class="form-floating mb-3">
                                <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email..." data-sb-validations="required" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Enter an email</div>
                            </div>

                            <!-- Password input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" data-sb-validations="required,password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password">Password</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Enter a password</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email or Password is valid.</div>
                            </div>

                            <!-- Submit success message-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-lg btn-xl" id="submitButton" type="submit">{{ __('Login') }}</button>
                            @if (Route::has('password.request'))
                                    <a class="btn btn-outline-secondary btn-lg btn-xl" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                            @endif
                            </div>
                        </form>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
</section>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright &copy; VRU Pet Project 2021</small></div>
</div>
@endsection
