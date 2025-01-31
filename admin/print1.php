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


                                     <?php  
                                      error_reporting(0);
            include "../koneksi.php";

  
  $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){        
      
    
     }?> </a>
      
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
            <form action="" method="post" role="form" >
              <div class="form-row">
                <div class="col-md-9 form-group">
                  <input type="number" name="nt" class="form-control" id="nt" placeholder="Ketikan NISN siswa yang ingin di print.... " autocomplete="off" / required="" >
                </div>
                    <div class="text-center"><button type="submit" name="submit"  class="btn btn-primary ">PRINT</button></div>
            </form>
<br>

<?php
if(!ISSET($_POST['submit'])){

$sql = "SELECT * FROM siswa";

$query = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($query)){

?>

<?php } } ?>

<?php if (ISSET($_POST['submit'])){
 
$cari =mysqli_escape_string($connect,$_POST['nt']);
   $query1=$connect->query("SELECT * FROM siswa WHERE nisn LIKE '$cari'");
$ntt=$_POST['nt'];
           $jml =mysqli_num_rows($query1);
           $x=$jml;

if ($x<1) {
echo "<center><br><div class='col-sm'><div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Maaf! </strong> Hasil Pencarian NISN $ntt Tidak Ditemukan
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div></div></center>";
}else {
  echo "</div>";
 echo "<center><div class='col-sm'><div class='alert alert-primary alert-dismissible fade show' role='alert'>Pencarian NISN $ntt berhasil ditemukan!</div></center>";
 echo"<br>";
}
 $query2 = "SELECT * FROM siswa WHERE nisn LIKE '$cari'";
 $sql = mysqli_query($connect, $query2);
 while ($r = mysqli_fetch_array($sql)){
   ?>
    <div class="card-body">
              <table id="example1" class="table table-bordered table-hover  table-responsive-sm">
<center>
<b><br>FORMULIR PENDAFTRAN PESERTA DIDIK BARU</br>
SMK WIRA BHAKTI DENPASAR TAHUN PELAJARAN 2022 / 2023</b>
</center>
<br>
<TD>Status Data</TD>
<TD><?php $nilai =$r['status']; if ($nilai>1) { echo "<span class='badge bg-primary text-white'>Sudah Verifikasi</span>";}else {echo "<span class='badge bg-danger text-white'>Belum Verifikasi</span>";}; ?></TD>
</TR>
<TR>
<TR>
<TD>Kompetensi Keahlian yang dipilih</TD>
<TD><?php echo $r['gelombang']; ?></TD>
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
<TD><b>NAMA LENGKAP SISWA<b></TD>
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
<TR>
<TD>Agama</TD>
<TD><?php echo $r['agama']; ?></TD>
</TR>
<TR>
<TD>Nomor Telpon / WhatsApp</TD>
<TD><?php echo $r['wapd']; ?></TD>
</TR>
<TR>
<TD>alamat</TD>
<TD><?php echo $r['alamatpd']; ?></TD>
</TR>
<TR>
<TD>asal sekolah</TD>
<TD><?php echo $r['asalsekolah']; ?></TD>
</TR>

<TD><b>NAMA LENGKAP AYAH</b></TD>
<TD><?php echo $r['namaayah']; ?></TD>
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
<TD>Penghasilan Ayah</TD>
<TD><?php echo $r['penghasilanayah']; ?></TD>
</TR>
<TD><b>NAMA LENGKAP IBU</b</TD>
<TD><?php echo $r['namaibu']; ?></TD>
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
<TD>Nomor Telp Orang Tua/Wali Murid</TD>
<TD><?php echo $r['wawali']; ?></TD>
</TR>

<TD><b>PRESTASI PESERTA DIDIK<b></TD>
<TD><?php echo $r['prestasi']; ?></TD>
</TR>
<TD>Memiliki Kartu Indonesia Pintar (KIP)</TD>
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
	
</div>

 <div class="card-body">
              <table id="example1" class="table table-bordered table-hover  table-responsive-sm">
<b> CHECK LIST BERKAS YANG SUDAH DIKUMPULKAN <b>
<small>
<br>
<TD>NO</TD>
<TD><center>NAMA BERKAS PERSYARATAN DAFTAR ULANG YANG DIKUMPULKAN</center></TD>
<TD><center>CHECK LIST / KETERANGAN</center></TD>
</TR>

<TD>1</TD>
<TD> Foto Copy Kartu Keluarga (KK)</TD>
<TD> </TD>
</TR>
<TD>2</TD>
<TD>Pas Photo berwarna 3 x4 = 6 lembar</TD>
<TD> </TD>
</TR>
<TD>3</TD>
<TD>Membayar biaya MPLS Rp. 300.000</TD>
<TD> </TD>
</TR>
<TD>4</TD>
<TD>Membayar biaya Seragam Sekolah Rp. 1.300.000</TD>
<TD> </TD>
</TR>
<TD>5</TD>
<TD>Foto Copy Ijasah SMP ( Bisa Menyusul)</TD>
<TD> </TD>
</TR>
</table>
</small>

 <?php }} ?>
 

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->



<script>
		window.print();
	</script>
	
</body>

</html>