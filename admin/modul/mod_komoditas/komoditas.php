<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else { ?>

		<?php
			$aksi="modul/mod_komoditas/aksi_komoditas.php";
			switch($_GET[act]){
				default:
		?>
		
		<!-- Daftar komoditas -->	
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Daftar Komoditas
								<button type="button" class="btn btn-default pull-right tambah" onclick="location.href='?module=komoditas&act=insertnew'">Tambah Data</button>
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama Komoditas</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
										
											<?php 	
												$no=1;
												$komoditas= mysql_query("SELECT * FROM komoditas ORDER BY id_komoditas DESC") or die(mysql_error());
												while($m=mysql_fetch_array($komoditas)){
												
												
												?>
												<tr>  
													<td><?php echo"$no" ?></td> 
													<td><?php echo"$m[nama]" ?></td>
													
													<td class="center">
														<a href="<?php echo"?module=komoditas&act=edit&id=$m[id_komoditas]";?>">
														<button type="button" class="btn btn-primary">Edit</button></a>
														
														<a href="<?php echo"$aksi?module=komoditas&act=hapus&id=$m[id_komoditas]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><button type="button" class="btn btn-primary">Hapus</button></a>
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
                        <h1 class="page-header"><small>Tambah Komoditas </small></h1>
                    </div>				
					
					<div class="col-lg-12">
						<div class="panel panel-default">
							<form role="form" method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=komoditas&act=insertnew'>
								<div class="form-group">
									<label>Nama Komoditas</label>
									<input class="isi form-control" name="nama" type="text">
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
				
				<!-- Edit Halaman -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><small>Edit Data </small></h1>
                    </div>
					
					<div class="col-lg-12">
						<div class="panel panel-default">
							<form role="form" method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=komoditas&act=update'>
								<input type='hidden' name='id' value='<?php echo"$r[id_komoditas]" ?>'>
								
									<div class="form-group">
										<label>Nama Komoditas</label>
										<input class="isi form-control" name="nama" type="text" value="<?php echo"$r[nama]" ?>">
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