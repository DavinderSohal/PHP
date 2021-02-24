<?php
include'db.php';
$x=mysql_query("delete from `newssite` where id='$_GET[id]'");
if($x)
{
	header("location:admin.php");
}
else
{
	echo"error";
}
?>