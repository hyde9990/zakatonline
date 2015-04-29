<?php
include ('class.ezpdf.php');
$pdf = new Cezpdf('a4','landscape');

// Atur margin
$pdf->ezSetCmMargins(2, 3, 3, 3);

// Header dan footer didefinisikan diantara openObject dan closeObject
$all = $pdf->openObject();

// Teks di tengah atas untuk judul header
$pdf->addText(320, 575, 16,'<b>LAPORAN DATA ANGGOTA</b>');
$pdf->addText(295, 555, 14,'<b>KOPERASI ADIL MAKMUR SEJAHTERA</b>');

// Garis atas untuk header
$pdf->line(30, 550, 800, 550);

// Garis bawah untuk footer
$pdf->line(30, 50, 800, 50);

// Teks kiri bawah

$pdf->closeObject();

// Tampilkan object di semua halaman
$pdf->addObject($all, 'all');

// Koneksi ke database dan tampilkan datanya 
mysql_connect("localhost", "root", "");
mysql_select_db("tugasakhir");

$sql = mysql_query("SELECT * FROM anggota");

$i = 1;
while($r = mysql_fetch_array($sql)) { 
	$data[$i]=array('No'=>$i, 
                  'ID Anggota'=>$r['idanggota'], 
                  'Nama'=>$r['nama'],
				  'Alamat'=>$r['alamat'],
				  'Tanggal Lahir'=>$r['tanggallahir'],
				  'Tanggal Daftar'=>$r['tanggaldaftar'],
				  'No KTP'=>$r['Noktp'],
				  'Pekerjaan'=>$r['pekerjaan'],
				  'Jenis Kelamin'=>$r['jeniskelamin']
				  
				  );
	$i++;
}

// Tampilkan data dalam bentuk tabel
$pdf->ezTable($data, '', '', '','', '', '', '','');


// Teks kiri bawah
$pdf->addText(35,34,8,'Dicetak pada tanggal: ' . date( 'd-m-Y, H:i:s'));


// Penomoran halaman
$pdf->ezStartPageNumbers(450, 15, 8);
$pdf->ezStream();
?>