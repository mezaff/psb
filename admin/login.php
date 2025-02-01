<?php
include '../koneksi.php';
session_start();

$login = @$_POST['login'];
if (isset($login)) {
    $user = mysqli_escape_string($connect, $_POST['user']);
    $pass = mysqli_escape_string($connect, $_POST['pass']);

    $query = mysqli_query($connect, "SELECT * FROM admin WHERE user ='$user' AND pass ='$pass'");
    $num = mysqli_num_rows($query);
    $data = mysqli_fetch_array($query);
    if ($num >= 1) {
        $_SESSION['id_user'] = $data['id'];
        $_SESSION['user'] = $data['user'];
        $_SESSION['pass'] = $data['pass'];

        $_SESSION['status_login'] = "sudah_login";
        header('location:/santribaru/admin');
    } else {
        header("location:/santribaru/admin/login?id=Login Gagal!!!");
    }
}
?>

<!DOCTYPE html>
<html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/sneat/assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Admin | PSB Pondok Ngujur</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="gambar/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/sneat/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/sneat/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/sneat/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/sneat/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../assets/sneat/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../assets/sneat/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/sneat/assets/js/config.js"></script>
</head>

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="/santribaru/admin" class="app-brand-link gap-2">
                                <img src="../gambar/PSBONLINE.png" alt="logopsb" width="200">
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Selamat Datang Admin! 👋</h4>
                        <p class="mb-4">Silahkan login untuk melihat data pendaftaran.</p>

                        <form class="mb-3" action="" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Username</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="user"
                                    placeholder="Masukkan username anda"
                                    autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                    <!-- <a href="auth-forgot-password-basic.html">
                                        <small>Forgot Password?</small>
                                    </a> -->
                                </div>
                                <div class="input-group input-group-merge">
                                    <input
                                        type="password"
                                        class="form-control"
                                        name="pass"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="pass" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <!-- <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" />
                                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                                </div>
                            </div> -->
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" name="login" type="submit">Masuk</button>
                            </div>
                            <?php error_reporting(0);
                            $get = $_GET['id'];
                            echo " <b clas='text-danger'>$get</b> ";

                            ?>
                        </form>

                        <!-- <p class="text-center">
                            <span>New on our platform?</span>
                            <a href="auth-register-basic.html">
                                <span>Create an account</span>
                            </a>
                        </p> -->
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/sneat/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/sneat/assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/sneat/assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/sneat/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/sneat/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>