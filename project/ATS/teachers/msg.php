<?php
include "../include/connection.php";
if(isset($_SESSION['tlogin']))
{	
if(isset($_POST['send']))
{
	extract($_POST);
	$date=date("Y-m-d");	
	$query="insert into inbox(SentBy,Id,EmailId,Msg,Date) values('Teacher',$tid,'$email','$msg','$date')";
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		
			$successMsg="Message Send Successfully!";
	}
	else
	{
			$errMsg="Message Not Send";
	}		
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<style>
body {
	background-image: url(../images/img.jpg);
	background-repeat: repeat;
	background-position: center;
}
#btn {
	margin-top: 15px;
}
span.glyphicon-comment {
	font-size: 20px
}
#textArea {
	margin-bottom: 15px;
}
</style>
</head>

<body>
<div class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand text-capitalize" href="#">Attendance Tracking System</a> </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Attendance </a></li>
            <li class="active"><a href="msg.php">Message To Admin</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <?php
					if(isset($errMsg))
					{
					?>
        <div class="alert alert-dismissable alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong><?php echo  $errMsg;?></strong> </div>
        <?php    
					}
					?>
        <?php 
                    if(isset($successMsg))
					{
					?>
        <div class="alert alert-dismissable alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong><?php echo  $successMsg;?></strong> </div>
        <?php    
					}
					?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Message &nbsp;&nbsp;<span class="glyphicon glyphicon-comment"></span></h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group col-lg-12"> T_ID:
                        <input type="text" class="form-control" id="inputDefault" name="tid" value="<?php echo $_SESSION['tlogin'];?> " readonly="readonly">
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="email" name="email" class="form-control" id="inputDefault" placeholder="Email Id" required="required">
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <textarea class="form-control" name="msg" rows="3" id="textArea" placeholder="Type Your Message" required="required"></textarea>
                        </div>
                    </div>
                    <center>
                        <button type="submit" name="send" class="btn btn-primary btn-block" id="btn">Send Message</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-3"></div>
</div>
</div>
</div>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<?php
	include "../include/footer.html";
?>
</body>
</html>
<?php
}
else
{
	header("location: ../index.php");
}
?>