<style>
.back
{
	height:1000px;
	width:100%;
	background-size:cover;
	background-attachment:fixed;
    background-image:url("back.jpg");
	repeat:no-repeat;
}
.s{
	height:720px;
	padding:10px;
	background:white;
	width:980px;
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
<div class="q"><h2>BOOK YOUR AIRLINE TICKET</h2>
<table cellspacing="10" cellpadding="5">
<form>
<tr>
<td>From City</td><td><select><option>Please Select</option><option>Agra, Kheria Airport, AGR, India</option><option>Ahmedabad, Sardar Vallabhbhai Patel International Airport, AMD, India</option><option>Amritsar, Sri Guru Ram Das Jee International Airport, ATQ, India</option><option>Bangkok, Suvarnabhumi International Airport, BKK, Thailand</option><option>Bengaluru, Kempegowda International Airport, BLR, India</option><option>Bhopal, Raja Bhoj Airport, BHO, India</option><option>Dhaka, Shahjalal International Airport, DAC, Bangladesh</option><option>Durgapur, Kazi Nazrul Islam Airport, RDP, India</option><option>Guwahati, Lokpriya Gopinath Bordoloi International Airport, GAU, India</option><option>Varanasi, Lal Bhadur Shastri Airport, VNS, India</option><option>Jorhat, Rowriah Airport, JRH, India</option><option>Pune, Lohegaon Airport, PNQ, India</option></td>
</tr>
<tr>
<td>To City</td><td><select><option>Please Select</option><option>Agra, Kheria Airport, AGR, India</option><option>Ahmedabad, Sardar Vallabhbhai Patel International Airport, AMD, India</option><option>Amritsar, Sri Guru Ram Das Jee International Airport, ATQ, India</option><option>Bangkok, Suvarnabhumi International Airport, BKK, Thailand</option><option>Bengaluru, Kempegowda International Airport, BLR, India</option><option>Bhopal, Raja Bhoj Airport, BHO, India</option><option>Dhaka, Shahjalal International Airport, DAC, Bangladesh</option><option>Durgapur, Kazi Nazrul Islam Airport, RDP, India</option><option>Guwahati, Lokpriya Gopinath Bordoloi International Airport, GAU, India</option><option>Varanasi, Lal Bhadur Shastri Airport, VNS, India</option><option>Jorhat, Rowriah Airport, JRH, India</option><option>Pune, Lohegaon Airport, PNQ, India</option></td>
</tr>
<tr>
<td>Date</td><td><input type="date"></td></tr>
<tr><td>Passenger</td><td><select><option>Adult</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option></select><select><option>Child</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option></select><select><option>Infants</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option></select></td></tr>
<tr><td>Class</td><td><input type="radio" name="class" value="Economy">Economy <input type="radio" name="class" value="Business">Business</td></tr>
<tr><td align="right"><input type="submit"></td><td><input type="reset"></td></tr></form>
</table>
</div></div></div>