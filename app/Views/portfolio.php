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

<body class="portfolio-page">

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
          <li><a href="<?= base_url('about') ?>">About</a></li>
          <li><a href="<?= base_url('portfolio') ?>"  class="active">Portofolio</a></li>
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
        <h1>Portfolio</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li class="current">Portfolio</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">project</li>
            <li data-filter=".filter-product">Sertifikat</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/portfolio/todolist.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Apps to do list</h4>
                <p>aplikasi pengingat tugas</p>
                <a href="assets/img/portfolio/todolist.png" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/portfolio/CCNA.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>sertifikat CCNA</h4>
                <p>sertifikasi pelatihan jaringan komputer yang di adakan oleh CISCO Network Academy</p>
                <a href="assets/img/portfolio/CCNA.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.netacad.com/cisco-packet-tracer" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/portfolio/ui.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Design Ui</h4>
                <p>Design Ui website beasiswa di figma</p>
                <a href="assets/img/portfolio/ui.png" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/portfolio/eksaktasport.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Eksakta Sport</h4>
                <p>piagam peserta tournament Futsal Se-jurusan MIPA FKIP UNILA</p>
                <a href="assets/img/portfolio/eksaktasport.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/portfolio/apps.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Apps pendidikan</h4>
                <p>aplikasi materi dan quiz, menggunakan framework flutter</p>
                <a href="assets/img/portfolio/apps.png" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div><!-- End Portfolio Item -->

            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/portfolio/pertanian.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>International Seminar Agriculture Enginnering</h4>
                <p>seminar tentang teknologi pertanian</p>
                <a href="assets/img/portfolio/pertanian.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/portfolio/41.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Impression 2023</h4>
                <p>Olimpiade IT tingkat SMA/SMK sedrajat se-Sumbagsel, Oleh Formatif FKIP UNILA</p>
                <a href="assets/img/portfolio/41.jpg" title="Product 5" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/portfolio/english.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pelatihan Bahasa Inggris</h4>
                <p>Pelatihan bahasa inggris ekstrakulikuler yang di adakan UPT Bahasa Universitas Lampung</p>
                <a href="assets/img/portfolio/english.jpg" title="Product 4" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/portfolio/48.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kepanitiaan Kopma</h4>
                <p>menjadi panitia dia acara pendidikan dasar koprasi mahasiswa universitas lampung</p>
                <a href="assets/img/portfolio/48.png" title="Product 6" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/portfolio/media.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Media Tutoring 2023</h4>
                <p>menjadi panitia dia acara pelatihan kemediaan oleh HIMASAKTA FKIP universitas lampung</p>
                <a href="assets/img/portfolio/media.jpg" title="Product 6" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
               </div>
            </div>
          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->


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