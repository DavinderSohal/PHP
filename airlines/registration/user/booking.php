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
<table cellspacing="10" cellpadding="5">
<form action="booknow.php" method="post">
<tr>
<td><b>From City</b></td><td><select name="from" required><option>Please Select</option><option>Agra, Kheria Airport, AGR, India</option><option>Ahmedabad, Sardar Vallabhbhai Patel International Airport, AMD, India</option><option>Amritsar, Sri Guru Ram Das Jee International Airport, ATQ, India</option><option>Bangkok, Suvarnabhumi International Airport, BKK, Thailand</option><option>Bengaluru, Kempegowda International Airport, BLR, India</option><option>Bhopal, Raja Bhoj Airport, BHO, India</option><option>Dhaka, Shahjalal International Airport, DAC, Bangladesh</option><option>Durgapur, Kazi Nazrul Islam Airport, RDP, India</option><option>Guwahati, Lokpriya Gopinath Bordoloi International Airport, GAU, India</option><option>Varanasi, Lal Bhadur Shastri Airport, VNS, India</option><option>Jorhat, Rowriah Airport, JRH, India</option><option>Pune, Lohegaon Airport, PNQ, India</option></td>
</tr>
<tr>
<td><b>To City</b></td><td><select name="to" required><option>Please Select</option><option>Agra, Kheria Airport, AGR, India</option><option>Ahmedabad, Sardar Vallabhbhai Patel International Airport, AMD, India</option><option>Amritsar, Sri Guru Ram Das Jee International Airport, ATQ, India</option><option>Bangkok, Suvarnabhumi International Airport, BKK, Thailand</option><option>Bengaluru, Kempegowda International Airport, BLR, India</option><option>Bhopal, Raja Bhoj Airport, BHO, India</option><option>Dhaka, Shahjalal International Airport, DAC, Bangladesh</option><option>Durgapur, Kazi Nazrul Islam Airport, RDP, India</option><option>Guwahati, Lokpriya Gopinath Bordoloi International Airport, GAU, India</option><option>Varanasi, Lal Bhadur Shastri Airport, VNS, India</option><option>Jorhat, Rowriah Airport, JRH, India</option><option>Pune, Lohegaon Airport, PNQ, India</option></td>
</tr>
<tr>
<td><b>Date</b></td><td><input type="date" name="date"></td></tr>

<tr><td align="right"><input type="submit"></td><td><input type="reset"></td></tr></form>
</table></div></div></div>
