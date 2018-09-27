<?php
session_start();
$q=$_GET["q"];
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");
//lookup all hints from array if length of q>0
$query = mysql_query("select name from facultyinfo where name like'$q%'");
$j=0;
$a=array();
while($row=mysql_fetch_assoc($query))
	{
	$a[$j]= $row['name'];
	//echo $a;
	//echo $array2[$i];
	//echo $i;
	$j +=1;
}	
if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
      if ($hint=="")
        {
        $hint="<select input class=\"input-xlarge\" onclick=\"myFunction1(this.value)\"><option>".$a[$i]."</option>";
        }
      else
        {
        $hint=$hint."<option>".$a[$i]."</option>";
        }
      }
    }
  }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
  {
  $response="no suggestion";
  }
else
  {
  $response=$hint."</select>";
  }

//output the response
echo $response;
?>