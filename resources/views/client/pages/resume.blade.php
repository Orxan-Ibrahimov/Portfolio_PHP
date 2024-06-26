@extends('client.layout')

@section('content')
<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ $resume_page -> title }}</h2>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h3 class="resume-title">{{ $resume_page -> summary }}</h3>
                <div class="resume-item pb-0">
                    <h4>Alice Barkley</h4>
                    <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
                    <p>
                    <ul>
                        <li>{{ $user_tr -> translated_address }}</li>
                        <li>{{ $user_tr -> user -> phone }}</li>
                        <li>{{ $user_tr -> user -> email }}</li>
                    </ul>
                    </p>
                </div>

                <h3 class="resume-title">{{ $resume_page -> education }}</h3>
                @foreach($educations as $education)
                <div class="resume-item">
                    <h4>{{ $education -> profession }}</h4>
                    <h5>{{ $education -> start_date -> year }} - {{ $education -> end_date -> year }}</h5>
                    <p><em>{{ $education -> university }}</em></p>
                   <div class="biography">
                    {!! $education -> description !!}
                   </div>
                </div>
                @endforeach              
            </div>

            <div class="col-lg-6">
                <h3 class="resume-title">{{ $resume_page -> professional_experience }}</h3>
               @foreach($user_tr -> user -> experiences as $experience)
               <div class="resume-item">
                    <h4>{{ $experience -> title }}</h4>
                    <h5>{{ $experience -> start_date -> year }} - {{ $experience -> end_date -> year }}</h5>
                    <p><em>{{$experience -> company}}</em></p>
                    <p>
                    <ul>
                       @foreach($experience -> missions as $mission)
                       <li>{{ $mission -> title }}</li>
                       @endforeach
                    </ul>
                    </p>
                </div>
                @endforeach                
            </div>
        </div>

    </div>
</section>
<!-- End Resume Section -->
@endsection