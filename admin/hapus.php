<?php
// Load file koneksi.php
include "../koneksi.php";

// Ambil data NIS yang dikirim oleh index melalui URL
$id = $_GET['id'];

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM siswa WHERE id='" . $id . "'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM siswa WHERE id='" . $id . "'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if ($sql2) { // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: datasantri"); // Redirect ke halaman index
} else {
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='/santribaru/admin'>Kembali</a>";
}
