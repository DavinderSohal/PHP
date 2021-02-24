<style>
body,html
{
	margin:0%;
	padding:0%;
}
.back
{
	height:1500px;
	width:100%;
	background-size:cover;
    background-image:url("img/back.jpg");
	background-attachment:fixed;
	repeat:no-repeat;
}
.main
{
	height:750px;
	width:1000px;
	margin:auto;
}
.logo{
	font-size:100px;
	font-family:Gabriola;
	color:white;
	display:inline;
	width:100%;
}
ul a{
	float:left;
    color:white;
	background:#1B75E9;
	text-decoration:none;
	padding:10px;
}
ul a:hover{
	background:white;
	color:black;
}
li{
	display:inline-block;
    list-style-type:none;
}
ul{
margin:0;
padding:0;
width:100%;
}
.backsub
{
	height:300px;
	width:100%;
	background-size:cover;
    background-image:url("img/subs.jpg");
	background-repeat:no-repeat;
}
h2{
	color:#1B75E9;
}
.content{
	background:white;
	padding:10px;
	height:100%;
	width:980px;
	margin:auto;
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
img
{  
    width:400px;
	height:150px;
}
.heading{
	width:740px;
}
h3{
	padding:3px;
	background:#1B75E9;
	color:white;
}
</style>
<div class="back">
<div class="main">
<?php include "header.php" ?>
<div class="backsub">
</div>
<div class="content"><div class="ads"><h2>Advertisement</h2><img src="img/ads.jpg"><br><br><img src="img/ads2.jpg"></div>
<div class="heading"><h2>AIRLINE RESERVATION SYSTEM</h2>
<?php
include'../db.php';
$x="select * from `home` order by id DESC";
$y=mysqli_query($con,$x);
while($a=mysqli_fetch_array($y))
{
?>
<div><div><h3><?php echo $a[title];?></h3></div>
<div><img src="upload/<?php echo $a[image];?>"></div>
<?php echo substr($a[detail],0,100);?>......
<a href="single.php?id=<?php echo $a['id'];?>" style="text-decoration:none">  Read more</a>
</div><?php } ?>
</div></div></div></div>