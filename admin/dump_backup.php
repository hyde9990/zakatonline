<h2><img src="images/database_active.png" width="40" height="40" align="absmiddle"> Backup Data
        <hr color="#EEEEEE" width="90%" align="left"></h2>
<?php
// membaca file koneksi.php
include "config.php";
 
echo "<h3>Nama Database: ".$dbName."</h3>";
echo "<h3>Daftar Tabel</h3>";
 
// query untuk menampilkan semua tabel dalam database
$query = "SHOW TABLES";
$hasil = mysql_query($query);
 
// menampilkan semua tabel dalam form
echo "<form method='post' action='dump_proses_backup.php'>";
echo "<table>";
while ($data = mysql_fetch_row($hasil))
{
echo "<tr><td><input type='checkbox' name='tabel[]' value='".$data[0]."'></td><td>".$data[0]."</td></tr>";
}
echo "</table><br>";
echo "<input type='submit' name='submit' value='Backup Data'>";
echo "</form>";
 
?>