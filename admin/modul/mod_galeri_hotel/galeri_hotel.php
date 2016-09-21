<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else { ?>
		
		<?php
		$aksi="modul/mod_galeri_hotel/aksi_galeri_hotel.php";
		switch($_GET[act]){
			default:
		?>
		
		<!-- Daftar galeri_hotel -->	
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Daftar Galeri
								<button type="button" class="btn btn-default pull-right tambah" onclick="location.href='?module=galeri_hotel&act=insertnew&id=<?php echo $_GET['id']?>'">Tambah Data</button>
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>No</th>
												<th>Gambar</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
										
											<?php 	
												$no=1;
												$gambar=mysql_query("SELECT * FROM galeri WHERE id_hotel='$_GET[id]'");
												while ($m=mysql_fetch_array($gambar)){
											?>
												<tr>  
													<td><?php echo"$no" ?></td> 
													<td><img width="100px" src="../webmage/galeri/<?php echo"$m[gambar]" ?>"></td> 
													
													<td class="center">
														<a href="<?php echo"$aksi?module=galeri_hotel&act=hapus&id=$m[id_galeri]&idn=$_GET[id]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><button type="button" class="btn btn-primary">Hapus</button></a>
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
                        <h1 class="page-header"><small>Tambah Data </small></h1>
                    </div>
					
					<div class="col-lg-12">
						<div class="panel panel-default">
							<form role="form" method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=galeri_hotel&act=insertnew'>
								<input type='hidden' name='id' value='<?php echo $_GET['id']; ?>'>
								
								<div class="form-group">
									<label>Gambar</label>
									<input type="file" name="fupload">
									<p>* Ukuran Gambar : 650 x 433 px</p>
								</div>
								
								<button type="submit" class="btn btn-default">Save</button>
								<button type="button" class="btn btn-default" onclick='self.history.back()'>Kembali</button>
							</form>
						</div>
					</div>
                </div>
				
				<?php	
		break;
		} ?>
<?php } ?>