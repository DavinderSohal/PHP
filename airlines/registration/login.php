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
.main-login{
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
<div class="back">
<?php
include'header.php';
?>
<div class="main-login">
<div class="ads"><h2>Advertisement</h2><img src="img/ads1.jpg"></div>
<div class="heading"><h2>LOGIN TO YOUR ACCOUNT</h2>
<table cellspacing="10" cellpadding="5">
<form action="login.php" method="post">
<tr><td>Username</td><td><input type="text" name="username" required></td></tr>
<tr><td>Password</td><td><input type="password" name="password" required></td></tr>
<tr><td colspan="2"><center><a href="register.php">click here for register</a></center></td></tr>
<tr><td colspan="2"><input type="submit" name="login" value="Login"></td></tr>
</form>
</table>
</div></div></div>
<?php
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$a="select  * from `register` where `username`='$username' and `password`='$password'";
	$b=mysqli_query($con,$a);
	if(mysqli_num_rows($b)>0)
	{
		$_SESSION['username']=$username;
		header("location:user/booking.php");
	}
	else
	{
		echo'<script type="text/javascript">alert("Invalid Username or Password")</script>';
	}
}	
?>