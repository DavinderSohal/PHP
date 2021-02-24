<?php session_start(); ?>


<?php if(isset($_SESSION['email'])){ ?>
<html>
<head>
	<title>homepage</title>
</head>

<body>
<h1>Welcome to your profile....mr. <?php echo $_SESSION['email']; ?></h1>

<a href="logout1.php">logout</a>
</body>
</html>

<?php
}
else{
	header("location: login3.php");
	//echo "login again to view this page<a href='login3.php'>login again</a>";
}

?>