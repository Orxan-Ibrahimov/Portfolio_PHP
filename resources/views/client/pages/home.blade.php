@extends('client.layout')

@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1>{{ $user -> name . ' '. $user -> surname  }}</h1>
      <div id="biograpy">
        {!! $user -> biography !!}
      </div>
      <a href="/about" class="btn-about">About Me</a>
    </div>
  </section>
  @endsection