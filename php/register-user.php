<html>
<head><title>Registering...</title></head>
<body>
<?php
	include("../support/support.php");

	if(isset($_POST["reg_username"])&&isset($_POST["reg_password"])&&isset($_POST["email"])&&isset($_POST["admin"])){

		$reg_username = $_POST["reg_username"];

		$check = $connection->myQuery("SELECT * FROM users_table WHERE username = '$reg_username';");

			if($_POST["admin"] == 1){

				$password = $_POST["password"];
				$organizer = $_POST["organizer"];
				$email = $_POST["email"];
				$occupation = "Organization";
				$is_admin = $_POST["admin"];

				$insert_user = $connection->myQuery("INSERT INTO users_table (username, password, is_admin, is_active) VALUES ('$reg_username', '$reg_password', '$is_admin',1);");

				$insert_user_info = $connection->myQuery("INSERT INTO users_info_table (firstname,email,occupation,industry,company) VALUES ('$organizer','$email','$occupation');");

				redirect("../index.php?success=1");

			}else{

				$password = $_POST["reg_password"];
				$firstname = $_POST["firstname"];
				$lastname = $_POST["lastname"];
				$email = $_POST["email"];
				$occupation = $_POST["occupation"];
				$is_admin = $_POST["admin"];
				$industry = $_POST["industry"];
				$company = $_POST["company"];

				$insert_user = $connection->myQuery("INSERT INTO users_table (username, password, is_active, is_admin, ) VALUES ('$reg_username', '$reg_password', 1, '$is_admin');");

				$insert_user_info = $connection->myQuery("INSERT INTO users_info_table (firstname,lastname,email,occupation) VALUES ('$firstname','$lastname','$email','$occupation','$industry','$company');");

				redirect("../index.php?success=1");

			}


	}else{
		redirect("../index.php?error=1");
	}

?>
</body></html>