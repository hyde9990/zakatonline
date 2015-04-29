<?php	include "config.php";
	$id=$_GET['id'];
	$delete = "DELETE FROM  pembagian  WHERE id_pembagian='$id'";
	$hasil = mysql_query($delete);
	if ($hasil)
	{
		echo "<center> ";
		echo ("Proses Delete Data  Berhasil");
		echo "</center> ";
		echo "<center> ";
		echo "<a href = '?page=pembagian_show'>Show</a>";
		echo "</center> ";
	}
	else
	{
		echo("proses delete Data Gagal");
	}
	echo "<hr>";
	echo "<br>";?>