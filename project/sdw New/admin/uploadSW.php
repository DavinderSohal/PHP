<?php
require "../includes/connection.php";
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) 
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
	if(isset($_POST['windows']))
		{
			$cat=$_POST['cat'];
			$swname=$_POST['swname'];
			$desc=$_POST['desc'];
			$date=date("Y-m-d");
		    //Variables Of Setup File
			$setupname = $_FILES['setup']['name'];
		    $setuptype= $_FILES['setup']['type'];
			$setuptmpname = $_FILES['setup']['tmp_name'];
	        $setupsize = $_FILES['setup']['size'];
		    //Variables Of Icon File
	        $iconname = $_FILES['icon']['name'];
		    $icontype = $_FILES['icon']['type'];
			$icontmpname = $_FILES['icon']['tmp_name'];
			$iconsize = $_FILES['icon']['size'];
			$temp=explode(".",$setupname);
			$setupext=end($temp);//Setup Extention
			$temp=explode(".",$iconname);
			$iconext=end($temp);//Icon Extention
			$setuppath="../windows/" . $cat . "/". $swname;
			if(file_exists($setuppath))
			{
				$errorMsg="Software Allready Uploaded!<br>If You Want to Update $swname Then Goto <a href='updateSW.php'>Update S/W </a>Page";
					
			}
			else if(
			(($setupext == 'exe')||($setupext == 'zip')||($setupext == 'msi'))
			&&(($iconext == 'jpg')||($iconext == 'jpeg')||($iconext == 'png')||($iconext == 'gif'))			
			)
			{
				
				mkdir($setuppath);
				//Setup path and setup name settings							
				$temp=explode(".",$setupname);
				$temp=$swname.".".end($temp);
				"Setup FIle Extention=" . $temp."<br>";
				$setup_target_dir = $setuppath."/$temp";
				"Setup Target=".$setup_target_dir."<br>";		
	            //Icon path and Icon name settings
				$temp=explode(".",$iconname);
				$temp=$swname.".".end($temp);
				"Icon File Extention=".$temp."<br>";
				$icon_target_dir = $setuppath."/$temp";	
				"Icon Target=".$icon_target_dir."<br>";	
				//Files Uploading
			    if(file_exists($setup_target_dir))
				{
					$errormsg= "File Already Exists";
				}				
				else if(move_uploaded_file($setuptmpname, $setup_target_dir )&&(move_uploaded_file($icontmpname, $icon_target_dir ))) {
					
					$setup_final_path=str_replace("../","",$setup_target_dir);
					$icon_final_path=str_replace("../","",$icon_target_dir);
					$query="insert into softwares(SWName,OSType,Category,Date,Description,IconPath,SetupPath) values('$swname','windows','$cat','$date','$desc','$icon_final_path','$setup_final_path')";
					$sql=mysqli_query($con,$query);
					if($sql)
					{
						$successMsg = "The Software $swname has been uploaded Successfully.";	
					}
					
				} 
				else 
				{
					$errorMsg= "Sorry, there was an error uploading your file.";
				}												
			}
			else
			{
				$errorMsg = "Invalid File";
			}
			
		}
		if(isset($_POST['android']))
		{
			
			$cat=$_POST['cat'];
			$swname=$_POST['swname'];
			$desc=$_POST['desc'];
			$date=date("Y-m-d");
			"$cat <br> $swname <br> $desc <br> $date";
			//Variables Of Setup File
		    "<h2>Setup File</h2>";
			$setupname = $_FILES['setup']['name'];
		    $setuptype= $_FILES['setup']['type'];
			$setuptmpname = $_FILES['setup']['tmp_name'];
			$setupsize = $_FILES['setup']['size'];
			//Variables Of Icon File
			"<h2>Icon File</h2>";
			$iconname = $_FILES['icon']['name'];
			$icontype = $_FILES['icon']['type'];
			$icontmpname = $_FILES['icon']['tmp_name'];
            $iconsize = $_FILES['icon']['size'];
			$temp=explode(".",$setupname);
			$setupext=end($temp);//Setup Extention
		    $temp=explode(".",$iconname);
			$iconext=end($temp);//Icon Extention
			$setuppath="../android/" . $cat . "/". $swname;
			if(file_exists($setuppath))
			{
				$errorMsg="Software Allready Uploaded!<br>If You Want to Update $swname Then Goto <a href='updateSW.php'>Update S/W </a>Page";
					
			}
			else if(
			(($setupext == 'apk')||($setupext == 'zip'))
			&&(($iconext == 'jpg')||($iconext == 'jpeg')||($iconext == 'png')||($iconext == 'gif')||($iconext == 'webp'))			
			)
			
			{
				
				mkdir($setuppath);
				//Setup path and setup name settings							
				$temp=explode(".",$setupname);
				$temp=$swname.".".end($temp);
				"Setup FIle Extention=" . $temp."<br>";
				$setup_target_dir = $setuppath."/$temp";
		        "Setup Target=".$setup_target_dir."<br>";		
				//Icon path and Icon name settings
				$temp=explode(".",$iconname);
				$temp=$swname.".".end($temp);
				"Icon File Extention=".$temp."<br>";
				$icon_target_dir = $setuppath."/$temp";	
			    "Icon Target=".$icon_target_dir."<br>";	
				//Files Uploading
				if(file_exists($setup_target_dir))
				{
					$errorMsg="File Already Exists";
				}				
				else if(move_uploaded_file($setuptmpname, $setup_target_dir )&&(move_uploaded_file($icontmpname, $icon_target_dir ))) 
				{
					
					$setup_final_path=str_replace("../","",$setup_target_dir);
					$icon_final_path=str_replace("../","",$icon_target_dir);
					$query="insert into softwares(SWName,OSType,Category,Date,Description,IconPath,SetupPath) values('$swname','android','$cat','$date','$desc','$icon_final_path','$setup_final_path')";
					$sql=mysqli_query($con,$query);
					if($sql)
					{
						$successMsg = "The Software $swname has been uploaded Successfully.";	
					}
					
				} 
				else 
				{
					$errorMsg="Sorry, there was an error uploading your file.";
				}												
			}
			else
			{
				$errorMsg = "Invalid File";
			}
		}
		?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload Software</title>
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
            <li class="active"><a href="uploadSW.php">Upload S/W</a></li>
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
                    <h2 class="panel-title text-center"><b>Upload New <span class="fa fa-windows"></span> Windows Software</b></h2>
                </div>
                <div class="panel-body" id="WindowsUpload">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="select"><b>Select Category Of Software:</b></label>
                            <select name="cat" class="form-control" id="select">
                                <optgroup label="Windows Categories">
                                <?php
								$query="select CatID,CatName from categories where OSType = 'windows'";
								$sql=mysqli_query($con,$query);
								while($result=mysqli_fetch_array($sql))
								{
									echo "<option value='". $result['CatName'] ."'>". $result['CatName'] ."</option>";
								}
                             	?>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="swname" type="text" placeholder="Software's Name" required="required"/>
                        </div>
                        <div class="form-group">
                            <label for="setup" >Software Setup:</label>
                            <input class="form-control" type="file" name="setup" id="setup" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="ico" >Software Icon:</label>
                            <input class="form-control" type="file" name="icon" id="ico" required="required" />
                        </div>
                        <div class="form-group">                           
                             <textarea class="form-control" name="desc" placeholder="Enter Software Description Here" required="required" rows="3" id="textArea"></textarea>                           
                        </div>
                        <button type="submit" class="btn btn-block btn-info" name="windows" value="Upload"><span class="fa fa-upload"></span> Upload</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2 class="panel-title text-center"><b>Upload New <span class="fa fa-android"></span> Android Software</b></h2>
                </div>
                <div class="panel-body">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="focusedInput"></label>
                            <label for="select"><b>Select Category Of Software:</b></label>
                            <select name="cat" class="form-control" id="select">
                                <optgroup label="Android Categories">
                                <?php
								$query="select CatID,CatName from categories where OSType = 'android'";
								$sql=mysqli_query($con,$query);
								while($result=mysqli_fetch_array($sql))
								{
									echo "<option value='". $result['CatName'] ."'>". $result['CatName'] ."</option>";
								}
                             	?>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="swname" placeholder="Software's Name" required="required"/>
                        </div>
                        <div class="form-group">
                            <label for="setup" >Software Setup:</label>
                            <input class="form-control" type="file" name="setup" id="setup" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="ico" >Software Icon:</label>
                            <input class="form-control" type="file" name="icon" id="ico"  required="required"/>
                        </div>
                        <div class="form-group">                           
                             <textarea class="form-control" name="desc" placeholder="Enter Software Description Here" rows="3" id="textArea" required="required"></textarea>                           
                        </div>
                        <Button type="submit" name="android" class="btn btn-block btn-info" value="See Detail"><span class="fa fa-upload"></span> Upload</Button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<?php
include "../Includes/footer.html";
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
