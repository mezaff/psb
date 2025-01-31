<?php
require_once 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIM PPDB</title>
  <meta content="MTS Hidayatulmah Ummah Malahayu Merupakan Madrasah Unggulan Yang berlokasi di desa malahayu - banjarharjo" name="MTS Hidayatulmah">
  <meta content="MTS Hidayatulmah Ummah Malahayu Merupakan Madrasah Unggulan Yang berlokasi di desa malahayu - banjarharjo" name="MTS Hidayatulmah Malahayu">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Butterfly - v2.2.1
  * Template URL: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.php" class="logo mr-auto"><?php
                                                // Load file koneksi.php
                                                include "koneksi.php";

                                                $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
                                                $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                                                while ($data = mysqli_fetch_array($sql)) {


                                                  echo "<h4>" . $data['nama'] . " </h4>";
                                                } ?> </a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Butterfly</a></h1> -->

      <nav class="nav-menu  d-none d-lg-block ">
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="index.php">Visi & Misi</a></li>
          <li><a href="index.php">Fasilitas</a></li>
          <li><a href="syaratpendaftaran.php">Syarat Pendaftaran</a></li>
          <li><a href="index.php">Kontak</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <br><br><br><br><br><br>

      <div class="col-sm-12">
        <h1>Cari Data Pendafataran Calon Peserta Didik</h1>
        <p>Ketikan NISN Peserta Didik Yang Sudah Di Dafatarkan Untuk Melihat Status Pendaftaran</p>
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
          <tr>
            <th>NO</th>
            <th>NISN</th>
            <th>Nama Lengkap</th>
            <th>Status Data</th>
            <th>Keterangan </th>


          </tr>
          <tr>
            <th class="text-center">1</th>
            <th class="text-center"><?php echo $r['nisn']; ?></th>
            <th><?php echo $r['namapd']; ?></th>
            <th> <?php

                  $nilai = $r['status'];

                  if ($nilai > 1) {
                    echo "<span class='badge bg-primary text-white'>Sudah Verifikasi</span>";
                  } else {
                    echo "<span class='badge bg-danger text-white'>Belum Verifikasi</span>";
                  }; ?></th>


            <th>


              <?php

              $statusx = $r['status'];
              if ($statusx > 1) {
                echo "Selamat,  Anda Sudah diterima sebagai Peserta Didik Baru SMK Wira Bhakti Denpasar.";
              } else {
                echo "Formulir Pendaftaran sudah kami terima, lengkapi persyaratan dan serahkan kepada panitia PPDB untuk melakukan Daftar Ulang";
              }
              echo "</td>"; ?></th>


          </tr>

        </table>

        <br> <a href="syaratpendaftaran.php" class="btn btn-primary">SYARAT PENDAFTARAN</a> <a href="index.php" class="btn  btn-danger ">KEMBALI</a>
      </div> <br><br>
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



</body>

</html>