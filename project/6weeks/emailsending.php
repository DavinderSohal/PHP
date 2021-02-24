<?php 

	if(isset($_POST['email'])){
	
		extract($_POST);
		
		$mail=mail('$to','$mesg','$from');
	
		if($mail){
		
			echo "email send successfully";
		}
		else{
		
			echo "email not sent ";
		}
	
	}

?>

<form action="" method="post">
	<p><input type="text" name="to" /></p>
	<p><input type="text" name="from" value="sunielsethy@gmail.com" /></p>
	<p><textarea name="mesg"></textarea></p>
	
	<button type="submit" name="email">send</button>
</form>