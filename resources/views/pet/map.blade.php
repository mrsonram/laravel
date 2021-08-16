@extends('pet/theme')
@section('title', 'แผนที่สุนัข')
@include('pet/menu')
<head>
    <link rel="stylesheet" href="{{ asset('/google_map/css/style.css') }}"/>
    <script src="{{ asset('/google_map/js/app.js') }}"></script>
    <style>
        #map{
            height: 700px;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0" span style="font-family: FontNongnam">แผนที่สุนัข</h1>
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
    <div class="map" id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaAcT7gUSkl38sCZazn96anMb6ivCLXYA&libraries=places&callback=initMap&channel=GMPSB_addressselection_v1_cABC" async defer></script>
</body>
</html>
