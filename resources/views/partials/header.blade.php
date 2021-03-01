<div class="wrap">

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
          <h1>{{$dbHeader[0]->titre}} <span>Plato</span></h1>
          <h2>{{$dbHeader[0]->sousTitre}} </h2>
          <a href="#about" class="{{$dbHeader[0]->button}} ">Get Started</a>
        </div>
      </section><!-- End Hero -->
  
      <!-- ======= Header ======= -->
      <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">
  
          <div class="logo mr-auto">
            <h1 class="text-light"><a href="index.html"><span>Plato</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>
  
          <nav class="nav-menu d-none d-lg-block">
            <ul>
              @foreach ($dbNavbar as $item)
                  <li> <a href="{{$item->href}}">{{$item->li}}</a> </li>
                  
              @endforeach
  
            </ul>
          </nav><!-- .nav-menu -->
  
        </div>
      </header><!-- End Header -->
</div>