<?php
include "koneksi.php";

$nik = mysqli_real_escape_string($connect, $_POST['nik']);
$nisn = mysqli_real_escape_string($connect, $_POST['nisn']);
$namapd = mysqli_real_escape_string($connect, $_POST['namapd']);
$jk = mysqli_real_escape_string($connect, $_POST['jk']);
$tempatlahirpd = mysqli_real_escape_string($connect, $_POST['tempatlahirpd']);
$tanggallahirpd = mysqli_real_escape_string($connect, $_POST['tanggallahirpd']);
$wapd = mysqli_real_escape_string($connect, $_POST['wapd']);
$wawali = mysqli_real_escape_string($connect, $_POST['wawali']);
$desapd = mysqli_real_escape_string($connect, $_POST['desapd']);
$kecamatanpd = mysqli_real_escape_string($connect, $_POST['kecamatanpd']);
$kabupatenpd = mysqli_real_escape_string($connect, $_POST['kabupatenpd']);
$provinsipd = mysqli_real_escape_string($connect, $_POST['provinsipd']);
$kodepos = mysqli_real_escape_string($connect, $_POST['kodepos']);
$alamatpd = mysqli_real_escape_string($connect, $_POST['alamatpd']);
$jarak = mysqli_real_escape_string($connect, $_POST['jarak']);
$transportasi = mysqli_real_escape_string($connect, $_POST['transportasi']);
$waktu = mysqli_real_escape_string($connect, $_POST['waktu']);
$jenispd = mysqli_real_escape_string($connect, $_POST['jenispd']);
$jenjang = mysqli_real_escape_string($connect, $_POST['jenjang']);
$asalsekolah = mysqli_real_escape_string($connect, $_POST['asalsekolah']);
$kk = mysqli_real_escape_string($connect, $_POST['kk']);
$nikayah = mysqli_real_escape_string($connect, $_POST['nikayah']);
$namaayah = mysqli_real_escape_string($connect, $_POST['namaayah']);
$tempatlahirayah = mysqli_real_escape_string($connect, $_POST['tempatlahirayah']);
$tanggallahirayah = mysqli_real_escape_string($connect, $_POST['tanggallahirayah']);
$pendidikanayah = mysqli_real_escape_string($connect, $_POST['pendidikanayah']);
$pekerjaanayah = mysqli_real_escape_string($connect, $_POST['pekerjaanayah']);
$penghasilanayah = mysqli_real_escape_string($connect, $_POST['penghasilanayah']);
$nikibu = mysqli_real_escape_string($connect, $_POST['nikibu']);
$namaibu = mysqli_real_escape_string($connect, $_POST['namaibu']);
$tempatlahiribu = mysqli_real_escape_string($connect, $_POST['tempatlahiribu']);
$tanggallahiribu = mysqli_real_escape_string($connect, $_POST['tanggallahiribu']);
$pendidikanibu = mysqli_real_escape_string($connect, $_POST['pendidikanibu']);
$pekerjaanibu = mysqli_real_escape_string($connect, $_POST['pekerjaanibu']);
$penghasilanibu = mysqli_real_escape_string($connect, $_POST['penghasilanibu']);
$prestasi = mysqli_real_escape_string($connect, $_POST['prestasi']);
$jaminan = mysqli_real_escape_string($connect, $_POST['jaminan']);
$nomorbantuan = mysqli_real_escape_string($connect, $_POST['nomorbantuan']);
$pkh = mysqli_real_escape_string($connect, $_POST['pkh']);
$bantuan = mysqli_real_escape_string($connect, $_POST['bantuan']);
$status = 1;
$keterangan = 1;

if (empty($provinsipd) || empty($kabupatenpd) || empty($kecamatanpd) || empty($desapd)) {
	die("Error: Pastikan memilih wilayah (Provinsi, Kabupaten, Kecamatan, Desa).");
}

function formatNomorTelepon($nomor)
{
	$nomor = trim($nomor);

	// Jika nomor diawali dengan "0", ubah ke format internasional "62"
	if (substr($nomor, 0, 1) === '0') {
		$nomor = '62' . substr($nomor, 1);
	}

	// Pastikan hanya angka
	if (!preg_match('/^[0-9]+$/', $nomor)) {
		die("Error: Nomor telepon hanya boleh mengandung angka.");
	}

	// Pastikan panjang nomor antara 11-13 digit
	if (strlen($nomor) < 11 || strlen($nomor) > 13) {
		die("Error: Nomor telepon tidak valid. Panjang nomor harus antara 11-13 digit.");
	}

	return $nomor;
}

// Validasi dan format nomor telepon untuk $wapd dan $wawali
$wapd = formatNomorTelepon($wapd);
$wawali = formatNomorTelepon($wawali);

$query = "SELECT * FROM siswa WHERE nisn = '$nisn'";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
	header("Location: gagal");
	exit();
} else {
	$namaFolder = preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($namapd));
	$targetDir = "uploads/" . $namaFolder . "/";

	if (!file_exists($targetDir)) {
		mkdir($targetDir, 0777, true);
	}

	function uploadFile($file, $folder, $customName)
	{
		if (!isset($_FILES[$file]) || $_FILES[$file]['error'] !== UPLOAD_ERR_OK) {
			return NULL; // Kembalikan NULL jika file tidak di-upload
		}

		$allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
		$fileType = $_FILES[$file]['type'];
		$fileSize = $_FILES[$file]['size'];
		$tmpName = $_FILES[$file]['tmp_name'];

		if ($fileSize > 2000000) {
			die("Error: Ukuran file terlalu besar! Maksimal 2MB.");
		}

		if (!in_array($fileType, $allowedTypes)) {
			die("Error: Format file tidak didukung! Hanya JPG, PNG, atau PDF.");
		}

		$fileExt = pathinfo($_FILES[$file]['name'], PATHINFO_EXTENSION);
		$fileName = $customName . '.' . $fileExt;
		$targetFilePath = $folder . "/" . $fileName;

		if (move_uploaded_file($tmpName, $targetFilePath)) {
			return $fileName; // Jika berhasil upload, kembalikan nama file
		} else {
			return NULL; // Kembalikan NULL jika gagal upload
		}
	}

	// Upload file, jika tidak ada file, maka akan di-set ke NULL
	$upload_akte = uploadFile('upload_akte', $targetDir, $namaFolder . "_akte");
	$upload_nisn = uploadFile('upload_nisn', $targetDir, $namaFolder . "_nisn");
	$upload_ijasah = uploadFile('upload_ijasah', $targetDir, $namaFolder . "_ijasah");
	$upload_kk = uploadFile('upload_kk', $targetDir, $namaFolder . "_kk");
	$upload_ktp_ortu = uploadFile('upload_ktp_ortu', $targetDir, $namaFolder . "_ktp_ortu");
	$pkh = uploadFile('pkh', $targetDir, $namaFolder . "_bukti_pembayaran");

	// Insert data ke dalam database
	$query = "INSERT INTO siswa (
        nik, nisn, namapd, jk, tempatlahirpd, tanggallahirpd, wapd, desapd, kecamatanpd, kabupatenpd, provinsipd, kodepos, alamatpd, jarak, transportasi, waktu, jenispd, jenjang, asalsekolah, kk, nikayah, namaayah, tempatlahirayah, tanggallahirayah, pendidikanayah, pekerjaanayah, penghasilanayah, nikibu, namaibu, tempatlahiribu, tanggallahiribu, pendidikanibu, pekerjaanibu, penghasilanibu, wawali, prestasi, jaminan, nomorbantuan, bantuan, status, keterangan, 
        upload_akte, upload_nisn, upload_ijasah, upload_kk, pkh, upload_ktp_ortu) 
        VALUES (
        '$nik', '$nisn', '$namapd', '$jk', '$tempatlahirpd', '$tanggallahirpd', '$wapd', '$desapd', '$kecamatanpd', '$kabupatenpd', '$provinsipd', '$kodepos', '$alamatpd', '$jarak', '$transportasi', '$waktu', '$jenispd', '$jenjang', '$asalsekolah', '$kk', '$nikayah', '$namaayah', '$tempatlahirayah', '$tanggallahirayah', '$pendidikanayah', '$pekerjaanayah', '$penghasilanayah', '$nikibu', '$namaibu', '$tempatlahiribu', '$tanggallahiribu', '$pendidikanibu', '$pekerjaanibu', '$penghasilanibu', '$wawali', '$prestasi', '$jaminan', '$nomorbantuan', '$bantuan', '$status', '$keterangan', 
        " .
		(is_null($upload_akte) ? "NULL" : "'$upload_akte'") . ", 
        " .
		(is_null($upload_nisn) ? "NULL" : "'$upload_nisn'") . ", 
        " .
		(is_null($upload_ijasah) ? "NULL" : "'$upload_ijasah'") . ", 
        " .
		(is_null($upload_kk) ? "NULL" : "'$upload_kk'") . ", 
        " .
		(is_null($pkh) ? "NULL" : "'$pkh'") . ", 
        " .
		(is_null($upload_ktp_ortu) ? "NULL" : "'$upload_ktp_ortu'") .
		")";

	$sql = mysqli_query($connect, $query);

	if ($sql) {
		header("Location: sukses");
	} else {
		echo "Error: Gagal menyimpan data.";
	}
}
