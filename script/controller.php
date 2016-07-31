<?php
include_once('workshop.php');

if (isset($_REQUEST['action']) && trim($_REQUEST['action']) != "") {
	$api_data = Workshop::get_workshop();
	
	switch($_REQUEST['action']) {
		case 'datatable':
			echo Workshop::return_datatable_record($api_data);
			break;
		case 'coordinate':
			echo Workshop::return_coordinate($api_data);
			break;
		default:
			break;
	}
}
?>
