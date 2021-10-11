@extends('theme/mdb')
@section('title', 'จัดการข้อมูล (สำหรับผู้ดูแลระบบ)')
@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card bg-dark text-body bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="{{ asset('source/home_4.jpg') }}" class="card-img" alt="..." />
                    <div class="card-img-overlay">
                        <h2 class="card-title fw-bold">จัดการข้อมูลสุนัข</h2>
                    </div>
                    <a href="{{ url('/') }}/manage">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-black bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="{{ asset('source/home_2.png') }}" class="card-img" alt="..." />
                    <div class="card-img-overlay">
                        <h2 class="card-title fw-bold">จัดการข้อความ</h2>
                    </div>
                    <a href="{{ url('/') }}/contact">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-white bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="{{ asset('source/home_3.jpg') }}" class="card-img" alt="..." />
                    <div class="card-img-overlay">
                        <h2 class="card-title fw-bold">จัดการข้อมูลข่าวสาร</h2>
                    </div>
                    <a href="{{ url('/') }}/message">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
