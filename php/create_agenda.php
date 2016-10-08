<?php 
	require_once("../support/support.php"); 
	$username = $_SESSION["username"];
	$userid = $_SESSION["userid"];
	$eventid = $_SESSION["event_id"];

?>
<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/nav.css">
		<link rel="stylesheet" type="text/css" href="css/cards.css">
		<link rel="stylesheet" type="text/css" href="css/dashboard.css">
		<title>Creating Agenda...</title>
	</head>
	<body>
<?php
	
	$agenda_name = $_POST['agenda_name'];
	$agenda_loc = $_POST['agenda_loc'];
	$agenda_desc = $_POST['agenda_desc'];
	$agenda_start = $_POST['agenda_start'];
	$agenda_end = $_POST['agenda_end'];

	$create_agenda = $connection->myQuery("INSERT INTO agenda_table (event_id, agenda_name, agenda_desc, is_active, start_time, end_time, agenda_loc) VALUES ('$eventid', '$agenda_name', '$agenda_desc', 1, '$agenda_start', '$agenda_end', '$agenda_loc');");
	$link = "../event-monitoring.php?eventid=" . $eventid;
	redirect($link);
?>
</body>
</html>