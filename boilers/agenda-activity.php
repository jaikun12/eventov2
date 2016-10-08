
<div class="pull-left col-md-8" style="clear:both;">
<?php
	$this_agenda = $_GET['agenda_id'];
	$collect_agenda_info = $connection->myQuery("SELECT * FROM agenda_table WHERE agenda_id = '$this_agenda'");
	$re = $collect_agenda_info->fetch(PDO::FETCH_ASSOC);
	$agenda_name = $re['agenda_name'];
	$agenda_start = $re['start_time']." - ".$re['end_time'];
	$agenda_desc = $re['agenda_desc'];

	echo "<h2>".$agenda_name."</h2>
		  <h4>".$agenda_start."</h4>
		  <h5 style='clear:both;'>".$agenda_desc."</h5>";

	echo "<a href='edit-agenda.php?agenda_id=".$this_agenda."' class='hollow-btn'>Edit</a>";
	?>

<!-- <a href="../edit-agenda.php?agenda_id=" class="hollow-btn">Edit</a> -->
<a href="" class="btn-negative">Remove Agenda</a>
</div>
<br><br>
<div style="margin-top:50px;">
<input type="text" class="form-control" placeholder="Search..">
</div>
<div class="table-responsive" style="clear:both; margin-top:20px;">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Attendee Name</th>
				<th>Email</th>
				<th>Occupation</th>
				<th>Industry</th>
				<th>Company</th>
				<th>Time</th>
			</tr>
		</thead>
		<tbody>
			<?php
				
				 

				 $collect_agenda = $connection->myQuery("SELECT * FROM agenda_activity_table WHERE agenda_id = '$this_agenda'");
				while($re = $collect_agenda->fetch(PDO::FETCH_ASSOC)){
						$userid = $re['user_id'];
						$collect_users = $connection->myQuery("SELECT * FROM users_table WHERE user_id = '$userid'");
						$users = $collect_users->fetch(PDO::FETCH_ASSOC);
						$user_info_id = $users['user_info_id'];

						$collect_info = $connection->myQuery("SELECT * FROM users_info_table WHERE user_info_id = '$user_info_id'");
						$re2 = $collect_info->fetch(PDO::FETCH_ASSOC);
						$att_fname = $re2['firstname'];
						$att_lname = $re2['lastname'];
						$att_email = $re2['email'];
						$att_occupation = $re2['occupation'];
						$att_company = $re2['company'];
						$att_industry = $re2['industry'];
						$time = $re['time_event'];

						echo "<tr>
								<td>".$att_fname." ".$att_lname."</td>
								<td>".$att_email."</td>
								<td>".$att_occupation."</td>
								<td>".$att_industry."</td>
								<td>".$att_company."</td>
								<td>".$time."</td>
							</tr>";
					}
				?> 

			<tr>
				<td>Kristine Aquino</td>
				<td>09771234567</td>
				<td>Student</td>
				<td>Information Technology</td>
				<td>University of Santo Tomas</td>
				<td>3:47pm</td>
			</tr>
			
		</tbody>
	</table>
</div>