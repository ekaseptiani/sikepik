<?php 
	include "koneksi.php"; 
	$id = null;
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
	}
	
?>

<!DOCTYPE html>
<html>

<head>
    <title>s i k e p i k</title>
    <meta http-equiv="Content-Type" content="text/php; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
	<style>
		.hide{
			visibility: hidden;
		}
	</style>
</head>

<body>
    <div id="kanvas">
        <div id="header">
            <div class="judul">
                <center></div>
            <div class="deskripsi">
                <center></div>
        </div>
        <div id="menu">   
              <ul class ="nav">
                  <li><a href="index.php">Beranda</a></li>
                  <li><a href="index-1.php">Komoditas</a></li>
                  <li><a href="index-2.php">Data Kelompok</a></li>
				  <li><a href="grafik.php">Grafik</a></li>
                  <li><a href="../baru/admin/index.php">Login Staff</a></li>
				  
              </ul>
        </div>
       
		<?php
			include("sidebarKecamatan.php");
		?>
	   
        <div id="datakelompok">
                <div class="isitabel"> 
                    <div class="kosong">
					<table border="1" >
                        <tr="ztr">
                            <th class="zth">No</th>
                            <th class="zth">Nama</th>
                            <th class="zth">Alamat</th>
                            <th class="zth">No.Hp</th>
							<th class="zth">Komoditas</th>
							<th class="zth">Lokasi</th>
							
							
                            <tr="ztr">
							
                                <?php 
									$i=1; 
									$qry_txt = "SELECT * FROM db_datakelompok WHERE 1=1 ---src---";
									$str = '';
									if(!is_null($id)){
										$str .= ' AND id_kecamatan ='. $id; 
									}
									$qry_txt = str_replace('---src---', $str, $qry_txt);									
									$query=mysql_query($qry_txt); 
									while($data=mysql_fetch_array($query, MYSQL_ASSOC)) {
										$hide = '';
										if($data['latitude'] == '0.000000' || $data['longitude'] == '0.000000'){
											$hide = 'hide';
										}
										$sql = '
											SELECT
												b.`nama` AS `nama_kelompok`,
												c.`nama` AS `nama_komoditas`
											FROM `subkomoditas` a
											JOIN db_datakelompok b ON b.`id` = a.`id_datakelompok`
											JOIN `komoditas` c ON c.`id_komoditas` = a.`id_komoditas`
											WHERE b.`id` ='. $data['id'];
										
										$exec_sql = mysql_query($sql);
										$komoditas = '';
										while($result = mysql_fetch_assoc($exec_sql)){
											$komoditas .= $result['nama_komoditas'] .', ';
										}
								?>
										
										<tr claas='ztr'>
											<td class='ztd'><?php echo"$i"; ?></td>
											<td class='ztd'><?php echo"$data[nama]"; ?></td>
											<td class='ztd'><?php echo"$data[alamat]"; ?></td>
											<td class='ztd'><?php echo"$data[no_hp]"; ?></td>
											<td class='ztd'><?php echo $komoditas; ?></td>
											<td class='ztd'>
												<a href="sidebarKelompok.php?id=<?php echo $data['id']?>" target="_balnk"><button class="button <?php echo $hide?>">Lihat Lokasi</button></a>
											</td>
											
										</tr>
										
								<?php $i++;}  ?>
									
					</table>
                </div>
            </div>
        </div>
        <div style="clear: both"></div>
        <div id="footer">
            <div class=""><center>Copyright ekaseptiyani 2016 &nbsp;
            </div>
        </div>
    </div>
</body>
</html>