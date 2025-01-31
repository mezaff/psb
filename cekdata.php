<?php
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-wide " dir="ltr" data-theme="theme-default"
  data-assets-path="assets/sneat_pro/assets/" data-template="front-pages" data-style="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>PSB Online</title>


  <meta name="description"
    content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">


  <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/sneat_pro/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/fonts/iconify-icons.css" />
  <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/fonts/boxicons.css" />


  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/css/rtl/core.css"
    class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/css/rtl/theme-default.css"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/sneat_pro/assets/css/demo.css" />
  <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/css/pages/front-page.css" />
  <!-- Vendors CSS -->

  <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/libs/nouislider/nouislider.css" />
  <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/libs/swiper/swiper.css" />

  <!-- Page CSS -->

  <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/css/pages/front-page-landing.css" />

  <!-- Helpers -->
  <script src="assets/sneat_pro/assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <!-- <script src="assets/sneat_pro/assets/vendor/js/template-customizer.js"></script> -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="assets/sneat_pro/assets/js/front-config.js"></script>

</head>

<body>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
      style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <script src="assets/sneat_pro/assets/vendor/js/dropdown-hover.js"></script>
  <script src="assets/sneat_pro/assets/vendor/js/mega-dropdown.js"></script>

  <!-- Navbar: Start -->
  <nav class="layout-navbar shadow-none py-0">
    <div class="container">
      <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-8">
        <!-- Menu logo wrapper: Start -->
        <div class="navbar-brand app-brand demo d-flex py-0 me-4 me-xl-8">
          <!-- Mobile menu toggle: Start-->
          <button class="navbar-toggler border-0 px-0 me-4" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="tf-icons bx bx-menu bx-lg align-middle text-heading fw-medium"></i>
          </button>
          <!-- Mobile menu toggle: End-->
          <a href="index" class="app-brand-link">
            <!-- <span class="app-brand-logo demo">
                            <img src="{{ \Storage::url(settings()->get('app_logo')) }}" alt="Logo" width="50">
                        </span> -->
            <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">PSB Pondok Ngujur</span>
          </a>
        </div>
        <!-- Menu logo wrapper: End -->
        <!-- Menu wrapper: Start -->
        <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
          <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl p-2"
            type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="tf-icons bx bx-x bx-lg"></i>
          </button>
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link fw-medium" aria-current="page" href="index">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" aria-current="page" href="index#profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" aria-current="page" href="cekdata#syarat">Syarat Pendaftaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" href="index#kontak">Kontak</a>
            </li>
            <li>
              <a href="cekdata" class="btn btn-primary d-block d-md-none"><span
                  class="d-block d-md-none">Check Data</span></a>
            </li>
          </ul>
        </div>
        <div class="landing-menu-overlay d-lg-none"></div>
        <!-- Menu wrapper: End -->
        <!-- Toolbar: Start -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">

          <!-- navbar button: Start -->
          <li>
            <a href="cekdata" class="btn btn-primary d-none d-md-block"><span
                class="d-none d-md-block">Check Data</span></a>
          </li>
          <!-- navbar button: End -->
        </ul>
        <!-- Toolbar: End -->
      </div>
    </div>
  </nav>
  <!-- Navbar: End -->


  <!-- Sections:Start -->


  <div data-bs-spy="scroll" class="scrollspy-example">
    <!-- Hero: Start -->
    <section id="hero-animation">
      <div id="landingHero" class="section-py landing-hero position-relative">
        <img src="assets/sneat_pro/assets/img/front-pages/backgrounds/hero-bg.png" alt="hero background"
          class="position-absolute top-0 start-50 translate-middle-x object-fit-cover w-100 h-100"
          data-speed="1" />
        <div class="container-xxl flex-grow-1 container-p-y">
          <div class="hero-text-box text-center position-relative">
            <h1 class="text-primary hero-title display-6 fw-extrabold text-nowrap">CARI DATA PENDAFTARAN</h1>
            <h2 class="hero-sub-title h6 mb-6">
              Pondok Pesantren Tarbiyatul Mutathowi'in Ngujur Rejosari Kebonsari Madiun.
            </h2>
          </div>

          <!-- Button with dropdowns & addons -->
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4">
                <h5 class="card-header">Ketikan NISN Calon Santri Yang Sudah Di Dafatarkan Untuk Melihat Status Pendaftaran</h5>
                <div class="card-body demo-vertical-spacing demo-only-element pb-0">
                  <form action="" method="post" role="form">
                    <div class="input-group mb-8">
                      <input type="number" name="nt" class="form-control form-control-lg" id="nt" placeholder="Ketikan NISN Calon Santri .... " autocomplete="off" required>
                      <button class="btn btn-outline-primary" type="submit" name="submit">Cari</button>
                    </div>
                  </form>


                  <?php
                  if (!isset($_POST['submit'])) {

                    $sql = "SELECT * FROM siswa";

                    $query = mysqli_query($connect, $sql);
                    while ($row = mysqli_fetch_array($query)) {

                  ?>

                  <?php }
                  } ?>

                  <?php if (isset($_POST['submit'])) {

                    $cari = mysqli_escape_string($connect, $_POST['nt']);
                    $query1 = $connect->query("SELECT * FROM siswa WHERE nisn LIKE '$cari'");
                    $ntt = $_POST['nt'];
                    $jml = mysqli_num_rows($query1);
                    $x = $jml;

                    if ($x < 1) {
                      echo "<div class='mb-3'></div>";
                      echo "<center>
                      <div class='col-md-6'>
                      <div class='alert alert-danger alert-dismissible' role='alert'>
                        <strong>Maaf! </strong> Data dari NISN <?php echo $ntt; ?> Tidak Ditemukan!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>
                      </div>
</center>
";
                    } else {
                      echo "<div class='mb-3'></div>";
                      echo "<center>
                      <div class='col-md-6'>
                      <div class='alert alert-primary' role='alert'>Pencarian NISN $ntt berhasil ditemukan!</div></div>
                      </center>";
                    }

                    $query2 = "SELECT * FROM siswa WHERE nisn LIKE '$cari'";
                    $sql = mysqli_query($connect, $query2);

                    while ($r = mysqli_fetch_array($sql)) {

                  ?>

                </div>
                </form>
                </center>
                <!-- Striped Rows -->
                <div class="card">
                  <h3 class="card-header text-center py-1">Hasil Pencarian</h3>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="text-center">NO</th>
                          <th class="text-center">NISN</th>
                          <th class="text-center">NAMA LENGKAP</th>
                          <th class="text-center">STATUS</th>
                          <th class="text-center">KETERANGAN</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td class="text-center">1</td>
                          <td class="text-center">
                            <?php echo $r['nisn']; ?>
                          </td>
                          <td><?php echo $r['namapd']; ?></td>
                          <td class="text-center">
                            <?php

                            $nilai = $r['status'];

                            if ($nilai > 1) {
                              echo "<span class='badge bg-primary text-white'>Sudah Verifikasi</span>";
                            } else {
                              echo "<span class='badge bg-danger text-white'>Belum Verifikasi</span>";
                            }; ?>
                          </td>
                          <td>
                            <?php
                            $statusx = $r['status'];
                            if ($statusx > 1) {
                              echo "Selamat,  Anda Sudah diterima sebagai Santri Baru PP Tarbiyatul Mutathowi'in.";
                            } else {
                              echo "Formulir Pendaftaran sudah kami terima, lengkapi persyaratan dan serahkan kepada panitia PSB <br/> untuk melakukan Daftar Ulang";
                            }
                            echo "</td>"; ?>
                          </td>
                      </tbody>
                    </table>
                    <div class="m-4 d-flex gap-4">
                      <a href="cekdata#syarat" class="btn btn-primary">SYARAT PENDAFTARAN</a> <a href="index" class="btn  btn-danger ">KEMBALI</a>
                    </div>
                  </div>
                </div>
                <!--/ Striped Rows -->
              </div>
            </div>
        <?php }
                  } ?>
          </div>
        </div>
      </div>

  </div>

  </div>
  </div>
  <!-- <div class="landing-hero-blank"></div> -->
  </section>
  <!-- Hero: End -->
  <!-- Useful features: Start -->
  <section id="syarat" class="section-py landing-features">
    <div class="container">
      <h4 class="text-center mb-1">
        <span class="position-relative fw-extrabold z-1">Syarat Pendaftaran
          <img
            src="assets/sneat_pro/assets/img/front-pages/icons/section-title-icon.png"
            alt="laptop charging"
            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
        </span>
      </h4>
      <p class="text-center mb-12">
        Penerimaan Santri Baru PP Tarbiyatul Mutathowi'in Tahun 2025.
      </p>
      <div class="row g-6 pt-lg-5">
        <!-- Favourite Plan: Start -->
        <div class="col-xl-4 col-lg-6">
          <div class="card border border-primary shadow-xl">
            <div class="card-header">
              <div class="text-center">
                <h4 class="mb-0">Syarat Pendaftaran</h4>
                <div
                  class="d-flex align-items-center justify-content-center">
                  <span
                    class="price-monthly h2 text-primary fw-extrabold mb-0">PSB 2025</span>
                </div>
              </div>
            </div>
            <div class="card-body">
              <ul class="list-unstyled pricing-list">
                <li>
                  <h6
                    class="d-flex align-items-center mb-3">
                    <span
                      class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                        class="bx bx-check bx-12px"></i></span>
                    Mengisi formulir dan kelengkapnnya
                  </h6>
                </li>
                <li>
                  <h6
                    class="d-flex align-items-center mb-3">
                    <span
                      class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                        class="bx bx-check bx-12px"></i></span>
                    Foto Copy Ijazah (Bisa Menyusul)
                  </h6>
                </li>
                <li>
                  <h6
                    class="d-flex align-items-center mb-3">
                    <span
                      class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                        class="bx bx-check bx-12px"></i></span>
                    Foto Copy NISN
                  </h6>
                </li>
                <li>
                  <h6
                    class="d-flex align-items-center mb-3">
                    <span
                      class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                        class="bx bx-check bx-12px"></i></span>
                    Foto Copy Kartu Keluarga
                  </h6>
                </li>
                <li>
                  <h6
                    class="d-flex align-items-center mb-3">
                    <span
                      class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                        class="bx bx-check bx-12px"></i></span>
                    Foto Copy KTP Orang Tua
                  </h6>
                </li>
                <li>
                  <h6
                    class="d-flex align-items-center mb-3">
                    <span
                      class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                        class="bx bx-check bx-12px"></i></span>
                    3 Lembar Pas foto 3x4
                  </h6>
                </li>
                <li>
                  <h6
                    class="d-flex align-items-center mb-3">
                    <span
                      class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                        class="bx bx-check bx-12px"></i></span>
                    Materai 10.000 (1pcs)
                  </h6>
                </li>
                <li>
                  <h6
                    class="d-flex align-items-center mb-3">
                    <span
                      class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                        class="bx bx-check bx-12px"></i></span>
                    Map Kuning (untuk santri putra)
                  </h6>
                </li>
                <li>
                  <h6
                    class="d-flex align-items-center mb-3">
                    <span
                      class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                        class="bx bx-check bx-12px"></i></span>
                    Map Hijau (untuk santri putri)
                  </h6>
                </li>
                <li>
                  <h6
                    class="d-flex align-items-center mb-3">
                    <span
                      class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                        class="bx bx-check bx-12px"></i></span>
                    Bersedia mengikuti tes penempatan kelas
                  </h6>
                </li>
                <li>
                  <h6
                    class="d-flex align-items-center mb-3">
                    <span
                      class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                        class="bx bx-check bx-12px"></i></span>
                    Bersedia mengikuti semua aturan dan tata tertib
                  </h6>
                </li>
              </ul>
              <!-- <div class="d-grid mt-8">
                <a
                  href="payment-page.html"
                  class="btn btn-primary">Get Started</a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-xl-8 col-lg-6">
          <div class="card border border-primary shadow-xl">
            <div class="card-header">
              <div class="text-center">
                <h4 class="mb-0">Rincian Biaya Pendaftaran</h4>
                <div
                  class="d-flex align-items-center justify-content-center">
                  <span
                    class="price-monthly h2 text-primary fw-extrabold mb-0">PSB 2025</span>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th rowspan="2" class="text-center align-middle">NO</th>
                      <th rowspan="2" class="text-center align-middle">URAIAN</th>
                      <th rowspan="2" class="text-center align-middle">NOMINAL</th>
                      <th colspan="2" class="text-center align-middle">KETERANGAN</th>
                    </tr>
                    <tr>
                      <th class="text-center align-middle">Bulanan</th>
                      <th class="text-center align-middle">Tahunan</th>
                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong>
                      </td>
                      <td>Albert Cook</td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Lilian Fuller">
                            <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sophia Wilkerson">
                            <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Christina Parker">
                            <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                          </li>
                        </ul>
                      </td>
                      <td><span class="badge bg-label-primary me-1">Active</span></td>
                      <td>
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn p-0 dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                      <td>Barry Hunter</td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Lilian Fuller">
                            <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sophia Wilkerson">
                            <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Christina Parker">
                            <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                          </li>
                        </ul>
                      </td>
                      <td><span class="badge bg-label-success me-1">Completed</span></td>
                      <td>
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn p-0 dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
                      <td>Trevor Baker</td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Lilian Fuller">
                            <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sophia Wilkerson">
                            <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Christina Parker">
                            <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                          </li>
                        </ul>
                      </td>
                      <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                      <td>
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn p-0 dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                      </td>
                      <td>Jerry Milton</td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Lilian Fuller">
                            <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sophia Wilkerson">
                            <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Christina Parker">
                            <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                          </li>
                        </ul>
                      </td>
                      <td><span class="badge bg-label-warning me-1">Pending</span></td>
                      <td>
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn p-0 dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- <div class="d-grid mt-8">
                <a
                  href="payment-page.html"
                  class="btn btn-primary">Get Started</a>
              </div> -->
            </div>
          </div>
        </div>
        <!-- Favourite Plan: End -->
      </div>
    </div>
  </section>
  <!-- Useful features: End -->
  </div>

  <!-- / Sections:End -->



  <!-- Footer: Start -->
  <footer class="landing-footer bg-body footer-text">
    <div class="footer-bottom py-3 py-md-5">
      <div
        class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
        <div class="mb-2 mb-md-0">
          <span class="footer-bottom-text">©
            <script>
              document.write(new Date().getFullYear());
            </script>
          </span>
          <span class="footer-bottom-text"> Made with ❤️ by</span>
          <a href="https://instagram.com/mezaaf_" target="_blank" class="text-white">Mezaaf</a>
        </div>
        <div>
          <a href="https://github.com/mezaff" class="me-4" target="_blank">
            <img src="assets/sneat_pro/assets/img/front-pages/icons/github.svg" alt="Github" />
          </a>
          <a href="https://instagram.com/mezaaf_" target="_blank">
            <img src="assets/sneat_pro/assets/img/front-pages/icons/instagram.svg"
              alt="Instagram" />
          </a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer: End -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="assets/sneat_pro/assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/sneat_pro/assets/vendor/js/bootstrap.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/sneat_pro/assets/vendor/libs/nouislider/nouislider.js"></script>
  <script src="assets/sneat_pro/assets/vendor/libs/swiper/swiper.js"></script>

  <!-- Main JS -->
  <script src="assets/sneat_pro/assets/js/front-main.js"></script>


  <!-- Page JS -->
  <script src="assets/sneat_pro/assets/js/front-page-landing.js"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>

<!-- beautify ignore:end -->