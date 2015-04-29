<?php
include 'config.php';
$id_user_lama = mysql_fetch_array(mysql_query("SELECT max(id_user) FROM user"));
$id_user_baru = $id_user_lama[0] + 1;
$id_user = strip_tags($_POST['id_user_baru']);
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$kota = $_POST['id_kota'];
$propinsi = $_POST['id_propinsi'];
$username = $_POST['username'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];


if ($password != $c_password) {
    print "<script>alert('Silahkan check Password atau Confirm Password !');
            javascript:history.go(-1);</script>";
    exit;
}
if (($nama != "") && ($alamat != "")) {
    $sql = "INSERT INTO $table3 (id_user,nama,alamat,tanggal_lahir,jenis_kelamin,no_telp,email,kota,propinsi,username,password)
values ('$id_user_baru','$nama','$alamat','$tanggal_lahir','$jenis_kelamin','$no_telp','$email','$kota','$propinsi','$username','$password')";
    $query = mysql_query($sql) or die(mysql_error());
    echo "<meta http-equiv='refresh' content='0,?page=user_proses_notif' />";
} else {
    print "<script>alert('Maaf, Data Harus Diisi Semua !');
    javascript:history.go(-1);</script>";
}
?>