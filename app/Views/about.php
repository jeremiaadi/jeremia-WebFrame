
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


  <!-- =======================================================
  * Template Name: Active
  * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="about-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">HaloJeremia.com</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= base_url('/') ?>">Home</a></li>
          <li><a href="<?= base_url('about') ?>" class="active">About</a></li>
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

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About Page -->
<section class="about section" style="font-family: 'Poppins', sans-serif;">
  <div class="container">

    <!-- Section: Perkenalan -->
    <div class="text-center mb-5">
      <h1 class="mb-3" style="font-size: 2.5rem; color: #333;">Halo! Saya Jeremia Adi Pratama</h1>
      <p style="font-size: 1.25rem; color: #666;">inilahhh sekilas tentang saya</p>
    </div>

    <!-- Section: Pendidikan & Cerita -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6" data-aos="fade-right">
        <img src="assets/img/jeje4.jpg" alt="Foto Jeje" class="img-fluid rounded">
      </div>
      <div class="col-lg-6" data-aos="fade-left">
      <h1 class="mb-3" style="font-size: 2.5rem; color: #333;">Kenalan Yuk</h1>
      <p style="font-size: 1.25rem; color: #666;">Nama ku Jeremia Adi Pratama biasa dipanggil Jeje, lahir di Bandar Jaya pada 21 Mei 2004 dan saat ini tinggal di Desa Nambahdadi, Terbanggi Besar, Lampung Tengah.</p>
        <h2 class="mb-3">Perjalanan Pendidikan</h2>
        <p>Saya saat ini sedang menempuh pendidikan S1 di Universitas Lampung, Fakultas Keguruan dan Ilmu Pendidikan, Program Studi Pendidikan Teknologi Informasi. Dunia teknologi selalu menarik minat saya, terlebih dalam pengembangan perangkat lunak dan sistem.</p>
      </div>
    </div>

    <!-- Section: Keahlian -->
    <div class="mb-5" data-aos="fade-up">
      <h2 class="text-center mb-4">Keahlian Saya</h2>
      <div class="row text-center">
        <div class="col-md-4 mb-3">
          <div class="p-4 border rounded h-100">
            <h4 class="mb-2">Web Development</h4>
            <p class="mb-0">Membangun website dengan tampilan modern dan responsif.</p>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="p-4 border rounded h-100">
            <h4 class="mb-2">UI/UX Design</h4>
            <p class="mb-0">Mendesain antarmuka yang intuitif dan pengalaman pengguna yang optimal.</p>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="p-4 border rounded h-100">
            <h4 class="mb-2">Mobile App (Flutter)</h4>
            <p class="mb-0">Membuat aplikasi mobile multiplatform dengan Flutter.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Section: Hobi & Minat -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-lg-2" data-aos="fade-left">
        <img src="assets/img/jeje1.jpg" alt="Hobi Jeje" class="img-fluid rounded">
      </div>
      <div class="col-lg-6 order-lg-1" data-aos="fade-right">
        <h2 class="mb-3">Hobi & Minat</h2>
        <p>Di luar dunia teknologi, saya sangat menyukai futsal dan menonton film. Saya juga memiliki ketertarikan khusus pada teknologi pertanian masa kini yang mampu membantu kehidupan petani menjadi lebih efektif dan efisien.</p>
        <h2 class="mb-3">Fun Fact</h2>
      <p style="font-size: 1.2rem; color: #555;">Saya tidak bisa bangun siang! Saya selalu bangun pagi secara otomatis, bahkan tanpa alarm.</p>
      <h2 class="mb-4">Terhubung dengan Saya</h2>
      <a href="https://www.instagram.com/je.prtma?igsh=aHdyd3BqNjBobjI=" target="_blank" class="btn btn-outline-dark mx-2" style="background-color:#E1306C; color: white;">
  <i class="fab fa-instagram"></i>
</a>
<a href="https://www.linkedin.com/in/jeremia-adi-488157293" target="_blank" class="btn btn-outline-primary mx-2" style="background-color:#0077B5; color: white;">
  <i class="fab fa-linkedin-in"></i>
</a>

      </div>
    </div>


  </div>
</section>
<!-- End About Page -->


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