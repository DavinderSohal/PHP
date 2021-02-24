<?php
error_reporting(0);
include("common/connect.php");
$name=$_POST["categoryname"];
$title=$_POST["categorytitle"];
$descrp=$_POST["categorydescrp"];
if($_POST['submit']=='Add'){
$insert="insert into category set
categoryname='$name',
categorytitle='$title',
categorydescrp='$descrp'";
mysqli_query($con,$insert);
header("Location:mng_cms.php");
}
?>

<html>
<head>
<title>CMS Page</title>
</head>


<body>
<?php include("common/header.php");
?>
<div class="Action-Window">
<h1><center>ADD CATEGORY PAGE</center></h1>
<div class="cat-box">
<form method="post">
<div><label><b>Category Name</b></label></div>
<input type="text" style="height:25px ; width:100% ;  margin:left;" name="categoryname" placeholder="Enter Category Name"  required="required"><br><br>
<div><label><b>Category Title</b></label></div>
<input type="text" style="height:25px ; width:100% ;  margin:left;" name="categorytitle" placeholder="Enter Category Title"  required="required"><br><br>
<div><label><b>Category Description</b></label></div>
<textarea style="height:100px ; width:100% ; margin:left;" name="categorydescrp"  required="required"></textarea><br><br>
</div>
<input id="cat-button1" type="submit" value="Add" name="submit">
<input id="cat-button2" type="reset" value="Back" name="button">
</form>
</div>
<?php
include("common/footer.php");
?>
</body>
</html>
