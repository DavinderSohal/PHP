<?php
error_reporting(0);
include("common/connect.php");
if($_POST['submit']){

$name=$_POST['name'];
$fname=$_POST['fathersname'];
$mname=$_POST['mothersname'];
$date=$_POST['dob'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$code=$_POST['code'];
$religion=$_POST['religion'];
$category=$_POST['category'];
$sscroll=$_POST['sscroll'];
$schoolname1=$_POST['schoolname1'];
$sscyear=$_POST['sscyear'];
$board1=$_POST['board1'];
$grade1=$_POST['grade1'];
$hscroll=$_POST['hscroll'];
$schoolname2=$_POST['schoolname2'];
$hscyear=$_POST['hscyear'];
$board2=$_POST['board2'];
$grade2=$_POST['grade2'];
$program=$_POST['program'];
$sscmarks=$_POST['sscmarks'];
$hscmarks=$_POST['hscmarks'];
$detail1=$_POST['detail1'];
$detail2=$_POST['detail2'];
$detail3=$_POST['detail3'];
$detail4=$_POST['detail4'];
$detail5=$_POST['detail5'];
$detail6=$_POST['detail6'];
$detail7=$_POST['detail7'];
$insert="insert into admissions set
name='$name',
fathersname='$fname',
mothersname='$mname',
dob='$dob',
gender='$gender',
address='$address',
code='$code',
religion='$religion',
category='$category',
sscroll='$sscroll',
schoolname1='$schoolname1',
sscyear='$sscyear',
board1='$board1',
grade1='$grade1',
hscroll='$hscroll',
schoolname2='$schoolname2',
hscyear='$hscyear',
board2='$board2',
grade2='$grade2',
program='$program',
sscmarks='$sscmarks',
hscmarks='$hscmarks',
detail1='$detail1',
detail2='$detail2',
detail3='$detail3',
detail4='$detail4',
detail5='$detail5',
detail6='$detail6',
detail7='$detail7'";
mysqli_query($con,$insert);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Home File</title>
<link href="css/style3.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	$( function() {
		$( "#datepicker" ).datepicker({
			showOn: "button",
			buttonImage: "images/calendar.gif",
			buttonImageOnly: true,
			buttonText: "Select date"
		});
	} );
	</script>
<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 50px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: #650020;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #f8a94d;
}
</style>
</head>
<body>
<button onclick="topFunction()" id="myBtn"><img src="images/top.png"></button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
<div class="main-box-9">
<div class="header">
<div class="header-box">
<div class="logo">
<div class="university"><a href="index.php"><img src="images/logo1.png"></a></div>
</div>
<div class="panel">
<form>
<input type="text" placeholder="&nbsp;&nbsp;&nbsp;Search weildstrem University" style="margin-top:70px; height:24px; width:52%; border-radius:15px 0px 0px 15px; border:none;"><div class="search1">
<div class="icon-1"><img src="images/icon1.png"></div>
<div class="icon-2"><img src="images/icon2.png"></div>
<div class="icon-3"><img src="images/icon3.png"></div>
<div class="icon-4"><img src="images/icon4.png"></div>
<div class="icon-5"><img src="images/icon5.png"></div>
<img src="images/search.png" style="border-radius:0px 15px 15px 0px;">
</div>
<div class="text-area"><font color="white" size="2"><img src="images/dot.png" hspace="6">A-Z SITE INDEX</font></div>
<div class="text-area-1"><font color="white" size="2"><img src="images/dot.png" hspace="6">CAMPUS MAP & LOCATION</font></div>
<div class="text-area-1"><font color="white" size="2"><img src="images/dot.png" hspace="6">DIRECTORY</font></div>
<div class="text-area-1"><font color="white" size="2"><img src="images/dot.png" hspace="6">BLOG</font></div>
<div class="text-area-1"><font color="white" size="2"><img src="images/dot.png" hspace="6">HELP</font></div>
</form>
</div>
</div>


<div class="small-box">
<div class="unit-1"><b><a href="index.php">HOME</a></b></div>
<div class="unit-2"><b><a href="about.php">ABOUT US</a></b></div>
<div class="unit-3"><b><a href="academics.php">ACADEMICS</a></b></div>
<div class="unit-4"><b><a href="admissions.php">ADMISSION</a></b></div>
<div class="unit-5"><b><a href="campus life.php">CAMPUS LIFE</a></b></div>
<div class="unit-6"><b><a href="#"><font color="#FFFFFF">
<div class="dropdown">
  <span>PAGES</span>
  <div class="dropdown-content">
    <p><a href="campus map.php">Campus Map & Location</a></p>
    <hr> 
	<p><a href="research.php">Research</a></p>
    <hr>
  <p><a href="course.php">Course</a></p>
  </div>
</div>
</font></a></b></div>
<div><a href="admission form.php"><img src="images/button1.png" height="57px"></a></div>
</div>
</div>

<div class="about-box-4">

<img src="images/form.jpg" width="100%" height="400px">
<div style="margin-top:-40px; margin-left:350px; font-size:38px;">University Admission Form</div>
<div style="margin-left:380px; margin-top:30px; font-size:21px;">Fill all the details carefully in the form !!!!!</div>
<div style="margin-top:35px;"><hr width="43%"></div>

<div class="box-1">
<div class="about-heading3"><font color="#A50133" size="5"><b>PERSONAL DETAILS</b></font></div>
<form method="post">	
<input type="text" style="height:30px; width:90%; margin-top:20px; margin-left:14px;" placeholder="Name" name="name" required="required">&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:20px; margin-left:14px;" placeholder="Father's Name" name="fathersname" required="required">&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:20px; margin-left:14px;" placeholder="Mother's Name" name="mothersname" required="required">&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:20px; margin-left:14px;" placeholder="Date of birth" name="dob" id="datepicker" required="required">&nbsp;
<label><div style="margin-left:14px; margin-top:20px;">Gender*</label></div><br>
<div style="margin-left:10px; margin-top:-2px;"><input type="radio" value="male" name="gender"><label>Male</label></div> <br><div style="margin-left:10px; margin-top:-8px"><input type="radio" value="female" name="gender"><label>Female</label></div>
<input type="text" style="height:70px; width:90%; margin-top:20px; margin-left:14px;" placeholder="Permanent Address" name="address" required="required">&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:20px; margin-left:14px;" placeholder="Pin code" name="code" required="required">&nbsp;
<div style="margin-left:15px; margin-top:18px;"><label>Religion<label><br></div>
<div style="margin-left:15px; margin-top:15px;"><select name="religion" style="width:95%; height:30px;"></div>
<option value="Hindu">Hindu</option>
<option value="Muslim">Muslim</option>
<option value="Sikh">Sikh</option>
<option value="Buddhist">Buddhist</option>
<option value="Parsi">Parsi</option>
<option value="Others">Others</option>
</select><br><br>
<div style="margin-left:4px; margin-top:-2px;"><label>Category<label><br></div>
<div style="margin-left:4px; margin-top:15px;"><select name="category" style="width:95%; height:30px;"></div>
<option value="GEN">GEN</option>
<option value="SC">SC</option>
<option value="ST">ST</option>
<option value="OBC">OBC</option>
</select><br><br>
<div style="margin-right:30px;"><hr width="105%"></div>
</div>
<div class="box-2">
<div class="about-heading2"><font color="#A50133" size="5px"><b>ACADEMIC INFORMATION</b></font></div>
<div style="margin-left:10px; margin-top:27px; font-size:20px;">SSC Details</div>
<input type="text" style="height:30px; width:90%; margin-top:25px; margin-left:11px;" placeholder="SSC Roll Number" name="sscroll" required="required">&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:22px; margin-left:11px;" placeholder="School or Institute Name" name="schoolname1" required="required">&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:20px; margin-left:11px;" placeholder="SSC Passing Year" name="sscyear" required="required">&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:20px; margin-left:11px;" placeholder="Board" name="board1" required="required">&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:20px; margin-left:11px;" placeholder="Percentage or Grade" name="grade1" required="required">&nbsp;
<div style="margin-left:-5px; margin-top:15px;"><hr width="90%"></div>
<div style="margin-left:10px; margin-top:10px; font-size:20px;">HSC Details</div>
<input type="text" style="height:30px; width:90%; margin-top:18px; margin-left:11px;" placeholder="HSC Roll Number" name="hscroll" required="required">&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:18px; margin-left:11px;" placeholder="School or Institute Name" name="schoolname2" required="required">&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:18px; margin-left:11px;" placeholder="HSC Passing Year" name="hscyear" required="required">&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:18px; margin-left:11px;" placeholder="Board" name="board2" required="required">&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:18px; margin-left:11px;" placeholder="Percentage or Grade" name="grade2" required="required">&nbsp;
<div style="margin-left:-2px; margin-top:26px;"><hr width="91%"></div>
<div class="box-3">
<div class="about-heading1"><font color="#A50133" size="5px"><b>SELECT DEGREE PROGRAM</b></font></div>
<div style="margin-left:8px; margin-top:25px;"><select name="program" style="width:95%; height:30px;"></div>
<option value="BBA">BBA</option>
<option value="BSc">BSc</option>
<option value="BE">BE</option>
<option value="BCom">BCom</option>
<option value="BA LLB">BA LLB</option>
</select><br><br>
<input type="text" style="height:30px; width:93%; margin-top:3px; margin-left:2px;" placeholder="Non-refundable Application Fee : 45 USD" disabled>&nbsp;
<input type="text" style="height:30px; width:93%; margin-top:22px; margin-left:2px;" placeholder="SSC Marks" name="sscmarks" required="required">&nbsp;
<input type="text" style="height:30px; width:93%; margin-top:22px; margin-left:4px;" placeholder="HSC Marks" name="hscmarks" required="required">&nbsp;
<div style="margin-left:5px; margin-top:-2px; font-size:20px;">Others Details</div>
<input type="text" style="height:30px; width:93%; margin-top:29px; margin-left:5px;" placeholder="Detail 1" name="detail1" required="required">
<input type="text" style="height:30px; width:93%; margin-top:6px; margin-left:5px;" placeholder="Detail 2" name="detail2" required="required">
<input type="text" style="height:30px; width:93%; margin-top:50px; margin-left:5px;" placeholder="Detail 3" name="detail3" required="required">
<input type="text" style="height:30px; width:93%; margin-top:18px; margin-left:5px;" placeholder="Detail 4" name="detail4" required="required">
<input type="text" style="height:30px; width:93%; margin-top:17px; margin-left:5px;" placeholder="Detail 5" name="detail5" required="required">
<input type="text" style="height:30px; width:93%; margin-top:19px; margin-left:5px;" placeholder="Detail 6" name="detail6" required="required">
<input type="text" style="height:30px; width:93%; margin-top:17px; margin-left:5px;" placeholder="Detail 7" name="detail7" required="required">
<div style="margin-left:-1px; margin-top:26px;"><hr width="94%"></div>
<input type="submit" value="Submit" name="submit" class="button">
</form>
</div>
</div>
</div>
</div>
<div class="section-23">
<div class="link-1">

<h3><font color="#191516">General info</font></h3>

<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Visit</font></a><br><br>
<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Maps</font></a><br><br>
<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">History</font></a><br><br>
<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Diversity</font></a><br><br>
<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Administration</font></a><br><br>
<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Accreditation Status</font></a><br><br>

</div>
<div class="link-2">

<h3><font color="#191516">Wieldstrem University</font></h3>

<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Blackboard</font></a><br><br>
<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Calendars</font></a><br><br>
<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Class Schedule</font></a><br><br>
<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Colonel's Compass</font></a><br><br>
<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Green Initiatives</font></a><br><br>
<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Faculty/Staff Email</font></a><br><br>

</div>
<div class="link-3">

<h3><font color="#191516">Quick Link</font></h3>

<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Colleges & Departments</font></a><br><br>
<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Community Education</font></a><br><br>
<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Conferencing & Events</font></a><br><br>
<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Employment & Benefits</font></a><br><br>
<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Financial Aid</font></a><br><br>
<img src="images/arrow.png">&nbsp;&nbsp;<a href="#"><font color="grey">Information Technology</font></a><br><br>

</div>
<div class="link-4">

<h3><font color="#191516">About Wieldstrem University</font></h3>

<font color="grey">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 
'Content here, content here', 
making it look like readable English.</font>
<br><br><a href="#"><font color="grey"><b>Read More +</b></font></a>

</div>
</div>

</div>
<div class="about-footer-5">
<div class="copyright">
<div style="margin-top:5px;"><font color="#FFFFFF"> <div style="margin-top:-20px; margin-left:420px;"><b>Designed By: Avninder Singh Budhiraja.</b></div>      Copyright &copy; <?php echo date('Y');?> Wieldstrem University. All Rights Reserved.</div>
<div style="margin-top:-12px;"><br>Wieldstrem University, Strem Valley , Stoviana 258963.</div>
<div style="margin-top:-12px;"><br><b>Call : 1800-895-985 | Fax : 859 582 6975 | Email : info@wieldstremuniversity.com</b></font></div>
</div>
<div class="logo-1">
<img src="images/logo.png">
</div>
</div>
</div>
</div>
</body>
</html>