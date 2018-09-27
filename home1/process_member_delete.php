<html>
<body>
<?php
$name=$_POST['name1'];
$loginas=$_POST['loginas1'];
echo $name;
session_start();
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");
 switch($loginas)
 {
 case "Student":
 mysql_query("delete from studentinfo where name='$name' and coordinator=0");
 break;
  case "Student coordinator":
  mysql_query("delete from studentinfo where name='$name' and coordinator=1");
  break;
   case "Faculty":
   mysql_query("delete from facultyinfo where name='$name' and coordinator=0");
    break;
	case "Faculty coordinator":
	mysql_query("delete from facultyinfo where name='$name' and coordinator=1");
	break;
 }
mysql_query("delete from login where username='$name'");
 header('Location:member_add.php');
?>
</body>
</html>
