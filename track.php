
<?php 
error_reporting(0);
$server = 'localhost';
 $user = 'root';
 $pass = 'root';
 $db = 'db_spp';
 
 $a=$_POST['1'];

 $ac = $_POST['contact'];
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
 $m= $_POST['13'];
 $n = $_POST['1i'];
 $o = $_POST['2i'];
 #echo "<script>alert(' the values are : $ac and $a and $b');</script>";
 $conn = mysql_connect($server, $user, $pass) ;
 mysql_select_db($db);

	$query = "INSERT INTO `interview_tracker`(`Name`, `contact`, `reffered_by`, `exp`, `module`, `forwarded_to_hr_on`, `status`, `first`,`f_interview`, `second`,`s_interview`, `GRM`, `HR`, `offer_released`, `tentative`, `remarks`) VALUES ('$a','$ac','$b','$c','$d','$e','$f','$g','$n','$h','$o','$i','$j','$k','$l','$m');";
	  $retval = mysql_query($query , $conn) ; 
	
  if(! $retval ) {
      die('Could not create database: ' . mysql_error());
   }
 echo("<script>alert('Response Recorded')</script>");

    echo("<script>window.location = 'http://localhost/part-1/interview_tracker.html';</script>");


 ?>


 ?>