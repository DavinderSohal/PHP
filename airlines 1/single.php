<style>
.back
{
	height:1050px;
	width:100%;
	background-size:cover;
	background-attachment:fixed;
    background-image:url("back.jpg");
	repeat:no-repeat;
}
h3{
	padding:3px;
	color:white;
	background:#1B75E9;
}
.c{ 
    height:750px;
	padding:10px;
	width:980px;
	margin:auto;
	background:white;
}
.q{
	width:740px;
}
.d{
	padding:20px;
	padding-top:0px;
	height:100%;
	float:right;
}
.d img{
	height:300px;
	width:200px;
}	
</style>
<div class="back"><?php
include'header.php';
?>
<?php 
include"admin/db.php";
$a=mysqli_query("select * from `booking` where id='$_GET[id]'");
$b=mysqli_fetch_array($a);
?>
<div class="c"><div class="d"><h2>Advertisement</h2><img src="ads.jpg"><br><br><img src="ads2.jpg"></div>
<div class="q"><div><h3><?php echo $b[title];?></h3></div>
<img src="admin/upload/<?php echo $b[image];?>"><br>
<?php echo $b[detail];?>
</div></div></div>