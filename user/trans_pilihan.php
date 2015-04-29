<h2><img src="images/currency_blue_dollar.png" width="40" height="40" align="absmiddle"> Pilih ZAKAT
        <hr color="#EEEEEE" width="90%" align="left"></h2> 
<form action="?page=trans_pilihan" method="post">
    <input type="radio" value="1" name="zakat"/>zakat harta 1 tahun<br />
    <input type="radio" value="2" name="zakat"/>profesi<br />
    <input type="radio" value="3" name="zakat"/>harta usaha<br />
    <input type="radio" value="4" name="zakat"/>hadiah terkait gaji<br />
    <br />
    <input type="submit" value="selanjutnya &raquo;">
</form>
<?php
$pil = $_POST['zakat'];


if ($pil != "") {
    if ($pil == 1) {        
        echo "<meta http-equiv='refresh' content='0,?page=trans_zakat_harta&zakat=1' />";
    }
    if ($pil == 2) {        
        echo "<meta http-equiv='refresh' content='0,?page=trans_zakat_profesi&zakat=2' />";
    }
    if ($pil == 3) {        
        echo "<meta http-equiv='refresh' content='0,?page=trans_zakat_harta_usaha&zakat=3' />";
    }
    if ($pil == 4) {        
        echo "<meta http-equiv='refresh' content='0,?page=trans_zakat_hadiah&zakat=4' />";
    }

}
?>