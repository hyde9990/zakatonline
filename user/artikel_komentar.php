<center>
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
        <script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
        <script src="js/jquery.validationEngine.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $("#artikel_komentar").validationEngine();
            });
        </script>
<form action='artikel_komentar_proses.php?id_artikel=".$id_artikel."&act=submit' method='post' name='artikel_komentar' id="artikel_komentar">
<table border="0" bordercolor="#000000">
<tr>
	<td colspan="2"><img src="images/new-message256.png" width="25" height="25">
<b>Isi Komentar Anda :</b></td>
</tr>
<tr>
	<td>Nama </td>
    <td><input type="text" name="nama" id="nama" class="validate[required,custom[noSpecialCaracters],length[0,20]]"></td>
</tr>
<tr>
	<td>Email </td>
    <td><input type="email" name="email" id="email" class="validate[required,custom[email]] text-input"></td>
</tr>
<tr>
	<td>komentar </td>
    <td><textarea name="komentar" cols="40" id="komentar" rows="8" class="validate[required] text-input"></textarea></td>
</tr>
<tr>
	<td><input type=hidden name=id_artikel value="<?php print $id_artikel ;?>"></td>
</tr>
</table>
<table>
<tr>
	<td><center><input type=submit name=submit value=submit></center></td>
</tr>
</table>
</form>
  </center>
