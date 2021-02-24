
	<?php 
   if(isset($_POST['submit'])) {



	
    $ToEmail = 'kulbir@cirrusnode.com'; 
    $EmailSubject = 'Site contact form'; 
    $mailheader = "From: ".$_POST['name']."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST['email']."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST['name'].""; 
    $MESSAGE_BODY .= "Email: ".$_POST['email'].""; 
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST['comment']).""; 
    
		$mail=mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader); 

if($mail){

	echo "mail sent";
}
else{

	echo "mail not sent";
	}
			
	}
?>
	



<form action="" method="post">

<form action="test.php" method="post">
<table width="400" border="0" cellspacing="2" cellpadding="0">
<tr>
<td width="29%" class="bodytext">Your name:</td>
<td width="71%"><input name="name" type="text" id="name" size="32"></td>
</tr>
<tr>
<td class="bodytext">Email address:</td>
<td><input name="email" type="text" id="email" size="32"></td>
</tr>
<tr>
<td class="bodytext">Comment:</td>
<td><textarea name="comment" cols="45" rows="6" id="comment" class="bodytext"></textarea></td>
</tr>
<tr>
<td></td>
<td><button type="submit" name="submit">submit</button></td>
</tr>
</table>
</form> 

</form> 