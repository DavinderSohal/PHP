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
<div class="main-box-1">
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
