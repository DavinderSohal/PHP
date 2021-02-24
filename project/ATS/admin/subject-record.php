<?php
include "../include/connection.php";
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
    // last request was more than 60 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
	//echo "sesson expiered";
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if(isset($_SESSION['UName']))
{
//Total No of messages
	$query="select * from inbox";
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		$totalMsgs=mysqli_num_rows($sql);			
	}
if(isset($_POST['add']))
{	
	extract($_POST);
	$query="select * from subjects where Name='$name' and Class='$class' and TID=$tid";	
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		if(mysqli_num_rows($sql) > 0)
		{
			$errMsg="Subject's Record is Already Exists!";
		}
		elseif(strlen($pass) <= 8)
		{
			$errMsg="Password Must Be Greater Than Or Equal To 8 Characters!";
		}
		else
		{
			$query="insert into subjects(Name,Class,Sem,TID) values('$name','$class','$sem',$tid)";	
			$sql=mysqli_query($con,$query);
			if($sql)
			{
				$query="select SubId from subjects where Class='$class' And Sem='$sem' and Name='$name'";	
				$sql=mysqli_query($con,$query);
				$result=mysqli_fetch_array($sql);
				$subid=$result['SubId'];
				$query="select RollNo from students where Class='$class' And Sem='$sem'";	
				$sql=mysqli_query($con,$query);
				if($sql)
				{
					if(mysqli_num_rows($sql) > 0)
					{
						while($result=mysqli_fetch_array($sql))
						{
							$rollno=$result['RollNo'];
							$query="insert into std_attendance(RollNo,SubID) values($rollno,$subid)";
							$sql1=mysqli_query($con,$query);
						}
					}
				}
				$successMsg="New Subject Added Successfully!";
			}	
		}
	}		
}


	if(isset($_POST['updatesubname']))
	{
		extract($_POST);
		$query ="update subjects set Name='$name' where SubId=$subid";
		$sql=mysqli_query($con, $query);
		if($sql)
			{
				$successMsg = "Subject's Name Changed Successfully!";
			}
	}
	if(isset($_POST['updateteacher']))
	{
		extract($_POST);
		$query ="update subjects set TID=$tid where SubId=$subid";
		$sql=mysqli_query($con, $query);
		if($sql)
			{
				$successMsg = "Subject's Teacher Changed Successfully!";
			}
	}
	if(isset($_POST['remove']))
	{	
		extract($_POST);
		echo $subid;	
		$query="delete from std_attendance where SubID=$subid";	
		$sql=mysqli_query($con,$query);
		if($sql)
		{
			$query="delete from subjects where SubId=$subid";	
			$sql=mysqli_query($con,$query);
			if($sql)
			{
				$successMsg="Subject's Record Removed Successfully!";			
			}		
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<style>
body {
	background-image: url(../images/img.jpg);
	background-repeat: repeat;
	background-position: center;
}
#ar, #ur, #rr {
	margin-left: 35px;
}
#focusedInput {
	margin-top: 15px;
}
#inputDefault {
	margin-top: 15px;
}
#select1 {
	margin-top: 15px;
	margin-bottom: 15px;
}
#select {
	margin-bottom: 15px;
}
#btn {
	margin-top: 15px;
}
#btn1 {
	margin-bottom: 20px;
}
span.glyphicon-envelope {
	font-size: 20px;
}
#add {
	display: none
}
#upd {
	display: none
}
#rmv {
	display: none
}
</style>
<title>Subject_Record</title>
</head>

<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand text-capitalize" href="#">Attendance Tracking System(Admin)</a> </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="Student-record.php">Student Record</a></li>
                <li><a href="teacher-record.php">Teacher Record</a></li>
                <li class="active"><a href="subject-record.php">Subject Record</a></li>
                <li><a href="inbox.php"><span class="glyphicon glyphicon-envelope"></span>&nbsp; <span class="badge">
                    <?php if(isset($totalMsgs)){echo $totalMsgs;}?>
                    </span></a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </ul>
    </div>
</div>
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
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Subject Record</h3>
                </div>
                <div class="panel-body"> <a href="#add">
                    <button type="submit" class="btn btn-primary" id="ar">Add Record</button>
                    </a> <a href="#upd">
                    <button type="submit" class="btn btn-primary" id="ur">Update Record</button>
                    </a> <a href="#rmv">
                    <button type="submit" class="btn btn-primary" id="rr">Remove Record</button>
                    </a> </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Table Of Subject Record</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>Subject_Id</th>
                                <th>Subject Name</th>
                                <th>Class</th>
                                <th>Semester</th>
                                <th>Teacher_Id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							$query="select * from subjects";	
							$sql=mysqli_query($con,$query);
							while($result=mysqli_fetch_array($sql))							
							{
								echo "<tr>";
								echo "<td>" . $result['SubId'] . "</td>";
								echo "<td>" . $result['Name'] . "</td>";
								echo "<td>" . $result['Class'] . "</td>";
								echo "<td>" . $result['Sem'] . "</td>";
								echo "<td>" . $result['TID'] . "</td>";
								echo "</tr>";
							}
							?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel panel-primary" id="add">
                <div class="panel-heading">
                    <h3 class="panel-title">Add Record</h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <select name="class" class="form-control" id="select">
                                    <option>Select Class</option>
                                    <option value="CIVIL">CIVIL</option>
									<option value="CSE">CSE</option>
									<option value="ECE">ECE</option>
									<option value="EE">EE</option>
									<option value="ME">ME</option>
									<option value="IT">IT</option>
                                 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <select name="sem" class="form-control" id="select1">
                                    <option>Select Semester</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="3rd">3rd</option>
                                    <option value="4th">4th</option>
                                    <option value="5th">5th</option>
                                    <option value="6th">6th</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <select  name="tid" class="form-control" id="select1">
                                    <option>Select Teacher_Id</option>
                                    <?php
                                     $query="select TID from teachers";	
									 $sql=mysqli_query($con,$query);
									  while($result=mysqli_fetch_array($sql))							
										{
											echo "<option value='". $result['TID'] ."'>". $result['TID'] ."</option>";
										}							                                  
                                     ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" name="name" class="form-control" id="inputDefault" placeholder="Subject Name" required="required">
                        </div>
                        <center>
                            <button name="add" type="submit"  class="btn btn-primary btn-block" id="btn">Add</button>
                        </center>
                    </form>
                </div>
            </div>
            <div class="panel panel-primary" id="upd">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Record</h3>
                </div>
                <div class="panel-body">
                    <h3>Change Teacher</h3>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <select name="subid" class="form-control" id="select">
                                    <option>Select Subject_Id</option>
                                    <?php
                                     $query="select SubId from subjects";	
									 $sql=mysqli_query($con,$query);
									  while($result=mysqli_fetch_array($sql))							
										{
											echo "<option value='". $result['SubId'] ."'>". $result['SubId'] ."</option>";
										}							                                  
                                     ?>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <select  name="tid" class="form-control" id="select1">
                                    <option>Select Teacher_Id</option>
                                    <?php
                                     $query="select TID from teachers";	
									 $sql=mysqli_query($con,$query);
									  while($result=mysqli_fetch_array($sql))							
										{
											echo "<option value='". $result['TID'] ."'>". $result['TID'] ."</option>";
										}							                                  
                                     ?>
                                </select>
                            </div>
                        </div>
                        <center>
                            <button type="submit" name="updateteacher" class="btn btn-primary btn-block" id="btn">Update</button>
                        </center>
                    </form>
                    <hr>
                    <h3>Change Subject_Name</h3>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <select name="subid" class="form-control" id="select">
                                    <option>Select Subject_Id</option>
                                    <?php
                                     $query="select SubId from subjects";	
									 $sql=mysqli_query($con,$query);
									  while($result=mysqli_fetch_array($sql))							
										{
											echo "<option value='". $result['SubId'] ."'>". $result['SubId'] ."</option>";
										}							                                  
                                     ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" name="name" class="form-control" id="inputDefault" placeholder="New Subject Name " required="required">
                        </div>
                        <center>
                            <button type="submit" name="updatesubname" class="btn btn-primary btn-block" id="btn1">Update</button>
                        </center>
                    </form>
                </div>
            </div>
            <div class="panel panel-primary" id="rmv">
                <div class="panel-heading">
                    <h3 class="panel-title">Remove Record</h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <select name="subid" class="form-control" id="select">
                                    <option>Select Subject_Id</option>
                                    <?php
                                     $query="select SubId from subjects";	
									 $sql=mysqli_query($con,$query);
									  while($result=mysqli_fetch_array($sql))							
										{
											echo "<option value='". $result['SubId'] ."'>". $result['SubId'] ."</option>";
										}							                                  
                                     ?>
                                </select>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary btn-block" name="remove" id="btn">Remove</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<div class = "navbar navbar-default ">
    <div class = "container">
        <p class = "navbar-text pull-left"></p>
    </div>
</div>
<script>
$(document).ready(function(e) {
		    $("#ar").click(function(){
					$("#upd").hide();
					$("#rmv").hide();
					$("#add").hide().slideDown(800);
				});
			$("#ur").click(function(){
					$("#add").hide();
					$("#rmv").hide();
					$("#upd").hide().slideDown(800);		
				});
			$("#rr").click(function(){
					$("#add").hide();					
					$("#upd").hide();
					$("#rmv").hide().slideDown(800);
				});
});
</script>
</body>
</html>
<?php
}
else
{
	header("location:../index.php");
}
?>