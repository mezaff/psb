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
        content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">


    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <!-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
    </script> -->
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/sneat_pro/assets/img/favicon/favicon.ico" />

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
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <!-- <script src="assets/sneat_pro/assets/vendor/js/template-customizer.js"></script> -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/sneat_pro/assets/js/front-config.js"></script>

</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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
                            <a class="nav-link fw-medium" aria-current="page" href="/santribaru/#syarat">Syarat Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="/santribaru/#kontak">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="/santribaru/#sosmed">Sosmed</a>
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
        <!-- FAQ: Start -->
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
                                        Lemon drops chocolate cake gummies
                                        carrot cake chupa chups muffin
                                        topping. Sesame snaps icing marzipan
                                        gummi bears macaroon dragée danish
                                        caramels powder. Bear claw dragée
                                        pastry topping soufflé. Wafer gummi
                                        bears marshmallow pastry pie.
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
                                        Dessert ice cream donut oat cake
                                        jelly-o pie sugar plum cheesecake.
                                        Bear claw dragée oat cake dragée ice
                                        cream halvah tootsie roll. Danish
                                        cake oat cake pie macaroon tart
                                        donut gummies. Jelly beans candy
                                        canes carrot cake. Fruitcake
                                        chocolate chupa chups.
                                    </div>
                                </div>
                            </div>

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
                                    id="headingFive">
                                    <button
                                        type="button"
                                        class="accordion-button collapsed"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionFive"
                                        aria-expanded="false"
                                        aria-controls="accordionFive">
                                        Unit Pendidikan
                                    </button>
                                </h2>
                                <div
                                    id="accordionFive"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>RA Al - Muslimun</li>
                                            <li>MIN 3 Madiun</li>
                                            <li>MTsN 2 Madiun</li>
                                            <li>MAN 2 Madiun</li>
                                            <li>MAN 2 Madiun</li>
                                            <li>UT Pokjar Pondok Ngujur</li>
                                            <li>BLKK Tarbiyatul Mutathowi’in</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ: End -->

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

        <!-- Useful features: Start -->
        <section id="syarat" class="section-py landing-features">
            <div class="container">
                <h4 class="text-center mb-1">
                    <span class="position-relative fw-extrabold z-1">Syarat Pendaftaran
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
                    <div class="col-xl-4 col-lg-6">
                        <div class="card border border-primary shadow-xl">
                            <div class="card-header">
                                <div class="text-center">
                                    <h4 class="mb-0">Syarat Pendaftaran</h4>
                                    <div
                                        class="d-flex align-items-center justify-content-center">
                                        <span
                                            class="price-monthly h2 text-primary fw-extrabold mb-0">PSB 2025</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled pricing-list">
                                    <li>
                                        <h6
                                            class="d-flex align-items-center mb-3">
                                            <span
                                                class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Mengisi formulir dan kelengkapnnya
                                        </h6>
                                    </li>
                                    <li>
                                        <h6
                                            class="d-flex align-items-center mb-3">
                                            <span
                                                class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Foto Copy Akte Kelahiran
                                        </h6>
                                    </li>
                                    <li>
                                        <h6
                                            class="d-flex align-items-center mb-3">
                                            <span
                                                class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Foto Copy Ijazah (Bisa Menyusul)
                                        </h6>
                                    </li>
                                    <li>
                                        <h6
                                            class="d-flex align-items-center mb-3">
                                            <span
                                                class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Foto Copy NISN
                                        </h6>
                                    </li>
                                    <li>
                                        <h6
                                            class="d-flex align-items-center mb-3">
                                            <span
                                                class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Foto Copy Kartu Keluarga
                                        </h6>
                                    </li>
                                    <li>
                                        <h6
                                            class="d-flex align-items-center mb-3">
                                            <span
                                                class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Foto Copy KTP Orang Tua
                                        </h6>
                                    </li>
                                    <li>
                                        <h6
                                            class="d-flex align-items-center mb-3">
                                            <span
                                                class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            3 Lembar Pas foto 3x4
                                        </h6>
                                    </li>
                                    <li>
                                        <h6
                                            class="d-flex align-items-center mb-3">
                                            <span
                                                class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Materai 10.000 (1pcs)
                                        </h6>
                                    </li>
                                    <li>
                                        <h6
                                            class="d-flex align-items-center mb-3">
                                            <span
                                                class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Map Kuning (untuk santri putra)
                                        </h6>
                                    </li>
                                    <li>
                                        <h6
                                            class="d-flex align-items-center mb-3">
                                            <span
                                                class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Map Hijau (untuk santri putri)
                                        </h6>
                                    </li>
                                    <li>
                                        <h6
                                            class="d-flex align-items-center mb-3">
                                            <span
                                                class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Bersedia mengikuti tes penempatan kelas
                                        </h6>
                                    </li>
                                    <li>
                                        <h6
                                            class="d-flex align-items-center mb-3">
                                            <span
                                                class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Bersedia mengikuti semua aturan dan tata tertib
                                        </h6>
                                    </li>
                                </ul>
                                <h5>Catatan :</h5>
                                <ul>
                                    <li>Semua Berkas dimasukkan Map warna hijau untuk santri putra dan kuning untuk santri putri.</li>
                                    <li>Bagi santri yang melakukan pendaftaran secara online, berkas bisa diupload dari formulir, dan bisa minta kepada panitia untuk di cetakkan pada saat daftar ulang.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6">
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
                                    <table class="table table-bordered table-striped mb-9">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" class="text-center align-middle">NO</th>
                                                <th rowspan="2" class="text-center align-middle">URAIAN</th>
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
                                                <td>Biaya Pendaftaran</td>
                                                <td class="text-end align-middle">Rp. 100.000</td>
                                                <td></td>
                                                <td class="text-center align-middle">✅</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">2</td>
                                                <td>Biaya Kegiatan dan Kesehatan</td>
                                                <td class="text-end align-middle">Rp. 85.000</td>
                                                <td></td>
                                                <td class="text-center align-middle">✅</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">3</td>
                                                <td>Kalender</td>
                                                <td class="text-end align-middle">Rp. 30.000</td>
                                                <td></td>
                                                <td class="text-center align-middle">✅</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">4</td>
                                                <td>Syahriah</td>
                                                <td class="text-end align-middle">Rp. 20.000</td>
                                                <td class="text-center align-middle">✅</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">5</td>
                                                <td>Makan (3 x 1 Hari)</td>
                                                <td class="text-end align-middle">Rp. 300.000</td>
                                                <td class="text-center align-middle">✅</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">6</td>
                                                <td>Almari</td>
                                                <td class="text-end align-middle">Rp. 300.000</td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center align-middle">✅</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">7</td>
                                                <td>Seragam</td>
                                                <td class="text-end align-middle">Rp. 200.000</td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center align-middle">✅</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">8</td>
                                                <td>Kitab</td>
                                                <td class="text-end align-middle">Rp. 100.000</td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center align-middle">✅</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">8</td>
                                                <td>Buku Izin</td>
                                                <td class="text-end align-middle">Rp. 10.000</td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center align-middle">✅</td>
                                            </tr>
                                        <tfoot>
                                            <tr>
                                                <th colspan="2" class="text-center align-middle">Total Biaya</th>
                                                <th colspan="4" class=" text-center align-middle">Rp. 1.075.000</th>
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
        <!-- Useful features: End -->

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
                            href="landing-page.html"
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
                    <span class="footer-bottom-text"> Made with ❤️ by</span>
                    <a href="https://instagram.com/mezaaf_" target="_blank" class="text-white">Mezaaf</a>
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