<?php
include'db.php';
?>
<?php
if(isset($_POST['signup']))
{
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$iname=$_FILES["image"]["name"];
	$itmp=$_FILES["image"]["tmp_name"];
	$path='upload/'.$iname;
	if($iname)
	{
		move_uploaded_file($itmp,$path);
	}	
	if($cpassword==$password)
	{
		$a=mysql_query("select  * from `register` where `username`='$username'") or die(mysql_error());
		if(mysql_num_rows($a)>0)
		{
			echo'<script type="text/javascript">alert("User already exists..... try another username")</script>';
		}
		else
		{
			$x=mysql_query("insert into `register` 
			(name,username,password,mobile,email,date_of_birth,address,city,state,image)values
			('$name','$username','$password','$mobile','$email','$dob','$address','$city','$state','$iname')");
			if($x)
			{
				header("location:success.php");
			}
			else
			{
				echo'<script type="text/javascript">alert("error in inserting to table")</script>';
			}
		}	
	}	
	else
	{
		echo'<script type="text/javascript">alert("Password and Confirm Password does not match")</script>';
	}
}
?>