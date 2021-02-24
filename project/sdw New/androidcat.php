<?php
$con=mysqli_connect("localhost","root","","sdw");
?>
<?php
include "includes/connection.php";
$catid =  $_GET['catid'];
$query="select CatName from categories where CatID='$catid'";
$sql=mysqli_query($con,$query);
$result=mysqli_fetch_array($sql);
$catname=$result['CatName'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Android Categories</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<style>
.android, .windows, .navbar-brand, .nav-link {
	font-size: 20px;
}
.fa-search {
	font-size: 19px;
}
#icon {
	font-size: 36px;
}
</style>
</head>

<body>
<!-- Navbar Start -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse"> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.php">mySoft</a> </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
        <ul class="nav navbar-nav">
        	<li><a href="index.php" class="windows"><span class="fa fa-home"></span> Home</a></li>
            <li><a href="windows.php" class="windows"><span class="fa fa-windows"></span> Windows</a></li>
            <li class="active"><a href="android.php" class="android"><span class="fa fa-android"></span> Android</a></li>
        </ul>
        <form class="navbar-form navbar-left"  method="post">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control col-lg-8" value="Coming Soon..." placeholder="Coming Soon..." readonly="readonly">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type=" button" name="search" value="search"><span class="fa fa-search"></span></button>
                    </span> 
                </div>
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="swRequest.php" class="nav-link">Software Request</a></li> 
            <li><a href="contact_us.php" class="nav-link">Contact Us</a></li>        
        </ul>
    </div>
</div>
<!-- Navbar End --> 
<!-- Start Row for Android Catagory-->
<div class="container">
    <div class="row" style="margin-bottom:10px;">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h2 class="text-center"><span style="border-bottom:#000 4px solid">Android <span class="fa fa-android"></span> &nbsp; Catagories</span></h2>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                <h3 align="center" style="color:#FFF"><?php if(isset($catname)){echo $catname;}?></h3>
                    <h2 class="panel-title"><span class="fa fa-clock-o"></span> Latest updates</h2>
                </div>
              </div>
              <?php
			$query="select * from softwares where Category='$catname'";
			$sql=mysqli_query($con,$query);
			while($result=mysqli_fetch_array($sql))
			{				
			?>
            <div class="panel panel-info">
                <div class="panel-body">
                    <h4><img src="<?php echo $result['IconPath'];?>" style=" height:20px" width="20px";/> <a href=""><?php echo $result['SWName'];?></a></h4>
                    <p class="text-justify"><?php echo $result['Description'];?></p>
                </div>
                <div class="panel-footer" align="center">
                    <a class="btn" style="background:#0F6; font-size:14px" href="Download.php?id=<?php echo $result['SWID'];?>"><span class="fa fa-download"></span><br /><strong>Download</strong></a>
                </div>               
            </div>
           <?php
			}
		   ?> 
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<!-- End Row for Android Catagory-->
<?php include "includes/footer.html"; ?>
</body>
</html>