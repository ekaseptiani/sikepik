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
if ($module=='subscribe' AND $act=='hapus'){
	
	mysql_query("DELETE FROM subscribe WHERE id_subscribe='$_GET[id]'");
	
  header('location:../../media.php?module='.$module);

}



}
?>
