<?php
$a= $_POST['a'];
$b= $_POST['b'];
$c= $_POST['cal'];
if ($c=='add')
{
	echo $a+$b;
}
else if($c=='sub')
{
	echo $a-$b;
}
else if($c=='mul')
{
	echo $a*$b;
}
?>