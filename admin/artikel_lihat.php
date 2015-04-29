<h2><img src="images/blog_accept.png" width="30" height="30"> Manage Artikel
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
<form action="?page=artikel_lihat" method="post">
<table bgcolor="#666666" id="tabel" border="0" cellpadding="5" cellspacing="1" align="center">
        <tr bgcolor="#000000">
            <td colspan="13" align="left">
                <select name="kategori">
                    <option value="0" selected>-Pilih Kategori Pencarian-</option>
                    <option value="1">ID artikel</option>
                    <option value="2">penulis</option>
                    <option value="3">Judul</option>
                    <option value="4">tanggal artikel</option>                    
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
        $kondisi .= "WHERE id_artikel like '%$cari%'";
    }
    if ($kategori == 2) {
        $kondisi .= "WHERE penulis like '%$cari%'";
    }
    if ($kategori == 3) {
        $kondisi .= "WHERE judul_artikel like '%$cari%'";
    }
    if ($kategori == 4) {
        $kondisi .= "WHERE tgl_artikel like '%$cari%'";
    }		

    $sql = "select * from artikel " . $kondisi . " order by id_artikel LIMIT $mulai, $jumlahBaris";
    $res = mysql_query($sql) or die(mysql_error());
		
		
    ?>
        <tr align="center" >
            <td bgcolor="#666666"><font color="#FFFFFF"><center>NO</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Id Artikel</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Penulis</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Judul Artikel</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Tanggal Artikel</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Isi</center></font></td>
            <td bgcolor=#666666 width="60px"><font color=#FFFFFF><center>Tool</center></font></td>
        </tr>
        <?php
        while ($row = mysql_fetch_array($res)) {
        $mulai++               
        ?>
            <tr align="center">
                <td bgcolor="#666666"><?php echo $mulai; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[id_artikel]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[penulis]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[judul_artikel]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[tgl_artikel]"; ?></td>
                <?php echo "<td bgcolor='#CCCCCC'>". substr($row[isi_artikel],0,120)."..,"."</td>";?>
                <td bgcolor='#CCCCCC'><a href="?page=artikel_edit&id=<?php echo $row[id_artikel] ?>"><img src="images/001_45.gif" class="hovergallery"></a><a href="?page=artikel_delete&id=<?php echo $row[id_artikel] ?>" onclick="return confirm('yakin dihapus?') " ><img src="images/001_29.gif" class="hovergallery"></a></td>
            </tr>
        <?php
        };        
        ?>
</table>
<?php
    $sql = "select * from artikel " . $kondisi;
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
        <a href="?page=artikel_lihat&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=1">awal</a>
        <a href="?page=artikel_lihat&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal - 1); ?>">sebelumnya</a>
    <?php
    }
    ?>
    <?php
    for ($i = $start; $i <= $end; $i++) {
        if ($i == $hal) {
            echo "&nbsp;<b>$i</b>&nbsp;";
        } else {
            echo "<a href='?page=artikel_lihat&hal={$i}&kat={$kategori}&cari={$cari}'>$i</a> ";
        }
    }
    ?>
    <?php
    if ($hal < $maxHalaman) {
    ?>
        <a href="?page=artikel_lihat&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal + 1); ?>">selanjutnya</a>
        <a href="?page=artikel_lihat&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo $maxHalaman; ?>">akhir</a>
    <?php
    }
    ?>
</div>
<br />
jumlah artikel : <?php echo $jumlahData ?>