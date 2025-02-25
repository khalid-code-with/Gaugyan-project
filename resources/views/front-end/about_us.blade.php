@extends('front-end.Layout.maseter')
@section("body-section")
@section('title', 'Gaugyan | Abouts')
  <style>
    /* Modal styles */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      width: 90%;
      max-width: 400px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .modal-content h2 {
      margin-top: 0;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 24px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover {
      color: black;
    }

    
    .contact-info {
      margin-top: 10px;
      font-size: 14px;
    }
     /* Change color on hover */
     .contact-info a:hover {
      color: #FF4500;
    }
  </style>
</head>

<body class="index-page">
 

  <main class="main">

    <!-- Page Title -->
    <div class="page-title"  style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>About</h1>
        
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{route('homepage') }}">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">

      <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6 order-lg-1 position-relative" data-aos="zoom-out">
            <img src="assets/img/about3.jpg" alt="Image" class="img-fluid">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn">
              <span class="play"><i class="bi bi-play-fill"></i></span>
            </a>
          </div>
          <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h2 class="content-title mb-4" style="font-size: 48px;">About Us</h2>
            <p class="mb-4 increase_font_size" >
              Welcome to GauGyan World, a unique mobile application dedicated to promoting awareness and fostering an ecosystem that
               integrates the profound values of cow significance and Sanatan culture into modern lifestyles. Our mission is to enlighten 
               and engage new generations by highlighting the multi-dimensional importance of cows, extending beyond spiritual significance
                into historical, social, psychological, financial, and medical realms. From exploring their role in ancient traditions and 
                sustainable agriculture to understanding their therapeutic influence and economic benefits, GauGyan World serves as a bridge
                 between tradition and modernity. In today’s fast-paced world, we strive to reconnect individuals with the timeless wisdom of
                  Sanatan Dharma, showcasing how cow-centric values can enhance well-being, sustainability, and holistic living. Join us in
                   rediscovering this invaluable heritage and embracing a lifestyle rooted in tradition while thriving in the contemporary
                    world. Download GauGyan World and become part of a movement that harmonizes ancient wisdom with modern innovation!
            </p><br>

            
          </div>
        </div>
      </div>
    </section><!-- /About 3 Section -->


    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section dark-background" style="background-color: #cf6334ec;">
      <!-- Section Title -->
      <div class="container section-title" >
        <h1><center>Our Vision</center></h1><br>
        <p>At GauGyan World, we believe that cows are an integral part of Sanatan Sanskriti (eternal culture) and have been revered
           for their countless contributions throughout history. Our vision is to create a platform where individuals can explore and
            understand the deep-rooted values associated with cows, extending beyond spiritual significance to their impact on physical,
             mental, and emotional well-being. From their role in Ayurveda and holistic healing to their influence on sustainable living 
             and agriculture, cows have been a cornerstone of a balanced and harmonious lifestyle. We also emphasize their connection to
              yogic practices like Pranayama and Yogasana, highlighting their role in fostering inner peace and vitality. Through GauGyan 
              World, we aim to revive and integrate this timeless wisdom into modern-day living, offering a deeper appreciation of cows as
               a symbol of compassion, sustainability, and wellness.</p>
      </div><!-- End Section Title -->
      
    </section><!-- /Services 2 Section -->

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">

      <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
            <img src="assets/img/about4.png" alt="Image" class="img-fluid">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn">
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


     <!-- Services 2 Section -->
     <section id="services-2" class="services-2 section dark-background" style="background-color: #cf6334ec;">
      <!-- Section Title -->
      <div class="container section-title" >
        <h1><center>Our Commitment to Social Welfare</center></h1><br>
        <p>GauGyan World is dedicated to giving back to the community. We are committed to spending 10% of our profits across five crucial areas:
          <br><br>
          <ul>
            <li>
              <div>Welfare of Cows: 2% will be allocated to the welfare of destitute cows roaming the streets in villages or cities.</div>
          
            </li>
          <li>
            <div>
              Welfare of Other Animals: 2% will be directed towards the care and treatment of animals suffering from diseases or similar conditions.
            </div>
          </li>
          <li>
            <div>
              Support for Old Age Homes and Orphanages: 2% will be spent on supporting old age homes and orphanages.
            </div>
          </li>
          <li>
            <div>
              Farmers and Environmental Welfare: 2% will go towards initiatives benefiting farmers and the environment.
            </div>
          </li>
          <li>
            <div>
              Support for Armed Forces, Paramilitary, and Police Personnel: 2% will be dedicated
               to the welfare of army, paramilitary, and police personnel and their families.
            </div>
          </li><br> <br>
          
          This is how 10% of the profits from your purchases will be spent, ensuring that your support helps create a positive impact across various fields.</p>
      <!-- End Section Title -->


      
    </section><!-- /Services 2 Section -->
    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">

      <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6 order-lg-1 position-relative" data-aos="zoom-out">
            <img src="assets/img/about1.jpg" alt="Image" class="img-fluid">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn">
              <span class="play"><i class="bi bi-play-fill"></i></span>
            </a>
          </div>
          <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h2 class="content-title mb-4" style="font-size: 48px;">Join the Movement</h2>
            <p class="mb-4"style="color: #555;">
              GauGyan World is more than just an app; it's a community dedicated to preserving and promoting the timeless values of Sanatan 
              culture and the unparalleled significance of cows. Join us in our mission to create an informed, engaged, and culturally
               enriched society.<br><br>

                Download the GauGyan World app today and embark on a journey of knowledge, awareness, and cultural revival. 
                Together, let's celebrate and uphold the essence of Sanatan Sanskriti and the invaluable contributions of cows.
            </p><br>
            
            
          </div>
        </div>
      </div>
    </section><!-- /About 3 Section -->
  </main>
  @endsection