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
	$query="select * from teachers where Name='$name' and Contact=$contact";	
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		if(mysqli_num_rows($sql) > 0)
		{
			$errMsg="Teacher's Record is Already Exists!";
		}
		elseif(strlen($pass) <= 8)
		{
			$errMsg="Password Must Be Greater Than Or Equal To 8 Characters!";
		}
		elseif(strlen($contact) != 10)
		{
			$errMsg="Contact Must Be Of 10 characters";
		}
		else
		{
			$query="insert into teachers(Name,Password,Contact) values('$name','$pass',$contact)";	
			$sql=mysqli_query($con,$query);
			if($sql)
			{
				$successMsg="New Teacher Added Successfully!";
			}	
		}
	}		
}
if(isset($_POST['remove']))
{	
	extract($_POST);
	$query="delete from teachers where TID=$tid";	
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		$successMsg="Teacher's Record Removed Successfully!";
	}
}
if(isset($_POST['updatepass']))
{	
	extract($_POST);
	$query="update teachers set Password='$npass' where TID=$tid";	
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		$successMsg="Teacher's Password Changed Successfully!";
	}
}
if(isset($_POST['updatecontact']))
{	
	extract($_POST);
	$query="update teachers set Contact=$ncontact where TID=$tid";	
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		$successMsg="Teacher's Contact Changed Successfully!";
	}
}
?>
<doctype html>
<html>
<head>
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
}
#select {
	margin-bottom: 15px;
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
#abtn {
	margin-top: 30px;
}
</style>
<title>Teacher_Record</title>
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
                <li class="active"><a href="teacher-record.php">Teacher Record</a></li>
                <li><a href="subject-record.php">Subject Record</a></li>
            </ul>
            <li><a href="inbox.php"><span class="glyphicon glyphicon-envelope"></span>&nbsp; <span class="badge">
                <?php if(isset($totalMsgs)){echo $totalMsgs;}?>
                </span></a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
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
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Teacher Record</h3>
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
                    <h3 class="panel-title">Table Of Teacher Record</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>Teacher_Id</th>
                                <th>Teacher Name</th>
                                <th>Teacher Password</th>
                                <th>Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							$query="select * from teachers";	
							$sql=mysqli_query($con,$query);
							while($result=mysqli_fetch_array($sql))							
							{
								echo "<tr>";
								echo "<td>" . $result['TID'] . "</td>";
								echo "<td>" . $result['Name'] . "</td>";
								echo "<td>" . $result['Password'] . "</td>";
								echo "<td>" . $result['Contact'] . "</td>";
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
                        <div class="form-group col-lg-12">
                            <input  name="name" class="form-control" id="focusedInput" type="text" placeholder="Name of Teacher" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <input name="pass" type="password"  class="form-control" id="inputDefault" placeholder="Password" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <input name="contact" type="number"  class="form-control" id="inputDefault" placeholder="Contact" required>
                        </div>
                        <center>
                            <button name="add"  value="add" type="submit" class="btn btn-primary btn-block" id="abtn">Add</button>
                        </center>
                    </form>
                </div>
            </div>
            <div class="panel panel-primary" id="upd">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Record</h3>
                </div>
                <div class="panel-body">
                    <h3>Change Password</h3>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <select  name="tid" class="form-control" id="select">
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
                            <div class="form-group col-lg-12">
                                <input name="npass" type="password" class="form-control" id="inputDefault" placeholder="New Password " required>
                            </div>
                            <br>
                            <center>
                                <button name="updatepass" type="submit" class="btn btn-primary btn-block" id="btn">Update</button>
                            </center>
                        </div>
                    </form>
                    <hr>
                    <h3>Change Contact</h3>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <select name="tid" class="form-control" id="select">
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
                            <input name="ncontact" type="tel"  class="form-control" id="inputDefault" placeholder="New Contact " required>
                        </div>
                        <center>
                            <button name="updatecontact" type="submit" class="btn btn-primary btn-block" id="btn">Update</button>
                        </center>
                    </form>
                </div>
            </div>
            <div class="panel panel-primary" id="rmv">
                <div class="panel-heading">
                    <h3 class="panel-title">Remove Record</h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <select  name="tid" class="form-control" id="select">
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
                            <button  name="remove" type="submit" class="btn btn-primary btn-block" style="margin-top:30px" id="btn">Remove</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<div class = "navbar navbar-default">
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
	echo "<h1>Please Login First.</h2>";
}
?>