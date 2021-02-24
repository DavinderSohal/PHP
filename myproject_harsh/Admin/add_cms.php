<?php
error_reporting(0);
include("common/connect.php");
$name=$_POST["pagename"];
$title=$_POST["pagetitle"];
$descrp=addslashes($_POST["pagedescrp"]);
if($_POST['submit']=='Add'){
$insert="insert into cms set
pagename='$name',
pagetitle='$title',
pagedescrp='$descrp'";
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
<h1><center>ADD CMS PAGE</center></h1>
<div class="cat-box">
<form method="post">
<div><label><b>Page Name</b></label></div>
<input type="text" style="height:25px ; width:100% ;  margin:left;" name="pagename" placeholder="Enter Page Name"  required="required"><br><br>
<div><label><b>Page Title</b></label></div>
<input type="text" style="height:25px ; width:100% ;  margin:left;" name="pagetitle" placeholder="Enter Page Title"  required="required"><br><br>
<div><label><b>Page Description</b></label></div>
<input type="textarea" style="height:100px ; width:100% ; margin:left;" name="pagedescrp"  required="required"><br><br>
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
