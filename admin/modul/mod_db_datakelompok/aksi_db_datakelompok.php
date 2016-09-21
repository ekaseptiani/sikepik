<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../system/koneksi.php";
include "../../../system/fungsi_thumb.php";
include "../../../system/library.php";

$module=$_GET['module'];
$act=$_GET['act'];



// Hapus header
if ($module=='db_datakelompok' AND $act=='hapus'){
	
	mysql_query("DELETE FROM db_datakelompok WHERE id_datakelompok='$_GET[id]'");
	
  header('location:../../media.php?module='.$module);
}


// Update Page Room
if ($module=='db_datakelompok' AND $act=='update'){
  	
	mysql_query("UPDATE db_datakelompok SET 	
									nama			 			= '$_POST[nama]'
									alamat						= '$_POST[alamat]'
									no_hp						= '$_POST[no_hp]'
									komoditas					= '$_POST[komoditas]'
									id_kecamatan				= '$_POST[id_kecamatan]'
									WHERE id_db_datakelompok	= '$_POST[id]'");

  header('location:../../media.php?module='.$module);
}
// Update Room Type
if ($module=='db_datakelompok' AND $act=='insertnew'){
	
	//echo $_POST['nama'];
	//echo $_POST['alamat'];
	//echo $_POST['no_hp'];
	//echo $_POST['id_kecamatan'];
	// var_dump($_POST);die;
	$insert_kelompok = mysql_query("INSERT INTO db_datakelompok(
									nama,
									alamat,
									no_hp,
									id_kecamatan
									) 
                            VALUES(
                                   '$_POST[nama]',
								   '$_POST[alamat]',
								   '$_POST[no_hp]',
								   '$_POST[id_kecamatan]'
								   )");
	if($insert_kelompok){
		$last_id = mysql_insert_id();
		var_dump($last_id);
		foreach($_POST['komoditas'] as $val){
			$sql_insert = "
				INSERT INTO subkomoditas (id_datakelompok, id_komoditas, hasil_panen) VALUES ('". $last_id ."', '". $val ."', '". $_POST['jml_komoditas'][$val]."');
			";
			$insert = mysql_query($sql_insert) or die(mysql_error());
		}		
	}		   

  header('location:../../media.php?module='.$module);
}



}
?>
