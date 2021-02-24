<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Windows Softtware</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css"/>
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
#img
{
	height:200px;
	width:200px;
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
            <li class="windows.php"><a href="windows.php" class="windows"><span class="fa fa-windows"></span> Windows</a></li>
            <li><a href="android.php" class="android"><span class="fa fa-android"></span> Android</a></li>
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
<!-- Start Row for Windows Catagory-->
<div class="container">
    <div class="row" style="margin-bottom:10px;">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h2 class="text-center"><span style="border-bottom:#000 4px solid">Windows <span class="fa fa-windows"></span>&nbsp;Categories</span></h2>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-3" align="center">
                	<a href="windowscat.php?catid=1"> 
                        <div class="panel panel-default">
                            <div class="panel-body"><span class="fa fa-globe" id="icon"></span><h4>Browsers</h4></div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3" align="center">
                <a href="windowscat.php?catid=2"> 
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-exclamation-triangle" id="icon"></span><h4>Anti-Malware</h4></div>
                    </div>
                 </a>
                </div>
                <div class="col-lg-3" align="center">
                <a href="windowscat.php?catid=3"> 
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-cogs" id="icon"></span><h4>System Tuning</h4></div>
                    </div>
                 </a>
                </div>
                <div class="col-lg-3" align="center">
                <a href="windowscat.php?catid=4"> 
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-file-image-o" id="icon"></span><h4>Photo/Image</h4></div>
                    </div>
                </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3" align="center">
                <a href="windowscat.php?catid=5"> 
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-cloud" id="icon"></span><h4>File Sharing</h4></div>
                    </div>
                </a>
                </div>
                <div class="col-lg-3" align="center">
                <a href="windowscat.php?catid=6"> 
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-lock" id="icon"></span><h4>Security</h4></div>
                    </div>
                </a>
                </div>
                <div class="col-lg-3" align="center">
                <a href="windowscat.php?catid=7"> 
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-file-archive-o" id="icon"></span><h4>Compression</h4></div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3" align="center">
                <a href="windowscat.php?catid=8"> 
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-play" id="icon"></span><h4>Multimedia</h4></div>
                    </div>
                </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3" align="center">
                <a href="windowscat.php?catid=9"> 
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-weixin" id="icon"></span><h4>Messaging</h4></div>
                    </div>
                    </a>
                     </div>
             	
                	<div class="col-lg-3" align="center">
                  <a href="windowscat.php?catid=10"> 
                  	<div class="panel panel-default">
               <div class="panel-body"><span class="fa fa-newspaper-o" id="icon"></span><h4>Office/News</h4></div>
               </div>
                  </a>
                </div>
              
                <div class="col-lg-3" align="center">
               	 <a href="windowscat.php?catid=11">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="ionicons ion-network" id="icon"></span><h4>Networking</h4></div>
                    </div>
                 </a>
                </div>
                <div class="col-lg-3" align="center">
                <a href="windowscat.php?catid=12">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-desktop" id="icon"></span><h4>Desktop</h4></div>
                    </div>
                 </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3" align="center">
                <a href="windowscat.php?catid=13"> 
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-arrow-circle-up" id="icon"></span><h4>File Transfer</h4></div>
                    </div>
                </a>
                </div>
                <div class="col-lg-3" align="center">
                	<a href="windowscat.php?catid=14">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="fa fa-wrench" id="icon"></span><h4>Devolper</h4></div>	
                    </div>
                 	</a>
                </div>
                <div class="col-lg-3" align="center">
                	<a href="windowscat.php?catid=15">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="glyphicon glyphicon-hdd" id="icon"></span><h4>Drivers</h4></div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3" align="center">
                	<a href="windowscat.php?catid=16">
                    <div class="panel panel-default">
                        <div class="panel-body"><span class="ionicons ion-disc" id="icon"></span><h4>CD/DVDs</h4></div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<!-- End Row for Windows Catagory-->
<?php include "includes/footer.html"; ?>
</body>
</html>