<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else { ?>

		<?php
			$aksi="modul/mod_db_datakelompok/aksi_db_datakelompok.php";
			switch($_GET[act]){
				default:
		?>
		
		<!-- Daftar kelompok -->	
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Data Kelompok
								<button type="button" class="btn btn-default pull-right tambah" onclick="location.href='?module=db_datakelompok&act=insertnew'">Tambah Data</button>
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>NO</th>
												<th>nama</th>
												<th>alamat</th>
												<th>no_hp</th>
												<th>komoditas</th>
												<th>id_kecamatan</th>
												<th>aksi</th>
											</tr>
										</thead>
										<tbody>
										
											<?php 	
												$no=1;
												$db_datakelompok= mysql_query("SELECT * FROM db_datakelompok ORDER BY id DESC") or die(mysql_error());
													while($m=mysql_fetch_array($db_datakelompok)){
														$sql = '
															SELECT
																b.`nama` AS `nama_kelompok`,
																c.`nama` AS `nama_komoditas`,
																a.`hasil_panen`
															FROM `subkomoditas` a
															JOIN db_datakelompok b ON b.`id` = a.`id_datakelompok`
															JOIN `komoditas` c ON c.`id_komoditas` = a.`id_komoditas`
															WHERE b.`id` ='. $m['id'];
														
														$exec_sql = mysql_query($sql);
														$komoditas = '';
														while($result = mysql_fetch_assoc($exec_sql)){
															$komoditas .= '<li>'. $result['nama_komoditas'] .' ('. number_format($result['hasil_panen']) .' kg)'.'</li>';
														}
												?>
												<tr>  
													<td><?php echo"$no" ?></td> 
													<td><?php echo"$m[nama]" ?></td>
													<td><?php echo"$m[alamat]" ?></td>
													<td><?php echo"$m[no_hp]" ?></td>
													<td><ul><?php echo $komoditas; ?></ul></td>
													<td><?php echo"$m[id_kecamatan]" ?></td>
													
													<td class="center">
														<a href="<?php echo"?module=db_datakelompok&act=edit&id=$m[id]";?>">
															<button type="button" class="btn btn-primary">Edit</button>
														</a>
														<a href="<?php echo"?module=detail_kelompok&id=$m[id]";?>">
															<button type="button" class="btn btn-primary">Komoditas</button>
														</a>														
														<a href="?module=hapus_datakelompok&id=<?php echo $m['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');">
															<button type="button" class="btn btn-primary">Hapus</button>
														</a>
													
													</td> 
												</tr> 
											<?php $no++; } ?>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
                </div>
			
			<!-- tambah data -->
			
			<?php break; 
				case"insertnew":
			?>
			
				<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><small>Tambah Data Kelompok</small></h1>
                    </div>
					
					<div class="col-lg-12">
						<div class="panel panel-default">
							<form role="form" method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=db_datakelompok&act=insertnew'>
								<div class="form-group">
									<label>Nama</label>
									<input class="isi form-control" name="nama" type="text">
									<label>Alamat</label>
									<input class="isi form-control" name="alamat" type="text">
									<label>No_hp</label>
									<input class="isi form-control" name="no_hp" type="text">									
									<label>Id_kecamatan</label>
									<input class="isi form-control" name="id_kecamatan" type="text">
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
								</div>
								<button type="submit" class="btn btn-default">Save</button>
								<button type="button" class="btn btn-default" onclick='self.history.back()'>Kembali</button>
							</form>
						</div>
					</div>
                </div>
				
		<?php break; 
			case"edit":
				$komoditas = mysql_query("SELECT * FROM komoditas WHERE id_komoditas='$_GET[id]'");
				$r=mysql_fetch_array($komoditas);
		?>
		<?php
			switch($_GET[act2]){
				default:
		?>
				
				<!-- Edit Data kelompok-->
				<?php
				if(!empty($_POST)){
					$sql_update_kel = "
						UPDATE `db_datakelompok` 
						SET 
						`nama`='". $_POST['nama'] ."',
						`alamat`='". $_POST['alamat'] ."',
						`no_hp`='". $_POST['no_hp'] ."',
						`id_kecamatan`='". $_POST['kecamatan'] ."'
						WHERE `id`='". $_POST['id'] ."'
					";
					$sql_update_kel_exec = mysql_query($sql_update_kel) or die(mysql_error());
					
					if($sql_update_kel_exec){
						$msg = 'Ubah data Berhasil !';
						$url = "media.php?module=db_datakelompok";
					}else{
						$msg = 'Ubah data Gagal !';
						$url = 'media.php?module=db_datakelompok&act=edit&id='. $_GET['id'];
					}
						echo '
							<script>
								if(confirm("'. $msg .'")){
									window.location = "'. $url .'";
								}else{
									window.location = "'. $url.'";
								}
							</script>
						';
				}
				$dt_kel = "SELECT * FROM db_datakelompok WHERE id=". $_GET['id'];
				$datakelompok = mysql_query($dt_kel);
				$s=mysql_fetch_assoc($datakelompok);
				?>
				
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><small>Edit Data </small></h1>
                    </div>
					
					<div class="col-lg-12">
						<div class="panel panel-default">
							<form role="form" method='POST' enctype='multipart/form-data' action="media.php?module=db_datakelompok&act=edit&id=<?php echo $_GET['id'];?>">
								<input type='hidden' name='id' value='<?php echo"$s[id]" ?>'>
								
									<div class="form-group">
										<label>Nama</label>
										<input class="isi form-control" name="nama" type="text" value="<?php echo"$s[nama]" ?>">
										<label>Alamat</label>
										<input class="isi form-control" name="alamat" type="text" value="<?php echo"$s[alamat]" ?>">
										<label>No_Hp</label>
										<input class="isi form-control" name="no_hp" type="text" value="<?php echo"$s[no_hp]" ?>">											
										<label>Kecamatan</label>
										<?php
											$sql_kec = "SELECT * FROM kecamatan ORDER BY nama";
											$sql_kec_exec = mysql_query($sql_kec) or die(mysql_error());
											// var_dump($sql_kec, $sql_kec_exec);
										?>
										<select name="kecamatan" class="isi form-control">
											<option value="">---PILIH---</option>
											<?php
												
												while($kec = mysql_fetch_assoc($sql_kec_exec)){
													$cek = '';
													if($kec['id_kecamatan'] == $s['id_kecamatan']){
														$cek = 'selected';
													}
													echo '
														<option value="'. $kec['id_kecamatan'] .'" '. $cek .'>'. $kec['nama'] .'</option>
													';
													
												}
											?>
										</select>
										
									</div>
								
									<button type="submit" class="btn btn-default">Save</button>
									<button type="button" class="btn btn-default" onclick='self.history.back()'>Kembali</button>
							</form>
						</div>
					</div>
                </div>
				
			<?php	
			break;
			
			}
			
		break;
		 } ?>
<?php } ?>