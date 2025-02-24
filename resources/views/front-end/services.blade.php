@extends('front-end.Layout.maseter')
@section("body-section")
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
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg1.jpg);">
      <div class="container position-relative">
        <h1>OUR SERVICES</h1>
       
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Services</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts 2 Section -->
    <section id="blog-posts-2" class="blog-posts-2 section">

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/cow.jpg" class="img-fluid" alt="">
              </div>

             <div class="post-content d-flex flex-column">

                <h3 class="post-title">Cow Holistic View</h3>
                <a href="cow_holistic_view.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/yog.jpg" class="img-fluid" alt="">
              </div>
       <div class="post-content d-flex flex-column">
                <h3 class="post-title">Healing and Meditation</h3>
                <a href="Healing.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/sana.jpg" class="img-fluid" alt="">
              </div>
            

              <div class="post-content d-flex flex-column">
                <h3 class="post-title">Sanatan Values & Culture</h3>
                <a href="sanatan.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/rishi.jpg" class="img-fluid" alt="">
              </div><!----
             
-->
              <div class="post-content d-flex flex-column">
                <h3 class="post-title">Geeta,Vedpuran & Spiritual Content</h3>
                <a href="geeta.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/yogi.jpg" class="img-fluid" alt="">
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Yoga & Fitness</h3>
                <a href="yoga.html"class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/new.jpg" class="img-fluid" alt="">
              </div>
              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Social Welfare by US</h3>
                <a href="social.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div><!-- End post list item -->
          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/inter.jpg" class="img-fluid" alt="">
              </div>
              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Dialogues,Podcasts & Seminars</h3>
                <a href="podcast.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div>
          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/sucess.jpg" class="img-fluid" alt="">
              </div>
              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Interviews,Motivations & Success Stories</h3>
                <a href="interview.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div>
          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/pers.jpg" class="img-fluid" alt="">
              </div>
              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Great Personalities & Places</h3>
                <a href="great_personalities_and_places.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div>
          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/exa.jpg" class="img-fluid" alt="">
              </div>
              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Exam Content for Scholarship & Prizes</h3>
                <a href="services.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div>
          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/pri.jpg" class="img-fluid" alt="">
              </div>
              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Free Quiz, Exams For Scholarship & Prizes</h3>
                <a href="services.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>
              

            </article>
          </div>

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets\img\product.jpg" class="img-fluid" alt="">
              </div>
              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Gaugyan Product Section</h3>
                <a href="categories.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div>
          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets\img\cal.jpg" class="img-fluid" alt="">
              </div>
              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Calendars</h3>
                <a href="calendar.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div>



        </div>
      </div>

    </section><!-- /Blog Posts 2 Section -->
  
@endsection