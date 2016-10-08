<?php
	require_once("support/support.php");
	if(isset($_SESSION["username"])){
		if($_SESSION["is_admin"] == "1"){
			redirect("events-dashboard.php");
		}else{
			redirect("participant-home.php");
		}
	}
	include("boilers/open-tag-html.html"); 
?>
	<title>Evento | Login</title>
	</head>
	<body>
	
	<div class="body-wrap">
		<div class="main-content">
			<center>
				<img src="images/evento-logo-white.png" class="main-logo">
				<!--form class="login-form" action="events-dashboard.php"-->
				<form class="login-form" action="php/login-authentication.php" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<button type="submit" class="button-1">Login</button>
					</div>
				</form>
				<a href="#registration" style="color:white">No account yet? Register here.</a>
				<br><br><br>
				<?php
					if (isset($_GET['error'])){
		                if($_GET['error']==1){
							echo "<div class='alert alert-danger' role='alert'><strong>Try Again. </strong> No Username or password.</div>";
						}else if($_GET['error']==2){
							echo "<div class='alert alert-danger' role='alert'><strong>Oh no. </strong>You have not registered yet.</div>";
						}else if($_GET['error']==3){
							echo "<div class='alert alert-danger' role='alert'><strong>Oh no. </strong>Username or password incorrect.</div>";
						}else if($_GET['error']==4){
							echo "<div class='alert alert-danger' role='alert'><strong>Oh no. </strong>This account has been disabled.</div>";
						}else if($_GET['error']==5){
							echo "<div class='alert alert-danger' role='alert'><strong>Did you forget? </strong>You already have an account.</div>";
						}
					} 
					if (isset($_GET['success'])){
		                if($_GET['success']==1){
							echo "<div class='alert alert-success' role='alert'><strong>Login now. </strong>Your account has been registered.</div>";
						}
					} 
				?>
				<div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="false"></div>

			</center>
		</div>

		<div id="registration" class="full-height full-width">
			<center>
				<form class="login-form" method="POST" action="php/register-user.php">
					<h2 style="color:white;">Fill out the forms to Register</h2>
					
					<div class="form-group">
						<input type="text" class="form-control" name="reg_username" placeholder="Username">
					</div>

					<div class="form-group">
						<input type="password" class="form-control" name="reg_password" placeholder="Password">
					</div>

					<div id="0" class="attendee">
						<div class="form-group">
							<input type="text" class="form-control" name="firstname" placeholder="First Name">
						</div>

						<div class="form-group">
							<input type="text" class="form-control" name="lastname" placeholder="Last Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="occupation" placeholder="Occupation">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="industry" placeholder="Computer Industry">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="company" placeholder="School / Company">
						</div>
					</div>

					<div id="1" class="attendee">
						<div class="form-group">
							<input type="text" class="form-control" name="organizer" placeholder="Organization Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="industry" placeholder="Computer Industry">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="company" placeholder="School / Company">
						</div>
					</div>

					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Email Address">
					</div>

					<select name = "admin" id="select-picker">
						<option name="admin" value="0">Attendee</option>
						<option name="admin" value="1">Organizer</option>
					</select>
					<br><br>

					<div class="form-group">
						<button type="submit" class="button-1">Register</button>
					</div>

				</form>
			</center>
		</div>
	</div>
		

		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/fb-login.js"></script>
		<script src="js/bo-compile.js"></script>

		<script>
		
		$(document).ready(function () {
			  	$('.attendee').hide();
			  	$('#0').show();
			  	$('#select-picker').change(function () {
				    $('.attendee').hide();
				    $('#'+$(this).val()).show();
					})
				});

		//smooth
		$(function() {
			  $('a[href*="#"]:not([href="#"])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html, body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
			  });
			});
		</script>

	</body>
</html>