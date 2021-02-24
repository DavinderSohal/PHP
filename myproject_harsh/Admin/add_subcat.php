<?php
error_reporting(0);
include("common/connect.php");
$name=$_POST["selectcategory"];
$title=$_POST["subcategoryname"];
$descrp=$_POST["subcategorydescrp"];
if($_POST['submit']=='Add'){
$insert="insert into subcategory set
selectcategory='$name',
subcategoryname='$title',
subcategorydescrp='$descrp'";
mysqli_query($con,$insert);
header("Location:mng_subcat.php");
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
<h1><center>ADD SUBCATEGORY PAGE</center></h1>
<div class="cat-box">
<form method="post">
<div><label><b>Category Name</b></label></div>
<select name="selectcategory">
<option value="">Select Category</option>
<?php
$cat=1;
$selcat="select * from category";
$sqlcat=mysqli_query($con,$selcat);
while($rowcat=mysql_fetch_array($sqlcat,MYSQLI_ASSOC)){
print_r($rowcat);
?>
<option value="<?php echo $rowcat['categoryname']; ?>">><?php echo $rowcat['categoryname']; ?></option>

<?php $cat++;}?>

</select>
<br><br>
<div><label><b>Subcategory Title</b></label></div>
<input type="text" style="height:25px ; width:100% ;  margin:left;" name="subcategoryname" placeholder="Enter Page Title"  required="required"><br><br>
<div><label><b>Subcategory Description</b></label></div>
<input type="textarea" style="height:100px ; width:100% ; margin:left;" name="subcategorydescrp"  required="required"><br><br>
</div>
<input id="cat-button1" type="submit" value="Add" name="submit">
<input id="cat-button2" type="reset" value="Back" name="button">
</form>
</div>
</div>
<?php
include("common/footer.php");
?>

