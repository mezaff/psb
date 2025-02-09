<?php
require 'koneksi.php';

$query = mysqli_query($connect, "SELECT embed FROM admin LIMIT 1");
$data = mysqli_fetch_assoc($query);

if ($data && $data['embed'] == '0') {
  header("Location: /santribaru/registrasiAkses");
  exit;
}
?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide " dir="ltr" data-theme="theme-default"
  data-assets-path="assets/sneat_pro/assets/" data-template="front-pages" data-style="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Formulir | PSB Pondok Ngujur</title>


  <meta name="description"
    content="Daftar Sekarang! &amp; Jadilah Bagian dari Kami" />
  <meta name="keywords" content="psb, pondok ngujur, psb pondok ngujur, pendaftaran santri baru">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://pondokngujur.com/santribaru">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="gambar/favicon.ico" />

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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

  <!-- Page CSS -->

  <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/css/pages/front-page-landing.css" />

  <!-- Helpers -->
  <script src="assets/sneat_pro/assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <!-- <script src="assets/sneat_pro/assets/vendor/js/template-customizer.js"></script> -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="assets/sneat_pro/assets/js/front-config.js"></script>
  <style>
    .select2-container .select2-selection--single {
      height: calc(2.25rem + 2px);
      padding: 0.375rem 0.75rem;
      border: 1px solid #ced4da;
      border-radius: 0.375rem;
    }

    .select2-container--bootstrap-5 .select2-selection__rendered {
      line-height: 1.5;
    }

    .select2-container .select2-dropdown {
      border: 1px solid #ced4da;
      border-radius: 0.375rem;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .select2-container .select2-dropdown {
      max-height: 300px;
      overflow-y: auto;
    }


    .select2-container--bootstrap-5 .select2-selection--single:disabled {
      background-color: #e9ecef;
      border-color: #ced4da;
      color: #6c757d;
      cursor: not-allowed;
    }

    .select2-container--bootstrap-5 .select2-dropdown:disabled {
      background-color: #e9ecef;
      color: #6c757d;
      border-color: #ced4da;
      cursor: not-allowed;
    }

    .form-select:disabled {
      background-color: #e9ecef;
      border-color: #ced4da;
      color: #6c757d;
      cursor: not-allowed;
    }

    input.form-control:disabled,
    textarea.form-control:disabled {
      background-color: #e9ecef;
      border-color: #ced4da;
      color: #6c757d;
      cursor: not-allowed;
    }
  </style>
</head>

<body>

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
          <a href="/santribaru/" class="app-brand-link">
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
              <a class="nav-link fw-medium" aria-current="page" href="/santribaru/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" aria-current="page" href="/santribaru/#profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" aria-current="page" href="/santribaru/#syarat">Syarat Pendaftaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" href="/santribaru/#kontak">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" href="/santribaru/#sosmed">Sosmed</a>
            </li>
            <li>
              <a href="cekdata" class="btn btn-primary d-block d-md-none"><span
                  class="d-block d-md-none">Cek Data</span></a>
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
            <h1 class="text-primary hero-title display-6 fw-extrabold text-nowrap">FORMULIR PENDAFTARAN</h1>
            <h2 class="hero-sub-title h6 mb-6">
              Santri Baru Pondok Pesantren Tarbiyatul Mutathowi'in Ngujur Rejosari Kebonsari Madiun. Tahun Pelajaran 2025/2026
            </h2>
          </div>

          <!-- Basic Layout -->
          <div class="row">
            <div class="col-xl">
              <div class="card mb-4">
                <div class="card-body">
                  <form method="post" action="prosespd" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="divider">
                      <div class="divider-text fs-4 fw-bold">FORMULIR JENIS PENDAFTARAN</div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="jenispd">Jenis Pendaftaran</label>
                          <select name="jenispd" id="jenispd" class="form-select" required>
                            <option value="" disabled selected>Pilih Jenis Pendaftaran</option>
                            <option value="Santri Baru">Santri Baru</option>
                            <option value="Santri Pindahan">Santri Pindahan</option>
                          </select>
                          <div class="invalid-feedback">
                            Jenis Pendaftaran wajib diisi
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="jenjang">Jenjang Pendidikan</label>
                          <select name="jenjang" id="jenjang" class="form-select" required>
                            <option value="" disabled selected>Pilih Jenjang Pendidikan</option>
                            <option value="Tsanawiyah (MTs)">Tsanawiyah (MTs)</option>
                            <option value="Aliyah (MA)">Aliyah (MA)</option>
                          </select>
                          <div class="invalid-feedback">
                            Jenjang Pendidikan wajib diisi
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="divider">
                      <div class="divider-text fs-4 fw-bold">FORMULIR DATA SANTRI</div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="nik">NIK (Nomor Induk Kependudukan)</label>
                          <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK dapat dilihat pada Kartu Keluarga (KK)"
                            required pattern="^\d{16}$" title="NIK harus terdiri dari 16 digit" />
                          <div class="invalid-feedback">
                            NIK wajib diisi dan harus terdiri dari 16 digit.
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="nisn">NISN</label>
                          <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN"
                            required pattern="^\d{10}$" title="NISN harus terdiri dari 10 digit" />
                          <div class="invalid-feedback">
                            NISN wajib diisi dan harus terdiri dari 10 digit.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="namapd">Nama Lengkap</label>
                          <input type="text" class="form-control" id="namapd" name="namapd" placeholder="Nama Lengkap Calon Peserta Didik"
                            required pattern="^[A-Za-z\s']+$" title="Nama hanya boleh mengandung huruf, spasi, dan tanda kutip tunggal (') saja." />
                          <div class="invalid-feedback">
                            Nama Lengkap wajib diisi dan hanya boleh mengandung huruf, spasi, dan tanda kutip tunggal (').
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="jk">Jenis Kelamin</label>
                          <select name="jk" id="jk" required class="form-select">
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                          <div class="invalid-feedback">
                            Jenis Kelamin wajib diisi.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="tempatlahirpd">Tempat Lahir</label>
                          <input type="text" autocomplete="" name="tempatlahirpd" id="tempatlahirpd" class="form-control" required="" value="" placeholder="Tempat Lahir" />
                          <div class="invalid-feedback">
                            Tempat Lahir wajib diisi.
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="tanggallahirpd">Tanggal Lahir</label>
                          <input type="date" class="form-control" name="tanggallahirpd" id="tanggallahirpd" value="" autocomplete="" required="" placeholder="Tanggal Lahir" />
                          <div class="invalid-feedback">
                            Tanggal Lahir wajib diisi.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="wapd">Nomor Telpon (Tidak Wajib)</label>
                          <input type="number" class="form-control" name="wapd" id="wapd" value="" autocomplete="" placeholder="No Telp/ WA" />
                          <div class="invalid-feedback">
                            Nomor Telpon harus antara 11 hingga 13 digit.
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="upload_akte">Upload Akte (Tidak Wajib) <span class="text-danger">File harus PNG, JPG, JPEG, atau PDF dan ukuran maksimal 2MB</span></label>
                          <input type="file" class="form-control" name="upload_akte" id="upload_akte" accept=".png, .jpg, .jpeg, .pdf">
                          <div class="invalid-feedback">
                            File harus berformat PNG, JPG, JPEG, atau PDF dan ukuran maksimal 2MB.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="upload_nisn">Upload NISN (Tidak Wajib) <span class="text-danger">File harus PNG, JPG, JPEG, atau PDF dan ukuran maksimal 2MB</span></label>
                          <input type="file" name="upload_nisn" class="form-control" id="upload_nisn" accept=".png, .jpg, .jpeg, .pdf">
                          <div class="invalid-feedback">
                            File harus berformat PNG, JPG, JPEG, atau PDF dan ukuran maksimal 2MB.
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="upload_ijasah">Upload Ijasah (Tidak Wajib) <span class="text-danger">File harus PNG, JPG, JPEG, atau PDF dan ukuran maksimal 2MB</span></label>
                          <input type="file" name="upload_ijasah" class="form-control" id="upload_ijasah" accept=".png, .jpg, .jpeg, .pdf">
                          <div class="invalid-feedback">
                            File harus berformat PNG, JPG, JPEG, atau PDF dan ukuran maksimal 2MB.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="divider">
                      <div class="divider-text fs-4 fw-bold">FORMULIR DATA ALAMAT</div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="form-label" for="alamatpd">Alamat Lengkap</label>
                          <textarea class="form-control" required rows="2" name="alamatpd" data-rule="required" data-msg="Alamat Tidak Valid" placeholder="Masukkan Alamat Lengkap, Sertakan Nama Jalan dan RT/RW"></textarea>
                          <div class="invalid-feedback">
                            Alamat wajib diisi.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="provinsipd">Provinsi</label>
                          <select id="provinsipd" name="provinsipd" class="form-select" required>
                            <option value="">Pilih Provinsi</option>
                          </select>
                          <div class="invalid-feedback">
                            Provinsi wajib dipilih.
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="kabupatenpd">Kabupaten</label>
                          <select id="kabupatenpd" name="kabupatenpd" class="form-select" required>
                            <option value="">Pilih Kabupaten</option>
                          </select>
                          <div class="invalid-feedback">
                            Kabupaten wajib dipilih.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="kecamatanpd">Kecamatan</label>
                          <select id="kecamatanpd" name="kecamatanpd" class="form-select" required>
                            <option value="">Pilih Kecamatan</option>
                          </select>
                          <div class="invalid-feedback">
                            Kecamatan wajib dipilih.
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="desapd">Kelurahan / Desa</label>
                          <select id="desapd" name="desapd" class="form-select" required>
                            <option value="">Pilih Kelurahan / Desa</option>
                          </select>
                          <div class="invalid-feedback">
                            Kelurahan / Desa wajib dipilih.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="kodepos">Kode Pos</label>
                          <input type="text" autocomplete="" id="kodepos" name="kodepos" class="form-control" required="" placeholder="Masukkan Kode Pos" readonly />
                          <div class="validate"></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="jarak">Jarak Ke Lembaga</label>
                          <select class="form-select" id="jarak" required name="jarak">
                            <option value="" disabled selected>Jarak ke Lembaga</option>
                            <option value="Kurang dari 5 km">Kurang dari 5 km</option>
                            <option value="Antara 5 - 10 km">Antara 5 - 10 km</option>
                            <option value="Antara 11 - 20 km">Antara 11 - 20 km</option>
                            <option value="Antara 21 - 30 km">Antara 21 - 30 km</option>
                            <option value="Lebih dari 30 km">Lebih dari 30 km</option>
                          </select>
                          <div class="invalid-feedback">
                            Harap pilih jarak ke lembaga.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="transportasi">Transportasi</label>
                          <select class="form-select" id="transportasi" required name="transportasi">
                            <option value="" disabled selected>Transportasi ke Lembaga</option>
                            <option value="Sepeda">Sepeda</option>
                            <option value="Sepeda Motor">Sepeda Motor</option>
                            <option value="Mobil Pribadi">Mobil Pribadi</option>
                            <option value="Antar Jemput Sekolah">Antar Jemput Sekolah</option>
                            <option value="Angkutan Umum">Angkutan Umum</option>
                            <option value="Perahu/Sampan">Perahu/Sampan</option>
                            <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                            <option value="Kereta Api">Kereta Api</option>
                            <option value="Ojek">Ojek</option>
                            <option value="Andong/Bendi/Sado/Dokar/Delman/Becak">Andong/Bendi/Sado/Dokar/Delman/Becak</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <div class="invalid-feedback">
                            Harap pilih jenis transportasi.
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="waktu">Waktu Tempuh</label>
                          <select class="form-select" id="waktu" required name="waktu">
                            <option value="" disabled selected>Waktu Tempuh</option>
                            <option value="1 - 10 menit">1 - 10 menit</option>
                            <option value="11 - 20 menit">11 - 20 menit</option>
                            <option value="21 - 30 menit">21 - 30 menit</option>
                            <option value="31 - 40 menit">31 - 40 menit</option>
                            <option value="1 - 2 jam">1 - 2 jam</option>
                            <option value="> 2 jam"> >2 jam</option>
                          </select>
                          <div class="invalid-feedback">
                            Harap pilih waktu tempuh.
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="divider">
                      <div class="divider-text fs-4 fw-bold">FORMULIR DATA ASAL SEKOLAH</div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="form-label" for="asalsekolah">Asal Sekolah</label>
                          <input type="text" autocomplete="" name="asalsekolah" class="form-control" required="" value="" placeholder="Asal Sekolah" />
                          <div class="invalid-feedback">
                            Harap masukkan asal sekolah.
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="divider">
                      <div class="divider-text fs-4 fw-bold">FORMULIR DATA ORANG TUA</div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="upload_kk">Upload Kartu Keluarga (Tidak Wajib) <span class="text-danger">PNG, JPG, JPEG, atau PDF dan ukuran file tidak boleh lebih dari 2MB</span></label>
                          <input type="file" name="upload_kk" class="form-control" accept=".png, .jpg, .jpeg, .pdf" />
                          <div class="validate"></div>
                          <div class="invalid-feedback">
                            Format file harus berupa PNG, JPG, JPEG, atau PDF dan ukuran file tidak boleh lebih dari 2MB.
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="upload_ktp_ortu">Upload KTP Orang Tua (Tidak Wajib) <span class="text-danger">PNG, JPG, JPEG, atau PDF dan ukuran file tidak boleh lebih dari 2MB</span></label>
                          <input type="file" name="upload_ktp_ortu" class="form-control" accept=".png, .jpg, .jpeg, .pdf" />
                          <div class="validate"></div>
                          <div class="invalid-feedback">
                            Format file harus berupa PNG, JPG, JPEG, atau PDF dan ukuran file tidak boleh lebih dari 2MB.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="kk">Nomor Kartu Keluarga</label>
                          <input type="number" class="form-control" required=""
                            name="kk" placeholder="Nomor Kartu Keluarga (KK)"
                            minlength="16" maxlength="16"
                            pattern="\d{16}"
                            title="Nomor Kartu Keluarga harus terdiri dari 16 digit angka" />
                          <div class="invalid-feedback">Nomor Kartu Keluarga wajib diisi dan harus terdiri dari 16 digit angka.</div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="nikayah">NIK Ayah</label>
                          <input type="number" class="form-control" required=""
                            name="nikayah" placeholder="NIK Ayah dapat dilihat pada Kartu Keluarga (KK)"
                            minlength="16" maxlength="16"
                            pattern="\d{16}"
                            title="NIK Ayah harus terdiri dari 16 digit angka" />
                          <div class="invalid-feedback">NIK Ayah wajib diisi dan harus terdiri dari 16 digit angka.</div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="namaayah">Nama Lengkap Ayah</label>
                          <input type="text" autocomplete="" name="namaayah" class="form-control" required placeholder="Nama Ayah" />
                          <div class="invalid-feedback">Nama Ayah wajib diisi.</div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="tempatlahirayah">Tempat Lahir</label>
                          <input type="text" autocomplete="" name="tempatlahirayah" class="form-control" required id="name" value="" placeholder="Tempat Lahir Ayah" />
                          <div class="invalid-feedback">Tempat Lahir Ayah wajib diisi.</div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="tanggallahirayah">Tanggal Lahir</label>
                          <input type="date" class="form-control" required name="tanggallahirayah" placeholder="Tanggal Lahir Ayah" />
                          <div class="invalid-feedback">Tanggal Lahir Ayah wajib diisi.</div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="pendidikanayah">Pendidikan Terakhir</label>
                          <select name="pendidikanayah" id="pendidikanayah" class="form-select" required>
                            <option value="" disabled selected> Pilih Pendidikan Terakhir Ayah</option>
                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                            <option value="SD/MI">SD/MI</option>
                            <option value="SMP/MTs">SMP/ MTs</option>
                            <option value="SMA/MA">SMA / MA</option>
                            <option value="D1/D2/D3"> D1/D2/D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                          </select>
                          <div class="invalid-feedback">Pendidikan Terakhir Ayah wajib diisi.</div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="pekerjaanayah">Pekerjaan</label>
                          <select name="pekerjaanayah" id="pekerjaanayah" class="form-select" required>
                            <option value="" disabled selected> Pilih Pekerjaan Ayah</option>
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Pensiunan">Pensiunan</option>
                            <option value="PNS">PNS</option>
                            <option value="TNI/Polisi">TNI/Polisi</option>
                            <option value="Guru/Dosen">Guru/Dosen</option>
                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Pengacara/Jaksa/Hakim/Notaris">Pengacara/Jaksa/Hakim/Notaris</option>
                            <option value="Seniman/Pelukis/Artis/Sejenis">Seniman/Pelukis/Artis/Sejenis</option>
                            <option value="Dokter/Bidan/Perawat">Dokter/Bidan/Perawat</option>
                            <option value="Pilot/Pramugara">Pilot/Pramugara</option>
                            <option value="Pedagang">Pedagang</option>
                            <option value="Petani/Peternak">Petani/Peternak</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani/Pabrik/Bangunan)</option>
                            <option value="Sopir/Masinis/Kondektur">Sopir/Masinis/Kondektur</option>
                            <option value="Politikus">Politikus</option>
                            <option value="Lainnya"> Lainnya</option>
                          </select>
                          <div class="invalid-feedback">Pekerjaan Ayah wajib diisi.</div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="penghasilanayah">Penghasilan</label>
                          <select name="penghasilanayah" id="penghasilanayah" class="form-select" required>
                            <option value="" disabled selected> Pilih Penghasilan Ayah</option>
                            <option value="< 500.000"> 0 - < 500.000</option>
                            <option value="> 500.000 - 1000.000">> 500.000 - 1000.000</option>
                            <option value="> 1000.000 - 1000.000">> 1000.000 - 2000.000</option>
                            <option value="> 2000.000 - 5000.000">> 2000.000 - 5000.000</option>
                            <option value="> 5000.000">> 5000.000</option>
                          </select>
                          <div class="invalid-feedback">Penghasilan Ayah wajib diisi.</div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="namaibu">Nama Lengkap Ibu</label>
                          <input type="text" autocomplete="" name="namaibu" class="form-control" required placeholder="Nama ibu" />
                          <div class="invalid-feedback">Nama Ibu wajib diisi.</div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="nikibu">NIK Ibu</label>
                          <input type="number" class="form-control" required name="nikibu" placeholder="NIK dapat dilihat pada Kartu Keluarga (KK)" data-rule="minlen:4" data-msg="Masukan NIK Dengan Benar" />
                          <div class="invalid-feedback">NIK Ibu wajib diisi dan harus terdiri dari 16 digit angka.</div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="tempatlahiribu">Tempat Lahir</label>
                          <input type="text" autocomplete="" name="tempatlahiribu" class="form-control" required value="" placeholder="Tempat Lahir ibu" />
                          <div class="invalid-feedback">Tempat Lahir Ibu wajib diisi.</div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="tanggallahiribu">Tanggal Lahir</label>
                          <input type="date" class="form-control" required name="tanggallahiribu" placeholder="Tanggal Lahir ibu" />
                          <div class="invalid-feedback">Tanggal Lahir Ibu wajib diisi.</div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="pendidikanibu">Pendidikan Terakhir</label>
                          <select name="pendidikanibu" id="pendidikanibu" class="form-select" required>
                            <option value="" disabled selected>Pilih Pendidikan Terakhir Ibu</option>
                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                            <option value="SD/MI">SD/MI</option>
                            <option value="SMP/MTs">SMP/MTs</option>
                            <option value="SMA/MA">SMA/MA</option>
                            <option value="D1/D2/D3">D1/D2/D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                          </select>
                          <div class="invalid-feedback">Pendidikan Terakhir Ibu wajib diisi.</div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="pekerjaanibu">Pekerjaan</label>
                          <select name="pekerjaanibu" id="pekerjaanibu" class="form-select" required>
                            <option value="" disabled selected>Pilih Pekerjaan Ibu</option>
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Pensiunan">Pensiunan</option>
                            <option value="PNS">PNS</option>
                            <option value="TNI/Polisi">TNI/Polisi</option>
                            <option value="Guru/Dosen">Guru/Dosen</option>
                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Pengacara/Jaksa/Hakim/Notaris">Pengacara/Jaksa/Hakim/Notaris</option>
                            <option value="Seniman/Pelukis/Artis/Sejenis">Seniman/Pelukis/Artis/Sejenis</option>
                            <option value="Dokter/Bidan/Perawat">Dokter/Bidan/Perawat</option>
                            <option value="Pilot/Pramugara">Pilot/Pramugara</option>
                            <option value="Pedagang">Pedagang</option>
                            <option value="Petani/Peternak">Petani/Peternak</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani/Pabrik/Bangunan)</option>
                            <option value="Sopir/Masinis/Kondektur">Sopir/Masinis/Kondektur</option>
                            <option value="Politikus">Politikus</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <div class="invalid-feedback">Pekerjaan Ibu wajib diisi.</div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="penghasilanibu">Penghasilan</label>
                          <select name="penghasilanibu" id="penghasilanibu" class="form-select" required>
                            <option value="" disabled selected>Pilih Penghasilan Ibu</option>
                            <option value="< 500.000">0 - < 500.000</option>
                            <option value="> 500.000 - 1000.000">> 500.000 - 1000.000</option>
                            <option value="> 1000.000 - 2000.000">> 1000.000 - 2000.000</option>
                            <option value="> 2000.000 - 5000.000">> 2000.000 - 5000.000</option>
                            <option value="> 5000.000">> 5000.000</option>
                          </select>
                          <div class="invalid-feedback">Penghasilan Ibu wajib diisi.</div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label" for="wawali">Nomor Telp Orang Tua/Wali Santri</label>
                          <input type="number" name="wawali" class="form-control" required placeholder="Nomor Telp/ WhatsApp" />
                          <div class="invalid-feedback">Nomor Telp Orang Tua/Wali Santri wajib diisi.</div>
                        </div>
                      </div>

                    </div>
                    <div class="divider">
                      <div class="divider-text fs-4 fw-bold">FORMULIR DATA PENDUKUNG LAINNYA</div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="form-label" for="prestasi">Prestasi (Isi dengan tanda (-) strip jika tidak ada)</label>
                          <input type="text" autocomplete="" name="prestasi" class="form-control" required="" placeholder="Prestasi Yang Pernah di Raih" />
                          <div class="invalid-feedback">Prestasi wajib diisi.</div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label class="form-label" for="bantuan">Kartu Indonesia Pintar (KIP)</label>
                          <select name="bantuan" id="bantuan" class="form-select" required>
                            <option value="" disabled selected>Pilih Status Bantuan</option>
                            <option value="Tidak Mempunyai">Tidak Mempunyai</option>
                            <option value="Mempunyai">Mempunyai</option>
                          </select>
                          <div class="invalid-feedback">Kartu Indonesia Pintar (KIP) wajib diisi.</div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label class="form-label" for="jaminan">Kartu Indonesia Sehat (KIS)</label>
                          <select name="jaminan" id="jaminan" class="form-select" required>
                            <option value="" disabled selected>Pilih Status Bantuan</option>
                            <option value="Tidak Mempunyai">Tidak Mempunyai</option>
                            <option value="Mempunyai">Mempunyai</option>
                          </select>
                          <div class="invalid-feedback">Kartu Indonesia Sehat (KIS) wajib diisi.</div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label class="form-label" for="pkh">Kartu Keluarga Sejahtera (KKS)</label>
                          <select name="pkh" id="pkh" class="form-select" required>
                            <option value="" disabled selected>Pilih Status Bantuan</option>
                            <option value="Tidak Mempunyai">Tidak Mempunyai</option>
                            <option value="Mempunyai">Mempunyai</option>
                          </select>
                          <div class="invalid-feedback">Kartu Keluarga Sejahtera (KKS) wajib diisi.</div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="form-label" for="nomorbantuan">NOMOR KIP/KIS/KKS (Isi dengan tanda (-) strip jika tidak ada)</label>
                          <textarea class="form-control" name="nomorbantuan" rows="2" placeholder="Ketikan Nomor KIP/KIS/KKS Jika ada Misal KIP : 123456789, KIS : 123456789, KKS : 123456789"></textarea>
                          <div class="invalid-feedback">Nomor KIP/KIS/KKS wajib diisi.</div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3 d-flex gap-4">
                          <button type="submit" class="btn btn-primary">Kirim Formulir</button>
                          <a href="/santribaru/" class="btn  btn-danger ">Kembali</a>
                        </div>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="landing-hero-blank"></div> -->
    </section>
    <!-- Hero: End -->
  </div>

  <!-- / Sections:End -->



  <!-- Footer: Start -->
  <footer class="landing-footer bg-body footer-text" id="sosmed">
    <div class="footer-bottom py-3 py-md-5">
      <div
        class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
        <div class="mb-2 mb-md-0">
          <span class="footer-bottom-text">©
            <script>
              document.write(new Date().getFullYear());
            </script>
          </span>
          <span class="footer-bottom-text"> Pondok Ngujur. All rights reserved</span>
          <!-- <a href="https://instagram.com/mezaaf_" target="_blank" class="text-white">Mezaaf</a> -->
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


  <!-- Wilayah JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
  <script>
    $(document).ready(function() {
      // Inisialisasi Select2 pada elemen select
      $('#provinsipd').select2({
        theme: 'bootstrap',
        placeholder: 'Pilih Provinsi',
        allowClear: false
      });
      $('#kabupatenpd').select2({
        theme: 'bootstrap',
        placeholder: 'Pilih Kabupaten',
        allowClear: false
      });
      $('#kecamatanpd').select2({
        theme: 'bootstrap',
        placeholder: 'Pilih Kecamatan',
        allowClear: false
      });
      $('#desapd').select2({
        theme: 'bootstrap',
        placeholder: 'Pilih Desa / Kelurahan',
        allowClear: false
      });

      // Ambil data Provinsi dari proxy.php
      $.getJSON('https://alamat.thecloudalert.com/api/provinsi/get/', function(data) {
        var provinsiSelect = $('#provinsipd');
        provinsiSelect.empty(); // Hapus semua opsi sebelumnya
        provinsiSelect.append('<option value="">Pilih Provinsi</option>'); // Menambahkan pilihan default

        // Loop untuk menambahkan pilihan provinsi ke dalam select
        $.each(data.result, function(index, item) {
          provinsiSelect.append($('<option>', {
            value: item.id,
            text: item.text
          }));
        });

        // Memperbarui tampilan Select2 setelah data dimuat
        provinsiSelect.trigger('change');
      });

      // Ketika Provinsi dipilih
      $('#provinsipd').change(function() {
        var provinsiId = $(this).val();
        if (provinsiId) {
          // Ambil data Kabupaten berdasarkan Provinsi melalui proxy.php
          $.getJSON('https://alamat.thecloudalert.com/api/kabkota/get/?d_provinsi_id=' + provinsiId, function(data) {
            var kabupatenSelect = $('#kabupatenpd');
            kabupatenSelect.empty().append('<option value="">Pilih Kabupaten</option>');

            // Loop untuk menambahkan pilihan kabupaten
            $.each(data.result, function(index, item) {
              kabupatenSelect.append($('<option>', {
                value: item.id,
                text: item.text
              }));
            });

            // Memperbarui tampilan Select2 setelah data dimuat
            kabupatenSelect.trigger('change');

            // Aktifkan kabupaten select
            $('#kabupatenpd').prop('disabled', false);
          });
        } else {
          $('#kabupatenpd').prop('disabled', true).empty().append('<option value="">Pilih Kabupaten</option>');
          $('#kecamatanpd').prop('disabled', true).empty().append('<option value="">Pilih Kecamatan</option>');
          $('#desapd').prop('disabled', true).empty().append('<option value="">Pilih Desa</option>');
        }
      });

      // Ketika Kabupaten dipilih
      $('#kabupatenpd').change(function() {
        var kabupatenId = $(this).val();
        if (kabupatenId) {
          // Ambil data Kecamatan berdasarkan Kabupaten melalui proxy.php
          $.getJSON('https://alamat.thecloudalert.com/api/kecamatan/get/?d_kabkota_id=' + kabupatenId, function(data) {
            var kecamatanSelect = $('#kecamatanpd');
            kecamatanSelect.empty().append('<option value="">Pilih Kecamatan</option>');

            // Loop untuk menambahkan pilihan kecamatan
            $.each(data.result, function(index, item) {
              kecamatanSelect.append($('<option>', {
                value: item.id,
                text: item.text
              }));
            });

            // Memperbarui tampilan Select2 setelah data dimuat
            kecamatanSelect.trigger('change');

            // Aktifkan kecamatan select
            $('#kecamatanpd').prop('disabled', false);
          });
        } else {
          $('#kecamatanpd').prop('disabled', true).empty().append('<option value="">Pilih Kecamatan</option>');
          $('#desapd').prop('disabled', true).empty().append('<option value="">Pilih Desa</option>');
        }
      });

      // Ketika Kecamatan dipilih
      $('#kecamatanpd').change(function() {
        var kecamatanId = $(this).val();
        if (kecamatanId) {
          // Ambil data Desa berdasarkan Kecamatan melalui proxy.php
          $.getJSON('https://alamat.thecloudalert.com/api/kelurahan/get/?d_kecamatan_id=' + kecamatanId, function(data) {
            var desaSelect = $('#desapd');
            desaSelect.empty().append('<option value="">Pilih Desa</option>');

            // Loop untuk menambahkan pilihan desa
            $.each(data.result, function(index, item) {
              desaSelect.append($('<option>', {
                value: item.id,
                text: item.text
              }));
            });

            // Memperbarui tampilan Select2 setelah data dimuat
            desaSelect.trigger('change');

            // Aktifkan desa select
            $('#desapd').prop('disabled', false);
          });
        } else {
          $('#desapd').prop('disabled', true).empty().append('<option value="">Pilih Desa</option>');
        }
      });

      // Ketika Desa dipilih, ambil kodepos
      $('#desapd').change(function() {
        var provinsiId = $('#provinsipd').val();
        var kabupatenId = $('#kabupatenpd').val();
        var kecamatanId = $('#kecamatanpd').val();
        var desaId = $(this).val();

        if (provinsiId && kabupatenId && kecamatanId && desaId) {
          $.getJSON('https://alamat.thecloudalert.com/api/kodepos/get/?d_kabkota_id=' + kabupatenId + '&d_kecamatan_id=' + kecamatanId, function(data) {
            if (data.status === 200 && Array.isArray(data.result) && data.result.length > 0) {
              $('#kodepos').val(data.result[0].text);
            } else {
              $('#kodepos').val('Kodepos tidak ditemukan');
            }
          }).fail(function(jqXHR, textStatus, errorThrown) {
            console.log('Request gagal:', textStatus, errorThrown);
          });
        }

      });
    });
  </script>

  <script>
    (function() {
      'use strict'

      // Pilih semua form dengan class 'needs-validation'
      var forms = document.querySelectorAll('.needs-validation');

      Array.prototype.slice.call(forms)
        .forEach(function(form) {
          form.addEventListener('submit', function(event) {
            var fileInputs = document.querySelectorAll('input[type="file"]');
            var phoneInputs = document.querySelectorAll('input[type="number"]'); // Tambahkan validasi untuk input number

            // Validasi file input
            fileInputs.forEach(function(fileInput) {
              var file = fileInput.files[0];

              if (file) {
                var fileSize = file.size / 1024 / 1024; // Convert byte to MB
                var fileType = file.type;

                // Cek ukuran file
                if (fileSize > 2) {
                  fileInput.classList.add('is-invalid');
                  event.preventDefault();
                  event.stopPropagation();
                  return; // Hentikan proses jika file terlalu besar
                } else {
                  fileInput.classList.remove('is-invalid');
                }

                // Cek format file (png, jpg, jpeg, pdf)
                if (!['image/png', 'image/jpeg', 'application/pdf'].includes(fileType)) {
                  fileInput.classList.add('is-invalid');
                  event.preventDefault();
                  event.stopPropagation();
                  return; // Hentikan proses jika format file tidak sesuai
                } else {
                  fileInput.classList.remove('is-invalid');
                }
              }
            });

            // Validasi untuk Nomor Telpon jika diisi
            phoneInputs.forEach(function(input) {
              var phoneNumber = input.value;
              var feedback = input.nextElementSibling;

              // Validasi hanya untuk 'wawali' yang wajib diisi
              if (input.name === "wawali") {
                if (!phoneNumber) {
                  input.classList.add('is-invalid');
                  feedback.textContent = "Nomor Telp Orang Tua/Wali Santri wajib diisi.";
                } else if (phoneNumber.length < 11 || phoneNumber.length > 13) {
                  input.classList.add('is-invalid');
                  feedback.textContent = "Nomor Telpon harus antara 11 hingga 13 digit.";
                } else {
                  input.classList.remove('is-invalid');
                  input.classList.add('is-valid');
                  feedback.textContent = "";
                }
              }
            });

            // Cek validitas form secara umum
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }

            form.classList.add('was-validated');
          }, false);
        });

      // Validasi untuk Nomor Telpon 'wapd' jika diisi
      document.getElementById('wapd')?.addEventListener('input', function() {
        var phoneNumber = this.value;
        var feedback = this.nextElementSibling;

        // Cek apakah panjang nomor telpon berada di antara 11 hingga 13 digit
        if (phoneNumber && (phoneNumber.length < 11 || phoneNumber.length > 13)) {
          this.classList.add('is-invalid');
          feedback.textContent = "Nomor Telpon harus antara 11 hingga 13 digit.";
        } else {
          this.classList.remove('is-invalid');
          this.classList.add('is-valid');
          feedback.textContent = "";
        }
      });

    })()
  </script>

</body>

</html>

<!-- beautify ignore:end -->