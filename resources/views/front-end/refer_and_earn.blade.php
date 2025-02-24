@extends('front-end.Layout.maseter');
@section("body-section")
  <style>
    

.main {
    display: flex;
    justify-content: center;
    background: #e5b971;
    align-items: center;
    height: 70vh;
    text-align: center;
}

.container1 {
    background: #dcd1b7;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

h1 {
    color: #333;
    font-size: 22px;
}

p {
    color: #666;
    font-size: 14px;
    text-align:start;
    
}

.referral-code {
    background: #e3e3e3;
    padding: 10px;
    border-radius: 5px;
    margin: 10px 0;
    font-weight: bold;
    font-size: 18px;
    color: #333;
    text-align: center;
}

button {
    background: #e8980e;
    color: white;
    border: none;
    padding: 10px 15px;
    margin: 5px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    width: 100%;
}

button:hover {
    background: #e4a21e;
}
.contact-info a{
  display: flex;
  color: #555;
  text-align: start !important;
  align-items: start !important;
  position: relative;
  left: -5vh;

}
    </style>

</head>

<body class="index-page">

  


  <main class="main">

    <div class="container1">
        <h1>Refer and Earn</h1>
        <p>Share the referral code with your friends and earn rewards!</p>
        <div class="referral-code" id="referralCode">Loading...</div>
        <button onclick="copyReferralCode()">Copy Code</button>
        <button onclick="shareReferralCode()">Share Code</button>
    </div>
    <script>
        // Function to generate a random referral code
        function generateReferralCode() {
            let code = 'REF' + Math.random().toString(36).substring(2, 10).toUpperCase();
            document.getElementById("referralCode").textContent = code;
        }

        // Function to copy referral code to clipboard
        function copyReferralCode() {
            let code = document.getElementById("referralCode").textContent;
            navigator.clipboard.writeText(code).then(() => {
                alert("Referral code copied to clipboard!");
            });
        }

        // Function to share referral code (Web Share API)
        function shareReferralCode() {
            let code = document.getElementById("referralCode").textContent;
            if (navigator.share) {
                navigator.share({
                    title: 'Refer and Earn',
                    text: `Use my referral code: ${code} to get rewards!`,
                    url: window.location.href
                }).catch(error => {
                    alert("Sharing failed: " + error.message);
                });
            } else {
                alert("Sharing not supported on this device.");
            }
        }

        window.onload = generateReferralCode;
    </script>

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