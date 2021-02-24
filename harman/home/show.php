<div>
<table border="1" cellpadding="10">
<tr>
<th> title </th>
<th> image </th>
<th> delete/edit</th>
</tr>
<?php
include'db.php';
$a="select * from `home`";
$b=mysqli_query($x,$a);
while($a=mysqli_fetch_array($b))
{
echo "<tr><td>$a[title]</td>";
echo "<td>$a[image]</td>";
echo "<td><a href='dlt.php?id=$a[id]'>del</a> / <a href='edt.php?id=$a[id]'>edt</a></td></tr>";
}
?>
</table>
</div>