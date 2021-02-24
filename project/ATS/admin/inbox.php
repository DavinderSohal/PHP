<?php
include "../include/connection.php";
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
    // last request was more than 60 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
	//echo "session expiered";
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
            <li><a href="index.php">Home</a></li>
            <li><a href="Student-record.php">Student Record</a></li>
            <li><a href="teacher-record.php">Teacher Record</a></li>
            <li ><a href="subject-record.php">Subject Record</a></li>
       
        
            <li class=" active" ><a href="inbox.php"><span class="glyphicon glyphicon-envelope"></span>&nbsp; <span class="badge"><?php if(isset($totalMsgs)){echo $totalMsgs;}?></span></a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Table Of Messages</h3>
            </div>
            <div class="panel-body">
            	<table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th>Msg_No</th>
                            <th>Date</th>
                            <th>Sent By</th>
                            <th>S_ID/T_ID</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
							$query="select * from inbox ORDER BY Date DESC";	
							$sql=mysqli_query($con,$query);
							while($result=mysqli_fetch_array($sql))							
							{
								echo "<tr>";
								echo "<td>" . $result['MsgNo'] . "</td>";
								echo "<td>" . $result['Date'] . "</td>";
								echo "<td>" . $result['SentBy'] . "</td>";
								echo "<td>" . $result['Id'] . "</td>";
								echo "<td>" . $result['EmailId'] . "</td>";
											echo "<td>" . $result['Msg'] . "</td>";
								echo "</tr>";
							}
							?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-2"></div>
</div>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<?php
include "../include/footer.html";
?>
</div>
</body>
</html>
<?php
}
else
{
	header("location:../index.php");
}
?>