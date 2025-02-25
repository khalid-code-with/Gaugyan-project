@extends('front-end.Layout.maseter')
@section("body-section")
@section('title', 'Gaugyan | Shipping Policy')
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
          <h1>Shipping Policy</h1>
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
          <h2 class="title">Shipping Policy           
        </h2>
        <div class="content">
              <p>
                <h4>1. Introduction <br></h4>

                This Shipping Policy outlines the terms and conditions regarding the shipping and delivery of products purchased from our platform. By placing an order, you agree to this policy.<br> 
                
                <h4>2. Shipping Locations <br></h4>
                
                We currently ship to all major cities and towns in India. International shipping is available to select countries. <br>
                
               <h4> 3. Processing Time <br></h4>
                
                Orders are processed within 1-2 business days after payment confirmation. <br>
                
                Processing times may vary during peak seasons, holidays, or due to unforeseen circumstances. <br><br/>
                <h4>4. Shipping Methods</h4>
                <table>
                    <thead>
                      <tr>
                        <th>Shipping Method</th>
                        <th>Estimated Delivery Time</th>
                        <th>Cost</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Standard Shipping</td>
                        <td>5-7 business days</td>
                        <td>₹50</td>
                      </tr>
                      <tr>
                        <td>Express Shipping</td>
                        <td>2-4 business days</td>
                        <td>₹150</td>
                      </tr>
                      <tr>
                        <td>International Shipping</td>
                        <td>7-15 business days</td>
                        <td>Varies (Based on country)</td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                 <h4> 5. Free Shipping</h4> 

                  We offer free standard shipping on orders above ₹999 within India. <br>
                  
                  Express shipping charges apply regardless of order value. <br>
                  
                 <br> <h4>6. Order Tracking </h4>
                  
                  Once your order is shipped, you will receive a tracking number via email/SMS. <br>
                  
                  You can track your order on our website or through the courier’s tracking portal. <br><br>
                  
                  <h4> 7. Undelivered Orders</h4> 
                  
                  If an order is undelivered due to an incorrect address, multiple failed delivery attempts, or refusal to accept, the customer will be responsible for re-shipping fees. <br>
                  <br>
                  <h4> 8. International Shipping & Customs</h4> 
                  
                  International orders may be subject to customs duties, taxes, or import fees imposed by the destination country. <br>
                  
                  Customers are responsible for paying any applicable customs charges. <br><br>
                  
                  <h4> 9. Delayed or Lost Shipments <br></h4>
                  
                  If your order is delayed beyond the estimated delivery time, please contact us at [support email]. <br>
                  
                  In case of a lost shipment, we will work with the courier to resolve the issue or provide a replacement/refund if applicable. <br>
                  
                  <br> <h4>10. Changes to This Shipping Policy <br></h4>
                  
                  We reserve the right to modify this Shipping Policy at any time. Updates will be communicated through our platform. <br><br>
                  
                  For any queries, reach out to info@gaugyanworld.com. <br>
   
          
       </article>
       </div>
      </section><!-- /Blog Details Section -->
</div>
    </div>

  </div>
</div>
  </main>

@endsection