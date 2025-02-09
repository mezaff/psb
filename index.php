<?php
include "koneksi.php";

$query = "SELECT * FROM admin";
$sql = mysqli_query($connect, $query);

$data = mysqli_fetch_array($sql);
$wa = $data['wa'];
$email = $data['email'];

$phoneNumber = $wa;
?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide " dir="ltr" data-theme="theme-default"
    data-assets-path="assets/sneat_pro/assets/" data-template="front-pages" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Beranda | PSB Pondok Ngujur</title>


    <meta name="description"
        content="Daftar Sekarang! &amp; Jadilah Bagian dari Kami" />
    <meta name="keywords" content="psb, pondok ngujur, psb pondok ngujur, pendaftaran santri baru">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://pondokngujur.com/santribaru">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="gambar/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/fonts/iconify-icons.css" />
    <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/fonts/boxicons.css" />


    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/css/rtl/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/sneat_pro/assets/css/demo.css" />
    <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/css/pages/front-page.css" />
    <!-- Vendors CSS -->

    <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/libs/nouislider/nouislider.css" />
    <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="assets/sneat_pro/assets/vendor/css/pages/front-page-landing.css" />

    <!-- Helpers -->
    <script src="assets/sneat_pro/assets/vendor/js/helpers.js"></script>
    <script src="assets/sneat_pro/assets/js/front-config.js"></script>

    <style>
        .img-size {
            width: 100%;
            height: 24vh;
            object-fit: cover;
            object-position: center;
        }

        .table th,
        .table td {
            padding: 0.67rem !important;
        }
    </style>

</head>

<body>
    <script src="assets/sneat_pro/assets/vendor/js/dropdown-hover.js"></script>
    <script src="assets/sneat_pro/assets/vendor/js/mega-dropdown.js"></script>

    <!-- Navbar: Start -->
    <nav class="layout-navbar shadow-none py-0">
        <div class="container">
            <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-8">
                <!-- Menu logo wrapper: Start -->
                <div class="navbar-brand app-brand demo d-flex py-0 me-4 me-xl-8">
                    <!-- Mobile menu toggle: Start-->
                    <button class="navbar-toggler border-0 px-0 me-4" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="tf-icons bx bx-menu bx-lg align-middle text-heading fw-medium"></i>
                    </button>
                    <!-- Mobile menu toggle: End-->
                    <a href="/santribaru/" class="app-brand-link">
                        <!-- <span class="app-brand-logo demo">
                            <img src="{{ \Storage::url(settings()->get('app_logo')) }}" alt="Logo" width="50">
                        </span> -->
                        <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">PSB Pondok Ngujur</span>
                    </a>
                </div>
                <!-- Menu logo wrapper: End -->
                <!-- Menu wrapper: Start -->
                <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                    <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl p-2"
                        type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="tf-icons bx bx-x bx-lg"></i>
                    </button>
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-medium" aria-current="page" href="/santribaru/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" aria-current="page" href="/santribaru/#profil">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" aria-current="page" href="/santribaru/#syarat">Informasi Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="/santribaru/#kontak">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="/santribaru/#sosmed">Sosmed</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link fw-medium d-block d-md-none" href="/santribaru/admin">Admin</a>
                        </li>
                        <li>
                            <a href="cekdata" class="btn btn-primary d-block d-md-none"><span
                                    class="d-block d-md-none">Cek Data</span></a>
                        </li>
                    </ul>
                </div>
                <div class="landing-menu-overlay d-lg-none"></div>
                <!-- Menu wrapper: End -->
                <!-- Toolbar: Start -->
                <ul class="navbar-nav flex-row align-items-center ms-auto">

                    <!-- navbar button: Start -->
                    <li class="nav-item ">
                        <a class="nav-link fw-medium d-none d-md-block" href="/santribaru/admin">Admin</a>
                    </li>
                    <li>
                        <a href="cekdata" class="btn btn-primary d-none d-md-block"><span
                                class="d-none d-md-block">Cek Data</span></a>
                    </li>
                    <!-- navbar button: End -->
                </ul>
                <!-- Toolbar: End -->
            </div>
        </div>
    </nav>
    <!-- Navbar: End -->


    <!-- Sections:Start -->
    <div data-bs-spy="scroll" class="scrollspy-example">
        <!-- Hero: Start -->
        <section id="hero-animation">
            <div id="landingHero" class="section-py landing-hero position-relative">
                <img src="assets/sneat_pro/assets/img/front-pages/backgrounds/hero-bg.png" alt="hero background"
                    class="position-absolute top-0 start-50 translate-middle-x object-fit-cover w-100 h-100"
                    data-speed="1" />
                <div class="container">
                    <div class="hero-text-box text-center position-relative">
                        <?php
                        include "koneksi.php";
                        $query = "SELECT embed FROM admin LIMIT 1";
                        $sql = mysqli_query($connect, $query);
                        $data = mysqli_fetch_array($sql);

                        // Set variabel embed
                        $embed = $data['embed'] ?? 1; // Default 1 jika tidak ada data
                        ?>
                        <h1 class="text-primary hero-title display-6 fw-extrabold ">Sistem Aplikasi Penerimaan Santri Baru</h1>
                        <h2 class="hero-sub-title h6 mb-6">
                            Pondok Pesantren Tarbiyatul Mutathowi'in<br class="d-none d-lg-block" />
                            Ngujur Rejosari Kebonsari Madiun.
                        </h2>
                        <?php echo ($embed == 0) ? '<div class="alert alert-danger bg-danger">
                            <h3 class="text-white fw-bold p-0 m-0">Pendaftaran Ditutup</h3>
                            <span>
                                <h5 class="text-white p-0 m-0">Silahkan menghubungi panitia untuk informasi lebih lanjut</h5>
                            </span>
                        </div>' : ''; ?>
                        <div class="landing-hero-btn d-inline-block position-relative">
                            <span class="hero-btn-item position-absolute d-none d-md-flex fw-medium">Tunggu apa lagi?
                                <img src="assets/sneat_pro/assets/img/front-pages/icons/Join-community-arrow.png"
                                    alt="Join community arrow" class="scaleX-n1-rtl" /></span>
                            <div class="d-flex gap-3">
                                <a href="registrasi" class="btn btn-sm d-md-none <?php echo ($embed == 0) ? 'disabled btn-danger' : 'btn-primary'; ?>">Daftar Sekarang</a>
                                <a href="registrasi" class="btn btn-lg d-none d-md-inline-block <?php echo ($embed == 0) ? 'disabled btn-danger' : 'btn-primary'; ?>">Daftar Sekarang</a>
                                <a href="cekdata" class="btn btn-info btn-sm d-block d-md-none">Cek Data</a>
                                <a href="cekdata" class="btn btn-info btn-lg d-none d-md-none">Cek Data</a>
                            </div>
                        </div>
                    </div>
                    <div id="heroDashboardAnimation" class="hero-animation-img">
                        <a href="#">
                            <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                                <img src="assets/sneat_pro/assets/img/front-pages/landing-page/brosur-bg.png"
                                    alt="hero dashboard" class="animation-img"
                                    data-app-light-img="front-pages/landing-page/brosur-bg.png"
                                    data-app-dark-img="front-pages/landing-page/brosur-bg.png" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="landing-hero-blank"></div>
        </section>
        <!-- Hero: End -->


        <!-- Profil: Start -->
        <section id="profil" class="section-py bg-body landing-faq">
            <div class="container">
                <!-- <div class="text-center mb-4">
                    <span class="badge bg-label-primary">FAQ</span>
                </div> -->
                <h4 class="text-center mb-1">
                    <span class="position-relative fw-extrabold z-1">Profil
                        <img
                            src="assets/sneat_pro/assets/img/front-pages/icons/section-title-icon.png"
                            alt="laptop charging"
                            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
                    </span>
                </h4>
                <p class="text-center mb-12 pb-md-4">
                    Pondok Pesantren Tarbiyatul Mutathowi'in Ngujur Rejosari Kebonsari Madiun
                </p>
                <div class="row gy-12 align-items-center">
                    <div class="col-lg-5">
                        <div class="text-center">
                            <img
                                src="gambar/logopondok.png"
                                alt="faq boy with logos"
                                class="faq-image" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="accordion" id="accordionExample">
                            <div class="card accordion-item">
                                <h2
                                    class="accordion-header"
                                    id="headingFour">
                                    <button
                                        type="button"
                                        class="accordion-button collapsed"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionFour"
                                        aria-expanded="false"
                                        aria-controls="accordionFour">
                                        Sejarah Singkat
                                    </button>
                                </h2>
                                <div
                                    id="accordionFour"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Keberadaaan Pondok Pesantren Tarbiyatul Mutathowi’in Dusun Ngujur Desa Rejosari Kecamatan Kebonsari Kabupaten Madiun merupakan rangkaian panjang dari perjuangan para tokoh pendiri dan pejuang Pendidikan Agama di Dusun Ngujur Desa Rejosari Kecamatan Kebonsari Kab. Madiun, menyadari akan tugas dan tanggung jawabnya untuk mengembangkan agama dan menyediakan tempat pendidikan bagi masyarakat sekitar Desa Rejosari, tokoh-tokoh tersebut antara lain : KH. Ali Rahmat K. Matlab K. Ashuri K. Sudirman Masyarakat Dusun Ngujur Pada tahun 1946 para tokoh tersebut mendirikan Pondok Pesantren dan untuk menopang pendidikan formalnya didirikanlah Madrasah Ibtidaiyah/SR1 di Dusun Ngujur Desa Rejosari dengan bekal tekad dan semangat yang kuat. Madrasah tersebut berdiri dan bertahan. Pada tahun 1960 berubah menjadi Madrasah Mu’alimin yang akhirnya pada tahun 1970, berdasar SK Menteri Agama No. 176 tanggal 9 Agustus berubah menjadi PGAN. Selanjutnya sesuai dengan kebijakan Pemerintah dalam hal ini Departemen Agama, PGAN tersebut diubah menjadi MTsN Rejosari untuk kelas I, II, dan III sedang MAN Rejosari untuk kelas IV, V dan VI. Sedang untuk tingkat Dasar didirikan Madrasah Ibtidaiyah sekaligus untuk tingkat anak – anak didirikan RA dan PAUD.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2
                                    class="accordion-header"
                                    id="headingOne">
                                    <button
                                        type="button"
                                        class="accordion-button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionOne"
                                        aria-expanded="true"
                                        aria-controls="accordionOne">
                                        Visi
                                    </button>
                                </h2>

                                <div
                                    id="accordionOne"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        “Mewujudkan Pondok Pesantren yang Mendidik Santri untuk Beriman, Bertakwa, Beakhlakul Karimah, dan Berilmu."
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2
                                    class="accordion-header"
                                    id="headingTwo">
                                    <button
                                        type="button"
                                        class="accordion-button collapsed"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionTwo"
                                        aria-expanded="false"
                                        aria-controls="accordionTwo">
                                        Misi
                                    </button>
                                </h2>
                                <div
                                    id="accordionTwo"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Melaksanakan pembelajaran dan pengajian yang berkualitas bagi santri</li>
                                            <li>Mendorong santri untuk berprestasi dalam bidang keagamaan dan keilmuan</li>
                                            <li>Mewadahi santri untuk mengembangkan kreativitasnya</li>
                                            <li>Menciptakan suasana pendidikan yang kondusif bagi proses belajar mengajar</li>
                                            <li>Mendidik santri untuk mandiri, disiplin, dan tanggungjawab</li>
                                            <li>Melengkapi sarana dan prasarana yang mendudukung</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Profil: End -->

        <!-- Unit Pendidikan: Start -->
        <section id="landingFeatures" class="section-py landing-features">
            <div class="container mb-5">
                <h4 class="text-center mb-1">
                    <span class="position-relative fw-extrabold z-1">Unit Pendidikan
                        <img
                            src="assets/sneat_pro/assets/img/front-pages/icons/section-title-icon.png"
                            alt="laptop charging"
                            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
                    </span>
                </h4>
                <p class="text-center mb-12">
                    Pondok Pesantren Tarbiyatul Mutathowi’in Ngujur Rejosari Kebonsari Madiun.
                </p>
                <div class="features-icon-wrapper row gx-0 gy-6 g-sm-12">
                    <div
                        class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-4">
                            <img
                                src="gambar/logomadin.png"
                                alt="laptop charging" width="100" />
                        </div>
                        <h5 class="mb-2">Madrasah Diniyah</h5>
                        <a href="/santribaru/registrasi">
                            <button class="btn btn-sm btn-primary">Daftar</button>
                        </a>
                    </div>
                    <div
                        class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-4">
                            <img
                                src="gambar/raAlmuslimun.png"
                                alt="RA Al-Muslimun" width="100" />
                        </div>
                        <h5 class="mb-2">RA Al - Muslimun</h5>
                        <a href="#" target="_blank">
                            <button class="btn btn-sm btn-primary">Daftar</button>
                        </a>
                    </div>
                    <div
                        class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-4">
                            <img
                                src="gambar/min3madiun.png"
                                alt="MIN 3 Madiun" width="100" />
                        </div>
                        <h5 class="mb-2">MIN 3 Madiun</h5>
                        <a href="https://web.min3madiun.sch.id/" target="_blank">
                            <button class="btn btn-sm btn-primary">Daftar</button>
                        </a>
                    </div>
                    <div
                        class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-4">
                            <img
                                src="gambar/mtsn2Madiun.png"
                                alt="MTsN 2 Madiun" width="100" />
                        </div>
                        <h5 class="mb-2">MTsN 2 Madiun</h5>
                        <a href="https://www.mtsn2madiun.sch.id/" target="_blank">
                            <button class="btn btn-sm btn-primary">Daftar</button>
                        </a>
                    </div>
                    <div
                        class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-4">
                            <img
                                src="gambar/man2Madiun.png"
                                alt="MAN 2 Madiun" width="100" />
                        </div>
                        <h5 class="mb-2">MAN 2 Madiun</h5>
                        <p class="features-icon-description">
                            <a href="https://www.man2kabmadiun.sch.id/" target="_blank">
                                <button class="btn btn-sm btn-primary">Daftar</button>
                            </a>
                        </p>
                    </div>
                    <div
                        class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-4">
                            <img
                                src="gambar/ut.png"
                                alt="Universitas Terbuka" width="130" />
                        </div>
                        <h5 class=" mb-2">Universitas Terbuka</h5>
                        <a href="https://pondokngujur.com/universitas-terbuka/" target="_blank">
                            <button class="btn btn-sm btn-primary">Daftar</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Unit Pendidikan: End -->

        <!-- Galeri: Start -->
        <section
            id="landingReviews"
            class="section-py bg-body landing-reviews pb-0">
            <div class="container">
                <div
                    class="row align-items-center gx-0 gy-4 g-lg-5 mb-5 pb-md-5">
                    <div class="col-md-6 col-lg-5 col-xl-3">
                        <div class="mb-4">
                            <span class="badge bg-label-primary">Kepoin Yuk!</span>
                        </div>
                        <h4 class="mb-1">
                            <span class="position-relative fw-extrabold z-1">Galeri Kami
                                <img
                                    src="assets/sneat_pro/assets/img/front-pages/icons/section-title-icon.png"
                                    alt="laptop charging"
                                    class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
                            </span>
                        </h4>
                        <p class="mb-5 mb-md-12">
                            Pondok Pesantren<br
                                class="d-none d-xl-block" />
                            Tarbiyatul Mutathowi'in.
                        </p>
                        <div class="landing-reviews-btns">
                            <button
                                id="reviews-previous-btn"
                                class="btn btn-icon btn-label-primary reviews-btn me-3"
                                type="button">
                                <i class="bx bx-chevron-left bx-md"></i>
                            </button>
                            <button
                                id="reviews-next-btn"
                                class="btn btn-icon btn-label-primary reviews-btn"
                                type="button">
                                <i class="bx bx-chevron-right bx-md"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7 col-xl-9 mb-12">
                        <div
                            class="swiper-reviews-carousel overflow-hidden">
                            <div class="swiper" id="swiper-reviews">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img1.png" alt="Haul-1" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img2.png" alt="Haul-2" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img3.png" alt="Haul-3" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img4.png" alt="Haflah" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img5.png" alt="Kegiatan" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img6.png" alt="Ziarah Wali" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img7.png" alt="Kegiatan" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img8.png" alt="Kegiatan" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img9.png" alt="Haul-4" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img10.png" alt="Ziarah Maqbaroh" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img11.png" alt="Kegiatan" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img12.png" alt="Kegiatan" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img13.png" alt="Kegiatan" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img14.png" alt="Kegiatan" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img15.png" alt="Kegiatan" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img16.png" alt="Kegiatan" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img17.png" alt="Kegiatan" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img18.png" alt="MIN 3 Madiun" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img19.png" alt="RA Al Muslimun" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img21.png" alt="Asrama Putri" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img22.png" alt="MIN 3 Madiun" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img23.png" alt="MTsN 2 Madiun" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <img src="gambar/galeri/img24.png" alt="Man 2 Madiun" class="img-size rounded float-start">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Galeri: End -->

        <!-- CTA: Start -->
        <section
            id="landingCTA"
            class="section-py landing-cta position-relative p-lg-0 pb-0">
            <img
                src="assets/sneat_pro/assets/img/front-pages/backgrounds/cta-bg-light.png"
                class="position-absolute bottom-0 end-0 scaleX-n1-rtl h-100 w-100 z-n1"
                alt="cta image"
                data-app-light-img="front-pages/backgrounds/cta-bg-light.png"
                data-app-dark-img="front-pages/backgrounds/cta-bg-dark.png" />
            <div class="container">
                <div class="row align-items-center gy-12">
                    <div
                        class="col-lg-6 text-center text-sm-center text-lg-start">
                        <h3 class="cta-title text-primary fw-bold mb-1">
                            Ayo Mondok !
                        </h3>
                        <h5 class="text-body mb-8">
                            Daftar sekarang dan jadilah bagian dari Kami
                        </h5>
                        <a href="registrasi" class="btn btn-lg <?php echo ($embed == 0) ? 'disabled btn-danger' : 'btn-primary'; ?>">Daftar Sekarang</a>
                    </div>
                    <div class="col-lg-6 pt-lg-12 text-center text-lg-end">
                        <img
                            src="assets/sneat_pro/assets/img/front-pages/landing-page/hero-dashboard.png"
                            alt="cta dashboard"
                            class="img-fluid mt-lg-4 rounded-3" />
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA: End -->

        <!-- Alur dan Syarat: Start -->
        <section id="syarat" class="section-py landing-features">
            <div class="container">
                <h4 class="text-center mb-1">
                    <span class="position-relative fw-extrabold z-1">Informasi Pendaftaran
                        <img
                            src="assets/sneat_pro/assets/img/front-pages/icons/section-title-icon.png"
                            alt="laptop charging"
                            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
                    </span>
                </h4>
                <p class="text-center mb-12">
                    Santri Baru PP Tarbiyatul Mutathowi'in Tahun Pelajaran 2025/2026.
                </p>
                <div class="row overflow-hidden">
                    <div class="col-12">
                        <ul class="timeline timeline-center mt-12">
                            <li class="timeline-item">
                                <span class="timeline-indicator timeline-indicator-warning" data-aos="zoom-in" data-aos-delay="200">
                                    <i class="icon-base bx bx-time"></i>
                                </span>
                                <div class="timeline-event card p-0" data-aos="fade-right">
                                    <div class="card-header border-0 d-flex justify-content-between">
                                        <h5 class="card-title mb-0">Waktu dan Tempat Pendaftaran</h5>
                                    </div>
                                    <div class="card-body pb-4 pt-0">
                                        <div class="hours mb-2">
                                            <i class="icon-base bx bx-time"></i>
                                            <span class="ms-2">01 Februari 2025</span>
                                            <i class="icon-base bx bx-transfer mx-2"></i>
                                            <span>30 Juni 2025</span>
                                        </div>
                                        <div class="location">
                                            <i class="icon-base bx bx-map"></i>
                                            <span class="align-middle ms-2 mb-7">Kantor PP. Tarbiyatul Mutathowi'in | Ngujur Rejosari Kebonsari Madiun (offline)</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <span class="timeline-indicator timeline-indicator-danger" data-aos="zoom-in" data-aos-delay="200">
                                    <i class="icon-base bx bx-line-chart"></i>
                                </span>
                                <div class="timeline-event card p-0" data-aos="fade-right">
                                    <h5 class="card-header">Alur Pendaftaran</h5>
                                    <div class="card-body">
                                        <p class="mb-2">Klik tombol dibawah ini untuk melihat alur pendaftaran</p>
                                        <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="px-4">Lihat</span></button>
                                        <div class="collapse" id="collapseExample">
                                            <ul class="list-group list-group-flush mt-4">
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Mengisi formulir pendaftaran
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Melengkapi persyaratan pendaftaran
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Melunasi administrasi pendaftaran
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Sowan Ndalem Pengasuh
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Wajib Masuk ke pondok pada waktu yang telah ditentukan
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Mengikuti kegiatan MOSBA (Masa Orientasi Santri Baru)
                                                    </h6>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <span class="timeline-indicator timeline-indicator-primary" data-aos="zoom-in" data-aos-delay="200">
                                    <i class="icon-base bx bx-list-ul"></i>
                                </span>
                                <div class="timeline-event card p-0" data-aos="fade-right">
                                    <h5 class="card-header">Syarat Pendaftaran</h5>
                                    <div class="card-body">
                                        <p class="mb-2">Klik tombol dibawah ini untuk melihat syarat pendaftaran</p>
                                        <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><span class="px-4">Lihat</span></button>
                                        <div class="collapse" id="collapseExample2">
                                            <ul class="list-group list-group-flush mt-4">
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Mengisi formulir dan kelengkapnnya
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Foto Copy Akte Kelahiran
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Foto Copy Ijazah (Bisa Menyusul)
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Foto Copy NISN
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Foto Copy Kartu Keluarga
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Foto Copy KTP Orang Tua
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        3 Lembar Pas foto 3x4
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Materai 10.000 (1pcs)
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Map Kuning (untuk santri putra)
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Map Hijau (untuk santri putri)
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Bersedia mengikuti tes penempatan kelas
                                                    </h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <h6
                                                        class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                                class="bx bx-check bx-12px"></i></span>
                                                        Bersedia mengikuti semua aturan dan tata tertib
                                                    </h6>
                                                </li>
                                            </ul>
                                            <h6 class="mt-6">Catatan :</h6>
                                            <ul>
                                                <li>Semua Berkas dimasukkan Map warna hijau untuk santri putra dan kuning untuk santri putri.</li>
                                                <li>Bagi santri yang melakukan pendaftaran secara online, berkas bisa diupload dari formulir, dan bisa minta kepada panitia untuk di cetakkan pada saat daftar ulang.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <span class="timeline-indicator timeline-indicator-success" data-aos="zoom-in" data-aos-delay="200">
                                    <i class="icon-base bx bx-wifi-off"></i>
                                </span>
                                <div class="timeline-event card p-0" data-aos="fade-right">
                                    <h5 class="card-header">Tata Cara Pendaftaran Offline</h5>
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li class="d-flex justify-content-start align-items-center text-success mb-2">
                                                <i class="icon-base bx bx-home icon-sm me-4"></i>
                                                <div class="ps-4 border-start">
                                                    <h6 class="mb-0">Datang langsung ke Kantor PP Tarbiyatul Mutathowi'in</h5>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-start align-items-center text-info mb-2">
                                                <i class="icon-base bx bx-pencil icon-sm me-4"></i>
                                                <div class="ps-4 border-start">
                                                    <h6 class="mb-0">Mengisi formulir pendaftaran</h6>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-start align-items-center text-primary mb-2">
                                                <i class="icon-base bx bx-folder-open icon-sm me-4"></i>
                                                <div class="ps-4 border-start">
                                                    <h6 class="mb-0">Mengumpulkan semua berkas yang telah ditentukan</h6>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-start align-items-center text-warning mb-2">
                                                <i class="icon-base bx bx-credit-card icon-sm me-4"></i>
                                                <div class="ps-4 border-start">
                                                    <h6 class="mb-0">Membayar biaya administrasi pendaftaran</h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <span class="timeline-indicator timeline-indicator-info" data-aos="zoom-in" data-aos-delay="200">
                                    <i class="icon-base bx bx-wifi"></i>
                                </span>
                                <div class="timeline-event card p-0" data-aos="fade-right">
                                    <h5 class="card-header">Tata Cara Pendaftaran Online</h5>
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li class="d-flex justify-content-start align-items-center text-success mb-2">
                                                <i class="icon-base bx bx-globe icon-sm me-4"></i>
                                                <div class="ps-4 border-start">
                                                    <h6 class="mb-0">Kunjungi link berikut: <a href="/santribaru/registrasi" class="text-primary">Daftar</a></h5>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-start align-items-center text-info mb-2">
                                                <i class="icon-base bx bx-pencil icon-sm me-4"></i>
                                                <div class="ps-4 border-start">
                                                    <h6 class="mb-0">Mengisi formulir pendaftaran</h6>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-start align-items-center text-primary mb-2">
                                                <i class="icon-base bx bx-folder-open icon-sm me-4"></i>
                                                <div class="ps-4 border-start">
                                                    <h6 class="mb-0">Mengupload semua berkas yang telah ditentukan</h6>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-start align-items-center text-warning mb-2">
                                                <i class="icon-base bx bx-credit-card icon-sm me-4"></i>
                                                <div class="ps-4 border-start">
                                                    <h6 class="mb-0">Membayar biaya administrasi pendaftaran (via Transfer)</h6>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-start align-items-center text-danger mb-2">
                                                <i class="icon-base bx bx-cloud-upload icon-sm me-4"></i>
                                                <div class="ps-4 border-start">
                                                    <h6 class="mb-0">Upload bukti pembayaran</h6>
                                                </div>
                                            </li>
                                        </ul>
                                        <h6 class="mt-6">Catatan :</h6>
                                        <ul>
                                            <li>Untuk santri yang melakukan pendaftaran secara online, pembayaran bisa ditransfer ataupun langsung cash pada saat daftar ulang</li>
                                            <li>Bagi santri yang melakukan pembayaran secara online (Transfer), wajib mengupload bukti pembayaran yang telah kami sediakan di halaman formulir pendaftaran.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Alur dan Syarat: End -->

        <!--Rincian Biaya: Start -->
        <section id="" class="section pb-10 mb-10 landing-features">
            <div class="container">
                <h4 class="text-center mb-1">
                    <span class="position-relative fw-extrabold z-1">Rincian Biaya Pendaftaran
                        <img
                            src="assets/sneat_pro/assets/img/front-pages/icons/section-title-icon.png"
                            alt="laptop charging"
                            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
                    </span>
                </h4>
                <p class="text-center mb-12">
                    Santri Baru PP Tarbiyatul Mutathowi'in Tahun Pelajaran 2025/2026.
                </p>
                <div class="row g-6 pt-lg-5">
                    <!-- Favourite Plan: Start -->
                    <div class="col-xl-12 col-lg-6">
                        <div class="card border border-primary shadow-xl">
                            <div class="card-header">
                                <div class="text-center">
                                    <h4 class="mb-0">Rincian Biaya Pendaftaran</h4>
                                    <div
                                        class="d-flex align-items-center justify-content-center">
                                        <span
                                            class="price-monthly h2 text-primary fw-extrabold mb-0">PSB 2025</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-sm table-bordered mb-4">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" class="text-center align-middle">NO</th>
                                                <th rowspan="2" colspan="2" class="text-center align-middle">URAIAN</th>
                                                <th rowspan="2" class="text-center align-middle">NOMINAL</th>
                                                <th colspan="3" class="text-center align-middle">KETERANGAN</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center align-middle">Perbulan</th>
                                                <th class="text-center align-middle">Pertahun</th>
                                                <th class="text-center align-middle">Sekali Bayar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center align-middle">1</td>
                                                <td colspan="2">Biaya Pendaftaran</td>
                                                <td class="d-flex justify-content-between align-items-center">
                                                    <span class="text-start">Rp.</span>
                                                    <span class="text-end">50.000</span>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center align-middle">✅</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">2</td>
                                                <td colspan="2">Biaya Kegiatan</td>
                                                <td class="d-flex justify-content-between align-items-center">
                                                    <span class="text-start">Rp.</span>
                                                    <span class="text-end">90.000</span>
                                                </td>
                                                <td></td>
                                                <td class="text-center align-middle">✅</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">3</td>
                                                <td colspan="2">Kalender</td>
                                                <td class="d-flex justify-content-between align-items-center">
                                                    <span class="text-start">Rp.</span>
                                                    <span class="text-end">25.000</span>
                                                </td>
                                                <td></td>
                                                <td class="text-center align-middle">✅</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">4</td>
                                                <td colspan="2">Syahriah</td>
                                                <td class="d-flex justify-content-between align-items-center">
                                                    <span class="text-start">Rp.</span>
                                                    <span class="text-end">25.000</span>
                                                </td>
                                                <td class="text-center align-middle">✅</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">5</td>
                                                <td colspan="2">Makan (2 x 1 Hari)</td>
                                                <td class="d-flex justify-content-between align-items-center">
                                                    <span class="text-start">Rp.</span>
                                                    <span class="text-end">300.000</span>
                                                </td>
                                                <td class="text-center align-middle">✅</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">6</td>
                                                <td colspan="2">Almari</td>
                                                <td class="d-flex justify-content-between align-items-center">
                                                    <span class="text-start">Rp.</span>
                                                    <span class="text-end">300.000</span>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center align-middle">✅</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle" rowspan="2">7</td>
                                                <td rowspan="2">Seragam</td>
                                                <td class="align-middle">Putra</td>
                                                <td class="d-flex justify-content-between align-items-center">
                                                    <span class="text-start">Rp.</span>
                                                    <span class="text-end">200.000</span>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center align-middle">✅</td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">Putri</td>
                                                <td class="d-flex justify-content-between align-items-center">
                                                    <span class="text-start">Rp.</span>
                                                    <span class="text-end">225.000</span>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center align-middle">✅</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">8</td>
                                                <td colspan="2">Kitab</td>
                                                <td class="d-flex justify-content-between align-items-center">
                                                    <span class="text-start">Rp.</span>
                                                    <span class="text-end">150.000</span>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center align-middle">✅</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">9</td>
                                                <td colspan="2">Buku Izin</td>
                                                <td class="d-flex justify-content-between align-items-center">
                                                    <span class="text-start">Rp.</span>
                                                    <span class="text-end">10.000</span>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center align-middle">✅</td>
                                            </tr>
                                        <tfoot>
                                            <tr>
                                                <th colspan="2" rowspan="2" class="text-center align-middle">Total Biaya</th>
                                                <th class="text-center align-middle">Putra</th>
                                                <th colspan="4" class=" text-center align-middle">Rp. 1.150.000</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center align-middle">Putri</th>
                                                <th colspan="4" class=" text-center align-middle">Rp. 1.175.000</th>
                                            </tr>
                                        </tfoot>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- <div class="d-grid mt-8">
                <a
                  href="payment-page.html"
                  class="btn btn-primary">Get Started</a>
              </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- Favourite Plan: End -->
                </div>
            </div>
        </section>
        <!--Rincian Biaya: End -->

        <!-- Contact Us: Start -->
        <section
            id="kontak"
            class="section-py bg-body landing-contact">
            <div class="container">
                <h4 class="text-center mb-1">
                    <span class="position-relative fw-extrabold z-1">Hubungi Kami
                        <img
                            src="assets/sneat_pro/assets/img/front-pages/icons/section-title-icon.png"
                            alt="laptop charging"
                            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
                    </span>
                </h4>
                <p class="text-center mb-12 pb-md-4">
                    Anda punya pertanyaan? tulis saja dibawah dan kirim ke kami.
                </p>
                <div class="row g-6">
                    <div class="col-lg-5">
                        <div
                            class="contact-img-box position-relative border p-2 h-100">
                            <img
                                src="assets/sneat_pro/assets/img/front-pages/icons/contact-border.png"
                                alt="contact border"
                                class="contact-border-img position-absolute d-none d-lg-block scaleX-n1-rtl" />
                            <img
                                src="gambar/logopondok.png"
                                alt="contact customer service"
                                class="contact-img w-100 scaleX-n1-rtl" />
                            <div class="p-4 pb-2">
                                <div class="row g-4">
                                    <div
                                        class="col-md-7 col-lg-12 col-xl-7">
                                        <div
                                            class="d-flex align-items-center">
                                            <div
                                                class="badge bg-label-primary rounded p-1_5 me-3">
                                                <i
                                                    class="bx bx-envelope bx-lg"></i>
                                            </div>
                                            <div>
                                                <p class="mb-0">Email</p>
                                                <h6 class="mb-0">
                                                    <a
                                                        href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php echo $email; ?>"
                                                        class="text-heading" target="_blank"><?php echo $email; ?></a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-md-5 col-lg-12 col-xl-5">
                                        <div
                                            class="d-flex align-items-center">
                                            <div
                                                class="badge bg-label-success rounded p-1_5 me-3">
                                                <i
                                                    class="bx bx-phone-call bx-lg"></i>
                                            </div>
                                            <div>
                                                <p class="mb-0">Phone</p>
                                                <h6 class="mb-0">
                                                    <a
                                                        href="https://api.whatsapp.com/send/?phone=<?php echo $phoneNumber; ?>&text&type=phone_number&app_absent=0"
                                                        class="text-heading" target="_blank"><?php echo $phoneNumber; ?></a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="mb-2">Kirim Pesan</h4>
                                <p class="mb-6">
                                    Jika ada yang ingin anda tanyakan, anda bisa mengirimkan pertanyaan anda melalui form dibawah ini.
                                </p>
                                <form id="contact-form" class="mb-3">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <label class="form-label" for="contact-form-fullname">Nama</label>
                                            <input type="text" class="form-control" id="contact-form-fullname" placeholder="Masukkan Nama Anda" />
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="contact-form-message">Pesan</label>
                                            <textarea id="contact-form-message" class="form-control" rows="11" placeholder="Tuliskan pesan anda"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">
                                                Kirim
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Error message container -->
                                <div id="error-message" style="color: red; display: none;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us: End -->
    </div>

    <!-- / Sections:End -->

    <!-- Footer: Start -->
    <footer class="landing-footer bg-body footer-text" id="sosmed">
        <div class="footer-top position-relative overflow-hidden z-1">
            <img
                src="assets/sneat_pro/assets/img/front-pages/backgrounds/footer-bg.png"
                alt="footer bg"
                class="footer-bg banner-bg-img z-n1" />
            <div class="container">
                <div class="row gx-0">
                    <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">
                        <a
                            href="/santribaru/"
                            class="app-brand-link mb-6 d-flex align-items-center justify-content-center">
                            <img src="gambar/logopondok.png" alt="logo pondok" class="footer-logo w-20">
                        </a>
                        <p class="footer-text text-center d-flex footer-logo-description mb-6">
                            Pondok Pesantren Tarbiyatul Mutathowi'in Ngujur Rejosari Kebonsari Madiun
                        </p>
                        <!-- <form class="footer-form">
                            <label for="footer-email" class="small">Subscribe to newsletter</label>
                            <div class="d-flex mt-1">
                                <input
                                    type="email"
                                    class="form-control rounded-0 rounded-start-bottom rounded-start-top"
                                    id="footer-email"
                                    placeholder="Your email" />
                                <button
                                    type="submit"
                                    class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top">
                                    Subscribe
                                </button>
                            </div>
                        </form> -->
                    </div>
                    <div class="col-12 col-lg-6 d-flex gap-5  justify-content-center">
                        <div class="col-lg-6 col-md-4 text-end text-sm-end text-lg-start col-sm-6">
                            <h6 class="footer-title mb-6">Sosial Media</h6>
                            <ul class="list-unstyled">
                                <li class="mb-4">
                                    <a
                                        href="https://www.instagram.com/pondokngujur/"
                                        target="_blank"
                                        class="footer-link">Instagram</a>
                                </li>
                                <li class="mb-4">
                                    <a
                                        href="https://www.youtube.com/@pondokngujur"
                                        target="_blank"
                                        class="footer-link">Youtube</a>
                                </li>
                                <li class="mb-4">
                                    <a
                                        href="https://www.tiktok.com/@pondokngujur_?_t=8ngkzwhNeUi&_r=1"
                                        target="_blank"
                                        class="footer-link">Tiktok</a>
                                </li>
                                <li class="mb-4">
                                    <a
                                        href="https://www.pondokngujur.com"
                                        target="_blank"
                                        class="footer-link">Sites</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-6">
                            <h6 class="footer-title mb-6">Halaman</h6>
                            <ul class="list-unstyled">
                                <li class="mb-4">
                                    <a
                                        href="/santribaru/"
                                        class="footer-link">Beranda</a>
                                </li>
                                <li class="mb-4">
                                    <a
                                        href="/santribaru/#profil"
                                        class="footer-link">Profil</a>
                                </li>
                                <li class="mb-4">
                                    <a
                                        href="/santribaru/#syarat"
                                        class="footer-link">Syarat Pendaftaran</a>
                                </li>
                                <li class="mb-4">
                                    <a
                                        href="/santribaru/#kontak"
                                        class="footer-link">Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-4">
                        <h6 class="footer-title mb-6">Download our app</h6>
                        <a href="javascript:void(0);" class="d-block mb-4"><img
                                src="assets/sneat_pro/assets/img/front-pages/landing-page/apple-icon.png"
                                alt="apple icon" /></a>
                        <a href="javascript:void(0);" class="d-block"><img
                                src="assets/sneat_pro/assets/img/front-pages/landing-page/google-play-icon.png"
                                alt="google play icon" /></a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3 py-md-5">
            <div
                class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
                <div class="mb-2 mb-md-0">
                    <span class="footer-bottom-text">©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </span>
                    <span class="footer-bottom-text"> Pondok Ngujur. All rights reserved</span>
                    <!-- <a href="https://instagram.com/mezaaf_" target="_blank" class="text-white">Mezaaf</a> -->
                </div>
                <div>
                    <a href="https://github.com/mezaff" class="me-4" target="_blank">
                        <img src="assets/sneat_pro/assets/img/front-pages/icons/github.svg" alt="Github" />
                    </a>
                    <a href="https://instagram.com/mezaaf_" target="_blank">
                        <img src="assets/sneat_pro/assets/img/front-pages/icons/instagram.svg"
                            alt="Instagram" />
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer: End -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/sneat_pro/assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/sneat_pro/assets/vendor/js/bootstrap.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/sneat_pro/assets/vendor/libs/nouislider/nouislider.js"></script>
    <script src="assets/sneat_pro/assets/vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->
    <script src="assets/sneat_pro/assets/js/front-main.js"></script>


    <!-- Page JS -->
    <script src="assets/sneat_pro/assets/js/front-page-landing.js"></script>

    <script>
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form submit

            // Ambil nilai dari form
            const fullName = document.getElementById('contact-form-fullname').value;
            const message = document.getElementById('contact-form-message').value;

            // Validasi form
            if (fullName === "" || message === "") {
                // Tampilkan pesan error jika ada field kosong
                document.getElementById('error-message').style.display = 'block';
                document.getElementById('error-message').innerHTML = "Mohon masukkan nama dan pesan anda!";
            } else {
                // Reset error message jika form valid
                document.getElementById('error-message').style.display = 'none';

                // Ambil nomor WhatsApp dari PHP
                const phoneNumber = "<?php echo $phoneNumber; ?>"; // Nomor WhatsApp admin yang diambil dari PHP

                // Buat pesan teks untuk WhatsApp
                const textMessage = `Assalamualaikum, saya ${fullName}, ${message}`;

                // Encode pesan untuk URL
                const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(textMessage)}`;

                // Arahkan ke WhatsApp
                window.open(url, '_blank');
            }
        });
    </script>



</body>

</html>

<!-- beautify ignore:end -->