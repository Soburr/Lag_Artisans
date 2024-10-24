@extends('layouts.pages')

@section('content')



  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-content" data-aos="fade-up">
      <div class="mb-20 text-2xl text-left pl-5 pr-5 font-bold">
         <p>Connect with skilled student-artisans in University of Lagos! </p> <br>
         <p class="text-xl font-mono font-thin">Find reliable services from talented students on campus.</p>

        <form action="{{ url('/homepage') }}" method="get">
          <button type="submit" class="mt-5 bg-blue-800 text-lg text-white font-semibold
                         py-2 px-4 rounded-xl hover:bg-blue-500 md:text-center
                         md:mx-auto sm:text-left sm:ml-0">Find Artisans</div>
        </form>

      <p class="text-xl text-black font-bold font-mono">For Artisans</p>

      <div>
        <a href="{{ route('register.artisan') }}" class=" btn-get-started scrollto">Register</a>
        <a href="{{ route('login.artisan') }}" class="btn-projects scrollto">Log In</a>
      </div><br>

    </div>

    <div class="hero-slider swiper">
      <div class="swiper-wrapper">

      </div>
    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="assets/img/Carpenter.png" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>What do we have to offer?</h2>

            <ul>
              <li><i class="bi bi-check-circle"></i> Convenient Service Booking.</li>
              <li><i class="bi bi-check-circle"></i> Verified Artisan Network</li>
              <li><i class="bi bi-check-circle"></i> Competitive Pricing</li>
              <li><i class="bi bi-check-circle"></i> Time-Saving</li>
              <li><i class="bi bi-check-circle"></i> Wide Range Of Services</li>
              <li><i class="bi bi-check-circle"></i> Empowering Student Talent</li>
              <li><i class="bi bi-check-circle"></i> Affordable, Student-friendly Prices</li>
              <li><i class="bi bi-check-circle"></i> Secure and Reliable Platform</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Services</h2>
          <p>Some of the Artisans jobs available at your disposal</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-lightning-fill"></i></div>
              <h4 class="title"><a href=""> Electricians </a></h4>
              <p class="description">Fix the Cables, hot plates, light bulbs, socket plugs, inspect circuit breakers in the hostels. And so much more.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-hammer"></i></div>
              <h4 class="title"><a href=""> Carpenters </a></h4>
              <p class="description">Help fix your hostel doors, build new storage lockers, and so much more.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <div class="icon"><i class="bi bi-scissors"></i></div>
              <h4 class="title"><a href="">Hair Stylist</a></h4>
              <p class="description">Make and/or cut your hair from the nearest hair stylist in your hostel.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="bi bi-question-circle-fill"></i></div>
              <h4 class="title"><a href="">Others</a></h4>
              <p class="description">Several other Artisans including Food Vendors, materials, and basically anything being sold in respective hostels.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

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

@endsection
