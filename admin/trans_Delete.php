<?php

include "config.php";
$id = $_GET['id'];
$delete = "DELETE FROM  pembayaran  WHERE id_pembayaran='$id'";
$del = "DELETE FROM  zakat  WHERE id_zakat='$id'";
$hasil = mysql_query($delete) or die (mysql_error());
$result = mysql_query($del) or die (mysql_error());

if ($hasil && $result) {
    echo "<center> ";
    echo ("Proses Delete Pembayaran  Berhasil");
    echo "</center> ";
    echo "<center> ";
    echo "<a href = '?page=trans_show'>Show</a>";
    echo "</center> ";
} else {
    echo("proses delete Data Gagal");
}

echo "<hr>";
echo "<br>";
?>