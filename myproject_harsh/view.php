<?php
include("common/connect.php");
?>
<html>
<head>
<title>Database Table</title>
</head>
<body>
<div style="border:2px solid red"><h2><font color="green">SHOWING RECORDS</font><a href="index.php">&nbsp;&nbsp;&nbsp;Add</a></h2></div><br><br>
<table style="border:4px dashed blue" border="2">
<tr>
<th>S.NO</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>DOB</th>
<th>Phone No.</th>
<th>Gender</th>
<th>Location</th>
<th>Action</th>
</tr>
<?php
$select="select * from users";
$sql=mysqli_query($con,$select) or die("error");
$i=1;
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
	?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row['fname']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['location']; ?></td>
<td><a href="#">Edit</a>&nbsp;<a href="#">Delete</a></td>
</tr>
<?php   $i++;}?>
</table>
</body>
</html>



