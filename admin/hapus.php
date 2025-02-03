<?php
// Load file koneksi.php
include "../koneksi.php";

// Ambil ID yang dikirim melalui URL
$id = $_GET['id'];

// Query untuk menampilkan data siswa berdasarkan ID
$query = "SELECT * FROM siswa WHERE id='" . $id . "'";
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_array($sql);

if ($data) {
	// Tentukan folder tempat penyimpanan file berdasarkan nama siswa
	$namaFolder = preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($data['namapd']));
	$targetDir = "../uploads/" . $namaFolder . "/";

	// Ambil nama file dari database
	$files = [
		'upload_akte' => $data['upload_akte'],
		'upload_nisn' => $data['upload_nisn'],
		'upload_ijasah' => $data['upload_ijasah'],
		'upload_kk' => $data['upload_kk'],
		'upload_ktp_ortu' => $data['upload_ktp_ortu']
	];

	// Hapus semua file yang terkait
	foreach ($files as $file) {
		$filePath = $targetDir . $file;
		if (!empty($file) && file_exists($filePath)) {
			unlink($filePath); // Hapus file
		}
	}

	// Hapus folder jika kosong
	if (is_dir($targetDir)) {
		rmdir($targetDir);
	}

	// Query untuk menghapus data siswa berdasarkan ID
	$query2 = "DELETE FROM siswa WHERE id='" . $id . "'";
	$sql2 = mysqli_query($connect, $query2);

	if ($sql2) {
		// Jika sukses, redirect ke halaman data
		header("location: datasantri2");
		exit();
	} else {
		echo "Data gagal dihapus. <a href='/santribaru/admin'>Kembali</a>";
	}
} else {
	echo "Data tidak ditemukan.";
}
