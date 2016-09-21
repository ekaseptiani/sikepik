<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else { ?>


		<?php
		$aksi="modul/mod_sosmed/aksi_sosmed.php";
		switch($_GET[act]){
			default:
		?>
		
		<!-- Daftar sosmed -->	
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Daftar Sosial Media
								<button type="button" class="btn btn-default pull-right tambah" onclick="location.href='?module=sosmed&act=insertnew'">Tambah Data</button>
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama</th>
												<th>Link</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
										
											<?php 	
												$no=1;
												$sosmed = mysql_query("SELECT * FROM sosmed ORDER BY id_sosmed DESC");
												while($m=mysql_fetch_array($sosmed)){
												
												
												?>
												<tr>  
													<td><?php echo"$no" ?></td> 
													<td><?php echo"$m[nama]" ?></td>
													<td><?php echo"$m[link]" ?></td>
													
													<td class="center">
														<a href="<?php echo"?module=sosmed&act=edit&id=$m[id_sosmed]";?>">
														<button type="button" class="btn btn-primary">Edit</button></a>
														
														<a href="<?php echo"$aksi?module=sosmed&act=hapus&id=$m[id_sosmed]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><button type="button" class="btn btn-primary">Hapus</button></a>
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
							<form role="form" method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=sosmed&act=insertnew'>
								<div class="form-group">
									<label>Nama</label>
									<input class="isi form-control" name="nama" type="text">
								</div>
								
								<div class="form-group">
									<label>Link</label>
									<input class="isi form-control" name="link" type="text">
								</div>
								
								<button type="submit" class="btn btn-default">Save</button>
								<button type="button" class="btn btn-default" onclick='self.history.back()'>Kembali</button>
							</form>
						</div>
					</div>
                </div>
				
		<?php break; 
			case"edit":
				$sosmed = mysql_query("SELECT * FROM sosmed WHERE id_sosmed='$_GET[id]'");
				$r=mysql_fetch_array($sosmed);
		?>
		<?php
			switch($_GET[act2]){
				default:
		?>
				
				<!-- Edit Halaman -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><small>Edit Data </small></h1>
                    </div>
					
					<div class="col-lg-12">
						<div class="panel panel-default">
							<form role="form" method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=sosmed&act=update'>
								<input type='hidden' name='id' value='<?php echo"$r[id_sosmed]" ?>'>
								
								<div class="form-group">
									<label>Nama</label>
									<input class="isi form-control" name="nama" type="text" value="<?php echo"$r[nama]" ?>">
								</div>
								
								<div class="form-group">
									<label>Link</label>
									<input class="isi form-control" name="link" type="text" value="<?php echo"$r[link]" ?>">
								</div>
								
								<button type="submit" class="btn btn-default">Save</button>
								<button type="reset" class="btn btn-default" onclick='self.history.back()'>Kembali</button>
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