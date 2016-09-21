<!-- Hapus Data kelompok-->	

<?php 
	if(!empty($_GET['id'])){
		$delete = mysql_query("DELETE FROM db_datakelompok WHERE id=". $_GET['id']) or die(mysql_error());
		
		if($delete){
			$msg = 'Hapusdata Berhasil !';
			$url = "media.php?module=db_datakelompok";
		}else{
			$msg = 'Hapus data Gagal !';
			$url = "media.php?module=db_datakelompok";
		}
			echo '
				<script>
					if(confirm("'. $msg .'")){
						window.location = "'. $url .'";
					}else{
						window.location = "'. $url.'";
					}
				</script>
			';
	}

?>