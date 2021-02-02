   {{-- @yield('content') --}}
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

        <div class="row align-items-stretch program">
          <div class="col-12 border-top border-bottom py-5" data-aos="fade" data-aos-delay="200">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">8:00</span> <span>AM</span></div>
              <div class="col-md-9">
                <h2 class="text-white">Design your open source strategy</h2>
                <span>Chris Mathews</span>
              </div>
            </div>
          </div>

          <div class="col-12 border-bottom py-5" data-aos="fade" data-aos-delay="300">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">9:30</span> <span>AM</span></div>
              <div class="col-md-9">
                <h2 class="text-white">Design your open source strategy</h2>
                <span>Chris Mathews</span>
              </div>
            </div>
          </div>

          <div class="col-12 border-bottom py-5" data-aos="fade" data-aos-delay="400">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">10:30</span> <span>AM</span></div>
              <div class="col-md-9">
                <h2 class="text-white">Design your open source strategy</h2>
                <span>Chris Mathews</span>
              </div>
            </div>
          </div>

          <div class="col-12 border-bottom py-5" data-aos="fade" data-aos-delay="500">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">10:45</span> <span>NOON</span></div>
              <div class="col-md-9">
                <h2 class="text-white">Break With Snacks</h2>
              </div>
            </div>
          </div>

          <div class="col-12 border-bottom py-5" data-aos="fade" data-aos-delay="600">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">11:30</span> <span>AM</span></div>
              <div class="col-md-9">
                <h2 class="text-white">Design your open source strategy</h2>
                <span>Chris Mathews</span>
              </div>
            </div>
          </div>

          <div class="col-12 border-bottom py-5" data-aos="fade" data-aos-delay="700">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">12:00</span> <span>NOON</span></div>
              <div class="col-md-9">
                <h2 class="text-white">Break For Lunch</h2>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    @if (count($programs) > 1) 
      @foreach ($programs as $program)
          {{$program->program_user}}
          {{$program->program_time}}
      @endforeach --}}
        
    
        
    {{-- @endif