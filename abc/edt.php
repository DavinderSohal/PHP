<?php
include 'db.php';
$a= mysql_query("select * from `detail` where `id`= '$_GET[id]'");
$b= mysql_fetch_array($a);
?>
<form action="update.php?id=<?php echo $_GET[id];?>" method="post">
NAME<input  type="text" name="name" value="<?php echo $b['name'];?>">
ROLL NO<input  type="text" name="rollno" value="<?php echo $b['rollno'];?>">
CLASS<input  type="text" name="class" value="<?php echo $b['class'];?>">
ADDRESS<input  type="text" name="address" value="<?php echo $b['address'];?>">
<input type="submit" name="submit" value="update">
</form>
