<h2><img src="images/man128.png" width="30" height="30"> Ubah data saya
<hr color="#EEEEEE" width="90%" align="left"></h2>
<div align="center">
    <a href =?page=user_Show><img alt="mbalek"  src="images/001_23.gif" class="hovergallery" align="left"></a>
    <form action="user_Update.php" method='get'>
        <?php
        include "config.php";       
        $id = $_GET[id];
        $edit = "Select * from user where id_user = '{$id}'";
        $hasil = mysql_query($edit);
        $data = mysql_fetch_array($hasil);
        echo"<table>";
        echo "<input type=\"hidden\" name =\"id\" value = \"{$id}\">";
        echo "<tr>";
        echo"<td>Nama </td><td>:</td><td> <input type = text name = nama value=\"{$data['nama']}\"><br></td></tr>";
        echo"<td>alamat </td><td>:</td><td> <textarea name=\"alamat\" cols=\"15\"\>{$data['alamat']}</textarea><br></td></tr>";
        echo "<tr><td>tanggal_lahir</td><td> : </td><td><input type = text name = tanggal_lahir id=\"popup_container\" value={$data['tanggal_lahir']}><br></td></tr>";
if($data['jenis_kelamin']=="P"){
        echo"<td>jenis_kelamin </td><td>:</td><td><input name=\"jenis_kelamin\" type=\"radio\" value=\"L\"/>Laki-Laki
			<input name=\"jenis_kelamin\" checked type=\"radio\" value=\"P\"/>Perempuan
			</td></tr>";
        }else if($data['jenis_kelamin']=="L"){
        echo"<td>jenis_kelamin </td><td>:</td><td><input name=\"jenis_kelamin\" type=\"radio\" checked value=\"L\"/>Laki-Laki
			<input name=\"jenis_kelamin\" type=\"radio\" value=\"P\"/>Perempuan
			</td></tr>";
       }
        echo"<td>no_telepon </td><td>:</td><td> <input type = text name = no_telp value={$data['no_telp']}><br></td></tr>";
        echo"<td>email </td><td>:</td><td> <input type = text name = email value={$data['email']}><br></td></tr>";
        echo"<td>propinsi </td><td>:</td><td> ";?>
        <select title="propinsi" name="id_propinsi" id="id_prop" onChange="propinsi(id_prop.value)">
                                <option value="0" selected="selected">Pilih Propinsi</option>
                                <?php
                                $query = mysql_query("select * from propinsi");
                                while ($row = mysql_fetch_array($query)) {
                                ?><option value="<?php echo $row['id_propinsi']; ?>"><?php echo $row['nama_propinsi']; ?></option><?
                                }
                                ?>
                            </select>
        <?php echo "</td></tr>";
        echo"<td>kota </td><td>:</td><td> ";
        echo "<div id='kota-view' style=\"width:50px;\"></div>";
        echo "</td></tr>";
        echo"<td>username </td><td>:</td><td> <input type = text name = username value={$data['username']}><br></td></tr>";
        echo"<td>password </td><td>:</td><td> <input type = text name = password value={$data['password']}><br></td></tr>";
        echo "<tr colspan=3><td><input type=submit value=edit></td></tr></table>";
        echo"</table>";
        ?>
    </form>
</div>

