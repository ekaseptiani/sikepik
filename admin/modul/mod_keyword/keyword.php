<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else { ?>

		<?php 
			$aksi="modul/mod_keyword/aksi_keyword.php";
			$tentang = mysql_query("SELECT * FROM modul WHERE id_modul='10'");
			$w=mysql_fetch_array($tentang);
		?>
		
		<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><small>Halaman Keyword Website </small></h1>
                    </div>
					
					<div class="col-lg-12">
						<div class="panel panel-default">
							<form role='form' method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=keyword&act=update'>
							<input type='hidden' name='id' value='<?php echo"$w[id_modul]" ?>'>
								<div class="form-group">
									<label>Keyword Website</label>
									<textarea name="isi" class="form-control" rows="12"><?php echo"$w[static_content]" ?></textarea>
								</div>
								<button type="submit" class="btn btn-default">Save</button>
							</form>
						</div>
					</div>
                </div>

<?php } ?>