<?php
	include "koneksi.php";
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
          <div id="header">
              <div class="judul"><center>S I K E P I K  </div>
              <div class="deskripsi"><center>Sistem Informasi Kelompok Petani Ikan Konsumsi Di Dinas Perikanan dan Kelautan Kabupaten Sleman</div>
          </div>
          <div id="menu">   
              <ul class ="nav">
                  <li><a href="index.php">Beranda</a></li>
                  <li><a href="index-1.php">Komoditas</a></li>
                  <li><a href="index-2.php">Data Kelompok</a></li>
				  <li><a href="grafik.php">Grafik</a></li>
                  <li><a href="index-3.php">Login Staff</a></li>
				  
              </ul>          
          </div>
                  <?php include 'sidebarGrafik.php';?>
          <div class="grafik" id="grafik_komoditas"></div>
          <div style="clear: both"></div>
			
		
		  

          <div id="footer">
              <div class="">
				<center>Copyright ekaseptiyani</center> &nbsp; 
			  </div>
          </div>
	  </div>
		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="js/highcharts/highcharts.js"></script>
		<script src="js/highcharts//modules/exporting.js"></script>
		
		<?php
			$sql_jml_kom = '
				SELECT
					a. id_komoditas AS id,
					a. nama AS komoditas,
					(SELECT SUM(aa.hasil_panen) FROM subkomoditas aa WHERE aa.id_komoditas = a.id_komoditas) AS jumlah
				FROM `komoditas` a
			';
			$sql_jml_kom = mysql_query($sql_jml_kom);
			
			$sql_total = '
				SELECT
					SUM((SELECT SUM(aa.hasil_panen) FROM subkomoditas aa)) AS total
				FROM `komoditas` a
			';
			$sql_total = mysql_query($sql_total);
			$total = mysql_fetch_assoc($sql_total);
			$total = intval($total['total']);
			
			while($jml_kom = mysql_fetch_assoc($sql_jml_kom)){
				$jum = 0;
				if(!empty($jml_kom['jumlah'])){
					$jum = $total / $jml_kom['jumlah'];
				}	
				$data .= '{name:"'.$jml_kom['komoditas'].'", y:'.$jum.'},';
			}
			$data = rtrim($data, ",");
			// var_dump($data);
			
		?>

	  <script type="text/javascript">
			$(function () {
				 $('#grafik_komoditas').highcharts({
					chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false,
						type: 'pie'
					},
					title: {
						text: 'Komposisi Komoditas'
					},
					tooltip: {
						pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: false
							},
							showInLegend: true
						}
					},
					series: [{
						name: 'Brands',
						colorByPoint: true,
						data: [
							<?php
								echo $data;								
							?>
						
						]
					}]
				});    
			});
		</script>
  </body>

  </html>