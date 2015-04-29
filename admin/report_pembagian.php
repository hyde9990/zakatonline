<h2><img src="images/my-tickets64.png" width="30" height="30"> Laporan Pembagian
<hr color="#EEEEEE" width="90%" align="left"></h2>
Laporan pembagian zakat per tahun
<br />
<br />
<form action="report_pembagian_print.php" method="post">
                <select name="tahun">
                    <option value="0" selected>-Tahun-</option>
                    <?php
						for($i = 2009; $i <= 2020; $i++){
						echo "<option value='$i'>$i</option>";
						}
					?>          	                   
                    <input type="submit" value="lihat">                        
</form>

            