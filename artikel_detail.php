	
<link href="css.css" rel="stylesheet" type="text/css">

<?php 
//ob_start();
include "config.php";
$del=$_GET['del'];
if($del!=""){
	$sql=mysql_query("delete from komentar_artikel where id_komentar_artikel='$del'")or die("SINTAK DEL SALAH=>".mysql_error());
	if($sql){
		echo "<meta http-equiv=\"refresh\" content='artikel_detail.php?id_artikel=$id_artikel'>";
	}
}

 $id_artikel = $_GET['id_artikel']; 
 
	//PROSES MENAMPILKAN DETAIL ARTKEL BERDASARKAN ID ARTIKEL
	$query = mysql_query(" SELECT * from artikel WHERE id_artikel='$id_artikel' ") or die("Error, begini => " . mysql_error() ) ;
	
 
	 while ($baris=mysql_fetch_array($query)) { 
	  echo("<table border='0' width=100% align=left>");	  
	  echo("<tr>"); 
	  echo("<td><img src=\"images/library64.png\" width=\"20\" height=\"20\"> <font size=+3 color=#467B99>".$baris['judul_artikel']."</font></td>"); 
	  echo("</tr>"); 
	  echo "<tr>";
	  echo "<td><hr color=\"#99E2FF\" width=\"90%\" align=\"left\"></td>";	
	  echo "</tr>";
	  echo("<tr>"); 
	  echo("<td>".$baris['isi_artikel']."</td>");
	  echo("</tr>"); 
  	echo "<tr>";
	echo "<td><hr color=\"#CCCCCC\" width=\"90%\" align=\"left\"></td>";	
	echo "</tr>";
	echo "<tr>";
	echo "<td><font size=-7>".$baris[tgl_artikel]."&nbsp;&nbsp;//&nbsp;&nbsp;judul&nbsp;&nbsp;: ".$baris[2]."&nbsp;&nbsp;//&nbsp;&nbsp;dipostkan oleh&nbsp;&nbsp;:&nbsp;&nbsp;".$baris[1]."</font></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><hr color=\"#CCCCCC\" width=\"90%\" align=\"left\"></td>";	
	echo "</tr>";	  
	  echo("</table>");
  	}
$query = mysql_query("SELECT * FROM komentar_artikel WHERE id_artikel = '$id_artikel' order by id_komentar_artikel desc ") or die(mysql_error());
$count = mysql_query("SELECT COUNT(*) FROM komentar_artikel WHERE id_artikel = '$id_artikel' ") or die(mysql_error());

echo("<img src=\"images/comments.png\" width=\"30\" height=\"30\"> <font size=+1 color=#467B99>komentar</font>");
echo "<hr color=\"#99E2FF\" width=\"90%\" align=\"left\">";
 	while($baris = mysql_fetch_array($query)){
  		echo "<table align=right class=komentar>";
		echo "<td>";
   		echo "<table border='0' width=100% style=\"padding-left:10px;padding-bottom:10px;\">";
		echo "<tr>";
		echo "<td colspan=2 align=right height=20></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td rowspan=\"3\" width=30><img src=\"images/user_64.png\" ></td>";
                echo "<td>".$baris['waktu']."<hr align=left color=#CCCCCC width=95%></td>";
		echo "</tr>";               
		echo "<tr>";		
		echo "<td><font style=\"color:#0099CC;font-style:italic\">".$baris['nama']."</font> <font color=\"#666666\" size=\"2\">komentar :</font> </td>";
		echo "</tr>";		
		echo "<tr>";		
		echo "<td colspan=2>".$baris['isi_komentar']."</td>";
		echo "</tr>";
		echo "</table>";
		echo "</td>";
		echo "</table>";                
        }        
// jika tidak ada komentar (jumlah data hasil query = 0), tampilkan keterangan belum ada komentar       
?>
<br />
<table style=""></table>
<?php
include "artikel_komentar.php";
?>
