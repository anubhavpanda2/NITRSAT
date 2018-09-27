<?php
$oldpassword=md5($_POST['oldpassword']);
$newpassword=md5($_POST['newpassword']);
$confirmnewpassword=md5($_POST['confirmnewpassword']);
//$subsystem=$_POST['subsystem'];
//$loginas=$_POST['loginas'];
session_start();
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");
	$name=$_SESSION['username'];
$loginas=$_SESSION['loginas'];
$query = mysql_query("select password from login where username='$name'");
$row=mysql_fetch_assoc($query);
$password= $row['password'];

if(($oldpassword==$password)&&($newpassword==$confirmnewpassword))
{
mysql_query("update login set $password='$newpassword'where username='$name'");
header('Location:change_password_success.php');
}
else
header('Location:member_add.php');
	?>