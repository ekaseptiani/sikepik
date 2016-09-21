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
if ($module=='faq' AND $act=='hapus'){

	mysql_query("DELETE FROM faq WHERE id_faq='$_GET[id]'");

  header('location:../../media.php?module='.$module);
}


// Update Page Room
if ($module=='faq' AND $act=='update'){

	mysql_query("UPDATE faq SET 	
									pertanyaan			 	= '$_POST[pertanyaan]',
									jawaban				 	= '".mysql_real_escape_string($_POST[jawaban])."'
                            WHERE id_faq		    = '$_POST[id]'");
	
  header('location:../../media.php?module='.$module);
}
// Update Room Type
if ($module=='faq' AND $act=='insertnew'){
 
	mysql_query("INSERT INTO faq(
									pertanyaan,
									jawaban
									) 
                            VALUES(
                                   '$_POST[pertanyaan]',
								   '".mysql_real_escape_string($_POST[jawaban])."'
								   )");

	
  header('location:../../media.php?module='.$module);
}



}
?>
