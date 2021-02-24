<?php
include 'db.php';
$news=$_POST['news'];
$category=$_POST['category'];
$detail=$_POST['detail'];
$x=mysql_query("update `news` set `news`='$news', `category`='$category', `detail`='$detail' where `id`='$_GET[id]'");
if($x)
{
	header("location:admin.php");
}
else
{
	echo"error";
}
?>