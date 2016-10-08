

<?php
	include_once("../support/support.php");

	$agenda_id = $_REQUEST['agenda'];
	$code = $_REQUEST['qr'];  
	$getID = substr($code, strpos($code, "u") + 1);  
	$user_id = $getID;


	$time = $_REQUEST['time'];

	$insert_activity = $connection->myQuery("INSERT INTO agenda_activity_table(agenda_id, user_id, time_event) VALUES($agenda_id, $user_id, '$time' ) ;");

	echo json_encode("nigga");
	?>
