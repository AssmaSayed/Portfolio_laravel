      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>Services</span>
            <h2>{{$dbTitre[0]->titre}}</h2>
            <p>{{$dbTitre[0]->sousTitre}}</p>
          </div>

          <div class="row">
            @foreach ($dbService as $item)
            <div class="col-md-6">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="{{$item->logo}}" style="color: {{$item->color}}"></i>
                <h4><a href="#">{{$item->titre}}</a></h4>
                <p>{{$item->text}}</p>
              </div>
            </div> 
            @endforeach
        </div>
      </section><!-- End Services Section -->
