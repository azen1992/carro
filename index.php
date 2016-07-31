<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<title>Workshop List</title>
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
			<div class="form-horizontal" style="background-color: #eee; padding: 20px; margin-bottom: 20px;">
				<h2 style="margin: 0px 0px 15px 0px; font-size: 20px;">Filter:</h2>
				<div class="form-group">
					<label for="tyre_services" class="col-sm-3" style="font-weight: 300;">Tyre services provider: </label>
					<div class="col-sm-9">
						<select id="tyre_services" name="tyre_services" class="form-control">
							<option value="">-- Select an option --</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="oil_services" class="col-sm-3" style="font-weight: 300;">Oil services provider: </label>
					<div class="col-sm-9">
						<select id="oil_services" name="oil_services" class="form-control">
							<option value="">-- Select an option --</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="battery_services" class="col-sm-3" style="font-weight: 300;">Battery services provider: </label>
					<div class="col-sm-9">
						<select id="battery_services" name="battery_services" class="form-control">
							<option value="">-- Select an option --</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
			</div>
			<div style="margin-bottom: 30px;">
			<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Workshop name</th>
						<th>Phone</th>
						<th>Tyre Change Services</th>
						<th>Oil Change Services</th>
						<th>Battery Change Services</th>
						<th>Customer Rating</th>
						<th>Available Time</th>
					</tr>
				</thead>
			</table>
			</div>
		</div>
		<footer class="footer">
			<div class="container">
				<p class="text-muted">Workshop Listing by Azen Yew.</p>
			</div>
		</footer>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
		<script>
			jQuery(document).ready(function() {
				oTable = jQuery('#example').DataTable({
					"ajax": { "url": "script/controller.php?action=datatable" },
					"columns": [
						{ "data": "workshop_name" },
						{ "data": "phone" },
						{ "data": "tyre_change" },
						{ "data": "oil_change" },
						{ "data": "battery_change" },
						{ "data": "customer_rating" },
						{ "defaultContent": "<button class='btn btn-sm btn-success btn-block'>Check</button>" },
					]
				});
				
				jQuery('#example tbody').on('click', 'button', function() {
					var data = oTable.row(jQuery(this).parents('tr')).data();
					window.location.href = 'booking.php?workshop=' + data.workshop_id;
				});
				
				jQuery('#tyre_services').on('change', function() {
					oTable.columns(2).search(this.value).draw();
				});
				
				jQuery('#oil_services').on('change', function() {
					oTable.columns(3).search(this.value).draw();
				});
				
				jQuery('#battery_services').on('change', function() {
					oTable.columns(4).search(this.value).draw();
				});
			});
		</script>
	</body>
</html>