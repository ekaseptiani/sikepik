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
if ($module=='komoditas' AND $act=='hapus'){
	
	mysql_query("DELETE FROM komoditas WHERE id_komoditas='$_GET[id]'");
	
  header('location:../../media.php?module='.$module);
}


// Update Page Room
if ($module=='komoditas' AND $act=='update'){
  	
	mysql_query("UPDATE komoditas SET 	
									nama			 	= '$_POST[nama]'
                            WHERE id_komoditas		    = '$_POST[id]'");

  header('location:../../media.php?module='.$module);
}
// Update Room Type
if ($module=='komoditas' AND $act=='insertnew'){
   
	mysql_query("INSERT INTO komoditas(
									nama
									) 
                            VALUES(
                                   '$_POST[nama]'
								   )");

  header('location:../../media.php?module='.$module);
}



}
?>
