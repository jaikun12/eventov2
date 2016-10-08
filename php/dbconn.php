<?php

	include("config.php");

	$conn = mysqli_connect($url,$uname,$pw,$db);

	if(!$conn){
		echo "There is no connection: " . mysqli_error();
	}
	else{
		echo "Connected.";
	}
	
?>