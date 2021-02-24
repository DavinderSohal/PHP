<?php
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
	exit;
}

if (isset($_POST['btn-login'])) {
	
	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);
	
	$email = $DBcon->real_escape_string($email);
	$password = $DBcon->real_escape_string($password);
	
	$query = $DBcon->query("SELECT user_id, email, password FROM tbl_users WHERE email='$email'");
	$row=$query->fetch_array();
	
	$count = $query->num_rows; // if email/password are correct returns must be 1 row
	
	if (password_verify($password, $row['password']) && $count==1) {
		$_SESSION['userSession'] = $row['user_id'];
		header("Location: home.php");
	} else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
				</div>";
	}
	$DBcon->close();
}
?>
<html>
<head>
<link href="css/style4.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
<title>Admin Login</title>
</head>
<body background="images/Hills 1.jpg">
<link href="css/style1.css" rel="stylesheet" type="text/css">
<div id="main-box">
<form method="post">
 <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
<h2><font color="black"><center>ADMIN LOGIN</center></font></h2>
<img src="images/Admin.jpg" height="50%" width="40%" align="right" hspace="6%" vspace="1%" border="2">
<label><b><i class="fa fa-user"></i> Username</b></label>
<input type="email" style="height:25px ; width:40%" name="email" placeholder="Enter Username" required><br><br>
<label><b><i class="fa fa-key"></i> Password</b></label>
<input type="password" style="height:25px ; width:40%" name="password" placeholder="Enter Password" required><br><br>
</div>
<input id="b" type="submit" value="Login" name="btn-login"></div>
</form>
</body>
</html>
