<?php
$homepage = @file_get_contents('https://dl.dropboxusercontent.com/u/2014613/workshop/workshoplist');
if ($homepage === false) {
	$homepage = json_encode(array());
}
echo return_array(json_decode($homepage, true));

function return_array($data) {
	$data_array = array();
	$change_data_array = array();
	
	$data_array["draw"] = 1;
	$data_array["recordsTotal"] = count($data);
	$data_array["recordsFiltered"] = count($data);
	if (!empty($data)) {
		foreach($data as $data_loop) {
			array_push($change_data_array, array(	'workshop_id' 			=> (isset($data_loop['workshop_id']) ? $data_loop['workshop_id'] : ''),
													'workshop_name' 		=> (isset($data_loop['workshop_name']) ? $data_loop['workshop_name'] : ''),
													'workshop_coordinates' 	=> (isset($data_loop['workshop_coordinates']) ? $data_loop['workshop_coordinates'] : ''),
													'phone' 				=> (isset($data_loop['phone']) ? $data_loop['phone'] : ''),
													'tyre_change' 			=> (isset($data_loop['tyre_change']) && $data_loop['tyre_change'] == 1 ? "Yes" : "No"),
													'oil_change' 			=> (isset($data_loop['oil_change']) && $data_loop['oil_change'] == 1 ? "Yes" : "No"),
													'battery_change' 		=> (isset($data_loop['battery_change']) && $data_loop['battery_change'] == 1 ? "Yes" : "No"),
													'customer_rating' 		=> (isset($data_loop['customer_rating']) ? $data_loop['customer_rating'] : '')));
		}
	}
	
	$data_array["data"] = $change_data_array;
	
	return json_encode($data_array);
}
?>