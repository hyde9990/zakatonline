<?php
session_start();
include "config.php";
$petugas=$_SESSION['user'];
$user_login=$petugas['nama'];
$konfirmasi = mysql_query("SELECT id_pembayaran FROM pembayaran WHERE id_petugas = '1' AND STATUS = 'proses'");
$j = mysql_num_rows($konfirmasi);
echo $petugas['nama'];
?>
<html>
<head>
<link rel="stylesheet" href="css/gaya.css" type="text/css">
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="js/notifikasi.js"></script>
</head>

<body topmargin="0" leftmargin="0">
<span id="pesan"">
Donasi (<span id="notifikasi"><?php if($j>0){
    echo "<a href=?page=zakat_lihat_pemberitahuan>".$j."</a>";
}?></span>
)</span>
<div id="info">
    <div id="loading"><br>Loading...<img src="../images/loading.gif"></div>
    <div id="konten-info">
    </div>
</div>

<div id="content">
<h1>Ini halaman Karyawan</h1>
<h2><?php echo $user_login;?></h2>
PHP adalah bahasa scripting server-side, artinya di jalankan di server,
</div>
</body>

</html></style>