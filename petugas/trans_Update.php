<?php

include "config.php";
$id = $_GET['id'];
$update = sprintf("UPDATE pembayaran SET nama = %s,jumlah_zakat = %s,
						tanggal_bayar = %s,tanggal_konfirmasi = %s,status = %s WHERE id_pembayaran='$id'",
                "'" . $_GET[nama] . "'",
                "'" . $_GET[jumlah_zakat] . "'",
                "'" . $_GET[tanggal_bayar] . "'",
                "'" . $_GET[tanggal_konfirmasi] . "'",
                "'" . $_GET[status] . "'"
);

$hasil = mysql_query($update);
if ($hasil) {
    header('location: home.php?page=trans_Show');
} else {
    echo("proses Update Data Gagal");
}
echo "<hr>";
echo "<br>";
?>