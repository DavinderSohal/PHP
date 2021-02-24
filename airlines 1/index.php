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
    background-image:url("back.jpg");
	background-attachment:fixed;
	repeat:no-repeat;
}
.main
{
	height:750px;
	width:1000px;
	margin:auto;
}
img
{  
    width:400px;
	height:150px;
}
.aa{
	font-size:100px;
	font-family:Gabriola;
	color:white;
	display:inline;
	width:100%;
}
.b li a{
	float:left;
    color:white;
	background:#1B75E9;
	text-decoration:none;
	padding-left:10px;
	padding-right:10px;
	padding-top:10px;
	padding-bottom:10px;
}
.b a:hover{
	background:white;
	color:black;
}
.b li{
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
    background-image:url("subs.jpg");
	background-repeat:no-repeat;
}
h2{
	color:#1B75E9;
}
.c{
	background:white;
	padding:10px;
	padding-top:0.01px;
	height:100%;
	width:980px;
	margin:auto;
}
.q{
	width:740px;
}
h3{
	background:#1B75E9;
	color:white;
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
<div class="back">
<div class="main">
<div class="aa"><img src="logo.png">Airlines
</div>
<ul class="b" width="100%">
<li><a href="index.php">HOME</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="ticket.php">BOOK TICKET</a></li>
<li><a href="air/add_new.php">REGISTER</a></li>
<li><a href="login.php">LOGIN</a></li>
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
<div class="c"><div class="d"><h2>Advertisement</h2><img src="ads.jpg"><br><br><img src="ads2.jpg"></div>
<div class="q"><h2>AIRLINE RESERVATION SYSTEM</h2>
<?php
include'admin/db.php';
$x="select * from `booking` order by id DESC";
$y=mysqli_query($x);
while($a=mysqli_fetch_array($y))
{
?>
<div><div><h3><?php echo $a[title];?></h3></div>
<div><img src="admin/upload/<?php echo $a[image];?>"></div>
<?php echo substr($a[detail],0,100);?>......
<a href="single.php?id=<?php echo $a[id];?>" style="text-decoration:none">  Read more</a>
</div><?php } ?>
</div></div></div></div>