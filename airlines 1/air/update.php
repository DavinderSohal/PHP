<?php
include 'db.php';
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$date_of_birth=$_POST['date_of_birth'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$iname=$_FILES["image"]["name"];
$itmp=$_FILES["image"]["tmp_name"];
$path='upload/'.$iname;
if($iname){
	move_uploaded_file($itmp,$path);
}
$x=mysqli_query("update `register` set `name`='$name', `username`='$username', `password`='$password',`confirm_password`='$confirm_password',`mobile`='$mobile',`email`='$email',`date_of_birth`='$date_of_birth',`address`='$address',`city`='$city',`state`='$state',`image`='$iname' where `id`='$_GET[id]'");
if($x)
{
	header("location:admin.php");
}
else
{
	echo"error";
}
?>