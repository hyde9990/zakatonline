<?php

include "config.php";
$id = $_GET['id'];

$update = sprintf("UPDATE user SET nama = %s,alamat = %s,tanggal_lahir = %s,jenis_kelamin = %s,no_telp = %s,email = %s,propinsi = %s,kota = %s,username = %s,password = %s WHERE id_user='$id'",
                "'" . $_GET[nama] . "'",
                "'" . $_GET[alamat] . "'",
                "'" . $_GET[tanggal_lahir] . "'",
                "'" . $_GET[jenis_kelamin] . "'",
                "'" . $_GET[no_telp] . "'",
                "'" . $_GET[email] . "'",
                "'" . $_GET[id_propinsi] . "'",
                "'" . $_GET[id_kota] . "'",
                "'" . $_GET[username] . "'",                
                "'" . $_GET[password] . "'"
);

$hasil = mysql_query($update);
if ($hasil) {
    header('location: index.php?page=user_Show');
} else {
    echo("proses Update Data Gagal");
}
echo "<hr>";
echo "<br>";
?>