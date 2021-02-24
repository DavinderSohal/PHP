<style>
.back
{
	height:1200px;
	width:100%;
	background-size:cover;
	background-attachment:fixed;
    background-image:url("back.jpg");
	repeat:no-repeat;
}
.s{
	height:900px;
	padding:10px;
	width:980px;
	background:white;
	margin:auto;
}
h2{color:#1B75E9;
}
.d{
	padding:20px;
	padding-top:0px;
	height:100%;
	float:right;
}
.q{
	width:740px;
}
.d img{
	height:400px;
	width:200px;
}
</style>
<div class="back"><?php
include'header.php';
?>
<div class="s">
<div class="d"><h2>Advertisement</h2><img src="ads1.jpg"></div>
<div class="q"><h2>LOGIN TO YOUR ACCOUNT</h2>
<table cellspacing="10" cellpadding="5">
<form action="login1.php" method="post">
<tr><td>Username</td><td><input type="text" name="username"></td></tr>
<tr><td>Password</td><td><input type="password" name="password"></td></tr>
<tr><td colspan="2"><center><a href="registration.php">click here for register</a></center></td></tr>
<tr><td colspan="2"><input type="submit" name="sub" value="Login"></td></tr>
</form>
</table>
</div></div></div>