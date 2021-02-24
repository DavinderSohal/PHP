<?php
include 'db.php';
$a= mysql_query("select * from `news` where `id`= '$_GET[id]'");
$b= mysql_fetch_array($a);
?>
<form action="update.php?id=<?php echo $_GET[id];?>" method="post">
NEWS<input  type="text" name="news" value="<?php echo $b['news'];?>">
CATEGORY<input  type="text" name="category" value="<?php echo $b['category'];?>">
DETAIL<input  type="text" name="detail" value="<?php echo $b['detail'];?>">
<input type="submit" name="submit" value="update">
</form>
