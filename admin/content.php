<?php
include "../system/koneksi.php";
include "../system/library.php";
include "../system/fungsi_combobox.php";
include "../system/class_paging.php";

// Bagian Home
if ($_GET[module]=='home'){
	if ($_SESSION['leveluser']=='admin'){
	echo"<div class='col-lg-12'>
			<div class='alert alert-success'>
				<i class='fa fa-info-circle'></i> <strong>Selamat datang di Halaman Admin</strong>
			</div>
		</div>";

} }

// help
elseif ($_GET[module]=='help'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_help/help.php";
  }
}

// Slide show
elseif ($_GET[module]=='slide'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_slide/slide.php";
  }
}

// Wisata
elseif ($_GET[module]=='wisata'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_wisata/wisata.php";
  }
}

// Hotel
elseif ($_GET[module]=='hotel'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_hotel/hotel.php";
  }
}

// Retal
elseif ($_GET[module]=='rental'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_rental/rental.php";
  }
}


// Panduan komoditas
elseif ($_GET[module]=='komoditas'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_komoditas/komoditas.php";
  }
}

// Panduan datakelompok
elseif ($_GET[module]=='db_datakelompok'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_db_datakelompok/db_datakelompok.php";
  }
}

// Panduan Wisata
elseif ($_GET[module]=='panduan'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_panduan/panduan.php";
  }
}

// Sosial Media
elseif ($_GET[module]=='sosmed'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_sosmed/sosmed.php";
  }
}

// Tentang Kami
elseif ($_GET[module]=='tentang_kami'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_tentang_kami/tentang_kami.php";
  }
}

// Subscribe
elseif ($_GET[module]=='subscribe'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_subscribe/subscribe.php";
  }
}

// FAQ
elseif ($_GET[module]=='faq'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_faq/faq.php";
  }
}

// kontak
elseif ($_GET[module]=='kontak'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_kontak/kontak.php";
  }
}

// kota
elseif ($_GET[module]=='kota'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_kota/kota.php";
  }
}

// Judul
elseif ($_GET[module]=='judul'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_judul/judul.php";
  }
}

// deskripsi
elseif ($_GET[module]=='deskripsi'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_deskripsi/deskripsi.php";
  }
}

// Keyword
elseif ($_GET[module]=='keyword'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_keyword/keyword.php";
  }
}

// Bagian User
elseif ($_GET[module]=='user'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_user/user.php";
  }
}
elseif ($_GET[module]=='detail_kelompok'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_db_datakelompok/detail_kelompok.php";
  }
}
elseif ($_GET[module]=='edit_komoditas_kelompok'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_db_datakelompok/edit_komoditas_kelompok.php";
  }
}
elseif ($_GET[module]=='hapus_datakelompok'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_db_datakelompok/hapus_datakelompok.php";
  }
}

// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>
