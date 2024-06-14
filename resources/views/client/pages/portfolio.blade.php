@extends('client.layout')

@section('content')
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>@lang('heading.portfolio')</h2>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <!-- <li data-filter=".filter-web">Web</li> -->

          @foreach($categories as $category)
          <li data-filter=".{{ strtolower($category -> category -> title) }}">{{ strtolower($category -> name) }}</li>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      @foreach($user_tr -> user ->portfolios as $portfolio)
      <div class="col-lg-4 col-md-6 portfolio-item {{ strtolower($portfolio -> category -> title) }}">
        <div class="portfolio-wrap">
          <img src="{{ asset($portfolio -> cover) }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{ $portfolio -> title }}</h4>
            <p>{{ $portfolio -> category -> title }}</p>
            <div class="portfolio-links">
              <a href="{{ asset($portfolio -> cover) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="/portfolio/{{$portfolio -> id}}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>

  </div>
</section>
<!-- End Portfolio Section -->
@endsection