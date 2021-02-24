<?php 

include("connection/conn.php");

?>

<?php 


$id=$_GET['id'];

$query="delete from registeration where id=$id";

$run=mysqli_query($conn,$query);


if($run){

header("location: select1.php");

}
else{

echo "delete not successfully";
}

?>