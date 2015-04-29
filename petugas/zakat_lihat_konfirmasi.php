<h2><img src="images/bubble_64.png" width="40" height="40" align="absmiddle"> Lihat semua konfirmasi pembayaran
        <hr color="#EEEEEE" width="90%" align="left"></h2>
<?php
session_start();
include "config.php";
$userid = $_SESSION['user'];
$konfirmasi = mysql_query("SELECT * FROM pembayaran WHERE status = 'proses' AND id_petugas = 1");
$j = mysql_num_rows($konfirmasi);
if($j>0){
    echo "<table border=0 width=100% style='font-size:10pt' cellpadding=5px>";
}
while($p = mysql_fetch_array($konfirmasi)){
    echo "<tr><td>
	 <a href=?page=zakat_cek_konfirmasi&no=".$p['id_pembayaran'].">zakat dari : ".$p['nama']."</a><br>
     Waktu : ".$p['tanggal_bayar']."<br>
	 </td></tr>";
}
echo "</table>";
?>