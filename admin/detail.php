<?php
include("../koneksi.php");
session_start();
ob_start();

if (empty($_SESSION['status_login'])) {
    header("location:login");
}

$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : 0;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data siswa berdasarkan ID
    $query = "SELECT * FROM siswa WHERE id = '$id'";
    $sql = mysqli_query($connect, $query);
    $data = mysqli_fetch_assoc($sql);

    if (!$data) {
        echo "Data tidak ditemukan!";
        exit;
    }
} else {
    echo "ID tidak ditemukan!";
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

$namaFolder = preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($data['namapd']));
$targetDir = "uploads/" . $namaFolder . "/";

$akteFile = $targetDir . $data['upload_akte'];
$nisnFile = $targetDir . $data['upload_nisn'];
$ijasahFile = $targetDir . $data['upload_ijasah'];
$kkFile = $targetDir . $data['upload_kk'];
$ktpOrtuFile = $targetDir . $data['upload_ktp_ortu'];

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
    <link rel="stylesheet" href="../assets/sneat/assets/vendor/css/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/sneat/assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/sneat/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

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
                            <div class="col-md-9">
                                <div class="card mb-3">
                                    <h3 class="card-header fw-bold text-center">DETAIL DATA SANTRI</h3>
                                    <div class="table-responsive text-nowrap p-4">
                                        <table class="table table-striped table-bordered">
                                            <thead>
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
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <h3 class="card-header fw-bold text-center">DETAIL DATA ORANG TUA</h3>
                                    <div class="table-responsive text-nowrap p-4">
                                        <table class="table table-striped table-bordered">
                                            <thead>
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
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <h3 class="card-header fw-bold text-center">DETAIL DATA ALAMAT</h3>
                                    <div class="table-responsive text-nowrap p-4">
                                        <table class="table table-striped table-bordered">
                                            <thead>
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
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3">
                                    <h3 class="card-header fw-bold text-center">DOWNLOAD BERKAS</h3>
                                    <div class="card-body">
                                        <!-- Social Accounts -->
                                        <div class="d-flex mb-3">
                                            <div class="flex-grow-1 row align-items-center">
                                                <div class="col-10 mb-sm-0 mb-2">
                                                    <h4 class="mb-0 fw-bold">NISN</h4>
                                                    <span>
                                                        <?php
                                                        if ($data['upload_nisn'] == null) {
                                                            echo '<p class="mb-0 text-danger">Data belum diupload</p>';
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                                <div class="col-2  text-end">
                                                    <?php if ($data['upload_nisn'] == null) : ?>
                                                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary disabled">
                                                            <i class='bx bx-printer'></i>
                                                        </button>
                                                    <?php else : ?>
                                                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary" onclick="printFile('<?php echo '../uploads/' . $namaFolder . '/' . $data['upload_nisn']; ?>')">
                                                            <i class='bx bx-printer'></i>
                                                        </button>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex mb-3">
                                            <div class="flex-grow-1 row align-items-center">
                                                <div class="col-10 mb-sm-0 mb-2">
                                                    <h4 class="mb-0 fw-bold">Akte Kelahiran</h4>
                                                    <span>
                                                        <?php
                                                        if ($data['upload_akte'] == null) {
                                                            echo '<p class="mb-0 text-danger">Data belum diupload</p>';
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                                <div class="col-2  text-end">
                                                    <?php if ($data['upload_akte'] == null) : ?>
                                                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary disabled">
                                                            <i class='bx bx-printer'></i>
                                                        </button>
                                                    <?php else : ?>
                                                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary" onclick="printFile('<?php echo '../uploads/' . $namaFolder . '/' . $data['upload_akte']; ?>')">
                                                            <i class='bx bx-printer'></i>
                                                        </button>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex mb-3">
                                            <div class="flex-grow-1 row align-items-center">
                                                <div class="col-10 mb-sm-0 mb-2">
                                                    <h4 class="mb-0 fw-bold">Ijasah</h4>
                                                    <span>
                                                        <?php
                                                        if ($data['upload_ijasah'] == null) {
                                                            echo '<p class="mb-0 text-danger">Data belum diupload</p>';
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                                <div class="col-2  text-end">
                                                    <?php if ($data['upload_ijasah'] == null) : ?>
                                                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary disabled">
                                                            <i class='bx bx-printer'></i>
                                                        </button>
                                                    <?php else : ?>
                                                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary" onclick="printFile('<?php echo '../uploads/' . $namaFolder . '/' . $data['upload_ijasah']; ?>')">
                                                            <i class='bx bx-printer'></i>
                                                        </button>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex mb-3">
                                            <div class="flex-grow-1 row align-items-center">
                                                <div class="col-10 mb-sm-0 mb-2">
                                                    <h4 class="mb-0 fw-bold">Kartu Keluarga</h4>
                                                    <span>
                                                        <?php
                                                        if ($data['upload_kk'] == null) {
                                                            echo '<p class="mb-0 text-danger">Data belum diupload</p>';
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                                <div class="col-2  text-end">
                                                    <?php if ($data['upload_kk'] == null) : ?>
                                                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary disabled">
                                                            <i class='bx bx-printer'></i>
                                                        </button>
                                                    <?php else : ?>
                                                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary" onclick="printFile('<?php echo '../uploads/' . $namaFolder . '/' . $data['upload_kk']; ?>')">
                                                            <i class='bx bx-printer'></i>
                                                        </button>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex mb-3">
                                            <div class="flex-grow-1 row align-items-center">
                                                <div class="col-10 mb-sm-0 mb-2">
                                                    <h4 class="mb-0 fw-bold">KTP Orang Tua</h4>
                                                    <span>
                                                        <?php
                                                        if ($data['upload_ktp_ortu'] == null) {
                                                            echo '<p class="mb-0 text-danger">Data belum diupload</p>';
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                                <div class="col-2  text-end">
                                                    <?php if ($data['upload_ktp_ortu'] == null) : ?>
                                                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary disabled">
                                                            <i class='bx bx-printer'></i>
                                                        </button>
                                                    <?php else : ?>
                                                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary" onclick="printFile('<?php echo '../uploads/' . $namaFolder . '/' . $data['upload_ktp_ortu']; ?>')">
                                                            <i class='bx bx-printer'></i>
                                                        </button>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex mb-3">
                                            <div class="flex-grow-1 row align-items-center">
                                                <div class="col-10 mb-sm-0 mb-2">
                                                    <h4 class="mb-0 fw-bold">Bukti Pembayaran</h4>
                                                    <span>
                                                        <?php
                                                        if ($data['pkh'] == null) {
                                                            echo '<p class="mb-0 text-danger">Data belum diupload</p>';
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                                <div class="col-2  text-end">
                                                    <?php if ($data['pkh'] == null) : ?>
                                                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary disabled">
                                                            <i class='bx bx-printer'></i>
                                                        </button>
                                                    <?php else : ?>
                                                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary" onclick="printFile('<?php echo '../uploads/' . $namaFolder . '/' . $data['pkh']; ?>')">
                                                            <i class='bx bx-printer'></i>
                                                        </button>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Social Accounts -->
                                    </div>
                                </div>
                                <div class="d-flex mb-3 gap-3">
                                    <a href="datasantri2" class="btn btn-primary">Kembali</a>
                                    <a href="/santribaru/admin/print?id=<?php echo $data['id']; ?>" class="btn btn-info" target="_blank">Cetak Formulir</a>
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

    <script>
        $(document).ready(function() {
            $.getJSON('https://alamat.thecloudalert.com/api/provinsi/get/', function(data) {
                var defaultProvinsi = "<?php echo $data['provinsipd']; ?>";
                var provinsiName = '';

                $.each(data.result, function(index, item) {
                    if (item.id == defaultProvinsi) {
                        provinsiName = item.text;
                    }
                });


                $('#provinsiText').text(provinsiName);
            });

            var provinsiId = "<?php echo $data['provinsipd']; ?>";
            if (provinsiId) {
                $.getJSON('https://alamat.thecloudalert.com/api/kabkota/get/?d_provinsi_id=' + provinsiId, function(data) {
                    var defaultKabupaten = "<?php echo $data['kabupatenpd']; ?>"; // ID Kabupaten dari database
                    var kabupatenName = '';

                    $.each(data.result, function(index, item) {
                        if (item.id == defaultKabupaten) {
                            kabupatenName = item.text;
                        }
                    });

                    $('#kabupatenText').text(kabupatenName);
                });
            }

            var kabupatenId = "<?php echo $data['kabupatenpd']; ?>";
            if (kabupatenId) {
                $.getJSON('https://alamat.thecloudalert.com/api/kecamatan/get/?d_kabkota_id=' + kabupatenId, function(data) {
                    var defaultKecamatan = "<?php echo $data['kecamatanpd']; ?>"; // ID Kabupaten dari database
                    var kecamatanName = '';

                    $.each(data.result, function(index, item) {
                        if (item.id == defaultKecamatan) {
                            kecamatanName = item.text;
                        }
                    });

                    $('#kecamatanText').text(kecamatanName);
                });
            }

            var kecamatanId = "<?php echo $data['kecamatanpd']; ?>";
            if (kecamatanId) {
                $.getJSON('https://alamat.thecloudalert.com/api/kelurahan/get/?d_kecamatan_id=' + kecamatanId, function(data) {
                    var defaultDesa = "<?php echo $data['desapd']; ?>";
                    var desaName = '';

                    $.each(data.result, function(index, item) {
                        if (item.id == defaultDesa) {
                            desaName = item.text;
                        }
                    });

                    $('#desaText').text(desaName);
                });
            }

        });
    </script>


    <script>
        function printFile(fileUrl) {
            var printWindow = window.open(fileUrl, '_blank'); // Buka file di tab baru
            printWindow.onload = function() {
                printWindow.print(); // Panggil print otomatis setelah file dimuat
            };
        }
    </script>


</body>

</html>