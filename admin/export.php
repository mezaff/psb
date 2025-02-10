<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_siswa.xls");
header("Pragma: no-cache");
header("Expires: 0");

include "../koneksi.php";

// Fungsi untuk mengambil nama wilayah dari API
function getWilayahName($url, $id)
{
	$response = file_get_contents($url);
	$data = json_decode($response, true);
	if (isset($data['result'])) {
		foreach ($data['result'] as $item) {
			if ($item['id'] == $id) {
				return $item['text']; // Ambil nama wilayah
			}
		}
	}
	return "Tidak ditemukan";
}

echo "<table border='1'>";
echo "<tr>
        <th>NO</th>
        <th>NIK</th>
        <th>NISN</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>No HP</th>
        <th>Alamat</th>
        <th>Desa</th>
        <th>Kecamatan</th>
        <th>Kabupaten</th>
        <th>Provinsi</th>
        <th>Kode Pos</th>
        <th>Jarak ke Lembaga</th>
        <th>Transportasi</th>
        <th>Waktu Tempuh</th>
        <th>Asal Sekolah</th>
        <th>No KK</th>
        <th>NIK Ayah</th>
        <th>Nama Ayah</th>
        <th>Tempat Lahir Ayah</th>
        <th>Tanggal Lahir Ayah</th>
        <th>Pendidikan Ayah</th>
        <th>Pekerjaan Ayah</th>
        <th>Penghasilan Ayah</th>
        <th>NIK Ibu</th>
        <th>Nama Ibu</th>
        <th>Tempat Lahir Ibu</th>
        <th>Tanggal Lahir Ibu</th>
        <th>Pendidikan Ibu</th>
        <th>Pekerjaan Ibu</th>
        <th>Penghasilan Ibu</th>
        <th>No HP Ortu</th>
        <th>Minat & Bakat</th>
        <th>Tujuan & Harapan</th>
        <th>Sumber Informasi Tentang PonPes</th>
      </tr>";

$no = 1;
$query = "SELECT * FROM siswa";
$sql = mysqli_query($connect, $query);

while ($data = mysqli_fetch_array($sql)) {
	// Ambil ID wilayah
	$id_provinsi = $data['provinsipd'];
	$id_kabupaten = $data['kabupatenpd'];
	$id_kecamatan = $data['kecamatanpd'];
	$id_desa = $data['desapd'];

	// Konversi ID ke nama wilayah
	$provinsi = getWilayahName('https://alamat.thecloudalert.com/api/provinsi/get/', $id_provinsi);
	$kabupaten = getWilayahName("https://alamat.thecloudalert.com/api/kabkota/get/?d_provinsi_id=$id_provinsi", $id_kabupaten);
	$kecamatan = getWilayahName("https://alamat.thecloudalert.com/api/kecamatan/get/?d_kabkota_id=$id_kabupaten", $id_kecamatan);
	$desa = getWilayahName("https://alamat.thecloudalert.com/api/kelurahan/get/?d_kecamatan_id=$id_kecamatan", $id_desa);

	echo "<tr>
            <td>" . $no++ . "</td>
            <td>" . $data['nik'] . "</td>
            <td>" . $data['nisn'] . "</td>
            <td>" . $data['namapd'] . "</td>
            <td>" . $data['jk'] . "</td>
            <td>" . $data['tempatlahirpd'] . "</td>
            <td>" . $data['tanggallahirpd'] . "</td>
            <td>" . $data['wapd'] . "</td>
            <td>" . $data['alamatpd'] . "</td>
            <td>" . $desa . "</td>
            <td>" . $kecamatan . "</td>
            <td>" . $kabupaten . "</td>
            <td>" . $provinsi . "</td>
            <td>" . $data['kodepos'] . "</td>
            <td>" . $data['jarak'] . "</td>
            <td>" . $data['transportasi'] . "</td>
            <td>" . $data['waktu'] . "</td>
            <td>" . $data['asalsekolah'] . "</td>
            <td>" . $data['kk'] . "</td>
            <td>" . $data['nikayah'] . "</td>
            <td>" . $data['namaayah'] . "</td>
            <td>" . $data['tempatlahirayah'] . "</td>
            <td>" . $data['tanggallahirayah'] . "</td>
            <td>" . $data['pendidikanayah'] . "</td>
            <td>" . $data['pekerjaanayah'] . "</td>
            <td>" . $data['penghasilanayah'] . "</td>
            <td>" . $data['nikibu'] . "</td>
            <td>" . $data['namaibu'] . "</td>
            <td>" . $data['tempatlahiribu'] . "</td>
            <td>" . $data['tanggallahiribu'] . "</td>
            <td>" . $data['pendidikanibu'] . "</td>
            <td>" . $data['pekerjaanibu'] . "</td>
            <td>" . $data['penghasilanibu'] . "</td>
            <td>" . $data['wawali'] . "</td>
            <td>" . $data['bantuan'] . "</td>
            <td>" . $data['prestasi'] . "</td>
            <td>" . $data['nomorbantuan'] . "</td>
        </tr>";
}

echo "</table>";
