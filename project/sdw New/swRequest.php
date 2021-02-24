<?php
$con=mysqli_connect("localhost","root","","sdw");
?>
<?php
include "includes/connection.php";
if(isset($_POST['submit']))
{
	extract($_POST);
	$date=date("Y-m-d");
	$query="insert into swrequest(SWName,UserName,UserEmail,SWDate) values('$swname','$uname','$email','$date')";
	$sql=mysqli_query($con,$query);	
	if($sql)
	{
		$successMsg="Your Sofware Request Sent Successfully!";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>`
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Software Request</title>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="css/navigationBar.css"/>
</head>
<body>
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#">mySoft</a> </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
        <ul class="nav navbar-nav">
        	<li><a href="index.php" class="windows"><span class="fa fa-home"></span> Home</a></li>
            <li><a href="windows.php" class="windows"><span class="fa fa-windows"></span> Windows</a></li>
            <li><a href="#" class="android"><span class="fa fa-android"></span> Android</a></li>
        </ul>
        <form class="navbar-form navbar-left" action="#" method="get">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control col-lg-8" placeholder="Search">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" name="search" value="search"><span class="fa fa-search"></span></button>
                    </span> 
                </div>
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="swRequest.php" class="nav-link">Software Request</a></li>         
        </ul>
    </div>
</div>
<?php 
if(isset($successMsg))
{
?>
<div class="alert alert-dismissable alert-success" align="center">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <?php echo  "Hello <span class='text-warning'><b><i>" .$uname . "</i></b>,</span>"; ?><br />
  <strong><?php echo $successMsg; ?></strong>
</div>
<?php 
}
?>
<div class="container">
<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h2 class="panel-title text-center"><b>Request For Software</b></h2>
            </div>
            <div class="panel-body">
                <form action="#" method="post">
                	<div class="form-group">
                        <label class="control-label" for="focusedInput"></label>
                        <input class="form-control" name="swname" id="focusedInput" type="text" placeholder="Name Of Software">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="focusedInput"></label>
                        <input class="form-control" name="uname" id="focusedInput" type="text" placeholder="Your Name">
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label" for="focusedInput"></label>
                        <input class="form-control" name="email" id="focusedInput" type="email" placeholder="Your Email_ID">
                    </div>                    
                    <input type="submit" class="btn btn-block btn-info" name="submit" value="Send Request">
                </form>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
    <div class="col-lg-4"></div>
</div>
</div>
<?php include "includes/footer.html"; ?>
</body>
</html>
