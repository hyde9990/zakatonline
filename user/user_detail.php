<h2><img src="images/user_64.png" width="30" height="30"> Data Saya
<hr color="#EEEEEE" width="90%" align="left"></h2>
<?php
include "config.php";
$login=$_SESSION['user'];
$id_user=$login[0];

$tampil = mysql_query("select * from user where id_user='$id_user'");
$row = mysql_fetch_array($tampil);
?>   
   		<table border='0' style=\"padding-left:10px;padding-bottom:10px;" class="dataprofil" align="center">
        	<tr>
    	<td colspan="3" align="right" style="padding-right:30px;padding-top:10px"><a href="?page=user_Edit&id=<?php echo $row[id_user] ?>"><img src="images/001_45.gif" class="hovergallery" border="0" title="Ubah data"></a></td>
    </tr>
     <tr>
		<td rowspan="11" width=30><img src="images/user.png"  width="64" height="64"></td>
 <td>Id Member : <?php  echo"$row[id_user]";?><hr align=left color=#CCCCCC width=95%></td>
		</tr>
<tr>
		<td colspan=2>Nama : <?php echo "$row[nama]"?></td>
	</tr>
	<tr>	
		<td colspan=2>Alamat : <?php echo "$row[alamat]"?></td>
	</tr>
    	<tr>	
		<td colspan=2>Tanggal Lahir : <?php echo "$row[tanggal_lahir]"?></td>
	</tr>
    	<tr>	
		<td colspan=2>Jenis Kelamin : <?php echo "$row[jenis_kelamin]"?></td>
	</tr>
    	<tr>	
		<td colspan=2>No Telepon : <?php echo "$row[no_telp]"?></td>
	</tr>
    	<tr>	
		<td colspan=2>Email : <?php echo "$row[email]"?></td>
	</tr>
        	<tr>
        <?php
                $propinsi = mysql_query("select * from propinsi where id_propinsi = $row[propinsi]");
                $prop = mysql_fetch_array($propinsi);
                ?>
		<td colspan=2>Propinsi : <? echo"$prop[nama_propinsi]" ?></td>
	</tr>
    	<tr>	
        <?php
                $kota = mysql_query("select * from kota where id_kota = $row[kota]");
                $kota = mysql_fetch_array($kota);
                ?>                
		<td colspan=2>Kota :<?php echo"$kota[nama_kota]" ?></td>               
	</tr>
    	<tr>	
		<td colspan=2>Username : <?php echo "$row[username]"?></td>
	</tr>
    	<tr>	
		<td colspan=2>password : <?php echo "$row[password]"?></td>
	</tr>
     </table>    