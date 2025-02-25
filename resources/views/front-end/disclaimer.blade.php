@extends('front-end.Layout.maseter')
@section("body-section")
@section('title', 'Gaugyan | Disclaimer') 
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
          <h1>Concept Of GauGyan</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="{{ route('homepage') }}">Home</a></li>
              </ol>
          </nav>
        </div>
      </div><!-- End Page Title -->

      <!-- Blog Details Section -->
      <section id="blog-details" class="blog-details section">
        <div class="container">

          <article class="article">
          <h2 class="title">"DISCLAIMER"
        </h2>
        <div class="content">
              <p>
                <span style="color: red;">1. General Information</span><br>
                The GauGyaan app provides information related to cattle care, dairy farming, and other agricultural topics. The content is for informational and educational purposes only and should not be considered professional or legal advice. Users should consult relevant experts before making any decisions based on the information provided in this app.
              <p>
                <span style="color: red;">2. Accuracy & Liability</span><br>
                While we strive to provide accurate and up-to-date information, GauGyaan does not guarantee the completeness, reliability, or accuracy of the content. We are not responsible for any loss, damage, or consequences resulting from the use of the app or reliance on its content.

              </p>
              <p>

                <span style="color: red;">3. Third-Party Links & Services</span><br>
                The app may contain links to third-party websites or services for additional information. GauGyaan does not endorse, control, or take responsibility for any third-party content, services, or transactions. Users should review the terms and policies of any third-party providers before engaging with them.
              </p>
              <p>
                <span style="color: red;">4. Personal Responsibility</span><br>
Users of GauGyaan are responsible for their actions and decisions. The apps content is meant to support awareness but should not replace expert consultation.

                

              </p>
              
              <p>
                
                <span style="color: red;">5. No Warranties</span><br>
                The app is provided on an "as is" and "as available" basis without warranties of any kind, either express or implied. We do not warrant that the app will be error-free, uninterrupted, or free from harmful components.
              </p>
              <P>
                <span style="color: red;">6. Changes to Disclaimer</span><br>
             We reserve the right to update or modify this disclaimer at any time without prior notice. Continued use of the app after changes implies acceptance of the updated terms.
              </P>
                
             
       </article>
       </div>
      </section><!-- /Blog Details Section -->
</div>

    </div>

  </div>
</div>
  </main>

  @endsection