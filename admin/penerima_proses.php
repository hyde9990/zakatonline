<?php
include 'config.php';
$id_penerima = ($_POST['id_penerima']);
$penerima = $_POST['penerima'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$penanggung_jawab = $_POST['penanggung_jawab'];
$alamat_penanggung_jawab = $_POST['alamat_penanggung_jawab'];

if (($penerima!="") && ($alamat!="") && ($no_telp!="") && ($penanggung_jawab!="") && ($alamat_penanggung_jawab!="")) {
    $sql = "INSERT INTO penerima
		values('$id_penerima','$penerima','$alamat','$no_telp','$penanggung_jawab','$alamat_penanggung_jawab')";
    $query = mysql_query($sql) or die(mysql_error());
   echo "<meta http-equiv=refresh content=0,home.php?page=penerima_proses_selesai>";
}
else{
        print "<script>alert('Maaf, Data Harus Diisi Semua !');
		javascript:history.go(-1);</script>";
	}
?>
<? mysql_close($connect); ?>