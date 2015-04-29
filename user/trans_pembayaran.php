<h2><img src="images/currency_blue_dollar.png" width="40" height="40" align="absmiddle"> Pilih ZAKAT &raquo; Hitung ZAKAT &raquo; <font color="#00CCFF">Bayar ZAKAT</font>
        <hr color="#EEEEEE" width="90%" align="left"></h2> 
<?php
include "config.php";
$login=$_SESSION['user'];
$id_user=$login[0];

$jenis = $_POST['id_jenis_zakat'];

$id_zakat_lama = mysql_fetch_array(mysql_query("SELECT max(id_zakat) FROM zakat"));
$id_zakat_baru = $id_zakat_lama[0] + 1;

$id_pembayaran_lama = mysql_fetch_array(mysql_query("SELECT max(id_pembayaran) FROM pembayaran"));
$id_pembayaran_baru = $id_pembayaran_lama[0] + 1;

$sql = mysql_query("select * from user where Id_user='$id_user'");
$data = mysql_fetch_array($sql);
?>
<html>
    <head>
        <title>Pembayaran</title>
    </head>
    <body>
        <!-- header -->
        <div style="margin-top:-30px;">
            <script language="JavaScript" src="js/validasi.js"></script>            
            <div class="isi">
                <br>
                <div id="kontena">
                    <form method="post" action="?page=trans_proses_pembayaran" name="input" onSubmit="return valid();">
                        <table align="center" cellpadding="2" cellspacing="2" width="100%">
                            <tbody>
                                <tr>
                                    <td width="20%">ID user</td>
                                    <td width="70%"><input name="id_user" value="<?php echo $id_user; ?>" size="30" class="bgform2" border="0" type="text" readonly="readonly"></td>
                                </tr>
                                <tr>
                                    <td width="20%">ID jenis_zakat</td>
                                    <td width="70%"><input name="id_jenis_zakat" value="<?php echo $jenis; ?>" size="30" class="bgform2" border="0" type="text" readonly="readonly"></td>
                                </tr>
                                <tr>
                                    <td width="20%">ID Zakat</td>
                                    <td width="70%"><input name="id_zakat" value="<?php echo $id_zakat_baru; ?>" size="30" class="bgform2" border="0" type="text" readonly="readonly"></td>
                                </tr>
                                <tr>
                                    <td width="20%">Nama</td>
                                    <td width="70%"><input name="nama" value="<?php echo $data['nama']; ?>" size="30" class="bgform2" border="0" type="text" readonly="readonly"></td>
                                </tr>
                                <tr>
                                    <td valign="top">Alamat</td>
                                    <td><textarea name="alamat" cols="45" rows="2" class="bgform2" border="0" readonly="readonly"><?php echo $data['alamat']; ?></textarea></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input name="email" value="<?php echo $data['email']; ?>" size="30" class="bgform2" border="0" type="text" readonly="readonly"> </td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td><input name="no_telp" value="<?php echo $data['no_telp']; ?>" size="30" class="bgform2" border="0" type="text"> </td>
                                </tr>

                                <tr>
                                    <td>Jumlah Donasi</td>
                                    <td>
                                    <?PHP
									if($_POST['z1']){
										$total = $_POST["z1"];
									}else if($_POST['z2']){
										$total = $_POST["z2"];
									}else{
										$total = $_POST["z3"];
									}
									?>
                                        <div>Rp. <input name="jumlah_zakat" value="<?PHP 
										echo "$total"; ?>" size="15" class="bgform2" border="0" type="text">&nbsp;,-</div>
                                        <div style="font-size: 10px;">*) tuliskan hanya nominal saja tanpa titik koma</div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>Nama Bank Tujuan</td>
                                    <td>
                                        <select name="bank" class="bgform2" border="0">
                                            <option value="">--Pilih rekening--</option>
                                            <option value="Bank Permata Syariah 377 100 1555">Bank Permata Syariah 377 100 1555</option>
                                            <option value="Bank Syariah Mandiri 125 00155 55">Bank Syariah Mandiri 125 00155 55</option>
                                            <option value="Bank Mandiri 132000 481 974 5">Bank Mandiri 132000 481 974 5</option>
                                            <option value="Bank Central Asia 094 301 6001">Bank Central Asia 094 301 6001</option>
                                            <option value="Bank Muamalat Indonesia 101 00361 15">Bank Muamalat Indonesia 101 00361 15</option>
                                            <option value="BNI Syariah 155 555 5589">BNI Syariah 155 555 5589</option>
                                            <option value="Bank Danamon Syariah 789 588 08">Bank Danamon Syariah 789 588 08</option>
                                            <option value="Bank Mega Syariah 100000 4777">Bank Mega Syariah 100000 4777</option>
                                            <option value="BTN Syariah 702 100 1555">BTN Syariah 702 100 1555</option>
                                            <option value="CIMB Niaga Syariah 5020 100 020 002">CIMB Niaga Syariah 5020 100 020 002</option>
                                            <option value="CIMB Niaga Syariah 5200 100 131 005">CIMB Niaga Syariah 5200 100 131 005</option>
                                            <option value="Bank DKI Syariah 701 700 7000">Bank DKI Syariah 701 700 7000</option>
                                            <option value="Bank Jabar Banten Syariah 0000 3721 45999">Bank Jabar Banten Syariah 0000 3721 45999</option>

                                        </select>
                                    </td>

                                </tr>

                                <tr>
                                    <td>Pembayaran Via</td>
                                    <td>
                                        <select name="pembayaranvia" class="bgform2" border="0">
                                            <option value="">--via--</option>
                                            <option value="Auto Debet">Auto Debet</option>
                                            <option value="ATM">ATM</option>
                                            <option value="Setor Tunai">Setor Tunai</option>
                                        </select>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Bank Asal Transfer</td>
                                    <td>
                                        <select name="bankasaltransfer" class="bgform2" border="0">
                                            <option value="">--Pilih bank--</option>
                                            <option value="Bank Permata Syariah">Bank Permata Syariah</option>
                                            <option value="Bank Syariah Mandiri">Bank Syariah Mandiri</option>
                                            <option value="Bank Mandiri">Bank Mandiri</option>
                                            <option value="Bank Central Asia">Bank Central Asia</option>
                                            <option value="Bank Muamalat Indonesia">Bank Muamalat Indonesia</option>
                                            <option value="BNI Syariah">BNI Syariah</option>
                                            <option value="Bank Danamon Syariah">Bank Danamon Syariah</option>
                                            <option value="Bank Mega Syariah">Bank Mega Syariah</option>
                                            <option value="BTN Syariah">BTN Syariah</option>
                                            <option value="CIMB Niaga Syariah">CIMB Niaga Syariah</option>
                                            <option value="CIMB Niaga Syariah">CIMB Niaga Syariah</option>
                                            <option value="Bank DKI Syariah">Bank DKI Syariah</option>
                                            <option value="Bank Jabar Banten Syariah">Bank Jabar Banten Syariah</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <input name="kirim" value="Kirim" type="submit" >
                                        <input name="hapus" value="Batal" class="bgform_putih" type="reset">
                                    </td>
                                </tr>
                            </tbody></table>
                    </form>
                </div>
            </div>
    </body>
</html>
