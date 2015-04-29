<h2><img src="images/personal-information64.png" width="30" height="30"> Register Member
<hr color="#EEEEEE" width="90%" align="left"></h2>
<?php
include "config.php";
$id_user_lama = mysql_fetch_array(mysql_query("SELECT max(id_user) FROM user"));
$id_user_baru = $id_user_lama[0] + 1;
?>
    <script type="text/javascript"  language="JavaScript" src="js/ajax.js"></script>
    <link rel="stylesheet" type="text/css" href="js/epoch_styles.css" />
    <script type="text/javascript" src="js/epoch_classes.js"></script>
    <script type="text/javascript">

        var dp_cal;
        window.onload = function () {
            dp_cal  = new Epoch('epoch_popup','popup',document.getElementById('popup_container'));
        };
    </script>
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
        <script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
        <script src="js/jquery.validationEngine.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $("form[name=user_register]").validationEngine();
            });
        </script>
        <form name="user_register" method="post" action="?page=user_proses">        
        <br />
            <div align="center">
            <table>
                    <tr>
                        <td>ID Member</td>
                        <td>:</td>
                        <td><input type="text" size="20" name="id_user" id="id_user" value="<?php echo $id_user_baru; ?>"  readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td width="152">Nama</td>
                        <td>:</td>
                        <td width="185"><input name="nama" id="nama" type="text" class="validate[required,custom[onlyLetter],length[0,100]] text-input"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input name="alamat" type="text" id="alamat" class="validate[required],validate[exemptString]"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input name="tanggal_lahir" type="text" id="popup_container"  class="validate[required,custom[date]] text-input" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input name="jenis_kelamin" type="radio" id="jenis_kelamin" class="validate[required] radio" value="L" unchecked/>Laki-Laki
                            <input name="jenis_kelamin" type="radio" id="jenis_kelamin" class="validate[required] radio" value="P" unchecked/>Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td>:</td>
                        <td><input name="no_telp" type="text" id="no_telp"  class="validate[required,custom[telephone]] text-input"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input name="email" type="text" id="email" class="validate[required,custom[email]] text-input"></td>
                    </tr>
                    <tr>
                        <td>Propinsi</td>
                        <td>:</td>
                        <td>
                            <select title="propinsi" name="id_propinsi" id="id_prop" class="validate[required]" onChange="propinsi(id_prop.value)">
                                <option value="0" selected="selected">Pilih Propinsi</option>
                                <?php
                                $query = mysql_query("select * from propinsi");
                                while ($row = mysql_fetch_array($query)) {
                                ?><option value="<?php echo $row['id_propinsi']; ?>"><?php echo $row['nama_propinsi']; ?></option><?
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Kota</td>
                        <td>:</td>
                        <td><div id="kota-view" style="width:50px;"></div> </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input name="username" type="text" id="username" class="validate[required]"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input name="password" type="password" id="password" class="validate[required,length[6,11]] text-input"></td>
                    </tr>
                    <tr>
                        <td >Ulangi Password </td>
                        <td>:</td>
                        <td><input name="c_password" type="password" id="c_password" class="validate[required,length[6,11]] text-input"></td>
                    </tr>
                    <tr>
                    <td colspan="3">
                    <br />
                        <div align="center"><textarea readonly="readonly">Dengan mencentang persetujuan ini berarti anda telah setuju dengan peraturan yang berlaku di website ini. Jika anda tidak setuju dengan peraturan tersebut, jangan gunakan website ini :</textarea> </div>
				<label>
					<span class="checkbox">Saya setuju : </span>
					<input class="validate[required] checkbox" type="checkbox"  id="agree"  name="agree"/>
				</label>
                	</td>
                    </tr>
                    <tr>
                        <td colspan="3"><div align="center">
                                <p>
                                    <input type="submit" name="Submit" value="Register" id="button">

                                    <input type="reset" name="Reset" value="Cancel" id="button">
                                </p>
                            </div></td>
                    </tr>
                    
                </table>               
        </form>   
                    </div>