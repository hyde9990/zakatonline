<?php
include "config.php";

$tampil = mysql_query("Select * from pembayaran order by id_pembayaran asc");
?>
<form action="?page=trans_search" method="post">
    <table bgcolor="#666666" border="0" cellpadding="5" cellspacing="1" align="center">        
        <tr align="center" >
            <td bgcolor=#666666><font color=#FFFFFF><center>Id Pembayaran</center></font></td>            
            <td bgcolor=#666666><font color=#FFFFFF><center>Nama</center></font></td>            
            <td bgcolor=#666666><font color=#FFFFFF><center>konfirmasi user</center></font></td>            
        </tr>

        <?php
        while ($row = mysql_fetch_array($tampil)) {
        ?>
            <tr align="center">
                <td bgcolor='#CCCCCC'><? echo"$row[id_pembayaran]"; ?></td>                
                <td bgcolor='#CCCCCC'><? echo"$row[nama]"; ?></td>                
                <td bgcolor='#CCCCCC'><? echo "$row[status]" ?></td>
            </tr>
        <?php
        };
        ?>
    </table>
</form>
