<h2><img src="images/blog.png" width="30" height="30">Data Pembagian
<hr color="#EEEEEE" width="90%" align="left"></h2>
<?php
include "config.php";


$saldo = mysql_query("select sum(jumlah_zakat) from pembayaran");
$data = mysql_fetch_array($saldo);

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
Saldo : Rp .<input type="text" value="<?php echo $data[0];?>" readonly="readonly"/>
<br />	
<br />
<br />
<form action="?page=pembagian_show" method="post">
<table bgcolor="#666666" id="tabel" border="0" cellpadding="5" cellspacing="1" align="center">
        <tr bgcolor="#000000">
            <td colspan="13" align="left">
                <select name="kategori">
                    <option value="0" selected>-Pilih Kategori Pencarian-</option>
                    <option value="1">ID Pembagian</option>
                    <option value="2">Tanggal Pembagian</option>
                    <option value="3">Disalurkan Ke</option>
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
        $kondisi .= "WHERE id_pembagian like '%$cari%'";
    }
    if ($kategori == 2) {
        $kondisi .= "WHERE tanggal_pembagian like '%$cari%'";
    }
    if ($kategori == 3) {
        $kondisi .= "WHERE disalurkan_ke like '%$cari%'";
    }  

    $sql = "select * from pembagian " . $kondisi . " order by id_pembagian LIMIT $mulai, $jumlahBaris";
    $res = mysql_query($sql) or die(mysql_error());
    ?>
        <tr align="center" >
        	<td bgcolor="#666666"><font color="#FFFFFF"><center>No</center></font></td>
            <td bgcolor="#666666"><font color="#FFFFFF"><center>ID pembagian</center></font></td>
            <td bgcolor="#666666"><font color="#FFFFFF"><center>ID petugas</center></font></td>                        
            <td bgcolor="#666666"><font color="#FFFFFF"><center>Jumlah Pembagian</center></font></td>
            <td bgcolor="#666666"><font color="#FFFFFF"><center>Tanggal Pembagian</center></font></td>
            <td bgcolor="#666666"><font color="#FFFFFF"><center>Disalurkan Ke</center></font></td>
            <td bgcolor="#666666"><font color="#FFFFFF"><center>Tool</center></font></td>
        </tr>

        <?php
        while ($row = mysql_fetch_array($res)) {
		 $mulai++  
        ?>
            <tr align="center">
            	<td bgcolor="#666666"><?php echo $mulai; ?></td>
                <td width="100" bgcolor='#CCCCCC'><?php echo"$row[id_pembagian]"; ?></td>
                <td width="100" bgcolor='#CCCCCC'><?php echo"$row[id_petugas]"; ?></td>                
                <td width="100" bgcolor='#CCCCCC'><?php echo"$row[jumlah_pembagian]"; ?></td>
                <td width="100" bgcolor='#CCCCCC'><?php echo"$row[tanggal_pembagian]"; ?></td>
                <td width="100" bgcolor='#CCCCCC'><?php echo"$row[disalurkan_ke]"; ?></td>
                <td bgcolor='#CCCCCC'><a href="?page=pembagian_edit&id=<?php echo $row[id_pembagian] ?>"><img src="images/001_45.gif" class="hovergallery" border="0"></a><a href="?page=pembagian_delete&id=<?php echo $row[id_pembagian] ?>" onclick="return confirm('yakin dihapus?') "><img src="images/001_29.gif" class="hovergallery" border="0"></a></td>
        </tr>
            </tr>
 <?php
        };        
        ?>
</table>
<?php
    $sql = "select * from pembagian " . $kondisi;
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
        <a href="?page=pembagian_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=1">awal</a>
        <a href="?page=pembagian_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal - 1); ?>">sebelumnya</a>
    <?
    }
    ?>
    <?php
    for ($i = $start; $i <= $end; $i++) {
        if ($i == $hal) {
            echo "&nbsp;<b>$i</b>&nbsp;";
        } else {
            echo "<a href='?page=pembagian_show&hal={$i}&kat={$kategori}&cari={$cari}'>$i</a> ";
        }
    }
    ?>
    <?php
    if ($hal < $maxHalaman) {
    ?>
        <a href="?page=pembagian_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal + 1); ?>">selanjutnya</a>
        <a href="?page=pembagian_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo $maxHalaman; ?>">akhir</a>
    <?
    }
    ?>
</div>
<br />
Jumlah Data Pembagian : <?php echo $jumlahData ?>

