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
<div class="logo"><img src="img/logo.png">Airlines
</div>
<ul width="100%">
<li><a href="index.php">HOME</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="booking/booking.php">BOOK TICKET</a></li>
<li><a href="registration/register.php">REGISTER</a></li>
<li><a href="registration/login.php">LOGIN</a></li>
<li><a href="contact.php">CONTACT US</a></li>
</ul>
<div class="backsub">
<table cellspacing="10" cellpadding="5">
<form>
<tr>
<td><b>From City</b></td><td><select><option>Please Select</option><option>Agra, Kheria Airport, AGR, India</option><option>Ahmedabad, Sardar Vallabhbhai Patel International Airport, AMD, India</option><option>Amritsar, Sri Guru Ram Das Jee International Airport, ATQ, India</option><option>Bangkok, Suvarnabhumi International Airport, BKK, Thailand</option><option>Bengaluru, Kempegowda International Airport, BLR, India</option><option>Bhopal, Raja Bhoj Airport, BHO, India</option><option>Dhaka, Shahjalal International Airport, DAC, Bangladesh</option><option>Durgapur, Kazi Nazrul Islam Airport, RDP, India</option><option>Guwahati, Lokpriya Gopinath Bordoloi International Airport, GAU, India</option><option>Varanasi, Lal Bhadur Shastri Airport, VNS, India</option><option>Jorhat, Rowriah Airport, JRH, India</option><option>Pune, Lohegaon Airport, PNQ, India</option></td>
</tr>
<tr>
<td><b>To City</b></td><td><select><option>Please Select</option><option>Agra, Kheria Airport, AGR, India</option><option>Ahmedabad, Sardar Vallabhbhai Patel International Airport, AMD, India</option><option>Amritsar, Sri Guru Ram Das Jee International Airport, ATQ, India</option><option>Bangkok, Suvarnabhumi International Airport, BKK, Thailand</option><option>Bengaluru, Kempegowda International Airport, BLR, India</option><option>Bhopal, Raja Bhoj Airport, BHO, India</option><option>Dhaka, Shahjalal International Airport, DAC, Bangladesh</option><option>Durgapur, Kazi Nazrul Islam Airport, RDP, India</option><option>Guwahati, Lokpriya Gopinath Bordoloi International Airport, GAU, India</option><option>Varanasi, Lal Bhadur Shastri Airport, VNS, India</option><option>Jorhat, Rowriah Airport, JRH, India</option><option>Pune, Lohegaon Airport, PNQ, India</option></td>
</tr>
<tr>
<td><b>Date</b></td><td><input type="date"></td></tr>
<tr><td><b>Passenger</b></td><td><select><option>Adult</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option></select><select><option>Child</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option></select><select><option>Infants</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option></select></td></tr>
<tr><td><b>Class</b></td><td><input type="radio" name="class" value="Economy">Economy <input type="radio" name="class" value="Business">Business</td></tr>
<tr><td align="right"><input type="submit"></td><td><input type="reset"></td></tr></form>
</table></div>
<div class="content"><div class="ads"><h2>Advertisement</h2><img src="img/ads.jpg"><br><br><img src="img/ads2.jpg"></div>
<div class="heading"><h2>AIRLINE RESERVATION SYSTEM</h2>
<?php
include'home/db.php';
$x="select * from `home` order by id DESC";
$y=mysqli_query($con,$x);
while($a=mysqli_fetch_array($y))
{
?>
<div><div><h3><?php echo $a[title];?></h3></div>
<div><img src="home/upload/<?php echo $a[image];?>"></div>
<?php echo substr($a[detail],0,100);?>......
<a href="single.php?id=<?php echo $a[id];?>" style="text-decoration:none">  Read more</a>
</div><?php } ?>
</div></div></div></div>