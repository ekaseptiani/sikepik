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
		$aksi="modul/mod_wisata/aksi_wisata.php";
		switch($_GET[act]){
			default:
		?>
		
		<!-- Daftar wisata -->	
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Daftar Tempat Wisata
								<button type="button" class="btn btn-default pull-right tambah" onclick="location.href='?module=wisata&act=insertnew'">Tambah Data</button>
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>No</th>
												<th>Gambar</th>
												<th>Nama Wisata</th>
												<th>Kategori</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
										
											<?php 	
												$no=1;
												$wisata = mysql_query("SELECT * FROM wisata ORDER BY id_wisata DESC");
												while($m=mysql_fetch_array($wisata)){
												
												
												?>
												<tr>  
													<td><?php echo"$no" ?></td> 
													<td><img width="100px" src="../webmage/wisata/<?php echo"$m[gambar]" ?>"></td> 
													<td><?php echo"$m[judul]" ?></td>
													<td><?php echo"$m[kategori]" ?></td>
													<td><?php echo"$m[status]" ?></td>
													
													<td class="center">
														<a href="<?php echo"?module=wisata&act=edit&id=$m[id_wisata]";?>">
														<button type="button" class="btn btn-primary">Edit</button></a>
														
														<a href="<?php echo"$aksi?module=wisata&act=hapus&id=$m[id_wisata]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><button type="button" class="btn btn-primary">Hapus</button></a>
														
														<a href="<?php echo"?module=galeri&id=$m[id_wisata]";?>"><button type="button" class="btn btn-primary">Galeri</button></a>
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
						<div class="panel panel-default col-lg-12">
							<form role="form" method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=wisata&act=insertnew'>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Nama Wisata</label>
										<input class="form-control" name="judul" type="text">
									</div>
									
									<div class="form-group">
										<label>HTM</label>
										<input class="form-control" name="htm" type="text">
									</div>
									
									<div class="form-group">
										<label>Jam Operasional</label>
										<input class="form-control" name="jam" type="text">
									</div>
									
									<div class="form-group">
										<label>Alamat Wisata</label>
										<input class="form-control" name="alamat" type="text">
									</div>
									
									<div class="form-group">
										<label>Kabupaten/Kota</label>
										<select class="isi form-control" name="kota">
											<option value=0>Pilih Kabupaten/Kota</option>
											<?php
												$tampil=mysql_query("SELECT * FROM kota ORDER BY nama ASC");
												while($w=mysql_fetch_array($tampil)){
												echo "<option value=$w[id_kota]>$w[nama]</option>";
												}
											?>
										</select>
									</div>
									
									<div class="form-group">
										<label>Status</label>
										<div class="radio">
											<label><input type="radio" id="optionsRadios1" name="status" value="none">None</label>
										</div>
										<div class="radio">
											<label><input type="radio" id="optionsRadios2" name="status" value="recomended">Recomended</label>
										</div>
									</div>
									
									
								</div>
								<div class="col-lg-6">
									
									<div class="form-group">
										<label>Kategori</label>
										<div class="radio">
											<label><input type="radio" id="optionsRadios3" name="kategori" value="alam">Alam</label>
										</div>
										<div class="radio">
											<label><input type="radio" id="optionsRadios4" name="kategori" value="sejarah">Sejarah</label>
										</div>
										<div class="radio">
											<label><input type="radio" id="optionsRadios5" name="kategori" value="kuliner">Kuliner</label>
										</div>
									</div>
									
									<div class="form-group">
										<label>Fasilitas</label>
										<?php
											$fasilitas=mysql_query("SELECT * FROM fasilitas ORDER BY nama ASC");
												while($f=mysql_fetch_array($fasilitas)){
												echo "<div class='checkbox'><label><input name='fasilitas[]' type='checkbox' value='$f[id_fasilitas]'> $f[nama]</label></div>";
												}
										?>
									</div>
									
									<div class="form-group">
										<label>Longitude</label>
										<input class="form-control" name="longitude" type="text">
									</div>
									
									<div class="form-group">
										<label>Latitude</label>
										<input class="form-control" name="latitude" type="text">
									</div>
									
								</div>
								
								<div class="col-lg-12">
									
									<div class="form-group">
										<label>Peta Lokasi</label>
										<input class="form-control" name="peta" type="text" style="height: 110px;">
									</div>
									
									<div class="form-group">
										<label>Keterangan</label>
										<textarea class="isi form-control" name="keterangan" rows="12" type="text"></textarea>
									</div>
									
									<div class="form-group">
										<label>Gambar</label>
										<input type="file" name="fupload">
										<p>* Ukuran Gambar : 650 x 433 px</p>
									</div>
								
									<button type="submit" class="btn btn-default">Save</button>
									<button type="button" class="btn btn-default" onclick='self.history.back()'>Kembali</button>
								</div>
							</form>
						</div>
					</div>
                </div>
				
		<?php break; 
			case"edit":
				$wisata = mysql_query("SELECT * FROM wisata WHERE id_wisata='$_GET[id]'");
				$r=mysql_fetch_array($wisata);
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
						<div class="panel panel-default col-lg-12">
							<form role="form" method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=wisata&act=update'>
								<input type='hidden' name='id' value='<?php echo"$r[id_wisata]" ?>'>
								
								<div class="col-lg-6">
									<div class="form-group">
										<label>Nama Wisata</label>
										<input class="form-control" name="judul" type="text" value="<?php echo"$r[judul]" ?>">
									</div>
									
									<div class="form-group">
										<label>HTM</label>
										<input class="form-control" name="htm" type="text" value="<?php echo"$r[htm]" ?>">
									</div>
									
									<div class="form-group">
										<label>Jam Operational</label>
										<input class="form-control" name="jam" type="text" value="<?php echo"$r[jam]" ?>">
									</div>
									
									<div class="form-group">
										<label>Alamat Wisata</label>
										<input class="form-control" name="alamat" type="text" value="<?php echo"$r[alamat]" ?>">
									</div>
									
									<div class="form-group">
										<label>Kota</label>
										<?php
											echo"<select class='isi form-control' name='kota'>";
									
												$tampil=mysql_query("SELECT * FROM kota ORDER BY nama ASC");
												if ($r[id_kota]==0){
													echo "<option value=0 selected>- Pilih Kota -</option>";
												}   

												while($w=mysql_fetch_array($tampil)){
													if ($r[id_kota]==$w[id_kota]){
													echo "<option value=$w[id_kota] selected>$w[nama]</option>";
													}
													else{
													echo "<option value=$w[id_kota]>$w[nama]</option>";
													}
												}
													echo "</select>";
										?>
									</div>
									
									<div class="form-group">
										<label>Status Iklan</label>
											<?php if($r['status'] == 'none'){ ?>
													<input type="radio" name="status" value="none" checked> <span>None</span>
													<input type="radio" name="status" value="recomended">  <span>Recomended</span>
											<?php } else { ?>
													<input type="radio" name="status" value="none"> <span>None</span>
													<input type="radio" name="status" value="recomended" checked>  <span>Recomended</span>
											<?php } ?>
									</div>
									
									<div class="form-group">
										<label>Kategori</label>
											<?php if($r['kategori'] == 'alam'){ ?>
												<input type="radio" name="kategori" value="alam" checked> <span>Alam</span>
												<input type="radio" name="kategori" value="sejarah">  <span>Sejarah</span>
												<input type="radio" name="kategori" value="kuliner">  <span>Kuliner</span>
											<?php } elseif($r['kategori'] == 'sejarah'){ ?>
												<input type="radio" name="kategori" value="alam"> <span>Alam dan Fauna</span>
												<input type="radio" name="kategori" value="sejarah" checked>  <span>Sejarah</span>
												<input type="radio" name="kategori" value="kuliner">  <span>Kuliner</span>
											<?php } else { ?>
												<input type="radio" name="kategori" value="alam"> <span>Alam dan Fauna</span>
												<input type="radio" name="kategori" value="sejarah">  <span>Sejarah</span>
												<input type="radio" name="kategori" value="kuliner" checked>  <span>Kuliner</span>
											<?php } ?>
									</div>
									
								</div>
								<div class="col-lg-6">
									
									<div class="form-group">
										<label>Fasilitas</label>
										<?php
											$fasilitas=mysql_query("SELECT * FROM fasilitas ORDER BY nama ASC");
												while($f=mysql_fetch_array($fasilitas)){
													
													$subfasilitas=mysql_query("SELECT * FROM subfasilitas WHERE id_wisata ='$_GET[id]' AND id_fasilitas='$f[id_fasilitas]'");
													$sf=mysql_num_rows($subfasilitas);

													if($sf == 0){
														echo "<div class='checkbox'><label><input name='fasilitas[]' type='checkbox' value='$f[id_fasilitas]'> $f[nama]</label></div>";
													}else {
														echo "<div class='checkbox'><label><input name='fasilitas[]' type='checkbox' value='$f[id_fasilitas]' checked> $f[nama]</label></div>";
													}
												}
										?>
									</div>
									
									<div class="form-group">
										<label>Longitude</label>
										<input class="form-control" name="longitude" type="text" value="<?php echo"$r[longitude]" ?>">
									</div>
									
									<div class="form-group">
										<label>Latitude</label>
										<input class="form-control" name="latitude" type="text" value="<?php echo"$r[latitude]" ?>">
									</div>
									
								</div>
								
								<div class="col-lg-12">
									
									<div class="form-group">
										<label>Peta Lokasi</label>
										<input class="form-control" name="peta" type="text" style="height: 110px;" value="<?php echo"$r[peta]" ?>">
									</div>
									
									<div class="form-group">
										<label>Keterangan</label>
										<textarea class="isi form-control" name="keterangan" rows="12" type="text"><?php echo"$r[keterangan]" ?></textarea>
									</div>
									
									<div class="form-group">
										<label>Gambar</label>
									</div>
									
									<div class="form-group">
										<img width="270px" src="../webmage/wisata/<?php echo"$r[gambar]" ?>">
									</div>
									
									<div class="form-group">
										<label>Gambar</label>
										<input type="file" name="fupload">
										<p>* Ukuran Gambar : 650 x 433 px</p>
									</div>
								
									<button type="submit" class="btn btn-default">Save</button>
									<button type="button" class="btn btn-default" onclick='self.history.back()'>Kembali</button>
								</div>
								
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