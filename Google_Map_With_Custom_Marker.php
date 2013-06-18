<!DOCTYPE html>
<html>
<head>
<title>Google Maps API V3 lesson 2</title>

<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
html { height: 100% }
body { height: 100%; margin: 0; padding: 0 }
#map_canvas { height: 300px; width:600px }
</style>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
  function initialize() {
		var homeLatlng = new google.maps.LatLng(24.696554,-81.328238);

		var myOptions = {
			zoom: 15,
			center: homeLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

		var image = new google.maps.MarkerImage(
			'http://maps.google.com/mapfiles/ms/micons/green-dot.png',
			new google.maps.Size(32, 32),	// size
			new google.maps.Point(0,0),	// origin
			new google.maps.Point(16, 32)	// anchor
		);

		var shadow = new google.maps.MarkerImage(
			'http://maps.google.com/mapfiles/ms/micons/msmarker.shadow.png',
			new google.maps.Size(59, 32),	// size
			new google.maps.Point(0,0),	// origin
			new google.maps.Point(16, 32)	// anchor
		);

		var homeMarker = new google.maps.Marker({
			position: homeLatlng, 
			map: map,
			title: "Check this cool location",
			icon: image,
			shadow: shadow
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>
<body>
	<div id="map_canvas"></div>
</body>
</html>
