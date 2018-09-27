<?php
session_start();
$username=$_SESSION['username'];
$loginas=$_SESSION['loginas'];
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");
	if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
echo "ak";
$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}


$query = "INSERT INTO fileaccess ".
"VALUES ('$username','$fileName', '$fileSize', '$content',0)";

mysql_query($query) or die('Error, query failed'); 
//include 'library/closedb.php';

echo "<br>File $fileName uploaded<br>";
} 
header('location:user_admin.php');
?>