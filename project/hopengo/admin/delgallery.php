<?php 
include 'include/config.php';
$id=$_GET['id'];
$del="DELETE FROM `gallery` WHERE `id`='$id'";
$exe_del=mysqli_query($conn,$del);
header("location:gltable.php?msg=200");
 ?>