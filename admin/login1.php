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
        header('location:index.php');
    } else {
        header("location:login.php?id=Login Gagal!!!");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin PPDB</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">


                    <a href="index.html"><?php
                                            // Load file koneksi.php
                                            include "../koneksi.php";

                                            $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
                                            $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                                            while ($data = mysqli_fetch_array($sql)) {


                                                echo "<h4> " . $data['nama'] . "</h4>";
                                            } ?></a>

                    <br>
                    <h7>Sig In</h7>
                    <form action="" method="POST">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="user" class="form-control form-control-xl" placeholder="Username" required="">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="pass" class="form-control form-control-xl" placeholder="Password" required="">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">Sign In</button>
                        <br>
                        <br>
                        <?php error_reporting(0);
                        $get = $_GET['id'];
                        echo " <b clas='text-danger'>$get</b>
                                 ";

                        ?>

                    </form>

                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>