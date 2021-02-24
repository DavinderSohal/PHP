 <?php
include "../include/connection.php";
//Total No of messages
	$query="select * from inbox";
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		$totalMsgs=mysqli_num_rows($sql);			
	}
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
	echo "session expiered";
}
else
{	
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
}
if(isset($_SESSION['UName']))
{	
if(isset($_POST['submit']))
{
	$uname=$_SESSION['UName'];
	extract($_POST);
	$query="select password from admin where UName='$uname' AND Password='$pass'";
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		if(mysqli_num_rows($sql)==1)
		{
			if(strlen($npass) <=8 )
			{
				$errMsg="Passwords Must Be Greater than Or Equal To 8 Characters!";
			}
			else if($npass != $cpass)
			{
				$errMsg="Passwords Not Matched!";
			}
			else
			{
				$query="update admin set Password='$npass' where UName='$uname'";
				if($sql=mysqli_query($con,$query))
				{
					$successMsg="Password Changed Successfully!";
				}				
			}
		}
		else
		{
			$errMsg="Please Check Your Current Password!";
		}
	}
}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<style>
body {
	background-image: url(../images/img.jpg);
	background-repeat: repeat;
	background-position: center;
}
#panel {
	margin-top: 80px;
}
#focusedInput {
	margin-top: 10px;
}
span.glyphicon-envelope {
	font-size: 20px;
}
</style>
</head>

<body>
<div class="navbar navbar-default" id="navbar">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand text-capitalize" href="#">Attendance Tracking System(Admin)</a> </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav navbar-right">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="student-record.php">Student Record</a></li>
                <li><a href="teacher-record.php">Teacher Record</a></li>
                <li><a href="subject-record.php">Subject Record</a></li>
                <li><a href="inbox.php"><span class="glyphicon glyphicon-envelope"></span>&nbsp; <span class="badge">
                    <?php if(isset($totalMsgs)){echo $totalMsgs;}?>
                    </span></a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </ul>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <?php
					if(isset($errMsg))
					{
					?>
            <div class="alert alert-dismissable alert-danger" align="center">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong><?php echo  $errMsg;?></strong> </div>
            <?php    
					}
					?>
            <?php 
                    if(isset($successMsg))
					{
					?>
            <div class="alert alert-dismissable alert-success" align="center">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong><?php echo  $successMsg;?></strong> </div>
            <?php    
					}
					?>
            <div class="panel panel-primary" id="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Change Password</h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group col-lg-12">
                            <input name="pass" class="form-control" id="focusedInput" type="text" placeholder="Current Password..." required>
                            <input name="npass" class="form-control" id="focusedInput" type="text" placeholder="New Password..." required>
                            <input name="cpass" class="form-control" id="focusedInput" type="text" placeholder="Confirm Password..." required>
                        </div>
                        <center>
                            <button type="submit"  name="submit" value="submit" id="btn" class="btn btn-primary btn-block">Submit</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
<?php
include "../include/footer.html";
?>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
else
{
	header("location: ../index.php");
}
?>