<?php
include 'config.php';
	$tahun = $_POST[tahun];
?>	
<div align="center">Laporan pembayaran zakat per <?php echo $tahun;?></div><br>

<?php
	$sql = mysql_query("SELECT y.id_pembayaran, j.jenis as jenis_zakat, y.nama as pembayar, p.nama as petugas, z.jumlah_zakat, y.tanggal_bayar, y.tanggal_konfirmasi, y.status FROM pembayaran y, jenis_zakat j, zakat z, petugas p 
WHERE y.id_zakat = z.id_zakat 
AND z.id_jenis_zakat = j.id_jenis_zakat
AND y.id_petugas = p.id_petugas
AND y.tanggal_bayar like '%$tahun%' order by id_pembayaran asc") or die (mysql_error());

if($tahun != ""){
?>

<table bgcolor="#666666" id="tabel" border="0" cellpadding="5" cellspacing="1" align="center">
<tr align="center" >        	
            <td bgcolor=#666666><font color=#FFFFFF><center>Id Pembayaran</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Jenis Zakat</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Pembayar</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>petugas</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Jumlah Zakat</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Tanggal Bayar</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Tanggal Konfirmasi</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>status</center></font></td>              
<?php
 while ($row = mysql_fetch_array($sql)) {
        ?>
            <tr align="center" bordercolor="#000000">
               <td bgcolor='#CCCCCC'><? echo"$row[id_pembayaran]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[jenis_zakat]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[pembayar]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[petugas]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[jumlah_zakat]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[tanggal_bayar]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[tanggal_konfirmasi]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[status]" ?></td>
            </tr>
<?php
			}
?>            
</table>
<?php
}else{
echo "silahkan cari";
}
?>
<input type="button" value="cetak" onClick="window.print()">

