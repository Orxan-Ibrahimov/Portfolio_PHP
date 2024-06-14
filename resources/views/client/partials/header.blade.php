  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0 ms-lg-5"><a href="index.html">{{ $header_page -> logo }}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="{{ asset('front-panel/img/logo.png') }}" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="{{ request()-> is('/')?'active':null }}" href="/">{{ $header_page -> home }}</a></li>
          <li><a class="{{ request()-> is('about')?'active':null }}" href="/about">{{ $header_page -> about }}</a></li>
          <li><a class="{{ request()-> is('resume')?'active':null }}" href="/resume">{{ $header_page -> resume }}</a></li>
        <!--   <li><a class="{{ request()-> is('services')?'active':null }}" href="/services">services</a></li>-->
          <li><a class="{{ request()-> is('portfolio')?'active':null }}" href="/portfolio">{{ $header_page -> portfolio }}</a></li>
          <li><a class="{{ request()-> is('contact')?'active':null }}" href="/contact">{{ $header_page -> contact }}</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ App::getLocale() }}
                </button>
                <ul class="dropdown-menu">
                   @foreach($languages as $language)
                   <li><a class="dropdown-item" href="/lang/{{ $language -> short_name }}">
                    <img src="{{ asset($language -> logo) }}" width="30"  class="me-2" alt="country" />
                   {{ $language -> short_name }}</a></li>
                   @endforeach
                </ul>
            </div>

      <div class="header-social-links">
       @foreach($user_tr -> user -> social_medias as $social_media)
       <a href="{{ $social_media -> link }}" class="{{ $social_media -> title }}"><i class="{{ $social_media -> icon_code }}"></i></a>
       @endforeach
        <!-- <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> -->
      </div>

    </div>

  </header>