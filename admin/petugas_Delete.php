<?php

include "config.php";
$id = $_GET['id'];
$delete = "DELETE FROM  petugas  WHERE id_petugas='$id'";
$hasil = mysql_query($delete);
if ($hasil) {
    echo "<center> ";
    echo ("Proses Delete Petugas  Berhasil");
    echo "</center> ";
    echo "<center> ";
    echo "<a href = '?page=petugas_Show'>Show</a>";
    echo "</center> ";
} else {
    echo("proses delete Data Gagal");
}

echo "<hr>";
echo "<br>";
?>