<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
  
	
	
}else{ 
	if(!empty($_POST)){
		// var_dump($_POST);die;
		
		//delete subkomoditas
		$sql_del = "DELETE FROM subkomoditas WHERE id_datakelompok=". $_POST['kelompok'];
		$del = mysql_query($sql_del);
		if($del){
			//insert data komoditas  baru
			foreach($_POST['komoditas'] as $val){
				$sql_insert = "
					INSERT INTO subkomoditas (id_datakelompok, id_komoditas, hasil_panen) VALUES ('". $_POST['kelompok'] ."', '". $val ."', '". $_POST['jml_komoditas'][$val]."');
				";
				
				$insert = mysql_query($sql_insert) or die(mysql_error());
			}
		}
		if($insert){
			echo"
				<script>
					if(confirm('berhasil mengubah data!')){
						window.location = 'media.php?module=db_datakelompok';
					}else{
						window.locatioin = 'media.php?module=edit_komoditas_kelompok&id=". $_GET['id'] ."?>';
					}
				</script>			
			";	
		}		
	}

	$db_datakelompok= mysql_query("SELECT * FROM db_datakelompok WHERE id=". $_GET['id'] ." ORDER BY id DESC") or die(mysql_error());
	$kelompok = mysql_fetch_assoc($db_datakelompok);
	
	$sql = '
		SELECT
			b.`nama` AS `nama_kelompok`,
			c.`nama` AS `nama_komoditas`,
			c.`id_komoditas`,
			a.`hasil_panen`
		FROM `subkomoditas` a
		JOIN db_datakelompok b ON b.`id` = a.`id_datakelompok`
		JOIN `komoditas` c ON c.`id_komoditas` = a.`id_komoditas`
		WHERE b.`id` ='. $kelompok['id'];	
	$komoditas_sql = mysql_query($sql);
	while($komoditas = mysql_fetch_assoc($komoditas_sql)){
		$komoditi[] = array(
			'id' => $komoditas['id_komoditas'],
			'nama' => $komoditas['nama_komoditas'],
			'jml_komoditi' => $komoditas['hasil_panen']
		);
	}
	// var_dump($komoditi);
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><small>Detail Data</small></h1>
    </div>

	<div class="col-lg-12">
		<div class="panel panel-default">
			<form action="media.php?module=edit_komoditas_kelompok&id=<?php echo $kelompok['id']?>" method="POST">
				<input type="hidden" value="<?php echo $kelompok['id']?>" name="kelompok" >
				<div class="form-group">
					<label>Kelompok</label>
					<label class="form-control"><?php echo $kelompok['nama']?></label>
				</div>
				<div class="form-group">
					<label>Tanggal Didaftarkan</label>
					<input type="date" name="periode" class="form-control">
				</div>
					
				<div class="form-group">
					<label>Komoditas</label>
					<table>
						<?php
							$no=1;
							$sql_kom = mysql_query("SELECT * FROM komoditas ORDER BY nama");
							while($x = mysql_fetch_assoc($sql_kom)){
								$cek='';
								$hsl= '';
								foreach($komoditi as $val){
									
									if($val['id'] == $x['id_komoditas']){
										$cek= 'checked';
										$hsl= $val['jml_komoditi'];
									}									
								}
								
								echo '
									<tr>
										<td>
											<label>
												<input type="checkbox" name="komoditas[]" value="'. $x['id_komoditas'].'" '. $cek .'> '.$x['nama'].'
											</label>
											
										</td>
										<td id="jml">
											<input type="number" name="jml_komoditas['. $x['id_komoditas'] .']" value="'.$hsl.'">
										</td>
									</tr>
									
								';
								$no++;
							}
						
						?>
						
					</table>
				</div>				
				<button type="submit" class="btn btn-default">Edit Komoditas</button>
				<button type="button" class="btn btn-default" onclick='self.history.back()'>Kembali</button>
			<form>
		</div>
	</div>
</div>
<?php

}

?>