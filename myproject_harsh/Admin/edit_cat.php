<?php
error_reporting(0);
include("common/connect.php");
$aid=$_REQUEST['aid'];
$name=$_POST["categoryname"];
$title=$_POST["categorytitle"];
$descrp=$_POST["categorydescrp"];
if($_POST['submit']=='Update'){
echo	$update="update category set
			categoryname='$name',
			categorytitle='$title',
			categorydescrp='$descrp' where id='$aid'";
			mysqli_query($con,$update) or die(mysqli_error());
			header("Location:mng_cat.php");
           } 
?>

<html>
<head>
<title>CMS Page</title>
</head>

<?php

$select="SELECT * FROM category WHERE id='$aid'";
$sql=mysqli_query($con,$select) or die(mysqli_error());
$fetch=mysqli_fetch_array($sql,MYSQLI_ASSOC)or die(mysqli_error());

         
?>

<body>
<?php include("common/header.php");
?>
<div class="Action-Window">
<h1><center>EDIT CATEGORY PAGE</center></h1>
<div class="cat-box">
<form method="post">
<div><label><b>Category Name</b></label></div>
<input type="text" style="height:25px ; width:100% ;  margin:left;" name="categoryname" placeholder="Enter Page Name" value="<?php echo $fetch['categoryname'];?>" required="required"><br><br>
<div><label><b>Category Title</b></label></div>
<input type="text" style="height:25px ; width:100% ;  margin:left;" name="categorytitle" placeholder="Enter Page Title" value="<?php echo $fetch['categorytitle'];?>" required="required"><br><br>
<div><label><b>Category Description</b></label></div>
<input type="textarea" style="height:100px ; width:100% ; margin:left;" name="categorydescrp" value="<?php echo $fetch['categorydescrp'];?>" required="required"><br><br>
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
