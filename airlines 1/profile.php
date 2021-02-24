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
<?php
session_start();
include'air/db.php';
$a=mysqli_query("select  * from `register` where `id`='$_SESSION[uid]'") or die(mysql_error());
$b=mysqli_fetch_array($a);

?>
<table border="1" cellpadding="10" cellspacing="1">
<tr><td>Username</td><td><?php echo $b['username'];?></td></tr>
<tr><td>Password</td><td><?php echo $_SESSION['password'];?></td></tr>
</table>
<a href="logout.php">logout</a>
</div></div>