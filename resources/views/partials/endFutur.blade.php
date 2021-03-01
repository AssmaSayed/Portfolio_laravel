      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container">

          <div class="row">
            @foreach ($dbEndFutur as $item)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="card" data-aos="fade-up">
                <img src="{{$item->src}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <i class="bx bx-tachometer"></i>
                  <h5 class="card-title"><a href="">{{$item->titre}}</a></h5>
                  <p class="card-text">{{$item->sousTitre}} </p>
                </div>
              </div>
            </div>
                
            @endforeach
        </div>
      </section>
      <!-- End Features Section -->

