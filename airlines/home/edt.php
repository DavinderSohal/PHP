<?php
include 'db.php';
$a = "select * from `home` where `id`= '$_GET[id]'";
mysqli_query($con,$a);
$b= mysqli_fetch_array($a);
?>
<table>
<form action="update.php?id=<?php echo $_GET[id];?>" method="post">
<tr>
<td>TITLE</td>
<td><input  type="text" name="title" value="<?php echo $b['title'];?>"></td>
</tr>
<tr>
<td>DETAIL</td>
<td><input  type="text" name="detail" value="<?php echo $b['detail'];?>"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="update"></td>
</form>
</table>