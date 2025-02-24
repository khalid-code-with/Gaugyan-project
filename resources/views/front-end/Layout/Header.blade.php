<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - GauGyan</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo.jpg') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main1.css') }}" rel="stylesheet">
</head> 
<body class="index-page">
  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-left justify-content-between">
      
      <div id="mySidenav" class="sidenav">

        
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
     <!--   <a href="#">My Profile</a>
        <a href="#">My Exams</a>
        <a href="#">My Certification</a>
        <a href="#">My Vouchers</a>
        <a href="#">My Enquiry</a>
        <a href="#">My Orders</a>
        <a href="privacy_policy.html">Privacy Policy</a>   -->
        <a href="refer_and_earn.html">Refer & Earn</a>
        <a href="javascript:void(0)" onclick="shareGauGyan()">Share GauGyan</a>
        <!-- Link to open the modal -->
       <a href="#" id="openModal">Help & Support</a>

        <!-- Modal structure -->
      <div class="modal" id="formModal">
       <div class="modal-content">
      <span class="close" id="closeModal">&times;</span>
      <h2>Contact Form</h2>

      <!-- Contact information section -->
      <div class="contact-info">
        <p>Email us at: <a href="mailto:example@example.com">gaugyanworld@gmail.com</a></p>
        <p>Call us: <a href="tel:+1234567890">+91 6367176883</a></p>
      </div>
    </div>
  </div>
  <script>
    const modal = document.getElementById('formModal');
    document.getElementById('openModal').addEventListener('click', (e) => {
      e.preventDefault();
      modal.style.display = 'flex';
    });

    document.getElementById('closeModal').addEventListener('click', () => {
      modal.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });
  </script>
        <a href="concept.html">Concept Of GauGyan</a>
      </div>
    
     <span style="font-size:30px;cursor:pointer"class="sidebar_three_dots" onclick="openNav()">&#9776; </span>
      <a href="index.html">
        <img src="assets/img/one.jpg" alt="Logo" class="sidenav-logo"> </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('homepage') }}"class="active">Home</a></li>
          <li><a href="{{ route('about_us') }}">About Us</a></li>
          <li><a href="{{ route('service_part') }}">Services</a></li> 
          <li><a href="{{ route('nearest_goshala') }}">Nearest Gaushala</a></li>
          <li><a href="{{ route('contact_page') }}">Contact</a></li>
          <li><a href="https://play.google.com/store/apps/details?id=com.gaugyan.gaushala ">Download app</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>