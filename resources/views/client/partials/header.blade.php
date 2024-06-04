  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Kelly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="{{ asset('front-panel/img/logo.png') }}" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="{{ request()-> is('/')?'active':null }}" href="/">Home</a></li>
          <li><a class="{{ request()-> is('about')?'active':null }}" href="/about">About</a></li>
          <li><a class="{{ request()-> is('resume')?'active':null }}" href="/resume">Resume</a></li>
          <li><a class="{{ request()-> is('services')?'active':null }}" href="/services">Services</a></li>
          <li><a class="{{ request()-> is('portfolio')?'active':null }}" href="/portfolio">Portfolio</a></li>
          <li><a class="{{ request()-> is('contact')?'active':null }}" href="/contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

  </header>