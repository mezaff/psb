<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$gelombang = $_POST['gelombang'];
$nik = $_POST['nik'];
$nisn = $_POST['nisn'];
$namapd = $_POST['namapd'];
$jk = $_POST['jk'];
$tempatlahirpd = $_POST['tempatlahirpd'];
$tanggallahirpd = $_POST['tanggallahirpd'];
$agama = $_POST['agama'];
$wapd = $_POST['wapd'];
$desapd = $_POST['desapd'];
$kecamatanpd = $_POST['kecamatanpd'];
$alamatpd = $_POST['alamatpd'];



	// Proses simpan ke Database

	$query = "INSERT INTO siswa VALUES('".$id."', '".$gelombang."', '".$nik."', '".$nisn."', '".$namapd."', '".$jk."', '".$tempatlahirpd."','".$tanggallahirpd."','".$agama."','".$wapd."','".$desapd."','".$kecamatanpd."','".$alamatpd."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: registrasi2.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='tabelbk.php'>Kembali Ke Form</a>";
	}


?>



	