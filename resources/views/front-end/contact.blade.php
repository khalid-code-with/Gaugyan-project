@extends('front-end.Layout.maseter')
@section("body-section")


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <!-- jQuery Library -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- jQuery Validation Plugin -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
          integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"></script>




  <style>
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
    /* this is show the validation error  */
    .error {
      color:#FFFFFF; 
      font-size: 15px;
     position: relative;
     top: 5px;
    }
  </style>
</head>

<body class="index-page">
<main class="main">


  <!-- Page Title -->
  <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg1.jpg);">
    <div class="container position-relative">
      <h1>Contact</h1>
     
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ route('homepage') }}">Home</a></li>
          <li class="current">Contact</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->
  @if(session('send'))
  <div id="successMessage" class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('send') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<!-- Contact Section -->

<section id="contact" class="contact section">

<div class="c" style="background-color: rgb(254, 155, 63); margin:auto"; data-aos="fade">

  <div class="row gy-5 gx-lg-5">

    <div class="col-lg-4">

      <div class="info">
        <h3>Address</h3>
        <p>PLOT NO 20 BHAIRU NAGAR, KALWAR ROAD, HATHOJ, JAIPUR, RAJASTHAN, 302012</p>

        <div class="info-item d-flex">
          <a href="tel:+91 6367176883" target="_blank" rel="noopener noreferrer"class="d-flex align-items-center">
          <i class="bi bi-telephone flex-shrink-0"></i> <!-- Changed the icon to WhatsApp -->
          <div>
            <h4>+91 6367176883</h4> <!-- Changed the header to a more appropriate label -->
            <!-- Removed the paragraph -->
          </div>
        </div><!-- End Info Item -->
            

        <div class="info-item d-flex">
          <a href="https://wa.me/6367176883" target="_blank" rel="noopener noreferrer"class="d-flex align-items-center">
          <i class="bi bi-whatsapp flex-shrink-0"></i> <!-- Changed the icon to WhatsApp -->
          <div>
            <h4>WhatsApp</h4> <!-- Changed the header to a more appropriate label -->
            <!-- Removed the paragraph -->
          </div>
        </div><!-- End Info Item -->
            

        <div class="info-item d-flex">
          <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" class="d-flex align-items-center">
          <i class="bi bi-instagram flex-shrink-0"></i> <!-- Changed the icon to Instagram -->
          <div>
            <h4>Instagram</h4> <!-- Changed the header to a more appropriate label -->
            <!-- Removed the paragraph -->
          </div>
        </div><!-- End Info Item -->
        

        <div class="info-item d-flex">
          <a href="https://www.instagram.com/gaugyanworld/" target="_blank"  rel="noopener noreferrer"class="d-flex align-items-center">
            <i class="bi bi-facebook flex-shrink-0"></i> <!-- Changed the icon to Facebook -->
            <div>
              <h4>Facebook</h4> <!-- Changed the header to a more appropriate label -->
              
            </div>
          </a>
        </div><!-- End Info Item -->
      </div>
      <div  class="info" style="display: flex; background-color: rgb(254, 155, 63);">
        <h4 class="font-weight-semi-bold text-primary mb-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3556.3388459214766!2d75.6845254!3d26.9561669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4ddc087b70b3%3A0xa4bf76513fbaff26!2sGaugyan%20Productions%20LLP!5e0!3m2!1sen!2sin!4v1739949245230!5m2!1sen!2sin"
            class="map_controlling"allowfullscreen=""
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
       
      </div>
    </div>


    <div class="col-lg-8">
      <form action="storedata" method="post" role="form" class="php-email-form"id="addBlog">
        @csrf
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  style="color: black;">
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control email_control_form " name="email" id="email" placeholder="Your Email"  style="color: black;">
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"   style="color: black;">
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" placeholder="Message" ></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Send Message</button>
      </div>
      </form>
    </div><!-- End Contact Form -->
  </div>
</div>
</section>

</main> 

<script>
  $(document).ready(function () {
    $("#addBlog").validate({
      rules: {
        name: {
          required: true,
        },
        email: {
          required: true,
          email: true,
        },
        subject: {
          required: true,
        },
        message:{
          required: true,
      }
      },
      messages: {
        name: {
          required: "Please enter your name",
        },
        email: {
          required: "Please enter your email",
          email:   "Please enter your correct email",
        },
        subject: {
          required: "Please Enter your subject",
        },
        message:{
          required: "Please Enter your message",
        }
      },
      errorPlacement: function (error, element) {
        error.insertAfter(element);
      },
      submitHandler: function (form) {
        alert("Are you send your data");
        form.submit();
      },
      
    });

    // shwo the message on top only for 5 second 
  $(document).ready(function () {
      setTimeout(function () {
          $("#successMessage").fadeOut("slow");
      }, 5000);
  });

  });
</script>

@endsection
  
