<?php
include("../koneksi.php");
session_start();
ob_start();

// Cek apakah user sudah login
if (empty($_SESSION['status_login'])) {
  header("Location: login");
  exit;
}

$id_user = isset($_SESSION['id_user']) ? intval($_SESSION['id_user']) : 0;

// Pastikan ID tersedia di URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $id = intval($_GET['id']); // Konversi ke integer untuk keamanan

  // Ambil data siswa berdasarkan ID server local
  // $query = "SELECT * FROM siswa WHERE id = ?";
  // $stmt = mysqli_prepare($connect, $query);
  // mysqli_stmt_bind_param($stmt, "i", $id);
  // mysqli_stmt_execute($stmt);
  // $result = mysqli_stmt_get_result($stmt);
  // $data = mysqli_fetch_assoc($result);


  // Ambil data siswa berdasarkan ID server hosting
  $query = "SELECT * FROM siswa WHERE id = ?";
  $stmt = mysqli_prepare($connect, $query);
  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);

  $meta = mysqli_stmt_result_metadata($stmt);
  $row = [];
  while ($field = mysqli_fetch_field($meta)) {
    $var = $field->name;
    $$var = null;
    $row[$var] = &$$var;
  }
  call_user_func_array([$stmt, 'bind_result'], $row);

  if (mysqli_stmt_fetch($stmt)) {
    $data = [];
    foreach ($row as $key => $val) {
      $data[$key] = $val;
    }
  } else {
    $data = null;
  }

  mysqli_stmt_close($stmt);


  // Cek apakah data ditemukan
  if (!$data) {
    header("Location: error.php?msg=Data tidak ditemukan");
    exit;
  }
} else {
  header("Location: error.php?msg=ID tidak valid");
  exit;
}

function formatTanggal($tanggal)
{
  $bulan = [
    'January' => 'Januari',
    'February' => 'Februari',
    'March' => 'Maret',
    'April' => 'April',
    'May' => 'Mei',
    'June' => 'Juni',
    'July' => 'Juli',
    'August' => 'Agustus',
    'September' => 'September',
    'October' => 'Oktober',
    'November' => 'November',
    'December' => 'Desember'
  ];

  $tanggalObj = strtotime($tanggal);
  return date('d', $tanggalObj) . ' ' . $bulan[date('F', $tanggalObj)] . ' ' . date('Y', $tanggalObj);
}

$registrationId = "PSB-" . $data['id'].date("dmY");
$formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
$tanggalPembayaran = $formatter->format(new DateTime());

$totalBiaya = ($data['jk'] == "Perempuan") ? 1175000 : 1150000;

function terbilang($angka) {
  $angka = abs($angka);
  $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
  
  if ($angka < 12) {
      return $huruf[$angka];
  } elseif ($angka < 20) {
      return terbilang($angka - 10) . " Belas";
  } elseif ($angka < 100) {
      return terbilang($angka / 10) . " Puluh " . terbilang($angka % 10);
  } elseif ($angka < 200) {
      return "Seratus " . terbilang($angka - 100);
  } elseif ($angka < 1000) {
      return terbilang($angka / 100) . " Ratus " . terbilang($angka % 100);
  } elseif ($angka < 2000) {
      return "Seribu " . terbilang($angka - 1000);
  } elseif ($angka < 1000000) {
      return terbilang($angka / 1000) . " Ribu " . terbilang($angka % 1000);
  } elseif ($angka < 1000000000) {
      return terbilang($angka / 1000000) . " Juta " . terbilang($angka % 1000000);
  } elseif ($angka < 1000000000000) {
      return terbilang($angka / 1000000000) . " Miliar " . terbilang($angka % 1000000000);
  } else {
      return "Angka terlalu besar";
  }
}

$atasNama = $_GET['atas_nama'] ?? 'bapak';
$namaPenerima = ($atasNama === 'ibu') ?"Ibu " . $data['namaibu'] : "Bpk. " .  $data['namaayah'];
?>


<!DOCTYPE html>
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/sneat/assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Kwitansi | <?php echo $data['namapd']; ?></title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../gambar/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/sneat/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/sneat/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/sneat/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/sneat/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../assets/sneat/assets/vendor/js/helpers.js"></script>

  <script src="../assets/sneat/assets/js/config.js"></script>

  <style>
        body {
            font-family: Arial, sans-serif;
            color: #000 !important;
        }
        .bordered {
            border: 1px solid #000;
        }
        .highlight {
            background-color: #d1e7dd;
        }
        .compact p {
            margin-bottom: 0.2rem;
        }

        .label-value {
      display: flex;
      align-items: flex-start;
  }

  .label {
      min-width: 150px; /* Sesuaikan lebar label */
  }

  .value {
      flex: 1;
  }

  .right {
      position: relative;
      border-left: 2px dashed rgba(0, 0, 0, 0.3);
      height: 100%;
      padding-left: 20px;
  }

  .right::before {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      width: 70%; /* Sesuaikan ukuran watermark */
      height: 70%;
      background: url('../gambar/PSBONLINE.png') no-repeat center;
      background-size: contain; /* Sesuaikan ukuran gambar */
      opacity: 0.1; /* Transparansi agar teks tetap jelas */
      transform: translate(-50%, -50%); /* Pusatkan watermark */
      transform: translate(-50%, -50%) rotate(-30deg); /* Putar miring */
      z-index: -1; /* Pastikan di belakang teks */
  }

  
    </style>
</head>

<body>
  <!-- Content -->
   <div class="content-wrapper px-4">
    <div class="container-fluid flex-grow-1 container-p-y p-4 mt-2">
        <div class="row mb-4">
            <div class="col-12">
                <div class="bordered p-3 mb-4">
                    <div class="row">
                        <div class="col-4 p-3 compact">
                          <div>
                            <img src="../gambar/PSBONLINE.png" alt="logo" width="200" class="mb-2">
                          </div>
                          <hr>
                            <p>No : <span class="fw-semibold"><?php echo $registrationId; ?></span></p>
                            <p>Tanggal : <span class="fw-semibold"><?php echo $tanggalPembayaran ?></span></p>
                            <p>Telah Terima Dari : <span class="fw-semibold"><?php echo $namaPenerima ?></span></p>
                            <p>Jumlah : <span class="fw-semibold">Rp. <?php echo number_format($totalBiaya, 0, ',', '.'); ?>,-</span></p>
                            <p>Untuk Pembayaran : <span class="fw-semibold">Administrasi Pendaftaran Santri Baru Tahun Pelajaran 2025/2026 PP. Tarbiyatul Mutathowi'in</span></p>
                        </div>
                        <div class="col-8 p-3 compact right">
                            <div class="text-center fw-bold mb-2">KWITANSI PEMBAYARAN</div>
                            <div class="d-flex justify-content-between mb-2">
                                <div class="fw-semibold">No : <?php echo $registrationId; ?></div>
                                <div class="fw-semibold">Tanggal : <?php echo $tanggalPembayaran ?></div>
                            </div>
                            <hr>
                            <div class="label-value">
                              <div class="label">Telah Terima Dari </div>
                              <div class="value">: <?php echo $namaPenerima ?></div>
                            </div>
                            <div class="label-value">
                                  <span class="label">Uang Sejumlah </span> 
                                  <i class="value">: <?php echo ucwords(terbilang($totalBiaya)); ?> Rupiah</i>
                            </div>
                            <div class="label-value">
                              <div class="label">Untuk Pembayaran </div>
                              <div class="value">: Administrasi Pendaftaran Santri Baru Tahun Pelajaran 2025/2026 PP. Tarbiyatul Mutathowi'in</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="bg-primary rounded text-white px-3 py-2 fw-bold">Rp. <?php echo number_format($totalBiaya, 0, ',', '.'); ?>,-</div>
                                <div class="text-center">
                                  <br><br><br>
                                    <div>................................</div>
                                    <div>Panitia PSB</div>
                                </div>
                                <div class="text-center">
                                  <br><br><br>
                                    <div>................................</div>
                                    <div><?php echo $namaPenerima ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
  
  <!-- / Content -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/sneat/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/sneat/assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/sneat/assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/sneat/assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="../assets/sneat/assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <script>
    $(document).ready(function() {
      function fetchData(url) {
        return new Promise((resolve, reject) => {
          $.getJSON(url, function(data) {
            resolve(data);
          }).fail(function() {
            reject();
          });
        });
      }

      async function loadData() {
        var defaultProvinsi = "<?php echo $data['provinsipd']; ?>";
        var defaultKabupaten = "<?php echo $data['kabupatenpd']; ?>";
        var defaultKecamatan = "<?php echo $data['kecamatanpd']; ?>";
        var defaultDesa = "<?php echo $data['desapd']; ?>";

        try {
          let provinsiData = await fetchData('https://alamat.thecloudalert.com/api/provinsi/get/');
          let provinsiName = provinsiData.result.find(item => item.id == defaultProvinsi)?.text || '';
          $('#provinsiText').text(provinsiName);

          let kabupatenData = await fetchData(`https://alamat.thecloudalert.com/api/kabkota/get/?d_provinsi_id=${defaultProvinsi}`);
          let kabupatenName = kabupatenData.result.find(item => item.id == defaultKabupaten)?.text || '';
          $('#kabupatenText').text(kabupatenName);

          let kecamatanData = await fetchData(`https://alamat.thecloudalert.com/api/kecamatan/get/?d_kabkota_id=${defaultKabupaten}`);
          let kecamatanName = kecamatanData.result.find(item => item.id == defaultKecamatan)?.text || '';
          $('#kecamatanText').text(kecamatanName);

          let desaData = await fetchData(`https://alamat.thecloudalert.com/api/kelurahan/get/?d_kecamatan_id=${defaultKecamatan}`);
          let desaName = desaData.result.find(item => item.id == defaultDesa)?.text || '';
          $('#desaText').text(desaName);

          // Tunggu beberapa milidetik agar DOM benar-benar update sebelum mencetak
          setTimeout(() => {
            window.print();
          }, 500);

        } catch (error) {
          console.error("Gagal mengambil data.");
        }
      }

      loadData();
    });
  </script>

</body>

</html>