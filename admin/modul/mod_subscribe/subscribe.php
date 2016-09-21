<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else { ?>


		<?php
		$aksi="modul/mod_subscribe/aksi_subscribe.php";
		switch($_GET[act]){
			default:
		?>
		
		<!-- Daftar subscribe -->	
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Daftar Subscribe Email
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>No</th>
												<th>Email</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
										
											<?php 	
												$no=1;
												$subscribe = mysql_query("SELECT * FROM subscribe ORDER BY id_subscribe DESC");
												while($m=mysql_fetch_array($subscribe)){
												
												
												?>
												<tr>  
													<td><?php echo"$no" ?></td> 
													<td><?php echo"$m[email]" ?></td>
													
													<td class="center">
														<a href="<?php echo"$aksi?module=subscribe&act=hapus&id=$m[id_subscribe]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><button type="button" class="btn btn-primary">Hapus</button></a>
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
			
				<?php	
		break;
		} ?>
<?php } ?>