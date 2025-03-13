<?php
include "../koneksi.php";

// Ambil data ID yang dikirim melalui URL secara aman
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Query untuk menampilkan data siswa berdasarkan ID
$query = "SELECT * FROM siswa WHERE id='$id'";
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_array($sql);

if (!$data) {
    echo "Data tidak ditemukan!";
    exit;
}

// Pastikan semua nilai aman dari karakter khusus
function escape($value) {
    global $connect;
    return mysqli_real_escape_string($connect, $value);
}

$nik = escape($data['nik']);
$nisn = escape($data['nisn']);
$namapd = escape($data['namapd']);
$jk = escape($data['jk']);
$tempatlahirpd = escape($data['tempatlahirpd']);
$tanggallahirpd = escape($data['tanggallahirpd']);
$wapd = escape($data['wapd']);
$desapd = escape($data['desapd']);
$kecamatanpd = escape($data['kecamatanpd']);
$kabupatenpd = escape($data['kabupatenpd']);
$provinsipd = escape($data['provinsipd']);
$kodepos = escape($data['kodepos']);
$alamatpd = escape($data['alamatpd']);
$jenispd = escape($data['jenispd']);
$jenjang = escape($data['jenjang']);
$asalsekolah = escape($data['asalsekolah']);
$kk = escape($data['kk']);
$nikayah = escape($data['nikayah']);
$namaayah = escape($data['namaayah']);
$tempatlahirayah = escape($data['tempatlahirayah']);
$tanggallahirayah = escape($data['tanggallahirayah']);
$pendidikanayah = escape($data['pendidikanayah']);
$pekerjaanayah = escape($data['pekerjaanayah']);
$penghasilanayah = escape($data['penghasilanayah']);
$nikibu = escape($data['nikibu']);
$namaibu = escape($data['namaibu']);
$tempatlahiribu = escape($data['tempatlahiribu']);
$tanggallahiribu = escape($data['tanggallahiribu']);
$pendidikanibu = escape($data['pendidikanibu']);
$pekerjaanibu = escape($data['pekerjaanibu']);
$penghasilanibu = escape($data['penghasilanibu']);
$wawali = escape($data['wawali']);
$prestasi = escape($data['prestasi']);
$jaminan = escape($data['jaminan']);
$nomorbantuan = escape($data['nomorbantuan']);
$pkh = escape($data['pkh']);
$bantuan = escape($data['bantuan']);
$status = 1;
$keterangan = 1;

// Proses ubah data ke Database
$query = "UPDATE siswa SET jenjang='$jenjang', nik='$nik', nisn='$nisn', namapd='$namapd', jk='$jk', tempatlahirpd='$tempatlahirpd', tanggallahirpd='$tanggallahirpd', wapd='$wapd', desapd='$desapd', kecamatanpd='$kecamatanpd', kabupatenpd='$kabupatenpd', provinsipd='$provinsipd', kodepos='$kodepos', alamatpd='$alamatpd', jenispd='$jenispd', asalsekolah='$asalsekolah', kk='$kk', nikayah='$nikayah', namaayah='$namaayah', tempatlahirayah='$tempatlahirayah', tanggallahirayah='$tanggallahirayah', pendidikanayah='$pendidikanayah', pekerjaanayah='$pekerjaanayah', penghasilanayah='$penghasilanayah', nikibu='$nikibu', namaibu='$namaibu', tempatlahiribu='$tempatlahiribu', tanggallahiribu='$tanggallahiribu', pendidikanibu='$pendidikanibu', pekerjaanibu='$pekerjaanibu', penghasilanibu='$penghasilanibu', wawali='$wawali', prestasi='$prestasi', jaminan='$jaminan', nomorbantuan='$nomorbantuan', pkh='$pkh', bantuan='$bantuan', status='$status', keterangan='$keterangan' WHERE id='$id'";

$sql = mysqli_query($connect, $query);

if ($sql) {
    header("Location: datasantri"); // Redirect ke halaman index
} else {
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br>Error: " . mysqli_error($connect);
    echo "<br><a href='/santribaru/admin'>Kembali</a>";
}