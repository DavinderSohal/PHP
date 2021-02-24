<?php
include 'admin/db.php';
include 'header.php';
$b=mysql_query("select * from `news` where id='$_GET[id]'");
$a=mysql_fetch_array($b);
?>
<html>
<body>
<img src="admin/upload/<?php echo $a[image]; ?>" height="300px" width="50%" border= "2px solid">
<h2><?php echo $a[news]; ?></h2>
<small> <?php echo $a[date]; ?> </small><br>
<b><?php echo $a[category]; ?></b><br>
<?php echo $a[detail];?>
</div>
</body>
</html>
