<?php
include'db.php';
$x=mysql_query("delete from `News` where id='$_GET[id]'");
if($x)
{
	header("location:admin.php");
}
else
{
	echo"error";
}
?>