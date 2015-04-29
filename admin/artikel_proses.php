<?php

include "config.php";
$id = $_POST['id_artikel'];
$penulis = $_POST['penulis'];
$judul = $_POST["judul_artikel"];
$isi = addslashes(str_replace("\r\n", "<br />", $_POST['isi_artikel']));

if ($judul != "" && $isi != "") {
$sql = mysql_query("INSERT INTO  `ta44`.`artikel` (
`id_artikel` ,
`penulis` ,
`judul_artikel` ,
`tgl_artikel` ,
`isi_artikel`
)
VALUES (

'$id','$penulis','$judul',now(),'$isi'
);") or die(mysql_error());

    echo "<meta http-equiv=refresh content=0,index.php?page=artikel_lihat>";
} else {

    echo "<script>alert('Gagal diinsertkan :(');</script></p>";
    echo "<meta http-equiv=refresh content='artikel_insert.php'/>";
}
?>