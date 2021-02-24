<?php
error_reporting(0);
include("common/connect.php");
$para = addslashes('para');
$aid=$_REQUEST['aid'];
$name=$_POST["pagename"];
$title=$_POST["pagetitle"];
$descrp=$_POST["pagedescrp"];
if($_POST['submit']=='Update'){
	$update="update cms set
			pagename='$name',
			pagetitle='$title',
			pagedescrp='$descrp' where id='$aid'";
			mysqli_query($con,$update) or die(mysqli_error());
			header("Location:mng_cms.php");
           } 
?>

<html>
<head>
<title>CMS Page</title>
</head>

<?php

$select="SELECT * FROM cms WHERE id='$aid'";
$sql=mysqli_query($con,$select) or die(mysqli_error());
$fetch=mysqli_fetch_array($sql,MYSQLI_ASSOC)or die(mysqli_error());

         
?>

<body>
<?php include("common/header.php");
?>
<div class="Action-Window">
<h1><center>EDIT CMS PAGE</center></h1>
<div class="cat-box">
<form method="post">
<div><label><b>Page Name</b></label></div>
<input type="text" style="height:25px ; width:100% ;  margin:left;" name="pagename" placeholder="Enter Page Name" value="<?php echo $fetch['pagename'];?>" required="required"><br><br>
<div><label><b>Page Title</b></label></div>
<input type="text" style="height:25px ; width:100% ;  margin:left;" name="pagetitle" placeholder="Enter Page Title" value="<?php echo $fetch['pagetitle'];?>" required="required"><br><br>
<div><label><b>Page Description</b></label></div>
<input type="textarea" style="height:100px ; width:100% ; margin:left;" name="pagedescrp" value="<?php echo $fetch['pagedescrp'];?>" required="required"><br><br>
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
