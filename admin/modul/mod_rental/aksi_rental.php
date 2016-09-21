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
if ($module=='rental' AND $act=='hapus'){
	
	$tampil=mysql_query("SELECT * FROM rental WHERE id_rental='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[gambar] != ''){
	unlink("../../../webmage/rental/$ex[gambar]");
	mysql_query("DELETE FROM rental WHERE id_rental='$_GET[id]'");
	mysql_query("DELETE FROM subfasilitas WHERE id_rental='$_GET[id]'");
	}else {
	mysql_query("DELETE FROM rental WHERE id_rental='$_GET[id]'");
	mysql_query("DELETE FROM subfasilitas WHERE id_rental='$_GET[id]'");
	}
  header('location:../../media.php?module='.$module);
}


// Update Page Room
if ($module=='rental' AND $act=='update'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
    
	$judul_seo      = seo_title($_POST[judul]);
	$now = date("Y-m-d H:i:s");
	
	if(!empty($lokasi_file)){
  
	$tampil=mysql_query("SELECT * FROM rental WHERE id_rental='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[gambar] != ''){
		unlink("../../../webmage/rental/$ex[gambar]");
		}
	
	UploadRental($nama_file_unik);
  
    mysql_query("UPDATE rental SET 	
									judul			 	= '$_POST[judul]',
									alamat			 	= '$_POST[alamat]',
									id_kota			 	= '$_POST[kota]',
									perhari				= '$_POST[perhari]',
									jam				 	= '$_POST[jam]',
									status				= '$_POST[status]',
									route				= '".mysql_real_escape_string($_POST[route])."',
									peta				= '$_POST[peta]',
									keterangan			= '".mysql_real_escape_string($_POST[keterangan])."',
									seo				 	= '$judul_seo',
									longitude			= '$_POST[longitude]',
									latitude			= '$_POST[latitude]',
									tanggal				= '$now',
									gambar				= '$nama_file_unik'
                            WHERE id_rental		       	= '$_POST[id]'");
							
		mysql_query("DELETE FROM subfasilitas WHERE id_rental='$_POST[id]'");
		
		$fas = $_POST['fasilitas'];
		for($i=0; $i<sizeof($fas); $i++){
			mysql_query("INSERT INTO subfasilitas(id_fasilitas, id_rental) VALUES ('$fas[$i]', '$_POST[id]')");
		}
							
	}
	else{
	mysql_query("UPDATE rental SET 	
									judul			 	= '$_POST[judul]',
									alamat			 	= '$_POST[alamat]',
									id_kota			 	= '$_POST[kota]',
									perhari				= '$_POST[perhari]',
									jam				 	= '$_POST[jam]',
									status				= '$_POST[status]',
									route				= '".mysql_real_escape_string($_POST[route])."',
									peta				= '$_POST[peta]',
									keterangan			= '".mysql_real_escape_string($_POST[keterangan])."',
									seo				 	= '$judul_seo',
									longitude			= '$_POST[longitude]',
									latitude			= '$_POST[latitude]',
									tanggal				= '$now'
                            WHERE id_rental		    = '$_POST[id]'");
							
		mysql_query("DELETE FROM subfasilitas WHERE id_rental='$_POST[id]'");
		
		$fas = $_POST['fasilitas'];
		for($i=0; $i<sizeof($fas); $i++){
			mysql_query("INSERT INTO subfasilitas(id_fasilitas, id_rental) VALUES ('$fas[$i]', '$_POST[id]')");
		}	
							
	}
	
  header('location:../../media.php?module='.$module);
}
// Update Room Type
if ($module=='rental' AND $act=='insertnew'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
  $judul_seo      = seo_title($_POST[judul]);
  $now = date("Y-m-d H:i:s");
    
	if(!empty($lokasi_file)){
  
	UploadRental($nama_file_unik);
  
    mysql_query("INSERT INTO rental(
									judul,
									alamat,
									id_kota,
									perhari,
									jam,
									status,
									route,
									peta,
									keterangan,
									seo,
									longitude,
									latitude,
									tanggal,
									gambar) 
                            VALUES(
									'$_POST[judul]',
									'$_POST[alamat]',
									'$_POST[kota]',
									'$_POST[perhari]',
									'$_POST[jam]',
									'$_POST[status]',
									'".mysql_real_escape_string($_POST[route])."',
									'$_POST[peta]',
									'".mysql_real_escape_string($_POST[keterangan])."',
									'$judul_seo',
									'$_POST[longitude]',
									'$_POST[latitude]',
									'$now',
									'$nama_file_unik')");
									
		$sql=mysql_query("SELECT * FROM rental WHERE tanggal='$now'");
		$s=mysql_fetch_array($sql);
			
		$fas = $_POST['fasilitas'];
			for($i=0; $i<sizeof($fas); $i++){
				mysql_query("INSERT INTO subfasilitas(id_fasilitas, id_rental) VALUES ('$fas[$i]', '$s[id_rental]')");
			}
									
	}
	else{
	mysql_query("INSERT INTO rental(
									judul,
									alamat,
									id_kota,
									perhari,
									jam,
									status,
									route,
									peta,
									keterangan,
									seo,
									longitude,
									latitude,
									tanggal
									) 
                            VALUES(
                                   '$_POST[judul]',
									'$_POST[alamat]',
									'$_POST[kota]',
									'$_POST[perhari]',
									'$_POST[jam]',
									'$_POST[status]',
									'".mysql_real_escape_string($_POST[route])."',
									'$_POST[peta]',
									'".mysql_real_escape_string($_POST[keterangan])."',
									'$judul_seo',
									'$_POST[longitude]',
									'$_POST[latitude]',
									'$now'
								   )");
								   
		$sql=mysql_query("SELECT * FROM rental WHERE tanggal='$now'");
		$s=mysql_fetch_array($sql);
			
		$fas = $_POST['fasilitas'];
			for($i=0; $i<sizeof($fas); $i++){
				mysql_query("INSERT INTO subfasilitas(id_fasilitas, id_rental) VALUES ('$fas[$i]', '$s[id_rental]')");
			}
								   
	}
	
	
  header('location:../../media.php?module='.$module);
}



}
?>
