      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">

          <div class="row">
            <div style="background-image: url({{asset('/img/about.jpg')}})" data-aos="fade-right" class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
            <div class="col-xl-7 pt-4 pt-lg-0 d-flex align-items-stretch">
              <div class="content d-flex flex-column justify-content-center" data-aos="fade-left">
                <h3>{{$dbTitreAbout[0]->titre}}</h3>
                <p>{{$dbTitreAbout[0]->sousTitre}}</p>
                <div class="row">
                  @foreach ($dbInfoAbout as $item)
                    <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                      <i class="{{$item->logo}}"></i>
                      <h4>{{$item->titre}}</h4>
                      <p>{{$item->text}}</p>
                    </div>
                      
                  @endforeach
                </div>
              </div><!-- End .content-->
            </div>
          </div>

        </div>
      </section><!-- End About Section -->
