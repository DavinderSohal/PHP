<style>
body,html{
margin:0%;
padding:0%;
}
.head{
	height:10000px;
	width:100%;
    background-image:url("back.jpg");
	repeat:no-repeat;
	background-attachment:fixed;
	background-size:contain;
}
.main{height:100%;
   width:1000px;
   margin:auto;
   background:#fff;
}
.a{background:navy;
padding:2px;
}
.b li a{float:left;
text-decoration:none;
}
.b li{display:inline-block;
list-style-type:none;
background:aqua;
padding-left:96px;
padding-right:100px;
}
ul{
margin:0;
padding:0;
width:100%;
}
.c{
	width:980px;
	margin:auto;
	padding-top:10px;
}
</style>
<div class="head">
<div class="main">
<div class="a"><h1>NEWSGROUP</h1></div>
<ul class="b" width="100%">
<li><a href="index.php">Home</a></li>
<li><a href="#">News</a></li>
<li><a href="#">About us</a></li>
<li><a href="#">Contact us</a></li>
</ul>
<?php
include'admin/db.php';
$x="select * from `newssite` order by id DESC";
$y=mysql_query($x);
while($a=mysql_fetch_array($y))
{
?>
<div class="c"><div><img src="admin/upload/<?php echo $a[image];?>" width="50%"></div>
<div><h2><?php echo $a[title];?></h2><br><small><?php echo $a[date];?></small></div>
<?php echo $a[category];?>
<?php echo substr($a[detail],0,100);?>
<a href="single.php?id=<?php echo $a[id];?>">Read more</a>

</div><?php } ?>
</div>
</div>