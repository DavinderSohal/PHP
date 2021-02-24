<?php ob_start();
include'include/config.php';

if (isset($_GET['msg'])) {
    if ($_GET['msg']==1000) {
       echo "<script>alert('Thanks for subscribing to our newsletter!')</script>";
    }
 }
  ?>

	  <!-- newsletter -->
	<div class="newsletter">
	<div class="container">
	<h3 class="agileits_w3layouts_head agileinfo_head"><span>Subscribe</span> to our newsletter</h3>
	<div class="w3_agile_image">
				<img src="images/12.png" alt=" " class="img-responsive">
			</div>

			<p class="agile_para agileits_para" style="color:white">"The greatness of a nation and its moral progress can be judged by the way its animals are treated." ― Mahatma Gandhi.</p>
			<div class="w3ls_news_grids w3ls_newsletter_grids">
				<form action="" method="post">
					<input name="name" placeholder="Your Name" type="text" required="">
					<input name="email" placeholder="Your Email" type="email" required="">
					<input name="pg" id="pg" value="" type="hidden" required="">
					<input type="submit" name="subscribe" value="Subscribe">
				</form>
				<script type="text/javascript">
				var pg = window.location.href+'?msg=1000';
					$('#pg').val(pg);
				</script>
<?php 



				if (isset($_POST['subscribe'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pg=$_POST['pg'];

	$query="INSERT INTO `subscribe`(`name`, `email`) VALUES ('$name','$email')";
	mysqli_query($conn,$query);
	header("location:".$pg);
}
	 ?>

			</div>
		</div>
	</div>