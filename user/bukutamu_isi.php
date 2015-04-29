<center>
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
        <script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
        <script src="js/jquery.validationEngine.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $("#bukutamu_komentar").validationEngine();
            });
        </script>
<form action="?page=bukutamu_proses_isi" method='post' name='bukutamu_komentar' id="bukutamu_komentar">
<table border="0" bordercolor="#000000">
<tr>
	<td colspan="2"><img src="images/address.png" width="25" height="25">
<b>Isi Buku Tamu :</b></td>
</tr>
<tr>
	<td>Nama </td>
    <td><input type="text" name="nama" id="nama" class="validate[required,custom[noSpecialCaracters],length[0,20]]"></td>
</tr>
<tr>
	<td>Email </td>
    <td><input type="email" name="email" id="email" class="validate[required,custom[email]] text-input"> <font size="-1" style="font-style:italic;color:#666666">(tidak akan ditampilkan)*</font></td>
</tr>
<tr>
	<td>Pesan </td>
    <td><textarea name="pesan" cols="40" id="komentar" rows="8" class="validate[required] text-input"></textarea></td>
</tr>
</table>
<table>
<tr>
	<td><center><input type=submit name=submit value=submit></center></td>
</tr>
</table>
</form>
  </center>
