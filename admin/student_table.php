	<?php include('../dbcon.php'); ?>
	<form action="delete_student.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	
	<div class="pull-right">
			
	</div>
	
		<thead>
		<tr>
					<th></th>
					
					<th>Name</th>
					<th>Email</th>
				
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($conn,"select * from student ") or die(mysqli_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['student_id'];
		?>
	
		<tr>
	
	
		<td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
		<td><?php echo $row['username']; ?></td> 
		<td><?php echo $row['email']; ?></td> 
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>