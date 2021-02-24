<style>
.back
{
	height:1200px;
	width:100%;
	background-size:cover;
	background-attachment:fixed;
    background-image:url("back.jpg");
	repeat:no-repeat;
}
.s{
	height:900px;
	padding:10px;
	width:980px;
	background:white;
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
<div class="q"><h2>CONTACT US</h2>
<table cellspacing="10" cellpadding="5">
<form>
<tr><td>Name</td><td><input type="text"></td></tr>
<tr><td>Company</td><td><input type="text"></td></tr>
<tr><td>Email</td><td><input type="email"></td></tr>
<tr><td>Phone</td><td><input type="text"></td></tr>
<tr><td>Message</td><td><textarea rows="10" cols="50"></textarea></td></tr>
<tr><td align="right"><input type="submit"></td><td><input type="reset"></td></tr>
</form>
</table>
</div></div></div>