
<?php
session_start();
$user = $_SESSION['user'];
$id_petugas=$user['id_petugas'];
include "config.php";
?>
<html>
<head>
    <link rel="stylesheet" href="css/style1.css" type="text/css">
</head>
<body>
<h2><img src="images/bubble_confirm.png" width="40" height="40" align="absmiddle"> Konfirmasi selesai
        <hr color="#EEEEEE" width="90%" align="left"></h2>
<div id="content">
<?php
$no = $_GET['no'];

$konfirm = mysql_query("SELECT * FROM pembayaran WHERE
STATUS = 'proses' and id_pembayaran=$no") or die (mysql_error());
while($k = mysql_fetch_array($konfirm)){
    echo "zakat dari : ".$k['nama']."<br><p>";
    echo "Waktu : ".$k['tanggal_bayar']."<br><p>";
    echo "Jumlah :".$k['jumlah_zakat']."<br><p>";
}
//set sudah dibaca = Y kalau sudah dibaca
$update = mysql_query("UPDATE pembayaran SET id_petugas='$id_petugas', status='terima'
WHERE id_pembayaran='$no'") or die (mysql_error());
?>

</div>
</body>
</html>