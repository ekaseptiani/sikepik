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
if ($module=='hotel' AND $act=='hapus'){
	
	$tampil=mysql_query("SELECT * FROM hotel WHERE id_hotel='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[gambar] != ''){
	unlink("../../../webmage/hotel/$ex[gambar]");
	mysql_query("DELETE FROM hotel WHERE id_hotel='$_GET[id]'");
	mysql_query("DELETE FROM subfasilitas WHERE id_hotel='$_GET[id]'");
	}else {
	mysql_query("DELETE FROM hotel WHERE id_hotel='$_GET[id]'");
	mysql_query("DELETE FROM subfasilitas WHERE id_hotel='$_GET[id]'");
	}
  header('location:../../media.php?module='.$module);
}


// Update Page Room
if ($module=='hotel' AND $act=='update'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
    
	$judul_seo      = seo_title($_POST[nama]);
	$now = date("Y-m-d H:i:s");
	
	if(!empty($lokasi_file)){
  
	$tampil=mysql_query("SELECT * FROM hotel WHERE id_hotel='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[gambar] != ''){
		unlink("../../../webmage/hotel/$ex[gambar]");
		}
	
	UploadHotel($nama_file_unik);
  
    mysql_query("UPDATE hotel SET 	
									nama			 	= '$_POST[nama]',
									alamat			 	= '$_POST[alamat]',
									id_kota			 	= '$_POST[kota]',
									permalam			= '$_POST[permalam]',
									status				= '$_POST[status]',
									peta				= '$_POST[peta]',
									keterangan			= '".mysql_real_escape_string($_POST[keterangan])."',
									seo				 	= '$judul_seo',
									longitude			= '$_POST[longitude]',
									latitude			= '$_POST[latitude]',
									tanggal				= '$now',
									gambar				= '$nama_file_unik'
                            WHERE id_hotel		       	= '$_POST[id]'");
							
		mysql_query("DELETE FROM subfasilitas WHERE id_hotel='$_POST[id]'");
		
		$fas = $_POST['fasilitas'];
		for($i=0; $i<sizeof($fas); $i++){
			mysql_query("INSERT INTO subfasilitas(id_fasilitas, id_hotel) VALUES ('$fas[$i]', '$_POST[id]')");
		}	
							
	}
	else{
	mysql_query("UPDATE hotel SET 	
									nama			 	= '$_POST[nama]',
									alamat			 	= '$_POST[alamat]',
									id_kota			 	= '$_POST[kota]',
									permalam			= '$_POST[permalam]',
									status				= '$_POST[status]',
									peta				= '$_POST[peta]',
									keterangan			= '".mysql_real_escape_string($_POST[keterangan])."',
									seo				 	= '$judul_seo',
									longitude			= '$_POST[longitude]',
									latitude			= '$_POST[latitude]',
									tanggal				= '$now'
                            WHERE id_hotel		    = '$_POST[id]'");
							
		mysql_query("DELETE FROM subfasilitas WHERE id_hotel='$_POST[id]'");
		
		$fas = $_POST['fasilitas'];
		for($i=0; $i<sizeof($fas); $i++){
			mysql_query("INSERT INTO subfasilitas(id_fasilitas, id_hotel) VALUES ('$fas[$i]', '$_POST[id]')");
		}	
							
	}
	
  header('location:../../media.php?module='.$module);
}
// Update Room Type
if ($module=='hotel' AND $act=='insertnew'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
  $judul_seo      = seo_title($_POST[nama]);
  $now = date("Y-m-d H:i:s");
    
	if(!empty($lokasi_file)){
  
	UploadHotel($nama_file_unik);
  
    mysql_query("INSERT INTO hotel(
									nama,
									alamat,
									id_kota,
									permalam,
									status,
									peta,
									keterangan,
									seo,
									longitude,
									latitude,
									tanggal,
									gambar) 
                            VALUES(
									'$_POST[nama]',
									'$_POST[alamat]',
									'$_POST[kota]',
									'$_POST[permalam]',
									'$_POST[status]',
									'$_POST[peta]',
									'".mysql_real_escape_string($_POST[keterangan])."',
									'$judul_seo',
									'$_POST[longitude]',
									'$_POST[latitude]',
									'$now',
									'$nama_file_unik')");
									
		$sql=mysql_query("SELECT * FROM hotel WHERE tanggal='$now'");
		$s=mysql_fetch_array($sql);
			
		$fas = $_POST['fasilitas'];
			for($i=0; $i<sizeof($fas); $i++){
				mysql_query("INSERT INTO subfasilitas(id_fasilitas, id_hotel) VALUES ('$fas[$i]', '$s[id_hotel]')");
			}
									
	}
	else{
	mysql_query("INSERT INTO hotel(
									nama,
									alamat,
									id_kota,
									permalam,
									status,
									peta,
									keterangan,
									seo,
									longitude,
									latitude,
									tanggal
									) 
                            VALUES(
                                   '$_POST[nama]',
									'$_POST[alamat]',
									'$_POST[kota]',
									'$_POST[permalam]',
									'$_POST[status]',
									'$_POST[peta]',
									'".mysql_real_escape_string($_POST[keterangan])."',
									'$judul_seo',
									'$_POST[longitude]',
									'$_POST[latitude]',
									'$now'
								   )");
								   
		$sql=mysql_query("SELECT * FROM hotel WHERE tanggal='$now'");
		$s=mysql_fetch_array($sql);
			
		$fas = $_POST['fasilitas'];
			for($i=0; $i<sizeof($fas); $i++){
				mysql_query("INSERT INTO subfasilitas(id_fasilitas, id_hotel) VALUES ('$fas[$i]', '$s[id_hotel]')");
			}
								   
	}
	
	
  header('location:../../media.php?module='.$module);
}



}
?>
