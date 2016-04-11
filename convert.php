<?php
 
$host = 'localhost'; // MYSQL database host adress
$db = 'db_spp'; // MYSQL database name
$user = 'root'; // Mysql Datbase user
$pass = 'root'; // Mysql Datbase password
 
// Connect to the database
$link = mysql_connect($host, $user, $pass);
mysql_select_db($db);
 
require 'exportcsv.inc.php';


exportMysqlToCsv();

    echo("<script>window.location = 'http://localhost/part-1/query.php';</script>");

?>
