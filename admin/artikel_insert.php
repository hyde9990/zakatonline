<h2><img src="images/blog_add.png" width="30" height="30"> Tambah Artikel
<hr color="#EEEEEE" width="90%" align="left"></h2>
<?php
include "config.php";
$id_artikel_lama = mysql_fetch_array(mysql_query("SELECT max(id_artikel) FROM artikel"));
$id_artikel_baru = $id_artikel_lama[0] + 1;
$login=$_SESSION['user'];
$penulis=$login[1];

?>
        
<html>
    <head>
        <title>Artikel</title>       
    </head>   
    <body>
    <center>
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
        <script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
        <script src="js/jquery.validationEngine.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $("form[name=artikel_insert]").validationEngine();
            });
        </script>
            <form action="artikel_proses.php" method="post" name="artikel_insert">
                <table width="50%" cellpadding="5px" cellspacing="2px" align="center">
                     <tr>
                        <td class='judul'>id artikel</td>
                        <td class='judul'><input type="text" name="id_artikel" value="<?php echo $id_artikel_baru?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td class='judul'>Penulis</td>
                        <td class='judul'><input type="text" name="penulis" value="<?php echo $penulis?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td class='judul'>judul</td>
                        <td class='judul'><input type="text" name="judul_artikel" id="judul_artikel" class="validate[required] text-input"></td>
                    </tr>
                    <tr>
                        <td class='isi'>isi</td>
                        <td class='judul'><textarea name="isi_artikel" rows="50" cols="50" id="isi_artikel" class="validate[required] text-input"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="masukkan"> </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>