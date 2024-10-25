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
              <li><a class="nav-link scrollto active" href="/">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#services">Services</a></li>
              {{-- <li><a class="nav-link scrollto " href="#testimonials">Testimonals</a></li> --}}
              <li><a class="nav-link scrollto" href="{{ route('frequently-asked-questions') }}">FAQs</a></li>
              <li>
                <form action="{{ url('/homepage') }}" method="get">
                    <button type="submit" class="mt-2 bg-blue-800 text-sm text-white font-semibold
                                   py-2 px-4 rounded-xl hover:bg-blue-500 md:text-center
                                    sm:mr-4">Find Artisans</button>
                  </form>
              </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

        </div>
      </header><!-- End Header -->

  @yield('content')

    {{-- Sub footer --}}

    <div class="container" data-aos="fade-up" data-aos-delay="400">
        <footer class="bg-gray-50 text-gray-800 py-20">
           <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">

             {{-- About Us --}}
             <div>
               <h2 class="text-green-600 font-bold text-xl mb-4">About Us</h2>
               <p class="text-gray-700">
                 We Connect talented student-artisans with students in need of services in the school hostels
                 to provide affordable, convenient and quality solutions
               </p>
             </div>

             {{-- Quick Links --}}
             <div>
               <h2 class="text-green-600 font-bold text-xl mb-4">Quick Links</h2>
               <ul class="text-gray-700">
                 <li class="mb-2 hover:text-green-600">
                   <a href="/">Home</a>
                 </li>
                 <li class="mb-2 hover:text-green-600">
                   <a href="#services">Services</a>
                 </li>
                 <li class="mb-2 hover:text-green-600">
                   <a href="{{ url('/homepage') }}">Find Artisans</a>
                 </li>
                 <li class="mb-2 hover:text-green-600">
                   <a href="{{ route('frequently-asked-questions') }}">FAQs</a>
                 </li>
               </ul>
             </div>

             {{-- Contact Info --}}
             <div>
                <h2 class="text-green-600 font-bold text-xl mb-4">Contact Us</h2>
                <p class="text-gray-700">
                  <i class="bi bi-envelope d-flex align-items-center mr-2"><a href="mailto:contact@example.com">adebesinnewton99@gmail.com</a></i>
                  <i class="bi bi-phone d-flex align-items-center ms-4"><span>0814 090 2526</span></i>
                </p>
             </div>

             {{-- Newletter --}}
             <div>
                <h2 class="text-green-600 font-bold text-xl mb-4">Stay Updated</h2>
                <p class="text-gray-700 mb-4">Join our newsletter for updates</p>
                <form action="" class="flex flex-col">
                   <input type="email" placeholder="Your email" class="border border-gray-300 p-2 mb-2 rounded focus:outline-none focus:ring-green-600">
                   <button class="bg-green-500 text-white py-2 rounded hover:bg-green-600 transition-colors duration-200">Subscribe</button>
                </form>
             </div>
           </div>
        </footer>
      </div>


     {{-- End Sub footer --}}

     <!-- ======= Footer ======= -->
     <footer id="footer">
       <div class="container">
         <div class="copyright">
           &copy; Copyright <strong> <a href="https://newton09.netlify.app/">NEWTON</a></strong> All Rights Reserved
           <div class="mt-2"> <a href="{{ route('policy') }}">Terms of Service | Privacy Policy</a></div>
         </div>

       </div>
     </footer><!-- End Footer -->

     <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

     <!-- Vendor JS Files -->
     <script src="assets/vendor/aos/aos.js"></script>
     <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
     <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
     <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
     <script src="assets/vendor/php-email-form/validate.js"></script>

     <!-- Template Main JS File -->
     <script src="assets/js/main.js"></script>
</body>
</html>
