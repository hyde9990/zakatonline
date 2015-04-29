<?php

include "config.php";
$id = $_GET['id'];
$isi = mysql_real_escape_string(str_replace("\r\n","<br />",$_GET['isi_artikel']));
$update = "UPDATE artikel SET judul_artikel = '{$_GET['judul_artikel']}',isi_artikel = '{$isi}' WHERE id_artikel='$id'";

$hasil = mysql_query($update) or die(mysql_error());
if ($hasil) {
	header('location: index.php?page=artikel_lihat');
} else {
    echo("proses Update Data Gagal");
}

echo "<hr>";
echo "<br>";
?>