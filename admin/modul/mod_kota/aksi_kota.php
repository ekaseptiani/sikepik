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
include "../../../system/fungsi_indotgl.php";
include "../../../system/fungsi_seo.php";

$module=$_GET['module'];
$act=$_GET['act'];



// Hapus header
if ($module=='kota' AND $act=='hapus'){
	
	mysql_query("DELETE FROM kecamatan WHERE id_kecamatan='$_GET[id]'");
	
  header('location:../../media.php?module='.$module);
}


// Update Page Room
if ($module=='kota' AND $act=='update'){
  
	$judul_seo      = seo_title($_POST[nama]);
	
	mysql_query("UPDATE kecamatan SET 	
									`nama`			 	= '".$_POST['nama']."',
									`long`			 	= '".$_POST['long']."',
									`lat`			 	= '".$_POST['lat']."'
                            WHERE id_kecamatan		    = '$_POST[id]'") or die(mysql_error());

  header('location:../../media.php?module='.$module);
}
// Update Room Type
if ($module=='kota' AND $act=='insertnew'){
	var_dump($_POST);
  $judul_seo      = seo_title($_POST['nama']);
	$sql_insert = "INSERT INTO kecamatan(
									`nama`,
									`long`,
									`lat`
									)
                            VALUES(
                                   '".$_POST['nama']."',
								   '".$_POST['long']."',
								   '".$_POST['lat']."'
								   )";
	//var_dump($sql_insert);
	$result = mysql_query($sql_insert) or die(mysql_error());;
//var_dump($_POST, $result);
  header('location:../../media.php?module='.$module);
}



}
?>
