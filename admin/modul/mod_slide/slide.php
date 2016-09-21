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
		$aksi="modul/mod_slide/aksi_slide.php";
		switch($_GET[act]){
			default:
		?>
		
		<!-- Daftar Slide -->	
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Daftar Slide Show
								<button type="button" class="btn btn-default pull-right tambah" onclick="location.href='?module=slide&act=insertnew'">Tambah Data</button>
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>No</th>
												<th>Gambar</th>
												<th>Nama</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
										
											<?php 	
												$no=1;
												$slide = mysql_query("SELECT * FROM slide ORDER BY id_slide DESC");
												while($m=mysql_fetch_array($slide)){
												
												
												?>
												<tr>  
													<td><?php echo"$no" ?></td> 
													<td><img width="100px" src="../webmage/slide/<?php echo"$m[gambar]" ?>"></td> 
													<td><?php echo"$m[judul]" ?></td>
													
													<td class="center">
														<a href="<?php echo"?module=slide&act=edit&id=$m[id_slide]";?>">
														<button type="button" class="btn btn-primary">Edit</button></a>
														
														<a href="<?php echo"$aksi?module=slide&act=hapus&id=$m[id_slide]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><button type="button" class="btn btn-primary">Hapus</button></a>
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
							<form role="form" method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=slide&act=insertnew'>
								<div class="form-group">
									<label>Nama</label>
									<input class="isi form-control" name="judul" type="text">
								</div>
								
								<div class="form-group">
									<label>Keterangan</label>
									<textarea class="isi form-control" name="isi" rows="12" type="text"></textarea>
								</div>
								
								<div class="form-group">
									<label>Gambar</label>
									<input type="file" name="fupload">
								</div>
								
								<button type="submit" class="btn btn-default">Save</button>
								<button type="button" class="btn btn-default" onclick='self.history.back()'>Kembali</button>
							</form>
						</div>
					</div>
                </div>
				
		<?php break; 
			case"edit":
				$slide = mysql_query("SELECT * FROM slide WHERE id_slide='$_GET[id]'");
				$r=mysql_fetch_array($slide);
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
							<form role="form" method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=slide&act=update'>
								<input type='hidden' name='id' value='<?php echo"$r[id_slide]" ?>'>
								
								<div class="form-group">
									<label>Nama</label>
									<input class="isi form-control" name="judul" type="text" value="<?php echo"$r[judul]" ?>">
								</div>
								
								<div class="form-group">
									<label>Keterangan</label>
									<textarea class="isi form-control" name="isi" rows="12" type="text"><?php echo"$r[isi]" ?></textarea>
								</div>
								
								<div class="form-group">
									<label>Gambar</label>
								</div>
								
								<div class="form-group">
									<img width="270px" src="../webmage/slide/<?php echo"$r[gambar]" ?>">
								</div>
								
								<div class="form-group">
									<input type="file" name="fupload">
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