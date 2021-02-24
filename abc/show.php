<table border="1" cellpadding="10">
<tr>
<th> name </th>
<th> class </th>
<th> rollno </th>
<th> address </th>
</tr>
<?php
include'db.php';
$x="select * from `detail`";
$y=mysql_query($x);
while($a=mysql_fetch_array($y))
{
echo "<tr><td>$a[name]</td>";
echo "<td>$a[class]</td>";
echo "<td>$a[rollno]</td>";
echo "<td>$a[address]</td>";
echo "<td><a href='dlt.php?id=$a[id]'>del</a></td>";
echo "<td><a href='edt.php?id=$a[id]'>edt</a></td></tr>";
}
?>
</table>
