<?php
$host = "localhost";
$uname = "root";
$pass = "";
$database = "DB Name";

$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");
if (isset($_REQUEST['query'])) {

	$query = $_REQUEST['query'];
	
	$sql = mysql_query ("SELECT name FROM facultyinfo WHERE name LIKE '{$query}%'");
	$array = array();
	
	while ($row = mysql_fetch_assoc($sql)) {
		$array[] = $row['name'];
	}
	
	echo json_encode ($array); //Return the JSON Array

}

?>
