@extends('pet/theme')
@section('title', 'โครงการจัดการปัญหาสุนัข')
@section('content')
<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}/"><h2>โครงการจัดการปัญหาสุนัข</h2></a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto" style="font-size: 28px;">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#info">ข้อมูลสุนัข</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">เกี่ยวกับโครงการ</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/') }}/news">ข่าวสาร</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/') }}/map">แผนที่สุนัข</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" data-bs-toggle="modal" data-bs-target="#contactModal">ติดต่อเรา</a></li>
            </ul>
        </div>
    </div>
</nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="{{ asset('source/logo.png') }}" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">โครงการจัดการปัญหาสุนัข</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0"><h1>คนปลอดภัย เพราะสุนัขปลอดโรค</h1></p>
            </div>
        </header>
        <!-- Pet Info Section-->
        <section class="page-section portfolio" id="info">
            <div class="container">
                <!-- Pet Info Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><a href="{{ url('/') }}/info">สุนัขชุมชน</a></h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Pet Info Grid Items-->
                <div class="row justify-content-center">
                <!-- Carousel-->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Carousel -->
                        @for($i=0;  $i< count($animals); $i+=3)
                        <div class="carousel-item {{ $i==0 ? "active" : "" }}">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <!-- Pet Info Item 1-->
                                        <div class="card">
                                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" onClick="show({{ isset($animals[$i]->id) ? $animals[$i]->id : '' }})">
                                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info fa-3x"></i></div>
                                                </div>
                                                <img class="img-fluid card-img-top" src="{{ isset($animals[$i]->image) ? asset('storage/'.$animals[$i]->image) : asset('source/background.png') }}" alt="..." />
                                                <div class="card-body">
                                                    <h4 class="card-title text-center">{{ isset($animals[$i]->name) ? $animals[$i]->name : 'ตูบ' }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Pet Info Item 2-->
                                        <div class="card">
                                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" onClick="show({{ isset($animals[$i+1]->id) ? $animals[$i+1]->id : '' }})">
                                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info fa-3x"></i></div>
                                                </div>
                                                <img class="img-fluid card-img-top" src="{{ isset($animals[$i+1]->image) ? asset('storage/'.$animals[$i+1]->image) : asset('source/background.png') }}" alt="..." />
                                                <div class="card-body">
                                                    <h4 class="card-title text-center">{{ isset($animals[$i+1]->name) ? $animals[$i+1]->name : 'ตูบ' }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Pet Info Item 3-->
                                        <div class="card">
                                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" onClick="show({{ isset($animals[$i+2]->id) ? $animals[$i+2]->id : '' }})">
                                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info fa-3x"></i></div>
                                                </div>
                                                <img class="img-fluid card-img-top" src="{{ isset($animals[$i+2]->image) ? asset('storage/'.$animals[$i+2]->image) : asset('source/background.png') }}" alt="..." />
                                                <div class="card-body">
                                                    <h4 class="card-title text-center">{{ isset($animals[$i+2]->name) ? $animals[$i+2]->name : 'ตูบ' }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">เกี่ยวกับโครงการจัดการปัญหาสุนัข</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col"></div>
                    <div class="col-6">
                        <p class="lead"><h3>1. สร้างความเข้าใจในการจัดการที่ถูกต้องกับสุนัข</h3></p>
                        <p class="lead"><h3>2. เปลี่ยนสุนัขในที่สาธารณะให้เป็น สุนัขชุมชน เป็นมิตรกับทุกคน</h3></p>
                    </div>
                    <div class="col"></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="{{ url('/') }}/about" style="font-size: 30px">
                        <i class="fas fa-info-circle me-2"></i>
                        เพิ่มเติม
                    </a>
                </div>
            </div>
        </section>
        @endsection
