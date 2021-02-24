<?php
include "../db.php";
$name=$_POST['name'];
$company=$_POST['company'];
$email=$_POSt['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$insert= "INSERT into `contact` set name='$name',company='$company',email='$email',phone='$phone',message='$message'";
mysqli_query($con,$insert) ;
?><style>
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
<p style="color:#1B75E9">Thank you for contacting us.We will get back to you soon..</p>
</div></div></div>
</div></div></div>