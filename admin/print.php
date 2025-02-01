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
                  <input type="number" name="nt" class="form-control" id="nt" placeholder="Ketikan NISN siswa yang ingin di print.... " autocomplete="off" / required="">
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary ">CETAK</button>
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
                    <br>
                    <TD>Status Pendaftaran</TD>
                    <TD><?php $nilai = $r['status'];
                        if ($nilai > 1) {
                          echo "<span class='badge bg-primary text-white'>Sudah Verifikasi</span>";
                        } else {
                          echo "<span class='badge bg-danger text-white'>Belum Verifikasi</span>";
                        }; ?></TD>
                    </TR>
                    <TR>
                    <TR>
                      <TD>Jenjang Pendidikan</TD>
                      <TD><?php echo $r['jenjang']; ?></TD>
                    </TR>
                    <TR>
                      <TD>NISN</TD>
                      <TD><?php echo $r['nisn']; ?></TD>
                    </TR>
                    <TR>
                      <TD>NIK</TD>
                      <TD><?php echo $r['nik']; ?></TD>
                    </TR>
                    <TR>
                      <TD><b>NAMA LENGKAP SANTRI<b></TD>
                      <TD><?php echo $r['namapd']; ?></TD>
                    </TR>
                    <TR>
                    <TR>
                      <TD>Jenis Kelamin</TD>
                      <TD><?php echo $r['jk']; ?></TD>
                    </TR>
                    <TR>
                      <TD>Tempat Tanggal Lahir </TD>
                      <TD><?php echo $r['tempatlahirpd']; ?> , <?php echo $r['tanggallahirpd']; ?></TD>
                    </TR>
                    <TD>Alamat</TD>
                    <TD><?php echo $r['alamatpd']; ?></TD>
                    </TR>
                    </TR>
                    <TD>Jarak Rumah ke Lembaga</TD>
                    <TD><?php echo $r['jarak']; ?></TD>
                    </TR>
                    </TR>
                    <TD>Transportasi</TD>
                    <TD><?php echo $r['transportasi']; ?></TD>
                    </TR>
                    </TR>
                    <TD>Waktu Tempuh</TD>
                    <TD><?php echo $r['waktu']; ?></TD>
                    </TR>
                    <TR>
                      <TD>Asal Sekolah</TD>
                      <TD><?php echo $r['asalsekolah']; ?></TD>
                    </TR>
                    <TD><b>NAMA LENGKAP AYAH</b></TD>
                    <TD><?php echo $r['namaayah']; ?></TD>
                    </TR>
                    <TR>
                      <TD>Nomor Kartu Keluarga</TD>
                      <TD><?php echo $r['kk']; ?></TD>
                    </TR>
                    <TR>
                      <TD>NIK Ayah</TD>
                      <TD><?php echo $r['nikayah']; ?></TD>
                    </TR>
                    <TR>
                      <TD>Tempat Tanggal Lahir Ayah</TD>
                      <TD><?php echo $r['tempatlahirayah']; ?> , <?php echo $r['tanggallahirayah']; ?></TD>
                    </TR>
                    <TR>
                      <TD>Pendidikan Terakhir Ayah</TD>
                      <TD><?php echo $r['pendidikanayah']; ?></TD>
                    </TR>
                    <TR>
                      <TD>Pekerjaan Ayah</TD>
                      <TD><?php echo $r['pekerjaanayah']; ?></TD>
                    </TR>
                    <TR>
                      <TD>Penghasilan Ayah</TD>
                      <TD><?php echo $r['penghasilanayah']; ?></TD>
                    </TR>
                    <TR>
                      <TD><b>NAMA LENGKAP IBU</b></TD>
                      <TD><?php echo $r['namaibu']; ?></TD>
                    </TR>
                    <TR>
                      <TD>NIK Ibu</TD>
                      <TD><?php echo $r['nikibu']; ?></TD>
                    </TR>
                    </TR>
                    <TD>Tempat Tanggal Lahir Ibu</TD>
                    <TD><?php echo $r['tempatlahirayah']; ?> , <?php echo $r['tanggallahiribu']; ?></TD>
                    </TR>
                    <TR>
                      <TD>Pendidikan Terakhir Ibu</TD>
                      <TD><?php echo $r['pendidikanibu']; ?></TD>
                    </TR>
                    <TR>
                      <TD>Pekerjaan Ibu</TD>
                      <TD><?php echo $r['pekerjaanibu']; ?></TD>
                    </TR>
                    <TD>Penghasilan Ibu</TD>
                    <TD><?php echo $r['penghasilanibu']; ?></TD>
                    </TR>
                    <TD>Nomor Telp Orang Tua/Wali Santri</TD>
                    <TD><?php echo $r['wawali']; ?></TD>
                    </TR>

                    <TD><b>PRESTASI SANTRI<b></TD>
                    <TD><?php echo $r['prestasi']; ?></TD>
                    </TR>
                    <TD>Kartu Indonesia Pintar (KIP)</TD>
                    <TD><?php echo $r['jaminan']; ?></TD>
                    </TR>
                    <TD>Kartu Indonesia Sehat (KIS)</TD>
                    <TD><?php echo $r['nomorbantuan']; ?></TD>
                    </TR>
                    <TD>Kartu Keluarga Sejahtera (KKS)</TD>
                    <TD><?php echo $r['pkh']; ?></TD>
                    </TR>
                    <TD>Nomor KIP/KIS/KKS</TD>
                    <TD><?php echo $r['bantuan']; ?></TD>
                    </TR>
                  </table>

                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover  table-responsive-sm">
                      <b> CHECK LIST BERKAS YANG SUDAH DIKUMPULKAN <b>
                          <small>
                            <br>
                            <TD>NO</TD>
                            <TD>
                              <center>NAMA BERKAS PERSYARATAN DAFTAR ULANG YANG DIKUMPULKAN</center>
                            </TD>
                            <TD>
                              <center>CHECK LIST / KETERANGAN</center>
                            </TD>
                            </TR>

                            <TD>1</TD>
                            <TD> Foto Copy Kartu Keluarga (KK)</TD>
                            <TD> </TD>
                            </TR>
                            <TD>2</TD>
                            <TD> Foto Copy KTP Orang Tua</TD>
                            <TD> </TD>
                            </TR>
                            <TD>3</TD>
                            <TD> Foto Copy Akta Kelahiran</TD>
                            <TD> </TD>
                            </TR>
                            <TD>4</TD>
                            <TD>Pas Photo berwarna 3 x4 (3 lembar)</TD>
                            <TD> </TD>
                            </TR>
                            <TD>5</TD>
                            <TD>Materai Rp. 10.000 (1 pcs)</TD>
                            <TD> </TD>
                            </TR>
                            <TD>6</TD>
                            <TD>Membayar biaya Pendaftaran Rp. 1.000.000</TD>
                            <TD> </TD>
                            </TR>
                            </TR>
                            <TD>7</TD>
                            <TD>Foto Copy Ijasah ( Bisa Menyusul)</TD>
                            <TD> </TD>
                            </TR>
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