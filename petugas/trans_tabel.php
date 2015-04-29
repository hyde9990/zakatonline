<h2><img src="images/my-tickets64.png" width="30" height="30"> Data Transaksi
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

$tampil = mysql_query("
SELECT y.id_pembayaran, j.jenis as jenis_zakat, y.nama as pembayar, p.nama as petugas, y.jumlah_zakat, y.tanggal_bayar, y.tanggal_konfirmasi, y.status FROM pembayaran y, jenis_zakat j, zakat z, petugas p 
WHERE y.id_zakat = z.id_zakat 
AND z.id_jenis_zakat = j.id_jenis_zakat
AND y.id_petugas = p.id_petugas order by id_pembayaran asc") or die(mysql_error());
?>
    <table bgcolor="#66	`<br />
6666" id="tabel" border="0" cellpadding="5" cellspacing="1" align="center">
        <tr align="center" >
            <td bgcolor=#666666><font color=#FFFFFF><center>Id Pembayaran</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Jenis Zakat</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Pembayar</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>petugas</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Jumlah Zakat</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Tanggal Bayar</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>Tanggal Konfirmasi</center></font></td>
            <td bgcolor=#666666><font color=#FFFFFF><center>status</center></font></td>            
        </tr>

        <?php
        while ($row = mysql_fetch_array($tampil)) {
        ?>
            <tr align="center">
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
        <a href="?page=trans_tabel&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=1">awal</a>
        <a href="?page=trans_tabel&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal - 1); ?>">sebelumnya</a>
    <?
    }
    ?>
    <?php
    for ($i = $start; $i <= $end; $i++) {
        if ($i == $hal) {
            echo "&nbsp;<b>$i</b>&nbsp;";
        } else {
            echo "<a href='?page=trans_tabel&hal={$i}&kat={$kategori}&cari={$cari}'>$i</a> ";
        }
    }
    ?>
    <?php
    if ($hal < $maxHalaman) {
    ?>
        <a href="?page=trans_tabel&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal + 1); ?>">selanjutnya</a>
        <a href="?page=trans_tabel&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo $maxHalaman; ?>">akhir</a>
    <?
    }
    ?>
</div>
<br />
jumlah transaksi : <?php echo $jumlahData ?>
<div align="right"><a href="report_pembayaran.php"><img src="images/print.png" title="download" width="60" height="60"/></a></div>
</div>