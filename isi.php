<?php
switch($_GET[mod]){
	default:
		include "modul/mod_user/";
		break;
	case "home":
		 echo "Selamat Datang di Halaman admin <br />Silahkan gunakan fasilitas menu untuk mengakses module2";
		break;
	case "pasien":
		include "modul/mod_pasien/index.php";
		break;
	case "obat":
		include "modul/mod_obat/index.php";
		break;
	case "riwayat":
		include "modul/mod_riwayat/cari.php";
		break;
	case "logout":
		include "logout.php";
		break;
		
	case "input_pasien":
		include "modul/mod_pasien/input.php";
		break;
	case "input_obat":
		include "modul/mod_obat/input.php";
		break;
	case "cari":
		include "modul/mod_cari/index.php";
		break;
	case "cetak":
		include"modul/mod_cetak/index.php";
		break;
	case "user":
		include "modul/mod_user/index.php";
		break;
	case "kartupasien":
		include "modul/mod_cetak/kartupasien.php";
		break;
	case "riwayatpasien":
		include "modul/mod_cetak/riwayatpasien.php";
		break;
	case "tambah":
		include "modul/mod_user/tambah.php";
		break;






}
?>
