<?php
include "includes/connection.php";
$swid=$_GET['id'];
$query="select SetupPath,Downloads from softwares where SWID=$swid";
$sql=mysqli_query($con,$query);
$result=mysqli_fetch_array($sql);
$setup=$result['SetupPath'];
$downloads=$result['Downloads']+1;
$query="update softwares set Downloads=$downloads where SWID=$swid";
$sql=mysqli_query($con,$query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Download Software</title>
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
span.glyphicon.glyphicon-download-alt{ float:right; color:#333; font-size:18px}
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
<!-- Start Row for Windows Catagory-->
<div class="container">   
    <h4><center><b></b></center></h4>
        <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div align="center" class="alert alert-dismissable alert-success">
              <strong><h4>Your Software is now Downloading.....</h4></strong>
              <div></div>
              <h5>If not then <a href="<?php echo $setup;?>" download class="text-danger">Click Here</a></h5> 
            </div>            
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<!-- End Row for Windows Catagory-->
<?php include "includes/footer.html"; ?>
<script>
$(document).ready(function(e) {  
    window.setTimeout(function(){
        window.location.href = "<?php echo $setup;?>";
    }, 3000);	
});
</script>
</body>
</html>