<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Google Autocomplete Address Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style>
        #map{
            height: 700px;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2>Implement Google Autocomplete Address in Laravel 8</h2>

        <div class="form-group">
            <label>Location/City/Address</label>
            <input type="text" name="autocomplete" id="autocomplete" class="form-control" placeholder="Choose Location">
        </div>

        <div class="form-group" id="latitudeArea">
            <label>Latitude</label>
            <input type="text" id="latitude" name="latitude" class="form-control">
        </div>

        <div class="form-group" id="longtitudeArea">
            <label>Longitude</label>
            <input type="text" name="longitude" id="longitude" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    <div class="map" id="map"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key=AIzaSyBaAcT7gUSkl38sCZazn96anMb6ivCLXYA&libraries=places&callback=initAutocomplete"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaAcT7gUSkl38sCZazn96anMb6ivCLXYA&libraries=places&callback=initMap&channel=GMPSB_addressselection_v1_cABC" async defer></script>

    <script>
        $(document).ready(function () {
            $("#14.133815938973438").addClass("d-none");
            $("#100.61777075087201").addClass("d-none");
        });
    </script>
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

            //Marker
            var marker = new google.maps.Marker({
                position : {lat:14.133641162498503,lng:100.6157895197617},
                map:map
            });
        }
    </script>
    <script>
        google.maps.event.addDomListener(window, 'load', initialize);

        function initialize() {
            var input = document.getElementById('autocomplete');
            var autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                $('#latitude').val(place.geometry['location'].lat());
                $('#longitude').val(place.geometry['location'].lng());

                $("#latitudeArea").removeClass("d-none");
                $("#longtitudeArea").removeClass("d-none");
            });
        }
    </script>
</body>
</html>
