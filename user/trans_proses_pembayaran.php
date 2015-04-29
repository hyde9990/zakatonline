<?php
include "config.php";
$id_zakat_lama = mysql_fetch_array(mysql_query("SELECT max(id_zakat) FROM zakat"));
$id_zakat_baru = $id_zakat_lama[0] + 1;

$id_pembayaran_lama = mysql_fetch_array(mysql_query("SELECT max(id_pembayaran) FROM pembayaran"));
$id_pembayaran_baru = $id_pembayaran_lama[0] + 1;

$id_user = $_POST['id_user'];
$id_jenis_zakat = $_POST['id_jenis_zakat'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$jumlah_zakat = $_POST['jumlah_zakat'];
$nbt = $_POST['bank'];
$pv = $_POST['pembayaranvia'];
$bat = $_POST['bankasaltransfer'];
$login=$_SESSION['user'];
$id_propinsi=$login[8];
$id_kota=$login[7];

if (($nama != "") && ($alamat != "")) {
$insert = mysql_query("INSERT INTO zakat VALUES ('$id_zakat_baru','$id_jenis_zakat','$id_user','$nama','$alamat','$no_telp','$email','$id_kota','$id_propinsi','$jumlah_zakat',now(),'$nbt','$pv','$bat')") or die(mysql_error());
$ins = mysql_query("INSERT INTO pembayaran VALUES ('$id_pembayaran_baru','$id_zakat_baru','$id_user','1','$nama','$jumlah_zakat',now(),'null','belum')") or die(mysql_error());
if($insert){
     echo "<meta http-equiv='refresh' content='0,?page=trans_selesai_pembayaran' />";
}
}else{
print "<script>alert('Maaf, Data Harus Diisi Semua !');
    javascript:history.go(-1);</script>";
}
?>