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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
          <li class="active"><a href="index.php">Beranda</a></li>
          <li><a href="index.php">Visi & Misi</a></li>
          <li><a href="index.php">Fasilitas</a></li>
          <li><a href="syaratpendaftaran.php">Syarat Pendaftaran</a></li>


          <li><a href="cekdata.php">Check Data </a></li>
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
        <div class="alert alert-danger" role="alert">
          <h1>FORUMLIR PENDAFTARAN PPDB ONLINE</h1>
          <?php
          // Load file koneksi.php
          include "koneksi.php";

          $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
          $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

          while ($data = mysqli_fetch_array($sql)) {


            echo "<p>" . $data['nama'] . " Tahun Ajaran " . $data['tahun'] . " </p>";
          } ?>

        </div><br><br>
        <hr>
        <div class="alert alert-success" role="alert">
          <p>FORMULIR JENIS PENDAFTARAN </p>
        </div><br>
        <form method="post" action="prosespd.php" enctype="multipart/form-data">
          <div class="mb-3">
            <label><b>Jenis Pendaftaran</b></label>
            <select name="jenispd" id="jenispd" class="form-control" required="">
              <option value="" disabled selected>Pilih Jenis Pendaftaran</option>
              <option value="Peserta Didik Baru">Peserta Didik Baru</option>
              <option value="Peserta Didik Pindahan">Peserta Didik Pindahan</option>

            </select>
            <br>
            <label> <b>Jurusan yang dipilih</b></label>
            <select name="jurusan" id="jurusan" class="form-control" required="">
              <option value="" disabled selected>Pilih Kompetensi Keahlian</option>
              <option value="Akuntansi dan Keuangan Lembaga"> Akuntansi dan Keuangan Lembaga</option>
              <option value="Multimedia"> Komputer Multimedia</option>
              <option value="Perhotelan"> Perhotelan</option>
              <option value="Tata Boga"> Tata Boga</option>
            </select>

            <br>
            <hr>
            <div class="alert alert-primary" role="alert">
              <p>FORMULIR DATA PRIBADI PESERTA DIDIK</p>
            </div><br>

            <div class="form-group">
              <label>NIK (Nomor Induk Kependudukan)</label>
              <input type="number" class="form-control" required="" name="nik" placeholder="NIK dapat dilihat pada Kartu Keluarga (KK) " data-rule="minlen:4" data-msg="Masukan NIK Dengan Benar" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label>NISN</label>
              <input type="number" class="form-control" required=" " name="nisn" placeholder="Masukan NISN " data-rule="minlen:4" data-msg="Masukan NISN Dengan Benar" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" autocomplete="" class="form-control" required="" name="namapd" placeholder="Nama Lengkap Calon Peserta didik" data-rule="minlen:2" data-msg="Nama Tidak Valid" />
              <div class="validate"></div>
            </div>
            <label>Jenis Kelamin</label>
            <select name="jk" id="jk" class="form-control" required="">
              <option value="" disabled selected>Pilih Jenis Kelamin</option>
              <option value="Laki - Laki">Laki - Laki</option>
              <option value="Perempuan">Perempuan</option>

            </select>
            <br>
            <div class="form-row">

              <div class="col-md-6 form-group">
                <label>Tempat Lahir</label>
                <input type="text" autocomplete="" name="tempatlahirpd" class="form-control" required="" value=" " placeholder="Tempat Lahir" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" required="" name="tanggallahirpd" placeholder="Tanggal Lahir" />
                <div class="validate"></div>
              </div>
            </div> <label>Agama</label>
            <select name="agama" id="agama" class="form-control" required="">
              <option value="" disabled selected>Pilih Agama</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Hindu">Hindu</option>
              <option value="bundha">bundha</option>
              <option value="Konghucu">Konghucu</option>

            </select>
            <br>

            <div class="form-group">
              <label>Nomor Telpon / WhatsApp Aktif Peserta Didik</label>
              <input type="number" class="form-control" name="wapd" placeholder="No Telp/ WA" data-rule="minlen:11" data-msg="Minimal 11 Angka" />
              <div class="validate">(Kosongkan Jika belum Ada atau bisa menggunakan nomor telp keluarga terdekat)</div>
            </div>
            <br>
            <div class="form-group">
              <label>Alamat Lengkap</label>
              <textarea class="form-control" required="" name="alamatpd" rows="2" data-rule="required" data-msg="Alamat Tidak Valid" placeholder="Tulis Alamat Lengkap Misal: jL.Cempaka No. 6, Kecamatan Denpasar Utara, Kota Denpasar, Bali "></textarea>
              <div class="validate"></div>
            </div>
            <div class="form-row">

              <div class="col-md-6 form-group">
                <label>Nama Kelurahan / Desa</label>
                <input type="text" autocomplete="" name="desapd" class="form-control" required="" placeholder="Nama Kelurahan / Desa" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <label>Nama Kecamatan</label>
                <input type="text" autocomplete="" class="form-control" required="" name="kecamatanpd" placeholder="Nama  Kecamatan" />
                <div class="validate"></div>
              </div>
            </div>
            <br><br>
            <div class="alert alert-primary" role="alert">
              <p> FORMULIR DATA ASAL SEKOLAH</p>
            </div><br>
            <div class="form-row">
              <label>Asal Sekolah</label>
              <div class="col-md-12 form-group">
                <input type="text" autocomplete="" name="asalsekolah" class="form-control" required="" value="" placeholder="Asal Sekolah" />
                <div class="validate"></div>
                <br>
                <div class="alert alert-primary" role="alert">
                  <p>FORMULIR DATA ORANG TUA</p>
                </div><br>
                <div class="form-row">
                  <label>Nama Lengkap Ayah</label>
                  <div class="col-md-12 form-group">
                    <input type="text" autocomplete="" name="namaayah" class="form-control" required="" placeholder="Nama Ayah" />
                    <div class="validate"></div>
                    <br>
                    <div class="form-row">
                      <div class="col-md-6 form-group">
                        <label>Tempat Lahir</label>

                        <input type="text" autocomplete="" name="tempatlahirayah" class="form-control" required="" id="name" value=" " placeholder="Tempat Lahir Ayah" />
                        <div class="validate"></div>
                      </div>
                      <div class="col-md-6 form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" required="" name="tanggallahirayah" placeholder="Tanggal Lahir Ayah" />
                        <div class="validate"></div>
                      </div>
                    </div>

                    <label>Pendidikan Terakhir Ayah</label>
                    <select name="pendidikanayah" id="pendidikanayah" class="form-control" required="">
                      <option value="" disabled selected> Pilih Pendidikan Terakhir Ayah</option>
                      <option value="Tidak Sekolah">Tidak Sekolah</option>
                      <option value="SD/MI">SD/MI</option>
                      <option value="SMP/MTs">SMP/ MTs</option>
                      <option value="SMA/MA">SMA / MA</option>
                      <option value="  D1/D2/D3"> D1/D2/D3</option>

                      <option value="S1">S1</option>
                      <option value="S2">S2</option>
                      <option value="S3">S3</option>

                    </select>
                    <br>
                    <div class="form-row">
                      <label>Pekerjaan Ayah</label>

                      <div class="col-md-12 form-group">
                        <input type="text" autocomplete="" name="pekerjaanayah" class="form-control" required="" value="" placeholder="Pekerjaan Ayah " />
                        <div class="validate"></div>
                        <br>
                        <label>Penghasilan Ayah </label>

                        <select name="penghasilanayah" id="penghasilanayah" class="form-control" required="">
                          <option value="" disabled selected> Pilih Penghasilan Ayah</option>
                          <option value="< 500.000"> 0 - < 500.000</option>
                          <option value="> 500.000 - 1000.000">> 500.000 - 1000.000</option>
                          <option value="> 1000.000 - 1000.000">> 1000.000 - 2000.000</option>
                          <option value="> 2000.000 - 5000.000">> 2000.000 - 5000.000</option>
                          <option value="> 5000.000">> 5000.000</option>

                        </select>
                        <br>
                        <div class="form-row">
                          <br>

                          <div class="form-row">
                            <label>Nama Lengkap Ibu</label>
                            <div class="col-md-12 form-group">
                              <input type="text" autocomplete="" name="namaibu" class="form-control" required="" placeholder="Nama ibu" />
                              <div class="validate"></div>
                              <br>
                              <div class="form-row">


                                <div class="col-md-6 form-group">
                                  <label>Tempat Lahir Ibu</label>
                                  <input type="text" autocomplete="" name="tempatlahiribu" class="form-control" required="" value="" placeholder="Tempat Lahir ibu" />
                                  <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                  <label>Tanggal Lahir Ibu</label>
                                  <input type="date" class="form-control" required="" name="tanggallahiribu" placeholder="Tanggal Lahir ibu" />
                                  <div class="validate"></div>
                                </div>
                              </div>
                              <label>Pendidikan Terakhir Ibu</label>
                              <select name="pendidikanibu" id="pendidikanibu" class="form-control" required="">
                                <option value="" disabled selected> Pilih Pendidikan Terakhir ibu</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="SD/MI">SD/MI</option>
                                <option value="SMP/MTs">SMP/ MTs</option>
                                <option value="SMA/MA">SMA / MA</option>
                                <option value="  D1/D2/D3"> D1/D2/D3</option>

                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>

                              </select>
                              <br>
                              <div class="form-row">
                                <label> Pekerjaan Ibu</label>
                                <div class="col-md-12 form-group">
                                  <input type="text" autocomplete="" name="pekerjaanibu" class="form-control" required="" value="" placeholder="Pekerjaan ibu " />
                                  <div class="validate"></div>
                                  <br>

                                  <label><label>Penghasilan Ibu</label></label>
                                  <select name="penghasilanibu" id="penghasilanibu" class="form-control" required="">
                                    <option value="" disabled selected>Pilih Penghasilan ibu</option>
                                    <option value="< 500.000"> 0 - < 500.000</option>
                                    <option value="> 500.000 - 1000.000">> 500.000 - 1000.000</option>
                                    <option value="> 1000.000 - 1000.000">> 1000.000 - 2000.000</option>
                                    <option value="> 2000.000 - 5000.000">> 2000.000 - 5000.000</option>
                                    <option value="> 5000.000">> 5000.000</option>

                                  </select>
                                  <br>
                                  <br>
                                  <div class="form-row">
                                    <label>Nomor Telp Orang Tua/Wali Murid</label>
                                    <div class="col-md-12 form-group">
                                      <input type="number" name="wawali" class="form-control" required="" placeholder="Nomor Telp/ WhatsApp" />
                                      <div class="validate"></div>
                                      <br>
                                      <div class="alert alert-primary" role="alert">
                                        <br>
                                        <p>FORMULIR DATA PENDUKUNG LAINNYA</p>
                                      </div><br>
                                      <div class="form-row">
                                        <label>Prestasi Peserta Didik</label>
                                        <div class="col-md-12 form-group">
                                          <input type="text" autocomplete="" name="prestasi" class="form-control" required="" placeholder="Prestasi Yang Pernah di Raih" />
                                          <div class="validate">Isi dengan tanda (-) strip jika tidak ada</div>
                                          <br>



                                          <b>KARTU JAMINAN SOSIAL YANG DIMILIKI
                                          </b>
                                          <div class="form-row">

                                            <div class="col-md-4 form-group">
                                              <label>Memiliki Kartu Indonesia Pintar (KIP)</label>
                                              <select name="jaminan" id="jaminan" class="form-control" required="">
                                                <option value="" disabled selected>Pilih Status Bantuan</option>
                                                <option value="Tidak Mempunyai">Tidak Mempunyai</option>
                                                <option value=" Mempunyai"> Mempunyai</option>
                                              </select>

                                            </div>
                                            <div class="col-md-4 form-group">
                                              <label>Kartu Indonesia Sehat (KIS)</label>
                                              <select name="nomorbantuan" id="nomorbantuan" class="form-control" required="">
                                                <option value="" disabled selected>Pilih Status Bantuan</option>
                                                <option value="Tidak Mempunyai">Tidak Mempunyai</option>
                                                <option value=" Mempunyai"> Mempunyai</option>
                                              </select>

                                            </div>
                                            <div class="col-md-4 form-group">
                                              <label>Kartu Keluarga Sejahtera (KKS)</label>
                                              <select name="pkh" id="pkh" class="form-control" required="">
                                                <option value="" disabled selected>Pilih Status Bantuan</option>
                                                <option value="Tidak Mempunyai">Tidak Mempunyai</option>
                                                <option value=" Mempunyai"> Mempunyai</option>
                                              </select>

                                            </div>
                                          </div>

                                          <div class="form-row">
                                            <label>NOMOR KIP/KIS/KKS</label>
                                            <div class="col-md-12 form-group">

                                              <textarea class="form-control" name="bantuan" rows="2" placeholder="Ketikan Nomor KIP/KIS/KKS Jika ada"></textarea>
                                              <div class="validate">Isi dengan tanda (-) strip jika tidak ada</div>
                                            </div>
                                            <br>
                                          </div>
                                          <button type="submit" class="btn  btn-primary ">KIRIM FORMULIR</button> <a href="index.php" class="btn  btn-danger ">Kembali</a>
                                        </div>
        </form>

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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>