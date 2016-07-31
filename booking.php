<?php
	require_once('script/workshop_search.php');
?>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<title></title>
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
		<div class="container" style="margin-top: 80px;">
			<h1 style="margin: 0px 0px 40px 0px; font-size: 30px;">Booking appointment with <?php echo $change_data_array['workshop_name'];?></h1>
			<table class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<td>Available Time</td>
					<td>Book</td>
				</thead>
				<tbody>
				
				</tbody>
			</table>
		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
	</body>
</html>