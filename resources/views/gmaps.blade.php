<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5 - Multiple markers in google map using gmaps.js</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>


  	<style type="text/css">
    	#map {
      		border:1px solid red;
      		width: 100%;
      		height: 500px;
    	}
  	</style>


</head>
<body>


  <h1>Google Map</h1>


  <div id="map"></div>

  <script type="text/javascript">


    var locations = <?php print_r(json_encode($locations)) ?>;

    var map = new GMaps({
      el: '#map',
      lat: 14.133710046968305, lng:100.617101050143,
      zoom:18
    });


    $.each( locations, function( index, value ){
	    map.addMarker({
	      lat: value.lat,
	      lng: value.lng,
	      name: value.name,
	      click: function(e) {
	        alert('This is '+value.name+' in VRU.');
	      }
	    });
   });


  </script>


</body>
</html>
