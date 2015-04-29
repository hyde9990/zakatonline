<h2><img src="images/address_64.png" width="30" height="30"> Buku Tamu
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
    <form action="?page=bukutamu_show" method="post">
        <tr bgcolor="#000000">
            <td colspan="10" align="left">
                <select name="kategori">
                    <option value="0" selected>-Pilih Kategori Pencarian-</option>
                    <option value="1">ID Buku Tamu</option>
                    <option value="2">Nama</option>                    
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
        $kondisi .= "WHERE id_buku_tamu like '%$cari%'";
    }
    if ($kategori == 2) {
        $kondisi .= "WHERE nama like '%$cari%'";
    }   

    $sql = "select * from buku_tamu " . $kondisi . " order by id_buku_tamu LIMIT $mulai, $jumlahBaris";
    $res = mysql_query($sql) or die(mysql_error());
    ?>
		<tr align="center" >
        <td bgcolor="#666666"><font color="#FFFFFF"><center>No</center></font></td>
		<td bgcolor="#666666"><font color="#FFFFFF"><center>ID Buku Tamu</center></font></td>
		<td bgcolor="#666666"><font color="#FFFFFF"><center>Nama</center></font></td>
		<td bgcolor="#666666"><font color="#FFFFFF"><center>Email</center></font></td>
		<td bgcolor="#666666"><font color="#FFFFFF"><center>Pesan</center></font></td>
        <td bgcolor="#666666"><font color="#FFFFFF"><center>Tool</center></font></td>
		</tr>
  
<?php	
		
		while($row=mysql_fetch_array($res)) {
		$mulai++
	?>
		<tr align="center">
        <td bgcolor="#666666"><?php echo $mulai; ?></td>
			<td width="100" bgcolor='#CCCCCC'><?php echo "$row[id_buku_tamu]";?></td>
			<td width="100" bgcolor='#CCCCCC'><?php echo "$row[nama]";?></td>
			<td width="100" bgcolor='#CCCCCC'><?php echo "$row[email]";?></td>
			<td width="500" bgcolor='#CCCCCC'><?php echo "$row[pesan]";?></td>
			<td bgcolor='#CCCCCC'><a href="?page=bukutamu_delete&id=<?php echo $row[id_buku_tamu] ?>" onclick="return confirm('yakin dihapus?') "><img src="images/001_29.gif" class="hovergallery" border="0"></a></td>				
			</tr>    
	<?php
    }
    ?>
</table>
<?php
    $sql = "select * from buku_tamu " . $kondisi;
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
        <a href="?page=bukutamu_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=1">awal</a>
        <a href="?page=bukutamu_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal - 1); ?>">sebelumnya</a>
    <?
    }
    ?>
    <?php
    for ($i = $start; $i <= $end; $i++) {
        if ($i == $hal) {
            echo "&nbsp;<b>$i</b>&nbsp;";
        } else {
            echo "<a href='?page=bukutamu_show&hal={$i}&kat={$kategori}&cari={$cari}'>$i</a> ";
        }
    }
    ?>
    <?php
    if ($hal < $maxHalaman) {
    ?>
        <a href="?page=bukutamu_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo ($hal + 1); ?>">selanjutnya</a>
        <a href="?page=bukutamu_show&kat=<?php echo $kategori ?>&cari=<?php echo $cari; ?>&hal=<?php echo $maxHalaman; ?>">akhir</a>
    <?
    }
    ?>
</div>
<br />
jumlah buku tamu : <?php echo $jumlahData ?>
</div>