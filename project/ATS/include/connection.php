<?php
session_start();
$con=mysqli_connect("localhost","root","","myats") or die(mysqli_connect_error());
if(mysqli_connect_errno())
{
	echo "There is an error in connection.". mysqli_connect_error();
}
?>