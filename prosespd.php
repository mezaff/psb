<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data dari Form
$nik = $_POST['nik'];
$nisn = $_POST['nisn'];
$namapd = $_POST['namapd'];
$jk = $_POST['jk'];
$tempatlahirpd = $_POST['tempatlahirpd'];
$tanggallahirpd = $_POST['tanggallahirpd'];
$wapd = $_POST['wapd'];
$desapd = $_POST['desapd'];
$kecamatanpd = $_POST['kecamatanpd'];
$kabupatenpd = $_POST['kabupatenpd'];
$provinsipd = $_POST['provinsipd'];
$kodepos = $_POST['kodepos'];
$alamatpd = $_POST['alamatpd'];
$jarak = $_POST['jarak'];
$transportasi = $_POST['transportasi'];
$waktu = $_POST['waktu'];
$jenispd = $_POST['jenispd'];
$jenjang = $_POST['jenjang'];
$asalsekolah = $_POST['asalsekolah'];
$kk = $_POST['kk'];
$nikayah = $_POST['nikayah'];
$namaayah = $_POST['namaayah'];
$tempatlahirayah = $_POST['tempatlahirayah'];
$tanggallahirayah = $_POST['tanggallahirayah'];
$pendidikanayah = $_POST['pendidikanayah'];
$pekerjaanayah = $_POST['pekerjaanayah'];
$penghasilanayah = $_POST['penghasilanayah'];
$nikibu = $_POST['nikibu'];
$namaibu = $_POST['namaibu'];
$tempatlahiribu = $_POST['tempatlahiribu'];
$tanggallahiribu = $_POST['tanggallahiribu'];
$pendidikanibu = $_POST['pendidikanibu'];
$pekerjaanibu = $_POST['pekerjaanibu'];
$penghasilanibu = $_POST['penghasilanibu'];
$wawali = $_POST['wawali'];
$prestasi = $_POST['prestasi'];
$jaminan = $_POST['jaminan'];
$nomorbantuan = $_POST['nomorbantuan'];
$pkh = $_POST['pkh'];
$bantuan = $_POST['bantuan'];
$status = 1;
$keterangan = 1;

// Validasi dan format nomor telepon
if (substr($wapd, 0, 1) === '0') {
	$wapd = '62' . substr($wapd, 1);
} elseif (substr($wapd, 0, 2) !== '62') {
	if (!preg_match('/^[0-9]+$/', $wapd)) {
		die("Error: Nomor telepon hanya boleh mengandung angka.");
	}
	if (strlen($wapd) < 11 || strlen($wapd) > 13) {
		die("Error: Nomor telepon tidak valid. Panjang nomor harus antara 11-13 digit.");
	}
}

// Cek apakah NISN sudah ada di database
$query = "SELECT * FROM siswa WHERE nisn = '$nisn'";
$result = mysqli_query($connect, $query);

// Jika NISN sudah ada, arahkan ke halaman gagal
if (mysqli_num_rows($result) > 0) {
	header("Location: gagal"); // Arahkan ke halaman gagal
	exit(); // Pastikan proses berhenti setelah redirect
} else {
	// Jika tidak ada error, lanjutkan dengan proses penyimpanan
	$namaFolder = preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($namapd)); // Hilangkan karakter aneh dan ubah ke lowercase
	$targetDir = "uploads/" . $namaFolder . "/";

	// Buat folder jika belum ada
	if (!file_exists($targetDir)) {
		mkdir($targetDir, 0777, true);
	}

	// Fungsi untuk upload file
	function uploadFile($file, $folder)
	{
		$allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
		$fileType = $_FILES[$file]['type'];
		$fileSize = $_FILES[$file]['size'];
		$tmpName = $_FILES[$file]['tmp_name'];
		$fileName = time() . "_" . basename($_FILES[$file]['name']); // Tambah timestamp agar unik
		$targetFilePath = $folder . $fileName;

		if ($fileSize > 2000000) {
			die("Error: Ukuran file terlalu besar! Maksimal 2MB.");
		}

		if (!in_array($fileType, $allowedTypes)) {
			die("Error: Format file tidak didukung! Hanya JPG, PNG, atau PDF.");
		}

		if (move_uploaded_file($tmpName, $targetFilePath)) {
			return $fileName; // Kembalikan nama file
		} else {
			die("Error: Gagal mengupload file.");
		}
	}

	// Upload file dan simpan namanya
	$upload_akte = uploadFile('upload_akte', $targetDir);
	$upload_kk = uploadFile('upload_kk', $targetDir);
	$upload_ktp_ortu = uploadFile('upload_ktp_ortu', $targetDir);

	// Simpan ke database
	$query = "INSERT INTO siswa (nik, nisn, namapd, jk, tempatlahirpd, tanggallahirpd, wapd, desapd, kecamatanpd, kabupatenpd, provinsipd, kodepos, alamatpd, jarak, transportasi, waktu, jenispd, jenjang, asalsekolah, kk, nikayah, namaayah, tempatlahirayah, tanggallahirayah, pendidikanayah, pekerjaanayah, penghasilanayah, nikibu, namaibu, tempatlahiribu, tanggallahiribu, pendidikanibu, pekerjaanibu, penghasilanibu, wawali, prestasi, jaminan, nomorbantuan, pkh, bantuan, status, keterangan, upload_akte, upload_kk, upload_ktp_ortu) 
    VALUES ('$nik', '$nisn', '$namapd', '$jk', '$tempatlahirpd', '$tanggallahirpd', '$wapd', '$desapd', '$kecamatanpd', '$kabupatenpd', '$provinsipd', '$kodepos', '$alamatpd', '$jarak', '$transportasi', '$waktu', '$jenispd', '$jenjang', '$asalsekolah', '$kk', '$nikayah', '$namaayah', '$tempatlahirayah', '$tanggallahirayah', '$pendidikanayah', '$pekerjaanayah', '$penghasilanayah', '$nikibu', '$namaibu', '$tempatlahiribu', '$tanggallahiribu', '$pendidikanibu', '$pekerjaanibu', '$penghasilanibu', '$wawali', '$prestasi', '$jaminan', '$nomorbantuan', '$pkh', '$bantuan', '$status', '$keterangan', '$upload_akte', '$upload_kk', '$upload_ktp_ortu')";

	$sql = mysqli_query($connect, $query);

	if ($sql) {
		header("location: sukses");
	} else {
		echo "Error: Gagal menyimpan data.";
	}
}
