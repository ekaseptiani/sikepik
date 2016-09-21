<?php
session_start();
error_reporting(0);
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<center>Anda harus login dulu <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>

<!doctype html>
<html lang="id">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin s i k e p i k</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
	
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>


<body>
	
	<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?module=home"><img src=""></a>
            </div>
            <!-- Top Menu Items -->
			<ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i> Seo <b class="caret"></b></a>
                    <ul class="dropdown-menu">
						<li><a href="?module=judul"><i class="fa fa-fw fa-pencil"></i> Judul</a></li>
                        <li><a href="?module=keyword"><i class="fa fa-fw fa-key"></i> Keyword</a></li>
                        <li><a href="?module=deskripsi"><i class="fa fa-fw fa-book"></i> Deskripsi</a></li>
                    </ul>
                </li>
				
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">					
                    <li><a href="?module=kota"><i class="fa fa-fw fa-building"></i> Kabupaten / Kota</a></li>
					<li><a href="?module=komoditas"><i class="fa fa-fw fa-paper-plane"></i> Komoditas</a></li>
					<li><a href="?module=db_datakelompok"><i class="fa fa-fw fa-paper-plane"></i> Data Kelompok</a></li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-book"></i> Artikel <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li><a href="?module=wisata"><i class="fa fa-fw fa-paw"></i> Wisata</a></li>
                            <li><a href="?module=hotel"><i class="fa fa-fw fa-hotel"></i> Hotel & Penginapan</a></li>
                            <li><a href="?module=rental"><i class="fa fa-fw fa-car"></i> Rental</a></li>
                            <li><a href="?module=panduan"><i class="fa fa-fw fa-car"></i> Panduan Wisata</a></li>
                        </ul>
                    </li>
					
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-book"></i> Keterangan <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
							<li><a href="?module=help"><i class="fa fa-fw fa-info-circle"></i> Keterangan Sidebar</a></li>
							<li><a href="?module=rekomendasi"><i class="fa fa-fw fa-bookmark"></i> Rekomendasi</a></li>
                        </ul>
                    </li>
					
                    <li><a href="?module=iklan"><i class="fa fa-fw fa-tag"></i> Pasang Iklan</a></li>
                    
                    <li><a href="?module=sosmed"><i class="fa fa-fw fa-globe"></i> Sosial Media</a></li>
                    <li><a href="?module=tentang_kami"><i class="fa fa-fw fa-child"></i> Tentang Kami</a></li>
                    <li><a href="?module=subscribe"><i class="fa fa-fw fa-envelope"></i> Subscribe</a></li>
                    <li><a href="?module=faq"><i class="fa fa-fw fa-comment"></i> FAQ</a></li>
                    <li><a href="?module=kontak"><i class="fa fa-fw fa-phone"></i> Kontak</a></li>                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                
				<!-- Page Heading -->
                <?php include('content.php'); ?>
				
            </div>
        </div>
	</div>
	
	<!-- jQuery Version 1.11.0 -->
	<script src="js/jquery-1.11.0.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
		
	<!-- Metis Menu Plugin JavaScript -->
	<script src="js/plugins/metisMenu/metisMenu.min.js"></script>

	<!-- DataTables JavaScript -->
	<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
	<script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
		
	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
	<script>
		$(document).ready(function() {
			$('#dataTables-example').dataTable();
		});
	</script>
	
</body>

</html>
<?php } ?>