<!-- Hapus Kecamatan-->	

<?php 
	if(!empty($_GET['id'])){
		$delete = mysql_query("DELETE FROM kecamatan WHERE id=". $_GET['id_kecamatan']) or die(mysql_error());
		
		if($delete){
			$msg = 'Hapusdata Berhasil !';
			$url = "media.php?module=kota";
		}else{
			$msg = 'Hapus data Gagal !';
			$url = "media.php?module=kota";
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