<?php
include 'db.php';
$title=$_POST['title'];
$detail=$_POST['detail'];
$image=$_POST['image'];
$x=mysqli_query("update `home` set `title`='$title',`detail`='$detail',`image`='$iname' where `id`='$_GET[id]'");
if($x)
{
	header("location:show.php");
}
else
{
	echo"error";
}
?>