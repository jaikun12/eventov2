<nav>
			<img class="brand" src="images/evento-logo-white.png">
			<ul id="nav-menu" class="list-inline">
				
				<li><a href="events-dashboard.php"><div class="menu-item">My Events</div></a></li>
				<li><a href="participant-home.php"><div class="menu-item">My Participants</div></a></li>
				<li><a href="myprofile-org.php"><div class="menu-item">My Profile</div></a></li>
			</ul>
			<a href="php/logout.php" id="logout-btn">Logout</a>
			<div class="user-greeting">
				<p>
				<!--img src="images/devcon-icon.png" class="img-circle user-dp"-->
				Welcome, <?php echo $username;  ?> !</p>
			</div>
			
</nav>