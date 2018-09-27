<?php
$name=$_POST['rusername'];
$roll=$_POST['rrollno'];
$mail=$_POST['rmailid'];
$loginas=$_POST['rloginas'];
$choice1=$_POST['1stchoice'];
$choice2=$_POST['2ndchoice'];
session_start();
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");
	echo "a";
mysql_query("insert into register values('$name','$roll','$mail','$loginas','$choice1','$choice2')");
//header('Location:index.php');
?>
