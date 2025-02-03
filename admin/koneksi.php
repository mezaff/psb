<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    header("Location: /santribaru/akses");
    exit;
}


// HOSTING
$host = "localhost";
$username = "pondokng_psb";
$password = "f2yB{thXvzpM";
$database = "pondokng_psb";
$connect = mysqli_connect($host, $username, $password, $database);



// LOCAL
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "psb";
// $connect = mysqli_connect($host, $username, $password, $database);
