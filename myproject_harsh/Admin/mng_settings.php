<?php include("common/header.php");
?>
<div class="Action-Window">
<h1><center>CHANGE PASSWORD</center></h1>
<div class="cat-box">
<div><label><b>Username</b></label></div>
<input type="text" style="height:25px ; width:100% ; margin:left;" name="username" placeholder="Enter User Name"><br><br>
<div><label><b>Current Password</b></label></div>
<input type="password" style="height:25px ; width:100% ; marghin:left;" name="currentpass" placeholder="Enter Current Password"><br><br>
<div><label><b>New Password</b></label></div>
<input type="password" style="height:25px ; width:100% ; margin:left;" name="newpass" placeholder="Enter New Password"><br><br>
</div>
<input id="settings-button1" type="submit" value="Change" name="button">
<input id="settings-button2" type="submit" value="Back" name="button">
</div>
<div class="footer2">
<b><p> &copy; <?php echo date('Y');?> All Rights Reserved </p></b> 
</div>
</div>
</body>
</html>