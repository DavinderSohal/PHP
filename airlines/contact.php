<style>
.back
{
	height:1200px;
	width:100%;
	background-size:cover;
	background-attachment:fixed;
    background-image:url("img/back.jpg");
	repeat:no-repeat;
}
.main-contact{
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
<div class="back"><?php
include'header.php';
?>
<div class="main-contact">
<div class="ads"><h2>Advertisement</h2><img src="img/ads2.jpg"></div>
<div class="heading"><h2>CONTACT US</h2>
<table cellspacing="10" cellpadding="5">
<form method="post" action="c_success.php">
<tr><td>Name</td><td><input type="text" name="name" required></td></tr>
<tr><td>Company</td><td><input type="text" name="company"></td></tr>
<tr><td>Email</td><td><input type="email" name="email" required></td></tr>
<tr><td>Phone</td><td><input type="number" name="phone" required></td></tr>
<tr><td>Message</td><td><textarea rows="10" cols="50" name="message" required></textarea></td></tr>
<tr><td align="right"><input type="submit" name="submit"></td><td><input type="reset"></td></tr>
</form>
</table>
</div></div></div>
</div></div></div>