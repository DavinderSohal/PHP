<style>
.back
{
	height:1200px;
	width:100%;
	background-size:cover;
	background-attachment:fixed;
    background-image:url("back.jpg");
	repeat:no-repeat;
}
.s{
	height:900px;
	padding:10px;
	width:980px;
	background:white;
	margin:auto;
}
h2{color:#1B75E9;
}
.d{
	padding:20px;
	padding-top:0px;
	height:100%;
	float:right;
}
.q{
	width:740px;
}
.d img{
	height:400px;
	width:200px;
}
</style>
<div class="back"><?php
include'header.php';
?>
<div class="s">
<div class="d"><h2>Advertisement</h2><img src="ads1.jpg"></div>
<div class="q"><h2>CUSTOMER REGISTRATION FORM</h2>
<table border="1" cellpadding="10">
<tr>
<th> Name </th>
<th> Username </th>
<th> Mobile </th>
<th> Email </th>
<th> Date of Birth </th>
<th> Address </th>
<th> city </th>
<th> state </th>
<th> Image </th>
</tr>
<?php
include'db.php';
$x="select * from `register`";
$y=mysqli_query($x);
while($a=mysqli_fetch_array($y))
{
echo "<tr><td>$a[name]</td>";
echo "<td>$a[username]</td>";
echo "<td>$a[mobile]</td>";
echo "<td>$a[email]</td>";
echo "<td>$a[date_of_birth]</td>";
echo "<td>$a[address]</td>";
echo "<td>$a[city]</td>";
echo "<td>$a[state]</td>";
echo "<td>$a[image]</td>";
echo "<td><a href='dlt.php?id=$a[id]'>del</a> / <a href='edt.php?id=$a[id]'>edt</a></td></tr>";
}
?>
</table>
</div></div></div>