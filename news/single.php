<style>
.head{
	background:grey;
}
.hh{height:1000px;
	width:980px;
	padding:10px;
	margin:auto;
	background:#fff;
}	
</style>
<?php
include'header.php';
?>
<?php 
include"admin/db.php";
$a=mysql_query("select * from `newssite` where id='$_GET[id]'");
$b=mysql_fetch_array($a);
?>
<div class="head"><div class="hh">
<img src="admin/upload/<?php echo $b[image];?>" width="50%">
<div><h2><?php echo $b[title];?></h2><br><small><?php echo $b[date];?></small></div>
<?php echo $b[category];?>
<?php echo $b[detail];?>
</div></div>