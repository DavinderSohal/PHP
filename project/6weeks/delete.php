<?php 
include("connection/connect.php");
?>

<?php 

 $id=$_GET['id'];
 
 $query="delete from registeration where id=$id";
 
 $run=mysqli_query($conn,$query);
 
 if($run){
 
	header("location: select.php?success='delete success'");
 
 }
 else{
 
echo "delete not success"; 
 }


?>