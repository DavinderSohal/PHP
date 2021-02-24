<?php $conn=mysqli_connect("localhost","root","","rest"); ?>


<?php 

	if(isset($_POST['login'])){
	
	
		extract($_POST);
		
		$query="select * from admin where email='$email' and pasword='$passw' ";
	
		$run=mysqli_query($conn,$query);
		
		if($run){
			if(mysqli_num_rows($run)>0){
			
				header("location: selectdata.php");
			
			}
			else{
			
					echo "login not successfull";
			}
			
		
		}
		else{
		
			echo mysqli_error($conn);
		}
		
	}
	
?>

<form action="" method="post">
<p><input type="email" name="email" placeholder="enter username"/></p>
<p><input type="password" name="passw" placeholder="enter password"/></p>
<p><button type="submit" name="login">login</button></p>

</form>