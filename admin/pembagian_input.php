<h2><img src="images/blog_add.png" width="30" height="30"> Tambah Data Pembagian
<hr color="#EEEEEE" width="90%" align="left"></h2>
<?php
include "config.php";
$id_pembagian_lama = mysql_fetch_array(mysql_query("SELECT max(id_pembagian) FROM pembagian"));
$id_pembagian_baru = $id_pembagian_lama[0] + 1;

$login=$_SESSION['user'];
?>
       <center>
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
                $("form[name=pembagian_input]").validationEngine();
            });
        </script>  
        	<script language="JavaScript">
function ganti()
{
	if (window.document.forms['pembagian_input'].disalurkan_ke.value=="Lain")
	{
		window.document.forms['pembagian_input'].ke_lain.disabled=false;
		window.document.forms['pembagian_input'].ke_lain.focus();
	}
	else
		window.document.forms['pembagian_input'].disalurkan_ke.disabled=true;
}
</script>  

            <form action="pembagian_proses.php" method="post" name="pembagian_input">
        <table>
        <tr>
            <td>ID Pembagian<pre><pre></td>
            <td>:</td>
            <td><input type="text" size="20" name="id_pembagian" value="<?php echo $id_pembagian_baru;?>" readonly="readonly"></td>
        </tr>
        <tr>
            <td>ID Petugas<pre><pre></td>
            <td>:</td>
            <td><input type="text" size="20" name="id_petugas" value="<?php echo $login[0];?>" readonly="readonly"/></td>
        </tr>
        <tr>
            <td>ID Pembayaran<pre><pre></td>
            <td>:</td>
            <td>
            <select title="pembayaran" name="id_pembayaran" id="id_pembayaran" class="validate[required]"/>        
                        <?php $row = mysql_query("select * from pembayaran");
			while($sql = mysql_fetch_array($row)){
			?>            
            	<option value="<?php echo $sql['id_pembayaran']?>"><?php echo $sql[0]?></option>
            <?php } ?>
            </select>            
            </td>
        </tr>
        <tr>
            <td>Jumlah Pembagian</td>
            <td>:</td>
            <td>Rp. <input type="text" id="jumlah_pembagian" size="15" name="jumlah_pembagian" class="validate[required,custom[onlyNumber] text-input"/></td>
        </tr>
        <tr>
        	<td>Tanggal Pembagian</td>
            <td>:</td>
            <td><input type="text" size="20" name="tanggal_pembagian" id="popup_container" readonly="readonly"/></td>
        </tr>
        <tr>
        	<td>Disalurkan Ke</td>
            <td>:</td>
            <td>
            <select title="disalurkan_ke" name="disalurkan_ke" id="disalurkan_ke" class="validate[required]" onChange="javascript:ganti()" border="0">
                                <option value="0" selected="selected">Piih Tempat</option>
                                <?php
                                $query = mysql_query("select * from penerima");
                                while ($row = mysql_fetch_array($query)) {
                                ?><option value="<?php echo $row['id_penerima']; ?>"><?php echo $row['penerima']; ?></option>								
								<?php
                                }
                                ?>
                                <option value="Lain">Lain-lain</option>                                
            </select>             
            <input name="ke_lain" size="15" disabled="disabled" border="0" type="text">                               
            </td>            
        </tr>
       <tr>
		  <td colspan="3"><input type="submit" value="kirim" name="perintah"/></td>
		</tr>
	</table>			
	  </form>
</body>
</html>
    </center>