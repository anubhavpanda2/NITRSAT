<?php
$document=$_POST['documentid1'];
session_start();
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");
$query1 = mysql_query("delete from fileaccess where docid='$document'");
header('Location:user_admin.php');
?>
