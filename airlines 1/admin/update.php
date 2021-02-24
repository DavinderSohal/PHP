<?php
include 'db.php';
$title=$_POST['title'];
$detail=$_POST['detail'];
$image=$_POST['image'];
$x=mysqli_query("update `booking` set `title`='$title',`detail`='$detail',`image`='$iname' where `id`='$_GET[id]'");
if($x)
{
	header("location:admin.php");
}
else
{
	echo"error";
}
?>