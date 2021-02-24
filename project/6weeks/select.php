<?php 
include("connection/connect.php");
?>

<table cellpadding="5" cellspacing="1" border="2px solid black">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>contact</th>
		<th>College Name</th>
		<th>delete</th>
		<th>update</th>
	</tr>
	<?php 
	   if(isset($_GET['page'])){
	
		   $page=$_GET['page'];
		
			if($page=="" ||$page==1){
				
				$page=0;
			
			}
			else{
			
				$page=($page*3)-3;
				
			}
		 
		$query="select * from mydata limit $page,3";
		$run=mysqli_query($conn,$query);
		
		 $count=mysqli_affected_rows($conn);
		 echo "Total :$count records found..........";
	     
		 while($data=mysqli_fetch_array($run)){
		 
			extract($data);
			
			//$name=$data['name'];
			
			?> 
			   
			  <tr>
					<td><?php echo $name; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $contact; ?></td>
					<td><?php echo $collegename; ?></td>
					<td><a href="delete.php?id=<?php echo $id;  ?>"><button>delete</button></a></td>
					<td><a href="edit.php"><button>Edit</button></a></td>
			  
			  </tr>
			
			<?php 
		 
		 
		 }
		 
		 }
	?>
	<?php
		
		$query="select * from mydata";

		$run=mysqli_query($conn,$query);
		
		$count=mysqli_affected_rows($conn);
		
		$count=$count/3;
		
		$a=ceil($count);
		
		for($b=1;$b<=$a;$b++){
		
			?><a href="select.php?page=<?php echo $b;  ?>" style="padding:5px;"><?php echo $b; ?></a> <?php
		
		}
		
	?>
	

</table>