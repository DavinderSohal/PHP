<style>
.top{
width:100%;
margin:auto;
padding:0px;
color:gold;
text-align:center;
background-color:black;
padding:20px 0;
}
.topmenu{
margin:0px;
padding:0px;
width:100%;
background-color:aqua;
text-align:center;
}
.topmenu li{
padding:10px 100px;
border:1px solid;
display:inline-block;
}
.topmenu li a{
text-decoration:none;
color:black;
}
</style>
<html>
<body>
<h1 class="top"> News Group </h1>
<ul class="topmenu">
<li><a href="#"> Home</a> </li>
<li> <a href="#"> News</a> </li>
<li><a href="#"> AboutUs</a> </li>
<li><a href="#"> ContactUs</a> </li>
</ul>
<?php
include'admin/db.php';
$x="select * from `news` order by id DESC";
$y=mysql_query($x);
while($a=mysql_fetch_array($y))
{
?>
<div><img src="admin/upload/<?php echo$a[image]; ?>" height="300px" width="50%" border= "2px solid">
<h2><?php echo $a[news]; ?></h2>
<small> <?php echo$a[date]; ?> </small><br>
<b><?php echo$a[category]; ?></b><br>
<?php echo substr($a[detail],0,100);?>
<a href="single.php?id=<?php echo $a[id];?>"> read more </a>
</div>
<?php } ?>
</body>
</html>