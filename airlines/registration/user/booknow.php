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
<table border="1">
<?php 
$from=$_POST['from'];
$to=$_POST['to'];
$passenger=$_POST['passenger'];
?>
<span style="color:#1B75E9;">FROM : </span><span><b><?php echo $from; ?></b></span><br><br>
<span style="color:#1B75E9;">TO : </span><span><b><?php echo $to; ?></b></span><br><br>
<tr><th>Airlines</th><th>Arrival Time</th><th>Departure Time</th><th>Price</th><th>Proceed</th></tr>
<form action="blast.php?a=logo1.gif&q=<?php echo $passenger; ?>" method="post">
<tr><td><img src="img/logo1.gif"></td><td>5:00 AM</td><td>5:45 AM</td><td>4500</td><td><input type="submit" value="Book Now"></td></tr></form>
<form action="blast.php?a=logo2.png&q=<?php echo $passenger;?>" method="post">
<tr><td><img src="img/logo2.png"></td><td>9:00 AM</td><td>9:45 AM</td><td>3500</td><td><input type="submit" value="Book Now"></td></tr></form>
<form action="blast.php?a=logo3.jpg&q=<?php echo $passenger;?>" method="post">
<tr><td><img src="img/logo3.jpg"></td><td>1:15 PM</td><td>2:00 PM</td><td>5500</td><td><input type="submit" value="Book Now"></td></tr>
</form>
</table></div></div></div>
