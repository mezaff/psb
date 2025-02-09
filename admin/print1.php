<!DOCTYPE html>
<html lang="en" class="light-style layout-wide " dir="ltr" data-theme="theme-default" data-assets-path="../assets/sneat/assets/" data-template="vertical-menu-template-free" data-style="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Cetak Formulir | PSB Pondok Ngujur</title>
  <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/sneat/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../assets/sneat/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/sneat/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/sneat/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/sneat/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />


  <!-- Page CSS -->
  <style>
    @page {
      size: A4;
      margin: 20mm;
    }

    @media print {
      html {
        font-size: 12px;
      }

      form,
      .btn,
      .alert {
        display: none !important;
      }

      .kop-surat {
        display: block !important;
        text-align: center;
        padding: 0 !important;
        margin-top: 0;
        margin-bottom: 1px;
        border-bottom: 2px solid black;
      }
    }

    /* Default: kop surat disembunyikan saat tampilan biasa */
    .kop-surat {
      display: none;
    }

    .ttd {
      display: inline-block;
      width: 200px;
      border-bottom: 2px solid black;
      margin-top: 20px;
    }

    .garis {
      display: inline-block;
      width: 70vw;
      border-bottom: 2px solid black;
      margin-top: 10px;
      margin-bottom: -20px;
    }

    .page-break {
      page-break-before: always;
    }
  </style>

  <!-- Helpers -->
  <script src="../assets/sneat/assets/vendor/js/helpers.js"></script>
  <script src="../assets/sneat/assets/js/config.js"></script>

</head>

<body>
  <?php
  error_reporting(0);
  include "../koneksi.php";


  $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

  while ($data = mysqli_fetch_array($sql)) {
  } ?>
  <!-- Content -->
  <div class="container-xxl container-p-y">
    <div class="row">
      <div class="card justify-center d-flex">
        <div class="col-md-12">
          <div class="card-body">
            <form action="" method="post">
              <div class="d-flex gap-3 justify-between align-items-center">
                <input type="number" name="nt" class="form-control" id="nt" placeholder="Ketikan NISN siswa yang ingin di print.... " autocomplete="off" / required="">
                <button type="submit" name="submit" class="btn btn-primary">CETAK</button>
                <a href="/santribaru/admin" class="btn btn-warning">KEMBALI</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->


  <script src="../assets/sneat/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/sneat/assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/sneat/assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../assets/sneat/assets/vendor/js/menu.js"></script>
  <script src="../assets/sneat/assets/js/main.js"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>

<!-- beautify ignore:end -->