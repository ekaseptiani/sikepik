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
                  <?php include 'sidebarGrafik.php';?>
          <div class="grafik" id="grafik_kelompok"></div>
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

	  <script type="text/javascript">
			$(function () {
				$('#grafik_kelompok').highcharts({
					title: {
						text: 'JUMLAH KELOMPOK-KECAMATAN PER TAHUN',
						x: -20 //center
					},
					
					xAxis: {
						categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
							'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
					},
					yAxis: {
						title: {
							text: 'Temperature (°C)'
						},
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
					},
					tooltip: {
						valueSuffix: '°C'
					},
					legend: {
						layout: 'vertical',
						align: 'right',
						verticalAlign: 'middle',
						borderWidth: 0
					},
					series: [{
						name: 'JUMLAH',
						data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
					}]
				});
			});
		</script>
  </body>

  </html>