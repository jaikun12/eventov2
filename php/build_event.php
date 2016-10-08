<html>
<head><title>Building...</title></head>
<body>
<?php
	require_once("../support/support.php");

	$userid = $_SESSION["userid"];

	$event_name = $_POST["event_name"];
	$event_loc = $_POST["event_location"];
	$event_desc = $_POST["event_desc"];
	$start_date = $_POST["start_date"];
	$end_date = $_POST["end_date"];
	$hashtags = $_POST["event_hashtags"];
	
	
	$insert_event = $connection->myQuery("INSERT INTO events_table 
		(event_name, start_date, end_date, event_location, user_id, hashtags, description)
		 VALUES 
		 ('$event_name','$start_date','$end_date','$event_loc','$userid','$hashtags','$event_desc');");

	/*if(!$insert_event){
		echo 'Theres no query executed!';
	}else{
		echo 'Inserted event:<br>'.
				$event_name.'<br>'.
				$event_loc.'<br>'.
				$event_desc.'<br>'.
				$start_date.'<br>'.
				$end_date.'<br>'.
				$hashtags.'<br>';
	}*/


	$get_eventid = $connection->myQuery("SELECT * FROM events_table WHERE event_name = '$event_name';");
	$r = $get_eventid->fetch(PDO::FETCH_ASSOC);

	$new_file_name = $r['event_id'];

	//$target_dir = "C:/xampp/htdocs/bluemix/evento/img/eventimg/";

	$target_dir = "/home/vcap/app/htdocs/img/eventimg/";
	$target_file = $target_dir . basename($new_file_name);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	$check = getimagesize($_FILES["file_to_upload"]["tmp_name"]);
	if($check !== false) {
	    echo "<br>File is an image - " . $check["mime"];
	     $uploadOk = 1;
	} else {
	    echo "<br>File is not an image.";
	    $uploadOk = 0;
	}

	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "<br>Sorry, file already exists.";
	    $uploadOk = 0;
	}

	// Check file size
	if ($_FILES["file_to_upload"]["size"] > 500000) {
	    echo "<br>Sorry, your file is too large.";
	    $uploadOk = 0;
	}

	/* Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
	    echo "<br>Sorry, only JPG, JPEG, PNG files are allowed.";
	    $uploadOk = 0;
	}*/

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "<br>Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["file_to_upload"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["file_to_upload"]["name"]). " has been uploaded.";
	    } else {
	        echo "<br>Sorry, there was an error uploading your file.";
	    }
	}

	$cut = substr($target_file, 22);
	if($uploadOk = 1){
		$insert_event = $connection->myQuery("UPDATE events_table SET header_img = '$cut' WHERE event_id = '$new_file_name';");
		redirect("../events-dashboard.php");
	}


?>
<a href="../events-dashboard.php"><br>events-dashboard.php</a>
</body></html>