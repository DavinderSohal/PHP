<!-- image uploading and display in HTML using image TAG and PHP -->
<?php $conn=mysqli_connect("localhost","root","","sixweeks"); ?>

<?php 
	//registration coding here
	
	if(isset($_POST['register'])){
	
		extract($_POST);
		
		$img=$_FILES['userimage']['name'];
		$tmp_img=$_FILES['userimage']['tmp_name'];
		
		move_uploaded_file($tmp_img,"studentimage/$img");
		
		$query="insert into userdata(name,email,contact,image) values('$nm','$em','$cn','$img')";
		
		$run=mysqli_query($conn,$query);
		
		if($run){
		
			echo "register success";
		}
		else{
		
			echo "register not success";
		}
		
		
		
	
	}
	

?>




<p>User Registration Page with Image</p>

<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="nm" /></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="em" /></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" name="cn" /></td>
		</tr>
		<tr>
			<td>Upload Image</td>
			<td><input type="file" name="userimage" /></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit" name="register">register<button></td>
		</tr>
	</table>
</form> 



<?php 
	
	$query="select * from userdata";
	$run=mysqli_query($conn,$query);
	
	while($data=mysqli_fetch_array($run)){
	
		extract($data);
		
		?> 
			<div style="float:left; padding:10px;">
				<p><a href="showdata.php?id=<?php echo $id; ?>"><?php echo "<img src='studentimage/$image' width='120' height='120' alt='$name' title='$name' />"; ?></a></p>
				<p><a href=""><?php echo $name; ?></a></p>
			
			</div>
		
		
		<?php 
	
	}


?>


