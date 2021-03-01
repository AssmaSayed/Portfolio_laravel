      <!-- ======= Contact Us Section ======= -->
      <section id="contact" class="contact">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>Contact Us</span>
            <h2>{{$dbTitre[5]->titre}}</h2>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="100">
              <div class="info-box">
                <i class="{{$dbContact[0]->logo}}"></i>
                <h3>{{$dbContact[0]->titre}}</h3>
                <p>{{$dbContact[0]->infoUn}}</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="info-box">
                <i class="{{$dbContact[1]->logo}}"></i>
                <h3>{{$dbContact[1]->titre}}</h3>
                <p>{{$dbContact[1]->infoUn}}<br>{{$dbContact[1]->infoDeux}}</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="info-box">
                <i class="{{$dbContact[2]->logo}}"></i>
                <h3>{{$dbContact[2]->titre}}</h3>
                <p>{{$dbContact[2]->infoUn}}<br>{{$dbContact[2]->infoDeux}}</p>
              </div>
            </div>
          </div>

          <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4" data-aos="fade-up" data-aos-delay="400">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div>
      </section><!-- End Contact Us Section -->

