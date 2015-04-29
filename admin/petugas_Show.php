<h2><img src="images/user_64.png" width="30" height="30"> Data Petugas
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
<div>
<table bgcolor="#666666" id="tabel" border="0" cellpadding="5" cellspacing="1" align="center">
    <form action="home.php?page=petugas_Show" method="post">
        <tr bgcolor="#000000">
            <td colspan="10" align="left">
                <select name="kategori">
                    <option value="0" selected>-Pilih Kategori Pencarian-</option>
                    <option value="1">ID Petugas</option>
                    <option value="2">nama</option>
                    <option value="3">alamat</option>
                    <option value="4">tanggal lahir</option>
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
        $kondisi .= "WHERE id_petugas like '%$cari%'";
    }
    if ($kategori == 2) {
        $kondisi .= "WHERE nama like '%$cari%'";
    }
    if ($kategori == 3) {
        $kondisi .= "WHERE alamat like '%$cari%'";
    }
    if ($kategori == 4) {
        $kondisi .= "WHERE tanggal_lahir like '%$cari%'";
    }

    $sql = "select * from petugas " . $kondisi . " order by id_petugas LIMIT $mulai, $jumlahBaris";
    $res = mysql_query($sql) or die(mysql_error());
    ?>
    <tr align="center" >
        <td bgcolor="#666666"><font color="#FFFFFF"><center>NO</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>ID Petugas</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>Nama</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>Alamat</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>Tanggal Lahir</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>Jenis Kelamin</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>Username</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>Email</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>Password</center></font></td>
        <td bgcolor="#666666" width="60"><font color="#FFFFFF"><center>Tool</center></font></td>
    </tr>
    <?php
    while ($row = mysql_fetch_array($res)) {
        $mulai++
    ?>

        <tr align="center">
            <td><?php echo $mulai; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[id_petugas]"; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[nama]"; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[alamat]"; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[tanggal_lahir]"; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[jenis_kelamin]"; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[username]"; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[email]"; ?></td>
            <td bgcolor='#CCCCCC'><? echo"$row[password]"; ?></td>
            <td bgcolor='#CCCCCC'><a href="?page=petugas_Edit&id=<?php echo $row[id_petugas] ?>"><img src="images/001_45.gif" class="hovergallery" border="0"></a><a href="?page=petugas_Delete&id=<?php echo $row[id_petugas] ?>" onclick="return confirm('yakin dihapus?') "><img src="images/001_29.gif" class="hovergallery" border="0"></a></td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
    $sql = "select * from petugas " . $kondisi;
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
        <a href="?page=petugas_Show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=1">awal</a>
        <a href="?page=petugas_Show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal - 1); ?>">sebelumnya</a>
    <?
    }
    ?>
    <?php
    for ($i = $start; $i <= $end; $i++) {
        if ($i == $hal) {
            echo "&nbsp;<b>$i</b>&nbsp;";
        } else {
            echo "<a href='?page=petugas_Show&hal={$i}&kat={$kategori}&cari={$cari}'>$i</a> ";
        }
    }
    ?>
    <?php
    if ($hal < $maxHalaman) {
    ?>
        <a href="?page=petugas_Show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal + 1); ?>">selanjutnya</a>
        <a href="?page=petugas_Show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo $maxHalaman; ?>">akhir</a>
    <?
    }
    ?>
</div>
<br />
jumlah petugas : <?php echo $jumlahData ?>
</div>