<?php
mysqli_connect('localhost','root','');
$x=mysqli_select_db('air');
if(!$x)
{
echo"error";
}
?>