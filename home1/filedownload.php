
		<?php
// Make sure an ID was passed
if(isset($_POST['id'])) {
// Get the ID
    $id =$_POST['id'];
 echo $id;
    // Make sure the ID is in fact a valid ID
    if(strlen($id)<= 0) {
        die('The ID is invalid!');
    }
    else {
        // Connect to the database
        $dbLink = new mysqli('127.0.0.1', 'root', '', 'nitrsat');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
 
        // Fetch the file information
        $query = "
            SELECT  `filename`, `filesize`, `file`
            FROM `fileaccess`
            WHERE `docid` = '{$id}'";
        $result = $dbLink->query($query);
 
        if($result) {
            // Make sure the result is valid
            if($result->num_rows == 1) {
            // Get the row
                $row = mysqli_fetch_assoc($result);
 
                // Print headers
                header("Content-Length: ". $row['filesize']);
                header("Content-Disposition: attachment; filename=". $row['filename']);
			//   header('Content-Transfer-Encoding: binary');
             //header('Content-Length: ' . filesize($result));
			//	header("Location: $result");
             //  @readfile($result);
	//		   echo $row['data'];
//echo "/pdf/file_DBid_" . $row['id'] . ".pdf";
                // Print data
                echo $row['file'];
            }
            else {
                echo 'Error! No image exists with that ID.';
            }
 
            // Free the mysqli resources
            @mysqli_free_result($result);
        }
        else {
            echo "Error! Query failed: <pre>{$dbLink->error}</pre>";
        }
        @mysqli_close($dbLink);
    }
}
else {
    echo 'Error! No ID was passed.';
}
?>

