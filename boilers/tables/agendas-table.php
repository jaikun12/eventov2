<div class="table-responsive" style="clear:both">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Agenda ID</th>
				<th>Agenda Name</th>
				<th>Agenda Location</th>
				<th>Agenda Description</th>
				<th>Start time</th>
				<th>End Time</th>
			</tr>
		</thead>
		<tbody>
			<?php
				
				 $this_event = $_GET['event_id'];

				 $collect_agenda = $connection->myQuery("SELECT * FROM agenda_table WHERE event_id = $this_event");
				while($re = $collect_agenda->fetch(PDO::FETCH_ASSOC)){
						$agenda_name = $re['agenda_name'];
						$agenda_id = $re['agenda_id'];
						$agenda_loc = $re['agenda_loc'];
						$agenda_description = $re['agenda_desc'];
						$agenda_start = $re['start_time'];
						$agenda_end = $re['end_time'];

						echo "<tr>
								<td>".$agenda_id."</td>
								<td>".$agenda_name."</td>
								<td>".$agenda_loc."</td>
								<td>".$agenda_description."</td>
								<td>".$agenda_start."</td>
								<td>".$agenda_end."</td>
							</tr>";
					}
				?> 
			<!-- <tr>
				<td>43</td>
				<td>Quiz Show</td>
				<td>Room 53</td>
				<td>A quiz show about the company's history</td>
				<td>8:00am</td>
				<td>5:00pm</td>
			</tr> -->
			
		</tbody>
	</table>
</div>