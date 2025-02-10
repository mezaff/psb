<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak Formulir | PSB Pondok Ngujur</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

  <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="icon" type="image/x-icon" href="gambar/favicon.ico" />

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

</head>


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
            <form action="" method="post" role="form">
              <div class="form-row">
                <div class="col-md-9 form-group">
                  <input type="number" name="nt" class="form-control" id="nt" value="" placeholder="Ketikan NISN siswa yang ingin di print.... " autocomplete="off" / required="">
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">CETAK</button>
                  <a href="/santribaru/admin" class="btn btn-warning">KEMBALI</a>
                </div>
            </form>
            <br>

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
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover  table-responsive-sm">
                    <center>
                      <div class="kop-surat">
                        <img src="../gambar/kop.png" alt="Kop Surat" width="100%">
                      </div>
                      <b><br>FORMULIR PENERIMAAN SANTRI BARU</br>
                        PP TARBIYATUL MUTATHOWI'IN TAHUN PELAJARAN 2025 / 2026</b>
                    </center>
                    <td>Status Pendaftaran</td>
                    <td><?php $nilai = $r['status'];
                        if ($nilai > 1) {
                          echo "<span class='badge bg-primary text-white'>Sudah Verifikasi</span>";
                        } else {
                          echo "<span class='badge bg-danger text-white'>Belum Verifikasi</span>";
                        }; ?></td>
                    </tr>
                    <tr>
                    <tr>
                      <td>Jenjang Pendidikan</td>
                      <td><?php echo $r['jenjang']; ?></td>
                    </tr>
                    <tr>
                      <td>NISN</td>
                      <td><?php echo $r['nisn']; ?></td>
                    </tr>
                    <tr>
                      <td>NIK</td>
                      <td><?php echo $r['nik']; ?></td>
                    </tr>
                    <tr>
                      <td><b>NAMA LENGKAP SANTRI<b></td>
                      <td><?php echo $r['namapd']; ?></td>
                    </tr>
                    <tr>
                    <tr>
                      <td>Jenis Kelamin</td>
                      <td><?php echo $r['jk']; ?></td>
                    </tr>
                    <tr>
                      <td>Tempat Tanggal Lahir </td>
                      <td><?php echo $r['tempatlahirpd']; ?> , <?php echo $r['tanggallahirpd']; ?></td>
                    </tr>
                    <td>Alamat</td>
                    <td><?php echo $r['alamatpd']; ?></td>
                    </tr>
                    </tr>
                    <td>Jarak Rumah ke Lembaga</td>
                    <td><?php echo $r['jarak']; ?></td>
                    </tr>
                    </tr>
                    <td>Transportasi</td>
                    <td><?php echo $r['transportasi']; ?></td>
                    </tr>
                    </tr>
                    <td>Waktu Tempuh</td>
                    <td><?php echo $r['waktu']; ?></td>
                    </tr>
                    <tr>
                      <td>Asal Sekolah</td>
                      <td><?php echo $r['asalsekolah']; ?></td>
                    </tr>
                    <td><b>NAMA LENGKAP AYAH</b></td>
                    <td><?php echo $r['namaayah']; ?></td>
                    </tr>
                    <tr>
                      <td>Nomor Kartu Keluarga</td>
                      <td><?php echo $r['kk']; ?></td>
                    </tr>
                    <tr>
                      <td>NIK Ayah</td>
                      <td><?php echo $r['nikayah']; ?></td>
                    </tr>
                    <tr>
                      <td>Tempat Tanggal Lahir Ayah</td>
                      <td><?php echo $r['tempatlahirayah']; ?> , <?php echo $r['tanggallahirayah']; ?></td>
                    </tr>
                    <tr>
                      <td>Pendidikan Terakhir Ayah</td>
                      <td><?php echo $r['pendidikanayah']; ?></td>
                    </tr>
                    <tr>
                      <td>Pekerjaan Ayah</td>
                      <td><?php echo $r['pekerjaanayah']; ?></td>
                    </tr>
                    <tr>
                      <td>Penghasilan Ayah</td>
                      <td><?php echo $r['penghasilanayah']; ?></td>
                    </tr>
                    <tr>
                      <td><b>NAMA LENGKAP IBU</b></td>
                      <td><?php echo $r['namaibu']; ?></td>
                    </tr>
                    <tr>
                      <td>NIK Ibu</td>
                      <td><?php echo $r['nikibu']; ?></td>
                    </tr>
                    </tr>
                    <td>Tempat Tanggal Lahir Ibu</td>
                    <td><?php echo $r['tempatlahirayah']; ?> , <?php echo $r['tanggallahiribu']; ?></td>
                    </tr>
                    <tr>
                      <td>Pendidikan Terakhir Ibu</td>
                      <td><?php echo $r['pendidikanibu']; ?></td>
                    </tr>
                    <tr>
                      <td>Pekerjaan Ibu</td>
                      <td><?php echo $r['pekerjaanibu']; ?></td>
                    </tr>
                    <td>Penghasilan Ibu</td>
                    <td><?php echo $r['penghasilanibu']; ?></td>
                    </tr>
                    <td>Nomor Telp Orang Tua/Wali Santri</td>
                    <td><?php echo $r['wawali']; ?></td>
                    </tr>
                    <br><br><br><br><br>
                    <td><b>Minat & Bakat<b></td>
                    <td><?php echo $r['bantuan']; ?></td>
                    </tr>
                    <td>Tujuan & Harapan</td>
                    <td><?php echo $r['prestasi']; ?></td>
                    </tr>
                    <td>Informasi Tentang PonPes</td>
                    <td><?php echo $r['nomorbantuan']; ?></td>
                    </tr>
                  </table>
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover  table-responsive-sm">
                      <b> CHECK LIST BERKAS YANG SUDAH DIKUMPULKAN <b>
                          <small>
                            <br>
                            <td>NO</td>
                            <td>
                              <center>NAMA BERKAS PERSYARATAN DAFTAR ULANG YANG DIKUMPULKAN</center>
                            </td>
                            <td>
                              <center>CHECK LIST / KETERANGAN</center>
                            </td>
                            </tr>

                            <td>1</td>
                            <td> Foto Copy Kartu Keluarga (KK)</td>
                            <td> </td>
                            </tr>
                            <td>2</td>
                            <td> Foto Copy KTP Orang Tua</td>
                            <td> </td>
                            </tr>
                            <td>3</td>
                            <td> Foto Copy Akta Kelahiran</td>
                            <td> </td>
                            </tr>
                            <td>4</td>
                            <td>Pas Photo berwarna 3 x4 (3 lembar)</td>
                            <td> </td>
                            </tr>
                            <td>5</td>
                            <td>Materai Rp. 10.000 (1 pcs)</td>
                            <td> </td>
                            </tr>
                            <td>6</td>
                            <td>Membayar biaya Pendaftaran Rp. 1.000.000</td>
                            <td> </td>
                            </tr>
                            </tr>
                            <td>7</td>
                            <td>Foto Copy Ijasah ( Bisa Menyusul)</td>
                            <td> </td>
                            </tr>
                    </table>
                    </small>
                    <div class="row mt-5">
                      <div class="col-md-6 text-center">
                        <p>Panitia PSB</p>
                        <br><br><br>
                        <p class="ttd"></p>
                      </div>
                      <div class="col-md-6 text-center">
                        <p>Orang Tua/Wali</p>
                        <br><br><br>
                        <p class="ttd"></p>
                      </div>
                    </div>

                <?php }
            } ?>


                  </div>
                </div>

    </section><!-- End Portfolio Section -->

    </main><!-- End #main -->



    <script>
      window.print();
    </script>

    </body>

</html>