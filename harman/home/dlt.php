<?php
include'db.php';
$x=mysqli_query("delete from `home` where id='$_GET[id]'");
if($x)
{
	header("location:show.php");
}
else
{
	echo"error";
}
?>