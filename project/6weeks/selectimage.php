<?php 

include("connection/conn.php");

?>
<?php 
$query="select * from register";

$run=mysqli_query($conn,$query);

while($data=mysqli_fetch_array($run)){
	extract($data);
	
	
	?> 
		<div id="data">
			
			<p><?php echo "<img src='imageupload/$image' width='120' height='120' alt='$name' title='$name' />"; ?></p>
		
			<p><?php echo $name; ?></p>
			<p><?php echo $email; ?></p>
			
		</div>
	
	
	
	<?php 

}
	

?>