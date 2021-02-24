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
<div class="q"><h2>CUSTOMER REGISTRATION FORM</h2>
<table cellspacing="10" cellpadding="5">
<form action="reg.php" method="post" enctype="multipart/form-data">
<tr>
<td>Name</td>
<td><input  type="text" name="name"></td>
</tr>
<tr>
<td>User Name</td>
<td><input  type="text" name="username"></td>
</tr>
<tr>
<td>password</td>
<td><input  type="password" name="password"></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input  type="Password" name="confirm_password"></td>
</tr>
<tr>
<td>Mobile</td>
<td><input  type="text" name="mobile"></td>
</tr>
<tr>
<td>Email</td>
<td><input  type="email" name="email"></td>
</tr>
<tr>
<td>Date of Birth</td>
<td><input  type="date" name="date_of_birth"></td>
</tr>
<tr>
<td>Address</td>
<td><input  type="text" name="address"></td>
</tr>
<tr>
<td>city</td>
<td><input  type="text" name="city"></td>
</tr>
<tr>
<td>state</td>
<td><input  type="text" name="state"></td>
</tr>
<tr>
<td>UPLOAD IMAGE</td>
<td><input type="file" name="image"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="next"></td>
</tr>
</form>
</table>
</div></div></div>