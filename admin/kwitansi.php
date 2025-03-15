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

  <title>Cetak Data | <?php echo $data['namapd']; ?></title>

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
      font-size: 12pt;
      background-color: #fff !important;
      -webkit-print-color-adjust: exact;
      print-color-adjust: exact;
    }

    .table th,
    .table td {
      color: #000 !important;
    }

    .table-bordered {
    border: 2px solid black !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 2px solid black !important;
  }

    .kop-surat {
      display: block !important;
      text-align: center;
      padding: 0 !important;
      margin-top: 0;
      margin-bottom: 1px;
      border-bottom: 2px solid black;
    }

    .page {
      page-break-after: always;
      page-break-before: auto;
      page-break-inside: avoid;
      position: relative;
    }

    .no-break {
      page-break-inside: avoid;
    }

    .ttd {
      display: inline-block;
      width: 200px;
      border-bottom: 1px solid black;
      margin-top: 20px;
    }

    .garis {
      display: inline-block;
      width: 60vw;
      border-bottom: 2px solid black;
      margin-top: 10px;
      margin-bottom: -20px;
    }

    @page {
      size: 210mm 330mm;
      margin: 20mm;
    }

    @media print {
      body {
        font-size: 12pt;
        background-color: #fff !important;
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
      }

      .no-background {
        background: none !important;
        box-shadow: none !important;
      }

      .hidden-print {
        display: none !important;
      }

      .page:last-of-type {
        page-break-after: auto;
      }
    }
  </style>


</head>

<body>
  <!-- Content -->
   <div class="content-wrapper px-4">
    <div class="container-fluid flex-grow-1 container-p-y mt-2">
      <div class="kop-surat">
        <img src="../gambar/kop.png" alt="Kop Surat" width="1000">
      </div>
      <div class="text-center mt-3 mb-3">
        <h5 class="fw-bold" style="color: #000 !important;">KWITANSI PEMBAYARAN PENDAFTARAN PSB <br> PONDOK PESANTREN TARBIYATUL MUTATHOWI"IN</h5>
      </div>
      <div class="d-flex justify-content-between align-items-center mb-3 mx-3">
        <div class=" d-flex justify-content-start">
          <table class="table table-responsive table-borderless">
            <thead>
              <tr>
                <td class="p-0">ID PENDAFTARAN</td>
                <td class="p-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 587326954454</td>
              </tr>
              <tr>
                <td class="p-0">TANGGAL PEMBAYARAN</td>
                <td class="p-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 587326954454</td>
              </tr>
            </thead>
          </table>
        </div>
        <div class=" d-flex justify-content-end">
          <table class="table table-responsive table-borderless">
            <thead>
              <tr>
                <td class="p-0">NISN SANTRI</td>
                <td class="p-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $data['nisn']; ?></td>
              </tr>
              <tr>
                <td class="p-0">NAMA SANTRI</td>
                <td class="p-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $data['namapd']; ?></td>
              </tr>
            </thead>
          </table>
        </div>
      </div>
      <div class="px-3">
      <?php 
        $biaya = ($data['jk'] == "Perempuan") ? 225000 : 200000;
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
      ?>
        <table class="table table-bordered table-responsive">
          <thead class="">
            <tr>
              <td class="text-center fw-bold">NO</td>
              <td class="text-center fw-bold">URAIAN</td>
              <td class="text-center fw-bold">JUMLAH</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td width="5%" class="text-center">1</td>
              <td class="text-start">Biaya Pendaftaran</td>
              <td class="text-end">Rp. 50.000,-</td>
            </tr>
            <tr>
              <td width="5%" class="text-center">2</td>
              <td class="text-start">Biaya Kegiatan</td>
              <td class="text-end">Rp. 90.000,-</td>
            </tr>
            <tr>
              <td width="5%" class="text-center">3</td>
              <td class="text-start">Kalender</td>
              <td class="text-end">Rp. 25.000,-</td>
            </tr>
            <tr>
              <td width="5%" class="text-center">4</td>
              <td class="text-start">Syahriah</td>
              <td class="text-end">Rp. 25.000,-</td>
            </tr>
            <tr>
              <td width="5%" class="text-center">5</td>
              <td class="text-start">Makan (2 x 1 Hari)</td>
              <td class="text-end">Rp. 300.000,-</td>
            </tr>
            <tr>
              <td width="5%" class="text-center">6</td>
              <td class="text-start">Almari</td>
              <td class="text-end">Rp. 300.000,-</td>
            </tr>
            <tr>
              <td width="5%" class="text-center">7</td>
              <td class="text-start">Seragam</td>
              <td class="text-end">Rp. <?php echo number_format($biaya, 0, ',', '.'); ?>,-</td>
            </tr>
            <tr>
              <td width="5%" class="text-center">8</td>
              <td class="text-start">Kitab</td>
              <td class="text-end">Rp. 150.000,-</td>
            </tr>
              <td width="5%" class="text-center">9</td>
              <td class="text-start">Buku Izin</td>
              <td class="text-end">Rp. 10.000,-</td>
            </tr>
          </tbody>
        </table>
        <div class="d-flex justify-content-between mt-3 mb-3">
          <h5 class="text-start"  style="color: #000 !important;">Terbilang : <b style="color: #000 !important;" class="fst-italic"><?php echo ucwords(terbilang($totalBiaya)); ?> Rupiah</b></h5>
          <h5 class="text-start"  style="color: #000 !important;">Grand Total : <b style="color: #000 !important;">Rp. <?php echo number_format($totalBiaya, 0, ',', '.'); ?>,-</b></h5>
        </div>
      </div>
      <div class="row mt-5 px-3">
        <div class="col-md-6 d-flex justify-content-start">
          <div class="text-start">
            <br><br><br>
            <h6 class="text-dark fw-bold">Catatan : </h6>
            <p class="p-0 m-0 text-dark"> - Disimpan sebagai bukti pembayaran yang SAH.</p>
            <p class="p-0 m-0 text-dark"> - Uang yang sudah dibayarkan tidak dapat diminta kembali.</p>
          </div>
        </div>
                  <div class="col-md-6 d-flex justify-content-end">
                    <div class="text-center">
                      <p class="fw-semibold" style="color: #000 !important;">Madiun, <?php echo formatTanggal(date('Y-m-d')); ?></p>
                      <p class="fw-bold" style="color: #000 !important;">Panitia PSB</p>
                      <br><br><br>
                      <p class="ttd"></p>
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