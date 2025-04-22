<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>HaloJeremia.com </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Active
  * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">HaloJeremia.com</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= base_url('/') ?>" class="active">Home</a></li>
          <li><a href="<?= base_url('about') ?>">About</a></li>
          <li><a href="<?= base_url('portfolio') ?>">Portofolio</a></li>
          <li><a href="<?= base_url('blog') ?>">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('contact') ?>">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- About Section -->
    <section id="about" class="about section">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 1,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="assets/img/jeje4.jpg" alt="Foto Jeremia" class="img-fluid">
            </div>
            <div class="swiper-slide">
              <img src="assets/img/jeje1.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="swiper-slide">
              <img src="assets/img/jeje3.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="col-lg-4 order-lg-1">
        <span class="section-subtitle" data-aos="fade-up">Halo!</span>
        <h1 class="mb-4" data-aos="fade-up">
          Saya Jeremia Adi Pratama
        </h1>
        <p data-aos="fade-up">
          Saya seorang web developer dan front end developer. Hobi saya bermain futsal dan menonton film. Saat ini saya sedang menempuh studi S1 di Universitas Lampung, Fakultas Keguruan dan Ilmu Pendidikan, Program Studi Pendidikan Teknologi Informasi.
        </p>
        <p class="mt-5" data-aos="fade-up">
          <a href="<?= base_url('contact') ?>" class="btn btn-get-started">Hubungi Saya</a>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Riwayat Pendidikan -->
<section id="about-2" class="about-2 section light-background">
  <div class="container">
    <div class="content">
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
          <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
            <div class="img">
              <img src="assets/img/jeje5.jpg" alt="circle image" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
          <div class="px-3">
            <span class="content-subtitle">Pendidikan</span>
            <h2 class="content-title text-start">
              Riwayat Pendidikan Saya
            </h2>
            <ul class="lead">
              <li>SD N 1 Onoharjo</li>
              <li>SMP Kristen 2 Bandarjaya</li>
              <li>SMA N 1 Terbanggi Besar</li>
              <li>Universitas Lampung – FKIP, Prodi Pendidikan Teknologi Informasi</li>
            </ul>
            <p class="mb-5">
              Saya memiliki ketertarikan dalam dunia pengembangan web, khususnya di bagian front end.
            </p>
            <p>
              <a href="#" class="btn-get-started">Lihat Portofolio</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-- Services Section -->
    
    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">
  <div class="container">
    <div class="row gy-4 justify-content-center">
      
      <div class="col-lg-5">
        <div class="images-overlap">
          <img src="assets/img/jeje2.jpg" alt="Jeremia's Profile" class="img-fluid img-1" data-aos="fade-up">
        </div>
      </div>

      <div class="col-lg-4 ps-lg-5">
        <span class="content-subtitle">Pencapaian Saya</span>
        <h2 class="content-title">Mengapa Memilih Saya?</h2>
        <p class="lead">
          Saya memiliki pengalaman yang kuat di bidang web development dan telah mengerjakan berbagai proyek pengembangan website dan aplikasi.
        </p>
        <p class="mb-5">
          Berikut adalah beberapa pencapaian yang telah saya raih selama menjadi seorang web developer:
        </p>
        <div class="row mb-5 count-numbers">

          <!-- Start Stats Item: Proyek Selesai -->
          <div class="col-4 counter" data-aos="fade-up" data-aos-delay="100">
            <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter number"></span>
            <span class="d-block">Proyek Selesai</span>
          </div>
          <!-- End Stats Item -->

          <!-- Start Stats Item: Baris Kode -->
          <div class="col-4 counter" data-aos="fade-up" data-aos-delay="200">
            <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="50000" data-purecounter-duration="1" class="purecounter number"></span>
            <span class="d-block">Baris Kode Ditulis</span>
          </div>
          <!-- End Stats Item -->

          <!-- Start Stats Item: Jam Pengalaman -->
          <div class="col-4 counter" data-aos="fade-up" data-aos-delay="300">
            <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="2000" data-purecounter-duration="1" class="purecounter number"></span>
            <span class="d-block">Jam Pengalaman</span>
          </div>
          <!-- End Stats Item -->

        </div>
      </div>

    </div>
  </div>
</section><!-- /Stats Section -->


<!-- Blog Posts Section -->
<section id="blog-posts" class="blog-posts section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <p>My Journey</p>
    <h2>Blog & Artikel</h2>
  </div><!-- End Section Title -->
  <div class="container">

    <div class="row gy-4">
      <div class="col-md-6 col-lg-4">
        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
          <a href="<?= base_url('blog') ?>" class="thumb d-block"><img src="assets/img/uiux.jpg" alt="Image" class="img-fluid rounded"></a>

          <div class="post-content">
            <div class="meta">
              <a href="<?= base_url('blog') ?>" class="cat">Tips</a> •
              <span class="date">Nov 2023</span>
            </div>
            <h3><a href="<?= base_url('blog') ?>">5 Tips Mendesain UI yang Efektif</a></h3>
            <p>
              Artikel ini membahas lima prinsip utama dalam mendesain antarmuka pengguna yang intuitif dan user-friendly.
            </p>

            <div class="d-flex author align-items-center">
              <div class="pic">
                <img src="assets/img/foto.jpg" alt="Image" class="img-fluid rounded-circle">
              </div>
              <div class="author-name">
                <strong class="d-block">Jeremia A.P</strong>
                <span class="">UI/UX Designer</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
          <a href="<?= base_url('blog') ?>" class="thumb d-block"><img src="assets/img/flutter.png" alt="Image" class="img-fluid rounded"></a>

          <div class="post-content">
            <div class="meta">
              <a href="<?= base_url('blog') ?>" class="cat">Coding</a> •
              <span class="date">Feb 2024</span>
            </div>
            <h3><a href="<?= base_url('blog') ?>">Membangun Aplikasi To-Do List dengan Flutter</a></h3>
            <p>
              Panduan langkah demi langkah membuat aplikasi to-do sederhana menggunakan Flutter dan Dart.
            </p>

            <div class="d-flex author align-items-center">
              <div class="pic">
                <img src="assets/img/foto.jpg" alt="Image" class="img-fluid rounded-circle">
              </div>
              <div class="author-name">
                <strong class="d-block">Jeremia A.P</strong>
                <span class="">Mobile Developer</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
          <a href="<?= base_url('blog') ?>" class="thumb d-block"><img src="assets/img/tools.png" alt="Image" class="img-fluid rounded"></a>

          <div class="post-content">
            <div class="meta">
              <a href="<?= base_url('blog') ?>" class="cat">Tips</a> •
              <span class="date">Jan 2025</span>
            </div>
            <h3><a href="<?= base_url('blog') ?>">6 tools membuat ui ux</a></h3>
            <p>
              6 tools yang sering digunakan oleh ui ux designer masa kini.
            </p>

            <div class="d-flex author align-items-center">
              <div class="pic">
                <img src="assets/img/foto.jpg" alt="Image" class="img-fluid rounded-circle">
              </div>
              <div class="author-name">
                <strong class="d-block">Jeremia A.P</strong>
                <span class="">Web Developer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /Blog Posts Section -->



  </main>

  <footer id="footer" class="footer light-background">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
          <div class="widget">
            <h3 class="widget-heading">About Us</h3>
            <p class="mb-4">
              There live the blind texts. Separated they live in Bookmarksgrove
              right at the coast of the Semantics, a large language ocean.
            </p>
            <p class="mb-0">
              <a href="#" class="btn-learn-more">Learn more</a>
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">
          <div class="widget">
            <h3 class="widget-heading">Navigation</h3>
            <ul class="list-unstyled float-start me-5">
              <li><a href="#">Overview</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Find Buyers</a></li>
            </ul>
            <ul class="list-unstyled float-start">
              <li><a href="#">Overview</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 pl-lg-5">
          <div class="widget">
            <h3 class="widget-heading">Recent Posts</h3>
            <ul class="list-unstyled footer-blog-entry">
              <li>
                <span class="d-block date">April 21, 2025</span>
                <a href="#">There live the Blind Texts</a>
              </li>
              <li>
                <span class="d-block date">April 21, 2025</span>
                <a href="#">Separated they live in Bookmarksgrove right</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 pl-lg-5">
          <div class="widget">
            <h3 class="widget-heading">Connect</h3>
            <ul class="list-unstyled social-icons light mb-3">
              <li>
                <a href="https://www.instagram.com/je.prtma?igsh=aHdyd3BqNjBobjI="><span class="bi bi-instagram"></span></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/jeremia-adi-488157293?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><span class="bi bi-linkedin"></span></a>
              </li>
            </ul>
          </div>

          <div class="widget">
            <div class="footer-subscribe">
              <h3 class="widget-heading">Subscribe</h3>
              <form action="forms/newsletter.php" method="post" class="php-email-form">
                <div class="mb-2">
                  <input type="text" class="form-control" name="email" placeholder="Enter your email">

                  <button type="submit" class="btn btn-link">
                    <span class="bi bi-arrow-right"></span>
                  </button>
                </div>
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Your subscription request has been sent. Thank you!
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Active.</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html> 