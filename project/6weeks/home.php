<?php session_start(); ?>

<?php $conn=mysqli_connect("localhost","root","","rest"); ?>

<?php  if(isset($_SESSION['em']))
	   {

 ?>

 <?php 
	$email=$_SESSION['em'];
	
	$query="select * from admin where email='$email'";
	
	$run=mysqli_query($conn,$query);
	
	while($data=mysqli_fetch_array($run)){
	
		$name=$data['name'];
		$adminimg=$data['image'];
	}
 ?>
 
<p><?php echo "<img src='uploadimage/$adminimg' width='120' height='120' alt='$name' title='$name' />"; ?></p>
<p>Welcome: <?php  echo $name; ?></p>
<h1>welcome to website</h1>


<a href="logout.php">logout<a>



<?php }
else{

	header("location: login2.php");
} ?>





