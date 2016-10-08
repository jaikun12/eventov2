<?php

 //test
	require_once("../support/support.php");

	$check = $connection->myQuery("SELECT * FROM users_table;");
	while($r=$check->fetch(PDO::FETCH_ASSOC)){
		echo $r['username'] . " ". $r['password'];
	}

	$conn = mysql_connect("us-cdbr-iron-east-04.cleardb.net:3306","b0d6b55d470806","90edaf02","ad_bfb3532da815777");
        if(!$conn){
            echo mysql_error();
        }else{
            
            $username = "boazcstrike";
            $password = "sze";
            $firstname = "boaz";
            $lastname = "sze";
            $occupation = "student";
            $email = "boazcstrike@yahoo.com.sg";
        
            echo "username: " . $username . "<br>password:  " . $password;

            mysql_query("USE ad_bfb3532da815777;");
            mysql_query("INSERT INTO users_table (username, password) VALUES ('$username', '$password');");
            mysql_query("INSERT INTO users_info_table (firstname,lastname,email,occupation) VALUES ('$firstname','$lastname','$email','$occupation'");
        }

?>