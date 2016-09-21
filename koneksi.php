<?php
error_reporting(0);
$server ="localhost";
$username ="root";
$password ="";
$database ="sikepik";

// koneksi dan memilih database di server
mysql_connect ($server,$username,$password) or die ("koneksi gagal");
mysql_select_db ($database) or die ("database tidak bisa dibuka");
?>