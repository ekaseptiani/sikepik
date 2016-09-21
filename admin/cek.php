<?php
	session_start(); 		//mulai session, krena kita akan menggunakan session pd file php ini
	
	include "../koneksi.php"; 		//hubungkan dengan config.php untuk berhubungan dengan database
	
	$username		= $_POST['username'];
	$password		= md5($_POST['password']);
	
	$query=mysql_query("select * from admin where username='$username' and password='$password'");	 //melakukan pengampilan data dari database untuk di cocokkan
	$xxx=mysql_num_rows($query);	 //melakukan pencocokan
	
	if($xxx==true){ 		// melakukan pemeriksaan kecocokan dengan percabangan.
		$_SESSION['username']=$username;  //jika cocok, buat session dengan nama sesuai dengan username
		header("location:index.php");     // dan alihkan ke index.php
	}else{   				//jika tidak tampilkan pesan gagal login
		echo "gagal login";
	}
 
?>