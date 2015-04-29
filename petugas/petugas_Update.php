<?php

include "config.php";
$id = $_GET['id'];
$update = sprintf("UPDATE petugas SET nama = %s,alamat = %s,tanggal_lahir = %s,jenis_kelamin = %s,username = %s,
						email = %s,password = %s WHERE ID_petugas='$id'",
                "'" . $_GET[nama] . "'",
                "'" . $_GET[alamat] . "'",
                "'" . $_GET[tanggal_lahir] . "'",
                "'" . $_GET[jenis_kelamin] . "'",
                "'" . $_GET[username] . "'",
                "'" . $_GET[email] . "'",
                "'" . $_GET[password] . "'"
);

$hasil = mysql_query($update);
if ($hasil) {
    header('location: index.php?page=petugas_detail');
} else {
    echo("proses Update Data Gagal");
}

echo "<hr>";
echo "<br>";
?>