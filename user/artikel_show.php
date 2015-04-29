<h2><img src="images/news.png" width="40" height="40" align="absmiddle"> Artikel
        <hr color="#EEEEEE" width="90%" align="left"></h2>    
<link href="css.css" rel="stylesheet" type="text/css">
<div style="padding-left:20px;">
<?php
include "config.php";

//membuat halaman
$hal = $_GET['hal'];
if(!is_numeric($hal)){$hal=1;}
$jumlah_baris = 3;
if($hal > 1){
	$mulai = $jumlah_baris * ($hal - 1);
}else{
	$mulai = 0;
} 
	
echo "<form action=?page=artikel_show method=post>";	
echo "<div align=right>";
echo "<input type=text name=cari  placeholder=\"Cari Judul Artikel\"><input type=submit value=GO align=left>";
echo "</div>";
echo "</form>";

$kondisi = "";
$cari = $_POST['cari'];
$kondisi .= "WHERE judul_artikel like '%$cari%'";

$result = mysql_query("select*from artikel $kondisi order by id_artikel desc LIMIT {$mulai},{$jumlah_baris} ") or die("Error, begini => " . mysql_error() ) ;

//menampilkan artikel
while($baris = mysql_fetch_row($result)){
	$j=substr($baris[4],0,400);
	$jum=strlen($j);
	if($jum>=50){
		$read="<a href='?page=artikel_detail&id_artikel=".$baris[0]."'>Read More</a>";
	}else{
		$read="";
	}
	
	echo "<form method='get'>
	<table width=90% border=0 cellpadding=0>";
	echo "<tr>";
	echo "<td><img src=\"images/library64.png\" width=\"20\" height=\"20\"> <a href='?page=artikel_detail&id_artikel=".$baris[0]."'><font size=+1>".$baris[2]."</font></a></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><hr color=\"#99E2FF\" width=\"100%\" align=\"left\"></td>";	
	echo "</tr>";
	echo "<tr><input type='hidden' name='id_artikel' value='".$baris[0]."'>";
	echo "<td>".substr($baris[4],0,400)." . . $read</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><hr color=\"#CCCCCC\" width=\"100%\" align=\"left\"></td>";	
	echo "</tr>";
	echo "<tr>";
	echo "<td><font size=-7>".$baris[3]." // judul : ".$baris[2]." // dipostkan oleh : ".$baris[1]."</font></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><hr color=\"#CCCCCC\" width=\"100%\" align=\"left\"></td>";	
	echo "</tr>";
	echo "</table></form>";
}
?>
<?php 
//membuat paging
$sql = "SELECT * FROM artikel ". $kondisi;
$result = mysql_query($sql) or die (mysql_error());
$jumlah_data = mysql_num_rows($result);
$max = ceil($jumlah_data / $jumlah_baris);

if($hal < 3){
	$start = 1;
}else{
	$start = $hal-2;
}

if($hal > ($max-3)){
	$end = $max;
}else{
	$end = $start + 4;
}

?>
<center>
<?php
    if ($hal > 1) {
    ?>
        <a href="?page=artikel_show&cari=<?php echo $cari; ?>&hal=1">awal</a>
        <a href="?page=artikel_show&cari=<?php echo $cari; ?>&hal=<?php echo ($hal - 1); ?>">sebelumnya</a>
    <?
    }
    ?>
    <?php
    for ($i = $start; $i <= $end; $i++) {
        if ($i == $hal) {
            echo "&nbsp;<b>$i</b>&nbsp;";
        } else {
				echo "<a href='?page=artikel_show&cari={$cari}&hal={$i}'>$i</a> ";
        }
    }
    ?>
    <?php
    if ($hal < $max) {
    ?>
        <a href="?page=artikel_show&cari=<?php echo $cari; ?>&hal=<?php echo ($hal + 1); ?>">selanjutnya</a>
        <a href="?page=artikel_show&cari=<?php echo $cari; ?>&hal=<?php echo $max; ?>">akhir</a>
    <?
    }
    ?>
</center>
<br>
</div>