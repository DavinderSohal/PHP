<?php
$conn=mysqli_connect("localhost","root","","emoloy");
?>
<?php
if(isset($_POST['update'])){
$id=$_GET['id'];
extract($_POST);
$query="update register set name='$uname' , email='$uemail', contact='$ucont' , salary='$usalary', password='$upass' where sno=$id";
$run=mysqli_query($conn,$query);
if($run){
header("Location:selectdata.php?page=1");
}
else{
echo "update not sucessful...";
}
}
?>
<?php 
$id=$_GET['id'];
$query="select * from register where sno=$id";
$run=mysqli_query($conn,$query);
while($data=mysqli_fetch_array($run)){
extract($data);
?> 
<form action="" method="post">
<p><input type="text" name="uname" value="<?php echo $name; ?>" /></p>
<p><input type="email" name="uemail" value="<?php echo $email; ?>" /></p>
<p><input type="text" name="ucont" value="<?php echo $contact; ?>" /></p>
<p><input type="number" name="usalary" value="<?php echo $salary; ?>" /></p>
<p><input type="text" name="upass" value="<?php echo $password; ?>" /></p>
<p><button type="submit" name="update">update record</button></p>
</form>
<?php 
}
?>