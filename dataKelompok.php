<?php
	include "koneksi.php"; 

	$id = $_GET['id'];

?>


<!DOCTYPE html>
<html>

<head>
    <title>s i k e p i k</title>
    <meta http-equiv="Content-Type" content="text/php; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div id="kanvas">
        <div id="header">
            <div class="judul">
                <center>S I K E P I K</div>
            <div class="deskripsi">
                <center>Sistem Informasi Kelompok Petani Ikan Konsumsi Di Dinas Perikanan dan Kelautan Kabupaten Sleman</div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="index.php">Beranda</a>
                </li>
                <li><a href="index-1.php">Komoditas</a>
                </li>
                <li><a href="index-2.php">Data Kelompok</a>
                </li>
                <li><a href="index-3.php">Login Staff</a>
                </li>
            </ul>
        </div>
       
		<?php
			include("sidebarKecamatan.php");
		?>
	   
        <div id="login">
                <div class="isitabel"> 
                    <div class="kosong">
					<table>
                        <tr="ztr">
                            <th class="zth">No</th>
                            <th class="zth">Nama</th>
                            <th class="zth">Alamat</th>
                            <th class="zth">No.Hp</th>
							<th class="zth">Komoditas</th>
                            <tr="ztr">
								
                                <?php 
								$i = 1;
									$data = "select * from db_datakelompok WHERE id_kecamatan = $id";
									$query_data = mysql_query($data);
									if ($query_data === FALSE) {
										die(mysql_error());
									}
										while($hasil = mysql_fetch_array($query_data))
									{
	
								?>
									 
									<tr claas='ztr'>
											<td class='ztd'><?php echo"$i"; ?></td>
											<td class='ztd'><?php echo"$hasil[nama]"; ?></td>
											<td class='ztd'><?php echo"$hasil[alamat]"; ?></td>
											<td class='ztd'><?php echo"$hasil[no_hp]"; ?></td>
											<td class='ztd'><?php echo"$hasil[komoditas]"; ?></td>
										</tr>	
										
									<?php $i++;}  ?>
									
					</table>
                </div>
            </div>
        </div>
        <div style="clear: both"></div>
        <div id="footer">
            <div class="isibar ul li">
                <center>Copyright ekaseptiyani 2016 &nbsp;
            </div>
        </div>
    </div>
</body>
</html>
