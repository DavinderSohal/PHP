<?php 
if(isset($_POST['email'])){
	extract($_POST);
	
	$mail=mail($to,$mesg,$from);
	
	if($mail){
	
		echo "mail sent successfully";
	}
	else{
	
		echo "mail not sent";
	}

}

?>

<form action="" method="post">
	<p><input type="text" name="to" /></p>
	<p><input type="text" name="from" /></p>
	<p><textarea name="mesg"></textarea></p>
    <p><button type="submit" name="email">send email</button></p>
</form>