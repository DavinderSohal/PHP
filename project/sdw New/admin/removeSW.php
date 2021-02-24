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
	if(isset($_POST['removeW']))
{	
	extract($_POST);
	$query="select SWName,Category,IconPath,SetupPath from softwares where SWID=$swid";
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		$result=mysqli_fetch_array($sql);
		$swname=$result['SWName'];
		$cat=$result['Category'];
		$iconpath="../".$result['IconPath'];
		$setuppath="../".$result['SetupPath'];
		$dirpath="../windows/".$cat."/".$swname;
		if (unlink($setuppath))
		{
			if (unlink($iconpath))
			{
				if(rmdir($dirpath))
				{
					$query="delete from softwares where SWID=$swid";
					$sql=mysqli_query($con,$query);
					if($sql)
					{
						$successMsg="<span  class='text-warning'>$swname</span> Removed Successfully!";
					}
				}
			}
		}
	}
	
}
if(isset($_POST['removeA']))
{	
	extract($_POST);
	$query="select SWName,Category,IconPath,SetupPath from softwares where SWID=$swid";
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		$result=mysqli_fetch_array($sql);
		$swname=$result['SWName'];
		$cat=$result['Category'];
		$iconpath="../".$result['IconPath'];
		$setuppath="../".$result['SetupPath'];
		$dirpath="../android/".$cat."/".$swname;
		if (unlink($setuppath))
		{
			if (unlink($iconpath))
			{
				if(rmdir($dirpath))
				{
					$query="delete from softwares where SWID=$swid";
					$sql=mysqli_query($con,$query);
					if($sql)
					{
						$successMsg="<span  class='text-warning'>$swname</span> Removed Successfully!";
					}
				}
			}
		}
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Remove Software</title>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
</head>
<body>
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="#">mySoft <sub><i>(Admin)</i></sub></a></div>
        <div class="navbar-collapse collapse navbar-inverse-collapse">
        	<ul class="nav navbar-nav">
                <li ><a href="admin-home.php">Home</a></li>
                <li><a href="uploadSW.php">Upload S/W</a></li>
                <li><a href="updateSW.php">Update S/W</a></li>             
                <li class="active"><a href="removeSW.php">Remove S/W</a></li>            
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
if(isset($successMsg))    
{
?>
<div class="alert alert-dismissable alert-success" align="center">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong></strong> <br /><a href="#" class="alert-link"><?php echo $successMsg; ?></a> 
</div>
<?php	
}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><b>Remove&nbsp;<span class="fa fa-windows"></span> Windows Software</b></h3>
                </div>
                <div class="panel-body">
                    <form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="focusedInput"></label>
                            <label for="select">Select S/W:</label>
                            <select name="swid" class="form-control" id="select">
                                <?php
								$query="select CatID,CatName from categories where OSType = 'windows'";
								$sql=mysqli_query($con,$query);
								while($result=mysqli_fetch_array($sql))
								{
									$catname=$result['CatName'];
									
									echo "<optgroup label='$catname'>";
									
									$query="select SWID,SWName from softwares where Category='$catname'";
									$sql1=mysqli_query($con,$query);
									while($result1=mysqli_fetch_array($sql1))
									{										
										echo "<option value='".$result1['SWID']."'>".$result1['SWName']."</option>";
									}
									echo "</optgroup>";
								}
                             	?>
                            </select>
                        </div>                        
                        <button name="removeW" type="submit" class="btn btn-block btn-info" value="removeW">Remove</button>
                    </form>                    
                </div>
            </div>
            <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center"><b><span class="fa fa-windows"></span> Windows Softwares</b></h3>
                        </div>
                        <div class="panel-body">
                            <table width="auto" class="table table-striped table-bordered table-hover">
                                <tr>
                                    <th scope="col">S/W ID</th>
                                    <th scope="col">S/W Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Last Updated</th>
                                </tr>
                                <?php
								$query="select SWID,SWName,Category,Date from softwares where OSType='windows'";
								$sql=mysqli_query($con,$query);
									while($result=mysqli_fetch_array($sql))
									{										
										echo "<tr>";
										echo "<td>".$result['SWID']."</td>";
										echo "<td>".$result['SWName']."</td>";
										echo "<td>".$result['Category']."</td>";
										echo "<td>".$result['Date']."</td>";
										echo "</tr>";
									}
								?>
                            </table>
                        </div>
                    </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><b>Remove <span class="fa fa-android"></span> Android Software</b></h3>
                </div>
                <div class="panel-body">
                    <form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="focusedInput"></label>
                            <label for="select">Select S/W:</label>
                            <select name="swid" class="form-control" id="select">
                                <?php
								$query="select CatID,CatName from categories where OSType = 'android'";
								$sql=mysqli_query($con,$query);
								while($result=mysqli_fetch_array($sql))
								{
									$catname=$result['CatName'];
									
									echo "<optgroup label='$catname'>";
									
									$query="select SWID,SWName from softwares where Category='$catname'";
									$sql1=mysqli_query($con,$query);
									while($result1=mysqli_fetch_array($sql1))
									{										
										echo "<option value='".$result1['SWID']."'>".$result1['SWName']."</option>";
									}
									echo "</optgroup>";
								}
                             	?>
                            </select>
                        </div>                        
                        <button name="removeA" type="submit" class="btn btn-block btn-info" value="RemoveW">Remove</button>
                    </form>
                </div>
            </div> 
            <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center"><b><span class="fa fa-android"></span> Android Softwares</b></h3>
                        </div>
                        <div class="panel-body">
                            <table width="auto" class="table table-striped table-bordered">
                                <tr>
                                    <th scope="col">S/W ID</th>
                                    <th scope="col">S/W Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Last Updated</th>
                                </tr>
                                 <?php
								$query="select SWID,SWName,Category,Date from softwares where OSType='android'";
								$sql=mysqli_query($con,$query);
									while($result=mysqli_fetch_array($sql))
									{										
										echo "<tr>";
										echo "<td>".$result['SWID']."</td>";
										echo "<td>".$result['SWName']."</td>";
										echo "<td>".$result['Category']."</td>";
										echo "<td>".$result['Date']."</td>";
										echo "</tr>";
									}
								?>
                            </table>
                        </div>
                    </div>          
        </div>
        <div class="col-lg-2"></div>
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
<title>Remove Software</title>
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