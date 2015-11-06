<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
	/* Styling for the only view, would normally use a separate CSS file but doesn't seem necessary given the task */
		#container {
			text-align: center;
		}
		table {
			width: 500px;
			margin: 0 auto;
			text-align: center;
		}
		thead {
			background-color: #93B3F1;
		}
		
	</style>
	<!-- load all necessary files for DataTables -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"></script>
	<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
	//execute datatable via jQuery
		$(document).ready(function(){
			$('#employeesTable').DataTable({
				//order by the distance from ceo column 
				'order':[2, 'asc']
			});
		});
	</script>
</head>
<body>
	<div id="container">
		<table id="employeesTable">
			<thead>
				<tr>
					<th>Employee Name</th>
					<th>Boss Name</th>
					<th>Distance from CEO</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//loop through employees 
				foreach($employees as $employee)
				{ ?>
				<tr>
					<!-- Display Employee Name -->
					<td><?= $employee->emp_name ?></td>
					<!-- Display Boss Name -->
					<td><?= $employee->sup_name ?></td>
					<!-- Display Distance from CEO -->
					<td>
						<? //If it is the CEO, the distance from CEO is 0,
						   //otherwise, the distance from CEO is the bossId
							if($employee->id == 1){
								echo 0;
							} else {
								echo $employee->distance_from_ceo;
							}
						?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>