
<footer id="footer" class="footer dark-background">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-2">
              
                <!-- Existing content of your footer -->
  
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="{{ route('homepage') }}">Home</a></li>
                      <li><a href="{{ route('about_us') }}">About us</a></li>
                      <li><a href="{{ route('service_part') }}">Services</a></li>
                      <li><a href="{{ route('about_us') }}">Our Vision</a></li>
                      <li><a href="{{ route('term_condition') }}">Termms & Conditions</a></li>
                      
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 footer-links">
                  <h4>Policies & Terms</h4>
                  <ul>
                    <li><a href="{{ route('Privacy_policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('Disclaimber') }}">Disclaimer</a></li>
                    <li><a href="{{ route('refund_policy') }}">Refund Policy</a></li>
                    <li><a href="{{ route('shipping_policy') }}">Shipping Policy</a></li>
                    <li><a href="{{ route('Return_policy') }}">Return Policy</a></li>
                  </ul>
              </div>
  
                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li><a href="{{ route('cow_holistic_part') }}">Cow Holistic View</a></li>
                                <li><a href="{{ route('headings') }}">Healing & Meditation</a></li>
                                <li><a href="{{ route('santana') }}">Sanatan Values & culture</a></li>
                                <li><a href="{{ route('geeta') }}">Geeta,Vedpuran&spiritual</a></li>
                                <li><a href="{{ route('yoga') }}">Yoga & Fitness</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                          <h4 class="top_assign">Inspiration Hub</h4>
                            <ul>
                              <li><a href="{{ route('social_walfare') }}">Social Welfare by us</a></li>
                              <li><a href="{{ route('podcast') }}">Dialogues,podcast& Seminar</a></li>
                                <li><a href="{{ route('interview_questions') }}">Interviews,Motivations& Success Stories</a></li>
                                <li><a href="{{ route('great_persanility') }}">Great Personalities & Places</a></li>
                                <li><a href="{{ route('exam_content') }}">Exam Content for Scholarship & Prizes</a></li>
                                
                            </ul>
                       
                      </div>
                    </div>
                </div>
  
               <!-- Feedback button moved to center of the right side -->
               <div class="col-lg-2 col-md-1 text-center mt-4 d-flex align-items-center justify-content-end ms-auto feedback-button-container">
                <a href="{{ route('feedback') }}" class="feedback-button"><b>Click Here for Feedback and Enquiry</b></a>
              </div>
            </div>
        </div>
    </div>
    
    <div class="copyright text-center">
        <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
            <div class="d-flex flex-column align-items-center align-items-lg-start">
                
              <div class="description_at_bottom">
                © Copyright <strong><span>GauGyan</sp an></strong>. All Rights Reserved
            </div>
            <div class="credits">
            </div>
            </div>
            <div class="social-links order-first order-lg-last mb-2 mb-lg-0">
                <a href="https://twitter.com/gaugyanworld/" target="_blank"><i class="bi bi-twitter-x"></i></a>
                <a href="https://www.facebook.com/Gau-Gyan-World|Jaipur/" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/gaugyanworld/" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://wa.me/6367176883" target="_blank" rel="noopener noreferrer"><i class="bi bi-whatsapp"></i></a>
                <a href="https://www.youtube.com/@GaugyanWorld/" target="_blank"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>
  </footer>
  
  <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Preloader -->
    <div id="preloader"></div>
  
<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

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
