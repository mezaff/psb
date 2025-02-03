<?php
include("../koneksi.php");
session_start();

if (empty($_SESSION['status_login'])) {
    header("location:login");
    exit;
}

$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : 0;

// Pastikan parameter ID ada dan valid
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Error: ID tidak valid.");
}

$id = mysqli_real_escape_string($connect, $_GET['id']);

// Ambil data siswa berdasarkan ID
$query = "SELECT * FROM siswa WHERE id = '$id'";
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_assoc($sql);

if (!$data) {
    die("Error: Data tidak ditemukan!");
}

// Fungsi format tanggal
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

// Buat nama folder dengan karakter yang aman
$namaFolder = preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($data['namapd']));
$targetDir = "uploads/" . $namaFolder . "/";

// Pastikan folder ada dan file tersedia
$akteFile = !empty($data['upload_akte']) ? $targetDir . $data['upload_akte'] : '';
$nisnFile = !empty($data['upload_nisn']) ? $targetDir . $data['upload_nisn'] : '';
$ijasahFile = !empty($data['upload_ijasah']) ? $targetDir . $data['upload_ijasah'] : '';
$kkFile = !empty($data['upload_kk']) ? $targetDir . $data['upload_kk'] : '';
$ktpOrtuFile = !empty($data['upload_ktp_ortu']) ? $targetDir . $data['upload_ktp_ortu'] : '';

?>


<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/sneat/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Data Santri | PSB Pondok Ngujur</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="gambar/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/sneat/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/sneat/assets/vendor/css/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/sneat/assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/sneat/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/sneat/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/sneat/assets/js/config.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.0.0/dist/select2-bootstrap-5.min.css"
        rel="stylesheet" />
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
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="/santribaru/admin" class="app-brand-link">
                        <a href="/santribaru/admin" app-brand-link">
                            <img src="../gambar/PSBONLINE.png" alt="logopsb" width="200">
                        </a>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="/santribaru/admin" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Layouts -->
                    <li class="menu-item active open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Master Data</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="datasantri" class="menu-link">
                                    <div data-i18n="Without menu">Verifikasi</div>
                                </a>
                            </li>
                            <li class="menu-item active">
                                <a href="datasantri2" class="menu-link">
                                    <div data-i18n="Without navbar">Data</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="print" class="menu-link">
                                    <div data-i18n="Container">Cetak Formulir</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav
                    class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <!-- <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                  aria-label="Search..." />
              </div>
            </div>  -->
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/sneat_pro/assets/img/front-pages/icons/user.svg" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/sneat_pro/assets/img/front-pages/icons/user.svg" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block"><?php echo $_SESSION['user']; ?></span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="datasantri2">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Data Santri</span>
                                            <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">
                                                <?php
                                                include '../koneksi.php';
                                                $idkunci = 2;
                                                $query3 = $connect->query("SELECT * FROM siswa WHERE status = '$idkunci' ORDER BY id DESC");
                                                $jml3 = mysqli_num_rows($query3);

                                                $idkunci = 1;
                                                $query4 = $connect->query("SELECT * FROM siswa WHERE status = '$idkunci' ORDER BY id DESC");
                                                $jml4 = mysqli_num_rows($query4);

                                                $jawab = $jml3 + $jml4;
                                                echo "$jawab";
                                                ?>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="datasantri">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Data Verifikasi</span>
                                            <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">
                                                <?php
                                                include '../koneksi.php';
                                                $idkunci = 1;
                                                $query2 = $connect->query("SELECT * FROM siswa WHERE status = '$idkunci' ORDER BY id DESC");
                                                $jml2 = mysqli_num_rows($query2);
                                                echo "$jml2";
                                                ?>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="ubah?id=<?php echo $id_user; ?>">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Pengaturan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="logout">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        <!-- Hoverable Table rows -->
                        <div class="row">
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <form method="post" action="updatepd" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                            <div class="divider">
                                                <div class="divider-text fs-4 fw-bold">JENIS PENDAFTARAN</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="jenispd">Jenis Pendaftaran</label>
                                                        <select name="jenispd" id="jenispd" class="form-select" required="">
                                                            <option value="" disabled <?php echo empty($data['jenispd']) ? 'selected' : ''; ?>>Pilih Jenis Pendaftaran</option>
                                                            <option value="Santri Baru" <?php echo ($data['jenispd'] == 'Santri Baru') ? 'selected' : ''; ?>>Santri Baru</option>
                                                            <option value="Santri Pindahan" <?php echo ($data['jenispd'] == 'Santri Pindahan') ? 'selected' : ''; ?>>Santri Pindahan</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="jenjang">Jenjang Pendidikan</label>
                                                        <select name="jenjang" id="jenjang" class="form-select" required="">
                                                            <option value="" disabled <?php echo empty($data['jenjang']) ? 'selected' : ''; ?>>Pilih Jenjang Pendidikan</option>
                                                            <option value="Tsanawiyah" <?php echo ($data['jenjang'] == 'Tsanawiyah') ? 'selected' : ''; ?>> Tsanawiyah (MTs)</option>
                                                            <option value="Aliyah" <?php echo ($data['jenjang'] == 'Aliyah') ? 'selected' : ''; ?>> Aliyah (MA)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="divider">
                                                <div class="divider-text fs-4 fw-bold">DATA SANTRI</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="nik">NIK (Nomor Induk Kependudukan)</label>
                                                        <input type="number" class="form-control" required=""
                                                            name="nik" placeholder="NIK dapat dilihat pada Kartu Keluarga (KK)"
                                                            data-rule="minlen:4" data-msg="Masukan NIK Dengan Benar" value="<?php echo htmlspecialchars($data['nik']); ?>" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="nisn">NISN</label>
                                                        <input type="number" class="form-control"
                                                            required=" " name="nisn" placeholder="Masukan NISN " value="<?php echo htmlspecialchars($data['nisn']); ?>" data-rule="minlen:4" data-msg="Masukan NISN Dengan Benar" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="namapd">Nama Lengkap</label>
                                                        <input type="text" autocomplete="" class="form-control" required="" value="<?php echo htmlspecialchars($data['namapd']); ?>" name="namapd" placeholder="Nama Lengkap Calon Peserta didik" data-rule="minlen:2" data-msg="Nama Tidak Valid" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="jk">Jenis Kelamin</label>
                                                        <select name="jk" id="jk" required=""
                                                            class="form-select">
                                                            <option value="" disabled <?php echo empty($data['jk']) ? 'selected' : ''; ?>>Pilih Jenis Kelamin</option>
                                                            <option value="Laki - Laki" <?php echo ($data['jk'] == 'Laki - Laki') ? 'selected' : ''; ?>>Laki - Laki</option>
                                                            <option value="Perempuan" <?php echo ($data['jk'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="namapd">Tempat Lahir</label>
                                                        <input type="text" autocomplete="" name="tempatlahirpd" class="form-control" required="" value="<?php echo htmlspecialchars($data['tempatlahirpd']); ?>" placeholder="Tempat Lahir" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="tanggallahirpd">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" value="<?php echo htmlspecialchars($data['tanggallahirpd']); ?>" required="" name="tanggallahirpd" placeholder="Tanggal Lahir" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="wapd">Nomor Telpon (Tidak Wajib)</label>
                                                        <input type="number" class="form-control" name="wapd" value="<?php echo htmlspecialchars($data['wapd']); ?>" placeholder="No Telp/ WA" data-rule="minlen:11" data-msg="Minimal 11 Angka" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="upload_akte">Upload Akte</label>
                                                        <input type="file" name="upload_akte" class="form-control" placeholder="Upload Akte Kelahiran" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="upload_nisn">Upload NISN</label>
                                                        <input type="file" name="upload_nisn" class="form-control" placeholder="Upload NISN" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="upload_ijasah">Upload Ijasah</label>
                                                        <input type="file" name="upload_ijasah" class="form-control" placeholder="Upload Ijasah" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="divider">
                                                <div class="divider-text fs-4 fw-bold">DATA ALAMAT</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="alamatpd">Alamat Lengkap</label>
                                                        <textarea class="form-control" required="" rows="2" name="alamatpd" data-rule="required" data-msg="Alamat Tidak Valid" placeholder="Masukkan Alamat Lengkap, Sertakan Nama Jalan dan RT/RW "><?php echo htmlspecialchars($data['alamatpd']); ?></textarea>
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="provinsipd">Provinsi</label>
                                                        <select id="provinsipd" name="provinsipd" class="form-select">
                                                            <option value="">Pilih Provinsi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="kabupatenpd">Kabupaten</label>
                                                        <select id="kabupatenpd" name="kabupatenpd" class="form-select">
                                                            <option value="">Pilih Kabupaten</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="kecamatanpd">Kecamatan</label>
                                                        <select id="kecamatanpd" name="kecamatanpd" class="form-select">
                                                            <option value="">Pilih Kecamatan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="desapd">Kelurahan / Desa</label>
                                                        <select id="desapd" name="desapd" class="form-select">
                                                            <option value="">Pilih Kelurahan / Desa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="kodepos">Kode Pos</label>
                                                        <input type="text" autocomplete="" id="kodepos" name="kodepos" class="form-control" required="" placeholder="Masukkan Kode Pos" readonly />
                                                        <!-- Input untuk kodepos -->

                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="jarak">Jarak Ke Lembaga</label>
                                                        <select class="form-select" id="jarak" required="" name="jarak">
                                                            <option value="" disabled <?php echo empty($data['jarak']) ? 'selected' : ''; ?>>Jarak ke Lembaga</option>
                                                            <option value="Kurang dari 5 km" <?php echo ($data['jarak'] == 'Kurang dari 5 km') ? 'selected' : ''; ?>>Kurang dari 5 km</option>
                                                            <option value="Antara 5 - 10 km" <?php echo ($data['jarak'] == 'Antara 5 - 10 km') ? 'selected' : ''; ?>>Antara 5 - 10 km</option>
                                                            <option value="Antara 11 - 20 km" <?php echo ($data['jarak'] == 'Antara 11 - 20 km') ? 'selected' : ''; ?>>Antara 11 - 20 km</option>
                                                            <option value="Antara 21 - 30 km" <?php echo ($data['jarak'] == 'Antara 21 - 30 km') ? 'selected' : ''; ?>>Antara 21 - 30 km</option>
                                                            <option value="Lebih dari 30 km" <?php echo ($data['jarak'] == 'Lebih dari 30 km') ? 'selected' : ''; ?>>Lebih dari 30 km</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="transportasi">Transportasi</label>
                                                        <select class="form-select" id="transportasi" required="" name="transportasi">
                                                            <option value="" disabled <?php echo empty($data['transportasi']) ? 'selected' : ''; ?>>Transportasi ke Lembaga</option>
                                                            <option value="Sepeda" <?php echo ($data['transportasi'] == 'Sepeda') ? 'selected' : ''; ?>>Sepeda</option>
                                                            <option value="Sepeda Motor" <?php echo ($data['transportasi'] == 'Sepeda Motor') ? 'selected' : ''; ?>>Sepeda Motor</option>
                                                            <option value="Mobil Pribadi" <?php echo ($data['transportasi'] == 'Mobil Pribadi') ? 'selected' : ''; ?>>Mobil Pribadi</option>
                                                            <option value="Antar Jemput Sekolah" <?php echo ($data['transportasi'] == 'Antar Jemput Sekolah') ? 'selected' : ''; ?>>Antar Jemput Sekolah</option>
                                                            <option value="Angkutan Umum" <?php echo ($data['transportasi'] == 'Angkutan Umum') ? 'selected' : ''; ?>>Angkutan Umum</option>
                                                            <option value="Perahu/Sampan" <?php echo ($data['transportasi'] == 'Perahu/Sampan') ? 'selected' : ''; ?>>Perahu/Sampan</option>
                                                            <option value="Kendaraan Pribadi" <?php echo ($data['transportasi'] == 'Kendaraan Pribadi') ? 'selected' : ''; ?>>Kendaraan Pribadi</option>
                                                            <option value="Kereta Api" <?php echo ($data['transportasi'] == 'Kereta Api') ? 'selected' : ''; ?>>Kereta Api</option>
                                                            <option value="Ojek" <?php echo ($data['transportasi'] == 'Ojek') ? 'selected' : ''; ?>>Ojek</option>
                                                            <option value="Andong/Bendi/Sado/Dokar/Delman/Becak" <?php echo ($data['transportasi'] == 'Andong/Bendi/Sado/Dokar/Delman/Becak') ? 'selected' : ''; ?>>Andong/Bendi/Sado/Dokar/Delman/Becak</option>
                                                            <option value="Lainnya" <?php echo ($data['transportasi'] == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="waktu">Waktu Tempuh</label>
                                                        <select class="form-select" id="waktu" required="" name="waktu">
                                                            <option value="" disabled <?php echo empty($data['waktu']) ? 'selected' : ''; ?>>Waktu Tempuh</option>
                                                            <option value="1 - 10 menit" <?php echo ($data['waktu'] == '1 - 10 menit') ? 'selected' : ''; ?>>1 - 10 menit</option>
                                                            <option value="11 - 20 menit" <?php echo ($data['waktu'] == '11 - 20 menit') ? 'selected' : ''; ?>>11 - 20 menit</option>
                                                            <option value="21 - 30 menit" <?php echo ($data['waktu'] == '21 - 30 menit') ? 'selected' : ''; ?>>21 - 30 menit</option>
                                                            <option value="31 - 40 menit" <?php echo ($data['waktu'] == '31 - 40 menit') ? 'selected' : ''; ?>>31 - 40 menit</option>
                                                            <option value="1 - 2 jam" <?php echo ($data['waktu'] == '1 - 2 jam') ? 'selected' : ''; ?>>1 - 2 jam</option>
                                                            <option value="> 2 jam" <?php echo ($data['waktu'] == '> 2 jam') ? 'selected' : ''; ?>> >2 jam</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="divider">
                                                <div class="divider-text fs-4 fw-bold">DATA ASAL SEKOLAH</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="asalsekolah">Asal Sekolah</label>
                                                        <input type="text" autocomplete="" name="asalsekolah" class="form-control" required="" value="<?php echo htmlspecialchars($data['asalsekolah']); ?>" placeholder="Asal Sekolah" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="divider">
                                                <div class="divider-text fs-4 fw-bold">DATA ORANG TUA</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="upload_kk">Upload Kartu Keluarga</label>
                                                        <input type="file" name="upload_kk" class="form-control" placeholder="Nama Ayah" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="upload_ktp_ortu">Upload KTP Orang Tua</label>
                                                        <input type="file" name="upload_ktp_ortu" class="form-control" id="name" value="" placeholder="Tempat Lahir Ayah" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="kk">Nomor Kartu Keluarga</label>
                                                        <input type="number" class="form-control" required=""
                                                            name="kk" value="<?php echo htmlspecialchars($data['kk']); ?>" placeholder="NIK dapat dilihat pada Kartu Keluarga (KK)"
                                                            data-rule="minlen:4" data-msg="Masukan NIK Dengan Benar" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="nikayah">NIK Ayah</label>
                                                        <input type="number" class="form-control" required=""
                                                            name="nikayah" value="<?php echo htmlspecialchars($data['nikayah']); ?>" placeholder="NIK dapat dilihat pada Kartu Keluarga (KK)"
                                                            data-rule="minlen:4" data-msg="Masukan NIK Dengan Benar" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="namaayah">Nama Lengkap Ayah</label>
                                                        <input type="text" autocomplete="" name="namaayah" value="<?php echo htmlspecialchars($data['namaayah']); ?>" class="form-control" required="" placeholder="Nama Ayah" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="tempatlahirayah">Tempat Lahir</label>
                                                        <input type="text" autocomplete="" name="tempatlahirayah" class="form-control" required="" id="name" value="<?php echo htmlspecialchars($data['tempatlahirayah']); ?>" placeholder="Tempat Lahir Ayah" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="tanggallahirayah">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" required="" value="<?php echo htmlspecialchars($data['tanggallahirayah']); ?>" name="tanggallahirayah" placeholder="Tanggal Lahir Ayah" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="pendidikanayah">Pendidikan Terakhir</label>
                                                        <select name="pendidikanayah" id="pendidikanayah" class="form-select" required="">
                                                            <option value="" disabled <?php echo empty($data['pendidikanayah']) ? 'selected' : ''; ?>> Pilih Pendidikan Terakhir Ayah</option>
                                                            <option value="Tidak Sekolah" <?php echo ($data['pendidikanayah'] == 'Tidak Sekolah') ? 'selected' : ''; ?>>Tidak Sekolah</option>
                                                            <option value="SD/MI" <?php echo ($data['pendidikanayah'] == 'SD/MI') ? 'selected' : ''; ?>>SD/MI</option>
                                                            <option value="SMP/MTs" <?php echo ($data['pendidikanayah'] == 'SMP/MTs') ? 'selected' : ''; ?>>SMP/ MTs</option>
                                                            <option value="SMA/MA" <?php echo ($data['pendidikanayah'] == 'SMA/MA') ? 'selected' : ''; ?>>SMA / MA</option>
                                                            <option value="D1/D2/D3" <?php echo ($data['pendidikanayah'] == 'D1/D2/D3') ? 'selected' : ''; ?>> D1/D2/D3</option>
                                                            <option value="S1" <?php echo ($data['pendidikanayah'] == 'S1') ? 'selected' : ''; ?>>S1</option>
                                                            <option value="S2" <?php echo ($data['pendidikanayah'] == 'S2') ? 'selected' : ''; ?>>S2</option>
                                                            <option value="S3" <?php echo ($data['pendidikanayah'] == 'S3') ? 'selected' : ''; ?>>S3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="pekerjaanayah">Pekerjaan</label>
                                                        <select name="pekerjaanayah" id="pekerjaanayah" class="form-select" required="">
                                                            <option value="" disabled <?php echo empty($data['pekerjaanayah']) ? 'selected' : ''; ?>> Pilih Pekerjaan Ayah</option>
                                                            <option value="Tidak Bekerja" <?php echo ($data['pekerjaanayah'] == 'Tidak Bekerja') ? 'selected' : ''; ?>>Tidak Bekerja</option>
                                                            <option value="Pensiunan" <?php echo ($data['pekerjaanayah'] == 'Pensiunan') ? 'selected' : ''; ?>>Pensiunan</option>
                                                            <option value="PNS" <?php echo ($data['pekerjaanayah'] == 'PNS') ? 'selected' : ''; ?>>PNS</option>
                                                            <option value="TNI/Polisi" <?php echo ($data['pekerjaanayah'] == 'TNI/Polisi') ? 'selected' : ''; ?>>TNI/Polisi</option>
                                                            <option value="Guru/Dosen" <?php echo ($data['pekerjaanayah'] == 'Guru/Dosen') ? 'selected' : ''; ?>>Guru/Dosen</option>
                                                            <option value="Pegawai Swasta" <?php echo ($data['pekerjaanayah'] == 'Pegawai Swasta') ? 'selected' : ''; ?>>Pegawai Swasta</option>
                                                            <option value="Wiraswasta" <?php echo ($data['pekerjaanayah'] == 'Wiraswasta') ? 'selected' : ''; ?>>Wiraswasta</option>
                                                            <option value="Pengacara/Jaksa/Hakim/Notaris" <?php echo ($data['pekerjaanayah'] == 'Pengacara/Jaksa/Hakim/Notaris') ? 'selected' : ''; ?>>Pengacara/Jaksa/Hakim/Notaris</option>
                                                            <option value="Seniman/Pelukis/Artis/Sejenis" <?php echo ($data['pekerjaanayah'] == 'Seniman/Pelukis/Artis/Sejenis') ? 'selected' : ''; ?>>Seniman/Pelukis/Artis/Sejenis</option>
                                                            <option value="Dokter/Bidan/Perawat" <?php echo ($data['pekerjaanayah'] == 'Dokter/Bidan/Perawat') ? 'selected' : ''; ?>>Dokter/Bidan/Perawat</option>
                                                            <option value="Pilot/Pramugara" <?php echo ($data['pekerjaanayah'] == 'Pilot/Pramugara') ? 'selected' : ''; ?>>Pilot/Pramugara</option>
                                                            <option value="Pedagang" <?php echo ($data['pekerjaanayah'] == 'Pedagang') ? 'selected' : ''; ?>>Pedagang</option>
                                                            <option value="Petani/Peternak" <?php echo ($data['pekerjaanayah'] == 'Petani/Peternak') ? 'selected' : ''; ?>>Petani/Peternak</option>
                                                            <option value="Nelayan" <?php echo ($data['pekerjaanayah'] == 'Nelayan') ? 'selected' : ''; ?>>Nelayan</option>
                                                            <option value="Buruh (Tani/Pabrik/Bangunan)" <?php echo ($data['pekerjaanayah'] == 'Buruh (Tani/Pabrik/Bangunan)') ? 'selected' : ''; ?>>Buruh (Tani/Pabrik/Bangunan)</option>
                                                            <option value="Sopir/Masinis/Kondektur" <?php echo ($data['pekerjaanayah'] == 'Sopir/Masinis/Kondektur') ? 'selected' : ''; ?>>Sopir/Masinis/Kondektur</option>
                                                            <option value="Politikus" <?php echo ($data['pekerjaanayah'] == 'Politikus') ? 'selected' : ''; ?>>Politikus</option>
                                                            <option value="Lainnya" <?php echo ($data['pekerjaanayah'] == 'Lainnya') ? 'selected' : ''; ?>> Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="penghasilanayah">Penghasilan</label>
                                                        <select name="penghasilanayah" id="penghasilanayah" class="form-select" required="">
                                                            <option value="" disabled <?php echo empty($data['penghasilanayah']) ? 'selected' : ''; ?>> Pilih Penghasilan Ayah</option>
                                                            <option value="< 500.000" <?php echo ($data['penghasilanayah'] == '< 500.000') ? 'selected' : ''; ?>> 0 - < 500.000</option>
                                                            <option value="> 500.000 - 1000.000" <?php echo ($data['penghasilanayah'] == '> 500.000 - 1000.000') ? 'selected' : ''; ?>> 500.000 - 1000.000</option>
                                                            <option value="> 1000.000 - 1000.000" <?php echo ($data['penghasilanayah'] == '> 1000.000 - 2000.000') ? 'selected' : ''; ?>> 1000.000 - 2000.000</option>
                                                            <option value="> 2000.000 - 5000.000" <?php echo ($data['penghasilanayah'] == '> 2000.000 - 5000.000') ? 'selected' : ''; ?>> 2000.000 - 5000.000</option>
                                                            <option value="> 5000.000" <?php echo ($data['penghasilanayah'] == '> 5000.000') ? 'selected' : ''; ?>> 5000.000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="namaibu">Nama Lengkap Ibu</label>
                                                        <input type="text" autocomplete="" name="namaibu" value="<?php echo htmlspecialchars($data['namaibu']); ?>" class="form-control" required="" placeholder="Nama ibu" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="nikibu">NIK Ibu</label>
                                                        <input type="number" class="form-control" required=""
                                                            name="nikibu" value="<?php echo htmlspecialchars($data['nikibu']); ?>" placeholder="NIK dapat dilihat pada Kartu Keluarga (KK)"
                                                            data-rule="minlen:4" data-msg="Masukan NIK Dengan Benar" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="tempatlahiribu">Tempat Lahir</label>
                                                        <input type="text" autocomplete="" name="tempatlahiribu" class="form-control" required="" value="<?php echo htmlspecialchars($data['tempatlahiribu']); ?>" placeholder="Tempat Lahir ibu" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="tanggallahiribu">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" required="" name="tanggallahiribu" value="<?php echo htmlspecialchars($data['tanggallahiribu']); ?>" placeholder="Tanggal Lahir ibu" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="pendidikanibu">Pendidikan Terakhir</label>
                                                        <select name="pendidikanibu" id="pendidikanibu" class="form-select" required="">
                                                            <option value="" disabled <?php echo empty($data['pendidikanibu']) ? 'selected' : ''; ?>>Pilih Pendidikan Terakhir Ibu</option>
                                                            <option value="Tidak Sekolah" <?php echo ($data['pendidikanibu'] == 'Tidak Sekolah') ? 'selected' : ''; ?>>Tidak Sekolah</option>
                                                            <option value="SD/MI" <?php echo ($data['pendidikanibu'] == 'SD/MI') ? 'selected' : ''; ?>>SD/MI</option>
                                                            <option value="SMP/MTs" <?php echo ($data['pendidikanibu'] == 'SMP/MTs') ? 'selected' : ''; ?>>SMP/MTs</option>
                                                            <option value="SMA/MA" <?php echo ($data['pendidikanibu'] == 'SMA/MA') ? 'selected' : ''; ?>>SMA/MA</option>
                                                            <option value="D1/D2/D3" <?php echo ($data['pendidikanibu'] == 'D1/D2/D3') ? 'selected' : ''; ?>>D1/D2/D3</option>
                                                            <option value="S1" <?php echo ($data['pendidikanibu'] == 'S1') ? 'selected' : ''; ?>>S1</option>
                                                            <option value="S2" <?php echo ($data['pendidikanibu'] == 'S2') ? 'selected' : ''; ?>>S2</option>
                                                            <option value="S3" <?php echo ($data['pendidikanibu'] == 'S3') ? 'selected' : ''; ?>>S3</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="pekerjaanibu">Pekerjaan</label>
                                                        <select name="pekerjaanibu" id="pekerjaanibu" class="form-select" required="">
                                                            <option value="" disabled <?php echo empty($data['pekerjaanibu']) ? 'selected' : ''; ?>> Pilih Pekerjaan Ibu</option>
                                                            <option value="Tidak Bekerja" <?php echo ($data['pekerjaanibu'] == 'Tidak Bekerja') ? 'selected' : ''; ?>>Tidak Bekerja</option>
                                                            <option value="Pensiunan" <?php echo ($data['pekerjaanibu'] == 'Pensiunan') ? 'selected' : ''; ?>>Pensiunan</option>
                                                            <option value="PNS" <?php echo ($data['pekerjaanibu'] == 'PNS') ? 'selected' : ''; ?>>PNS</option>
                                                            <option value="TNI/Polisi" <?php echo ($data['pekerjaanibu'] == 'TNI/Polisi') ? 'selected' : ''; ?>>TNI/Polisi</option>
                                                            <option value="Guru/Dosen" <?php echo ($data['pekerjaanibu'] == 'Guru/Dosen') ? 'selected' : ''; ?>>Guru/Dosen</option>
                                                            <option value="Pegawai Swasta" <?php echo ($data['pekerjaanibu'] == 'Pegawai Swasta') ? 'selected' : ''; ?>>Pegawai Swasta</option>
                                                            <option value="Wiraswasta" <?php echo ($data['pekerjaanibu'] == 'Wiraswasta') ? 'selected' : ''; ?>>Wiraswasta</option>
                                                            <option value="Pengacara/Jaksa/Hakim/Notaris" <?php echo ($data['pekerjaanibu'] == 'Pengacara/Jaksa/Hakim/Notaris') ? 'selected' : ''; ?>>Pengacara/Jaksa/Hakim/Notaris</option>
                                                            <option value="Seniman/Pelukis/Artis/Sejenis" <?php echo ($data['pekerjaanibu'] == 'Seniman/Pelukis/Artis/Sejenis') ? 'selected' : ''; ?>>Seniman/Pelukis/Artis/Sejenis</option>
                                                            <option value="Dokter/Bidan/Perawat" <?php echo ($data['pekerjaanibu'] == 'Dokter/Bidan/Perawat') ? 'selected' : ''; ?>>Dokter/Bidan/Perawat</option>
                                                            <option value="Pilot/Pramugara" <?php echo ($data['pekerjaanibu'] == 'Pilot/Pramugara') ? 'selected' : ''; ?>>Pilot/Pramugara</option>
                                                            <option value="Pedagang" <?php echo ($data['pekerjaanibu'] == 'Pedagang') ? 'selected' : ''; ?>>Pedagang</option>
                                                            <option value="Petani/Peternak" <?php echo ($data['pekerjaanibu'] == 'Petani/Peternak') ? 'selected' : ''; ?>>Petani/Peternak</option>
                                                            <option value="Nelayan" <?php echo ($data['pekerjaanibu'] == 'Nelayan') ? 'selected' : ''; ?>>Nelayan</option>
                                                            <option value="Buruh (Tani/Pabrik/Bangunan)" <?php echo ($data['pekerjaanibu'] == 'Buruh (Tani/Pabrik/Bangunan)') ? 'selected' : ''; ?>>Buruh (Tani/Pabrik/Bangunan)</option>
                                                            <option value="Sopir/Masinis/Kondektur" <?php echo ($data['pekerjaanibu'] == 'Sopir/Masinis/Kondektur') ? 'selected' : ''; ?>>Sopir/Masinis/Kondektur</option>
                                                            <option value="Politikus" <?php echo ($data['pekerjaanibu'] == 'Politikus') ? 'selected' : ''; ?>>Politikus</option>
                                                            <option value="Lainnya" <?php echo ($data['pekerjaanibu'] == 'Lainnya') ? 'selected' : ''; ?>> Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="penghasilanibu">Penghasilan</label>
                                                        <select name="penghasilanibu" id="penghasilanibu" class="form-select" required="">
                                                            <option value="" disabled <?php echo empty($data['penghasilanibu']) ? 'selected' : ''; ?>> Pilih Penghasilan Ibu</option>
                                                            <option value="< 500.000" <?php echo ($data['penghasilanibu'] == '< 500.000') ? 'selected' : ''; ?>> 0 - < 500.000</option>
                                                            <option value="> 500.000 - 1000.000" <?php echo ($data['penghasilanibu'] == '> 500.000 - 1000.000') ? 'selected' : ''; ?>> 500.000 - 1000.000</option>
                                                            <option value="> 1000.000 - 2000.000" <?php echo ($data['penghasilanibu'] == '> 1000.000 - 2000.000') ? 'selected' : ''; ?>> 1000.000 - 2000.000</option>
                                                            <option value="> 2000.000 - 5000.000" <?php echo ($data['penghasilanibu'] == '> 2000.000 - 5000.000') ? 'selected' : ''; ?>> 2000.000 - 5000.000</option>
                                                            <option value="> 5000.000" <?php echo ($data['penghasilanibu'] == '> 5000.000') ? 'selected' : ''; ?>> 5000.000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="wawali">Nomor Telp Orang Tua/Wali Santri</label>
                                                        <input type="number" name="wawali" value="<?php echo htmlspecialchars($data['wawali']); ?>" class="form-control" required="" placeholder="Nomor Telp/ WhatsApp" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="divider">
                                                <div class="divider-text fs-4 fw-bold">DATA PENDUKUNG LAINNYA</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="prestasi">Prestasi (Isi dengan tanda (-) strip jika tidak ada)</label>
                                                        <input type="text" autocomplete="" name="prestasi" value="<?php echo htmlspecialchars($data['prestasi']); ?>" class="form-control" required="" placeholder="Prestasi Yang Pernah di Raih" />
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="bantuan">Kartu Indonesia Pintar (KIP)</label>
                                                        <select name="bantuan" id="bantuan" class="form-select" required="">
                                                            <option value="" disabled <?php echo empty($data['bantuan']) ? 'selected' : ''; ?>>Pilih Status Bantuan</option>
                                                            <option value="Tidak Mempunyai" <?php echo ($data['bantuan'] == 'Tidak Mempunyai') ? 'selected' : ''; ?>>Tidak Mempunyai</option>
                                                            <option value=" Mempunyai" <?php echo ($data['bantuan'] == ' Mempunyai') ? 'selected' : ''; ?>> Mempunyai</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="jaminan">Kartu Indonesia Sehat (KIS)</label>
                                                        <select name="jaminan" id="jaminan" class="form-select" required="">
                                                            <option value="" disabled <?php echo empty($data['jaminan']) ? 'selected' : ''; ?>>Pilih Status Bantuan</option>
                                                            <option value="Tidak Mempunyai" <?php echo ($data['jaminan'] == 'Tidak Mempunyai') ? 'selected' : ''; ?>>Tidak Mempunyai</option>
                                                            <option value=" Mempunyai" <?php echo ($data['jaminan'] == ' Mempunyai') ? 'selected' : ''; ?>> Mempunyai</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="pkh">Kartu Keluarga Sejahtera (KKS)</label>
                                                        <select name="pkh" id="pkh" class="form-select" required="">
                                                            <option value="" disabled <?php echo empty($data['pkh']) ? 'selected' : ''; ?>>Pilih Status Bantuan</option>
                                                            <option value="Tidak Mempunyai" <?php echo ($data['pkh'] == 'Tidak Mempunyai') ? 'selected' : ''; ?>>Tidak Mempunyai</option>
                                                            <option value=" Mempunyai" <?php echo ($data['pkh'] == ' Mempunyai') ? 'selected' : ''; ?>> Mempunyai</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="nomorbantuan">NOMOR KIP/KIS/KKS (Isi dengan tanda (-) strip jika tidak ada)</label>
                                                        <textarea class="form-control" name="nomorbantuan" rows="2" placeholder="Ketikan Nomor KIP/KIS/KKS Jika ada Misal KIP : 123456789, KIS : 123456789, KKS : 123456789"><?php echo htmlspecialchars($data['nomorbantuan']); ?></textarea>
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3 d-flex gap-4">
                                                        <button type="submit" class="btn btn-primary">Update Data</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--/ Hoverable Table rows -->
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="https://www.instagram.com/mezaafsopsepoken" target="_blank" class="footer-link fw-bolder">Mezaaf</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


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

            // Ambil data Provinsi dari API
            $.getJSON('https://alamat.thecloudalert.com/api/provinsi/get/', function(data) {
                var provinsiSelect = $('#provinsipd');
                provinsiSelect.empty();
                provinsiSelect.append('<option value="">Pilih Provinsi</option>'); // Menambahkan pilihan default

                // Loop untuk menambahkan pilihan provinsi ke dalam select
                $.each(data.result, function(index, item) {
                    provinsiSelect.append($('<option>', {
                        value: item.id,
                        text: item.text
                    }));
                });

                // Set default value berdasarkan data dari database
                var defaultProvinsi = "<?php echo $data['provinsipd']; ?>"; // Misal data['provinsi_id'] dari database
                provinsiSelect.val(defaultProvinsi).trigger('change');
            });

            // Ketika Provinsi dipilih
            $('#provinsipd').change(function() {
                var provinsiId = $(this).val();
                if (provinsiId) {
                    // Ambil data Kabupaten berdasarkan Provinsi
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

                        // Set default value berdasarkan data dari database
                        var defaultKabupaten = "<?php echo $data['kabupatenpd']; ?>"; // Misal data['kabupaten_id'] dari database
                        kabupatenSelect.val(defaultKabupaten).trigger('change');

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
                    // Ambil data Kecamatan berdasarkan Kabupaten
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

                        // Set default value berdasarkan data dari database
                        var defaultKecamatan = "<?php echo $data['kecamatanpd']; ?>"; // Misal data['kecamatan_id'] dari database
                        kecamatanSelect.val(defaultKecamatan).trigger('change');

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
                    // Ambil data Desa berdasarkan Kecamatan
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

                        // Set default value berdasarkan data dari database
                        var defaultDesa = "<?php echo $data['desapd']; ?>"; // Misal data['desa_id'] dari database
                        desaSelect.val(defaultDesa).trigger('change');

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



</body>

</html>