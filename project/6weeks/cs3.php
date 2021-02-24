<?php 

  include("connection/connect.php");
?>
<!DOCTYPE html>


<html>

	<head>
		<title>PHP with Database </title>
		
	</head>
	<body>
	        
			<form action="insert.php" method="post" enctype="multipart/form-data">
				<p><input type="text" name="sname" placeholder="enter name" /></p>
				<p><input type="email" name="semail"  placeholder="enter email" /></p>
				<p><input type="text" name="cont"  placeholder="enter contact"/></p>
				<p><input type="text" name="cname" placeholder="enter college name" /></p>
				<p><input type="text" name="cou"  placeholder="enter course"/></p>
				<p><input type="text" name="addr" placeholder="enter address" /></p>
				<p><input type="text" name="dur"  placeholder="enter duration"/></p>
				<p><button type="submit" name="reg">register</button> </p>
			</form>
			
			<?php ?>
	</body>
	
</html>

