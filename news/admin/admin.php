<div>
<table border="1" cellpadding="10">
<tr>
<th> title </th>
<th> category </th>
<th> delete/edit</th>
</tr>
<?php
include'db.php';
$x="select * from `newssite`";
$y=mysql_query($x);
while($a=mysql_fetch_array($y))
{
echo "<tr><td>$a[title]</td>";
echo "<td>$a[category]</td>";
echo "<td><a href='dlt.php?id=$a[id]'>del</a> / <a href='edt.php?id=$a[id]'>edt</a></td></tr>";
}
?>
</table>
</div>