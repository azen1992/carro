<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<title>Workshop List in Map</title>
		<link rel="icon" type="image/png" href="">
	<head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="index.php">Workshop</a>
				</div>

				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="hidden active"><a class="page-scroll" href="#page-top"></a></li>
						<li><a class="page-scroll" href="index.php">List Workshop</a></li>
						<li><a class="page-scroll" href="map.php">List Workshop in Map</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<h1 style="margin: 0px 0px 40px 0px; font-size: 30px;">Workshop Available</h1>
			<div id="map_canvas"></div>
		</div>
		<footer class="footer">
			<div class="container">
				<p class="text-muted">Workshop Listing by Azen Yew.</p>
			</div>
		</footer>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC5R99TCdGyxEVW4bR0JxT-6GsYeU5degE&amp;callback=initMap" async="async" defer="defer"></script>
		<script>
			var locations = [];
			var map;
			var markers = [];

			function initMap() {
				jQuery.ajax({
					type		: 'post',
					url			: 'script/workshop_coordinate.php',
					timeout		: 120000,
					success	: function(data) {
						locations = JSON.parse(data);
							
						map = new google.maps.Map(document.getElementById('map_canvas'), {
							zoom: 11,
							center: new google.maps.LatLng(1.353119, 103.872968),
							mapTypeId: google.maps.MapTypeId.ROADMAP
						});
							
						if (!jQuery.isEmptyObject(locations)) {
							var num_markers = locations.length;
							for (var i = 0; i < num_markers; i++) { 
								markers[i] = new google.maps.Marker({
									position: {lat:parseFloat(locations[i][1]), lng:parseFloat(locations[i][2])},
									map: map,
									html: locations[i][0],
									id: i,
								});
							  
								google.maps.event.addListener(markers[i], 'click', function(){
									var infowindow = new google.maps.InfoWindow({
										id: this.id,
										content:this.html,
										position:this.getPosition()
									});
									google.maps.event.addListenerOnce(infowindow, 'closeclick', function(){
											markers[this.id].setVisible(true);
									});
									this.setVisible(false);
									infowindow.open(map);
								});
								google.maps.event.addDomListener(map, 'idle', function() {
									map.getCenter();
								});
								google.maps.event.addDomListener(window, 'resize', function() {
									map.setCenter(map.getCenter());
								});
							}
						}
					}
				});
			}
		</script>
	</body>
</html>