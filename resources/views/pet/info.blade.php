@extends('pet/theme')
@section('title', 'ข้อมูลสุนัข')
@section('content')
@include('pet/menu')
<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0" span style="font-family: FontNongnam">ข้อมูลสุนัข</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0" span style="font-family: FontNongnam; font-size: 30px">โครงการจัดการปัญหาสุนัข</p>
    </div>
</header>
<section class="page-section portfolio" id="info">
    <div class="container">
        <!-- Pet Info Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" span style="font-family: FontNongnam">สุนัขชุมชน</h2>
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
                <!-- Carousel Page 1-->
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <!-- Pet Info Item 1-->
                                <div class="card">
                                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="portfolio/assets/img/pet/info.png" alt="..." />
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Pet Name</h5>
                                            <p class="card-text text-center">Pet Details</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Pet Info Item 2-->
                                <div class="card">
                                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="portfolio/assets/img/pet/info.png" alt="..." />
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Pet Name</h5>
                                            <p class="card-text text-center">Pet Details</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Pet Info Item 3-->
                                <div class="card">
                                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="portfolio/assets/img/pet/info.png" alt="..." />
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Pet Name</h5>
                                            <p class="card-text text-center">Pet Details</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Page 2-->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col">
                            <!-- Pet Info Item 4-->
                            <div class="card">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="portfolio/assets/img/pet/info.png" alt="..." />
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Pet Name</h5>
                                        <p class="card-text text-center">Pet Details</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Pet Info Item 5-->
                            <div class="card">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="portfolio/assets/img/pet/info.png" alt="..." />
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Pet Name</h5>
                                        <p class="card-text text-center">Pet Details</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Pet Info Item 6-->
                            <div class="card">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="portfolio/assets/img/pet/info.png" alt="..." />
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Pet Name</h5>
                                        <p class="card-text text-center">Pet Details</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Page 3-->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col">
                            <!-- Pet Info Item 7-->
                            <div class="card">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="portfolio/assets/img/pet/info.png" alt="..." />
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Pet Name</h5>
                                        <p class="card-text text-center">Pet Details</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Pet Info Item 8-->
                            <div class="card">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="portfolio/assets/img/pet/info.png" alt="..." />
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Pet Name</h5>
                                        <p class="card-text text-center">Pet Details</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Pet Info Item 9-->
                            <div class="card">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="portfolio/assets/img/pet/info.png" alt="..." />
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Pet Name</h5>
                                        <p class="card-text text-center">Pet Details</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
@endsection
