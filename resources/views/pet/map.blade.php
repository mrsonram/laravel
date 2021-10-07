@extends('pet/theme')
@section('title', 'แผนที่สุนัข')
@include('pet/menu')
<head>
    <link rel="stylesheet" href="{{ asset('/google_map/css/style.css') }}"/>
    <script src="{{ asset('/google_map/js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
        <h1 class="masthead-heading text-uppercase mb-0">แผนที่สุนัข</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0" style="font-size: 30px">โครงการจัดการปัญหาสุนัข</p>
    </div>
</header>
    <div class="map" id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaAcT7gUSkl38sCZazn96anMb6ivCLXYA&libraries=places&callback=initMap&channel=GMPSB_addressselection_v1_cABC" async defer></script>

    <script>
        function initMap(){
            //Map Option
            var option = {
                zoom : 18,
                center : {lat:14.133710046968305, lng:100.617101050143}
            }

            //Google Map
            var map = new google.maps.Map(document.getElementById('map'), option);

            //Marker
            //var marker = new google.maps.Marker({
            //    position : {lat:14.133641162498503,lng:100.6157895197617},
            //    map:map,
                //icon:'link'
            //});

            //addMarker({lat:14.133641162498503, lng:100.6157895197617});
            addMarker({
                coords:{lat:14.133641162498503, lng:100.6157895197617}
            });

            addMarker({coords:{lat:14.133078209247032, lng:100.61598728127554}});
            function addMarker(props){
                var Marker = new google.maps.Marker({
                    position : props.coords,
                    map:map,
                    //icon:'link icon'
                });

                if(props.iconImage){

                    marker.setIcon(props.iconImage);
                }

                if(props.content){
                    var infoWindow = new google.maps.InfoWindow({
                        content:props.content
                    });

                    marker.addListener('click', function(){
                        infoWindow.open(map, marker);
                    });
                }
            }
        }
    </script>
</body>
</html>
