<?php
include'db.php';
$name=$_POST['name'];
$class=$_POST['class'];
$rollno=$_POST['rollno'];
$address=$_POST['address'];
$x=mysql_query("insert into `detail` 
(name,rollno,class,address)values
('$name','$rollno','$class','$address')"
);
if(x)
{
	echo"working";
	}
else
{
echo"not";
}
?>