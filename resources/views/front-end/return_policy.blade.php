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
          <h1>Return Policy</h1>
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
          <h2 class="title">Return Policy           
        </h2>
        <div class="content">
              <p>
               <h4>1. Introduction</h4> 

This Return Policy outlines the terms and conditions for returning products purchased through our platform. By making a 
purchase, you agree to this policy. <br><br>

<h4>2. Eligibility for Returns</h4> 

Returns may be accepted under the following conditions: 

The product is damaged, defective, or incorrect upon delivery. 

The product is unused, in its original packaging, and in a resellable condition. 

A return request is made within  7 days of delivery. <br><br>

<h4>3. Non-Returnable Items</h4> 

Certain items are not eligible for return, including: 

Digital products and downloadable content. 

Services that have already been availed. 

Items purchased under final sale or promotional offers (unless stated otherwise). <br><br>

<h4>4. Return Process</h4> 

To request a return, follow these steps: 

Contact our support team at [support email] with your order details and reason for the return. 

Provide necessary proof, such as images of the product and packaging. 

Our team will review the request and provide further instructions. 

If approved, the product must be shipped back to the specified return address. 

Once received and inspected, a replacement or refund will be processed. <br><br>

<h4>5. Return Shipping</h4> 

Customers are responsible for return shipping costs unless the return is due to our error. 

A prepaid return label may be provided in specific cases. <br><br>

<h4>6. Refund Processing </h4>

Approved refunds will be processed within 7 business days after the returned product is received. 

Refunds will be issued to the original payment method used during the purchase. <br><br>

<h4>7. Cancellations </h4>

Customers can cancel their orders within 24 hours of purchase to receive a full refund. 

Cancellation requests beyond this period may not be accepted. <br><br>

<h4>8. Changes to This Return Policy </h4> 

We reserve the right to modify this policy at any time. Updates will be communicated via our platform. <br> 

For further assistance, contact us at info@gaugyanworld.com. 

 
   
          
       </article>
       </div>
      </section><!-- /Blog Details Section -->
</div>

    </div>

  </div>
</div>
  </main>
@endsection