<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Android Sftware</title>
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
            <h2 class="text-center"><span style="border-bottom:#000 4px solid">Android&nbsp<span class="fa fa-android"></span> &nbsp;Catagories</span></h2>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-3" align="center">
                	<a href="androidcat.php?catid=17">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-gamepad" id="icon"></span><h4>Games</h4></div>
                    </div>
                </div>
                <div class="col-lg-3" align="center">
                	<a href="androidcat.php?catid=18">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-comments" id="icon"></span><h4>Communication</h4></div>
                    </div>
                </div>
                <div class="col-lg-3" align="center">
                	<a href="androidcat.php?catid=19">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-book" id="icon"></span><h4>Education</h4></div>
                    </div>
                </div>
                <div class="col-lg-3" align="center">
                	<a href="androidcat.php?catid=20">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-smile-o" id="icon"></span><h4>Entertainment</h4></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3" align="center">
                	<a href="androidcat.php?catid=21">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-gittip" id="icon"></span><h4>Health & Fitness</h4></div>
                    </div>
                </div>
                <div class="col-lg-3"  align="center">
                	<a href="androidcat.php?catid=22">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-video-camera" id="icon"></span><h4>Media & Video</h4></div>
                    </div>
                </div>
                <div class="col-lg-3" align="center">
                	<a href="androidcat.php?catid=23">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-play-circle" id="icon"></span><h4>Music & Audio</h4></div>
                    </div>
                </div>
                <div class="col-lg-3" align="center">
                	<a href="androidcat.php?catid=24">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-camera" id="icon"></span><h4>Photography</h4></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3" align="center">
                	<a href="androidcat.php?catid=25">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-android" id="icon"></span><h4>Productivity</h4></div>
                    </div>
                </div>
                <div class="col-lg-3" align="center">
                	<a href="androidcat.php?catid=26">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-shopping-cart" id="icon"></span><h4>Shopping</h4></div>
                    </div>
                </div>
                <div class="col-lg-3" align="center">
                	<a href="androidcat.php?catid=27">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-facebook-square" id="icon"></span><h4>Social</h4></div>
                    </div>
                </div>
                <div class="col-lg-3" align="center">
                	<a href="androidcat.php?catid=28">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-wrench" id="icon"></span><h4>Tools</h4></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<!-- End Row for Android Catagory-->
<?php include "includes/footer.html"; ?>
</body>
</html>