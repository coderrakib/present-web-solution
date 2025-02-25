<footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <!--<span class="sitename">BizLand</span>-->
            <img width="120" src="{{asset('assets/img/present_web_soluation_logo.png')}}" alt="logo">
          </a>
          <div class="footer-contact pt-3">
            <p>26/1 Mirpur-1, Dhaka, 1216</p>
            <p></p>
            <p class="mt-3"><strong>Phone:</strong> <span>+880 1740006203</span></p>
            <p><strong>Email:</strong> <span>presentwebsolution@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a wire:navigate href="{{route('about')}}">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{route('using-technology')}}">Using Technology</a></li>
            <li><i class="bi bi-chevron-right"></i> <a wire:navigate href="{{route('faq')}}">FAQ</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Digital Marketing</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Software</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Graphics</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">SEO Backlink</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Onpage SEO</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Technical SEO</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Follow our social link and check our activites</p>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="pinterest"><i class="bi bi-pinterest"></i></a>
            <a href="#" class="quora"><i class="bi bi-quora"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Present Web Solution</strong> <span>All Rights Reserved</span></p>
    </div>
</footer>
