<?php
$add=$_POST['add'];
$name=$_POST['name'];
$roll=$_POST['roll'];
$mail=$_POST['mail'];
$loginas=$_POST['loginas'];
$subsystem=$_POST['subsystem'];
session_start();
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");
	if($add=="add")
	{
	if(Strtoupper($loginas) =="STUDENT")
	mysql_query("insert into studentinfo values('$name','$roll','$mail','$subsystem',0)");
	else
	mysql_query("insert into studentinfo values('$name','$roll','$mail','$subsystem',0)");
	}
	mysql_query("delete from register where rollno='$roll'");
	
	header('Location:registerview.php');
	?>