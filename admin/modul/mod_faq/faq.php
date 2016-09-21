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
		$aksi="modul/mod_faq/aksi_faq.php";
		switch($_GET[act]){
			default:
		?>
		
		<!-- Daftar faq -->	
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Daftar FAQ
								<button type="button" class="btn btn-default pull-right tambah" onclick="location.href='?module=faq&act=insertnew'">Tambah Data</button>
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>No</th>
												<th>Pertanyaan</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
										
											<?php 	
												$no=1;
												$faq = mysql_query("SELECT * FROM faq ORDER BY id_faq DESC");
												while($m=mysql_fetch_array($faq)){
												
												
												?>
												<tr>  
													<td><?php echo"$no" ?></td> 
													<td><?php echo"$m[pertanyaan]" ?></td>
													
													<td class="center">
														<a href="<?php echo"?module=faq&act=edit&id=$m[id_faq]";?>">
														<button type="button" class="btn btn-primary">Edit</button></a>
														
														<a href="<?php echo"$aksi?module=faq&act=hapus&id=$m[id_faq]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><button type="button" class="btn btn-primary">Hapus</button></a>
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
							<form role="form" method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=faq&act=insertnew'>
								<div class="form-group">
									<label>Pertanyaan</label>
									<input class="isi form-control" name="pertanyaan" type="text">
								</div>
								
								<div class="form-group">
									<label>Jawaban</label>
									<textarea class="isi form-control" name="jawaban" rows="12" type="text"></textarea>
								</div>
								
								<button type="submit" class="btn btn-default">Save</button>
								<button type="button" class="btn btn-default" onclick='self.history.back()'>Kembali</button>
							</form>
						</div>
					</div>
                </div>
				
		<?php break; 
			case"edit":
				$faq = mysql_query("SELECT * FROM faq WHERE id_faq='$_GET[id]'");
				$r=mysql_fetch_array($faq);
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
							<form role="form" method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=faq&act=update'>
								<input type='hidden' name='id' value='<?php echo"$r[id_faq]" ?>'>
								
								<div class="form-group">
									<label>Pertanyaan</label>
									<input class="isi form-control" name="pertanyaan" type="text" value="<?php echo"$r[pertanyaan]" ?>">
								</div>
								
								<div class="form-group">
									<label>Jawaban</label>
									<textarea class="isi form-control" name="jawaban" rows="12" type="text"><?php echo"$r[jawaban]" ?></textarea>
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