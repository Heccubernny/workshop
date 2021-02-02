@include('layouts.header')
    <div class="site-section site-hero inner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="d-block mb-3 caption" data-aos="fade-up">Our Speakers</span>
            <h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">Speakers</h1>
          </div>
        </div>
      </div>
    </div>
        

      
        
          @if (count($speakers) > 1)
          @else
            <h4 class="text-center">{{" No  speaker registered now, please come back later "}}</h4>
            @foreach ($speakers as $speaker)
        <div class="site-section">
        
          <div class="container">

            <div class="row align-items-center speaker">
              <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                <img src="{{ $speaker->speaker_image }}" alt="Image" class="img-fluid">
              </div>
              <div class="col-lg-6 ml-auto">
              <h2 class="text-white mb-4 name" data-aos="fade-right" data-aos-delay="200">{{ $speaker->speaker_name }}</h2>
                <div class="bio pl-lg-5">
                  <span class="text-uppercase text-primary d-block mb-3" data-aos="fade-right" data-aos-delay="300">{{ $speaker->job_title }}</span>
                  <p class="mb-4" data-aos="fade-right" data-aos-delay="400">{{ $speaker->speaker_description }}</p>
                  <p data-aos="fade-right" data-aos-delay="500">
                    Follow {{ $speaker->speaker_shortname }} &mdash;
                  <a href="{{ $speaker->facebook_link }}" class="p-2"><span class="icon-facebook"></span></a>
                    <a href="{{ $speaker->twitter_link }}" class="p-2"><span class="icon-twitter"></span></a>
                    <a href="{{ $speaker->github_link }}" class="p-2"><span class="icon-github"></span></a>
                  </p>
                </div>
              </div>
            </div>
            {{-- @if (count($speakers) > 1)
            @foreach ($speakers as $speaker)
            <div class="row align-items-center speaker">
              <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2" data-aos="fade" data-aos-delay="100">
                <img src={{ $speaker->speaker_image }} alt="Image" class="img-fluid">
              </div>
              <div class="col-lg-6 ml-auto order-lg-1">
                <h2 class="text-white mb-4 name" data-aos="fade-left" data-aos-delay="200">{{ $speaker->speaker_name }}</h2>
                <div class="bio pr-lg-5">
                  <span class="text-uppercase text-primary d-block mb-3" data-aos="fade-left" data-aos-delay="300">{{ $speaker->job_title }}</span>
                  <p class="mb-4" data-aos="fade-left" data-aos-delay="400">
                    {{ $speaker->speaker_description }}</p>
                  <p data-aos="fade-left" data-aos-delay="500">
                    Follow {{ $speaker->speaker_shortname }} &mdash;
                    <a href={{$speaker->facebook_link }} class="p-2"><span class="icon-facebook"></span></a>
                    <a href={{$speaker->twitter_link }} class="p-2"><span class="icon-twitter"></span></a>
                    <a href={{$speaker->github_link }} class="p-2"><span class="icon-github"></span></a>
                  </p>
                </div>
              </div>
            </div>
                
            @endforeach
                
            @endif --}}
           
            
          </div>
        </div>
            @endforeach
        
          @endif

        

        

        

{{-- @section('content')
@extends('speakers_programs')
    
@endsection
 --}}


 {{-- Start Program Section--}}
 <div class="site-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-4" data-aos="fade-up">
        <div class="site-section-heading">
          <h2>Programs</h2>
        </div>
      </div>
      <div class="col-lg-6 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus error deleniti dolores necessitatibus eligendi. Nesciunt repellendus ab voluptatibus.</p>
      </div>
    </div>

    @if (count($programs) > 1) 
      @foreach ($programs as $program)
          
     
    <div class="border-top" data-aos="fade" data-aos-delay="100"></div>
    <div class="row align-items-stretch program border-bottom">
      <div class="col-12 border-top border-bottom py-5" data-aos="fade" data-aos-delay="200">
        <div class="row align-items-stretch">
          <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">{{$program->program_time}}</span> <span>@if ($program->program_time >= "1200")
            {{"PM"}}
        
              
          @else
              
          {{"AM"}}
          @endif</span></div>
          <div class="col-md-9">
            <h2 class="text-white">{{$program->program_description}}</h2>
            <span>{{$program->program_user}}</span>
          </div>
        </div>
      </div>

      @endforeach
        
    
        
      @endif
      

       


    </div>
  </div>
</div>

{{-- End program Sections --}}

    

    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-4 mb-5">
            <div class="site-section-heading">
              <h2 class="text-center">Testimonials</h2>
            </div>
          </div>
        </div>


        @if (count($testimonies) > 1)
        @else
        {{-- <h4 class="text-center">{{"No testimony yet"}}</h4> --}}
        
        @foreach ($testimonies as $testimony)   
        

        <div class="slide-one-item home-slider owl-carousel">

          <div class="row justify-content-center">

            <div class="testimony text-center col-md-5">
              <figure>
                <img src="{{$testimony->testimonies_dp}}" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;{{$testimony->testimonies_testimony}}.&rdquo;</p>
                <p class="author">&mdash; {{$testimony->testimonies_user}}</p>
              </blockquote>
            </div>
          </div>

          
    
@endforeach
        
        
@endif


          {{-- <div class="row justify-content-center">
           <div class="testimony text-center col-md-5">
              <figure>
                <img src="assets/images/person_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Alex Anchors</p>
              </blockquote>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="testimony text-center col-md-5">
              <figure>
                <img src="assets/images/person_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Aaron Thomas</p>
              </blockquote>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="testimony text-center col-md-5">
              <figure>
                <img src="assets/images/person_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Emely Peters</p>
              </blockquote>
            </div>
          </div>

          <div class="row justify-content-center">
           <div class="testimony text-center col-md-5">
              <figure>
                <img src="assets/images/person_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Alex Anchors</p>
              </blockquote>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="testimony text-center col-md-5">
              <figure>
                <img src="assets/images/person_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Aaron Thomas</p>
              </blockquote>
            </div>
          </div> --}}

        </div>




        
      </div>
    </div>

    
      
@include('layouts.footer')