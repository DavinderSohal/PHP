<style>
.back
{
	height:1050px;
	width:100%;
	background-size:cover;
	background-attachment:fixed;
    background-image:url("img/back.jpg");
	repeat:no-repeat;
}
h3{
	padding:3px;
	color:white;
	background:#1B75E9;
}
.main-single{ 
    height:750px;
	padding:10px;
	width:980px;
	margin:auto;
	background:white;
}
.heading{
	width:740px;
}
.ads{
	padding:20px;
	padding-top:0px;
	height:100%;
	float:right;
}
.ads img{
	height:300px;
	width:200px;
}	
</style>
<div class="back"><?php
include'header.php';
?>
<?php 
include"home/db.php";
$id=$_REQUEST['id'];
$a="select * from `home` where id='$id'";
$x=mysqli_query($con,$a);
$b=mysqli_fetch_array($x);
?>
<div class="main-single"><div class="ads"><h2>Advertisement</h2><img src="img/ads.jpg"><br><br><img src="img/ads2.jpg"></div>
<div class="heading"><div><h3><?php echo $b[title];?></h3></div>
<img src="home/upload/<?php echo $b[image];?>"><br>
<?php echo $b[detail];?>
</div></div></div>