<?php 

include("connection/conn.php");

?>

<?php 
if(isset($_POST['reg'])){

extract($_POST);

$query="insert into registeration(name,email,contact,collegename) values('$sname','$sem','$scont','$scname')";

$run=mysqli_query($conn,$query);
if($run){

echo "success";

}
else{

echo "not success".mysqli_error($conn);
}



}

?>
<form action="" method="post" enctype="multipart/form-data">

	<p><input type="text" name="sname" /></p>
	<p><input type="email" name="sem" /></p>
	<p><input type="text" name="scont" /></p>
	<p><input type="text" name="scname" /></p>
	<p><input type="text" name="scor" /></p>
	<p><button type="submit" name="reg">register</button></p>

</form>

