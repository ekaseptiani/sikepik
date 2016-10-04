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
				$zoom = 11;
			}
			
			$result 	= mysql_query($query) or die(mysql_error());
			
			$str = '';
			$id_str = '';
			while($kel = mysql_fetch_assoc($result)){
				// var_dump($kel);
				if($kel['latitude'] != '0.000000' || $kel['longitude'] != '0.000000'){
					$str .='['.$kel['latitude'].','.$kel['longitude'] .', "'. $kel['nama'].'", "'.$kel['alamat'].'", '. $kel['no_hp'].', '. $kel['id'].'], ';
					// $str_view .= '["<table><tr><td>Kelompok</td><td>:</td><td>'. $kel['nama'] .'</td></tr><tr><td>Alamat</td><td>:</td><td>'. $kel['alamat'] .'</td></tr><tr><td>Telp.</td><td>:</td><td>'. $kel['no_hp'] .'</td></tr></table>"],';
					
					$id_str .= '"'. $kel['id']  .'",';
				}
			}
			$str = trim($str, ',');
			$id_str = trim($id_str, ',');
			$sql_komoditas = "
			SELECT 
				a.`nama`,
				a.`id`,
				c.`nama`
			FROM db_datakelompok a
			LEFT JOIN subkomoditas b ON b.`id_datakelompok` = a.`id`
			LEFT JOIN komoditas c ON c.`id_komoditas` = b.`id_komoditas`
			WHERE a.`id` IN ($id_str)
			ORDER BY a.`id`
			";
			$sql_komoditas_exec = mysql_query($sql_komoditas) or die(mysql_error());
			$komoditas = '';
			while($kom = mysql_fetch_assoc($sql_komoditas_exec)){
				$nama_kom = !empty($kom['nama'])?$kom['nama']:'-';
				$komoditas .= '['. $kom['id'].', "'. $nama_kom .'"],';
			}
			$komoditas = trim($komoditas, ',');
			// var_dump($komoditas);
			
			
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
			var komoditas = [<?php echo $komoditas?>];
			var map = new google.maps.Map(document.getElementById('peta'), {
			  zoom: <?php echo $zoom?>,
			  center: lokalisasi
			});
			var infowindow = new google.maps.InfoWindow({
					content: ''
				});
			var kom = {};
			var size = 0;
			for(i=0; i<komoditas.length; i++){
				kom[i] = {'id_kelompok':komoditas[i][0], 'komoditas':komoditas[i][1]};
				size++;
			}
			
			for(i=0; i<lok_marker.length; i++){
				var kom_str = [];
				for(j=0; j<size; j++){
					if(kom[j]['id_kelompok'] == lok_marker[i][5]){
						kom_str.push(kom[j]['komoditas']);
					}
				}
				var desc = '<div id="content" style="border-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); width: 300px; height: 180px;">' +
								'<div id="siteNotice">' +
								'</div>' +
								'<h3 id="firstHeading" class="firstHeading">'+ lok_marker[i][2] +'</h3>'+
								'<div id="bodyContent">'+
									'<p>Alamat : '+ lok_marker[i][3] +'</p>'+
									'<p>Nomor Kontak : '+ lok_marker[i][4] +'</p>'+
									'<p>KOmoditas : '+ kom_str +'</p>'+
								'</div>'+
							'</div>';
				var marker = new google.maps.Marker({
				  position: {lat: lok_marker[i][0], lng: lok_marker[i][1]},
				  map: map,
				  label: labels[labelIndex++ % labels.length],
				  animation: google.maps.Animation.DROP,
				  title: lok_marker[i][2],
				  icon: 'img/icon.png'
				});
				bindInfoWindow(marker, map, infowindow, desc);
			}
		}
	function bindInfoWindow(marker, map, infowindow, description, desc) {
		marker.addListener('click', function() {
        infowindow.setContent(description);
        infowindow.open(map, this);
    });
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
                  <li><a href="../sikepik/admin/index.php">Login Staff</a></li>
				  
              </ul>          
			  <div style="float:right">
					<form action="index-2.php" method="POST">
						<input type="text" name="key" placeholder="Cari Kelompok....">
						<input type="submit" value="cari">
					</form>
			  </div>
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