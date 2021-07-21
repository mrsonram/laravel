@extends('pet/theme')
@section('title', 'Pet Project')
@section('content')
<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}/pet">Pet Project</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#info">Pet Info</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/') }}/news">News</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/') }}/map">Map</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="portfolio/assets/img/logo.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Pet Project Name</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Detail Project</p>
            </div>
        </header>
        <!-- Pet Info Section-->
        <section class="page-section portfolio" id="info">
            <div class="container">
                <!-- Pet Info Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Pet Info</h2>
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
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="{{ url('/') }}/about">
                        <i class="fas fa-info-circle me-2"></i>
                        More
                    </a>
                </div>
            </div>
        </section>
        @endsection
