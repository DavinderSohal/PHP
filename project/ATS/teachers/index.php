<?php
include "../include/connection.php";
if(isset($_SESSION['tlogin']))
{
	$tid=$_SESSION['tlogin'];
	$date=date("Y-m-d");
	
	if(isset($_POST['subjectID']))
	{
		$subid=$_POST['subid'];		
		if($subid == 'n/a')
		{
			$errMsg="Please Select Subject First!";
			unset($subid);			
		}
		else
		{
			$query="select Name from subjects where SubId=$subid";
			$sql=mysqli_query($con,$query);
			$result=mysqli_fetch_array($sql);
			$subname=$result['Name'];
			$query="select LastDate from std_attendance where SubID=$subid";
			$sql=mysqli_query($con,$query);
			if($sql)
			{
				$result=mysqli_fetch_array($sql);
				$lastdate=$result['LastDate'];
				if($date == $lastdate)
				{
					$errMsg="Today's Attendance  Is Already Done For This Subject!";
					unset($subid);
				}
				else
				{
					$query="select Class,Sem from subjects where SubId=$subid";
					$sql=mysqli_query($con,$query);
					if($sql)
					{
						$result=mysqli_fetch_array($sql);
						$class=$result['Class'];
						$sem=$result['Sem'];
					}	
				}
			}			
		}
	}
	if(isset($_POST['asubmit']))
	{
		$subid=$_POST['subid'];
		
		$class=$_POST['class'];
		$sem=$_POST['sem'];
		$count=0;
		$success=0;
		foreach($_POST as $rollnos=>$rollno)
		{				
			if($rollno == 'p' or $rollno == 'a')
			{	
				$count+=1;
				$tl=0;
				$al=0;
				$apercent=0.0;
				$query="select TL,AL from std_attendance where RollNo=$rollnos AND SubID=$subid";
				$sql=mysqli_query($con,$query);
				$result=mysqli_fetch_array($sql);
				$tl=$result['TL'];
				$al=$result['AL'];
				if($rollno == 'p')
				{
					$tl=$tl+1;;
					$al=$al+1;
					$apercent=($al/$tl)*100;
					$query="update std_attendance set TL=$tl,AL=$al,Percentage=$apercent,LastDate='$date' where RollNo=$rollnos AND SubID=$subid";
					$sql=mysqli_query($con,$query);
					if($sql)
					{
						$success+=1;
					}
				}
				elseif($rollno == 'a')
				{
					$tl+=1;					
					$apercent=($al/$tl)*100;
					$query="update std_attendance set TL=$tl,AL=$al,Percentage=$apercent,LastDate='$date' where RollNo=$rollnos AND SubID=$subid";
					$sql=mysqli_query($con,$query);
					if($sql)
					{
						$success+=1;
					}
				}
							
			}			
		}
		if($count == $success)
		{
			$query="select Name from subjects where SubId=$subid";
			$sql=mysqli_query($con,$query);
			$result=mysqli_fetch_array($sql);
			$subname=$result['Name'];
			$successMsg="Attendance For <span>$subname ($class-$sem)</span> Is Done For Date:$date";
			unset($subid);
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
#btn {
	margin-top: 15px;
}
#att{ margin-bottom:200px}
#select{margin-bottom:15px;}
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
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
         <?php
		if(isset($errMsg))
		{
		?>
            <div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong><?php echo  $errMsg;?></strong> </div>
            <?php    
		}
		?>
        <?php
		if(isset($successMsg))
		{
		?>
            <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong><?php echo  $successMsg;?></strong> </div>
            <?php    
		}
		?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?php
					echo "Attendance Current Date Is : $date" ;
				?>
                    </h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <select name="subid" class="form-control" id="select">
                                    <option value="n/a">Select Subject</option>
                                    <?php
                                     $query="select SubId,Name,Class,Sem from subjects where TID=$tid;";	
									 $sql=mysqli_query($con,$query);
									  while($result=mysqli_fetch_array($sql))							
										{
											echo "<option value='". $result['SubId'] ."'>". $result['Name'] ." (".$result['Class']."-".$result['Sem'].") "."</option>";
										}							                                  
                                     ?>
                                </select>
                            </div>
                        </div>
                        <center>
                            <button  name="subjectID" value="subjectID"type="submit" class="btn btn-primary btn-block id="btn">Go To Attendence</button>
                        </center>
                    </form>
                </div>
            </div>
            <?php
			if(isset($subid))
			{
			?>			
            <div class="panel panel-primary" id="att">
                <div class="panel-heading">
                	<div align="center">Date: <span class="text-warning"><?php echo $date;?></span></span></div>
                    Subject Name: <span class="text-warning"><?php echo $subname?></span> <span style="float:right">Class: <span class="text-warning"><?php echo $class."(".$sem.")";?></span></span>
                    
                </div>
                <div class="panel-body">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                	<input type="hidden" value="<?php echo $class;?>"  name="class"/>
                    <input type="hidden" value="<?php echo $sem;?>"  name="sem"/>
                    <input type="hidden" value="<?php echo $subid;?>"  name="subid"/>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2">Roll_No</th>
                                <th rowspan="2">Name</th>
                                <th colspan="2" style="text-align:center">Attendance</th>
                            </tr>
                            <tr>
                                <th>Present</th>
                                <th>Absent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							$query="select RollNo,Name from students where Class='$class' AND Sem='$sem'";
							$sql=mysqli_query($con,$query);
							while($result=mysqli_fetch_array($sql))
							{
								echo "<tr>";
								echo "<td>".$result['RollNo']."</td>";
								echo "<td>".$result['Name']."</td>";
								echo "<td><input type='radio' name='".$result['RollNo']."' value='p' required></td>";
								echo "<td><input type='radio' name='".$result['RollNo']."' value='a' required></td>";
								echo "</tr>";
							}
							?>
                            <tr><td colspan="4" align="center">
                            <button class="btn btn-primary btn-block" type="submit" id="sa" name="asubmit" value="asubmit">Submit Attendance</button></td></tr>
                        </tbody>
                    </table>
                 </form>
                </div>
            </div>
			<?php 
			}
			?>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
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