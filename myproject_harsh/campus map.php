<?php require_once("common/connect.php");?>
<?php
error_reporting(0);
include("common/connect.php");
if($_POST['submit']){

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$insert="insert into enquiry set
name='$name',
email='$email',
message='$message'";
mysqli_query($con,$insert);
}
?>

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
<div class="main-box-7">
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

<div class="about-box-2">
<div class="section-20">
<div class="sidebar3">
<?php
$select="select * from cms where id='65'";
$sql=mysqli_query($con,$select) or die("error");
$i=1;
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
	?>
<div class="about-heading"><font color="#A50133" size="5"><b><?php echo $row['pagetitle']; ?></b></font></div>
<div class="map">

<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:245px;width:683px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://www.googlemapsgenerator.com/en/">http://www.googlemapsgenerator.com/en/</a></small></div><div><small><a href="https://buywebtrafficexperts.com/">boost your site and see result!</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(30.758765526956562,76.76480076295161),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(30.758765526956562,76.76480076295161)});infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>Panjab University, Sector 14, Chandigarh, 160014<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_Z4-3YpCUSMFZF55ShvzO4nM5FV_dP6Q&callback=initMap"
  type="text/javascript"></script>
</div>
<div class="about-text"><font color="#716F6F"><?php echo $row['pagedescrp']; ?></font></div>
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
<div class="section-21">
<div style="margin-left:35px; font-size:16px;"><b>General Information</b></div>
<div style="margin-left:35px; margin-top:7px; font-size:14px;"><font color="#716F6F">Wieldstrem University, Strem Valley,<div style="margin-top:3px;">Stoviana 258963.</font></div>
<div style="margin-top:8px;"><font color="#474344"><b>Call : 1800-895-985</div><div style="margin-top:5px;">Fax : 859 582 6975</div><div style="margin-top:5px;">Email : info@wieldstremuniversity.com</b></font></div>

<div style="margin-left:370px; margin-top:-126px; font-size:16px;"><b>Admissions Information</b></div>
<div style="margin-left:370px; margin-top:7px; font-size:14px;"><font color="#716F6F">Wieldstrem University, Strem Valley,<div style="margin-top:3px;">Stoviana 258963.</font></div>
<div style="margin-top:8px;"><font color="#474344"><b>Call : 1800-895-985</div><div style="margin-top:5px;">Fax : 859 582 6975</div><div style="margin-top:5px;">Email : info@wieldstremuniversity.com</b></font></div>

<div style="margin-left:-372px; margin-top:40px; font-size:16px;"><b>University Information</b></div>
<div style="margin-left:-372px; margin-top:7px; font-size:14px;"><font color="#716F6F">Wieldstrem University, Strem Valley ,<div style="margin-top:3px;">Stoviana 258963.</font></div>
<div style="margin-top:8px;"><font color="#474344"><b>Call : 1800-895-985</div><div style="margin-top:5px;">Fax : 859 582 6975</div><div style="margin-top:5px;">Email : info@wieldstremuniversity.com</b></font></div>

<div style="margin-left:370px; margin-top:-127px; font-size:16px;"><b>Press Contact Information</b></div>
<div style="margin-left:370px; margin-top:7px; font-size:14px;"><font color="#716F6F">Wieldstrem University, Strem Valley ,<div style="margin-top:3px;">Stoviana 258963.</font></div>
<div style="margin-top:8px;"><font color="#474344"><b>Call : 1800-895-985</div><div style="margin-top:5px;">Fax : 859 582 6975</div><div style="margin-top:5px;">Email : info@wieldstremuniversity.com</b></font></div>
</div>
<div style="margin-left:-40px; margin-top:40px;"><hr width="89%"></div>
<div class="section-22">
<div style="margin-left:35px; font-size:18px;"><b><font color="#A50133">CONTACT FORM</font></b></div>
<form method="post">
<div style="margin-left:35px; margin-top:15px;"><font color="#716F6F"><b>Name*</b></font>
<div style="margin-top:8px;"><input type="text" style="height:40px; width:45%;" name="name" required></div>
<div style="margin-left:2px; margin-top:18px;"><font color="#716F6F"><b>Email*</b></font>
<div style="margin-top:10px;"><input type="text" style="height:40px; width:45%;" name="email" required></div>
<div style="margin-left:2px; margin-top:15px;"><font color="#716F6F"><b>Message*</b></font>
<div style="margin-top:10px;"><input type="text" style="height:130px; width:45%;" name="message" required></div>
<input type="submit" value="Send Now" name="submit" class="mapbutton">
</form>
</div>
</div>
<div class="rightbar6">
<h2><font color="#FFFFFF">&nbsp;&nbsp;Campus News<div style="margin-top:-26px; margin-left:140px;"><img src="images/rss.png" hspace="10"></div></font></h2>
<img src="images/news.png" hspace="16">
<br><div class="news-text"><font color="#FFFFFF">There are many variations</div><div class="text-6">Lorem Ipsum is simply dummy text of <br>the printing and typesetting industry...</font><br><br><font color="#F8A13E">Read More +</font></div>
</div>
</div>
<div class="section-29">
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
<div class="about-footer-7">
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