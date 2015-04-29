<h2><img src="images/wallet_64.png" align="absmiddle" width="30" height="30"> Penerima Register
<hr color="#EEEEEE" width="90%" align="left"></h2>
<?php
include "config.php";
$id_penerima_lama = mysql_fetch_array(mysql_query("SELECT max(id_penerima) FROM penerima"));
$id_penerima_baru = $id_penerima_lama[0] + 1;
?>
<html>
    <head>
        <title>Artikel</title>       
    </head>   
    <body>
    <center>
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
        <script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
        <script src="js/jquery.validationEngine.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $("form[name=penerima_insert]").validationEngine();
            });
        </script>
        sebelum anda menjadi penerima, bacalah dahulu syarat berikut. <a href="?page=syarat_menjadi_penerima">Syarat</a>
        <br/>
        <br/>
        <form method="post" action="penerima_proses.php" name="penerima_insert">
            <div align="center"><table width="347" border="0" id="table_body">                  
                    <tr>
                        <td>ID Penerima</td>
                        <td><input type="text" size="20" name="id_penerima" value="<?php echo $id_penerima_baru; ?>"readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td width="152">Penerima <font size="-1" style="font-style:italic;color:#999999;">(isikan nama lembaga anda)</font></td>
                        <td width="185"><input name="penerima" type="text" id="penerima" class="validate[required,custom[onlyLetter],length[0,100]] text-input"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input name="alamat" type="text" id="alamat" class="validate[required],validate[exemptString]"></td>
                    </tr>
                    <tr>
                        <td>No Telp</td>
                        <td><input name="no_telp" type="text" id="no_telp" class="validate[required,custom[telephone]] text-input"></td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab</td>
                        <td><input name="penanggung_jawab" type="text" id="penanggung_jawab" class="validate[required,custom[onlyLetter],length[0,100]] text-input"></td>
                    </tr><tr>
                        <td>Alamat Penanggung Jawab</td>
                        <td><input name="alamat_penanggung_jawab" type="text" id="alamat_penanggung_jawab" class="validate[required],validate[exemptString]"></td>
                    </tr>
                    <td colspan="3">
                    <br />
                        <div align="center"><textarea readonly="readonly">Dengan mencentang persetujuan ini berarti anda telah setuju dengan peraturan yang berlaku di website ini. Jika anda tidak setuju dengan peraturan tersebut, jangan gunakan website ini :</textarea> </div>
				<label>
					<span class="checkbox">Saya setuju : </span>
					<input class="validate[required] checkbox" type="checkbox"  id="agree"  name="agree"/>
				</label>
                	</td>
                    <tr>
                        <td colspan="2"><div align="center">
                                <p>
                                    <input type="submit" name="Submit" value="Register" id="button">

                                    <input type="reset" name="Reset" value="Cancel" id="button">
                                </p>
                            </div></td>
                    </tr>                    
                </table>
            </div>
        </form>
  </center>
    </body>
</html>