<?php
include "../includes/connection.php";
if(isset($_POST['login']))
{
	extract($_POST);
	$query="select UName,Password from admin where UName='$uname' AND Password='$pass'";
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		if(mysqli_num_rows($sql) == 1)
		{
			$_SESSION['UName']=$uname;
			header("location: admin-home.php");
		}
		else
			{
				$errMsg = "<span class='text-danger'>Please Check Your Uname/ PASSWORD</span>";
			}
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index File</title>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
</head>
<body>
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="admin-home.php">mySoft <sub><i>(Admin)</i></sub></a> 
    </div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2 class="panel-title text-center"><b>Admin Login</b></h2>
                </div>
                <div class="panel-body">
                	<div align="center" class="text-info"><span class="glyphicon glyphicon-user" style="font-size:60px;"></span></div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <label class="control-label" for="focusedInput"></label>
                            <input class="form-control" name="uname" id="focusedInput" type="text" placeholder="User Name" required="required">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="focusedInput"></label>
                            <input class="form-control" name="pass" id="focusedInput" type="password" placeholder="Enter Password" required="required">
                        </div>
                        <input type="submit" class="btn btn-block btn-info" name="login" value="LOGIN">
                    </form>
                </div>
                <div align="center">
					<?php
                        if(isset($errMsg))
                        {
                            echo $errMsg;
                        }
                    ?>
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
