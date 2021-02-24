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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inbox</title>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
<style>
.fa-search {
	font-size: 19px;
}
#icon {
	font-size: 36px;
}
</style>
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
            <li><a href="updateSW.php">Update S/W</a></li>             
             <li><a href="removeSW.php">Remove S/W</a></li>            
            <li><a href="existingSW.php">Existing Softwares</a></li>
            <li><a href="userRequest.php">User Request</a></li>
            <li class="active"><a href="inbox.php">Inbox</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="sign-out.php">Sign-out</a></li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
        	<div class="panel panel-info">
            	<div class="panel-heading">
                	<h3 class="panel-title text-center"><b>Inbox</b></h3>
                </div>
                <div class="panel-body">
                	<table width="auto" class="table table-striped table-bordered">
                    	<tr>
                            <th scope="col">MsgID</th>
                            <th scope="col">User name</th>
                            <th scope="col">User Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Date</th>
                        </tr>
                                 <?php
								$query="select * from inbox";
								$sql=mysqli_query($con,$query);
									while($result=mysqli_fetch_array($sql))
									{										
										echo "<tr>";
											echo "<td>".$result['MsgID']."</td>";
											echo "<td>".$result['UName']."</td>";
											echo "<td>".$result['UEmail']."</td>";
											echo "<td>".$result['Message']."</td>";
											echo "<td>".$result['MsgDate']."</td>";
										echo "</tr>";
									}
									
								   ?>
                      </table>
                 </div>
             </div>
          </div>
       </div>
    </div>
</div>
<div class="col-lg-2">
</div>
        </div>
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
<title>Inbox</title>
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
