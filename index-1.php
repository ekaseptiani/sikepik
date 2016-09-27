<?php
include "koneksi.php";
$det_hide = 'hide';
if(isset($_GET['id'])){
	$det_hide = '';
	$sql_kom_detail = ("
		SELECT 
			b.`id` AS id_kelompok,
			b.`no_hp`,
			b.`alamat`,
			b.`nama` AS kelompok,
			c.`nama` AS kecamatan,
			d.`nama` AS komoditas,
			a.`hasil_panen` AS panen
		FROM  subkomoditas a 
		LEFT JOIN db_datakelompok b ON b.`id` = a.`id_datakelompok`
		LEFT JOIN kecamatan c ON c.`id_kecamatan` = b.`id_kecamatan`
		LEFT JOIN komoditas d ON d.`id_komoditas` = a.`id_komoditas`
		WHERE a.`id_komoditas` = '". $_GET['id']."'
		GROUP BY a.`id_datakelompok`
		ORDER BY a.`hasil_panen` DESC
		LIMIT 0, 2
	
	");
	
	$sql_kom_detail_exec = mysql_query($sql_kom_detail) or die(mysql_error());
	
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>s i k e p i k </title>
        <meta http-equiv="Content-Type" content="text/php; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
		<style>
			.hide{
				display:none;
			}
		</style>
  </head>
  <body>
      <div id="kanvas">
          <div id="header"></div>
           <div id="menu">   
              <ul class ="nav">
                  <li><a href="index.php">Beranda</a></li>
                  <li><a href="index-1.php">Komoditas</a></li>
                  <li><a href="index-2.php">Data Kelompok</a></li>
				  <li><a href="grafik.php">Grafik</a></li>
                  <li><a href="../baru/admin/index.php">Login Staff</a></li>
				  
              </ul>          
          </div>
          <div id="komoditas">
              <div class="isibar">
                  <center>KOMODITAS</center>
              <ul>
				<?php
					$sql_kom = "select * from komoditas";
					$sql_kom_exec = mysql_query($sql_kom);
					while($kom = mysql_fetch_assoc($sql_kom_exec)){
						echo '<li><a href="index-1.php?id='.$kom['id_komoditas'].'">'. $kom['nama'] .'</a></li>';
					}
				?>
				</ul>
              </div>
          </div>
          <div id="perbandingan"> </br></br></br>
		  <center><strong>	<a>	SELAMAT DATANG DI HALAMAN PERBANDINGAN KELOMPOK </strong></br>
								Halaman ini berisikan perbandingan kelompok dengan produski komoditas tertinggi</br>
								<strong>Silahkan pilih komoditas</center></strong>
							</a>
              <div class="perbandingan <?php echo $det_hide?>">
                  <table border="1">
                        <tr="ztr">
                            <th class="zth">No</th>
                            <th class="zth">Nama</th>
                            <th class="zth">Alamat</th>
                            <th class="zth">No.Hp</th>
							<th class="zth">Komoditas</th>
							<th class="zth">Hasil Panen (Kg)</th>
                            <tr="ztr">
						<?php
							$no = 1;
							while($det = mysql_fetch_assoc($sql_kom_detail_exec)){
								echo '
									<tr>
										<td>'. $no .'</td>
										<td>'. $det['kelompok'].'</td>
										<td>'. $det['alamat'] .'</td>
										<td>'. $det['no_hp'] .'</td>
										<td>'. $det['komoditas'] .'</td>
										<td>'. number_format($det['panen']) .'</td>
									</tr>

								
								';;
								$no ++;
							}
						
						?>
					</table>
              </div>
          </div>

          <div style="clear: both"></div>
          <div id="footer">
              <div class=""><center>Copyright ekaseptiyani &nbsp;  

</div>
          </div>
      </div>
  </body>
</html>