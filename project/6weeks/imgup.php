<?php 

include("connection/conn.php");

?>
<?php 

	if(isset($_POST['submit'])){
	
		extract($_POST);
		
		$img=$_FILES['simg']['name'];
		$tmp_img=$_FILES['simg']['tmp_name'];
		
		move_uploaded_file($tmp_img,"imageupload/$img");
		
		$query="insert into register(image,name,email) values('$img','$sname','$semail')";
		
			$run=mysqli_query($conn,$query);
			
			if($run){
			
				echo "inserted successfully";
			}
			else{
			
				echo "not success";
			}
		
		
	
	}


?>

<form action="" method="post" enctype="multipart/form-data">
<p><input type="file" name="simg" /></p>
<p><input type="text" name="sname" /></p>

<p><input type="email" name="semail" /></p>
<p><button type="submit" name="submit">register</button></p>

</form>