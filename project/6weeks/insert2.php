
<?php $conn=mysqli_connect("localhost","root","","rest"); ?>
<?php
	if(isset($_POST['adreg'])){
		
		extract($_POST);
		
		$img=$_FILES['img']['name'];
		$tmp_img=$_FILES['img']['tmp_name'];
	
		move_uploaded_file($tmp_img,"uploadimage/$img");
		
		$query="insert into admin(image,name,email,designation,pasword) values('$img','$adname','$ademail','$desg','$passw')";
		
		
		$run=mysqli_query($conn,$query);
		
		if($run){
		
			echo "registration successful";
		}
		else{
		
			echo "register not done..";
		}
	
	}

 ?>
<p>admin registration  page</p>
<form action="" method="post" enctype="multipart/form-data">

	<p><input type="file" name="img" /></p>
	<p><input type="text" name="adname" placeholder="enter name" /></p>
	<p><input type="text" name="ademail" placeholder="enter email"/></p>
	<p><input type="text" name="desg" placeholder="enter designation"/></p>
	<p><input type="password" name="passw" placeholder="password" /></p>
	
	<p><button type="submit" name="adreg">register admin</button> </p>
</form>