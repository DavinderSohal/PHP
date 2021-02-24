 <?php
include "include/connection.php";
if(isset($_POST['alogin']))
{
	extract($_POST);
	$query="select UName,Password from admin where UName='$uname' and Password='$pass'";
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		if(mysqli_num_rows($sql) == 1)
		{
			$_SESSION['UName']=$uname;
			header("location: admin/index.php");
		}
		else
		{
			$errMsg= "<span>Please Check Your Uname / Password</span>";
		}
	}	
}
if(isset($_POST['tlogin']))
{
	extract($_POST);
	$query="select TID,Password from teachers where TID=$tid and Password='$pass'";
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		if(mysqli_num_rows($sql) == 1)
		{
			$_SESSION['tlogin']=$tid;
			header("location: teachers/index.php");
		}
		else
		{
			$errMsg= "<span>Please Check Your Teacher Id / Password</span>";
		}
	}
	else
		{
			$errMsg= "<span>Please Check Your Teacher Id / Password</span>";
		}	
}
if(isset($_POST['slogin']))
{
	extract($_POST);
	$query="select RollNo,Password from students where RollNo=$rollno and Password='$pass'";
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		if(mysqli_num_rows($sql) == 1)
		{
			$_SESSION['slogin']=$rollno;
			header("location: student/index.php");
		}
		else
		{
			$errMsg= "<span>Please Check Your Student Id / Password</span>";
		}
	}
	else
		{
			$errMsg= "<span>Please Check Your Student Id / Password</span>";
		}	
}

?>
<doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<style>
body {
	background-image: url(images/1.jpg);
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
}
span.glyphicon-log-in {
	font-size: 36px;
}
h2.mysize {
	font-size: 24px;
	font-weight: bold
}
.btn#btn-sl {
	font-size: 24px;
	font-weight: bold;
	background-color: #375a7f;
}
.btn#btn-al {
	font-size: 24px;
	font-weight: bold;
	background-color: #375a7f;
}
.btn#btn-tl {
	font-size: 24px;
	font-weight: bold;
	background-color: #375a7f;
}
.panel#sl {
	display: none
}
.panel#al {
	display: none
}
.panel#tl {
display:
}
#at {
	font-size: 24px;
	font-weight: bold
}
span {
	font-family: "Comic Sans MS", cursive;
	font-size: 15px;
	text-align: center;
}
.panel-heading h4 {
	color: #FFF;
	font-family: "Comic Sans MS", cursive;
	font-size: 30px
}
.navbar-brand {
	font-family: "Comic Sans MS", cursive;
	font-size: 30px
}
ul {
	font-family: "Comic Sans MS", cursive;
	font-size: 19px
}
</style>
<title>Attendence Tracking System</title>
</head>
<body>
<div class="navbar  navbar-default " id="navbar">
    <div class="navbar-header">
        <div align="right">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand text-capitalize" href="#" id="at">Attendance Tracking System</a> </div>
    </div>
</div>
<div class="container" style="margin:50px auto">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-4"> </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-4">
            <div class="panel panel-primary" id="tl">
                <div class="panel-heading">
                    <h2 class="panel-title mysize" align="center" title="login"> Teacher's Login</h2>
                </div>
                <div class="panel-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <label class="control-label" for="inputDefault">Teacher Id</label>
                            <input  type="number" name="tid" class="form-control" id="inputDefault" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="inputDefault">Password</label>
                            <input  type="password" name="pass" class="form-control" id="inputDefault" required>
                        </div>
                        <button  type="submit" name="tlogin" value="tlogin" class="btn btn-primary btn-block"> <span class="glyphicon glyphicon-log-in"></span> </button>
                    </form>
                </div>
            </div>
            <div class="panel panel-primary" id="sl">
                <div class="panel-heading">
                    <h2 class="panel-title mysize" align="center" title="login"> Student Login</h2>
                </div>
                <div class="panel-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <label class="control-label" for="inputDefault">Student Roll_No</label>
                            <input type="number" name="rollno" class="form-control" id="inputDefault" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="inputDefault">Password</label>
                            <input type="password" name="pass" class="form-control" id="inputDefault" required>
                        </div>
                        <button type="submit" name="slogin" value="slogin" class="btn btn-primary btn-block"> <span class="glyphicon glyphicon-log-in"></span> </button>
                    </form>
                </div>
            </div>
            <div class="panel panel-primary" id="al">
                <div class="panel-heading">
                    <h2 class="panel-title mysize" align="center" title="login"> Admin Login</h2>
                </div>
                <div class="panel-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <label class="control-label" for="inputDefault">Username</label>
                            <input type="text" name="uname" class="form-control" id="inputDefault" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="inputDefault">Password</label>
                            <input type="password" name="pass" class="form-control" id="inputDefault" required>
                        </div>
                        <button type="submit" name="alogin"  value="alogin"class="btn btn-primary btn-block"> <span class="glyphicon glyphicon-log-in"></span> </button>
                    </form>
                </div>
            </div>
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
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <button type="button" class="btn btn-primary btn-block" id="btn-sl">Student Login</button>
        </div>
        <div class="col-lg-4">
            <button type="button" class="btn btn-primary btn-block" id="btn-al">Admin Login</button>
        </div>
        <div class="col-lg-4">
            <button type="button" class="btn btn-primary btn-block" id="btn-tl">Teacher's Login</button>
        </div>
    </div>
</div>
<?php
include "include/footer.html";
?>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script>
$(document).ready(function(e) {
    $("#btn1").click(function(){
		$("#navbar").removeClass("navbar-inverse").addClass("navbar-default");
		});
	$("#btn2").click(function(){
		$("#navbar").removeClass("navbar-default").addClass("navbar-inverse");
		});
	//For the rows which contains marks less then 75%
	$("tr td:nth-child(4)").each(function(index, element) {
        var marks=$(this).text()*1;
		if(marks <75)
		{
			$(this).parent("tr").addClass("danger");
		}
    });
	$("#btn-al").click(function(){
			$("#sl").hide();
			$("#tl").hide();
			$("#al").hide().show(300);
		});
	$("#btn-sl").click(function(){
			$("#al").hide();
			$("#tl").hide();
			$("#sl").hide().show(300);		
		});
	$("#btn-tl").click(function(){
			$("#al").hide();					
			$("#sl").hide();
			$("#tl").hide().show(300);
		});
});
</script>
</body>
</html>