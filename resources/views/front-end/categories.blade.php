@extends('front-end.Layout.maseter');
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
        <h1>CATEGORIES</h1>
       
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Categories</li>
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
                <img src="assets/img/cat1.jpeg" class="img-fluid" alt="">
              </div>

             <div class="post-content d-flex flex-column">

                <h3 class="post-title">Organic Block Print Fabric</h3>
                <a href="shop.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/cat2.jpeg" class="img-fluid" alt="">
              </div>
       <div class="post-content d-flex flex-column">
                <h3 class="post-title">FABRICS</h3>
                <a href="fabrics.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/cat3.jpeg" class="img-fluid" alt="">
              </div>
            

              <div class="post-content d-flex flex-column">
                <h3 class="post-title">SUITS AND KURTAS</h3>
                <a href="suits_kurtas.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/cat4.jpeg" class="img-fluid" alt="">
              </div><!----
             
-->
              <div class="post-content d-flex flex-column">
                <h3 class="post-title">OTHER TEXTILES</h3>
                <a href="unstic_dupattas.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>

            </article>
          </div><!-- End post list item -->

        </main>
         
        @endsection