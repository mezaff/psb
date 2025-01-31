<?php
include("../koneksi.php");
session_start();
ob_start();
if (empty($_SESSION['status_login'])) {
	header("location:login");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Export Data PSB</title>
</head>

<body>
	<style type="text/css">
		body {
			font-family: sans-serif;
		}

		table {
			margin: 20px auto;
			border-collapse: collapse;
		}

		table th,
		table td {
			border: 1px solid #3c3c3c;
			padding: 3px 8px;

		}

		a {
			background: blue;
			color: #fff;
			padding: 8px 10px;
			text-decoration: none;
			border-radius: 2px;
		}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Verifikasi PSB.xls");
	?>

	<center>
		<?php
		// Load file koneksi.php
		include "../koneksi.php";

		$query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

		while ($data = mysqli_fetch_array($sql)) {


			echo "<h5> " . $data['nama'] . " Tahun Ajaran " . $data['tahun'] . "</h5>";
		} ?>
	</center>

	<table border="1">
		<tr>
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
			<th>Kec</th>
			<th>Kab</th>
			<th>Prov</th>
			<th>Kode Pos</th>
			<th>Jarak ke Lembaga</th>
			<th>Transportasi ke Lembaga</th>
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
			<th>Kartu</th>

		</tr>
		<?php
		error_reporting(0);
		include "../koneksi.php";
		$no = 1;
		$query = "SELECT * FROM siswa"; // Query untuk menampilkan semua data siswa
		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query


		while ($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
			echo "<tr>";
			echo "<td>" . $no++ . "</td>";
			echo "<td>" . $data['nik'] . "</td>";
			echo "<td>" . $data['nisn'] . "</td>";
			echo "<td>" . $data['namapd'] . "</td>";
			echo "<td>" . $data['jk'] . "</td>";
			echo "<td>" . $data['tempatlahirpd'] . "</td>";
			echo "<td>" . $data['tanggallahirpd'] . "</td>";
			echo "<td>" . $data['wapd'] . "</td>";
			echo "<td>" . $data['alamatpd'] . "</td>";
			echo "<td>" . $data['desapd'] . "</td>";
			echo "<td>" . $data['kecamatanpd'] . "</td>";
			echo "<td>" . $data['kabupatenpd'] . "</td>";
			echo "<td>" . $data['provinsipd'] . "</td>";
			echo "<td>" . $data['kodepos'] . "</td>";
			echo "<td>" . $data['jarak'] . "</td>";
			echo "<td>" . $data['transportasi'] . "</td>";
			echo "<td>" . $data['waktu'] . "</td>";
			echo "<td>" . $data['asalsekolah'] . "</td>";
			echo "<td>" . $data['kk'] . "</td>";
			echo "<td>" . $data['nikayah'] . "</td>";
			echo "<td>" . $data['namaayah'] . "</td>";
			echo "<td>" . $data['tempatlahirayah'] . "</td>";
			echo "<td>" . $data['tanggallahirayah'] . "</td>";
			echo "<td>" . $data['pendidikanayah'] . "</td>";
			echo "<td>" . $data['pekerjaanayah'] . "</td>";
			echo "<td>" . $data['penghasilanayah'] . "</td>";
			echo "<td>" . $data['nikibu'] . "</td>";
			echo "<td>" . $data['namaibu'] . "</td>";
			echo "<td>" . $data['tempatlahiribu'] . "</td>";
			echo "<td>" . $data['tanggallahiribu'] . "</td>";
			echo "<td>" . $data['pendidikanibu'] . "</td>";
			echo "<td>" . $data['pekerjaanibu'] . "</td>";
			echo "<td>" . $data['penghasilanibu'] . "</td>";
			echo "<td>" . $data['wawali'] . "</td>";
			echo "<td>" . $data['bantuan'] . "</td>";



			echo "</tr>";
		}
		?>
	</table>
</body>

</html>