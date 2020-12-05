@include('layouts.header')

    <div class="site-section site-hero inner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="d-block mb-3 caption" data-aos="fade-up">Get In Touch</span>
            <h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6" data-aos="fade-up">
            <form action="#">
             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="p-4 mb-3">
              <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>

            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-4 mb-5">
            <div class="site-section-heading">
              <h2 class="text-center">Testimonials</h2>
            </div>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          
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
          </div>

        </div>




        
      </div>
    </div>
    
      
   @include('layouts.footer')