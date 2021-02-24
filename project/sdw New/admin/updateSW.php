<?php
//mkdir("windows/Browsers");
require "../includes/connection.php";
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
	if(isset($_POST['updateW']))
		{
			$swid=$_POST['swid'];
			$date=date("Y-m-d");
			//Variables Of Setup File
		    $setupname = $_FILES['setup']['name'];
		    $setuptype= $_FILES['setup']['type'];
		    $setuptmpname = $_FILES['setup']['tmp_name'];
			$setupsize = $_FILES['setup']['size'];
			$query="select SWName,SetupPath from softwares where SWID=$swid";
			$sql=mysqli_query($con,$query);
			$result=mysqli_fetch_array($sql);
			$swname=$result['SWName'];
			$oldsetuppath="../" . $result['SetupPath'];
			$temp=explode("/",$oldsetuppath);				
			$oldfile=end($temp);//Current File
			$temp=explode(".",$setupname);
			$newsetupext=end($temp);//new Setup Extention
			$temp=explode(".",$oldfile);
			$oldsetupext=end($temp);//old setup Extention
			if($newsetupext != $oldsetupext)
			{
				$errorMsg="File Extention Of new file must be same as old file have!";
			}
			else
			{
				if(($newsetupext == 'exe')||($newsetupext == 'zip')||($newsetupext == 'msi'))
				{
					
					if (!unlink($oldsetuppath))
					  {					 
						$errorMsg="Error";
					  }
					else
					  {
						if(file_exists($oldsetuppath))
							{
								$errorMsg="File Already Exists";
							}				
							else if(move_uploaded_file($setuptmpname, $oldsetuppath )) 
							{	
							 $setup_final_path=str_replace("../","",$oldsetuppath);					
								$query="update softwares set Date='$date',SetupPath='$setup_final_path' where SWID=$swid";
								$sql=mysqli_query($con,$query);
								if($sql)
								{
									$successMsg = "The Software $swname has been updated Successfully.";	
								}
								
							} 
							else 
							{
								$errorMsg= "Sorry, there was an error uploading your file.";
							}		
					  }
				}
				else
				{
					$errorMsg="Invalid File!<br> Your Can upload Only Windows files/ Zipped files.(Format: .exe, .msi, .zip)";
				}
			}
		}
		if(isset($_POST['updateA']))
		{
			$swid=$_POST['swid'];
			$date=date("Y-m-d");			
			//Variables Of Setup File
			$setupname = $_FILES['setup']['name'];
			$setuptype= $_FILES['setup']['type'];
			$setuptmpname = $_FILES['setup']['tmp_name'];
	        $setupsize = $_FILES['setup']['size'];
			$query="select SWName,SetupPath from softwares where SWID=$swid";
			$sql=mysqli_query($con,$query);
			$result=mysqli_fetch_array($sql);
			$swname=$result['SWName'];
			$oldsetuppath="../" . $result['SetupPath'];
			$temp=explode("/",$oldsetuppath);
			$oldfile=end($temp);//Current File
			$temp=explode(".",$setupname);
			$newsetupext=end($temp);//new Setup Extention
			$temp=explode(".",$oldfile);
			$oldsetupext=end($temp);//old setup Extention
			if($newsetupext != $oldsetupext)
			{
				$errorMsg="File Extention Of new file must be same as old file have!";
			}
			else
			{
				if(($newsetupext == 'apk')||($newsetupext == 'zip'))
				{
					
					if (!unlink($oldsetuppath))
					  {					 
						$errorMsg = "Error";
					  }
					else
					  {
						if(file_exists($oldsetuppath))
							{
								$errorMsg = "File Already Exists";
							}				
							else if(move_uploaded_file($setuptmpname, $oldsetuppath )) 
							{	
								$setup_final_path=str_replace("../","",$oldsetuppath);					
								$query="update softwares set Date='$date',SetupPath='$setup_final_path' where SWID=$swid";
								$sql=mysqli_query($con,$query);
								if($sql)
								{
									$successMsg = "The Software \"<span class='text-warning'><u>$swname</u></span>\" has been updated Successfully.";	
								}
								
							} 
							else 
							{
								$errorMsg = "Sorry, there was an error uploading your file.";
							}		
					  }
				}
				else
				{
					$errorMsg="Invalid File!<br> Your Can upload Only Windows files/ Zipped files.(Format: .exe, .msi, .zip)";
				}
			}
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Software</title>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
</head>
<body>
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#">mySoft <sub><i>(Admin)</i></sub></a></div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
        <ul class="nav navbar-nav">
            <li><a href="admin-home.php">Home</a></li>
            <li><a href="uploadSW.php">Upload S/W</a></li>
            <li class="active"><a href="updateSW.php">Update S/W</a></li>             
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
if(isset($errorMsg))
{
?>
<div align="center" class="alert alert-dismissable alert-warning">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong><?php echo $errorMsg;?></strong> 
</div>
<?php
}
?>
<?php
if(isset($successMsg))
{
?>
<div align="center" class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong><?php echo $successMsg;?></strong> 
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
                    <h3 class="panel-title text-center"><b>Update&nbsp;<span class="fa fa-windows"></span> Windows Software</b></h3>
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
                        <div class="form-group">
                            <label for="myfile" >Software Setup:</label>
                            <input name="setup" class="form-control" type="file" id="myfile"  required="required"/>
                        </div>
                        <button name="updateW" type="submit" class="btn btn-block btn-info" value="updateW">Update</button>
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
                    <h3 class="panel-title text-center"><b>Update <span class="fa fa-android"></span> Android Software</b></h3>
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
                        <div class="form-group">
                            <label for="myfile" >Software Setup:</label>
                            <input name="setup" class="form-control" type="file" id="myfile"  required="required"/>
                        </div>
                        <button name="updateA" type="submit" class="btn btn-block btn-info" value="updateW">Update</button>
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
<title>Update Software</title>
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
