<?php
include'db.php';
$date=date("Y-m-d");
$iname=$_FILES["image"]["name"];
$itmp=$_FILES["image"]["tmp_name"];
$path='upload/'.$iname;
if($iname){
move_uploaded_file($itmp,$path);
}
$news=$_POST['title'];
$category=$_POST['category'];
$detail=$_POST['detail'];
$x=mysql_query("insert into `news` 
(news,category,detail,image,date)values
('$news','$category','$detail','$iname','$date')"
);
if(x)
{
echo"working";
}
else
{
echo"not";
}
?>