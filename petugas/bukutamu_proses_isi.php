<html>
<head>
<title>Input</title>
</head>
<body>
	<?php
		include "config.php";
		$id_buku_tamu_lama = mysql_fetch_array(mysql_query("SELECT max(id_buku_tamu) FROM buku_tamu"));
                $id_buku_tamu_baru = $id_buku_tamu_lama[0] + 1;
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$pesan = $_POST['pesan'];
		//echo $nm." ".$pswd."<br />";
		
		$buku_tamu = "insert into buku_tamu (id_buku_tamu,nama,email,pesan) values('$id_buku_tamu_baru','$nama','$email','$pesan')";
		//echo $anggota;
		$perintah = mysql_query($buku_tamu);
		if($perintah){
			echo "<meta http-equiv=refresh content=0,?page=bukutamu_proses_isi_notif>";
		}else{
			echo "<br />Data tidak dapat masuk ke database.";	
		}
		
	?>
</body>
</html>