<?php require_once("common/connect.php");?>
<!DOCTYPE html>
<html lang="en-us">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link href="css/style3.css" rel="stylesheet" type="text/css">
<title>Home File</title>
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
<div class="main-box-4">
<div class="header">
<div class="header-box">
<div class="logo">
<div class="university"><a href="index.php"><img src="images/logo1.png"></a></div>
</div>
<div class="panel">
<form>
<input type="text" placeholder="&nbsp;&nbsp;&nbsp;Search weildstrem University" style="margin-top:70px; height:24px; width:52%; border-radius:15px 0px 0px 15px; border:none;"><div class="search1">
<div class="icon-1"><a href="#"><img src="images/icon1.png"></a></div>
<div class="icon-2"><a href="#"><img src="images/icon2.png"></a></div>
<div class="icon-3"><a href="#"><img src="images/icon3.png"></a></div>
<div class="icon-4"><a href="#"><img src="images/icon4.png"></a></div>
<div class="icon-5"><a href="#"><img src="images/icon5.png"></a></div>
<img src="images/search.png" style="border-radius:0px 15px 15px 0px;">
</div>
<div class="text-area4"><font color="white" size="2"><img src="images/dot.png" hspace="6"><a href="#">A-Z SITE INDEX</a></font></div>
<div class="text-area3"><font color="white" size="2"><img src="images/dot.png" hspace="6"><a href="#">CAMPUS MAP & LOCATION</a></font></div>
<div class="text-area3"><font color="white" size="2"><img src="images/dot.png" hspace="6"><a href="#">DIRECTORY</a></font></div>
<div class="text-area3"><font color="white" size="2"><img src="images/dot.png" hspace="6"><a href="#">BLOG</a></font></div>
<div class="text-area3"><font color="white" size="2"><img src="images/dot.png" hspace="6"><a href="#">HELP</a></font></div>
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

<div class="about-box-3">
<div class="section-12">
<div class="sidebar2">
<?php
$select="select * from cms where id='60'";
$sql=mysqli_query($con,$select) or die("error");
$i=1;
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);6+3
	?>
<div class="about-heading"><font color="#A50133" size="5"><b><?php echo $row['pagetitle']; ?></b></font></div>
<div class="about-text"><div class="about-text2"><b><font size="3"><?php echo $row['pagedescrp']; ?></font></div>
</div>
<div class="rightbar1">
<div class="section-8">
<a href="#"><img src="images/pdf.png" vspace="25" hspace="20"></a>
</div>
<div class="section-9">
<div class="calender-panel1">
<h2><font color="#FFFFFF">&nbsp;&nbsp;Campus Event Calender<div style="margin-top:-26px; margin-left:265px;"><img src="images/rss.png" hspace="10"></div></font></h2>
<div class="image-3"><center>SEP<br>4</center></div>
<div class="text-5"><font color="#F8A13E">The point of using Lorem</font><br><font color="#FFFFFF">9:15 am - 5:00 pm</font><br>
<font color="#FFFFFF">Read more about this event +</font></div>
<div class="image-3"><center>SEP<br>6</center></div>
<div class="text-5"><font color="#F8A13E">The point of using Lorem</font><br><font color="#FFFFFF">9:15 am - 5:00 pm</font><br>
<font color="#FFFFFF">Read more about this event +</font></div>
<div class="image-3"><center>SEP<br>10</center></div>
<div class="text-5"><font color="#F8A13E">The point of using Lorem</font><br><font color="#FFFFFF">9:15 am - 5:00 pm</font><br>
<font color="#FFFFFF">Read more about this event +</font></div>
<img src="images/image 1.png" hspace="15" vspace="20">
</div>
</div>
</div>
</div>

<div class="section-13">
<div><font color="#A50133" size="4"><b>&nbsp;&nbsp;&nbsp;&nbsp;STEPS TO APPLY FOR ADMISSION AT WIELDSTREM UNIVERSITY</b></font></div>
<div style="margin-top:30px; margin-left:20px;"><b><font color="#716F6F">1. COMPLETE the application.</font></b><br><br>

<b><font color="#716F6F">2. MAIL copy of high school transcript.</font></b><br><br>

<b><font color="#716F6F">3. Visa Information</font></b><br><br>

<b><font color="#716F6F">4. TAKE the ACT or SAT and have official test results.</font></b><br><br>

<b><font color="#716F6F">5. SUBMIT $50 application fee.</font></b><br><br></div>	
<img src="images/apply.png" hspace="20" vspace="2">
</div>


<div class="rightbar4">
<h2><font color="#FFFFFF">&nbsp;&nbsp;Campus News<div style="margin-top:-26px; margin-left:160px;"><img src="images/rss.png" hspace="10"></div></font></h2>
<img src="images/news.png" hspace="16">
<br><div class="news-text"><font color="#FFFFFF">There are many variations</div><div class="text-6">Lorem Ipsum is simply dummy text of <br>the printing and typesetting industry...</font><br><br><font color="#F8A13E">Read More +</font></div>
</div>
</div>
<div class="portion"></div>
<div class="section-14">
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
<div class="about-footer-3">
<div class="copyright">
<div style="margin-top:5px;"><font color="#FFFFFF"> <div style="margin-top:-20px; margin-left:420px;"><b>Designed By: Avninder Singh Budhiraja.</b></div>	Copyright &copy; <?php echo date('Y');?> Wieldstrem University. All Rights Reserved.</div>
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