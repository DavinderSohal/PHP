<?php require_once("common/connect.php");?>
<!DOCTYPE html>
<html lang="en-us">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="css/style3.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<title>Home File</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">   
    
    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
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

#content {
  height:500px;
}

.wiggle {
  display:block;
  margin:0 auto;
  width:150px;
  height:150px;
  
}

.wiggle:hover {
  -webkit-animation:none;
}

.short-animate {
  -webkit-transition:.5s ease-in-out;
  -moz-transition:.5s ease-in-out;
  -ms-transition:.5s ease-in-out;
  -o-transition:.5s ease-in-out;
  transition:.5s ease-in-out;
}

.long-animate {
  -webkit-transition: .5s .5s ease-in-out;
  -moz-transition: .5s .5s ease-in-out;
  -ms-transition: .5s .5s ease-in-out;
  -o-transition:.5s .5s ease-in-out;
  transition:.5s .5s ease-in-out;
}

html,body {
  height:100%;
  min-height:100%;
}

.lightbox {
  position:fixed;
  top:-100%;
  bottom:100%;
  left:0;
  right:0;
  background:rgba(161,4,52,.8);
  z-index:501;
  opacity:0;
}

.lightbox img {
	position:absolute;
  margin:auto;
  top:0;
  left:0;
  right:0;
  bottom:0;
  max-width:0%;
  max-height:0%;
}

#lightbox-controls {
  position:fixed;
  height:70px;
  width:70px;
  top:-70px;
  right:0;
  z-index:502;
  background:rgba(0,0,0,.1);
}

#close-lightbox {
  display:block;
  position:absolute;
  overflow:hidden;
  height:50px;
  width:50px;
  text-indent:-5000px;
  right:10px;
  top:10px;
  -webkit-transform:rotate(45deg);
  -moz-transform:rotate(45deg);
  -ms-transform:rotate(45deg);
  -o-transform:rotate(45deg);
  transform:rotate(45deg);
}

#close-lightbox:before {
	content:'';
  display:block;
  position:absolute;
  height:0px;
  width:3px;
  left:24px;
  top:0;
  background:white;
  border-radius:2px;
  -webkit-transition: .5s .5s ease-in-out;
  -moz-transition: .5s .5s ease-in-out;
  -ms-transition: .5s .5s ease-in-out;
  -o-transition:.5s .5s ease-in-out;
  transition:.5s .5s ease-in-out;
}

#close-lightbox:after {
	content:'';
  display:block;
  position:absolute;
  width:0px;
  height:3px;
  top:24px;
  left:0;
  background:white;
  border-radius:2px;
  -webkit-transition: .5s 1s ease-in-out;
  -moz-transition: .5s 1s ease-in-out;
  -ms-transition: .5s 1s ease-in-out;
  -o-transition:.5s 1s ease-in-out;
  transition:.5s 1s ease-in-out;
}

.lightbox:target {
  top:0%;
  bottom:0%;
  opacity:1;
}

.lightbox:target img {
  max-width:100%;
  max-height:100%;
}

.lightbox:target ~ #lightbox-controls {
  top:0px;
}

.lightbox:target ~ #lightbox-controls #close-lightbox:after {
  width:50px;
}

.lightbox:target ~ #lightbox-controls #close-lightbox:before {
  height:50px;
}

@-webkit-keyframes wiggle {
	0% {
	  -webkit-transform:rotate(2deg);
  }
  20% {-webkit-transform:rotate(-2deg);}
  40% {-webkit-transform:rotate(2deg);}
  60% {-webkit-transform:rotate(-2deg);}
  80% {-webkit-transform:rotate(2deg);}
	100% {-webkit-transform:rotate(-2deg);}
}

</style>
<style>
#ui-datepicker-div { font-size: 12px; } 
#datepicker{float:left; height:18px; margin-top:35px;}
h1{font-size: 15px;}
</style>
<script>
$(function() {
	$("#datepicker").datepicker({
	   //showOn: both - datepicker will appear clicking the input box as well as the calendar icon
	   //showOn: button - datepicker will appear only on clicking the calendar icon
	   showOn: 'button',
	   buttonImage: 'image 1.png',
	   buttonImageOnly: true,
	   changeMonth: true,
	   changeYear: true,
	   showAnim: 'slideDown',
	   duration: 'fast',
	   dateFormat: 'dd-mm-yy'
	});
});
</script>
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

<div class="main-box">
<div class="header">
<div class="header-box">
<div class="logo">
<div class="university"><a href="index.php"><img src="images/logo1.png"></a></div>
</div>
<div class="area"></div>
<div class="panel">
<form>
<input type="text" placeholder="&nbsp;&nbsp;&nbsp;Search weildstrem University" style="margin-top:70px; height:24px; width:52%; border-radius:15px 0px 0px 15px; border:none;"><div class="search">
<div class="icon-1"><a href="#"><img src="images/icon1.png"></a></div>
<div class="icon-2"><a href="#"><img src="images/icon2.png"></a></div>
<div class="icon-3"><a href="#"><img src="images/icon3.png"></a></div>
<div class="icon-4"><a href="#"><img src="images/icon4.png"></a></div>
<div class="icon-5"><a href="#"><img src="images/icon5.png"></a></div>
<img src="images/search.png" style="border-radius:0px 15px 15px 0px;">
</div>
<div class="text-area"><font color="white" size="2"><img src="images/dot.png" hspace="6"><a href="#">A-Z SITE INDEX</a></font></div>
<div class="text-area-1"><font color="white" size="2"><img src="images/dot.png" hspace="6"><a href="#">CAMPUS MAP & LOCATION</a></font></div>
<div class="text-area-1"><font color="white" size="2"><img src="images/dot.png" hspace="6"><a href="#">DIRECTORY</a></font></div>
<div class="text-area-1"><font color="white" size="2"><img src="images/dot.png" hspace="6"><a href="#">BLOG</a></font></div>
<div class="text-area-1"><font color="white" size="2"><img src="images/dot.png" hspace="6"><a href="#">HELP</a></font></div>
</form>
</div>
</div>

<div class="small-box">
<div class="unit-1"><b><a href="index.php">HOME</a></b></div>
<div class="unit-2"><b><a href="about.php">ABOUT US</a></b></div>
<div class="unit-3"><b><a href="campus life.php">CAMPUS LIFE</a></b></div>
<div class="unit-4"><b><a href="admissions.php">ADMISSION</a></b></div>
<div class="unit-5"><b><a href="acadamics.php">ACADAMICS</a></b></div>
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

<div class="sub-box">
<div> 
         <!-- Insert to your webpage where you want to display the slider -->
         <div id="amazingslider-wrapper-1" style="display:block;width:100%;">
         <div id="amazingslider-1" style="display:block;position:absolute;margin-top:">
            <ul class="amazingslider-slides" style="display:none;">
                <li><img src="images/banner%201.png"/>
                </li>
                <li><img src="images/banner%202.png"/>
                </li>
                <li><img src="images/banner%203.png"/>
                </li>
                <li><img src="images/banner%204.png"/>
                </li>
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="images/banner%201-tn.png"/></li>
                <li><img src="images/banner%202-tn.png"/></li>
                <li><img src="images/banner%203-tn.png"/></li>
                <li><img src="images/banner%204-tn.png"/></li>
            </ul>
        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive JavaScript Slider">Responsive JavaScript Slider</a></div>
        </div>
    </div>
    <!-- End of body section HTML codes -->
    

</div>
<div class="section-1">
<?php
$select="select * from cms where id='47'";
$sql=mysqli_query($con,$select) or die("error");
$i=1;
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
	?>
<div class="sidebar">
<h2 style="color:#A50133;"><?php echo $row['pagetitle']; ?></h2>
<div class="image"><img src="images/college.png" height="138px" width="100%"></div><div class="text"><font color="#716F6F"><?php echo $row['pagedescrp']; ?></font></div><div class="text-9"><font color="#716F6F">specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since .<br><br> 

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised ...<br></font></div><br><a href="#"><font color="#4E0015"><div class="text-9"><b>Read More +</b></div></font></a>
</div>
<?php
$select="select * from cms where id='48'";
$sql=mysqli_query($con,$select) or die("error");
$i=1;
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
	?>
<div class="rightbar">
<h2 style="color:#A50133;"><?php echo $row['pagetitle']; ?><img src="images/rss.png" hspace="15"></h2> 
<div><img src="images/spotlight.png"></div>
<br><div class="text-1"><font style="color:#716F6F;"><?php echo $row['pagedescrp']; ?></font></div><br><a href="#"><font style="color:#4E0015;"><b>Read More +</b></font></a>
</div>
</div>
<div class="section-3">
<div class="news-panel">
<h2 style="color:#A50133;">Campus News<img src="images/rss.png" hspace="10"></h2>
<div class="image-2"><img src="images/news 1.png"></div>
<div class="text-2"><font style="color:#191516;">There are many variations</font><br><font style="color:#A5016A;">Sep.04.2012</font>
<br><font color="#716F6F">Lorem Ipsum is simply dummy text of <br>the printing and typesetting industry...</font></div>
<div class="image-2"><img src="images/news 2.png"></div>
<div class="text-2"><font color="#191516">There are many variations</font><br><font color="#A5016A">Sep.04.2012</font>
<br><font color="#716F6F">Lorem Ipsum is simply dummy text of <br>the printing and typesetting industry...</font></div>
<div class="image-2"><img src="images/news 3.png"></div>
<div class="text-2"><font color="#191516">There are many variations</font><br><font color="#A5016A">Sep.04.2012</font>
<br><font color="#716F6F">Lorem Ipsum is simply dummy text of <br>the printing and typesetting industry...</font></div>
</div>
<div class="calender-panel">
<h2><font color="#A50133">Campus Event Calender<img src="images/rss.png" hspace="10"></font></h2>
<div class="image-3"><center>SEP<br>4</center></div>
<div class="text-3"><font color="#191516">The point of using Lorem</font><br><font color="#A5016A">9:15 am - 5:00 pm</font><br>
<font color="#716F6F">Read more about this event +</font></div>
<div class="image-3"><center>SEP<br>6</center></div>
<div class="text-3"><font color="#191516">The point of using Lorem</font><br><font color="#A5016A">9:15 am - 5:00 pm</font><br>
<font color="#716F6F">Read more about this event +</font></div>
<div class="image-3"><center>SEP<br>10</center></div>
<div class="text-3"><font color="#191516">The point of using Lorem</font><br><font color="#A5016A">9:15 am - 5:00 pm</font><br>
<font color="#716F6F">Read more about this event +</font></div>
<img src="images/image 1.png" hspace="11" vspace="13">

<input style="width:0px; height:0px;" id="datepicker">


</div>
<div class="videos-panel">
<h2><font color="#A50133">Campus Featuring Videos<img src="images/rss.png" hspace="10"></font></h2>
<video width="310" height="170" controls>
<source src="videos/CU Video.mp4" type="video/mp4">
</video>
<br><div class="text-4"><font color="#716F6F">Lorem Ipsum is simply dummy text of  printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since ...</font><br><br><font color="#4E0015"><b>Read More +</b></font></div> 
</div>
</div>
<div class="section-4">
<div class="heading"><h2><font color="#A50133">Campus Beautiful Moments<img src="images/rss.png" hspace="13"></font></h2></div>
<div id="content"><a href="#image1" class="wiggle"><div style="margin-left:-435px; margin-top:25px;"><img src="images/photo.png"/></div></a>
  <div class="lightbox short-animate" id="image1">
    <img class="long-animate" src="images/photo.png"/>
  </div>
  <div id="lightbox-controls" class="short-animate">
    <a id="close-lightbox" class="long-animate" href="#!"></a>
  </div>
<div id="content"><a href="#image2" class="wiggle"><div style="margin-left:-60px; margin-top:-150px;"><img src="images/photo 1.png"/></div></a>
  <div class="lightbox short-animate" id="image2">
    <img class="long-animate" src="images/photo 1.png"/>
  </div>
  <div id="lightbox-controls" class="short-animate">
    <a id="close-lightbox" class="long-animate" href="#!"></a>
  </div>
<div id="content"><a href="#image3" class="wiggle"><div style="margin-left:308px; margin-top:-150px;"><img src="images/photo 2.png"/></div></a>
  <div class="lightbox short-animate" id="image3">
    <img class="long-animate" src="images/photo 2.png"/>
  </div>
  <div id="lightbox-controls" class="short-animate">
    <a id="close-lightbox" class="long-animate" href="#!"></a>
  </div>
</div>
 

<div class="section-31">
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
<div class="footer">
	<div class="copyright-2">
		<div style="margin-top:5px;">
			<font color="#FFFFFF"> 
				<div style="margin-top:-20px; margin-left:384px;">
					<b>Designed By: Avninder,Harshpreet&Piyush .</b>
				</div>	
				Copyright &copy; <?php echo date('Y');?> Wieldstrem University. All Rights Reserved.
		</div>
		<div style="margin-top:-12px;"><br>Wieldstrem University, Strem Valley , Stoviana 258963.</div>
		<div style="margin-top:-12px;"><br><b>Call : 1800-895-985 | Fax : 859 582 6975 | Email : info@wieldstremuniversity.com</b></font></div>
	</div>
<div class="logo-1">
<img src="images/logo.png">
</div>
</div>
</div>	                      
</body>
</html>                      
