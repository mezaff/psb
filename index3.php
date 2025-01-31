<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PPTM PSB Online</title>
  <meta content="<?php
                  // Load file koneksi.php
                  include "koneksi.php";

                  $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
                  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                  while ($data = mysqli_fetch_array($sql)) {


                    echo "<p> " . $data['nama'] . "</p>";
                  } ?>" name="<?php
                              // Load file koneksi.php
                              include "koneksi.php";

                              $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
                              $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                              while ($data = mysqli_fetch_array($sql)) {


                                echo "<p> " . $data['nama'] . "</p>";
                              } ?>">
  <meta content="<?php
                  // Load file koneksi.php
                  include "koneksi.php";

                  $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
                  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                  while ($data = mysqli_fetch_array($sql)) {


                    echo "<p> " . $data['nama'] . "</p>";
                  } ?>" name="<?php
                              // Load file koneksi.php
                              include "koneksi.php";

                              $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
                              $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                              while ($data = mysqli_fetch_array($sql)) {


                                echo "<p> " . $data['nama'] . "</p>";
                              } ?>">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

      <a href="index.php" class="logo mr-auto">
        <?php
        include "koneksi.php";

        $query = "SELECT * FROM admin";
        $sql = mysqli_query($connect, $query);

        while ($data = mysqli_fetch_array($sql)) {


          echo "<h4> " . $data['nama'] . "</h4>";
        } ?>
      </a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Butterfly</a></h1> -->

      <nav class="nav-menu  d-none d-lg-block ">
        <ul>
          <li class="active"><a href="index.php">Beranda</a></li>
          <li><a href="#about">Visi Misi</a></li>
          <li><a href="#services">Fasilitas</a></li>
          <li><a href="syaratpendaftaran.php">Syarat Pendaftaran</a></li>
          <li><a href="cekdata.php">Check Data </a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>

      </nav><!-- .nav-menu -->

    </div>

  </header><!-- End Header -->
  <section id="barbar">

  </section>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center top-50">

    <div class="container">
      <div class="row">

        <div class="col-lg-6 pt-4 pt-lg-20 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <?php
          // Load file koneksi.php
          include "koneksi.php";

          $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
          $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

          while ($data = mysqli_fetch_array($sql)) {


            echo "<h1>SELAMAT DATANG DI PSB ONLINE " . $data['nama'] . "</h1>";
          } ?></h1>
          <?php
          // Load file koneksi.php
          include "koneksi.php";

          $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
          $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

          while ($data = mysqli_fetch_array($sql)) {


            echo "<h2>Kami Menerima Pendaftaran Peserta Didik Baru Tahun Ajaran  " . $data['tahun'] . " Dengan Mudah Cukup Dari Rumah </h2>";
          } ?></h2>
          <br>
          <div><a href="registrasi.php" class="btn btn-primary">DAFTAR SEKARANG</a> <a href="cekdata.php" class="btn btn-info">CHECK DATA </a> <br><br><br><br>
          </div>

        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img"><br>
          <img src="z.png" class="img-fluid" alt="" width="100%">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch">
            <a href="#" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <?php
            // Load file koneksi.php
            include "koneksi.php";

            $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
            $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

            while ($data = mysqli_fetch_array($sql)) {


              echo "<h3>VISI DAN MISI " . $data['nama'] . " </h3>";
            } ?>


            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Visi</a></h4>
              <?php
              // Load file koneksi.php
              include "koneksi.php";

              $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
              $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

              while ($data = mysqli_fetch_array($sql)) {


                echo "<p class='description'>" . $data['visi'] . " </p>";
              } ?>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Misi </a></h4>
              <?php
              // Load file koneksi.php
              include "koneksi.php";

              $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
              $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

              while ($data = mysqli_fetch_array($sql)) {


                echo "<p class='description'>" . $data['misi'] . " </p>";
              } ?>
            </div>


          </div>
        </div>

      </div>

      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container">

          <div class="section-title">
            <h2>FASILITAS</h2>
            <p></p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="las la-clipboard" style="color: #ff689b;"></i></div>
                <h4 class="title"><a href="">Ruang Kelas nyaman</a></h4>
                <p class="description"></p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="las la-hotel" style="color: #e9bf06;"></i></div>
                <h4 class="title"><a href="">LAB Hotel dan Restoran</a></h4>
                <p class="description"></p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
              <div class="icon-box">
                <div class="icon"><i class="las la-desktop" style="color: #3fcdc7;"></i></div>
                <h4 class="title"><a href="">LAB Komputer</a></h4>
                <p class="description"></p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
              <div class="icon-box">
                <div class="icon"><i class="las la-user" style="color:#41cf2e;"></i></div>
                <h4 class="title"><a href="">Aula</a></h4>
                <p class="description"></p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
              <div class="icon-box">
                <div class="icon"><i class="las la-wifi" style="color: #e9bf06;"></i></div>
                <h4 class="title"><a href="">Wifi Internet</a></h4>
                <p class="description"></p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
              <div class="icon-box">
                <div class="icon"><i class="las la-basketball-ball" style="color: #4680ff;"></i></div>
                <h4 class="title"><a href="">Lapangan Olahraga</a></h4>
                <p class="description"></p>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End Services Section -->



      <!-- ======= Kompetensi Keahlian Section ======= -->
      <section id="kompetensi" class="portfolio" hidden="">
        <div class="container">

          <div class="section-title">
            <h2>KOMPETENSI KEAHLIAN</h2>
            <p> SMK (Sekolah Menengah Kejuruan) merupakan sekolah merupakan sekolah keahlian, yang diharapkan untuk mencentak generasi muda yang memiliki skill atau keahlian yang siap untuk bekerja,adapun jurusan yang ada di SMK Wira Bhakti Denpasar antara lain :</p>
          </div>

          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Semua Jurusan</li>
                <li data-filter=".filter-akuntansi">Akuntansi Keuangan Lembaga </li>
                <li data-filter=".filter-multimedia">Komputer Multimedia</li>
                <li data-filter=".filter-perhotelan">Perhotelan</li>
                <li data-filter=".filter-tataboga">Tata Boga</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-akuntansi">
              <div class="portfolio-wrap">
                <img src="gambar/multimedia.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>AKUNTANSI KEUANGAN LEMBAGA</h4>
                  <p> ...</p>
                  <div class="portfolio-links">
                    <a href="gambar/multimedia.jpg" data-gall="portfolioGallery" class="venobox" title=" "><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-multimedia">
              <div class="portfolio-wrap">
                <img src="gambar/multimedia.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>KOMPUTER MULTIMEDIA</h4>
                  <p> ...</p>
                  <div class="portfolio-links">
                    <a href="gambar/multimedia.jpg" data-gall="portfolioGallery" class="venobox" title=" "><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-perhotelan">
              <div class="portfolio-wrap">
                <img src="gambar/multimedia.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>PERHOTELAN</h4>
                  <p> ...</p>
                  <div class="portfolio-links">
                    <a href="gambar/multimedia.jpg" data-gall="portfolioGallery" class="venobox" title=" "><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-tataboga">
              <div class="portfolio-wrap">
                <img src="gambar/multimedia.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>TATA BOGA </h4>
                  <p> ...</p>
                  <div class="portfolio-links">
                    <a href="gambar/multimedia.jpg" data-gall="portfolioGallery" class="venobox" title=" "><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>


      </section><!-- End Kompetensi Keahlian Section -->
      <!-- ======= Testimonials Section ======= -->







      <!-- ======= Ekstrakulikuler Section ======= -->
      <section id="extrakurikuler" class="portfolio" hidden="">
        <div class="container">

          <div class="section-title">
            <h2>EKSTRAKULIKULER</h2>
            <p> Memiliki Banyak Program Ekstrakulikuler Seru Yang Dapat Di Ikuti .</p>
          </div>

          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Semua Extra Kurikuler </li>
                <li data-filter=".filter-akuntansi">Akuntansi Keuangan Lembaga </li>
                <li data-filter=".filter-multimedia">Komputer Multimedia</li>
                <li data-filter=".filter-perhotelan">Perhotelan</li>
                <li data-filter=".filter-tataboga">Tata Boga</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-akuntansi">
              <div class="portfolio-wrap">
                <img src="gambar/multimedia.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>AKUNTANSI KEUANGAN LEMBAGA</h4>
                  <p> ...</p>
                  <div class="portfolio-links">
                    <a href="gambar/multimedia.jpg" data-gall="portfolioGallery" class="venobox" title=" "><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-multimedia">
              <div class="portfolio-wrap">
                <img src="gambar/multimedia.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>KOMPUTER MULTIMEDIA</h4>
                  <p> ...</p>
                  <div class="portfolio-links">
                    <a href="gambar/multimedia.jpg" data-gall="portfolioGallery" class="venobox" title=" "><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-perhotelan">
              <div class="portfolio-wrap">
                <img src="gambar/multimedia.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>PERHOTELAN</h4>
                  <p> ...</p>
                  <div class="portfolio-links">
                    <a href="gambar/multimedia.jpg" data-gall="portfolioGallery" class="venobox" title=" "><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-tataboga">
              <div class="portfolio-wrap">
                <img src="gambar/multimedia.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>TATA BOGA </h4>
                  <p> ...</p>
                  <div class="portfolio-links">
                    <a href="gambar/multimedia.jpg" data-gall="portfolioGallery" class="venobox" title=" "><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>


      </section><!-- End ekstrakurikuler Section -->
      <!-- ======= Testimonials Section ======= -->










      <!-- ======= Gallery Section ======= -->
      <section id="gallery" class="gallery" hidden="">
        <div class="container">

          <div class="section-title">
            <h2>Gallery Kegiatan</h2>
            <p>Dokumentasi Kegiatan </p>
          </div>

          <div class="row no-gutters">

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="gambar/33.jpeg" class="venobox" data-gall="gallery-item">
                  <img src="gambar/33.jpeg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="gambar/56.jpeg" class="venobox" data-gall="gallery-item">
                  <img src="gambar/56.jpeg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="gambar/longmarch pramukaMTs.jpeg" class="venobox" data-gall="gallery-item">
                  <img src="gambar/longmarch pramukaMTs.jpeg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="gambar/pramuka.jpeg" class="venobox" data-gall="gallery-item">
                  <img src="gambar/pramuka.jpeg" alt="" class="img-fluid">
                </a>
              </div>
            </div>


          </div>

        </div>
      </section><!-- End Gallery Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <hr>
        <div class="container">

          <div class="section-title">
            <h2>KONTAK</h2>
            <p>Informasi lebih lanjut hubungi kami.</p>
          </div>

          <div>

          </div>

          <div class="row mt-5">

            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="icofont-google-map"></i>
                  <h4>Lokasi:</h4>
                  <?php
                  // Load file koneksi.php
                  include "koneksi.php";

                  $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
                  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                  while ($data = mysqli_fetch_array($sql)) {


                    echo "<p>" . $data['lokasi'] . " </p>";
                  } ?>
                </div>

                <div class="email">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <?php
                  // Load file koneksi.php
                  include "koneksi.php";

                  $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
                  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                  while ($data = mysqli_fetch_array($sql)) {


                    echo "<p>" . $data['email'] . " </p>";
                  } ?>
                </div>

                <div class="phone">
                  <i class="icofont-phone"></i>
                  <h4>WhatsApp:</h4>
                  <?php
                  // Load file koneksi.php
                  include "koneksi.php";

                  $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
                  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                  while ($data = mysqli_fetch_array($sql)) {


                    echo "<p>" . $data['wa'] . " </p>";
                  } ?>
                </div>

              </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>

            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <hr>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><?php
                                  // Load file koneksi.php
                                  include "koneksi.php";

                                  $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
                                  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                                  while ($data = mysqli_fetch_array($sql)) {


                                    echo "<span>" . $data['nama'] . " </span>";
                                  } ?> </strong>. Developer Tata Kustara
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