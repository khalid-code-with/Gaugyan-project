@extends('front-end.Layout.maseter');
@section("body-section")
  <style>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
  </style>
</head>

<body class="index-page">


  

<main class="main">
    <div class="gaugyan-container">
        <!-- <h2 class="gaugyan-title">About GauGyaan</h2>-->
         <p class="gaugyan-text">
             Not available for now
         </p>
     </div>
</main>


  <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Preloader -->
    <div id="preloader"></div>
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
      function openFeedbackForm() {
          document.getElementById("feedback-container").style.display = "block";
      }
  </script>
  <script>
    function shareGauGyan() {
      const shareData = {
        title: 'GauGyan',
        text: 'Check out GauGyan, a platform promoting awareness and knowledge about cows and sustainable living!',
        url: window.location.href
      };
  
      if (navigator.share) {
        navigator.share(shareData)
          .then(() => console.log('Successfully shared!'))
          .catch((error) => console.log('Sharing failed:', error));
      } else {
        alert('Web Share is not supported on this device.');
      }
    }
  </script>
 
  </body>
  
  </html>
  @endsection