<?php
$username=$_POST['username3'];
$password=md5($_POST['password3']);
$newpassword=md5($_POST['password4']);
$loginas=$_POST['loginas3'];
echo $loginas;
if($newpassword==$password)
{
session_start();
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");
	switch($loginas)
{
case "faculty":
$query = mysql_query("SELECT * FROM facultyinfo  WHERE name = '$username' and coordinator=0");
$numrows = mysql_num_rows($query);
if($numrows)
mysql_query("insert into login values('$username','$password','$loginas',0)");
break;
case "facultycoordinator":
$query = mysql_query("SELECT * FROM facultyinfo  WHERE name = '$username'and coordinator=1");
$numrows = mysql_num_rows($query);
if($numrows!=0)
mysql_query("insert into login values('$username','$password','$loginas',0)");
break;
case "student":
$query = mysql_query("SELECT * FROM studentinfo  WHERE name = '$username'and coordinator=0");
$numrows = mysql_num_rows($query);
if($numrows)
mysql_query("insert into login values('$username','$password','$loginas',0)");
break;
case "studentcoordinator":
$query = mysql_query("SELECT * FROM studentinfo  WHERE name = '$username'and coordinator=1");
$numrows = mysql_num_rows($query);
if($numrows)
mysql_query("insert into login values('$username','$password','$loginas',0)");
break;
}
}
header('Location:index.php');
	?>