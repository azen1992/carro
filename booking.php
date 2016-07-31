<?php
	// require_once('script/workshop.php');
	
	// if (isset($_REQUEST['workshop']) && (int)$_REQUEST['workshop'] > 0) {
		// $workshop_data = Workshop::return_single_workshop(Workshop::get_workshop(), $_REQUEST['workshop']);
		// if (!$workshop_data) {
			// header('Location: index.php');
		// }
	// } else {
		// header('Location: index.php');
	// }
?>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<title>Booking Appointment</title>
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
			<h1 style="margin: 0px 0px 40px 0px; font-size: 30px;">Booking appointment with <?php echo $workshop_data['workshop_name'];?></h1>
			<table class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<td>Available Time</td>
					<td>Book</td>
				</thead>
				<tbody>
					<tr>
						<td>
							<b>Monday to Friday</b> <br/>
							- 9 A.M to 12 P.M <br/>
							- 1 P.M to 6 P.M </br>
						</td>
						<td class="vert-align">
							<button class="btn btn-sm btn-block btn-success">Book</button>
						</td>
					</tr>
					<tr>
						<td>
							<b>Saturday</b> <br/>
							- 8 A.M to 12 P.M <br/>
						</td>
						<td class="vert-align">
							<button class="btn btn-sm btn-block btn-success">Book</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<footer class="footer">
			<div class="container">
				<p class="text-muted">Workshop Listing by Azen Yew.</p>
			</div>
		</footer>
		<div class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Modal title</h4>
					</div>
					<div class="modal-body">
						<p>One fine body&hellip;</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootbox.min.js"></script>
		
	</body>
</html>