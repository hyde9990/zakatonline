<?php

include "config.php";
$id = $_GET['id'];
$delete = "DELETE FROM  penerima  WHERE id_penerima='$id'";
$hasil = mysql_query($delete) or die (mysql_error());

if ($hasil) {
    echo "<center> ";
    echo ("Proses Delete data penerima  Berhasil");
    echo "</center> ";
    echo "<center> ";
    echo "<a href = '?page=penerima_show'>Show</a>";
    echo "</center> ";
} else {
    echo("proses delete Data Gagal");
}

echo "<hr>";
echo "<br>";
?>