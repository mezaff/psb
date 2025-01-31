<?php
// Load file koneksi.php
include "../koneksi.php";

// Ambil ID dari parameter GET dan data dari POST
$id = $_GET['id'];
$user = mysqli_escape_string($connect, $_POST['user']);
$pass = mysqli_escape_string($connect, $_POST['pass']);
$tahun = mysqli_escape_string($connect, $_POST['tahun']);
$nama = mysqli_escape_string($connect, $_POST['nama']);
$visi = mysqli_escape_string($connect, $_POST['visi']);
$misi = mysqli_escape_string($connect, $_POST['misi']);
$lokasi = mysqli_escape_string($connect, $_POST['lokasi']);
$embed = mysqli_escape_string($connect, $_POST['embed']);
$email = mysqli_escape_string($connect, $_POST['email']);
$wa = mysqli_escape_string($connect, $_POST['wa']);

if (substr($wa, 0, 1) === '0') {
	$wa = '62' . substr($wa, 1);
} elseif (substr($wa, 0, 2) !== '62') {
	if (!preg_match('/^[0-9]+$/', $wa)) {
		die("Error: Nomor telepon hanya boleh mengandung angka.");
	}
	if (strlen($wa) < 11 || strlen($wa) > 13) {
		die("Error: Nomor telepon tidak valid. Panjang nomor harus antara 11-13 digit.");
	}
}

// Cek apakah ID admin ada
$query = "SELECT * FROM admin WHERE id='" . $id . "'";
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_array($sql);

if ($data) {
	// Proses ubah data ke Database
	$query = "UPDATE admin SET user='" . $user . "', pass='" . $pass . "', tahun='" . $tahun . "', nama='" . $nama . "', visi='" . $visi . "', misi='" . $misi . "', lokasi='" . $lokasi . "', embed='" . $embed . "', email='" . $email . "', wa='" . $wa . "' WHERE id='" . $id . "'";
	$sql = mysqli_query($connect, $query);

	if ($sql) {
		// Jika sukses, redirect ke halaman pengaturan
		header("location: ubah?id=" . $id);
	} else {
		// Jika gagal, tampilkan pesan error
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='ubah?id=" . $id . "'>Kembali Ke Form</a>";
	}
} else {
	// Jika ID admin tidak ditemukan
	echo "Admin dengan ID tersebut tidak ditemukan.";
	echo "<br><a href='ubah?id=" . $id . "'>Kembali Ke Form</a>";
}
