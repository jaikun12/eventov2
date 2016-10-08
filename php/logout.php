<?php
	require_once("../support/support.php");
	$is_login = $connection->myQuery("UPDATE users_table SET is_login = 0 WHERE username = '$username';");
	session_destroy();
	redirect("../index.php");
?>