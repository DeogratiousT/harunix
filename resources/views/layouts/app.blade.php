<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Harunix Global Technologies</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('images/favicon.ico') }}" rel="icon">
  <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('landing/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
    @include('includes.header')
  <!-- End Header -->

  <!-- ======= hero Section ======= -->
    @yield('hero')
  <!-- End Hero Section -->

  <main id="main">
      @yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    @include('includes.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('landing/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('landing/assets/js/main.js') }}"></script>

</body>

</html>