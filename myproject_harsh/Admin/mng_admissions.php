<?php
error_reporting(0);
require_once("common/connect.php");
$aid=$_REQUEST['aid'];
$ms=$_REQUEST['ms'];
if($aid!=''){
mysqli_query($con,"DELETE FROM admissions WHERE id='$aid'") or die(mysqli_error());
$msg="Record Deleted";
header("location:mng_admissions.php?ms=d");

}
?>



<?php include("common/header.php");
?>

<html>
<head>
<title>Table</title>
<style>
#table-wrapper {
  position:relative;
}
#table-scroll {
  height:300px;
  overflow:auto;
  width:100%; 
}
</style>
</head>
<body>
<div class="Action-Window1">
<?php
 $query=mysqli_query($con,"select * from admissions") or die(mysqli_error());
$numrows=mysqli_num_rows($query);
if($numrows>0){
?>
<div><h1><center>SHOWING LIST OF ADMISSIONS</center></h1></div><br><br>
<div id="table-wrapper">
  <div id="table-scroll">

        <table class="TFtable" align="center" style="border:4px dashed LightSlateGray" border="2" width="100%">
<tbody>
<thead>
<tr>
<th><h3>S.NO</h3></th>
<th><h3>Name</h3></th>
<th><h3>Father's Name</h3></th>
<th><h3>Mother's Name</h3></th>
<th><h3>Date of Birth</h3></th>
<th><h3>Gender</h3></th>
<th><h3>Address</h3></th>
<th><h3>Code</h3></th>
<th><h3>Religion</h3></th>
<th><h3>Category</h3></th>
<th><h3>Actions</h3></th>
</tr>
</thead>
<?php
$select="select * from admissions";
$sql=mysqli_query($con,$select) or die("error");
$i=1;
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
	?>

<tr align="center" bgcolor="darkgrey">
<td><?php echo $i; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['fathersname']; ?></td>
<td><?php echo $row['mothersname']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['code']; ?></td>
<td><?php echo $row['religion']; ?></td>
<td><?php echo $row['category']; ?></td>
<td><a href="view_admissions.php?aid=<?php echo $row['id']; ?>" title="View"><center><i style="color:green;" class="fa fa-eye fa-lg"></i></a>&nbsp; &nbsp;<a href="mng_admissions.php?aid=<?php echo $row['id']; ?>" title="Delete"><i style="color:red; " class="fa fa-remove fa-lg"></i></center></a></td>
</tr>
<?php   $i++;}?>
</table>
<?php }  else{ echo "<div style='color:red; font-size:20px; text-align:center;'>No Records Found</div>";} ?>

</div>
</tbody>
</table>
</div>
</div>
</div>
<div class="footer1">
<b><p> &copy; <?php echo date('Y');?> All Rights Reserved </p></b> 
</div>
</div>
</body>
</html>


