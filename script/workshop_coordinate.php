<?php
$homepage = @file_get_contents('https://dl.dropboxusercontent.com/u/2014613/workshop/workshoplist');
if ($homepage === false) {
	$homepage = json_encode(array());
}
echo return_array(json_decode($homepage, true));

function return_array($data) {
	$data_array = array();
	$change_data_array = array();
	
	if (!empty($data)) {
		foreach($data as $data_loop) {
			$coordinate = explode(',', $data_loop['workshop_coordinates']);
			array_push($change_data_array, array($data_loop['workshop_name'], $coordinate[1], $coordinate[0], $data_loop['workshop_id']));
		}
	}
	
	$data_array = $change_data_array;
	
	return json_encode($data_array);
}
?>
