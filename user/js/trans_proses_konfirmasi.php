<?php
include "koneksi.php";
$id_zakat_lama = mysql_fetch_array(mysql_query("SELECT max(id_zakat) FROM zakat"));
$id_zakat_baru = $id_zakat_lama[0] + 1;
$id_zakat = $_POST["id_zakat_baru"];
$id_zakat = $_POST['id_zakat'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$jumlah_zakat = $_POST['jumlah_zakat'];
$nbt = $_POST['bank'];
$pv = $_POST['pembayaranvia'];
$bat = $_POST['bankasaltransfer'];

$insert = mysql_query("INSERT INTO `zakat` (`id_zakat`, `id_jenis_zakat`, `id_user`, `id_petugas`, `nama`, `alamat`, `no_telp`, `email`, `jumlah_zakat`, `nama bank tujuan`, `pembayaran via`, `bank asal transfer`) VALUES ('$id_zakat_baru','null','null','$nama','$alamat','$no_telp','$email','$jumlah_zakat','$nbt','$pv','$bat')");

$update=mysql_query("update pembayaran set status='proses' where id_pembayaran=''");

mysql_query($insert);
?>
terimakasih telah mengisi form pembayaran, setelah ini segera konfirmasikan pembayaran zakat anda melalui form konfirmasi pembayaran zakat.<br />
<a href=""> ke home</a>  <br />
<a href="trans_konfirmasi_pembayaran.php" >konfirmasikan pembayaran</a>