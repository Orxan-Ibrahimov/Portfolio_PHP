@extends('client.layout')

@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ $about_page -> title }}</h2>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset($user_tr ->user -> profile_image) }}" class="img-fluid" alt="profile" />
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content">
                <h1>{{ $user_tr -> translated_name .' '. $user_tr -> translated_surname }}</h1>
                <h3>Web Developer</h3>


                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-rounded-right"></i> <strong>{{ $about_page -> birthday }}:</strong> {{ $user_tr -> user -> birthday-> format('d F Y') }}</li>
                            <li><i class="bi bi-rounded-right"></i> <strong>{{ $about_page -> website }}:</strong> <a href="{{ $user_tr -> user -> github }}">{{ $user_tr -> user -> github }}</a> </li>
                            <li><i class="bi bi-rounded-right"></i> <strong>{{ $about_page -> phone }}:</strong> {{ $user_tr -> user -> phone }}</li>
                            <li><i class="bi bi-rounded-right"></i> <strong>{{ $about_page -> city }}:</strong> {{ $user_tr -> translated_city }}</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-rounded-right"></i> <strong>{{ $about_page -> birthday }}:</strong> {{ Date::now()->diffInYears($user_tr -> user ->birthday) }}</li>
                            <li><i class="bi bi-rounded-right"></i> <strong>{{ $about_page -> degree }}:</strong> Master</li>
                            <li><i class="bi bi-rounded-right"></i> <strong>{{ $about_page -> email }}:</strong> {{ $user_tr -> user -> email }} </li>
                            @if($user_tr -> user -> is_freelance)
                            <li><i class="bi bi-rounded-right"></i> <strong>{{ $about_page -> freelance }}:</strong> {{ $about_page -> available }}</li>
                            @else
                            <li><i class="bi bi-rounded-right"></i> <strong>{{ $about_page -> freelance }}:</strong> {{ $about_page -> not_available }}</li>
                            @endif

                        </ul>
                    </div>
                </div>
                <div>
                    <h1>{{ $about_page -> biography }}</h1>
                    {!! $user_tr -> translated_biography !!}
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End About Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ $about_page -> skills }}</h2>
        </div>

        <div class="row skills-content">

            @foreach($user_tr ->user -> skills as $skill)
            <div class="col-lg-6">
                <div class="progress">
                    <p class="skill">{{ $skill -> title }} </p>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>
<!-- End Skills Section -->

<!-- ======= Facts Section ======= -->
<!-- <section id="facts" class="facts">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Facts</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>assets/clients</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
            </div>

        </div>

    </div>
</section> -->
<!-- End Facts Section -->

<!-- ======= Testimonials Section ======= -->
<!-- <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Testimonials</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{asset('assets/client/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/client/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>
                

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/client/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/client/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/client/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section> -->
<!-- End Testimonials Section -->

@endsection