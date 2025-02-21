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
      border: 1px solid rgba(0, 0, 0, 0.5) !important;
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
      <table class="table table-borderless">
        <thead>
          <tr>
            <td>
              <!--place holder for the fixed-position header-->
              <div class="page-header-space"></div>
            </td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <!--*** CONTENT GOES HERE ***-->
              <div class="page">
                <h3 class="text-center fw-bold" style="color: #000 !important;">FORMULIR PENDAFTARAN SANTRI BARU <br> PP TARBIYATUL MUTATHOWI'IN TAHUN PELAJARAN 2025 / 2026</h3>
                <div class="table-responsive text-nowrap p-4">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th colspan="2" class="text-center align-middle fw-bold fs-4">
                          DATA SANTRI
                        </th>
                      </tr>
                      <tr>
                        <th width="25%">Status Pendaftaran</th>
                        <td><?php
                            $nilai = $data['status'];
                            if ($nilai > 1) {
                              echo "<span class='badge bg-primary'>Sudah Verifikasi</span>";
                            } else {
                              echo "<span class='badge bg-danger'>Belum Verifikasi</span>";
                            }
                            ?></td>
                      </tr>
                      <tr>
                        <th>Nama Lengkap</th>
                        <td><?php echo $data['namapd']; ?></td>
                      </tr>
                      <tr>
                        <th>NIK</th>
                        <td><?php echo $data['nik']; ?></td>
                      </tr>
                      <tr>
                        <th>NISN</th>
                        <td><?php echo $data['nisn']; ?></td>
                      </tr>
                      <tr>
                        <th>Jenis Kelamin</th>
                        <td><?php echo $data['jk']; ?></td>
                      </tr>
                      <tr>
                        <th>Tempat Tanggal Lahir</th>
                        <td><?php echo $data['tempatlahirpd'] . ', ' . formatTanggal($data['tanggallahirpd']); ?></td>
                      </tr>
                      <tr>
                        <th>Nomor Handphone</th>
                        <td><?php echo $data['wapd']; ?></td>
                      </tr>
                      <tr>
                        <th>Jenjang Pendidikan</th>
                        <td><?php echo $data['jenjang']; ?></td>
                      </tr>
                      <tr>
                        <th>Asal Sekolah</th>
                        <td><?php echo $data['asalsekolah']; ?></td>
                      </tr>
                      <tr>
                        <th>Minat & Bakat</th>
                        <td><?php echo $data['bantuan']; ?></td>
                      </tr>
                      <tr>
                        <th>Tujuan & Harapan Mondok</th>
                        <td><?php echo $data['prestasi']; ?></td>
                      </tr>
                      <tr>
                        <th>Sumber Informasi Tentang PonPes</th>
                        <td><?php echo $data['nomorbantuan']; ?></td>
                      </tr>
                      <tr>
                        <th colspan="2" class="text-center align-middle fw-bold fs-4">
                          DATA ORANG TUA
                        </th>
                      </tr>
                      <tr>
                        <th width="25%">Nomor Kartu Keluarga (KK)</th>
                        <td><?php echo $data['kk']; ?></td>
                      </tr>
                      <tr>
                        <th>NIK Ayah</th>
                        <td><?php echo $data['nikayah']; ?></td>
                      </tr>
                      <tr>
                        <th>Nama Ayah</th>
                        <td><?php echo $data['namaayah']; ?></td>
                      </tr>
                      <tr>
                        <th>Tempat Tanggal Lahir Ayah</th>
                        <td><?php echo $data['tempatlahirayah'] . ', ' . formatTanggal($data['tanggallahirayah']); ?></td>
                      </tr>
                      <tr>
                        <th>Pendidikan Terakhir Ayah</th>
                        <td><?php echo $data['pendidikanayah']; ?></td>
                      </tr>
                      <tr>
                        <th>Pekerjaan Ayah</th>
                        <td><?php echo $data['pekerjaanayah']; ?></td>
                      </tr>
                      <tr>
                        <th>Penghasilan Ayah</th>
                        <td><?php echo $data['penghasilanayah']; ?></td>
                      </tr>
                      <tr>
                        <th>NIK Ibu</th>
                        <td><?php echo $data['nikibu']; ?></td>
                      </tr>
                      <tr>
                        <th>Nama Ibu</th>
                        <td><?php echo $data['namaibu']; ?></td>
                      </tr>
                      <tr>
                        <th>Tempat Tanggal Lahir Ibu</th>
                        <td><?php echo $data['tempatlahiribu'] . ', ' . formatTanggal($data['tanggallahiribu']); ?></td>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
              <div class="page">
                <div class="table-responsive text-nowrap p-3 mt-3">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Pendidikan Terakhir Ibu</th>
                        <td><?php echo $data['pendidikanibu']; ?></td>
                      </tr>
                      <tr>
                        <th>Pekerjaan Ibu</th>
                        <td><?php echo $data['pekerjaanibu']; ?></td>
                      </tr>
                      <tr>
                        <th>Penghasilan Ibu</th>
                        <td><?php echo $data['penghasilanibu']; ?></td>
                      </tr>
                      <tr>
                        <th colspan="2" class="text-center align-middle fw-bold fs-4">
                          DATA ALAMAT
                        </th>
                      </tr>
                      <tr>
                        <th width="25%">Alamat Lengkap</th>
                        <td><?php echo $data['alamatpd']; ?></td>
                      </tr>
                      <tr>
                        <th>Desa</th>
                        <td id="desaText"></td>
                      </tr>
                      <tr>
                        <th>Kecamatan</th>
                        <td id="kecamatanText"></td>
                      </tr>
                      <tr>
                        <th>Kabupaten</th>
                        <td id="kabupatenText"></td>
                      </tr>
                      <tr>
                        <th>Provinsi</th>
                        <td id="provinsiText"></td>
                      </tr>
                      <tr>
                        <th>Kode Pos</th>
                        <td><?php echo $data['kodepos']; ?></td>
                      </tr>
                      <tr>
                        <th>Jarak Ke Lembaga</th>
                        <td><?php echo $data['jarak']; ?></td>
                      </tr>
                      <tr>
                        <th>Transportasi</th>
                        <td><?php echo $data['transportasi']; ?></td>
                      </tr>
                      <tr>
                        <th>Waktu Tempuh</th>
                        <td><?php echo $data['waktu']; ?></td>
                      </tr>
                    </thead>
                  </table>
                </div>
                <div class="table-responsive text-nowrap px-4">
                  <h5 class="fw-bold" style="color: #000 !important;">Dengan ini kami menyatakan dengan sesungguhnya bahwa selama dipondok pesantren :</h5>
                  <ol class="ps-3">
                    <li class="mb-0">
                      <p class="mb-0">Akan belajar dengan tekun dan sungguh-sungguh.</p>
                    </li>
                    <li class="mb-0">
                      <p class="mb-0">Akan menjaga nama baik diri sendiri, keluarga, masyarakat dan pondok pesantren.</p>
                    </li>
                    <li class="mb-0">
                      <p class="mb-0">Sanggup menaati seluruh aturan tata tertib yang berlaku, baik dalam lingkungan pesantren dan lembaga pendidikan yang ada.</p>
                    </li>
                    <li class="mb-0">
                      <p class="mb-0">Siap menerima sanksi apabila melanggar aturan atau tata tertib yang berlaku sesuai ketentuan pesantren.</p>
                    </li>
                  </ol>
                </div>
                <div class="table-responsive text-nowrap p-4">
                  <table class="table table-sm table-striped table-bordered w-50">
                    <thead>
                      <tr>
                        <th colspan="3" class="text-center align-middle fw-bold fs-5">
                          CHECK LIST KELENGKAPAN PENDAFTARAN
                        </th>
                      </tr>
                      <tr>
                        <td width="5%" class="text-center fw-bold">NO</td>
                        <td class="text-center fw-bold">NAMA </td>
                        <td class="text-center fw-bold">KETERANGAN</td>
                      </tr>
                      <tr>
                        <td width="5%" class="text-center">1</td>
                        <th>Foto Copy Kartu Keluarga (KK)</th>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">2</td>
                        <th>Foto Copy KTP Orang Tua</th>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">3</td>
                        <th width="25%">Foto Copy Akta Kelahiran</th>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">4</td>
                        <th>Pas Foto berwarna 3 x4 (3 lembar)</th>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">5</td>
                        <th>Materai Rp. 10.000 (1 pcs)</th>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">6</td>
                        <th>Foto Copy Ijasah ( Bisa Menyusul)</th>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">7</td>
                        <th>Status Pembayaran</th>
                        <td></td>
                      </tr>
                    </thead>
                  </table>
                </div>
                <div class="row mt-5">
                  <div class="col-md-4 text-center">
                    <p>&nbsp;</p>
                    <p class="fw-bold" style="color: #000 !important;">Panitia PSB</p>
                    <br><br><br>
                    <p class="ttd"></p>
                  </div>
                  <div class="col-md-4 text-center">
                    <p>&nbsp;</p>
                    <p class="fw-bold" style="color: #000 !important;">Calon Santri</p>
                    <br><br><br>
                    <p class="ttd"></p>
                  </div>
                  <div class="col-md-4 text-center">
                    <p class="fw-semibold" style="color: #000 !important;">Madiun, <?php echo formatTanggal(date('Y-m-d')); ?></p>
                    <p class="fw-bold" style="color: #000 !important;">Orang Tua/Wali Santri</p>
                    <br><br><br>
                    <p class="ttd"></p>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
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