<?php
mysql_connect('localhost','root','');
$x=mysql_select_db('admin');
if(!$x)
{
echo"error";
}
?>