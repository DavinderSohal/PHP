<?php
include "includes/connection.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index File</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/navigationBar.css"/>
</head>
<body>
<!-- Navbar Start -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse"> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.php">mySoft</a> </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
        <ul class="nav navbar-nav">
        	<li class="active"><a href="index.php" class="windows"><span class="fa fa-home"></span> Home</a></li>
            <li><a href="windows.php" class="windows"><span class="fa fa-windows"></span> Windows</a></li>
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
<div class="container" style="background:url(images/background-home.jpg%7Eoriginal)"> 
    <!-- Start Row1 -->
    <div class="row" style="margin-bottom:10px;">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h2 class="text-center"><span style="border-bottom:#000 4px solid">Windows <span class="fa fa-windows"></span> &nbsp; Softwares</span></h2>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <!-- End Row1 --> 
    
    <!-- Start Row2 -->
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2 class="panel-title"><span class="fa fa-clock-o"></span> Latest updates</h2>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-responsive">
                        <?php
					$query="select SWID,SWName,IconPath from softwares where OSType='windows' ORDER BY Date desc LIMIT 5 ";
					$sql=mysqli_query($con,$query);
					while($result=mysqli_fetch_array($sql))
					{	
					?>
                        <tr>
                            <td><img src="<?php echo $result['IconPath'];?>" width="40" height="40" />&nbsp;&nbsp;<a href="Download.php?id=<?php echo $result['SWID'];?>"><?php echo $result['SWName'];?><span class="fa fa-download"  style="float:right"></span></a></td>
                        </tr>
                    <?php
					}
					?>    
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2 class="panel-title"><span class="fa fa-star"></span> Popular software</h2>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-responsive">
                    <?php
					$query="select SWID,SWName,IconPath from softwares where OSType='windows' ORDER BY Downloads LIMIT 5";
					$sql=mysqli_query($con,$query);
					while($result=mysqli_fetch_array($sql))
					{	
					?>
                        <tr>
                            <td><img src="<?php echo $result['IconPath'];?>" width="40" height="40" />&nbsp;&nbsp;<a href="Download.php?id=<?php echo $result['SWID'];?>"><?php echo $result['SWName'];?><span class="fa fa-download"  style="float:right" height="40" width="40"></span></a></td>
                        </tr>
                    <?php
					}
					?>                      
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <!-- End Row2 --> 
    
   
    <hr />
    <!-- Start Row3 -->
    <div class="row" >
        <div class="col-lg-2" style="margin-bottom:10px;"></div>
        <div class="col-lg-8">
            <h2 class="text-center"><span style="border-bottom:#000 4px solid">Android <span class="fa fa-android"></span> &nbsp; Softwares</span></h2>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <!-- End Row3 --> 
    <!-- Start Row4 -->
    <div class="row" style="margin-bottom:50px;">
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2 class="panel-title"><span class="fa fa-clock-o"></span> Latest updates</h2>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-responsive">
                        <?php
					$query="select SWID,SWName,IconPath from softwares where OSType='android' ORDER BY Date LIMIT 5";
					$sql=mysqli_query($con,$query);
					while($result=mysqli_fetch_array($sql))
					{	
					?>
                        <tr>
                            <td><img src="<?php echo $result['IconPath'];?>" width="40" height="40" />&nbsp;&nbsp;<a href="Download.php?id=<?php echo $result['SWID'];?>"><?php echo $result['SWName'];?><span class="fa fa-download"  style="float:right"></span></a></td>
                        </tr>
                    <?php
					}
					?>    
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2 class="panel-title"><span class="fa fa-star"></span> Popular software</h2>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-responsive">
                        <?php
					$query="select SWID,SWName,IconPath from softwares where OSType='android' ORDER BY Downloads LIMIT 5";
					$sql=mysqli_query($con,$query);
					while($result=mysqli_fetch_array($sql))
					{	
					?>
                        <tr>
                            <td><img src="<?php echo $result['IconPath'];?>" width="40" height="40" />&nbsp;&nbsp;<a href="Download.php?id=<?php echo $result['SWID'];?>"><?php echo $result['SWName'];?><span class="fa fa-download"  style="float:right"></span></a></td>
                        </tr>
                    <?php
					}
					?>    
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <!-- End Row4 --> 
</div>
<?php include "includes/footer.html"; ?>
</body>
</html>