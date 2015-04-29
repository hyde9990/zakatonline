<?php
include 'config.php';
	$tahun = $_POST[tahun];
?>	
<div align="center">Laporan pembagian zakat per <?php echo $tahun;?></div><br>

<?php
	$sql = mysql_query("
SELECT b.id_pembagian, p.nama as petugas, b.jumlah_pembagian, b.tanggal_pembagian, b.disalurkan_ke 
FROM pembagian b, petugas p WHERE b.id_petugas = p.id_petugas
AND b.tanggal_pembagian like '%$tahun%'") or die (mysql_error());

if($tahun != ""){
?>

<table bgcolor="#666666" id="tabel" border="0" cellpadding="5" cellspacing="1" align="center">
<tr align="center" >        	
            <td bgcolor=#666666><font color=#FFFFFF><center>Id Pembagian
            </center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Petugas</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Jumlah Pembagian</center></font></td>
    <td bgcolor=#666666><font color=#FFFFFF><center>Tanggal Pembagian</center></font></td>
    <td bgcolor=#666666><font color=#FFFFFF><center>Disalurkan ke</center></font></td>       
<?php
 while ($row = mysql_fetch_array($sql)) {
        ?>
  <tr align="center" bordercolor="#000000">
               <td bgcolor='#CCCCCC'><? echo"$row[id_pembagian]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[petugas]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[jumlah_pembagian]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[tanggal_pembagian]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[disalurkan_ke]"; ?></td>
            </tr>
<?php
			}
?>            
</table>
<?php
$saldo = mysql_query("select sum(jumlah_zakat) from pembayaran");
$data = mysql_fetch_array($saldo); ?>

Saldo : Rp. <?php echo $data[0];?>
<br />
<br />
<?php
}else{
echo "silahkan cari";
}
?>
<input type="button" value="cetak" onClick="window.print()">

