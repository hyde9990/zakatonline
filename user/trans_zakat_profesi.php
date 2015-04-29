<h2><img src="images/currency_blue_dollar.png" width="40" height="40" align="absmiddle"> Pilih ZAKAT &raquo; <font color="#00CCFF">Hitung ZAKAT</font>
        <hr color="#EEEEEE" width="90%" align="left"></h2> 
<?php
$pil = $_GET[zakat];

$sql = mysql_query("select * from jenis_zakat");
$data = mysql_fetch_array($sql);

$id_jenis = $data[id_jenis_zakat] == $pil;
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Kalkulator Zakat profesi</title>
        <style type="text/css">
            <!--
            body,td,th {
                font-family: Arial, Helvetica, sans-serif;
            }
            a img { border:none; }
            input { text-align:right; }
            -->
        </style></head>       
<script language="JavaScript" type="text/javascript">
            <!--
            function calc_total()
            {
                document.Kalkulator.zakat.value =
                    parseFloat(document.Kalkulator.z1.value) +
                    parseFloat(document.Kalkulator.z2.value) +
                    parseFloat(document.Kalkulator.z3.value);
                document.Kalkulator.disp_zakat.value = document.Kalkulator.zakat.value;
            }

            function calc_nisab()
            {
                var emas = parseInt(document.Kalkulator.fz.value);
                var nisab = emas * 85;
                document.Kalkulator.nisab.value = nisab;
            }

            function calc_simpanan()
            {
                document.Kalkulator.ff.value =
                    parseInt(document.Kalkulator.fa.value) +
                    parseInt(document.Kalkulator.fb.value) +
                    parseInt(document.Kalkulator.fc.value) +
                    parseInt(document.Kalkulator.fd.value) +
                    parseInt(document.Kalkulator.fe.value);

                var zakatable =
                    parseInt(document.Kalkulator.ff.value) -
                    parseInt(document.Kalkulator.fg.value);

                calc_nisab();
                var nisab = document.Kalkulator.nisab.value;

                if (zakatable < nisab){
                    zakatable = 0;
                }
                document.Kalkulator.fh.value = zakatable;
                var zakat = 0.025 * zakatable;
                document.Kalkulator.z1.value = zakat;
                calc_total();
            }

            function calc_profesi()
            {
                var pendapatan =
                    (12 * parseInt(document.Kalkulator.fj.value)) +
                    parseInt(document.Kalkulator.fk.value);
                var pengeluaran =
                    (12 * parseInt(document.Kalkulator.fm.value)) +
                    parseInt(document.Kalkulator.fn.value);
                var zakatable = pendapatan - pengeluaran;

                document.Kalkulator.fl.value = pendapatan;
                document.Kalkulator.fo.value = pengeluaran;

                calc_nisab();
                var nisab = document.Kalkulator.nisab.value;
                if (zakatable < nisab){
                    zakatable = 0;
                }
                document.Kalkulator.fp.value = zakatable;
                var zakat = 0.025 * zakatable;
                document.Kalkulator.z2.value = zakat;
                calc_total();
            }

            function calc_usaha()
            {
                var zakatable =
                    0.01 * parseFloat(document.Kalkulator.ft.value) *
                    (parseInt(document.Kalkulator.fr.value) -
                    parseInt(document.Kalkulator.fs.value));
                document.Kalkulator.fu.value = zakatable;
                calc_nisab();
                var nisab = document.Kalkulator.nisab.value;
                if (zakatable < nisab){
                    zakatable = 0;
                }
                document.Kalkulator.fv.value = zakatable;
                var zakat = 0.025 * zakatable;
                document.Kalkulator.z3.value = zakat;
                calc_total();
            }

            -->
        </script>
        <body>
        <form action="?page=trans_pembayaran" method="post" name="Kalkulator" id="Kalkulator">
            <input type="hidden" name="id_jenis_zakat" value="<?php echo $pil; ?>" />
            <table style="font-size: 8pt;" align="center" cellpadding="3" cellspacing="1" width="100%">
                <tbody><tr>
                        <td width="4%"></td>
                        <td width="61%"></td>
                        <td width="24%"></td>
                        <td width="11%"></td>
                    </tr>                  
                    <tr>
                        <td colspan="3" style="color: rgb(255, 255, 255);" align="center"> <font face="Arial, Helvetica, sans-serif"><b></b></font>
                            <div class="style3" align="left"><font face="Arial, Helvetica, sans-serif"><font size="3"  color="#293983">ZAKAT PROFESI</font></font></div></td>
                        <td style="color: rgb(255, 255, 255);" align="center" width="11%">&nbsp;</td>

                    </tr>
                    <tr>
                        <td width="4%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                        <td bgcolor="#efefef" width="61%"><font color="#000000" face="Arial, Helvetica, sans-serif">j. Pendapatan / Gaji per Bulan (setelah dipotong pajak)</font></td>
                        <td align="right" bgcolor="#efefef" width="24%"><div align="left"><font color="#000000" face="Arial, Helvetica, sans-serif">Rp
                                    <input name="fj" class="textfield" onChange="calc_profesi()" value="0" size="12">
                                </font></div></td>
                        <td width="11%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                    </tr>

                    <tr>
                        <td width="4%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                        <td bgcolor="#efefef" width="61%"><font color="#000000" face="Arial, Helvetica, sans-serif">k. Bonus/pendapatan lain-lain selama setahun</font></td>
                        <td align="right" bgcolor="#efefef" width="24%"><div align="left"><font color="#000000" face="Arial, Helvetica, sans-serif">Rp
                                    <input name="fk" class="textfield" onChange="calc_profesi()" value="0" size="12">
                                </font></div></td>
                        <td width="11%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                    </tr>
                    <tr>

                        <td width="4%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                        <td bgcolor="#d8d8d8" width="61%"><font color="#000000" face="Arial, Helvetica, sans-serif">l. Jumlah Pendapatan per Tahun</font></td>
                        <td align="right" bgcolor="#d8d8d8" width="24%"><div align="left"><font color="#000000" face="Arial, Helvetica, sans-serif"><strong>Rp</strong>
                                    <input name="fl" class="fieldzakat" value="0" size="12" readonly="readonly">
                                </font></div></td>
                        <td width="11%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                    </tr>
                    <tr>

                        <td width="4%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                        <td bgcolor="#efefef" width="61%"><font color="#000000" face="Arial, Helvetica, sans-serif">m. Rata-rata pengeluaran rutin per bulan (kebutuhan fisik, air, listrik, pendidikan, kesehatan, transportasi, dll)</font></td>
                        <td align="right" bgcolor="#efefef" width="24%"><div align="left"><font color="#000000" face="Arial, Helvetica, sans-serif">Rp
                                    <input name="fm" class="textfield" onChange="calc_profesi()" value="0" size="12">
                                </font></div></td>
                        <td width="11%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                    </tr>
                    <tr>
                        <td width="4%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>

                        <td bgcolor="#efefef" width="61%"><font color="#000000" face="Arial, Helvetica, sans-serif">n. Pengeluaran lainnya dalam satu tahun (pendidikan, kesehatan, dll)</font></td>
                        <td align="right" bgcolor="#efefef" width="24%"><div align="left"><font color="#000000" face="Arial, Helvetica, sans-serif">Rp
                                    <input name="fn" class="textfield" onChange="calc_profesi()" value="0" size="12">
                                </font></div></td>
                        <td width="11%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                    </tr>
                    <tr>
                        <td width="4%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                        <td bgcolor="#d8d8d8" width="61%"><font color="#000000" face="Arial, Helvetica, sans-serif">o. Jumlah Pengeluaran per Tahun (12 x m + n)</font></td>

                        <td align="right" bgcolor="#d8d8d8" width="24%"><div align="left"><font color="#000000" face="Arial, Helvetica, sans-serif"><strong>Rp</strong>
                                    <input name="fo" class="fieldzakat" value="0" size="12" readonly="readonly">
                                </font></div></td>
                        <td width="11%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                    </tr>
                    <tr>
                        <td width="4%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                        <td bgcolor="#d8d8d8" width="61%"><font color="#000000" face="Arial, Helvetica, sans-serif">p. Penghasilan kena zakat (L - O , jika &amp;gt nisab)</font></td>

                        <td align="right" bgcolor="#d8d8d8" width="24%"><div align="left"><font color="#000000" face="Arial, Helvetica, sans-serif"><strong>Rp</strong>
                                    <input name="fp" class="fieldzakat" value="0" size="12" readonly="readonly">
                                </font></div></td>
                        <td width="11%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                    </tr>
                    <tr>
                        <td width="4%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                        <td bgcolor="#d8d8d8" width="61%"><b><font color="#000000" face="Arial, Helvetica, sans-serif">Q. JUMLAH ZAKAT PROFESI YANG WAJIB DIBAYARKAN PER TAHUN (2,5% X P)</font></b></td>

                        <td align="right" bgcolor="#d8d8d8" width="24%"><div align="left"><font color="#000000" face="Arial, Helvetica, sans-serif"><strong>Rp</strong>
                                    <input name="z2" class="fieldzakat" value="0" size="12" readonly="readonly">
                                </font></div></td>
                        <td width="11%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                    </tr>
                    <tr>
                        <td colspan="4"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                    </tr>
                    <tr>
                        <td colspan="4"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="color: rgb(255, 255, 255);" align="center"> <font face="Arial, Helvetica, sans-serif"><b></b></font>
                            <div class="style3" align="left"><font face="Arial, Helvetica, sans-serif"><font size="3"  color="#293983">PERHITUNGAN NISAB</font> </font></div></td>

                    </tr>
                    <tr>
                        <td width="4%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                        <td bgcolor="#efefef" width="61%"><font color="#000000" face="Arial, Helvetica, sans-serif">z. Harga Emas Murni Saat ini per Gram</font></td>
                        <td align="right" bgcolor="#efefef" width="24%"><div align="left"><font color="#000000" face="Arial, Helvetica, sans-serif">Rp
                                    <input name="fz" class="textfield" onChange="calc_simpanan()" value="105000" size="12">
                                </font></div></td>
                        <td width="11%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                    </tr>

                    <tr>
                        <td width="4%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                        <td bgcolor="#d8d8d8" width="61%"><font color="#000000" face="Arial, Helvetica, sans-serif">Besarnya Nisab (z x 85 gram emas)</font></td>
                        <td align="right" bgcolor="#d8d8d8" width="24%"><div align="left"><font color="#000000" face="Arial, Helvetica, sans-serif"><strong>Rp</strong>
                                    <input name="nisab" class="fieldzakat" value="8925000" size="12" readonly="readonly">
                                </font></div></td>
                        <td width="11%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                    </tr>

                </tbody></table>
            <br />
            <input type="submit" name="enter" value="selanjutnya &raquo;"/>
        </form>
        </body>
</html>