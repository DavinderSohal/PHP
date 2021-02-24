<?php
mysql_connect('localhost','root','');
$x=mysql_select_db('abc');
if(!$x)
{
echo"error";
}
?>