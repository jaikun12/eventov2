




		<div class="side-nav">
		<h3>My Agendas</h3>
			<ul id="side-nav-items" class="list-group">
				<?php
				
				 $this_event = $_GET['event_id'];

				 $collect_agenda = $connection->myQuery("SELECT * FROM agenda_table WHERE event_id = '$this_event'");
				while($re = $collect_agenda->fetch(PDO::FETCH_ASSOC)){
						$agenda_name = $re['agenda_name'];
						$agenda_id = $re['agenda_id'];


						echo "<a href='agenda-details.php?agenda_id=".$agenda_id."&event_id=".$this_event."'><li class='list-group-item'>".$agenda_name."</li></a>";

					}
				?> 
			
				<!-- <a href=""><li class="list-group-item">Entrance Scan Mode</li></a>
				<a href=""><li class="list-group-item">Exit Scan Mode</li></a>
				<a href="agenda-details.php"><li class="list-group-item">Quiz Show</li></a> -->
				<!--Insert agendas here-->
				<a href="add-agenda.php"><li class="list-group-item">Add Agenda</li></a>
				<!-- <a href="remove-agenda.php"><li class="list-group-item">Remove Agenda</li></a>
			</ul> -->
		</div>