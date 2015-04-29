<h2><img src="images/photo.png" width="30" height="30"> Data Penerima
<hr color="#EEEEEE" width="90%" align="left"></h2>
<div>
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
<table bgcolor="#666666" id="tabel" border="0" cellpadding="5" cellspacing="1" align="center">
    <form action="?page=penerima_show" method="post">
        <tr bgcolor="#000000">
            <td colspan="10" align="left">
                <select name="kategori">
                    <option value="0" selected>-Pilih Kategori Pencarian-</option>
                    <option value="1">ID Penerima</option>
                    <option value="2">penerima</option>
                    <option value="3">alamat</option>
                    <option value="4">penanggung jawab</option>
                    <option value="5">Alamat Penanggung Jawab</option>
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
        $kondisi .= "WHERE id_penerima like '%$cari%'";
    }
    if ($kategori == 2) {
        $kondisi .= "WHERE penerima like '%$cari%'";
    }
    if ($kategori == 3) {
        $kondisi .= "WHERE alamat like '%$cari%'";
    }
    if ($kategori == 4) {
        $kondisi .= "WHERE penanggung_jawab like '%$cari%'";
    }
	if ($kategori == 5) {
        $kondisi .= "WHERE alamat_penanggung_jawab like '%$cari%'";
    }

    $sql = "select * from penerima " . $kondisi . " order by id_penerima LIMIT $mulai, $jumlahBaris";
    $res = mysql_query($sql) or die(mysql_error());
    ?>
    <tr align="center" >
        <td bgcolor="#666666"><font color="#FFFFFF"><center>NO</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>ID Penerima</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>Penerima</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>Alamat</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>No Telepon</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>Penanggung Jawab</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>Alamat Penanggung Jawab</center></font></td>
        <td bgcolor="#666666" width="60"><font color="#FFFFFF"><center>Tool</center></font></td>
    </tr>
    <?php
    while ($row = mysql_fetch_array($res)) {
        $mulai++
    ?>

        <tr align="center">
            <td bgcolor="#666666"><?php echo $mulai; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[id_penerima]"; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[penerima]"; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[alamat]"; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[no_telp]"; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[penanggung_jawab]"; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[alamat_penanggung_jawab]"; ?></td>            
            <td bgcolor='#CCCCCC'><a href="?page=penerima_edit&id=<?php echo $row[id_penerima] ?>"><img src="images/001_45.gif" class="hovergallery" border="0"></a><a href="?page=penerima_delete&id=<?php echo $row[id_penerima] ?>" onclick="return confirm('yakin dihapus?') "><img src="images/001_29.gif" class="hovergallery" border="0"></a></td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
    $sql = "select * from penerima " . $kondisi;
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
        <a href="?page=penerima_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=1">awal</a>
        <a href="?page=penerima_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal - 1); ?>">sebelumnya</a>
    <?
    }
    ?>
    <?php
    for ($i = $start; $i <= $end; $i++) {
        if ($i == $hal) {
            echo "&nbsp;<b>$i</b>&nbsp;";
        } else {
            echo "<a href='?page=penerima_show&hal={$i}&kat={$kategori}&cari={$cari}'>$i</a> ";
        }
    }
    ?>
    <?php
    if ($hal < $maxHalaman) {
    ?>
        <a href="?page=penerima_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal + 1); ?>">selanjutnya</a>
        <a href="?page=penerima_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo $maxHalaman; ?>">akhir</a>
    <?
    }
    ?>
</div>
<br />
jumlah penerima : <?php echo $jumlahData ?>
</div>