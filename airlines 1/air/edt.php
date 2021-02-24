<?php
include 'db.php';
$a= mysqli_query("select * from `register` where `id`= '$_GET[id]'");
$b= mysqli_fetch_array($a);
?>
<table>
<form action="update.php?id=<?php echo $_GET[id];?>" method="post" enctype="multipart/form-data">
<tr>
<td>Name</td>
<td><input  type="text" name="name" value="<?php echo $b['name'];?>"></td>
</tr>
<tr>
<td>User Name</td>
<td><input  type="text" name="username" value="<?php echo $b['username'];?>"></td>
</tr>
<tr>
<tr>
<td>Password</td>
<td><input  type="text" name="password" value="<?php echo $b['password'];?>"></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input  type="text" name="confirm password" value="<?php echo $b['confirm_password'];?>"></td>
</tr>
<tr>
<td>Mobile</td>
<td><input  type="text" name="mobile" value="<?php echo $b['mobile'];?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input  type="email" name="email" value="<?php echo $b['email'];?>"></td>
</tr>
<tr>
<td>Date of Birth</td>
<td><input  type="date" name="date_of_birth" value="<?php echo $b['date_of_birth'];?>"></td>
</tr>
<tr>
<td>Address</td>
<td><input  type="text" name="address" value="<?php echo $b['address'];?>"></td>
</tr>
<tr>
<td>city</td>
<td><input  type="text" name="city" value="<?php echo $b['city'];?>"></td>
</tr>
<tr>
<td>state</td>
<td><input  type="text" name="state" value="<?php echo $b['state'];?>"></td>
</tr>
<tr>
<td>UPLOAD IMAGE</td>
<td><input type="file" name="image" value="<?php echo $b['image'];?>"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="update"></td>
</tr>
</form>
</table>