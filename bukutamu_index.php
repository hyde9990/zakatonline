<h2><img src="images/library.png" width="30" height="30" align="absmiddle"> Buku Tamu
        <hr color="#99E2FF" width="90%" align="left"></h2>
<?php
include 'config.php';
$hal = $_GET['hal'];
if(!is_numeric($hal)){$hal=1;}
$jumlah_baris = 5;
if($hal > 1){
	$mulai = $jumlah_baris * ($hal - 1);
}else{
	$mulai = 0;
} 

$result = mysql_query("SELECT * FROM buku_tamu order by id_buku_tamu desc LIMIT {$mulai},{$jumlah_baris} ") or die("Error, begini => " . mysql_error() ) ;

 	while($baris = mysql_fetch_array($result)){
	echo "<form method='get'>";
  		echo "<table align=right class=komentar>";
		echo "<td>";
   		echo "<table border='0' width=100% style=\"padding-left:10px;padding-bottom:10px;\">";		
                echo "<tr>";
		echo "<td rowspan=\"3\" width=30><img src=\"images/user_64.png\" ></td>";
                echo "<td><font style=\"color:#0099CC;font-style:italic\">".$baris['nama']."</font><hr align=left color=#CCCCCC width=95%></td>";
		echo "</tr>";               
		echo "<tr>";		
		echo "<td><font color=\"#666666\" size=\"1\">pesan :</font> </td>";
		echo "</tr>";		
		echo "<tr>";		
		echo "<td colspan=2>".$baris['pesan']."</td>";
		echo "</tr>";
		echo "</table>";
		echo "</td>";
		echo "</table></form>";                
        }        
?>	
<?php 
//membuat paging
$sql = "SELECT * FROM buku_tamu";
$result = mysql_query($sql);
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
        <a href="?page=bukutamu_index&hal=1">awal</a>
        <a href="?page=bukutamu_index&hal=<?php echo ($hal - 1); ?>">sebelumnya</a>
    <?
    }
    ?>
    <?php
    for ($i = $start; $i <= $end; $i++) {
        if ($i == $hal) {
            echo "&nbsp;<b>$i</b>&nbsp;";
        } else {
            echo "<a href='?page=bukutamu_index&hal={$i}'>$i</a> ";
        }
    }
    ?>
    <?php
    if ($hal < $max) {
    ?>
        <a href="?page=bukutamu_index&hal=<?php echo ($hal + 1); ?>">selanjutnya</a>
        <a href="?page=bukutamu_index&hal=<?php echo $max; ?>">akhir</a>
    <?
    }
    ?>
<?php
	include "bukutamu_isi.php";	
?>