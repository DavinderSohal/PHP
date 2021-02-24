<?php
include'db.php';
$x=mysql_query("delete from `detail` where id='$_GET[id]'");
if($x)
{
	header("location:show.php");
}
else
{
	echo"error";
}
?>