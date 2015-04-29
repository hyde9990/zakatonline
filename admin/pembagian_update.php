<?php

include "config.php";
$id = $_GET['id'];
$_GET['disalurkan_ke'] = $_GET['ke_lain'];
$update = sprintf("UPDATE pembagian SET id_petugas = %s,id_penerima = %s,jumlah_pembagian = %s,tanggal_pembagian = %s,disalurkan_ke = %s WHERE Id_pembagian='$id'",
                "'" . $_GET[id_petugas] . "'",
                "'" . $_GET[id_penerima] . "'",
                "'" . $_GET[jumlah_pembagian] . "'",
                "'" . $_GET[tanggal_pembagian] . "'",
                "'" . $_GET[disalurkan_ke] . "'"
);

$hasil = mysql_query($update);
if ($hasil) {
	header('location: index.php?page=pembagian_show');
} else {
    echo("proses Update Data Gagal");
}

echo "<hr>";
echo "<br>";
?>