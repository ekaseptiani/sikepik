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
		<!--<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyCbObu67RtxzrOsuCgS-bhppjBpEjOWjWo" type="text/javascript"></script> -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<?php
							if(!empty($_GET['id'])){
								$sql_kec  	= "select * from kecamatan WHERE id_kecamatan = '".$_GET['id']."' order by id_kecamatan";
							}else{
								$sql_kec  	= "select * from kecamatan order by id_kecamatan";
							}
							$qry_kec 	= mysql_query($sql_kec);
							$kec = mysql_fetch_assoc($qry_kec);
							// var_dump($kec);
							
					  ?>
		
		<script type="text/javascript">
    
	(function() {
				  window.onload = function() {
					var map;
					//Parameter Google maps
					var options = {
					  zoom: 13, //level zoom
					  //posisi tengah peta
					  
					  center: new google.maps.LatLng(<?php echo $kec['lat']?>, <?php echo $kec['long']?>),
					  mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					
					 // Buat peta di 
					var map = new google.maps.Map(document.getElementById('peta'), options);
					 // Tambahkan Marker 
					 var locations = [
						<?php
							if(!empty($_GET['id'])){
								$query  	= "select * from kecamatan WHERE id_kecamatan = '".$_GET['id']."' order by id_kecamatan";
							}else{
								$query  	= "select * from kecamatan order by id_kecamatan";
							}
							$result 	= mysql_query($query);
							$totalRow 	= mysql_num_rows( $result );
							
							if ($totalRow==0) {
						?>
							<p>Not Data Yet</p>
						<?php  
						}else{
							while($data=mysql_fetch_array($result)) {
								$id_kec	= $data["id_kecamatan"];
								$nama	= $data["nama"];
								$long	= $data["long"];
								$lang	= $data["lat"];		
						?>
						['<li><a href="index-2.php?id=<?php echo "$id_kec"?>"><?php echo "$nama";?></li><img  width="95" height="500"  src = "../foto/<?php echo "$gambar"; ?>"></img></a>',
							<?php echo $lang; ?>, 
							<?php echo $long; ?>
						],
	  
	  		<?php 
	  		

				} //-- While
			}
		?>
		
					];
					  var infowindow = new google.maps.InfoWindow();

					var marker, i;
					 /* kode untuk menampilkan banyak marker */
					for (i = 0; i < locations.length; i++) {  
					  marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						 icon: 'img/icon.png'
					  });
					 /* menambahkan event clik untuk menampikan
						 infowindows dengan isi sesuai denga
						marker yang di klik */
						
					  google.maps.event.addListener(marker, 'click', (function(marker, i) {
						return function() {
						  infowindow.setContent(locations[i][0]);
						  infowindow.open(map, marker);
						}
					  })(marker, i));
					}
				  

				  };
				})();

	</script>
  </head>
  <body >
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