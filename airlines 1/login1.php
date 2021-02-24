<?php
include"air/db.php";
session_start();
if($_SESSION['login']=="true")
{ header("location:profile.php");
}
if(isset($_POST[sub]))
{$username=$_POST[username];
$password=$_POST[password];
$a=mysql_query("select  * from `register` where `username`='$username'") or die(mysql_error());
$b=mysql_fetch_array($a);
$p2=$b[password];
if($password==$p2){
	$_SESSION['login']="true";
    $_SESSION[uid]=$b[id];
	header("location:profile.php");
}
else
{
	echo "wrong";
}}
?>