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
.ads h2{color:#1B75E9;
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
.wrapper{
	width:500px;
	margin:auto;
	background:#7f8c8d;
	padding:5px;
	border-radius:10px;
}
.wrapper img{
	width:150px;
}
.logout{
	margin-top:10px;
	background:#c0392b;
	padding:5px;
	color:white;
	width:100%;
	text-align:center;
	font-size:18px;
	font-weight:bold;
}
</style>
<div class="back"><?php
session_start();
include"../db.php";
?>
<?php
include'header.php';
?>
<div class="main-login">
<div class="ads"><h2>Advertisement</h2><img src="img/ads1.jpg"></div>
<div class="heading">
<div class="wrapper"><center><h2>HOME PAGE</h2>
<h3>Welcome User</h3>
<img src="img/avatar.png"></center>
<form action="profile.php" method="post">
<input type="submit" class="logout" name="logout" value="Log Out">
</form>
</div></div></div></div>