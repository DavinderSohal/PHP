<?php 
include("connection/connect.php");
?>

<table border="2px solid black" cellpadding="5" cellspacing="5">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Contact</th>
	</tr>
	<?php 
	    if(isset($_GET['page'])){
			
			 $page=$_GET['page'];
				
				if($page=="" || $page==1){
				
					$page=0;
					
				}
				else{
				
					$page=($page*4)-4;
					
				}
			
	
	
	     
		$query="select * from register limit $page,4";
		$run=mysqli_query($conn,$query);
		
		while($data=mysqli_fetch_array($run)){
		
		
			extract($data);
			
			?> 
				<tr>
					<td><?php echo $name; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $contact; ?></td>
				</tr>
			
			
			<?php
		
		}
		}
	?>

	<?php 
		$query="select * from register";
		
		$run=mysqli_query($conn,$query);
		
		$count=mysqli_affected_rows($conn);
		
		$count=$count/4;
			
		$a=ceil($count);
	
		for($b=1;$b<=$a;$b++){
		
			?><a href="display.php?page=<?php echo $b; ?>" style="padding:5px; color:red; text-decoration:none;"><?php echo $b; ?></a> <?php 
		
		}
	
	?>
	
	
	
</table>
