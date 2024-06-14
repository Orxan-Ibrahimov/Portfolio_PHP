@extends('client.layout')

@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="text-white">{{ $home_page -> title }}</h1>
      <div id="biograpy">
        <h2 class="text-white">{{ $home_page -> description }}</h2>
      </div>
      <a href="/about" class="btn-about">{{ $home_page -> about_me }}</a>
    </div>
  </section>
  @endsection