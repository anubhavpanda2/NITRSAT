
<?php
session_start();
$username=$_SESSION['username'];
$loginas=$_SESSION['loginas'];
$text=$_POST['textarea'];
$docid=$_POST['documentid'];
$sub=$_POST['subject'];
$dest=$_POST['hidden1'];
$date=date("Y/m/d");
echo $date;
if(isset($_FILES['uploaded_file'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0) {
        // Connect to the database
         $dbLink = new mysqli('127.0.0.1', 'root','', 'nitrsat');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        //if(mysqli_connect_errno()) {
        //    die("MySQL connection failed: ". mysqli_connect_error());
        }
 
          // Gather all required data
        $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
       // $mime = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);
       $query = "
            SELECT SYSDATE FROM DUAL";
        // Execute the query
         $date = $dbLink->query($query);
        // Create the SQL qu
        // Create the SQL query
      /*  $query = "
            INSERT INTO `file` (
                `name`, `size`, `data`, `created`
            )
            VALUES (
                '{$name}', {$size}, '{$data}', NOW()
            )";*/
		//	$query ="insert into stud2 values($name1,'roll','branch',$mail,$prog,$topic,$name,$size,$data,$d_o_s)";
          $query = "
            INSERT INTO `fileaccess`
            VALUES ('{$username}',
                '{$name}', {$size}, '{$data}',NOW(),'{$text}',
				'{$docid}','{$sub}'
            )";
        // Execute the query
         $result = $dbLink->query($query);
 
        // Check if it was successfull
        if($result) {
            echo 'Success! Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file' ;
      //         . "<pre>{$dbLink->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);
    }
 
    // Close the mysql connection
    //$dbLink->close();
}
else {
    echo 'Error! A file was not sent!';
}
 

	if($dest == "admin")
	header('Location:user_admin.php');
else if($dest == "faculty")
header('Location:user_student.php');
else if($dest == "studentcoordinator")
header('Location:user_faculty.php');
?>