<?php ob_start();
session_start();

include 'include/config.php';
$id=$_GET['id'];
$volunteer_id=$_SESSION['vid'];
$del="INSERT INTO `volunteer`(`volunteer`, `eventid`) VALUES ('$volunteer_id','$id')";
$exe_del=mysqli_query($conn,$del);
header("location:displayevent.php?msg=200");
 ?>