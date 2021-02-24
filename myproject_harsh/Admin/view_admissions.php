<?php
error_reporting(0);
include("common/connect.php");
$aid=$_REQUEST['aid'];
$name=$_POST["name"];
$fname=$_POST["fathersname"];
$mname=$_POST["mothersname"];
$date=$_POST["dob"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$code=$_POST["code"];
$religion=$_POST["religion"];
$category=$_POST["category"];
if($_POST['submit']=='Add'){
$insert="insert into admissions set
name='$name',
fathersname='$fname',
mothersname='$mname',
date='$dob',
gender='$gender',
address='$address',
code='$code',
religion='$religion',
category='$category'";
mysqli_query($con,$insert);
header("Location:mng_admissions.php");
}
?>

<html>
<head>
<title>CMS Page</title>
</head>
<?php

$select="SELECT * FROM admissions WHERE id='$aid'";
$sql=mysqli_query($con,$select) or die(mysqli_error());
$fetch=mysqli_fetch_array($sql,MYSQLI_ASSOC)or die(mysqli_error());

         
?>
<body>
<?php include("common/header.php");
?>
<div class="Action-Window">
<div class="box-1">
<form method="post">
<div style="margin-left:13px;"><font color="#A50133" size="3"><b>PERSONAL DETAILS</b></font></div>
<input type="text" style="height:30px; width:90%; margin-top:8px; margin-left:14px;" placeholder="Name" name="name" value="<?php echo $fetch['name'];?>" required="required" disabled>&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:8px; margin-left:14px;" placeholder="Father's Name" name="fathersname" value="<?php echo $fetch['fathersname'];?>" required="required" disabled>&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:8px; margin-left:14px;" placeholder="Mother's Name" name="mothersname" value="<?php echo $fetch['mothersname'];?>" required="required" disabled>&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:8px; margin-left:14px;" placeholder="Date of birth" name="dob" id="datepicker" value="<?php echo $fetch['dob'];?>" required="required" disabled>&nbsp;
<label><div style="margin-left:14px; margin-top:8px;">Gender*</label></div><br>
<input type="text" style="height:30px; width:90%; margin-top:-6px; margin-left:14px;" name="gender" value="<?php echo $fetch['gender'];?>" required="required" disabled>&nbsp;
<input type="text" style="height:70px; width:90%; margin-top:8px; margin-left:14px;" placeholder="Permanent Address" name="address" value="<?php echo $fetch['address'];?>" required="required" disabled>&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:8px; margin-left:14px;" placeholder="Pin code" name="code" value="<?php echo $fetch['code'];?>" required="required" disabled>&nbsp;
<div style="margin-left:15px; margin-top:4px;"><label>Religion<label><br></div>
<input type="text" style="height:30px; width:90%; margin-top:8px; margin-left:14px;" name="religion" value="<?php echo $fetch['religion'];?>" required="required" disabled>&nbsp;
<div style="margin-left:15px; margin-top:4px;"><label>Category<label><br></div>
<input type="text" style="height:30px; width:90%; margin-top:8px; margin-left:14px;" name="category" value="<?php echo $fetch['category'];?>" required="required" disabled>&nbsp;
<div style="margin-right:10px; margin-top:13px;"><hr width="95%"></div>
</div>
<div class="box-2">
<div class="about-heading1"><font color="#A50133" size="3px"><b>ACADEMIC INFORMATION</b></font></div>
<div style="margin-left:10px; margin-top:3px; font-size:16px;">SSC Details</div>
<input type="text" style="height:30px; width:90%; margin-top:10px; margin-left:11px;" placeholder="SSC Roll Number" name="sscroll" value="<?php echo $fetch['sscroll'];?>" required="required" disabled>&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:10px; margin-left:11px;" placeholder="School or Institute Name" name="schoolname1" value="<?php echo $fetch['schoolname1'];?>" required="required" disabled>&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:10px; margin-left:11px;" placeholder="SSC Passing Year" name="sscyear" value="<?php echo $fetch['sscyear'];?>" required="required" disabled>&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:10px; margin-left:11px;" placeholder="Board" name="board1" value="<?php echo $fetch['board1'];?>" required="required" disabled>&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:10px; margin-left:11px;" placeholder="Percentage or Grade" name="grade1" value="<?php echo $fetch['grade1'];?>" required="required" disabled>&nbsp;
<div style="margin-left:-5px; margin-top:3px;"><hr width="90%"></div>
<div style="margin-left:10px; margin-top:3px; font-size:16px;">HSC Details</div>
<input type="text" style="height:30px; width:90%; margin-top:10px; margin-left:11px;" placeholder="HSC Roll Number" name="hscroll" value="<?php echo $fetch['hscroll'];?>" required="required" disabled>&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:10px; margin-left:11px;" placeholder="School or Institute Name" name="schoolname2" value="<?php echo $fetch['schoolname2'];?>" required="required" disabled>&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:10px; margin-left:11px;" placeholder="HSC Passing Year" name="hscyear" value="<?php echo $fetch['hscyear'];?>" required="required" disabled>&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:10px; margin-left:11px;" placeholder="Board" name="board2" value="<?php echo $fetch['board2'];?>" required="required" disabled>&nbsp;
<input type="text" style="height:30px; width:90%; margin-top:10px; margin-left:11px;" placeholder="Percentage or Grade" name="grade2" value="<?php echo $fetch['grade2'];?>" required="required" disabled>&nbsp;
<div style="margin-left:-10px; margin-top:10px;"><hr width="90%"></div>
</div>
<div class="box-3">
<div class="about-heading1"><font color="#A50133" size="3px"><b>SELECT DEGREE PROGRAM</b></font></div>
<input type="text" style="height:30px; width:93%; margin-top:9px; margin-left:11px;" name="program" value="<?php echo $fetch['program'];?>" required="required" disabled>&nbsp;
<input type="text" style="height:30px; width:93%; margin-top:9px; margin-left:11px;" placeholder="Non-refundable Application Fee : 45 USD" disabled>&nbsp;
<input type="text" style="height:30px; width:93%; margin-top:9px; margin-left:11px;" placeholder="SSC Marks" name="sscmarks" value="<?php echo $fetch['sscmarks'];?>" required="required" disabled>&nbsp;
<input type="text" style="height:30px; width:93%; margin-top:9px; margin-left:11px;" placeholder="HSC Marks" name="hscmarks" value="<?php echo $fetch['hscmarks'];?>" required="required" disabled>&nbsp;
<div style="margin-left:11px; margin-top:8px; font-size:16px;">Others Details</div>
<input type="text" style="height:30px; width:93%; margin-top:9px; margin-left:11px;" placeholder="Detail 1" name="detail1" value="<?php echo $fetch['detail1'];?>" required="required" disabled>
<input type="text" style="height:30px; width:93%; margin-top:9px; margin-left:11px;" placeholder="Detail 2" name="detail2" value="<?php echo $fetch['detail2'];?>" required="required" disabled>
<input type="text" style="height:30px; width:93%; margin-top:9px; margin-left:11px;" placeholder="Detail 3" name="detail3" value="<?php echo $fetch['detail3'];?>" required="required" disabled>
<input type="text" style="height:30px; width:93%; margin-top:9px; margin-left:11px;" placeholder="Detail 4" name="detail4" value="<?php echo $fetch['detail4'];?>" required="required" disabled>
<input type="text" style="height:30px; width:93%; margin-top:9px; margin-left:11px;" placeholder="Detail 5" name="detail5" value="<?php echo $fetch['detail5'];?>" required="required" disabled>
<input type="text" style="height:30px; width:93%; margin-top:9px; margin-left:11px;" placeholder="Detail 6" name="detail6" value="<?php echo $fetch['detail6'];?>" required="required" disabled>
<input type="text" style="height:30px; width:93%; margin-top:9px; margin-left:11px;" placeholder="Detail 7" name="detail7" value="<?php echo $fetch['detail7'];?>" required="required" disabled>
<div style="margin-left:-5px; margin-top:10px;"><hr width="93%"></div>
</form>
</div>
</div>
<div class="footer3">
<b><p> &copy; <?php echo date('Y');?> All Rights Reserved </p></b> 
</div>
</div>
</body>
</html>