
<?php include('connection/connect1.php'); ?>



<?php 

	if(isset($_POST['update'])){
	
	
		extract($_POST);
		
		$id=$_GET['id'];
		
		$query="update mydata set name='$name' , email='$em' , contact='$cn' , salary='$sal' , password1='$passw' where id=$id" ;
		
		$run=mysqli_query($conn,$query);
		
		
		if($run){
		
			header("location: selectdata.php");
		}
		else{
		
			echo "data not updated succesdfully";
		}
	}

?>




<?php 

	 $id=$_GET['id'];

	
	$query="select * from mydata where id=$id";

	$run=mysqli_query($conn,$query);
	
	while($data=mysqli_fetch_array($run)){
	
		extract($data);
		
		
		?>


				<form action="" method="post">
				
					<p><input type="text" name="name" value="<?php echo $name; ?>" /></p>
					<p><input type="email" name="em" value="<?php echo $email; ?>" /></p>
					<p><input type="text" name="cn" value="<?php echo $contact; ?>" /></p>
					<p><input type="text" name="sal" value="<?php echo $salary; ?>" /></p>
					<p><input type="password" name="passw" value="<?php echo $password1; ?>" /></p>
					<p><button type="submit" name="update">update</button></p>
				</form>



		<?php
	
	}
?>