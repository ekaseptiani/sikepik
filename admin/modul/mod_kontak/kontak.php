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
			toolbar:"pagebreak save charmap| insertfile undo redo | styleselect formatselect fontselect fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | jbimages | print preview media | forecolor backcolor emoticons | justifyleft justifycenter justifyright justifyfull | cut copy paste pastetext pasteword | search replace | blockquote |link unlink anchor image cleanup kontak code | insertdate inserttime preview | tablecontrols | hr removeformat visualaid | sub sup | iespell media advhr | print | ltr rtl | fullscreen | insertlayer moveforward movebackward absolute |styleprops spellchecker | cite abbr acronym del ins attribs | visualchars nonbreaking template | insertimage",
			relative_urls: false
	 });
	</script>
	<!-- /TinyMCE -->

		<?php 
			$aksi="modul/mod_kontak/aksi_kontak.php";
			$tentang = mysql_query("SELECT * FROM kontak order by id_kontak");
			$w=mysql_fetch_array($tentang);
		?>
		
		<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><small>Halaman Kontak </small></h1>
                    </div>
					
					<div class="col-lg-12">
						<div class="panel panel-default">
							<form role='form' method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=kontak&act=update'>
							<input type='hidden' name='id' value='<?php echo"$w[id_kontak]" ?>'>
								<div class="form-group">
									<label>Judul</label>
									<input name="judul" class="form-control" value="<?php echo"$w[judul]" ?>">
								</div>
								
								<div class="form-group">
									<label>CS</label>
									<input name="cs" class="form-control" value="<?php echo"$w[cs]" ?>">
								</div>
								
								<div class="form-group">
									<label>Link Lokasi</label>
									<input name="link_lokasi" class="form-control" value="<?php echo"$w[link_lokasi]" ?>">
								</div>
								
								<div class="form-group">
									<label>Alamat</label>
									<textarea name="alamat" class="form-control" rows="3"><?php echo"$w[alamat]" ?></textarea>
								</div>
								
								<div class="form-group">
									<label>Keterangan Kontak</label>
									<textarea name="isi" class="form-control" rows="3"><?php echo"$w[isi]" ?></textarea>
								</div>
								<button type="submit" class="btn btn-default">Save</button>
							</form>
						</div>
					</div>
                </div>

				
				
<?php } ?>