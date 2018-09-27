<?php
session_start();
$q=$_GET["q"];
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");
//lookup all hints from array if length of q>0
$name=$_SESSION['username'];
$loginas=$_SESSION['loginas'];

$query = mysql_query("select password from login where username='cyan'");
$row=mysql_fetch_assoc($query);
$password= $row['password'];
if (md5($q) !=$password)
  {
  $response="wrong password";
  }
  else
  {
  $response=NULL;
  }

//output the response
echo $response;


?>