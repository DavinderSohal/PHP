<?php 

include("connection/connect1.php")
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Login page </title>
	</head>
	<body>
		<?php 
			if(isset($_POST['login'])){
			
				extract($_POST);
				
				$query="SELECT * FROM register1 WHERE username='$uname' AND pass='$passw' ";
				
				$run=mysqli_query($conn,$query);
				
				if($run){
				
					if(mysqli_num_rows($run)>0){
					
						
						header("Location:home.php");  //page redirection method of php
					
					}
					else{
					
						echo "login not success";
					}
				
				}
				else{
				
					
				
				}
			
			
			}
		
		
		?>
		<p>Login form</p>
		
		
		<form action="" method="post">
			<p><input type="text" name="uname" placeholder="enter username" /></p>
			<p><input type="password" name="passw" placeholder="enter username"/></p>
			<p><button type="submit" name="login">login now</button></p>
		
		</form>
	
	</body>
</html>