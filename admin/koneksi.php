<?php
error_reporting(0);
$server ="185.28.20.29";
$username ="u715342367_adm";
$password ="ganjenoon";
$database ="u715342367_kepik";

// koneksi dan memilih database di server
mysql_connect ($server,$username,$password) or die ("koneksi gagal");
mysql_select_db ($database) or die ("database tidak bisa dibuka");
?>