@extends('pet/theme')
@section('title', 'เกี่ยวกับโครงการ')
@section('content')
@include('pet/menu')
<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">เกี่ยวกับโครงการจัดการปัญหาสุนัข</h1>
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
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <img src="{{ asset('source/title_1.jpg') }}" class="card-img" alt="..."/>
                        <div class="card-body">
                        <h3 class="card-title">
                            <p>ข้อที่ 1</p>
                            <p>สร้างความเข้าใจในการจัดการที่ถูกต้องกับสุนัข</p>
                        </h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <img src="{{ asset('source/title_2.webp') }}" class="card-img" alt="..."/>
                        <div class="card-body">
                        <h3 class="card-title">
                            <p>ข้อที่ 2</p>
                            <p>เปลี่ยนสุนัขในที่สาธารณะให้เป็นสุนัขชุมชน เป็นมิตรกับทุกคน</p>
                        </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
