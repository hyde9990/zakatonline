<h2><img src="images/user_64.png" width="30" height="30"> Data Member
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
<form action="?page=user_Show" method="post">
<table bgcolor="#666666" id="tabel" border="0" cellpadding="5" cellspacing="1" align="center">
        <tr bgcolor="#000000">
            <td colspan="13" align="left">
                <select name="kategori">
                    <option value="0" selected>-Pilih Kategori Pencarian-</option>
                    <option value="1">ID Member</option>
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
        $kondisi .= "WHERE id_user like '%$cari%'";
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

    $sql = "select * from user " . $kondisi . " order by id_user LIMIT $mulai, $jumlahBaris";
    $res = mysql_query($sql) or die(mysql_error());
    ?>
        <tr align="center" >
            <td bgcolor="#666666"><font color="#FFFFFF"><center>NO</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Id Member</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Nama</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Alamat</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Tanggal Lahir</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Jenis Kelamin</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>No Telepon</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Email</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Propinsi</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Kota</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Username</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>password</center></font></td>
            <td bgcolor=#666666 width="60px"><font color=#FFFFFF><center>Tool</center></font></td>
        </tr>
        <?php
        while ($row = mysql_fetch_array($res)) {
        $mulai++               
        ?>
            <tr align="center">
                <td bgcolor="#666666"><?php echo $mulai; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[id_user]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[nama]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[alamat]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[tanggal_lahir]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[jenis_kelamin]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[no_telp]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[email]"; ?></td>
                <?php
                $propinsi = mysql_query("select * from propinsi where id_propinsi = $row[propinsi]");
                $prop = mysql_fetch_array($propinsi);
                ?>
                <td bgcolor='#CCCCCC'><? echo"$prop[nama_propinsi]" ?></td>
                <?php
                $kota = mysql_query("select * from kota where id_kota = $row[kota]");
                $kota = mysql_fetch_array($kota);
                ?>
                <td bgcolor='#CCCCCC'><? echo"$kota[nama_kota]" ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[username]"; ?></td>
                <td bgcolor='#CCCCCC'><? echo"$row[password]"; ?></td>
                <td bgcolor='#CCCCCC'><a href="?page=user_Edit&id=<?php echo $row[id_user] ?>"><img src="images/001_45.gif" class="hovergallery"></a><a href="?page=user_Delete&id=<?php echo $row[id_user] ?>" onclick="return confirm('yakin dihapus?') " ><img src="images/001_29.gif" class="hovergallery"></a></td>
            </tr>
        <?php
        };        
        ?>
</table>
<?php
    $sql = "select * from user " . $kondisi;
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
        <a href="?page=user_Show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=1">awal</a>
        <a href="?page=user_Show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal - 1); ?>">sebelumnya</a>
    <?
    }
    ?>
    <?php
    for ($i = $start; $i <= $end; $i++) {
        if ($i == $hal) {
            echo "&nbsp;<b>$i</b>&nbsp;";
        } else {
            echo "<a href='?page=user_Show&hal={$i}&kat={$kategori}&cari={$cari}'>$i</a> ";
        }
    }
    ?>
    <?php
    if ($hal < $maxHalaman) {
    ?>
        <a href="?page=user_Show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal + 1); ?>">selanjutnya</a>
        <a href="?page=user_Show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo $maxHalaman; ?>">akhir</a>
    <?
    }
    ?>
</div>
<br />
jumlah user : <?php echo $jumlahData ?>
