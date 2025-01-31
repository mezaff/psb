<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>


<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">

                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <center><a href="index.html"><?php
                                                // Load file koneksi.php
                                                include "../koneksi.php";

                                                $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
                                                $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                                                while ($data = mysqli_fetch_array($sql)) {


                                                    echo "<h5> Panel Admin <br>" . $data['nama'] . "</h5>";
                                                } ?>
                    </a></center>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Pilih Menu</li>

                        <li class="sidebar-item  ">
                            <a href="index" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item active ">
                            <a href="datasantri" class='sidebar-link'>
                                <i class="bi  bi-stack"></i>
                                <span>Manajemen Verifikasi</span>
                            </a>
                        </li>
                        </li>

                        <a href="datasantri2" class='sidebar-link'>
                            <i class="bi  bi-stack"></i>
                            <span>Manajemen Data</span>
                        </a>
                        </li>



                        <li class="sidebar-item  ">
                            <a href="logout" class='sidebar-link'>
                                <i class="bi bi-cloud-arrow-door-fill"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Manajemen Verifikasi</h3>
                            <p class="text-subtitle text-muted">Calon Peserta Didik Baru Tahun Pelajaran 2022/2023</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manajemen Verifikasi</li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>


                <?php
                error_reporting(0);
                include "../koneksi.php";


                $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
                $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                while ($data = mysqli_fetch_array($sql)) {
                } ?> </a>

            </div>
            </header><!-- End Header -->

            <!-- ======= Hero Section ======= -->

            </section><!-- End Services Section -->

            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container">



                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-sm-12">
                                    <h1>Cari Data yang ingin dicetak</h1>
                                    <p>Ketikan NISN Peserta Didik Yang ingin dicetak</p>
                                    <form action="" method="post" role="form">
                                        <div class="form-row">
                                            <div class="col-md-9 form-group">
                                                <input type="number" name="nt" class="form-control" id="nt" placeholder="Ketikan NISN Peserta Didik .... " autocomplete="off" / required="">

                                            </div>
                                            <div class="text-center"><button type="submit" name="submit" class="btn btn-primary ">Cari Peserta Didik</button></div>
                                    </form>
                                    <br><br><br>

                                    <center>

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
                                                echo "<center><br><div class='col-sm'><div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Maaf! </strong> Hasil Pencarian NISN $ntt Tidak Ditemukan
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div></div></center>";
                                            } else {
                                                echo "</div>";
                                                echo "<center><div class='col-sm'><div class='alert alert-primary alert-dismissible fade show' role='alert'>Pencarian NISN $ntt berhasil ditemukan!</div></center>";
                                                echo "<br>";
                                            }

                                            $query2 = "SELECT * FROM siswa WHERE nisn LIKE '$cari'";
                                            $sql = mysqli_query($connect, $query2);

                                            while ($r = mysqli_fetch_array($sql)) {

                                        ?>

                                </div>
                                </form>
                                </center>
                                <br>

                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover  table-responsive-sm">


                                        <TR>
                                            <TD>NISN</TD>
                                            <TD><?php echo $r['nisn']; ?></TD>
                                        </TR>
                                        <TR>
                                            <TD>Nama Lengkap</TD>
                                            <TD><?php echo $r['namapd']; ?></TD>
                                        </TR>
                                        <TR>
                                            <TD>Status Data</TD>
                                            <TD><?php $nilai = $r['status'];
                                                if ($nilai > 1) {
                                                    echo "<span class='badge bg-primary text-white'>Sudah Verifikasi</span>";
                                                } else {
                                                    echo "<span class='badge bg-danger text-white'>Belum Verifikasi</span>";
                                                }; ?></TD>
                                        </TR>
                                        <TD>Keterangan</TD>
                                        <TD> <?php $statusx = $r['status'];
                                                if ($statusx > 1) {
                                                    echo "Selamat,  Anda Sudah diterima sebagai Peserta Didik Baru SMK Wira Bhakti Denpasar.";
                                                } else {
                                                    echo "Formulir Pendaftaran sudah kami terima, lengkapi persyaratan dan serahkan kepada panitia PPDB untuk melakukan Daftar Ulang";
                                                }
                                                echo "</td>"; ?></TD>
                                        </TR>


                                    </table>

                                </div>
                            </div>

                        </div>

                <?php }
                                        } ?>


                <br><br><br><br><br><br><br><br>
                </div>
            </section><!-- End Portfolio Section -->

            </main><!-- End #main -->

            <!-- ======= Footer ======= -->
            <footer id="footer">

                <hr>


        </div>
    </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><?php
                                        // Load file koneksi.php
                                        include "koneksi.php";

                                        $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
                                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                                        while ($data = mysqli_fetch_array($sql)) {


                                            echo "<span>" . $data['nama'] . " </span>";
                                        } ?> </strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/butterfly-free-bootstrap-theme/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
        window.print();
    </script>

</body>

</html>