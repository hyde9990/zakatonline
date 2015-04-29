<?php
session_start();
include "config.php";
$user_login = $_SESSION['user'];
$konfirmasi = mysql_query("SELECT id_pembayaran FROM pembayaran WHERE id_petugas = '1' AND STATUS = 'proses'");
$j = mysql_num_rows($konfirmasi);
if($j>0){
    echo $j;
}
?>
