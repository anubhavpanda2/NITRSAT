<html>
<body>
<?php
$username=$_POST['username'];
$password=md5($_POST['password']);
$login_as=$_POST['loginas'];
$p=$_POST['hidden1'];
echo $p;
session_start();
if (!$username) {
	//echo 'Please enter your username';
	header('Location: error1.php');
}

if (!$password) {
	//echo 'Please enter your password';
    header('Location: error1.php');
}else if ($username && $password) {
	$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");

	$query = mysql_query("SELECT * FROM  login WHERE username = '$username' and loginas='$login_as'");
	
	$numrows = mysql_num_rows($query);
	
	if ($numrows == 0) {
		//echo 'that username doesnt exist';
		header('Location: error2.php');
		//echo '<input type="button" onclick="myFunction()" value="Show alert box">';
	}
	
	if ($numrows != 0) {
		//code to log in
		while ($row = mysql_fetch_assoc($query)) {
			$db_username = $row['username'];
			$db_password = $row['password'];
			$db_loginas = $row['loginas'];
		//	if ($username == $db_username && md5($password) == $db_password) {
			//echo "log in successfull, <a href = 'student_login.php'>Members only</a> click here to enter the member area";
			//$_SESSION['user'] = $db_username;}
		}
		//check to see if they match;
		if ($username == $db_username && $password == $db_password) 
		{
			//echo "log in successfull, <a href = 'student_login.php'>Members only</a> click here to enter the member area";
			$_SESSION['username'] = $db_username;
			$_SESSION['loginas']=$db_loginas;
			//$_SESSION['login_stud']=true;
			echo $login_as;
		//	$_SESSION1['password']=$db_password;
			//echo "hello ".$db_username;
			//echo "<a href ='student_detail.php?id={$db_username}'>.</a>";
			 switch($login_as)
			 {
			 case "student":
			 $_SESSION['login_student']=true;
			 $query = mysql_query("UPDATE login set login_par = 1 where login_par=0 and  username = '$username'");
			 if($p=="index")
			 header('Location:index.php');
			 else if($p=="download")
			 header('Location:download.php');
			 else if($p=="subsystem")
			 header('Location:subsystem.php');
			 break;
			 case "admin":
			 $_SESSION['login_admin']=true;
			 $query = mysql_query("UPDATE login set login_par = 1 where login_par=0 and  username = '$username'");
			 header('Location:user_admin.php');
			 break;
			 case "student Coordinator":
			 $_SESSION['login_student_Coordinator']=true;
			 header('Location:user_student.php');
			 break;
			 case "faculty":
			 $_SESSION['login_faculty']=true;
			 header('Location:user_faculty.php');
			 break;
			 }
			 //<a>
		}
		else{
			//echo 'Incorrect password';
			//echo '<input type="button" onclick="myFunction()" value="Show alert box">';
	
			header('Location:signin.php');
		}
	}
}
   ?>
   </body>
</html>