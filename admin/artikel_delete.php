<?php

include "config.php";
$id = $_GET['id'];
$delete = "DELETE FROM  artikel  WHERE id_artikel='$id'";
$hasil = mysql_query($delete) or die (mysql_error());

if ($hasil) {
    echo "<center> ";
    echo ("Proses Delete Data Artikel  Berhasil");
    echo "</center> ";
    echo "<center> ";
    echo "<a href = '?page=artikel_lihat'>Show</a>";
    echo "</center> ";
} else {
    echo("proses delete Data Gagal");
}

echo "<hr>";
echo "<br>";
?>