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

// Update help
if ($module=='help' AND $act=='update'){
  
    mysql_query("UPDATE info SET 	judul = '$_POST[judul]',
									telp = '$_POST[telp]',
									email = '$_POST[email]',
									keterangan = '".mysql_real_escape_string($_POST[keterangan])."' 
                            WHERE id_info       = '$_POST[id]'");
 
  header('location:../../media.php?module='.$module);
}
}
?>
