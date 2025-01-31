<?php
include("../koneksi.php");
session_start();
ob_start();
if (empty($_SESSION['status_login'])) {
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="logomts.png" type="image/x-icon">
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
                <center><a href="index.html"> <?php
  // Load file koneksi.php
  include "../koneksi.php";
  
  $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){        
      
    
     echo "<h5>Panel Admin <br>".$data['nama']."</h5>";
     }?>
         
     </a></center>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Pilih Menu</li>

                        <li class="sidebar-item active ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                          <li class="sidebar-item  ">
                            <a href="datasiswa.php" class='sidebar-link'>
                                <i class="bi  bi-stack"></i>
                                <span>Manajemen Verifikasi</span>
                            </a>
                        </li>
						<li class="sidebar-item  ">
                            <a href="datasiswa2.php" class='sidebar-link'>
                                <i class="bi  bi-stack"></i>
                                <span>Manajemen Data</span>
                            </a>
                        </li>
                       <li class="sidebar-item  ">
                            <a href="print.php" class='sidebar-link'>
                                <i class="bi  bi-printer"></i>
                                <span>Print Formulir</span>
                            </a>
                        </li>
                        
                         <li class="sidebar-item  ">
                            <a href="logout.php" class='sidebar-link'>
                                <i class="bi bi-toggle2-off"></i>
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
                <h3>Halo! Admin</h3>
                <h5>Selamat Datang di Dashboard</h5>
                <br>
                <a href="pengaturan.php" class="btn btn-danger">Pengaturan Website</a>
                 <a href="../index.php" class="btn btn-primary">Lihat Fornt End</a>
            </div>
            
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-lg-4 col-md-12">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="stats-icon purple">
                                                    <i class="bi bi-people-fill"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold"><b>TOTAL CALON SISWA BARU</b></h6>
                                                <h6 class="font-extrabold mb-0"><?php 
include '../koneksi.php';
                                                 $idkunci=2;
   $query3=$connect->query("SELECT * FROM siswa WHERE status = '$idkunci' ORDER BY id DESC");
     $jml3 =mysqli_num_rows($query3);

      $idkunci=1;
   $query4=$connect->query("SELECT * FROM siswa WHERE status = '$idkunci' ORDER BY id DESC");
     $jml4 =mysqli_num_rows($query4);

     $jawab = $jml3+$jml4;
     echo "$jawab";
?>
    

</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                               <div class="col-12 col-lg-4 col-md-4">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="stats-icon purple">
                                                    <i class="bi bi-grid-fill"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">SUDAH DAFTAR ULANG</h6>
                                                <h6 class="font-extrabold mb-0"><?php 
include '../koneksi.php';
                                                 $idkunci=2;
   $query1=$connect->query("SELECT * FROM siswa WHERE status = '$idkunci' ORDER BY id DESC");
     $jml =mysqli_num_rows($query1);


     echo "$jml";  
?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                               <div class="col-12 col-lg-4 col-md-4">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="stats-icon purple">
                                                    <i class="bi bi-collection-fill"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">BELUM DAFTAR ULANG</h6>
                                                <h6 class="font-extrabold mb-0"><?php 
include '../koneksi.php';
                                                 $idkunci=1;
   $query2=$connect->query("SELECT * FROM siswa WHERE status = '$idkunci' ORDER BY id DESC");
     $jml2 =mysqli_num_rows($query2);
     echo "$jml2";
?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                            </div>
                                                  
                                                  </div>
                      
                </section>
            </div>
<br>
<br>
<br>
<br>
<br>
<br>


        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>