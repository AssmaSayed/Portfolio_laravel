      <!-- ======= F.A.Q Section ======= -->
      <section id="faq" class="faq">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>F.A.Q</span>
            <h2>{{$dbTitre[4]->titre}}</h2>
            <p>{{$dbTitre[4]->sousTitre}}</p>
          </div>

          <div class="faq-list">
            <ul>
              @foreach ($dbFaq as $item)
              <li data-aos="fade-up">
                <i class="{{$item->logo}}"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">{{$item->titre}} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                  <p>
                    {{$item->text}}
                  </p>
                </div>
              </li>
              @endforeach
            </ul>
          </div>

        </div>
      </section><!-- End F.A.Q Section -->
