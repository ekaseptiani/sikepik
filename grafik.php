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
                  <li><a href="../sikepik/admin/index.php">Login Staff</a></li>
				  
              </ul>          
          </div>
                  <?php include 'sidebarGrafik.php';?>
          <div class="grafik" id="line"></div>
          <div style="clear: both"></div>
			
	  </div>
	  
	<?php
		$q=mysql_query("SELECT kecamatan.*, db_datakelompok.id, COUNT(id) as total FROM db_datakelompok
			JOIN kecamatan ON kecamatan.id_kecamatan=db_datakelompok.id_kecamatan
			GROUP BY db_datakelompok.id_kecamatan");
		$j=mysql_query("SELECT * FROM kecamatan");
	?>

		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="js/highcharts/highcharts.js"></script>
		<script src="js/highcharts//modules/exporting.js"></script>

	  <script type="text/javascript">
	$(function () {
		$('#line').highcharts({
			title: {
				text: 'JUMLAH KELOMPOK ',
				x: -20 //center
        },
			subtitle: {
				text: '',
				x: -20
        },
			xAxis: {
				categories: [<?php while($r=mysql_fetch_array($j)){ echo "'".$r["nama"]."',";}?>]
        },
			yAxis: {
				title: {
                text: 'Jumlah Kelompok'
            },
				plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
			tooltip: {
				valueSuffix: ''
        },
			legend: {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle',
				borderWidth: 0
        },
			series: [{
				name: 'Jumlah ',
				data: [<?php while($t=mysql_fetch_array($q)){ echo $t["total"].",";}?>]
        }]
    });
});
</script>
  </body>

  </html>