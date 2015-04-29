<?php

include "config.php";
$id_petugas_lama = mysql_fetch_array(mysql_query("SELECT max(id_petugas) FROM petugas"));
$id_petugas_baru = $id_petugas_lama[0] + 1;
$id_petugas = strip_tags($_POST['id_petugas_baru']);
$nama = strip_tags($_POST['nama']);
$alamat = strip_tags($_POST['alamat']);
$tanggal_lahir = strip_tags($_POST['tanggal_lahir']);
$jenis_kelamin = strip_tags($_POST['jenis_kelamin']);
$username = strip_tags($_POST['username']);
$email = strip_tags($_POST['email']);
$password = strip_tags($_POST['password']);
$c_password = $_POST['c_password'];
//echo $nm." ".$pswd."<br />";

if ($password != $c_password) {
    print "<script>alert('Silahkan check Password atau Confirm Password !');
            javascript:history.go(-1);</script>";
    exit;
}


//echo $anggota;

if (($nama != "") && ($alamat != "")) {
$petugas = "insert into petugas (id_petugas,nama,alamat,tanggal_lahir,jenis_kelamin,username,email,password) values('$id_petugas_baru','$nama','$alamat','$tanggal_lahir','$jenis_kelamin','$username','$email','$password')";
$perintah = mysql_query($petugas) or die(mysql_error());
    echo "<meta http-equiv='refresh' content='0,?page=petugas_proses_notif' />";
} else {
    print "<script>alert('Maaf, Data Harus Diisi Semua !');
    javascript:history.go(-1);</script>";
}
?>
