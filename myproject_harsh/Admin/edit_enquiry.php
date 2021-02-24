<?php
error_reporting(0);
include("common/connect.php");
$aid=$_REQUEST['aid'];
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
if($_POST['submit']=='Add'){
$insert="insert into enquiry set
name='$name',
email='$email',
message='$message'";
mysqli_query($con,$insert);
header("Location:mng_enquiry.php");
}
?>

<html>
<head>
<title>CMS Page</title>
</head>

<?php

$select="SELECT * FROM enquiry WHERE id='$aid'";
$sql=mysqli_query($con,$select) or die(mysqli_error());
$fetch=mysqli_fetch_array($sql,MYSQLI_ASSOC)or die(mysqli_error());

         
?>

<body>
<?php include("common/header.php");
?>
<div class="Action-Window">
<h1><center> VIEW ENQUIRY PAGE</center></h1>
<div class="cat-box">
<form method="post">
<div><label><b>Name</b></label></div>
<input type="text" style="height:25px ; width:100% ;  margin:left;" name="name" placeholder="Enter Name" value="<?php echo $fetch['name'];?>" required="required" disabled><br><br>
<div><label><b>Email</b></label></div>
<input type="text" style="height:25px ; width:100% ;  margin:left;" name="email" placeholder="Enter Email" value="<?php echo $fetch['email'];?>" required="required" disabled><br><br>
<div><label><b>Message</b></label></div>
<input type="textarea" style="height:100px ; width:100% ; margin:left;" name="message" value="<?php echo $fetch['message'];?>" required="required" disabled><br><br>
</div>
</form>
</div>

<?php
include("common/footer.php");
?>