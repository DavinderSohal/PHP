<?php 
session_start();


?>
<?php include('connection/connect1.php'); ?>

<?php 
	if(isset($_POST['login'])){
	
		extract($_POST);
		
		$query="select * from register where email='$uname' and password='$passw'";
	
		$run=mysqli_query($conn,$query);
		
		
		if($run){
		
			if(mysqli_num_rows($run)>0){
			
				header("location: profile.php");
				
				$_SESSION['email']=$uname;
				
			}
			else{
			
				echo "login not success";
			}
		
		}
		
	
	}

?>

<p>Login form</p>

<form action="" method="post">
	
	<p><input type="text" name="uname" placeholder="enter email"/></p>
	<p><input type="password" name="passw" placeholder="enter password"  /></p>
	
	
	<button type="submit" name="login">login </button>
</form>