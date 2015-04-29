<h2><img src="images/my-tickets64.png" width="30" height="30"> Register Petugas
<hr color="#EEEEEE" width="90%" align="left"></h2>
<div align="center">
    <?php
    include "config.php";
    $id_petugas_lama = mysql_fetch_array(mysql_query("SELECT max(id_petugas) FROM petugas"));
    $id_petugas_baru = $id_petugas_lama[0] + 1;
    ?>
    <html>
        <head>
            <title>register petugas</title>
        </head>
        <body>
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
                $("form[name=petugas_register]").validationEngine();
            });
        </script>
        <form action="?page=petugas_proses" method="post" name="petugas_register">
            <table>
            <tr>
            <td>ID_Petugas<pre><pre></td>
            <td>:</td>
            <td><input type="text" size="20" id="id_petugas" name="id_petugas" value="<?php echo $id_petugas_baru; ?>" class="validate[required]" readonly="readonly"/></td>
        </tr>
        <tr>
            <td>Nama<pre><pre></td>
            <td>:</td>
            <td><input type="text" id="nama" size="20" name="nama" class="validate[required,custom[onlyLetter],length[0,100]] text-input"/></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" id="alamat" cols="15" class="validate[required],validate[exemptString]"/></textarea></td>
        </tr>
        <tr>
        	<td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" size="20" name="tanggal_lahir" id="popup_container" readonly="readonly" class="validate[required,custom[date]] text-input"/></td>
        </tr>
        <tr>
			<td>Jenis Kelamin</td>
			<td>
			<td><input name="jenis_kelamin" type="radio" value="L" id="jenis_kelamin" class="validate[required] radio" unchecked/>Laki-Laki
			<input name="jenis_kelamin" type="radio" value="P" id="jenis_kelamin" class="validate[required] radio" unchecked/>Perempuan
			</td>
			</td>
		</tr>
        <tr>
        	<td>Username</td>
            <td>:</td>
            <td><input type="text" id="username" size="20" name="username" class="validate[required]"/></td>
        </tr>
		 <tr>
        	<td>Email</td>
            <td>:</td>
            <td><input type="email" id="email" size="20" name="email" class="validate[required,custom[email]] text-input"/></td>
        </tr>
        <tr>
        	<td>Password</td>
            <td>:</td>
            <td><input type="password" id="password" size="20" name="password" class="validate[required,length[6,11]] text-input"/></td>
        </tr>
        <tr>
                        <td >Confirm Password </td>
<td>:</td>
                        <td><input name="c_password" type="password" id="c_password" class="validate[required,length[6,11]] text-input"></td>
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
		  <td colspan="3"><input type="submit" value="kirim" name="perintah"/></td>
		</tr>
	</table>			
	  </form>    
</body>
</html>
</div>