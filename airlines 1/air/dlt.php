<?php
include'db.php';
$x=mysqli_query("delete from `register` where id='$_GET[id]'");
if($x)
{
	header("location:admin.php");
}
else
{
	echo"error";
}
?>