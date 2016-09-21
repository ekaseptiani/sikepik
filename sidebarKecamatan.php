	<div id="komoditas">
            <div class="isibar">
                KECAMATAN
                <ul>
				
					<?php
						$kecamatan = mysql_query("SELECT * FROM  kecamatan ORDER By nama ASC ");
						while($k = mysql_fetch_array($kecamatan)){
					?>
				
						<li><a href="index-2.php?id=<?php echo $k['id_kecamatan']?>" id="lokasi" data-lokasi="<?php echo"$k[nama]";?>" ><?php echo"$k[nama]";?></a></li>
					
					<?php } ?>
                </ul>
            </div>
	</div>
