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

$module=$_GET[module];
$act=$_GET[act];

// Update kontak
if ($module=='kontak' AND $act=='update'){
  
    mysql_query("UPDATE kontak SET 
									judul 			= '$_POST[judul]', 
									link_lokasi 	= '$_POST[link_lokasi]', 
									cs 				= '$_POST[cs]', 
									alamat 			= '".mysql_real_escape_string($_POST[alamat])."',
									isi 			= '".mysql_real_escape_string($_POST[isi])."' 
                            WHERE id_kontak   	    = '$_POST[id]'");
 
  header('location:../../media.php?module='.$module);
}
}
?>
