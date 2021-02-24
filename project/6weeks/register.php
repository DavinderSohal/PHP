<?php include('connection/connect1.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration page</title>
	</head>
	<body>
	
		<?php 
		
			if(isset($_POST['register'])){
			
				extract($_POST);
				
				
				$prtcbus="insert into register1(name,email,username,pass,contact) values('$sname','$semail','$suser','$spass','$contact')";
			
				$runprtc=mysqli_query($conn,$prtcbus);
				
				if($runprtc){
				
					echo "register success";
				
				}
				else{
					echo "register not success";
				
				}
			
			}
		
		?>
		<form action="" method="POST" enctype="multipart/form-data">
			<p><input type="text" name="sname" placeholder="enter name" /> </p>
			<p><input type="email" name="semail" placeholder="enter email" /> </p>
			<p><input type="text" name="suser" placeholder="enter username" /> </p>
			<p><input type="password" name="spass" placeholder="enter password" /> </p>
			<p><input type="text" name="contact" placeholder="enter contact" /> </p>
			<p><button type="submit" name="register">register</button></p>
		</form>
		
		
		
		
		
		
		
		
	 </body>
</html>