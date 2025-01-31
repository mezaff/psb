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
                                                } ?></a></center>
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
                                <span>Manajemen Data</span>
                            </a>
                        </li>



                        <li class="sidebar-item  ">
                            <a href="logout.php" class='sidebar-link'>
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
                            <h3>PENGATURAN WEBSITE</h3>
                            <p class="text-subtitle text-muted">Ubah Pengaturan Website Melalui Panel Admin</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pengaturan Website</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Pengaturan Profil Sekolah
                            <br>
                            <br>

                        </div>
                        <div class="card-body">
                            <table class="table table-striped-responsive" id="table1">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Aksi</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Tahun Penerimaan Ajaran Baru</th>

                                        <th>Nama Sekolah</th>
                                        <th>VISI</th>
                                        <th>MISI</th>

                                        <th>Lokasi Sekolah</th>

                                        <th>Email</th>
                                        <th>Kontak WhatsApp</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    error_reporting(0);
                                    include "../koneksi.php";
                                    $no = 1;
                                    $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
                                    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query


                                    while ($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
                                        echo "<tr>";
                                        echo "<td>" . $no++ . "</td>";
                                        echo "<td><a class='btn btn-primary' href='ubah.php?id=" . $data['id'] . "' role='button' >Ubah Data </a></td>";
                                        echo "<td>" . $data['user'] . "</td>";
                                        echo "<td>" . $data['pass'] . "</td>";
                                        echo "<td>" . $data['tahun'] . "</td>";
                                        echo "<td>" . $data['nama'] . "</td>";
                                        echo "<td>" . $data['visi'] . "</td>";
                                        echo "<td>" . $data['misi'] . "</td>";
                                        echo "<td>" . $data['lokasi'] . "</td>";

                                        echo "<td>" . $data['email'] . "</td>";
                                        echo "<td>" . $data['wa'] . "</td>";

                                        echo "</td>";






                                        echo "</tr>";
                                    }
                                    ?>


                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>


            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="assets/js/main.js"></script>
</body>

</html>