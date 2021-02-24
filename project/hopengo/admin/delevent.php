<?php 
include 'include/config.php';
$id=$_GET['id'];
$del="DELETE FROM `event` WHERE `id`='$id'";
$exe_del=mysqli_query($conn,$del);
header("location:displayevent.php?msg=200");
 ?>