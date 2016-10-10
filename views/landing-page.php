<!DOCTYPE html>
<html>
	<head>
		<?php
			include("dependencies.html");
			?>
	</head>
	<body>
		<?php
		include("nav.html");
		?>
		<div class="main-content container-fluid">
			<div id="hello-div" class="">
				<center>
					<img src="../images/sample-dp.jpg" class="user-dp img-circle">
					<h3>Welcome, Jhoebe!</h3>
					<h5>Attendee</h5>
					<img src="../images/qr-sample.jpg" class="user-qr">
					<br><br>
					<p>You are currently an attendee at the IBM Bluemix ITIP Conference</p>
					<p>Use this QR code to access activites. Save it to your device and point it to a scanner!</p>
					
					<h4>What are the things that you could do?</h4>
					<br>
					<div class="row">
						<div class="col-md-4">
						<center>
							<img src="../images/stockpic1.jpg" class="img-circle activity-bubble">
							<h4>Learn</h4>
							<p>Learn from seminars.
						</center>
						</div>

						<div class="col-md-4">
						<center>
							<img src="../images/stockpic1.jpg" class="img-circle activity-bubble">
							<h4>Connect</h4>
							<p>Connect with people</p>
						</center>
						</div>

						<div class="col-md-4">
						<center>
							<img src="../images/stockpic1.jpg" class="img-circle activity-bubble">
							<h4>Acquire</h4>
							<p>Technologies you could use.</p>
						</center>
						</div>
					</div>
				</center>
			</div>

			<div id="things-to-do" class="container bg1">
				<div class="container">
				<center>
					<h1>Join the activities!</h1>
					<p>The conference consists of different breakout sessions. Check them out below.</p>
				</center>
				<div class="row">

				 	<div class="col-md-4 activity-card">
				 			<a href=""><div class="card-img-wrapper">
				 			<img src="../images/stockpic1.jpg" class="card-img">
				 			<!-- <p><img src="../../images/sample-dp.jpg" class="card-speaker img-circle"> Jordan Deja</p> -->
				 			</div></a>

				 			<div class="card-content">
				 			<h3>Analytics Session</h3>
				 			<h5>8:00am, Plenary A</h5>
				 			<p>Short description about the event</p>
				 			</div>
				 			<div class="divider"></div>
					</div>

					<div class="col-md-4 activity-card">
							<a href=""><div class="card-img-wrapper">
							<img src="../images/stockpic2.jpg" class="card-img">
							</div></a>

							<div class="card-content">
				 			<h3>Technopreneurship Session</h3>
				 			<h5>8:00am, Plenary B</h5>
				 			<p>Short description about the event</p>
				 			</div>
				 			<div class="divider"></div>
				 			

					</div>

					<div class="col-md-4 activity-card">
							<a href=""><div class="card-img-wrapper">
							<img src="../images/event-pic1.png" class="card-img">
							</div></a>
				 			
				 			<div class="card-content">
				 			<h3>Watson Session</h3>
				 			<h5>8:00am, Plenary C</h5>
				 			<p>Short description about the event</p>
				 			</div>
				 			<div class="divider"></div>
					</div>

					<!-- <div class="col-md-4 activity-card">
							<a href=""><div class="card-img-wrapper">
							<img src="../../images/event-pic1.png" class="card-img">
							</div></a>
				 			
				 			<div class="card-content">
				 			<h3>Watson Session</h3>
				 			<h5>8:00am, Plenary C</h5>
				 			<p>Short description about the event</p>
				 			</div>
				 			<div class="divider"></div>
					</div>

					<div class="col-md-4 activity-card">
							<a href=""><div class="card-img-wrapper">
							<img src="../../images/event-pic1.png" class="card-img">
							</div></a>
				 			
				 			<div class="card-content">
				 			<h3>Watson Session</h3>
				 			<h5>8:00am, Plenary C</h5>
				 			<p>Short description about the event</p>
				 			</div>
				 			<div class="divider"></div>
					</div>

					<div class="col-md-4 activity-card">
							<a href=""><div class="card-img-wrapper">
							<img src="../../images/event-pic1.png" class="card-img">
							</div></a>
				 			
				 			<div class="card-content">
				 			<h3>Watson Session</h3>
				 			<h5>8:00am, Plenary C</h5>
				 			<p>Short description about the event</p>
				 			</div>
				 			<div class="divider"></div> -->
					</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php 
			include("scripts.html");
			?>
	</body>
</html>
