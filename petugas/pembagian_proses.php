<?php

include "config.php";

$id_pembagian = $_POST['id_pembagian'];
$id_petugas = $_POST['id_petugas'];
$id_pembayaran = $_POST['id_pembayaran'];
$pembayaran=mysql_query("select jumlah_zakat from pembayaran where id_pembayaran='$id_pembayaran'");
$dataPem = mysql_fetch_array($pembayaran);

$jumlah_pembayaran=$dataPem['jumlah_zakat'];
$jumlah_pembagian = $_POST['jumlah_pembagian'];
if($jumlah_pembagian>=$jumlah_pembayaran){
	echo "<script>alert('Jumlah Pembayaran tidak mencukupi');history.go(-1);</script>";
}else{
$tanggal_pembagian = $_POST['tanggal_pembagian'];
$id_penerima = $_POST['disalurkan_ke'];


$sql=mysql_query("select penerima from penerima where id_penerima='$id_penerima'");
$data=mysql_fetch_row($sql);
$penerima=$data[0];
$penerima = $_POST['ke_lain'];
mysql_query("update pembayaran set jumlah_zakat = jumlah_zakat - '$jumlah_pembagian' where id_pembayaran = '$id_pembayaran'") or die(mysql_error());
$pembagian = "insert into pembagian (id_pembagian,id_petugas,id_penerima,id_pembayaran,jumlah_pembagian,tanggal_pembagian,disalurkan_ke) values('$id_pembagian','$id_petugas','$id_penerima','$id_pembayaran','$jumlah_pembagian','$tanggal_pembagian','$penerima')";
$perintah = mysql_query($pembagian);
if ($perintah) {
    header('location: index.php?page=pembagian_proses_notif');
} else {
    echo "<br />Data tidak dapat masuk ke database.";
}
}
?>
