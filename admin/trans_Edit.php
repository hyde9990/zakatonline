<div align="center">
    <a href =?page=pembayaran_Show><img alt="mbalek"  src="images/007.png" class="hovergallery" align="left"></a>
    <form action="pembayaran_Update.php" method='get'>
        <?php
        include "config.php";
        $id = $_GET[id];
        $edit = "Select * from pembayaran where id_pembayaran = '{$id}'";
        $hasil = mysql_query($edit);
        $data = mysql_fetch_array($hasil);
        echo "<h4>EDIT DATA PEMBAYARAN</h4>";
        echo"<table>";
        echo "<input type=\"hidden\" name =\"id\" value = \"{$id}\">";
        echo "<tr>";
        echo"<td>Nama </td><td>:</td><td> <input type = text name = nama value=\"{$data['nama']}\"><br></td></tr>";        
        echo"<td>jumlah_zakat </td><td>:</td><td> <input type = text name = jumlah_zakat value={$data['jumlah_zakat']}><br></td></tr>";
        echo"<td>tanggal_bayar </td><td>:</td><td> <input type = text name = tanggal_bayar value={$data['tanggal_bayar']}><br></td></tr>";
        echo"<td>tanggal_konfirmasi </td><td>:</td><td> <input type = text name = tanggal_konfirmasi value={$data['tanggal_konfirmasi']}><br></td></tr>";
        echo"<td>status </td><td>:</td><td> <input type = text name = status value={$data['status']}><br></td></tr>";
        echo "<tr colspan=3><td><input type=submit value=edit></td></tr></table>";
        echo"</table>";
        ?>
    </form>
</div>
