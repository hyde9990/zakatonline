<?php
session_start();
include "config.php";
$userid = $_SESSION['user'];
$konfirmasi = mysql_query("SELECT * FROM pembayaran WHERE status = 'proses' AND id_petugas = 1 limit 0,3");
$j = mysql_num_rows($konfirmasi);
if($j>0){
    echo "<table border=0 width=100% style='font-size:10pt' cellpadding=5px>";
}else{
    die("<font color=red size=2>Tidak ada pesan baru yang belum dibaca</font>");
}
while($p = mysql_fetch_array($konfirmasi)){
    echo "<tr><td onmouseover=\"this.style.backgroundColor='#efefef'\"
     onmouseout=\"this.style.backgroundColor='#CCC'\">
	 <a href=?page=zakat_cek_konfirmasi&no=".$p['id_pembayaran'].">zakat dari : ".$p['nama']."</a><br>
     Waktu : ".$p['tanggal_bayar']."<br>
	 </td></tr>";
}
echo "<tr>
        <td><a href=?page=zakat_lihat_konfirmasi&style='text-align:right;'>Lihat semua konfirmasi</a></td>
    </tr>";
echo "</table>";
?>