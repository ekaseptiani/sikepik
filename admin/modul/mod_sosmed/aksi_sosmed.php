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
if ($module=='sosmed' AND $act=='hapus'){

	mysql_query("DELETE FROM sosmed WHERE id_sosmed='$_GET[id]'");

  header('location:../../media.php?module='.$module);
}


// Update Page Room
if ($module=='sosmed' AND $act=='update'){

	mysql_query("UPDATE sosmed SET 	
									nama			 	= '$_POST[nama]',
									link				= '$_POST[link]'
                            WHERE id_sosmed		  		= '$_POST[id]'");

  header('location:../../media.php?module='.$module);
}
// Update Room Type
if ($module=='sosmed' AND $act=='insertnew'){

	mysql_query("INSERT INTO sosmed(
									nama,
									link
									) 
                            VALUES(
                                   '$_POST[nama]',
								   '$_POST[link]'
								   )");

  header('location:../../media.php?module='.$module);
}



}
?>
