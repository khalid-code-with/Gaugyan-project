@extends('front-end.Layout.maseter');
@section("body-section")
  <style>
    .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
            flex-grow: 1;
        }

        .product {
            background-color: #ffffff;
            border: 1px solid #f54b21;
            border-radius: 10px;
            margin: 15px;
            padding: 20px;
            text-align: center;
            width: calc(33.333% - 40px); /* Ensures 3 products per row */
            box-sizing: border-box;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .product-image {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .product-info {
            margin-top: 10px;
        }

        .product-name {
            font-size: 1.3em;
            color: #333;
            margin: 10px 0;
        }

        .product-price {
            color: #e60000;
            font-size: 1.2em;
            margin: 10px 0;
        }

        .quantity {
            width: 60px;
            padding: 5px;
            font-size: 1em;
            margin-top: 10px;
            border: 1px solid #dddddd;
            border-radius: 5px;
        }

        /* Responsive design */
        @media (max-width: 1200px) {
            .product {
                width: calc(50% - 30px); /* 2 products per row on medium screens */
            }
        }

        @media (max-width: 768px) {
            .product {
                width: calc(100% - 30px); /* 1 product per row on small screens */
            }
        }

  </style>
 
</head>

<body class="index-page">
 


<main>
    <div class="container">
        <div class="product">
            <img src="product1.jpg" alt="Product 1" class="product-image">
            <div class="product-info">
                <h3 class="product-name">Product 1</h3>
                <p class="product-price">$10.00</p>
                <input type="number" class="quantity" value="1" min="1" placeholder="Enter quantity">
            </div>
        </div>
        <div class="product">
            <img src="product2.jpg" alt="Product 2" class="product-image">
            <div class="product-info">
                <h3 class="product-name">Product 2</h3>
                <p class="product-price">$20.00</p>
                <input type="number" class="quantity" value="1" min="1"placeholder="Enter quantity">
            </div>
        </div>
        <div class="product">
            <img src="product3.jpg" alt="Product 3" class="product-image">
            <div class="product-info">
                <h3 class="product-name">Product 3</h3>
                <p class="product-price">$15.00</p>
                <input type="number" class="quantity" value="1" min="1"placeholder="Enter quantity">
            </div>
        </div>
        <div class="product">
            <img src="product4.jpg" alt="Product 4" class="product-image">
            <div class="product-info">
                <h3 class="product-name">Product 4</h3>
                <p class="product-price">$25.00</p>
                <input type="number" class="quantity" value="1" min="1"placeholder="Enter quantity">
            </div>
        </div>
        <div class="product">
            <img src="product5.jpg" alt="Product 5" class="product-image">
            <div class="product-info">
                <h3 class="product-name">Product 5</h3>
                <p class="product-price">$30.00</p>
                <input type="number" class="quantity" value="1" min="1" placeholder="Enter quantity">
                
            </div>
        </div>
        <div class="product">
            <img src="product6.jpg" alt="Product 6" class="product-image">
            <div class="product-info">
                <h3 class="product-name">Product 6</h3>
                <p class="product-price">$35.00</p>
                <input type="number" class="quantity" value="1" min="1" placeholder="Enter quantity">
            </div>
        </div>
        <div class="product">
            <img src="product7.jpg" alt="Product 7" class="product-image">
            <div class="product-info">
                <h3 class="product-name">Product 7</h3>
                <p class="product-price">$15.00</p>
                <input type="number" class="quantity" value="1" min="1" placeholder="Enter quantity">
            </div>
        </div>
        <div class="product">
            <img src="product8.jpg" alt="Product 8" class="product-image">
            <div class="product-info">
                <h3 class="product-name">Product 8</h3>
                <p class="product-price">$15.00</p>
                <input type="number" class="quantity" value="1" min="1" placeholder="Enter quantity">
             </div>
        </div>     
        <div class="product">
            <img src="product9.jpg" alt="Product 9" class="product-image">
            <div class="product-info">
                <h3 class="product-name">Product 9</h3>
                <p class="product-price">$15.00</p>
                <input type="number" class="quantity" value="1" min="1" placeholder="Enter quantity">
            </div>
        </div> 
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