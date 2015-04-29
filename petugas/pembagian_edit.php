<h2><img src="images/blog_add.png" width="30" height="30"> Ubah data pembagian
<hr color="#EEEEEE" width="90%" align="left"></h2>
<?php
	include "config.php";
	$id=$_GET[id];
	$edit = "Select * from pembagian where id_pembagian = '{$id}'";
	$hasil= mysql_query($edit);
	$data = mysql_fetch_array($hasil);
?>
<html>
    <head>
        <title>Pembagian</title>
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
                $("form[name=pembagian_edit]").validationEngine();
            });
        </script>
        <script language="JavaScript">
function ganti()
{
	if (window.document.forms['pembagian_edit'].disalurkan_ke.value=="Lain")
	{
		window.document.forms['pembagian_edit'].ke_lain.disabled=false;
		window.document.forms['pembagian_edit'].ke_lain.focus();
	}
	else
		window.document.forms['pembagian_edit'].disalurkan_ke.disabled=true;
}
</script>  
<div align="center">
    <a href =?page=pembagian_show><img alt="mbalek"  src="images/001_23.gif" class="hovergallery" align="left"></a>
    <form action="pembagian_update.php" method='get' name="pembagian_edit">
<?php
	echo"<table>";
	echo "<input type=\"hidden\" name =\"id\" value = \"{$id}\">";
	echo "<tr>";
	echo"<td>ID Petugas </td><td>:</td><td> <input type = text name = id_petugas value=\"{$data['id_petugas']}\" readonly=readonly><br></td></tr>";
	echo"<td>ID Penerima</td><td>:</td><td> <input type = text name = id_penerima value=\"{$data['id_penerima']}\" readonly=readonly><br></td></tr>";
	echo"<td>ID Pembayaran</td><td>:</td><td> <input type = text name = id_penerima value=\"{$data['id_pembayaran']}\" readonly=readonly><br></td></tr>";
	echo "<tr><td>Jumlah Pembagian</td><td> : </td><td><input type = text name = jumlah_pembagian value={$data['jumlah_pembagian']} class=validate[required] readonly=readonly><br></td></tr>";
	echo"<td>Tanggal Pembagian </td><td>:</td><td> <input type = text name = tanggal_pembagian value={$data['tanggal_pembagian']} id=popup_container readonly=readonly class=\"validate[required,custom[date]] text-input\"><br></td></tr>";
	echo"<td>Disalurkan ke </td><td>:</td><td> 
	<select title=disalurkan_ke name=disalurkan_ke id=disalurkan_ke class=validate[required] onChange=javascript:ganti()>
     <option value=0 selected=selected>Piih Tempat</option>"?>
     <?php 
        $query = mysql_query('select * from penerima');
        while ($row = mysql_fetch_array($query)) {
        ?><option value="<?php echo $row['penerima']; ?>"><?php echo $row['penerima']; ?></option>								
		<?php
         }                               
	?>		
    <option value="Lain">Lain-lain</option>                                						
	<?php echo "</select>"; ?>
	<input name=ke_lain size=15 disabled=disabled border=0 type=text>                               
	</td></tr>
    <?php
	echo "<tr colspan=3><td><input type=submit value=edit></td></tr></table>";
	echo"</form>";
?>
</form>
</body>
</html>