<?php
include "../include/connection.php";
//Total No of messages
	$query="select * from inbox";
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		$totalMsgs=mysqli_num_rows($sql);			
	}
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
    // last request was more than 60 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
	echo "sesson expiered";
}
else
{	
//$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
}
if(isset($_SESSION['UName']))
{
	extract($_GET);
	$class=$class;
    $sem=$sem;	
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
span.glyphicon-envelope{
	font-size:20px;
	}
</style>
</head>

<body>
<div class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand text-capitalize" href="#">Attendance Tracking System(Admin)</a> </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav navbar-right">
        <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            <li class="active"><a href="student-record.php">Student Record</a></li>
            <li><a href="teacher-record.php">Teacher Record</a></li>
            <li><a href="subject-record.php">Subject Record</a></li>
        
            <li><a href="inbox.php"><span class="glyphicon glyphicon-envelope"></span>&nbsp; <span class="badge"><?php if(isset($totalMsgs)){echo $totalMsgs;}?></span></a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
        </ul>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="panel panel-primary" id="panel">
                <div class="panel-heading">
                    <h3 class="panel-title" align="center">Class:<?php if(isset($class)){echo $class;}?> &nbsp; Sem:<?php if(isset($sem)){echo $sem;}?></h3>
                </div>
                <div class="panel-body">
                    <?php
					if(isset($_GET['showdetail']))
					{						
						$query="select * from students where Class='$class' and Sem='$sem'";	
						$sql=mysqli_query($con,$query);
						if(mysqli_num_rows($sql) > 0)
						{						
					?>
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>RollNo</th>
                                <th>Class</th>
                                <th>Sem</th>
                                <th>Student Name</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
								while($result=mysqli_fetch_array($sql))							
								{
									echo "<tr>";
									echo "<td>" . $result['RollNo'] . "</td>";
									echo "<td>" . $result['Class'] . "</td>";
									echo "<td>" . $result['Sem'] . "</td>";
									echo "<td>" . $result['Name'] . "</td>";
									echo "<td>" . $result['Password'] . "</td>";
									echo "</tr>";
								}							
							?>
                        </tbody>
                    </table>
                    <?php
						}
						else
						{
							echo "<div align='center'>No Record Found</div>";
						}	
					}
					?>                   
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
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
	header("location:../index.php");}
?>
