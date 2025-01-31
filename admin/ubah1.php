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
                                    <li class="breadcrumb-item active" aria-current="page"> Ubah Pengaturan Website</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <?php
                            // Load file koneksi.php
                            include "../koneksi.php";

                            // Ambil data NIS yang dikirim oleh index.php melalui URL
                            $id = $_GET['id'];

                            // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
                            $query = "SELECT * FROM admin WHERE id='" . $id . "'";
                            $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
                            $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
                            ?>
                            <form method="post" action="proses.php?id= <?php echo $id; ?>" enctype="multipart/form-data">
                                <div class="form-row">
                                    <label>Username</label>
                                    <div class="col-md-12 form-group">
                                        <input type="text" name="user" class="form-control" value="<?php echo $data['user']; ?>" autocomplete="off" required="">

                                    </div>
                                    <div class="form-row">
                                        <label>Password</label>
                                        <div class="col-md-12 form-group">
                                            <input type="text" name="pass" class="form-control" value="<?php echo $data['pass']; ?>" autocomplete="off" required="">


                                        </div>
                                        <div class="form-row">
                                            <label>Tahun Penerimaan Peserta Didik Baru</label>
                                            <div class="col-md-12 form-group">
                                                <input type="text" name="tahun" class="form-control" value="<?php echo $data['tahun']; ?>" autocomplete="off" required="">


                                            </div>
                                            <div class="form-row">
                                                <label>Nama Sekolah</label>
                                                <div class="col-md-12 form-group">
                                                    <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" autocomplete="off" required="">

                                                </div>

                                                <div class="form-row">
                                                    <label>Visi</label>
                                                    <div class="col-md-12 form-group">
                                                        <input type="text" name="visi" class="form-control" value="<?php echo $data['visi']; ?>" autocomplete="off" required="">

                                                    </div>
                                                    <div class="form-row">
                                                        <label>Misi</label>
                                                        <div class="col-md-12 form-group">
                                                            <input type="text" name="misi" class="form-control" value="<?php echo $data['misi']; ?>" autocomplete="off" required="">

                                                        </div>
                                                        <div class="form-row">
                                                            <label>Lokasi</label>
                                                            <div class="col-md-12 form-group">
                                                                <input type="text" name="lokasi" class="form-control" value="<?php echo $data['lokasi']; ?>" autocomplete="off" required="">

                                                            </div>
                                                            <div class="form-row">

                                                                <div class="col-md-12 form-group">
                                                                    <input type="text" name="embed" class="form-control" value="null" autocomplete="off" required="" hidden="">
                                                                    </p>
                                                                </div>
                                                                <div class="form-row">
                                                                    <label>Email</label>
                                                                    <div class="col-md-12 form-group">
                                                                        <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>" autocomplete="off" required="">

                                                                    </div>
                                                                    <div class="form-row">
                                                                        <label>WhatsApp</label>
                                                                        <div class="col-md-12 form-group">
                                                                            <input type="number" name="wa" class="form-control" value="<?php echo $data['wa']; ?>" autocomplete="off" required="">

                                                                        </div>
                                                                        <br>
                                                                        <button type="submit" name="submit" value="Simpan" class="btn btn-primary ">Ubah Data Sekolah</button>
                            </form>

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