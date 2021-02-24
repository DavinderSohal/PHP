<?php 	

if (isset($_GET['msg'])) {
    if ($_GET['msg']==100) {
       echo "<script>alert('Thanks for subscribe!')</script>";
    }
 }


				if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];

	$query="INSERT INTO `subscribe`(`name`, `email`) VALUES ('$name','$email')";
	mysqli_query($conn,$query);
}
	 ?>

