<html>
<head><title>Logging in</title></head>
<body>
	<?php
		require_once("../support/support.php");
		
		$username= $_POST["username"];
		$password= $_POST["password"];
		
		if($username == null || $password == null){
			redirect("../index.php?error=1");
		}else{

			$check = $connection->myQuery("SELECT * FROM users_table WHERE username = '$username';");
			
			if($check->rowCount()!=0){

				while($r=$check->fetch(PDO::FETCH_ASSOC)){

					if($r['password']==$password&&$r['username']==$username){

						$_SESSION["username"] = $r['username'];
						$_SESSION["userid"] = $r['user_id'];
						$_SESSION["is_admin"] = $r['is_admin'];

						$is_login = $connection->myQuery("UPDATE users_table SET is_login = 1 WHERE username = '$username';");

						if($r['is_admin'] ==1){
							redirect("../events-dashboard.php");
						}else{
							redirect("../participant-home.php");
						}

					}else{
						redirect("../index.php?error=3");
					}
			
				}//while end

			}else{
				redirect("../index.php?error=2");
			}
		}
		
	?>
</body>
</html>