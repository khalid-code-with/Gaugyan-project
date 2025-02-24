@extends('front-end.Layout.maseter');
@section("body-section")
  <style>
    body {
        font-family: 'Open Sans', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    main.container {
        display: flex;
        justify-content: space-around;
        padding: 20px;
        flex-grow: 1;
    }

    .category {
        background-color: hwb(21 16% 2% / 0.952);
        border: 1px solid #ddd;
        border-radius: 10px;
        margin: 15px;
        padding: 20px;
        text-align: center;
        width: calc(40% - 30px); /* Adjusted container size */
        box-sizing: border-box;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
    }

    .category:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .category img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 5px;
        transition: transform 0.3s ease-in-out;
    }

    .category:hover img {
        transform: scale(1.1);
    }

    .category h3 {
        font-size: 1.5em;
        color: #333;
        margin: 10px 0;
    }

    .category .btn {
        background-color: #ff6600;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 10px;
    }

    .category .btn:hover {
        background-color: #d6cfcb;
    }

    @media (max-width: 768px) {
        main.container {
            flex-direction: column;
            align-items: center;
        }

        .category {
            width: 80%; /* Full width on small screens */
        }
    }
  

</style>
 
</head>

<body class="index-page">

  


    <main class="container">
        <div class="category">
            <img src="assets/img/unst1.jpg" alt="unstitched fabric">
            <h3>Unstitched Fabric</h3>
            <a href="shop.html" class="btn">Read More</a>
        </div>
        <div class="category">
            <img src="assets/img/dup11.jpg" alt="Dupattas">
            <h3>Dupattas</h3>
            <a href="shop.html" class="btn">Read More</a>
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
