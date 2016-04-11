<?php 
	error_reporting(0);
$server = 'localhost';
 $user = 'root';
 $pass = 'root';
 $db = 'db_spp';
 $conn = mysql_connect($server, $user, $pass) ;
 mysql_select_db($db);
 $stat= strval($_POST['ST']);
 $n = strval($_POST['Name']);
 $contact = $_POST['contact'];
if ($contact!='') {
	$query = "SELECT * from interview_tracker where contact='$contact'";
}
else{

  if($n==''&&$stat==''){

$query= "SELECT * from interview_tracker;";
 }
 	else if($stat==''){
  $query= "SELECT * from interview_tracker where name='$n';";
 
 }
 else if ($n=='') {
   $query= "SELECT * from interview_tracker where status='$stat'";	
 }
 else
 {
 	  $query= "SELECT * from interview_tracker where name='$n' and status='$stat'";
 }
}
 
 	$retval = mysql_query( $query) ;

if(isset($_POST['export']))
{

	$filename ="excelreport.xls";
	header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);
echo "name of the candidate \t contact info \t reffered by \t experince \t module \tForwarded to HR on  \t status \t first interview \t interviewer \t second  interview \t interviewer \tGrM \t HR \t offer Released on  \t Tentative \t Remarks \n";
 while ($row=mysql_fetch_array($retval)) {

echo "$row[0] \t   $row[1]  \t $row[2] \t $row[3] \t $row[4] \t $row[5] \t $row[6] \t $row[7] \t $row[8] \t $row[9] \t $row[10] \t $row[11] \t $row[12] \t $row[13] \t $row[14] \t $row[15] \n";


}
}

if(isset($_POST['submit'])){
	
#$q = strval($query);

 #echo "<script>alert(' $q');</script>";

$retval = mysql_query( $query) ;

echo "<html><body style='font-weight:bold;'><br><br><table border='1'><tr><td>name of the candidate</td><td>contact info</td><td>reffered by</td><td>experince</td>
 	<td>module</td><td width='80'>Forwarded to HR on </td><td>status</td><td width='80'>first interview</td><td>interviewer</td>
 	<td width='80'>second  interview</td><td>interviewer</td><td width='80'>GrM</td><td>HR</td>
 	<td width='80'>offer Released on </td><td>Tentative</td><td>Remarks</td>
 	</tr>";
 while ($row=mysql_fetch_array($retval)) {
$temp=strval($row[6]);

if (!strcmp($temp,'IN-PROCESS')) {
echo "<tr style='background:yellow;'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>
 	<td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td>
 	<td>$row[7]</td><td>$row[8]</td><td>$row[9]</td>
 	<td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td>$row[13]</td><td>$row[14]</td><td>$row[15]</td>
 	</tr>";

}
else if (!strcmp($temp,'REJECTED')){
	echo "<tr style='background:red; color:white; font-weight:bold;'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>
 	<td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td>
 	<td>$row[7]</td><td>$row[8]</td><td>$row[9]</td>
 	<td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td>$row[13]</td><td>$row[14]</td><td>$row[15]</td>
 	</tr>";

}
else{
	echo "<tr style='background:green; color:white;'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>
 	<td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td>
 	<td>$row[7]</td><td>$row[8]</td><td>$row[9]</td>
 	<td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td>$row[13]</td><td>$row[14]</td><td>$row[15]</td>
 	</tr>";

}

 
}
echo "</table>";
/*
echo"<a href='exportMysqlToCsv(interview_tracker);'>Export the Table</a>";
*/
	
unset($_POST['submit']);
}

?>