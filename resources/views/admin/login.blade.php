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
                            <!-- Username input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="user" type="text" placeholder="Enter your username..." data-sb-validations="required" />
                                <label for="name">Username</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A Username is required.</div>
                            </div>
                            <!-- Password input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" type="password" placeholder="Password" data-sb-validations="required,password" />
                                <label for="password">Password</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-lg btn-xl disabled" id="submitButton" type="submit">Login</button>
                            <button class="btn btn-outline-secondary btn-lg btn-xl" id="submitButton" type="submit">Forgot Password</button>
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
