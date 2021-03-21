{{-- <!DOCTYPE html> --}}
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TK N2 PEMBINA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
<link href="{{ asset('daftar/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('daftar/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ asset('daftar/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('daftar/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('daftar/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{ asset('daftar/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('daftar/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
<link href="{{ asset('daftar/assets/css/style.css')}}" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Arsha - v2.2.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">TK 2 PEMBINA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>

        </ul>
      </nav><!-- .nav-menu -->
    <a href="{{ url('daftar-akun',[])}}" class="get-started-btn scrollto">Daftar</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>PENDAFTARAN ONLINE TK NEGERI PEMBINA 2</h1>
          <h2>Baca Panduan Pendaftaran</h2>
          <div class="d-lg-flex">
            <a href="#panduan" class="btn-get-started scrollto">Panduan Daftar</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="{{ asset('daftar/assets/img/front.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Profil ======= -->
    <!--
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PROFIL SEKOLAH</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              sELAMAT DATANG DI WEBSITE PENERIMAAN ONLINE TK NEGERI PEMBINA 2 KOTA JAMBI
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section> End About Us Section -->

    <!-- ======= Panduan ======= -->
    <section id="panduan" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Panduan Pendaftaran</h2>
          <p>Harap baca terlebih dahulu, dan lengkapi data pendaftaran nya sebelum melakukan Pendaftaran Online</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('daftar') }}/assets/img/clients/1.png" class="img-fluid" alt=""></i></div>
              <h4>1. Buat Akun</h4>
              <p>Buat Akun di Halaman Daftar, dan lakukan pengisian data anak di halaman isi Data Anak</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('daftar') }}/assets/img/clients/3.png" class="img-fluid" alt=""></i></div>
              <h4><a href="">2. Lakukan Pembayaran</a></h4>
              <p>Lakukan Pembayaran Untuk Kebutuhan Alat-Alat TK. Kirim ke No.Rek yang ada di halaman Pembayaran Akun</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('daftar') }}/assets/img/clients/2.png" class="img-fluid" alt=""></i></div>
              <h4><a href="">3.Konfirmasi Admin</a></h4>
              <p>Setelah Mengisi Data dan Melakukan Pembayaran, Data Akan dikonfirmasi Oleh admin</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('daftar') }}/assets/img/clients/4.png" class="img-fluid" alt=""></i></div>
              <h4><a href="">4. Cetak Kwitansi & Ukur Baju Anak</a></h4>
              <p>Setelah data dikonfirmasi Admin, cetak Kwitansi Dan Lakukan Pengukuran Baju Anak</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Kegiatan Belajar ======= -->
    @yield('content')
    <!-- End Frequently Asked Questions Section -->

    <!-- =======MAPPPSSS alamat ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Alamat & Kontak</h2>
                <p>Alamat Lengkap dan Kontak Yang Bisa Dihubungi</p>
            </div>

            <div class="form-row mt-4">
                <div class="col-12 col-sm-6">
                   <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Lokasi</h4>
                            <p>Lorong Siswa,Jambi, Suka Karya, Kec. Kota Baru, Kota Jambi, Jambi 36129</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>tkpembina2jambi@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>No.Hp</h4>
                            <p>0853 6656 4708</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 mt-6 mt-sm-0">
                    <div class="info">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.203324479415!2d103.59628491475439!3d-1.6302770988111692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e258629ca8098b7%3A0x4d2d9a7235d0b709!2sTK%20Negeri%20Pembina%202%20Kota%20Jambi
                            !5e0!3m2!1sid!2sid!4v1611240831147!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 272px;" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>TK NEGERI PEMBINA 2 KOTA JAMBI</span></strong>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('daftar/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('daftar/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('daftar/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('daftar/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('daftar/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('daftar/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('daftar/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{ asset('daftar/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('daftar/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('daftar/assets/js/main.js')}}"></script>

</body>

</html>
