<?php 
	if(isset($_POST['submit'])){
	
		extract($_POST);
		
		
		$mail=mail($to,$mesg,$from);
		
		if($mail){
		
			echo "mail sent success";
		
		}
		else{
		
			echo "mail not sent";
		}
		
	}

?>
<form action="" method="POST">

	<p><input type="text" name="to" placeholder="enter recipient" /></p>
	<p><input type="text" name="from" placeholder="enter sender id" /></p>
	<p><textarea name="mesg"></textarea></p>
	<p><button type="submit" name="submit">send email</button></p>

</form>