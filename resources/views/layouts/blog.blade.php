<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>
        @yield('title')
    </title>

    <!-- Styles -->
    <link href="/assets/css/page.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" href="/assets/img/favicon.png">
  </head>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="{{route('welcome')}}">
            <img class="logo-dark" src="/assets/img/logo-dark.png" alt="logo">
            <img class="logo-light" src="/assets/img/logo-light.png" alt="logo">
          </a>
        </div>

        <section class="navbar-mobile">
          <span class="navbar-divider d-mobile-none"></span>


        </section>
          @auth
          <a class="btn btn-xs btn-round btn-success" href="{{route('dashboard')}}">Dashboard</a>

              @else
              <a class="btn btn-xs btn-round btn-success" href="{{route('login')}}">Login</a>

          @endauth

      </div>
    </nav><!-- /.navbar -->


  @yield('header')


@yield('content')


    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">

          <div class="col-6 col-lg-3">
            <a href="/"><img src="../assets/img/logo-dark.png" alt="logo"></a>
          </div>

          <div class="text-right col-6 col-lg-3 order-lg-last">
            <div class="social">
              <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
              <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
              <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
              <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>

        </div>
      </div>
    </footer><!-- /.footer -->


    <!-- Scripts -->

    <script src="/assets/js/page.min.js"></script>
    <script src="/assets/js/script.js"></script>


  </body>
</html>
