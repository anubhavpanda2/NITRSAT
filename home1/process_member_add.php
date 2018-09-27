<html>
<body>
<?php
$name=$_POST['name'];
$mail=$_POST['email'];
$rollno=$_POST['roll'];
$subsystem=$_POST['subsystem'];
$loginas=$_POST['loginas'];
echo $name;
session_start();
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");
 switch($loginas)
 {
 case "Student":
 mysql_query("insert into studentinfo values('$name','$rollno','$mail','$subsystem',0)");
 break;
  case "Student coordinator":
  mysql_query("insert into studentinfo values('$name','$rollno','$mail','$subsystem',1)");
  break;
   case "Faculty":
   mysql_query("insert into facultyinfo values('$name','$rollno','$mail','$subsystem',0)");
    break;
	case "Faculty coordinator":
	mysql_query("insert into facultyinfo values('$name','$rollno','$mail','$subsystem',1)");
	break;
 }
	header('Location:member_add.php');
?>
</body>
</html>
