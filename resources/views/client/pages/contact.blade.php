@extends('client.layout')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>@lang('heading.contact')</h2>
    </div>

    <div>
      <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1087.2625157959997!2d49.650732030446676!3d40.59746567478676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403096f6d91518fb%3A0xf6af1a6d5b189061!2s9%20Nomreli%20Mekteb!5e0!3m2!1saz!2saz!4v1717772047073!5m2!1saz!2saz" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="row mt-5">

      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>@lang('heading.location'):</h4>
            <p>{{ $user_tr -> translated_address }}</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>@lang('heading.email_address'):</h4>
            <p>{{ $user_tr -> user -> email }}</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>@lang('heading.call'):</h4>
            <p>{{ $user_tr -> user -> phone }}</p>
          </div>

        </div>
      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">
        <form method="post" action="/contact">
          @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="fullname" class="form-control" id="fullname" placeholder="{{ $contact -> placeholder_name }}" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="{{ $contact -> placeholder_email }}" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ $contact -> placeholder_subject }}" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="{{ $contact -> placeholder_message }}" required></textarea>
          </div>
          
          <div class="text-center"><button type="submit" class="btn btn-success rounded-pill py-3 px-4 my-4">{{ $contact -> btn_send }}</button></div>
        </form>

      </div>

    </div>

  </div>
</section>
<!-- End Contact Section -->
@endsection