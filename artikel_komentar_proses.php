<?php
include 'config.php';

$id_artikel = $_GET['id_artikel'];
 if ($_GET['act'] == "submit")
 {

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$komentar = addslashes(str_replace("\r\n", "<br />", $_POST['komentar']));
	$id_artikel = $_POST['id_artikel'];
	$waktu = date("H:i d-M-Y");

	//PROSES INSERT KOMENTAR KE DATABASE
	if($nama != "" && $email != "" && $komentar != ""){
	$sql = mysql_query( "INSERT INTO `ta44`.`komentar_artikel`
	VALUES (
	NULL , '$id_artikel', '$nama', '$email', '$komentar', '$waktu'
	);") or die(mysql_error());       
        header('location: index.php?page=artikel_detail&id_artikel='.$id_artikel.'');        
	}else{
            
        }
	
 }
 ?>