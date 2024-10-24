<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Unilag Artisans</title>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="https://unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">adebesinnewton99@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>0814 090 2526</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="//twitter.com/LilLucie4?t=pDIYS_BC8I7Mahub0xTkBQ&s=09/" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="//facebook.com/profile.php?id=100066858159194/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="//instagram.com/newton0999/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="//linkedin.com/in/adebesin-adewunmi-334897220/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">

          <div id="logo">
            <h1><a href="/">Unilag<span>Artisans</span></a></h1>
          </div>

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#services">Services</a></li>
              {{-- <li><a class="nav-link scrollto " href="#testimonials">Testimonals</a></li> --}}
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

        </div>
      </header><!-- End Header -->

  @yield('content')

</body>
</html>
