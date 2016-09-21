<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
  
	
	
}else{ 

	$db_datakelompok= mysql_query("SELECT * FROM db_datakelompok WHERE id=". $_GET['id'] ." ORDER BY id DESC") or die(mysql_error());
	$kelompok = mysql_fetch_assoc($db_datakelompok);
	
	$sql = '
		SELECT
			a.`hasil_panen`
			b.`nama` AS `nama_kelompok`,
			c.`nama` AS `nama_komoditas`,
			
		FROM `subkomoditas` a
		JOIN db_datakelompok b ON b.`id` = a.`id_datakelompok`
		JOIN `komoditas` c ON c.`id_komoditas` = a.`id_komoditas`
		WHERE b.`id` ='. $kelompok['id'];	
	$komoditas_sql = mysql_query($sql);
	// var_dump(mysql_fetch_assoc($komoditas_sql));
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><small>Detail Data</small></h1>
    </div>

	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="form-group">
				<label>Kelompok</label>
				<label class="form-control"><?php echo $kelompok['nama']?></label>
			</div>
			
			<div class="form-group">
				<label>Komoditas</label>
				<table>
					<?php
						$no=1;
						while($komoditas = mysql_fetch_assoc($komoditas_sql)){
							echo '
								<tr>
									<td width="20px">'.$no.'</td>
									<td>'.$komoditas['nama_komoditas'].'</td>
									<td>'.$komoditas['hasil_panen'].' Kg</td>
								</tr>
							';
							$no++;
						}
					
					?>
					
				</table>
			</div>
			
				<a href="media.php?module=edit_komoditas_kelompok&id=<?php echo $_GET['id'];?>"><button class="btn btn-default">Edit Komoditas</button></a>
				<button type="button" class="btn btn-default" onclick='self.history.back()'>Kembali</button>
		</div>
	</div>
</div>

<?php



}



?>

		