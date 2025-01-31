<?php
include "../koneksi.php";

// Ambil data NIS yang dikirim oleh index melalui URL
$id = $_GET['id'];


// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM siswa WHERE id='" . $id . "'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql);
// Load file koneksi.php

$id = $id;
$nik = $data['nik'];
$nisn = $data['nisn'];
$namapd = $data['namapd'];
$jk = $data['jk'];
$tempatlahirpd = $data['tempatlahirpd'];
$tanggallahirpd = $data['tanggallahirpd'];
$wapd = $data['wapd'];
$desapd = $data['desapd'];
$kecamatanpd = $data['kecamatanpd'];
$kabupatenpd = $data['kabupatenpd'];
$provinsipd = $data['provinsipd'];
$kodepos = $data['kodepos'];
$alamatpd = $data['alamatpd'];
$jarak = $data['jarak'];
$transportasi = $data['transportasi'];
$waktu = $data['waktu'];
$jenispd = $data['jenispd'];
$jenjang = $data['jenjang'];
$asalsekolah = $data['asalsekolah'];
$kk = $data['kk'];
$nikayah = $data['nikayah'];
$namaayah = $data['namaayah'];
$tempatlahirayah = $data['tempatlahirayah'];
$tanggallahirayah = $data['tanggallahirayah'];
$pendidikanayah = $data['pendidikanayah'];
$pekerjaanayah = $data['pekerjaanayah'];
$penghasilanayah = $data['penghasilanayah'];
$nikibu = $data['nikibu'];
$namaibu = $data['namaibu'];
$tempatlahiribu = $data['tempatlahiribu'];
$tanggallahiribu = $data['tanggallahiribu'];
$pendidikanibu = $data['pendidikanibu'];
$pekerjaanibu = $data['pekerjaanibu'];
$penghasilanibu = $data['penghasilanibu'];
$wawali = $data['wawali'];
$prestasi = $data['prestasi'];
$jaminan = $data['jaminan'];
$nomorbantuan = $data['nomorbantuan'];
$pkh = $data['pkh'];
$bantuan = $data['bantuan'];
$status = 2;
$keterangan = 1;


$query = "SELECT * FROM siswa WHERE id='" . $id . "'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Proses ubah data ke Database
$query = "UPDATE siswa SET jenjang='" . $jenjang . "', nik='" . $nik . "', nisn='" . $nisn . "', namapd='" . $namapd . "', jk='" . $jk . "', tempatlahirpd='" . $tempatlahirpd . "', tanggallahirpd='" . $tanggallahirpd . "', wapd='" . $wapd . "', desapd='" . $desapd . "', kecamatanpd='" . $kecamatanpd . "', kabupatenpd='" . $kabupatenpd . "', provinsipd='" . $provinsipd . "', kodepos='" . $kodepos . "', alamatpd='" . $alamatpd . "', jenispd='" . $jenispd . "', asalsekolah='" . $asalsekolah . "', kk='" . $kk . "', nikayah='" . $nikayah . "', namaayah='" . $namaayah . "', tempatlahirayah='" . $tempatlahirayah . "', tanggallahirayah='" . $tanggallahirayah . "' , pendidikanayah='" . $pendidikanayah . "', pekerjaanayah='" . $pekerjaanayah . "', penghasilanayah='" . $penghasilanayah . "', nikibu='" . $nikibu . "', namaibu='" . $namaibu . "', tempatlahiribu='" . $tempatlahiribu . "', tanggallahiribu='" . $tanggallahiribu . "' , pendidikanibu='" . $pendidikanibu . "', pekerjaanibu='" . $pekerjaanibu . "', penghasilanibu='" . $penghasilanibu . "', wawali='" . $wawali . "', prestasi='" . $prestasi . "', jaminan='" . $jaminan . "', nomorbantuan='" . $nomorbantuan . "', pkh='" . $pkh . "', bantuan='" . $bantuan . "', status='" . $status . "', keterangan='" . $keterangan . "' WHERE id='" . $id . "'";
$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: datasantri"); // Redirect ke halaman index
} else {
	// Jika Gagal, Lakukan :
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='form_ubah'>Kembali Ke Form</a>";
}
