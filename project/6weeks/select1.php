<?php 

include("connection/conn.php");

?>

<table border="2px solid black" cellpadding="5">
	<tr>
		<th>Name</th>
		<th>email</th>
		<th>contact</th>
		<th>college name</th>
		<th>Delete</th>
		<th>Udate</th>
	</tr>
	
	<?php 
		 $query="select * from registeration";
		 
		 $run=mysqli_query($conn,$query);
		 
		 while($data=mysqli_fetch_array($run)){

				extract($data);
				 
		   ?>
                <tr>
					<td><?php echo $name; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $contact; ?></td>
					<td><?php echo $collegename; ?></td>
					<td><a href="delete1.php?id=<?php echo $id; ?>"><img src="image/logo.png" width="30" height="30" /></a></td>
					<td><a href="update1.php"><button>update</button></a></td>
				
				</tr>

		   <?php
		 
		 
		 }
	    
	?>

</table>


