<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewwport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>
    <link rel="stylesheet" href="./google_map/css/style.css"/>
    <script src="./google_map/js/app.js"></script>
    <style>
        #map{
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Map</h1>
    <div class="map" id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaAcT7gUSkl38sCZazn96anMb6ivCLXYA&libraries=places&callback=initMap&channel=GMPSB_addressselection_v1_cABC" async defer></script>
</body>
</html>
