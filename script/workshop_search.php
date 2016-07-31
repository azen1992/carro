<?php
if (isset($_REQUEST['workshop']) && (int)$_REQUEST['workshop'] > 0) {
	$homepage = @file_get_contents('https://dl.dropboxusercontent.com/u/2014613/workshop/workshoplist');
	if ($homepage === false) {
		$homepage = json_encode(array());
	}
	
	$data_array = json_decode($homepage, true);
	if (!empty($data)) {
		foreach($data as $data_loop) {
			if ($_REQUEST['workshop'] == $data_loop['workshop_id']) {
				
			}
		}
	}
} else {
	header('Location: index.php');
}
?>
