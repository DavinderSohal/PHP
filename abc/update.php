<?php
include 'db.php';
$name=$_POST['name'];
$class=$_POST['class'];
$rollno=$_POST['rollno'];
$address=$_POST['address'];
$x=mysql_query("update `detail` set `name`='$name', `address`='$address', `class`='$class', `rollno`='$rollno' where `id`='$_GET[id]'");
if($x)
{
	header("location:show.php");
}
else
{
	echo"error";
}
?>