<!DOCTYPE html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <!-- Mapbox -->
        <!--<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.0/mapbox-gl.js'></script>
        <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.0/mapbox-gl.css' rel='stylesheet' />-->

        <!-- Google Map API -->
        <link rel="stylesheet" href="{{ asset('/google_map/css/style.css') }}"/>
        <script src="{{ asset('/google_map/js/app.js') }}"></script>
        <style>
            #map{
                height: 700px;
                width: 100%;
            }
        </style>
        <script>
            function initMap(){
            //Map Option
            var option = {
                zoom : 18,
                center : {lat:14.133710046968305, lng:100.617101050143}
            }

            //Google Map
            var map = new
            google.maps.Map(document.getElementById('map'), option);
            }
        </script>
    </head>
    <body>
    <div >
        @yield('content')
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
    <style>
            .mapboxgl-popup {
                max-width: 400px;
                font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
            }
    </style>
    @yield('script')
</html>
