<?php
include "../koneksi.php";

// Ambil data ID yang dikirim melalui URL dan pastikan berupa angka
$id = intval($_GET['id']);

// Query untuk menampilkan data siswa berdasarkan ID
$query = "SELECT * FROM siswa WHERE id=$id";
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_array($sql);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit;
}

// Escape string untuk mencegah error SQL
function escape($value, $conn) {
    return mysqli_real_escape_string($conn, $value);
}

$nik = escape($data['nik'], $connect);
$nisn = escape($data['nisn'], $connect);
$namapd = escape($data['namapd'], $connect);
$jk = escape($data['jk'], $connect);
$tempatlahirpd = escape($data['tempatlahirpd'], $connect);
$tanggallahirpd = escape($data['tanggallahirpd'], $connect);
$wapd = escape($data['wapd'], $connect);
$desapd = escape($data['desapd'], $connect);
$kecamatanpd = escape($data['kecamatanpd'], $connect);
$kabupatenpd = escape($data['kabupatenpd'], $connect);
$provinsipd = escape($data['provinsipd'], $connect);
$kodepos = escape($data['kodepos'], $connect);
$alamatpd = escape($data['alamatpd'], $connect);
$jenispd = escape($data['jenispd'], $connect);
$jenjang = escape($data['jenjang'], $connect);
$asalsekolah = escape($data['asalsekolah'], $connect);
$kk = escape($data['kk'], $connect);
$nikayah = escape($data['nikayah'], $connect);
$namaayah = escape($data['namaayah'], $connect);
$tempatlahirayah = escape($data['tempatlahirayah'], $connect);
$tanggallahirayah = escape($data['tanggallahirayah'], $connect);
$pendidikanayah = escape($data['pendidikanayah'], $connect);
$pekerjaanayah = escape($data['pekerjaanayah'], $connect);
$penghasilanayah = escape($data['penghasilanayah'], $connect);
$nikibu = escape($data['nikibu'], $connect);
$namaibu = escape($data['namaibu'], $connect);
$tempatlahiribu = escape($data['tempatlahiribu'], $connect);
$tanggallahiribu = escape($data['tanggallahiribu'], $connect);
$pendidikanibu = escape($data['pendidikanibu'], $connect);
$pekerjaanibu = escape($data['pekerjaanibu'], $connect);
$penghasilanibu = escape($data['penghasilanibu'], $connect);
$wawali = escape($data['wawali'], $connect);
$prestasi = escape($data['prestasi'], $connect);
$jaminan = escape($data['jaminan'], $connect);
$nomorbantuan = escape($data['nomorbantuan'], $connect);
$pkh = escape($data['pkh'], $connect);
$bantuan = escape($data['bantuan'], $connect);
$status = 2;
$keterangan = 1;

// Query UPDATE data siswa
$query = "UPDATE siswa SET jenjang='$jenjang', nik='$nik', nisn='$nisn', namapd='$namapd', jk='$jk', tempatlahirpd='$tempatlahirpd', tanggallahirpd='$tanggallahirpd', wapd='$wapd', desapd='$desapd', kecamatanpd='$kecamatanpd', kabupatenpd='$kabupatenpd', provinsipd='$provinsipd', kodepos='$kodepos', alamatpd='$alamatpd', jenispd='$jenispd', asalsekolah='$asalsekolah', kk='$kk', nikayah='$nikayah', namaayah='$namaayah', tempatlahirayah='$tempatlahirayah', tanggallahirayah='$tanggallahirayah', pendidikanayah='$pendidikanayah', pekerjaanayah='$pekerjaanayah', penghasilanayah='$penghasilanayah', nikibu='$nikibu', namaibu='$namaibu', tempatlahiribu='$tempatlahiribu', tanggallahiribu='$tanggallahiribu', pendidikanibu='$pendidikanibu', pekerjaanibu='$pekerjaanibu', penghasilanibu='$penghasilanibu', wawali='$wawali', prestasi='$prestasi', jaminan='$jaminan', nomorbantuan='$nomorbantuan', pkh='$pkh', bantuan='$bantuan', status='$status', keterangan='$keterangan' WHERE id=$id";

$sql = mysqli_query($connect, $query);

if ($sql) {
    header("Location: datasantri"); // Redirect jika sukses
} else {
    echo "Error: " . mysqli_error($connect); // Tampilkan error jika gagal
}