<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>
<html>
<head>
<link href="css/style2.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css"> 
<title>Welcome - <?php echo $userRow['email']; ?></title>
</head>
<body>
<div class="main-box">
<div class="header">
<div class="logo"><center><a style="color:MediumPurple; font-weight:bold;" href="home.php"> <i class="fa fa-home fa-lg"></i> Admin Panel</a></center></div>
<div class="welcome"><center><i class="fa fa-user fa-lg"></i>  <?php echo $userRow['email']; ?></center></div>
<div class="logout"><center><a style="color:blue; font-size:24px;font-weight:bold;" href="logout.php?logout">Logout <i class="fa fa-sign-out fa-lg"></i></a></center></div>
<div class="unit-1"><div style="margin-top:22px;"><a style="font-size:18;" href="mng_cms.php"><i class="fa fa-file-text"></i> CMS</a></div></div>
<div class="unit-2"><div style="margin-top:22px;"><a style="font-size:18;" href="mng_cat.php"><i class="fa fa-list-alt"></i> CATEGORY</a></div></div>
<div class="unit-3"><div style="margin-top:22px;"><a style="font-size:18;" href="mng_subcat.php"><i class="fa fa-list-ol"></i> SUBCATEGORY</a></div></div>
<div class="unit-4"><div style="margin-top:22px;"><a style="font-size:18;" href="mng_settings.php"><i class="fa fa-gears"></i> SETTINGS</a></div></div>
<div class="unit-5"><div style="margin-top:22px;"><a style="font-size:18;" href="mng_admissions.php"><i class="fa fa-id-card"></i> ADMISSIONS</a></div></div>
<div class="unit-6"><div style="margin-top:22px;"><a style="font-size:18;" href="mng_enquiry.php"><i class="fa fa-envelope"></i> ENQUIRY</a></div></div>
</div>
