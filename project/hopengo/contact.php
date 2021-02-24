<?php ob_start();
include'include/config.php';

if (isset($_GET['msg'])) {
    if ($_GET['msg']==100) {
       echo "<script>alert('Thanks for contacting us!')</script>";
    }
 }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Hope Animals Welfare Soceity</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->

<!-- image on top -->
	<link rel="icon" type="image/png" href="images/himage2.png"/>
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Playball&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
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
	<!-- banner -->
	<div class="banner about-banner">
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
									<li><a class="list-border" href="index.php">Home</a></li>
									<li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
										<ul class="dropdown-menu">
										<li><a class="hvr-bounce-to-bottom" href="about.php">About Hope</a></li>
											<li><a class="hvr-bounce-to-bottom" href="misson.php">Our mission</a></li>
											<li><a class="hvr-bounce-to-bottom" href="helpline.php">Our Helpline</a></li>     
											 <li><a class="hvr-bounce-to-bottom" href="testimonials.php">Testimonials</a></li>
										</ul>
									</li>									<li><a href="Donars.php">Donars</a></li>	
								    <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="gallery.php">Our Gallery</a></li>
											<li><a class="hvr-bounce-to-bottom" href="animals.php">Our Family</a></li>     
										</ul>
									</li>	
									<li><a href="news.php">News/Events</a></li>
									<li class="active"><a class="list-border1" href="contact.php">Contact</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<div class="about-heading">	
		<div class="container">
			<h2>Contact</h2>
		</div>
	</div>
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="agile-contact-form">
				<div class="col-md-6 contact-form-left">
					<div class="w3layouts-contact-form-top">
						<h3>Get in touch</h3>
						<p>Animal Welfare is not just about animals.It is about us.Our living conditions,our children,our earth.Cruelity to animals has a significant and irreversible impact on human health,economy and environment.So,Kindly contribute your valueable time and help us</p>
					</div>
					<div class="agileits-contact-address">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <span>+91-161-2460342</span></li>
							<li><i class="fa fa-phone fa-envelope" aria-hidden="true"></i> <span><a href="mailto:example@email.com">hopeindia@rediffmail.com</a></span></li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i> <span>175-A Sarabha Nagar Ludhiana,141003.Punjab(INDIA).</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3>Send us a message</h3>
					</div>
					<div class="agileinfo-contact-form-grid">
						<form action="#" method="post">
							<input type="text" name="name" placeholder="Name" required="">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="text" name="phone" placeholder="Telephone" required="">
							<textarea name="msg"  placeholder="Message" required=""></textarea>
							 <button class="btn1" name="submit">Submit</button>
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="w3agile-map">
				<h3>Find us here</h3>
				<img src="images/map1.jpg">
			 <a href="https://www.google.co.jp/maps/@30.8925182,75.8095612,15z"></a>
			</div>
		</div>
	</div>
	<!-- //contact -->
<?php include 'subscribe.php'; ?>
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
	

	<!-- //copyright -->
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
	<!-- //here ends scrolling icon -->
	<?php 
if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];
		$insert="INSERT INTO `contactus`(`name`, `email`, `phone`, `msg`) VALUES ('$name','$email','$phone','$msg')";
		mysqli_query($conn,$insert);
		
		
		
	}
	?>
</body>	
</html>
	