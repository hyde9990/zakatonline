<?php
	include "config.php";
	$id=$_GET['id'];
	$delete = "DELETE FROM  user  WHERE id_user='$id'";
	$hasil = mysql_query($delete);
	if ($hasil)
	{
		echo "<center> ";
		echo ("Proses Delete User  Berhasil");
		echo "</center> ";
		echo "<center> ";
		echo "<a href = '?page=user_Show'>Show</a>";
		echo "</center> ";
	}
	else
	{
		echo("proses delete Data Gagal");
	}
	
	echo "<hr>";
	echo "<br>";
	?>