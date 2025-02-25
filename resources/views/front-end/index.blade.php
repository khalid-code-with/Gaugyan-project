
 @extends('front-end.Layout.maseter')
 @section("body-section")
 @section('title', 'Gaugyan | Home ')
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img/resize.jpg" alt="">
          <div class="carousel-container">
             </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/image1.jpg" alt="">
          <div class="carousel-container">
             </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/image2.jpg" alt="">
          <div class="carousel-container">
  
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/image3.jpg" alt="">
          <div class="carousel-container">
            
          </div>
        </div><!-- End Carousel Item -->
 <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>
</section><!-- /Hero Section -->
  </h2>
    <!--this is under header-->
    <div class="gaugyan-container">
     <!-- <h2 class="gaugyan-title">About GauGyaan</h2>-->
      <p class="gaugyan-text">
          GauGyaan is a dedicated platform for promoting awareness and knowledge about cows, their care, 
          and their significance in sustainable living. The app provides valuable insights on cow health, 
          dairy farming, indigenous breeds, and organic products derived from cow-based resources. 
          Whether you're a farmer, entrepreneur, or simply an enthusiast, GauGyaan serves as a comprehensive 
          guide to ethical and eco-friendly cattle management.
      </p>
  </div>

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <img src="assets/img/logo.jpg" alt="Image " class="img-fluid img-overlap"id="control_image_height" data-aos="zoom-out">
            </div>
            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <h3 class="content-subtitle text-white opacity-50"></h3>
              <h2 class="content-title mb-4">
                 <strong>About Us</strong> 
                
              </h2>
              <p class="opacity-20">
                Welcome to GauGyan World, a unique mobile application dedicated to promoting awareness and fostering an ecosystem that 
                integrates the profound values of cow significance and Sanatan culture into modern lifestyles. Our mission is to enlighten
                 and engage new generations by highlighting the multi-dimensional importance of cows, extending beyond spiritual significance
                  into historical, social, psychological, financial, and medical realms. From exploring their role in ancient traditions and
                   sustainable agriculture to understanding their therapeutic influence and economic benefits, GauGyan World serves as a 
                   bridge between tradition and modernity. In today’s fast-paced world, we strive to reconnect individuals with the timeless
                    wisdom of Sanatan Dharma, showcasing how cow-centric values can enhance well-being, sustainability, and holistic living.
                     Join us in rediscovering this invaluable heritage and embracing a lifestyle rooted in tradition while thriving in the
                      contemporary world. Download GauGyan World and become part of a movement that harmonizes ancient wisdom with modern 
                      innovation!
              </p>

            </div>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">

      <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
            <img src="assets/img/about2.jpg" alt="Image" class="img-fluid">
            <a href="https://youtu.be/hd6RNEkAgeM?si=8bhTa118cr_pAtOd" class="glightbox pulsating-play-btn">
              <span class="play"><i class="bi bi-play-fill"></i></span>
            </a>
          </div>
          <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h2 class="content-title mb-4">What We Offer</h2>
            <p class="mb-4">
              <div>
                <strong>Comprehensive Knowledge Base:</strong> Access a wealth of information and content about cows and Sanatan culture. 
              Learn about the historical significance, societal impact, psychological benefits, and medical uses of cows.
              </div><br>
              <div>
                <strong>Educational Opportunities:</strong> Participate in various learning modules, quizzes, and exams. From weekly quizzes to mega scholarship exams, users can test their knowledge and earn exciting prizes.
                
              </div><br>
              <div>
                <strong>Community Engagement:</strong> Discover and connect with your nearest Gaushala (cow shelter) to celebrate special occasions and immerse yourself in cultural activities.
              </div><br>
              <div>
                <strong>Cultural Showcase:</strong> Experience fashion shows and events that highlight traditional apparel and cultural heritage from different regions of the country.
              </div><br>
              
            </p>
        
          </div>
        </div>
      </div>
    </section><!-- /About 3 Section -->
  </section><!-- /Recent Posts Section -->
    <div class="buttons-container">
      <button class="btn" onclick="window.location.href='{{route("wallet")}}'">Wallet</button>
      <button class="btn" onclick="window.location.href='{{route("voucher")}}'">Voucher</button>
      <button class="btn" onclick="window.location.href='{{ route("refer_and_earn") }}'"> Refer & Earn</button>
    
  </div>
</main>
@endsection

