<h2><img src="images/my-tickets64.png" width="30" height="30"> Data Transaksi
<hr color="#EEEEEE" width="90%" align="left"></h2>
<?php
include "config.php";


$hal = $_GET['hal'];
$jumlahBaris = 5;
if (!is_numeric($hal)) {
    $hal = 1;
}

if ($hal > 1) {
    $mulai = $jumlahBaris * ($hal - 1);
} else {
    $mulai = 0;
}
?>
<form action="?page=trans_show" method="post">
<table bgcolor="#666666" id="tabel" border="0" cellpadding="5" cellspacing="1" align="center">
        <tr bgcolor="#000000">
            <td colspan="13" align="left">
                <select name="kategori">
                    <option value="0" selected>-Pilih Kategori Pencarian-</option>
                    <option value="1">ID pembayaran</option>
                    <option value="2">Nama</option>
                    <option value="3">Tanggal Bayar</option>
                    <option value="4">Tanggal Konfirmasi</option>
                    <option value="5">status</option>                    
                </select>
                Search	:
                <input type="text" name="cari" align="left"><input type="submit" value="GO" align="left">
            </td>
        </tr>
</form>
<?php
    $kondisi = "";
    $cari = $_POST['cari'];
    $kategori = $_POST['kategori'];

    if ($kategori == 1) {
        $kondisi .= "WHERE id_pembayaran like '%$cari%'";
    }
    if ($kategori == 2) {
        $kondisi .= "WHERE nama like '%$cari%'";
    }
    if ($kategori == 3) {
        $kondisi .= "WHERE tanggal_bayar like '%$cari%'";
    }
    if ($kategori == 4) {
        $kondisi .= "WHERE tanggal_konfirmasi like '%$cari%'";
    }
	if ($kategori == 5) {
        $kondisi .= "WHERE status like '%$cari%'";
    }

    $sql = "select * from pembayaran " . $kondisi . " order by id_pembayaran LIMIT $mulai, $jumlahBaris";
    $res = mysql_query($sql) or die(mysql_error());
?>    
        <tr align="center" >
        	<td bgcolor=#666666><font color=#FFFFFF><center>No</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Id Pembayaran</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Id Zakat</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>id Member</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>id Petugas</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Nama</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Jumlah Zakat</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Tanggal Bayar</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Tanggal Konfirmasi</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>status</center></font></td>
            <td bgcolor=#666666 width="70px"><font color=#FFFFFF><center>Tool</center></font></td>
        </tr>

        <?php
        while ($row = mysql_fetch_array($res)) {
		$mulai++ 
        ?>
            <tr align="center">
            	<td bgcolor="#666666"><?php echo $mulai; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[id_pembayaran]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[id_zakat]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[id_user]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[id_petugas]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[nama]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[jumlah_zakat]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[tanggal_bayar]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[tanggal_konfirmasi]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[status]" ?></td>
                <td bgcolor='#CCCCCC'><a href="?page=trans_Delete&id=<?php echo $row[id_pembayaran] ?>" onclick="return confirm('yakin dihapus?') " ><img src="images/001_29.gif" class="hovergallery"></a></td>
            </tr>
       <?php
        };        
        ?>
</table>
<?php
    $sql = "select * from pembayaran " . $kondisi;
    $res = mysql_query($sql) or die(mysql_error());
    $jumlahData = mysql_num_rows($res);
    $maxHalaman = ceil($jumlahData / $jumlahBaris);

    if ($hal < 3) {
        $start = 1;
    } else {
        $start = $hal - 2;
    }

    if ($hal > ($maxHalaman - 3)) {
        $end = $maxHalaman;
    } else {
        $end = $start + 4;
    }
?>
    <br />
    <div align="center">
<?php
    if ($hal > 1) {
    ?>
        <a href="?page=trans_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=1">awal</a>
        <a href="?page=trans_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal - 1); ?>">sebelumnya</a>
    <?
    }
    ?>
    <?php
    for ($i = $start; $i <= $end; $i++) {
        if ($i == $hal) {
            echo "&nbsp;<b>$i</b>&nbsp;";
        } else {
            echo "<a href='?page=trans_show&hal={$i}&kat={$kategori}&cari={$cari}'>$i</a> ";
        }
    }
    ?>
    <?php
    if ($hal < $maxHalaman) {
    ?>
        <a href="?page=trans_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal + 1); ?>">selanjutnya</a>
        <a href="?page=trans_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo $maxHalaman; ?>">akhir</a>
    <?
    }
    ?>
</div>
<br />
jumlah transaksi : <?php echo $jumlahData ?>

