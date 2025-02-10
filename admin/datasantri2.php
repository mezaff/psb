<?php
include("../koneksi.php");
session_start();
ob_start();
if (empty($_SESSION['status_login'])) {
    header("location:login");
}
$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : 0;
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
                        <div class="card">
                            <h3 class="card-header fw-bold">DATA PENDAFTARAN</h3>
                            <div class="table-responsive text-nowrap p-4">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NO</th>
                                            <th class="text-center">NISN</th>
                                            <th class="text-center">NAMA LENGKAP</th>
                                            <th class="text-center">JENJANG</th>
                                            <th class="text-center">JENIS KELAMIN</th>
                                            <th class="text-center">TEMPAT TANGGAL LAHIR</th>
                                            <th class="text-center">NO HP ORTU</th>
                                            <th class="text-center">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <?php
                                        error_reporting(0);
                                        include "../koneksi.php";
                                        $no = 1;
                                        $query = "SELECT * FROM siswa"; // Query untuk menampilkan semua data siswa
                                        $sql = mysqli_query($connect, $query); // Eksekusi query

                                        while ($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
                                            echo "<tr>";
                                            echo "<td class='text-center'>" . $no++ . "</td>";
                                            echo "<td>" . $data['nisn'] . "</td>";
                                            echo "<td>" . $data['namapd'] . "</td>";
                                            echo "<td>" . $data['jenjang'] . "</td>";
                                            echo "<td>" . $data['jk'] . "</td>";
                                            echo "<td>" . $data['tempatlahirpd'] . ", " . $data['tanggallahirpd'] . "</td>";
                                            $no_hp = preg_replace('/[^0-9]/', '', $data['wawali']); // Hanya ambil angka
                                            echo "<td><a href='https://wa.me/$no_hp' target='_blank'>" . $data['wawali'] . "</a></td>";

                                            echo "<td><div class='d-flex gap-2 justify-content-center'><a class='btn btn-primary btn-sm' href='detail?id=" . $data['id'] . "'role='button'><i class='bx bx-search'></i></a><a class='btn btn-warning btn-sm' href='edit?id=" . $data['id'] . "'role='button'><i class='bx bx-edit'></i></a><a class='btn btn-danger btn-sm' href='hapus?id=" . $data['id'] . "' role='button' onclick='return confirm(\"Yakin ingin menghapus?\");'><i class='bx bx-trash'></i></a></div></td>";

                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
            // Ketika Provinsi dipilih
            $('#prov').change(function() {
                var provinceId = $(this).val();
                $('#kab').prop('disabled', true).html('<option value="">Pilih Kabupaten</option>');
                $('#kec').prop('disabled', true).html('<option value="">Pilih Kecamatan</option>');
                $('#desa').prop('disabled', true).html('<option value="">Pilih Desa</option>');
                $('#kode_pos').val('');

                if (provinceId) {
                    $.ajax({
                        url: '/wilayah/regencies/' + provinceId, // Gantilah dengan URL API kabupaten berdasarkan provinsi
                        method: 'GET',
                        success: function(data) {
                            $('#kab').prop('disabled', false);
                            $.each(data, function(key, item) {
                                $('#kab').append(`<option value="${item.id}">${item.name}</option>`);
                            });
                        }
                    });
                }
            });

            // Ketika Kabupaten dipilih
            $('#kab').change(function() {
                var regencyId = $(this).val();
                $('#kec').prop('disabled', true).html('<option value="">Pilih Kecamatan</option>');
                $('#desa').prop('disabled', true).html('<option value="">Pilih Desa</option>');
                $('#kode_pos').val('');

                if (regencyId) {
                    $.ajax({
                        url: '/wilayah/districts/' + regencyId, // Gantilah dengan URL API kecamatan berdasarkan kabupaten
                        method: 'GET',
                        success: function(data) {
                            $('#kec').prop('disabled', false);
                            $.each(data, function(key, item) {
                                $('#kec').append(`<option value="${item.id}">${item.name}</option>`);
                            });
                        }
                    });
                }
            });

            // Ketika Kecamatan dipilih
            $('#kec').change(function() {
                var districtId = $(this).val();
                $('#desa').prop('disabled', true).html('<option value="">Pilih Desa</option>');
                $('#kode_pos').val('');

                if (districtId) {
                    $.ajax({
                        url: '/wilayah/villages/' + districtId, // Gantilah dengan URL API desa berdasarkan kecamatan
                        method: 'GET',
                        success: function(data) {
                            $('#desa').prop('disabled', false);
                            $.each(data, function(key, item) {
                                $('#desa').append(`<option value="${item.id}" data-postal="${item.postal_code || ''}">${item.name}</option>`);
                            });
                        }
                    });
                }
            });

            // Ketika Desa dipilih, otomatis update kode pos
            // $('#desa').change(function () {
            //     var postalCode = $(this).find(':selected').data('postal');
            //     $('#kode_pos').val(postalCode ? postalCode : 'Tidak tersedia');
            // });
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // Inisialisasi Select2 dengan tema Bootstrap 5
            $('#prov').select2({
                theme: 'bootstrap-5',
                placeholder: 'Pilih Provinsi',
                allowClear: false
            });

            $('#kab').select2({
                theme: 'bootstrap-5',
                placeholder: 'Pilih Kabupaten',
                allowClear: false
            });

            $('#kec').select2({
                theme: 'bootstrap-5',
                placeholder: 'Pilih Kecamatan',
                allowClear: false
            });

            $('#desa').select2({
                theme: 'bootstrap-5',
                placeholder: 'Pilih Desa',
                allowClear: false
            });
        });
    </script>
</body>

</html>