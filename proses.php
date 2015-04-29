<?
//untuk rincian
$mode = $_GET['mode'];
include "config.php";

//untuk menampilkan jurusan
if ($mode == 'kota-view') {
    sleep(1);
    $id_prop = $_GET['id_prop'];
    $kota = mysql_query("select * from kota where id_propinsi='$id_prop'");
    $cek = mysql_num_rows($kota);

    if ($cek) {
?>	
        <select title="kota" name="id_kota" id="id_kota">
    <?
        while ($row = mysql_fetch_array($kota)) {
            $id_kota = $row['id_kota'];
            $nama_kota = $row['nama_kota'];
    ?><option value="<? echo $row['id_kota']; ?>"><? echo $nama_kota; ?></option><?
        }
    ?></select><?
    } else {
        echo "Silahkan pilih nama kota";
    }
}
    ?>


