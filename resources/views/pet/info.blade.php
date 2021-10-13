@extends('pet/theme')
@section('title', 'ข้อมูลสุนัข')
@section('content')
@include('pet/menu')
<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">ข้อมูลสุนัข</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0"><h1>โครงการจัดการปัญหาสุนัข</h1></p>
    </div>
</header>
<section class="page-section portfolio" id="info">
    <div class="container">
        <!-- Pet Info Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">สุนัขชุมชน</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="container">
            <div class="row g-2">
                @foreach($animals as $animals)
                <div class="col">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="{{ isset($animals->image) ? asset('storage/'.$animals->image) : asset('source/background.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title" style="font-size: 24px">{{ isset($animals->name) ? $animals->name : "ตูบ" }}</h5>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" style="font-size: 24px" onClick="show({{ $animals->id }})">ข้อมูล</button>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>
@endsection
