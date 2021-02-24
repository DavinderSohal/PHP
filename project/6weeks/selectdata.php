
<?php include('connection/connect1.php'); ?>

<table border="2px solid black" cellpadding="5">
	<tr>
		<th>sno</th>
		<th>Name</th>
		<th>Email</th>
		<th>contact</th>
		<th>salary</th>
		<th>password</th>
		<th>delete</th>
		<th>update</th>
	</tr>
	
	<?php 
	
	
		$query="select * from mydata";
		$run=mysqli_query($conn,$query);
		
		while($data=mysqli_fetch_array($run)){
		
		
				extract($data);
				
			?> 
			
    			<tr>
	
					<td><?php echo $id; ?></td>
					<td><?php echo $name; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $contact; ?></td>
					<td><?php echo $salary; ?></td>
					<td><?php echo $password1; ?></td>
					<td><a href="deldata.php?id=<?php echo $id; ?>"><button>delete</button></a></td>
					<td><a href="editdata.php?id=<?php echo $id; ?>"><button>edit</button></a></td>
					
				
				</tr>
			
			
			<?php
		
		}
		
	
	?>
</table>





