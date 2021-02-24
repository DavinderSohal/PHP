<style>
body,html
{
	margin:0%;
	padding:0%;
}
.back
{
	height:1200px;
	width:100%;
	background-size:cover;
	background-attachment:fixed;
    background-image:url("img/back.jpg");
	repeat:no-repeat;
}
.main-register{
	height:900px;
	padding:10px;
	width:980px;
	background:white;
	margin:auto;
}
h2{color:#1B75E9;
}
.ads{
	padding:20px;
	padding-top:0px;
	height:100%;
	float:right;
}
.heading{
	width:740px;
}
.ads img{
	height:400px;
	width:200px;
}
</style>
<?php
include'db.php';
?>
<div class="back"><?php
include'header.php';
?>
<div class="main-register">
<div class="ads"><h2>Advertisement</h2><img src="img/ads1.jpg"></div>
<div class="heading"><h2>CUSTOMER REGISTRATION FORM</h2>
<table cellpadding="6">
<form method="post" enctype="multipart/form-data">
<tr><td>Name</td><td><input type="text" name="name" required></td></tr>
<tr><td>Username</td><td><input type="text" name="username" required></td></tr>
<tr><td>Password</td><td><input type="password" name="password" required></td></tr>
<tr><td>Confirm Password</td><td><input type="password" name="cpassword" required></td></tr>
<tr><td>Mobile</td><td><input type="number" name="mobile" required></td></tr>
<tr><td>Email</td><td><input type="email" name="email" required></td></tr>
<tr><td>Date of Birth</td><td><input type="date" name="dob" required></td></tr>
<tr><td>Address</td><td><input type="text" name="address" required></td></tr>
<tr><td>City</td><td><input type="text" name="city" required></td></tr>
<tr><td>State</td><td><input type="text" name="state" required></td></tr>
<tr><td>UPLOAD IMAGE</td><td><input type="file" name="image" required></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="signup" value="Sign Up"></td></tr>
</form>
</table>
</div></div></div>
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
		$a="select  * from `register` where `username`='$username'";
		$b=mysqli_query($con,$a);
		if(mysqli_num_rows($b)>0)
		{
			echo'<script type="text/javascript">alert("User already exists..... try another username")</script>';
		}
		else
		{
			$z="insert into `register` 
			(name,username,password,mobile,email,date_of_birth,address,city,state,image)values
			('$name','$username','$password','$mobile','$email','$dob','$address','$city','$state','$iname')";
			$w=mysqli_query($con,$z);
			if($w)
			{
				header('Location:success.php');
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