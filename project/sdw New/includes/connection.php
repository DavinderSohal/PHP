<?php 
	session_start(); 
	$con=mysqli_connect("localhost","root","","sdw");
	if(mysqli_errno($con))
	{
		echo "Error";
	}	
?>