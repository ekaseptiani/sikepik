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
if ($module=='slide' AND $act=='hapus'){
	
	$tampil=mysql_query("SELECT * FROM slide WHERE id_slide='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[gambar] != ''){
	unlink("../../../webmage/slide/$ex[gambar]");
	mysql_query("DELETE FROM slide WHERE id_slide='$_GET[id]'");
	}else {
	mysql_query("DELETE FROM slide WHERE id_slide='$_GET[id]'");
	}
  header('location:../../media.php?module='.$module);
}


// Update Page Room
if ($module=='slide' AND $act=='update'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
    
	if(!empty($lokasi_file)){
  
	$tampil=mysql_query("SELECT * FROM slide WHERE id_slide='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[gambar] != ''){
		unlink("../../../webmage/slide/$ex[gambar]");
		}
	
	UploadSlide($nama_file_unik);
  
    mysql_query("UPDATE slide SET 	
									judul			 	= '$_POST[judul]',
									isi				 	= '".mysql_real_escape_string($_POST[isi])."',
									gambar				= '$nama_file_unik'
                            WHERE id_slide		       	= '$_POST[id]'");
	}
	else{
	mysql_query("UPDATE slide SET 	
									judul			 	= '$_POST[judul]',
									isi				 	= '".mysql_real_escape_string($_POST[isi])."'
                            WHERE id_slide		    = '$_POST[id]'");
	}
	
  header('location:../../media.php?module='.$module);
}
// Update Room Type
if ($module=='slide' AND $act=='insertnew'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
    
	if(!empty($lokasi_file)){
  
	UploadSlide($nama_file_unik);
  
    mysql_query("INSERT INTO slide(
									judul,
									isi,
									gambar) 
                            VALUES(
                                   '$_POST[judul]',
								   '".mysql_real_escape_string($_POST[isi])."',
								   '$nama_file_unik')");
	}
	else{
	mysql_query("INSERT INTO slide(
									judul,
									isi
									) 
                            VALUES(
                                   '$_POST[judul]',
								   '".mysql_real_escape_string($_POST[isi])."'
								   )");
	}
	
	
  header('location:../../media.php?module='.$module);
}



}
?>
