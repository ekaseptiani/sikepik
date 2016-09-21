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
if ($module=='galeri' AND $act=='hapus'){
	
	$tampil=mysql_query("SELECT * FROM galeri WHERE id_galeri='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[gambar] != ''){
	unlink("../../../webmage/galeri/$ex[gambar]");
	mysql_query("DELETE FROM galeri WHERE id_galeri='$_GET[id]'");
	}else {
	mysql_query("DELETE FROM galeri WHERE id_galeri='$_GET[id]'");
	}
  header('location:../../media.php?module='.$module.'&id='.$_GET['idn']);
}

// Update Room Type
if ($module=='galeri' AND $act=='insertnew'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
    
	if(!empty($lokasi_file)){
  
	UploadGaleri($nama_file_unik);
  
    mysql_query("INSERT INTO galeri(
									id_wisata,
									gambar) 
                            VALUES(
                                   '$_POST[id]',
								   '$nama_file_unik')");
	}
	else{
	mysql_query("INSERT INTO galeri(
									id_wisata
									) 
                            VALUES(
                                   '$_POST[id]'
								   )");
	}
	
	
  header('location:../../media.php?module='.$module.'&id='.$_POST['id']);
}



}
?>
