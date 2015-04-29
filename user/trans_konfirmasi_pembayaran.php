<?php
include 'config.php';
$id_pembayaran=$_GET['id_pembayaran'];
if($id_pembayaran!=""){
    mysql_query("update pembayaran set status='proses', tanggal_konfirmasi=now() where id_pembayaran='$id_pembayaran' ") or die(mysql_error());
}
$login = $_SESSION['user'];
$id_user = $login[0];

$sql = "select * from pembayaran where id_user='$id_user' order by id_pembayaran asc";
$res = mysql_query($sql) or die(mysql_error());
?>
<h2><img src="images/credit_cards.png" width="40" height="40" align="absmiddle"> Konfirmasi Pembayaran
        <hr color="#EEEEEE" width="90%" align="left"></h2> 
<div style="padding-bottom:10px;">        
<table bgcolor="#666666" id="tabel" border="0" cellspacing="1" align="center">
    <tr align="center" >        
        <td bgcolor="#666666"><font color="#FFFFFF"><center>nama</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>jumlah_zakat</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>tanggal_bayar</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>status</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>konfirmasi</center></font></td>
    </tr>
    <?php
    while ($row = mysql_fetch_array($res)) {
    ?>
        <tr align="center">                       
            <td bgcolor='#CCCCCC'><? echo"$row[nama]"; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[jumlah_zakat]"; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[tanggal_bayar]"; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[status]"; ?></td>
            <td bgcolor='#CCCCCC'>
            <?PHP
            if($row['status']=="belum"){?>
                <a href="?page=trans_konfirmasi_pembayaran&id_pembayaran=<?PHP echo $row['id_pembayaran']; ?>"> <input type="button" value="konfirmasikan"> </a>

                <?PHP
            }else{
                echo "<input type='button' value='sudah dikonfirmasi' disabled='disabled'>";
            }
            ?>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
</div>