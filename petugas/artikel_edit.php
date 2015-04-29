<div align="center">
    <a href =?page=artikel_lihat><img alt="mbalek"  src="images/001_23.gif" class="hovergallery" align="left"></a>
    <form action="artikel_update.php" method='get'>
        <?php
        include "config.php";
        $id = $_GET[id];
        $edit = "Select * from artikel where id_artikel = '{$id}'";
        $hasil = mysql_query($edit);
        $data = mysql_fetch_array($hasil);
		$isi = str_replace("<br />","\r\n",$data['isi_artikel']);
        echo "<h4>EDIT DATA ARTIKEL</h4>";
        echo"<table>";
        echo "<input type=\"hidden\" name =\"id\" value = \"{$id}\">";
        echo "<tr>";
        echo"<td>Judul </td><td>:</td><td> <input type = text name = judul_artikel value=\"{$data['judul_artikel']}\"><br></td></tr>";        
        echo"<td>Isi Artikel </td><td>:</td><td><textarea name=isi_artikel cols=50 rows=40>{$isi}</textarea><br></td></tr>";        	
        echo "<tr colspan=3><td><input type=submit value=edit></td></tr></table>";
        echo"</table>";
        ?>
    </form>
</div>