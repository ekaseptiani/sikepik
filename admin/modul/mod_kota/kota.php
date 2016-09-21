<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else { ?>
		
		<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
	
		<script type="text/javascript">
		tinymce.init({
				selector: "textarea",
				plugins: "table",
				tools: "inserttable",
				plugins: [
					"advlist autolink lists link image charmap print preview anchor",
					"searchreplace visualblocks code fullscreen",
					"insertdatetime media table contextmenu paste jbimages",
					"textcolor",
					"autoresize",
					"pagebreak"
				],

				//toolbar: "pagebreak save charmap advhr| insertfile undo redo | styleselect,formatselect,fontselect,fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages | print preview media | forecolor backcolor emoticons | anchor",
				toolbar:"pagebreak save charmap| insertfile undo redo | styleselect formatselect fontselect fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | jbimages | print preview media | forecolor backcolor emoticons | justifyleft justifycenter justifyright justifyfull | cut copy paste pastetext pasteword | search replace | blockquote |link unlink anchor image cleanup help code | insertdate inserttime preview | tablecontrols | hr removeformat visualaid | sub sup | iespell media advhr | print | ltr rtl | fullscreen | insertlayer moveforward movebackward absolute |styleprops spellchecker | cite abbr acronym del ins attribs | visualchars nonbreaking template | insertimage",
				relative_urls: false
		 });
		</script>
		<!-- /TinyMCE -->
		
		
		<?php
		$aksi="modul/mod_kota/aksi_kota.php";
		switch($_GET[act]){
			default:
		?>
		
		<!-- Daftar kota -->	
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Daftar Kecamatan / Kota
								<button type="button" class="btn btn-default pull-right tambah" onclick="location.href='?module=kota&act=insertnew'">Tambah Data</button>
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama</th>
												<th>Long</th>
												<th>Lat</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
										
											<?php 	
												$no=1;
												$kota = mysql_query("SELECT * FROM kecamatan ORDER BY id_kecamatan DESC");
												while($m=mysql_fetch_array($kota)){
												
												
												?>
												<tr>  
													<td><?php echo"$m[id_kecamatan]" ?></td>
													<td><?php echo"$m[nama]" ?></td>
													<td><?php echo"$m[long]" ?></td>
													<td><?php echo"$m[lat]" ?></td>
													
													<td class="center">
														<a href="<?php echo"?module=kota&act=edit&id=$m[id_kecamatan]";?>">
														<button type="button" class="btn btn-primary">Edit</button></a>
														
														<a href="<?php echo"$aksi?module=kota&act=hapus&id=$m[id_kecamatan]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><button type="button" class="btn btn-primary">Hapus</button></a>
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
                        <h1 class="page-header"><small>Tambah Kecamatan / Kota </small></h1>
                    </div>
					
					<div class="col-lg-12">
						<div class="panel panel-default">
							<form role="form" method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=kota&act=insertnew'>
								<div class="form-group">
									<label>Nama Kecamatan / Kota</label>
									<input class="isi form-control" name="nama" type="text">
									<label>Long</label>
									<input class="isi form-control" name="long" type="text">
									<label>Lat</label>
									<input class="isi form-control" name="lat" type="text">
								</div>
								
								<button type="submit" class="btn btn-default">Save</button>
								<button type="button" class="btn btn-default" onclick='self.history.back()'>Kembali</button>
							</form>
						</div>
					</div>
                </div>
				
		<?php break; 
			case"edit":
				$kota = mysql_query("SELECT * FROM kecamatan WHERE id_kecamatan='$_GET[id]'");
				$r=mysql_fetch_array($kota);
				// var_dump($r);
				
	
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
							<form role="form" method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=kota&act=update'>
								<input type='hidden' name='id' value='<?php echo $r['id_kecamatan'] ?>'>
								
									<div class="form-group">
										<label>Nama Kecamatan / Kota</label>
										<input class="isi form-control" name="nama" type="text" value='<?php echo $r['nama'] ?>'>
										<label>Long</label>
										<input class="isi form-control" name="long" type="text" value='<?php echo $r['long'] ?>'>
										<label>Lat</label>
										<input class="isi form-control" name="lat" type="text" value='<?php echo $r['lat'] ?>'>
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