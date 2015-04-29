<?php

include "config.php";
$id = $_GET['id'];
$update = sprintf("UPDATE penerima SET penerima = %s,alamat = %s,no_telp = %s,penanggung_jawab = %s,alamat_penanggung_jawab = %s WHERE id_penerima='$id'",
                "'" . $_GET[penerima] . "'",
                "'" . $_GET[alamat] . "'",
                "'" . $_GET[no_telp] . "'",
                "'" . $_GET[penanggung_jawab] . "'",
                "'" . $_GET[alamat_penanggung_jawab] . "'"
);

$hasil = mysql_query($update);
if ($hasil) {
    header('location: home.php?page=penerima_show');
} else {
    echo("proses Update Data Gagal");
}
echo "<hr>";
echo "<br>";
?>