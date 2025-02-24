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
        <h1>Refund Policy</h1>
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
              <h2 class="title">Refund Policy
            </h2>
            <div class="content">
                  <p>
                   
1. Introduction<br>
This Refund Policy outlines the terms and conditions under which refunds are issued for purchases made through our platform. By using our platform, you agree to this policy and its terms.<br>
2. Eligibility for Refunds<br>
Refunds will only be processed under the following conditions:<br>
•	The service or product purchased is found to be defective, non-functional, or not delivered as promised.<br>
•	A cancellation request is made within the stipulated refund period.<br>
•	A duplicate payment was made due to a technical error.<br>
•	Any other valid reason deemed appropriate by our team.<br>
3. Non-Refundable Items<br>
Certain products and services may not be eligible for a refund, including but not limited to:<br>
•	Services that have already been availed or completed.<br>
•	Digital products that have been downloaded or accessed.<br>
•	Subscription-based services after the trial period has ended.<br>
•	Any purchase made using promotional offers or discounts unless explicitly stated otherwise.<br>
4. Refund Request Process<br>
To request a refund, follow these steps:<br>
1.	Contact our support team at [support email] with your order details and reason for the refund request.<br>
2.	Provide any necessary proof or documentation to support your claim.<br>
3.	Our team will review the request and respond within 7 business days.<br>
4.	If approved, the refund will be processed through the original payment method.<br>
5. Refund Processing Time<br>
Once approved, refunds will be processed within 7 business days. The time taken for the refund to reflect in your account may vary based on your payment provider.<br>
6. Cancellations<br>
Customers may cancel their orders within 24 hours of purchase to be eligible for a full refund. Cancellation requests beyond this period may not be accepted.<br>
7. Changes to This Refund Policy<br>
We reserve the right to modify this Refund Policy at any time. Any changes will be communicated through our platform or other official channels.<br>
For any further queries, please contact our customer support at info@gaugyanworld.com.



                  </p>
                 
                    
                    
                  
                  
           </article>
           </div>
          </section><!-- /Blog Details Section -->
</div>

        </div>

      </div>
    </div>

  </main>
@endsection