<?php
error_reporting(0);
require_once("common/connect.php");
$aid=$_REQUEST['aid'];
$ms=$_REQUEST['ms'];
if($aid!=''){
mysqli_query($con,"DELETE FROM subcategory WHERE id='$aid'") or die(mysqli_error());
$msg="Record Deleted";
header("location:mng_subcat.php?ms=d");

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

<div class="Action-Window">
<?php
$query=mysqli_query($con,"select * from subcategory") or die(mysqli_error());
$numrows=mysqli_num_rows($query);
if($numrows>0){
?>
<div><h1><center>SHOWING LIST OF SUB CATEGORIES&nbsp;<a style="color:white" href="add_subcat.php">+</a></center></h1></div><br><br>
<div id="table-wrapper">
  <div id="table-scroll">

        <table class="TFtable" align="center" style="border:4px dashed LightSlateGray" border="2" width="100%">
<tbody>
<thead>
<tr>
<th><h3>S.NO</h3></th>
<th><h3>Sub Category Name</h3></th>
<th><h3>Sub Category Title</h3></th>
<th><h3>Sub Category Description</h3></th>
<th><h3>Actions</h3></th>
</tr>
</thead>
<?php
$select="select * from subcategory";
$sql=mysqli_query($con,$select) or die("error");
$i=1;
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
	?>

<tr align="center" bgcolor="darkgrey">
<td><?php echo $i; ?></td>
<td><?php echo $row['selectcategory']; ?></td>
<td><?php echo $row['subcategoryname']; ?></td>
<td><?php echo $row['subcategorydescrp']; ?></td>
<td><a href="edit_subcat.php?aid=<?php echo $row['id']; ?>" title="Edit"><center><i style="color:green;" class="fa fa-pencil fa-lg"></i></a>&nbsp; &nbsp;<a href="mng_subcat.php?aid=<?php echo $row['id']; ?>" title="Delete"><i style="color:red; " class="fa fa-remove fa-lg"></i></center></a></td>
</tr>

<?php   $i++;}//while loop condition ends  here ?>
</table>
<?php } //numrows condition ends  here
?>
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

