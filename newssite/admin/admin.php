<table border="1" cellpadding="10">
<tr>
<th> news</th>
<th> category </th>
<th colspan="2">Delete / Edit</a></th>
</tr>
<?php
include'db.php';
$x="select * from `News`";
$y=mysql_query($x);
while($a=mysql_fetch_array($y))
{
echo "<tr><td>$a[news]</td>";
echo "<td>$a[category]</td>";
echo "<td><a href='dlt.php?id=$a[id]'>del</a></td>";
echo "<td><a href='edt.php?id=$a[id]'>edt</a></td></tr>";
}
?>
</table>

