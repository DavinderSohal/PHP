<?php
error_reporting(0);
include("common/connect.php");
$aid=$_REQUEST['aid'];
$name=$_POST["selectcategory"];
$title=$_POST["subcategoryname"];
$descrp=$_POST["subcategorydescrp"];
if($_POST['submit']=='Update'){
echo	$update="update subcategory set
			selectcategory='$name',
			subcategoryname='$title',
			subcategorydescrp='$descrp' where id='$aid'";
			mysqli_query($con,$update) or die(mysqli_error());
			header("Location:mng_subcat.php");
           } 
?>

<html>
<head>
<title>CMS Page</title>
</head>

<?php

$select="SELECT * FROM subcategory WHERE id='$aid'";
$sql=mysqli_query($con,$select) or die(mysqli_error());
$fetch=mysqli_fetch_array($sql,MYSQLI_ASSOC)or die(mysqli_error());

         
?>

<body>
<?php include("common/header.php");
?>
<div class="Action-Window">
<h1><center>EDIT SUBCATEGORY PAGE</center></h1>
<div class="cat-box">
<form method="post">
<div><label><b>Subcategory Name</b></label></div>
<input type="text" style="height:25px ; width:100% ;  margin:left;" name="selectcategory" placeholder="Enter Page Name" value="<?php echo $fetch['selectcategory'];?>" required="required"><br><br>
<div><label><b>Subcategory Title</b></label></div>
<input type="text" style="height:25px ; width:100% ;  margin:left;" name="subcategoryname" placeholder="Enter Page Title" value="<?php echo $fetch['subcategoryname'];?>" required="required"><br><br>
<div><label><b>Subcategory Description</b></label></div>
<input type="textarea" style="height:100px ; width:100% ; margin:left;" name="subcategorydescrp" value="<?php echo $fetch['subcategorydescrp'];?>" required="required"><br><br>
</div>
<input id="cat-button1" type="submit" value="Update" name="submit">
<input id="cat-button2" type="reset" value="Back" name="button">
</form>
</div>

<?php
include("common/footer.php");
?>
</body>
</html>
