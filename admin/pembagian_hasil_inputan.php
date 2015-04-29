<?php
include "konek.php";

$tampil = mysql_query("select * from pembagian");
?>
<form action="pembagian_search.php" method="post">
    <table bgcolor="#666666" width="600" height="50" border="1" cellpadding="5" cellspacing="1" align="center" bordercolor="#000000">
        <tr align="right">
            <td bgcolor="000000" colspan="8" ><font color="white" >Search	:
                </font><input type="text" name="id_penerima"><input type="submit" name="cari" value="GO" ></td>
        </tr>
        <tr align="center" >
            <td width="100">ID Petugas</td>
            <td width="100">ID Penerima</td>
            <td width="100">Jumlah Pembagian</td>
            <td width="100">Tanggal Pembagian</td>
            <td width="100">Disalurkan ke</td>
            <td colspan ="3" width="100">Tool</td>
        </tr>

        <?php
        while ($row = mysql_fetch_array($tampil)) {
        ?>
            <tr align="center" bordercolor="#000000">
                <td width="100"><? echo"$row[id_pembagian]"; ?></td>
                <td width="100"><? echo"$row[id_petugas]"; ?></td>
                <td width="100"><? echo"$row[id_penerima]"; ?></td>
                <td width="100"><? echo"$row[jumlah_pembagian]"; ?></td>
                <td width="100"><? echo"$row[tanggal_pembagian]"; ?></td>
                <td width="100"><? echo"$row[disalurkan_ke]"; ?></td>
                <td><a href="pembagian_Show.php?id=<?php echo $row[id_pembagian] ?>">Edit</a></td>
                <td colspan="2"><a href="pembagian_Delete.php?id=<?php echo $row[id_pembagian] ?>">Hapus</a></td>
            </tr>

<?php
        }
?>

    </table>
</form>