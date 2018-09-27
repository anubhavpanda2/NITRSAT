<?php

session_start();
$username=$_SESSION['username'];
//$loginas=$_SESSION['loginas']
//echo $username;
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");
if(isset($_SESSION['login_student']))
{
echo $username;
$query = mysql_query("UPDATE login SET login_par = 0 WHERE login_par = 1 and username = '$username'" );
unset($_SESSION['login_student']);
header('LOCATION: index.php');
}
if(isset($_SESSION['login_admin']))
{
//echo $admin;
$query = mysql_query("UPDATE login SET login_par = 0 WHERE login_par = 1 and username = '$username'" );
unset($_SESSION['login_admin']);
header('LOCATION: index.php');
}
/*if(isset($_SESSION['login_super']))
{
unset($_SESSION['login_super']);
header('LOCATION: index.php');
}
if(isset($_SESSION['login_cha']))
{
unset($_SESSION['login_cha']);
header('LOCATION: index.php');
}
if(isset($_SESSION['login_rev']))
{
unset($_SESSION['login_rev']);
header('LOCATION: index.php');
}*/
?>