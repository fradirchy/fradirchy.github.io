<?php
// isikan parameter koneksi databasenya
$dbhost = "...";
$dbuser = "...";
$dbpass = "...";
$dbname = "...";
 
mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname);
?>
