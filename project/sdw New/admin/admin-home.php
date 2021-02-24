<?php
include "../includes/connection.php";
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) 
{
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
	echo "Session expiered";
}
else
{
	$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
}
if(isset($_SESSION['UName']))
{
if(isset($_POST['submit']))
{
	extract($_POST);
	$query="select UName,Password from admin where UName='$uname' AND Password='$opass'";
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		if(mysqli_num_rows($sql) == 1)
		{			
			if($npass == $cpass)
			{
				$query="update admin set Password='$npass' where UName='$uname'";
				$sql=mysqli_query($con,$query);
				if($sql)
				{
					$SuccessMsg="Password Updated Successfully!";
				}
			}
		}
		else
			{
				$errMsg = "<span>Please Check Your Uname/ Password</span>";
			}
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin-Home</title>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
</head>
<body>
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse"> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="#">mySoft <sub><i>(Admin)</i></sub></a></div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="admin-home.php">Home</a></li>
            <li><a href="uploadSW.php">Upload S/W</a></li>
            <li><a href="updateSW.php">Update S/W</a></li>             
             <li><a href="removeSW.php">Remove S/W</a></li>            
            <li><a href="existingSW.php">Existing Softwares</a></li>
            <li><a href="userRequest.php">User Request</a></li>
            <li><a href="inbox.php">Inbox</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="sign-out.php">Sign-out</a></li>
        </ul>
    </div>
</div>
<?php
if(isset($errMsg))
{
?>
<div class="alert alert-dismissable alert-danger" align="center">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Warning!</strong> <br /><a href="#" class="alert-link"><?php echo $errMsg; ?></a> and try Login again. 
</div>
<?php	
}
?>
<?php
if(isset($SuccessMsg))
{
?>
<div class="alert alert-dismissable alert-success" align="center">
  <button type="button" class="close" data-dismiss="alert"></button>
  <strong></strong> <br /><a href="#" class="alert-link"><?php echo $SuccessMsg; ?></a> 
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
                    <h2 class="panel-title text-center"><b>Change Password</b></h2>
                </div>
                <div class="panel-body">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    	<div class="form-group">
                            <label class="control-label" for="inputDefault">User Name</label>
                            <input type="text" name="uname" class="form-control" required="required" id="inputDefault">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="inputDefault">Current Password</label>
                            <input type="password" name="opass" class="form-control" required="required" id="inputDefault">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="inputDefault">New Password</label>
                            <input type="password" name="npass" class="form-control" required="required" id="inputDefault">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="inputDefault">Confirm New Password</label>
                            <input type="password" name="cpass" class="form-control" required="required" id="inputDefault">
                        </div>
                        <input type="submit" name="submit" class="btn btn-block btn-info" value="submit">
                    </form>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</div>
<?php
 include "../includes/footer.html"; 
 ?>
</body>
</html>
<?php
}
else
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>
<h1 class="text-danger">Please Login to see this page</h1>
</body>
</html>
<?php	
}
?>
