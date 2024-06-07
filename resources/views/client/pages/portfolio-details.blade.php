@extends('client.layout')

@section('content')
<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            @foreach($portfolio -> galleries as $gallery)
            <div class="swiper-slide">
              <img src="{{ asset($gallery -> image) }}" alt="project" />
            </div>
            @endforeach          

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: {{ $portfolio -> category -> title }}</li>
            <li><strong>assets/client</strong>: ASU Company</li>
            <li><strong>Project date</strong>: {{ date('d F, Y', strtotime($portfolio -> project_date)) }}</li>
            <li><strong>Project URL</strong>: <a href="#">{{$portfolio -> project_url}}</a></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>{{ $portfolio -> title }}</h2>
          <div>
            {!! $portfolio -> description !!}
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->
@endsection