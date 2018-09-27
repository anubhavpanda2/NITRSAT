<?php
session_start();
$notification=$_POST['notification'];
$dest=$_POST['hidden'];
//$date=date("Y/m/d");
$username=$_SESSION['username'];
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");
	mysql_query("insert into notifications values('$username','$notification',NOW())");
	if($dest == "admin")
	header('Location:user_admin.php');
else if($dest == "faculty")
header('Location:user_student.php');
else if($dest == "studentcoordinator")
header('Location:user_faculty.php');
?>