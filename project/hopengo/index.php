<?php 
ob_start();
session_start();


if (isset($_GET['msg'])) {
    if ($_GET['msg']==10000) {
       echo "<script>alert('Registered successfully!')</script>";
    }
 }
 // include 'config.php';

if (isset($_GET['err']) && $_GET['err']==52) {
	echo "<script>alert('login to continue')</script>";
}

if (isset($_GET['msg']) && $_GET['msg']==100) {
	echo "<script>alert('logged out')</script>";
}

 
include'include/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hope Animal Welfare Society </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Harvest Life Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/lgform.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link rel="icon" type="image/png" href="images/himage2.png"/>
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Playball&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<div class="banner-top">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">
							<div class="container">
								<div class="agileits-banner-info">
									<h3>WELCOME TO HOPE ANIMAL WELFARE SOCIETY<span>An animal's eyes have the power to speak a great language.</span></h3>
									<p>When you look into the eyes of an animal you've rescued, you can't help but fall in love.</p>
									<div class="w3-button">
										<a href="Donars.php">Donate</a>
										<a href="http://www.Hopewelfaresociety.blogspot.com">Blog</a>
									</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
									<h3>WELCOME TO HOPE ANIMAL WELFARE SOCIETY<span>kindness and compassion to all things is the noblest code of ethics</span></h3>
									<p>Until one has loved an animal a part of one's soul remains unawakened. </p>
									<div class="w3-button">
										<a href="Donars.php">Donate</a>
										<a href="http://www.Hopewelfaresociety.blogspot.com">Blog</a>
									</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
									<h3>WELCOME TO HOPE ANIMAL WELFARE SOCIETY<span>World animal day get involved and show you care</span></h3>
									<p>Each and every one of us can make a difference for animals</p>
									<div class="w3-button">
										<a href="Donars.php">Donate</a>
										<a href="http://www.Hopewelfaresociety.blogspot.com">Blog</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<!--banner Slider starts Here-->
		</div>
	</div>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.php">Hope <span><sup>Life</sup></span></a>
						</h1>
					</div>
				</div>
				<div class="header-right">
					<div class="agileinfo-social-grids">
						<ul>
							
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>

						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="active list-border" href="index.php">Home</a></li>
									<li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
										<ul class="dropdown-menu">
										    <li><a class="hvr-bounce-to-bottom" href="about.php">About Hope</a></li>
											<li><a class="hvr-bounce-to-bottom" href="misson.php">Our mission</a></li>
											<li><a class="hvr-bounce-to-bottom" href="helpline.php">Our Helpline</a></li>     
											 <li><a class="hvr-bounce-to-bottom" href="testimonials.php">Testimonials</a></li>
										</ul>
									</li>									<li><a href="Donars.php">Donors</a></li>	
								    <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="gallery.php">Our Gallery</a></li>
											<li><a class="hvr-bounce-to-bottom" href="animals.php">Our Family</a></li>     
										</ul>
									</li>	


									<li><a href="news.php">News/Events</a></li>
									<li><a class="list-border1" href="contact.php">Contact</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="w3-welcome-grids">
				<div class="col-md-5 w3l-welcome-left">
					<h2>Welcome to HOPE<span>Animal Welfare Society</span></h2>
					<p>A motivation to serve man's best friend gave birth to hope. Hope is registred under the Punjab society registration act 1961..</p>
					<div class="w3ls-button">
						<a onclick="document.getElementById('id01').style.display='block'">Login</a>
						<a onclick="document.getElementById('id02').style.display='block'">Register</a>

					</div>
				</div>
				<div class="col-md-7 w3l-welcome-right">
					<div class="w3l-welcome-right-grids">
						<div class="col-sm-5 w3l-welcome-right-img">
							<img src="images/424268-hope-1345384873-415-640x480_480x640.jpg" alt="" />
						</div>
						<div class="col-sm-7 w3l-welcome-right-img1">
							<img src="images/1-4_400x400_540x327.jpg" alt="" />
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="agileits-services-grids">
				<div class="col-md-4 agileinfo-services-left">
					<h3>Our <span>Services</span></h3>
					<p>Many of the services we provide for our shelter animals are also available to the public. By working with the Animal Welfare Society for these services, pet owners can gain access to the area's leading pet care experts while supporting the important work we do for all of the animals here.</p>
				</div>
				<div class="col-md-8 agileinfo-services-right">
					<div class="col-md-6 w3-agileits-services-grid">
						<i class="fa fa-cogs" aria-hidden="true"></i>
						<h4>Vaccination camps</h4>
						<p>After 10 camps for dogs and horses were held with the aim of educating owners about need and importance of animals to be vaccinated..</p>
					</div>
					<div class="col-md-6 w3-agileits-services-grid agile-services1">
						<i class="fa fa-comments" aria-hidden="true"></i>
						<h4>24*7 hours helpdesk</h4>
						<p>(24x7 helpline) which can be contacted for any kind of general enquiry as well as donation related enquiries. .</p>
					</div>
					<div class="col-md-6 w3-agileits-services-grid">
						<i class="fa fa-heart" aria-hidden="true"></i>
						<h4>We care for Animals</h4>
						<p>Our aim is to prevent animal cruelty through education, animal sheltering and advocacy. Our society rehabilitates these animals in the hope of finding them new homes and a second chance at a good life.</p>
					</div>
					<div class="col-md-6 w3-agileits-services-grid">
						<i class="fa fa-plane" aria-hidden="true"></i>
						<h4>Worldwide Recognization</h4>
						<p>As an organisation that works towards the best interest of the animals, we ensure to make the best use of our resources. Through your continuous support witness developments that open doors to lasting change. .</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- news -->
	<div class="news">
		<div class="container">
			<div class="wthree-news-grids">
				<div class="col-md-4 agileinfo-services-left agile-news-left">
					<h3>Our <span>News</span></h3>
					<p>Welcome to The Official Hope Ngo Home. As a member of this group you will be able to see and discuss News and Current Issues affecting our Country. We invite you to join us and welcome your suggestions and feedback..</p>
				</div>
				<div class="col-md-8 agile-news-right">
					<div class="col-md-6 agile-news-right-info">
						<div class="col-md-6 agile-news-img">
							
						</div>
						<div class="col-md-6 agile-news-img-info">
							<h5>Mizoram Gov</a></h5>
							<div class="agileits-w3layouts-border"> </div>
							<p>These dogs begged for help.The dogs were trapped.</p>
							<h6><i class="fa fa-calendar" aria-hidden="true"></i> 24th April,2018</h6>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 agile-news-right-info">
						<div class="col-md-6 agile-news-img agile-news-img1">
							
						</div>
						<div class="col-md-6 agile-news-img-info">
							<h5>Noida Ngo</h5>
							<div class="agileits-w3layouts-border"> </div>
							<p>Animals at Noida shelter suffer amid NGO, authority tiff.</p>
							<h6><i class="fa fa-calendar" aria-hidden="true"></i> 13th May,2018</h6>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //news -->
	<!-- footer -->
	   
    <?php include 'subscribe.php' ?>

   <!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3agile_footer_grids">
				<div class="col-md-3 agileinfo_footer_grid">
					<div class="agileits_w3layouts_footer_logo">
						<h2><a href="index.php"><span>H</span>ope<i></i></a></h2>
					</div>
				</div>
				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Contact Info</h3>
					<h4>Call Us <span>+91-161-2460342</span></h4>
					<p>175-A Sarabha Nagar Ludhiana,141003.<span>Punjab(INDIA).</span></p>
					<ul class="agileinfo-social-grids12">
						<li><a href="#"><i class="fa fa-facebook" aria-hideen="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hideen="true"></i></a></li>
						<li><a href="#"><i class="fa fa-rss" aria-hideen="true"></i></a></li>
						<li><a href="#"><i class="fa fa-vk" aria-hideen="true"></i></a></li>
						</ul>
						
				</div>
				<div class="col-md-2 agileinfo_footer_grid agileinfo_footer_grid1">
					<h3>Navigation</h3>
					<ul class="w3layouts_footer_nav">
						<li><a href="index.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Home</a></li>
						<li><a href="About.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>About us</a></li>
						<li><a href="donars.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Donars</a></li>
						<li><a href="gallery.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Gallery</a></li>
						<li><a href="http://www.Hopewelfaresociety.blogspot.com"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Blog</a></li>
                        <li><a href="contact.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact Us</a></li>

					</ul>
				</div>
				<div class="col-md-3 agileinfo_footer_grid">
					<h3>Blog Posts</h3>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g101.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g81.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g111.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/100.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //footer -->
		<div class="w3_agileits_footer_copy">
			<div class="container">
				<p>© 2018 Animals Ngo. All rights reserved | Design by <a href="#">Davinder & Rajinder.</a></p>
			</div>
		</div>
	</div>
	

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <!-- <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
 -->
    <div style="padding:20px;">
      <label for="username"><b>Username</b></label>
      <input class="modipt" type="text" placeholder="Enter Username" name="username" required =""><br><br>

      <label for="password"><b>Password</b></label>
      <input class="modipt" type="password" name="password" placeholder="Enter Password"  required=""><br><br>
        
      <button type="submit" name="login">Login</button>
      
    </div>

    <div  style="padding:20px;background-color:#f1f1f1">
      <button class="modbtn" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>
  </form>
</div>

 <?php
 if (isset($_POST['login'])) {
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$insert="INSERT INTO `login`(`username`, `password`) VALUES ('$username','$password')";
	mysqli_query($conn,$insert);

	 $query="select * from register where username='$username' and password = '$password'";
	$exe=mysqli_query($conn,$query);
	 $num=mysqli_num_rows($exe);

	if ($num==1) {
		$data=mysqli_fetch_array($exe);

		$_SESSION['vid']=$data['id'];
		header("location:volunteer/index.php");
	}else{
		echo "<script>alert('error')</script>";
	}
}


?>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <!-- <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
 -->
    <div style="padding:20px;">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required><br><br>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required><br><br>

      <label for="email"><b>Email</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="email" placeholder="Enter your mail" name="email" required><br><br>

      <label for="contact"><b>Contact</b></label>&nbsp&nbsp&nbsp
      <input type="number" placeholder="Enter your contact" name="contact" required><br><br>


        
      <button type="submit" name="submit">register</button>
      
    </div>

    <div  style="padding:20px;background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>
  </form>
</div>

<?php
	
if (isset($_POST['submit'])) {
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$query1="select * from login where username = '$username' ";
		 $exe1=mysqli_query($conn,$query1);
    $num1=mysqli_num_rows($exe1);
    if ($num1==0) {
		$insert="INSERT INTO `register`(`username`, `password`, `email`, `contact`) VALUES ('$username','$password','$email','$contact')";
		mysqli_query($conn,$insert);
		// header("location:index.php");
		header("location:index.php?msg=10000");
    }else{
        echo "<script>alert('username already taken!')</script>";
    }

    
 
	}
	?>
	<!-- //copyright -->
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>
</body>	
</html>



