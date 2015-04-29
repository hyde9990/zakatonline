<h2><img src="images/photo.png" width="30" height="30"> Ubah data penerima
<hr color="#EEEEEE" width="90%" align="left"></h2>
<div align="center">
    <a href =?page=penerima_show><img alt="mbalek"  src="images/001_23.gif" class="hovergallery" align="left"></a>
    <form action="penerima_update.php" method='get'>
        <?php
        include "config.php";
        $id = $_GET[id];
        $edit = "Select * from penerima where id_penerima = '{$id}'";
        $hasil = mysql_query($edit);
        $data = mysql_fetch_array($hasil);
        echo"<table>";
        echo "<input type=\"hidden\" name =\"id\" value = \"{$id}\">";
        echo "<tr>";
        echo"<td>Penerima </td><td>:</td><td> <input type = text name = penerima value=\"{$data['penerima']}\"><br></td></tr>";        
        echo"<td>Alamat </td><td>:</td><td> <input type = text name = alamat value= \"{$data['alamat']}\"><br></td></tr>";
        echo"<td>No Telepon </td><td>:</td><td> <input type = text name = no_telp value={$data['no_telp']}><br></td></tr>";
        echo"<td>Penanggung Jawab </td><td>:</td><td> <input type = text name = penanggung_jawab value=\"{$data['penanggung_jawab']}\"><br></td></tr>";
        echo"<td>Alamat Penanggung Jawab </td><td>:</td><td> <input type = text name = alamat_penanggung_jawab value=\"{$data['alamat_penanggung_jawab']}\"><br></td></tr>";		
        echo "<tr colspan=3><td><input type=submit value=edit></td></tr></table>";
        echo"</table>";
        ?>
    </form>
</div>
