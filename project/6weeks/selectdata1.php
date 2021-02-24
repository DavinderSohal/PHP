<?php 

$conn=mysqli_connect("localhost","root","","sixw");
	

	
?>

<table border="2px solid black" cellpadding="5">
	<tr>
		<th>sno</th>
		<th>Name</th>
		<th>Email</th>
		<th>contact</th>
		<th>salary</th>
		<th>password</th>
	</tr>
	<?php ?>
	

	<?php 
	
		$query="select * from register";
		
		$run=mysqli_query($conn,$query);
		
		while($data=mysqli_fetch_array($run)){
		
			?>

				<tr>
					<td><?php  echo $data['sno']; ?></td>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['email']; ?></td>
					<td><?php echo $data['contact']; ?></td>
					<td><?php echo $data['salary']; ?></td>
					<td><?php echo $data['password']; ?></td>
				</tr>

			<?php 
		
		}
		
	
	?>

</table>