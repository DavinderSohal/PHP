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
.main-booking{
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
include'../db.php';
?>
<div class="back"><?php
include'header.php';
?>
<div class="main-booking">
<div class="ads"><h2>Advertisement</h2><img src="img/adsa.jpg"></div>
<div class="heading"><h2>BOOK YOUR AIRLINE TICKET</h2>
<b>Booking successfull<b></div></div></div>
