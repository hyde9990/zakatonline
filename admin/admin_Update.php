<?php

include "config.php";
$id = $_GET['id'];
$update = sprintf("UPDATE admin SET nama = %s,alamat = %s,tanggal_lahir = %s,username = %s,
						password = %s WHERE id_admin='$id'",
                "'" . $_GET[nama] . "'",
                "'" . $_GET[alamat] . "'",
                "'" . $_GET[tanggal_lahir] . "'",                
                "'" . $_GET[username] . "'",
                "'" . $_GET[password] . "'"
);

$hasil = mysql_query($update);
if ($hasil) {
    header('location: home.php?page=admin_detail');
} else {
    echo("proses Update Data Gagal");
}

echo "<hr>";
echo "<br>";
?>