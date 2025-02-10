<?php
include "koneksi.php"; // Pastikan koneksi database sudah benar

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Pastikan ID dikirim dari form
	if (!isset($_POST['id']) || empty($_POST['id'])) {
		die("Error: ID tidak ditemukan dalam form.");
	}

	// Ambil ID dari input hidden
	$id = mysqli_real_escape_string($connect, $_POST['id']);

	// Ambil data lama dari database
	$queryOld = "SELECT * FROM siswa WHERE id = '$id'";
	$resultOld = mysqli_query($connect, $queryOld);

	if (!$resultOld || mysqli_num_rows($resultOld) == 0) {
		die("Error: Data tidak ditemukan di database.");
	}

	$oldData = mysqli_fetch_assoc($resultOld);

	// Inisialisasi array untuk menyimpan perubahan
	$updates = [];

	// Fungsi untuk membandingkan data lama dan baru
	function cekPerubahan($kolom, $nilai_baru)
	{
		global $oldData, $updates, $connect;
		$nilai_lama = $oldData[$kolom];
		$nilai_baru = mysqli_real_escape_string($connect, $nilai_baru);

		if ($nilai_baru !== $nilai_lama) {
			$updates[] = "$kolom = '$nilai_baru'";
		}
	}

	// Cek perubahan untuk setiap field (kecuali file)
	$fields = [
		'nisn',
		'nik',
		'namapd',
		'jk',
		'tempatlahirpd',
		'tanggallahirpd',
		'wapd',
		'wawali',
		'desapd',
		'kecamatanpd',
		'kabupatenpd',
		'provinsipd',
		'kodepos',
		'alamatpd',
		'jarak',
		'transportasi',
		'waktu',
		'jenispd',
		'jenjang',
		'asalsekolah',
		'kk',
		'nikayah',
		'namaayah',
		'tempatlahirayah',
		'tanggallahirayah',
		'pendidikanayah',
		'pekerjaanayah',
		'penghasilanayah',
		'nikibu',
		'namaibu',
		'tempatlahiribu',
		'tanggallahiribu',
		'pendidikanibu',
		'pekerjaanibu',
		'penghasilanibu',
		'prestasi',
		'jaminan',
		'nomorbantuan',
		'pkh',
		'bantuan'
	];

	// Cek perubahan untuk setiap field biasa (non-file)
	foreach ($fields as $field) {
		if (isset($_POST[$field])) {
			cekPerubahan($field, $_POST[$field]);
		}
	}

	// Fungsi untuk mengupload file jika ada perubahan
	function uploadFile($file, $folder, $customName, $kolom)
	{
		global $updates;

		// Cek apakah ada file yang diupload
		if (isset($_FILES[$file]) && $_FILES[$file]['error'] === UPLOAD_ERR_OK) {
			// Cek tipe file yang diupload
			$allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
			$fileType = $_FILES[$file]['type'];
			$fileSize = $_FILES[$file]['size'];
			$tmpName = $_FILES[$file]['tmp_name'];

			// Cek ukuran file (maksimal 2MB)
			if ($fileSize > 2000000) {
				die("Error: Ukuran file terlalu besar! Maksimal 2MB.");
			}

			// Cek format file yang didukung
			if (!in_array($fileType, $allowedTypes)) {
				die("Error: Format file tidak didukung! Hanya JPG, PNG, atau PDF.");
			}

			// Ambil ekstensi file dan nama file yang akan digunakan
			$fileExt = pathinfo($_FILES[$file]['name'], PATHINFO_EXTENSION);
			$fileName = $customName . '.' . $fileExt;
			$targetFilePath = $folder . "/" . $fileName;

			// Pastikan folder upload ada dan bisa ditulisi
			if (!is_dir($folder)) {
				// Coba buat folder jika belum ada
				if (!mkdir($folder, 0777, true)) {
					die("Error: Gagal membuat folder.");
				}
			}

			if (!is_writable($folder)) {
				die("Error: Folder tidak dapat ditulisi.");
			}

			$oldFiles = glob($folder . "/" . pathinfo($targetFilePath, PATHINFO_FILENAME) . ".*");
			foreach ($oldFiles as $oldFile) {
				unlink($oldFile);
			}

			// Cek apakah file berhasil dipindahkan ke folder tujuan
			if (move_uploaded_file($tmpName, $targetFilePath)) {
				// Tambahkan perubahan file ke array update
				$updates[] = "$kolom = '$fileName'";
			} else {
				die("Error: Gagal mengupload file.");
			}
		}
	}


	// Folder upload
	$namaFolder = preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($_POST['namapd']));
	$targetDir = "../uploads/" . $namaFolder . "/";

	// Proses upload file untuk setiap file yang ada
	if (isset($_FILES['upload_akte']) && $_FILES['upload_akte']['error'] === UPLOAD_ERR_OK) {
		uploadFile('upload_akte', $targetDir, $namaFolder . "_akte", 'upload_akte');
	}

	if (isset($_FILES['upload_nisn']) && $_FILES['upload_nisn']['error'] === UPLOAD_ERR_OK) {
		uploadFile('upload_nisn', $targetDir, $namaFolder . "_nisn", 'upload_nisn');
	}

	if (isset($_FILES['upload_ijasah']) && $_FILES['upload_ijasah']['error'] === UPLOAD_ERR_OK) {
		uploadFile('upload_ijasah', $targetDir, $namaFolder . "_ijasah", 'upload_ijasah');
	}

	if (isset($_FILES['upload_kk']) && $_FILES['upload_kk']['error'] === UPLOAD_ERR_OK) {
		uploadFile('upload_kk', $targetDir, $namaFolder . "_kk", 'upload_kk');
	}

	if (isset($_FILES['upload_ktp_ortu']) && $_FILES['upload_ktp_ortu']['error'] === UPLOAD_ERR_OK) {
		uploadFile('upload_ktp_ortu', $targetDir, $namaFolder . "_ktp_ortu", 'upload_ktp_ortu');
	}
	if (isset($_FILES['pkh']) && $_FILES['pkh']['error'] === UPLOAD_ERR_OK) {
		uploadFile('pkh', $targetDir, $namaFolder . "_bukti_pembayaran", 'pkh');
	}

	// Update data ke database hanya jika ada perubahan
	if (!empty($updates)) {
		$queryUpdate = "UPDATE siswa SET " . implode(", ", $updates) . " WHERE id = '$id'";
		$sql = mysqli_query($connect, $queryUpdate);

		if ($sql) {
			header("Location: ../admin/edit?id=$id");
			exit;
		} else {
			die("Error: Gagal mengupdate data. " . mysqli_error($connect));
		}
	} else {
		// Jika tidak ada perubahan pada data atau file
		echo "Tidak ada perubahan data atau file.";
	}
}
