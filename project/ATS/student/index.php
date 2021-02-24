<?php
include "../include/connection.php";
if(isset($_SESSION['slogin']))
{
	$rollno=$_SESSION['slogin'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script>
//For the rows which contains marks less then 75%
$(document).ready(function(e) {
    $("tr td:nth-child(4)").each(function(index, element) {
        var marks=$(this).text()*1;
		if(marks <75)
		{
			$(this).parent("tr").addClass("danger");
		}
    });
});
</script>
<style>
body {
	background-image: url(../images/img.jpg);
	background-repeat: repeat;
	background-position: center;
}
</style>
</head>

<body>
<div class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand text-capitalize" href="#">Attendance Tracking System</a> </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Attendance</a></li>
            <li><a href="msg.php">Message To Admin</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Attendance Record</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th>Subject Name</th>
                            <th>Total Lect.</th>
                            <th>Attended Lect.</th>
                            <th>Percentage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
								$query="select * from std_attendance where RollNo=$rollno";	
								$sql=mysqli_query($con,$query);									
								while($result=mysqli_fetch_array($sql))							
								{
									echo "<tr>";
									$query="select Name from subjects where SubId=".$result['SubID'];	
									$sql1=mysqli_query($con,$query);
									$result1=mysqli_fetch_array($sql1);	
									echo "<td>" . $result1['Name'] . "</td>";
									echo "<td>" . $result['TL'] . "</td>";
									echo "<td>" . $result['AL'] . "</td>";
									echo "<td>" . $result['Percentage'] . "</td>";
									echo "</tr>";
								}							
							?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-3"></div>
</div>
<?php
	include "../include/footer.html";
?>
</body>
</html>
<?php
}
else
{
	header("location: ../index.php");
}
?>