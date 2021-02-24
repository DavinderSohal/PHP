
<?php include('connection/connect1.php'); ?>


<?php 


	$id=$_GET['id'];
	
	$query="delete from register where sno=$id";
	
	$run=mysqli_query($conn,$query);
	
	if($run){
		
		header("Location: selectdata.php?page=1&mesg=deletesuccess");
	
	}
	else{
	
		echo "delete not success";
	}
	


?>