<?php
	require_once("../support/support.php"); 
	$agenda_id = $_POST['agenda_id'];
	$agenda_title = $_POST['agenda_title'];
	$agenda_loc = $_POST['agenda_loc'];
	$agenda_desc = $_POST['agenda_desc'];
	$agenda_start = $_POST['agenda_start'];
	$agenda_end = $_POST['agenda_start'];

	$create_agenda = $connection->myQuery("UPDATE agenda_table SET agenda_name = '$agenda_name', agenda_desc = '$agenda_desc', is_active = 1, start_time = '$agenda_start', end_time = '$agenda_end', agenda_loc = '$agenda_loc';");
	$link = "../agenda-details.php?agenda_id=" . $agenda_id;
	redirect($link);

	?>