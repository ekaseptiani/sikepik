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
		//AIzaSyCUE80J-YGPmnKCtOXVcxklDdAq-dKrc5c
							if(!empty($_GET['id'])){
								$sql_kec  	= "select * from kecamatan WHERE id_kecamatan = '".$_GET['id']."' order by id_kecamatan";
							}else{
								$sql_kec  	= "select * from kecamatan order by id_kecamatan";
							}
							$qry_kec 	= mysql_query($sql_kec);
							$kec = mysql_fetch_assoc($qry_kec);
							var_dump($kec);
							
					  ?>
		
		<script type="text/javascript">
    
		$(function(){
			initMap();
		});
		 function initMap() {
			var lokalisasi = {lat: -7.802726, lng: 110.438125};
			var map = new google.maps.Map(document.getElementById('peta'), {
			  zoom: 15,
			  center: lokalisasi
			});
			var marker = new google.maps.Marker({
			  position: lokalisasi,
			  map: map,
			  icon: 'img/icon.png'
			});
		  } 
		

	</script>
  </head>
  <body >	
          <div id="content">
              <div class="content">
                      <table>
                       <center> <div id ="peta" style="width: 820px; height: 390px;float:center"></div>
              </div>
          </div>  
          <div style="clear: both"></div>
          
  </body>
</html>