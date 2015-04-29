<?php
$dbUser = "root";
$dbPass = "";
$dbName = "ta44";
$dbHost = "localhost";
$table = "admin";
$table2 = "petugas";
$table3 = "user";
mysql_connect($dbHost, $dbUser, $dbPass) or die("Gagal conek");
mysql_select_db($dbName) or die("Database tidak ada");
?>
