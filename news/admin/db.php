<?php
mysql_connect('localhost','root','');
$x=mysql_select_db('news');
if(!$x)
{
echo"error";
}
?>