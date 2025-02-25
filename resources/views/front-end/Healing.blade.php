@extends('front-end.Layout.maseter')
@section("body-section")
@section('title', 'Gaugyan | Healing & Meditation')

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
        <h1>Healing & Meditation</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('homepage') }}">Home</a></li>
            </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

   
   
        

                
                    

           </article>
           </div>
          </section><!-- /Blog Details Section -->
</div>

        </div>

      </div>
    </div>
    <div class="container">
      <div class="row gy-4 justify-content-between align-items-center">
        <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
          <div> 
            <p class="gaugyan-text d-inline-flex align-items-center">
              <a href="https://youtu.be/omyxw0wMOjQ?si=9k8OkDBAgLoHU6Cq" class="glightbox pulsating-play-btn ms-2 me-2 d-inline-flex align-items-center">
                <span class="play"><i class="bi bi-play-fill fs-4"></i></span>
              </a>
              
              राजयोग meditation



            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row gy-4 justify-content-between align-items-center">
        <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
          <div> 
            <p class="gaugyan-text d-inline-flex align-items-center">
              <a href="https://youtu.be/Z3pF0wuTH94?si=ggCkYxbvsWlf60hE" class="glightbox pulsating-play-btn ms-2 me-2 d-inline-flex align-items-center">
                <span class="play"><i class="bi bi-play-fill fs-4"></i></span>
              </a>
              
              आत्म-नियंत्रण | SELF CONTROL BY YOGA.


            </p>
          </div>
        </div>
      </div>
    </div>
    
   
  </main>

  @endsection