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
				  <div class= "grafik">
          <div style="clear: both"></div>		  
			<div id="view" style="min-width: 100px; height: 400px; margin: 0 auto"></div>

	  </div>
<?php 
	//Membuat Query
	$q=mysql_query("SELECT komoditas.*, subkomoditas.id_komoditas,SUM(hasil_panen) as hasil_panen FROM subkomoditas
		JOIN komoditas ON komoditas.id_komoditas=subkomoditas.id_komoditas
		GROUP BY subkomoditas.id_komoditas");
?>

<!-- File yang diperlukan dalam membuat chart -->
<script src="js/jquery.min.js"></script>
<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>


<script type="text/javascript">
$(function () {

    // Radialize the colors
    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });

    // Build the chart
    $('#view').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'jUMLAH KOMODITAS'  //KWI TENTANG JUDUL GRAFIK
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Jumlah Persentase',
            data: [
			<?php
		while($r=mysql_fetch_array($q)){
		 	echo "['".$r["nama"]."',".$r["hasil_panen"]."],";
		}
		?>
			]
        }]
    });
});
</script>
	