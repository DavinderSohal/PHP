<?php
mysqli_connect('localhost','root','');
$x=mysqli_select_db('airlines');
if(!$x)
{
echo"error";
}
?>