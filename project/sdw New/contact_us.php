<?php
include "includes/connection.php";
if(isset($_POST['submit']))
{
	extract($_POST);
	$date=date("Y-m-d");
	$query="insert into inbox(UName,UEmail,MsgDate,Message) values('$name','$email','$date','$message')";
	$sql=mysqli_query($con,$query);	
	if($sql)
	{
		$successMsg="Message Sent Successfully!";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/navigationBar.css"/>
<style>
.header {
        color:#000;
		background-color:#39C;
        font-size:27px;
        padding:10px;
    }
.bigicon {
        font-size:35px;
        color:#000;
    }
#cal{
	height:30px;
	width:30px;
	color:#000;
    }
</style>
</head>
<body>
<!-- Navbar Start -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#">mySoft</a> </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
        <ul class="nav navbar-nav">
            <li><a href="index.php" class="windows"><span class="fa fa-home"></span> Home</a></li>
            <li><a href="windows.php" class="windows"><span class="fa fa-windows"></span> Windows</a></li>
            <li><a href="index.php" class="android"><span class="fa fa-android"></span> Android</a></li>
        </ul>
        <form class="navbar-form navbar-left" action="#" method="get">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control col-lg-8" placeholder="Coming Soon...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" name="search" value="search"><span class="fa fa-search"></span></button>
                    </span> </div>
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">        	
            <li><a href="swRequest.php" class="nav-link">Software Request</a></li>
            <li class="active"><a href="contact_us.php" class="nav-link">Contact Us</a></li>
        </ul>
    </div>
</div>
<?php 
if(isset($successMsg))
{
?>
<div class="alert alert-dismissable alert-success" align="center">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <?php echo  "Hello <span class='text-warning'><b><i>" .$name . "</i></b>,</span>"; ?><br />
  <strong><?php echo $successMsg; ?></strong>
</div>
<?php 
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>
                        <div class="form-group"> <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-7">
                                <input id="fname" name="name" type="text" placeholder="Your Name" class="form-control">
                            </div>
                        </div>                      
                        <div class="form-group"> <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-7">
                                <input id="email" name="email" type="email" placeholder="Email Address" class="form-control">
                            </div>
                        </div>
                        <div class="form-group"> <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-7">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here." rows="7"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" name="submit" value="submit" class="btn btn-info btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.html"; ?>
</body>
</html>