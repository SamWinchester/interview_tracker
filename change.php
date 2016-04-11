<?php

 $server = 'localhost';
 $user = 'root';
 $pass = 'root';
 $db = 'db_spp';
 
 $a=$_POST['1'];

 
 $b=$_POST['2'];
 
 $c=$_POST['3'];
 
 $d=$_POST['4'];
 $e=$_POST['5'];
 
 $f=$_POST['6'];
 $g=$_POST['7'];
 
 $h=$_POST['8'];
 
 $i=$_POST['9'];
 $j=$_POST['10'];		
 
 $k=$_POST['11'];
 $l=$_POST['12'];


 // Connect to Database
 $conn = mysql_connect($server, $user, $pass) 
 or die ("Could not connect to server ... \n" . mysql_error ());
 mysql_select_db($db) 
 or die ("Could not connect to database ... \n" . mysql_error ());

$sql = "INSERT INTO open_requirement(entry_date,project_name,segment,platform,customer_contact,proj_manager,location,experience,repeat_new,req_date_from,remarks,associ_name) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";

mysql_select_db('db_spp');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);

echo("<script>alert('response Added')</script>");

    echo("<script>window.location = 'http://localhost/part-1/index.html';</script>");

?>