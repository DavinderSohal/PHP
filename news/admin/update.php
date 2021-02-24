<?php
include 'db.php';
$title=$_POST['title'];
$category=$_POST['category'];
$detail=$_POST['detail'];
$address=$_POST['address'];
$x=mysql_query("update `newssite` set `title`='$title', `category`='$category', `detail`='$detail' where `id`='$_GET[id]'");
if($x)
{
	header("location:admin.php");
}
else
{
	echo"error";
}
?>