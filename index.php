<?php
include "koneksi.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>s i k e p i k </title>
        <meta http-equiv="Content-Type" content="text/php; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="koneksi.php"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDt-QZIfHk2E98xlo31dp-pggta0JTer4g&callback=initMap" type="text/javascript"></script> 
		<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
		<?php
			if(!empty($_GET['id'])){
				$sql_kec  	= "select * from kecamatan WHERE id_kecamatan = '".$_GET['id']."' order by id_kecamatan";
			}else{
				$sql_kec  	= "select * from kecamatan order by id_kecamatan";
			}
			$qry_kec 	= mysql_query($sql_kec);
			$kec = mysql_fetch_assoc($qry_kec);
			// var_dump($kec);
			
			if(!empty($_GET['id'])){
				$query  	= "select * from db_datakelompok WHERE id_kecamatan = ".$_GET['id'];
				$zoom = 12;
			}else{
				$query  	= "select * from db_datakelompok order by id_kecamatan";
				$zoom = 10;
			}
			
			$result 	= mysql_query($query) or die(mysql_error());
			
			$str = '';
			while($kel = mysql_fetch_assoc($result)){
				// var_dump($kel);
				if($kel['latitude'] != '0.000000' || $kel['longitude'] != '0.000000'){
					$str .='['.$kel['latitude'].','.$kel['longitude'] .', "'. $kel['nama'].'", "'.$kel['alamat'].'"],';
				}
			}
			$str = trim($str, ',');
			// var_dump($str);
			
			
		 ?>
		
		<script type="text/javascript">
    
		$(function(){
			
			initMap();
		});
		 function initMap() {
			var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			var labelIndex = 0;
			var lokalisasi = {lat: <?php echo $kec['lat']?>, lng: <?php echo $kec['long']?>};
			var lok_marker = [<?php echo $str?>];
			console.log(lok_marker);
			var map = new google.maps.Map(document.getElementById('peta'), {
			  zoom: <?php echo $zoom?>,
			  center: lokalisasi
			});
			
			for(i=0; i<lok_marker.length; i++){
				var infowindow = new google.maps.InfoWindow({
					content: lok_marker[i][2] + ' adalah kelompok petani ikan yang beralamatkan di ' + lok_marker[i][3]
				});
				var marker = new google.maps.Marker({
				  position: {lat: lok_marker[i][0], lng: lok_marker[i][1]},
				  map: map,
				  label: labels[labelIndex++ % labels.length],
				  animation: google.maps.Animation.DROP,
				  title: lok_marker[i][2],
				  icon: 'img/icon.png'
				});
				marker.addListener('click', function() {
				infowindow.open(map, marker);
			});
			}
		}

	</script>
  </head>
  <body >
      <div id="kanvas">
          <div id="header"></div>
          <div id="menu">   
              <ul class ="nav">
                  <li><a href="index.php">Beranda</a></li>
                  <li><a href="index-1.php">Komoditas</a></li>
                  <li><a href="index-2.php">Data Kelompok</a></li>
				  <li><a href="grafik.php">Grafik</a></li>
                  <li><a href="index-3.php">Login Staff</a></li>
				  
              </ul>          
          </div>
		 <div id="komoditas">
              <div class="isibar">
				<center>KECAMATAN</center>
                <ul>
				
					<?php
						$kecamatan = mysql_query("SELECT * FROM  kecamatan ORDER By nama ASC ");
						while($k = mysql_fetch_array($kecamatan)){
					?>
				
						<li><a href="index.php?id=<?php echo $k['id_kecamatan']?>" id="lokasi" data-lokasi="<?php echo"$k[nama]";?>" ><?php echo"$k[nama]";?></a></li>
					
					<?php } ?>
                </ul>
              </div>
          </div> 
          
		
          <div id="content">
              <div class="content">
                      <table>
                        <div id="peta" style="width: 820px; height: 390px;float:center"></div>
              </div>
          </div>  
         
          <div style="clear: both"></div>
          
  </body>
</html>