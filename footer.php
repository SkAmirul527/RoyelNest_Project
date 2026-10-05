<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<footer id="footer" class="footer position-relative dark-background">

<div class="footer-top">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="logo d-flex align-items-center">
          <span class="sitename">RoyalNest</span>
        </a>
        <div class="footer-contact pt-3">
          <p>721401, Contai</p>
          <p>Contai, Purba Medinipur, west Bengal</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+91 9635449671</span></p>
          <p><strong>Email:</strong> <span>RoyalNest@gmail.com</span></p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_title('Rooms')); ?>">Rooms</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_title('Facility')); ?>">Facility</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_title('Gallery')); ?>">Gallery</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_title('Events')); ?>">Events</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_title('About Us')); ?>">About Us</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_title('Contact Us')); ?>">Contact Us</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><a href="<?php echo get_permalink(get_page_by_title('24/7 Customer Support')); ?>">24/7 Customer Support</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_title('Room Service')); ?>">Room Service</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_title('Event & Banquet Booking')); ?>">Event & Banquet Booking</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_title('Housekeeping Service')); ?>">Housekeeping Service</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_title('Spa & Wellness')); ?>">Spa & Wellness</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Our location</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29640.64149325604!2d87.72926301452516!3d21.77715737420148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0326e5394d8237%3A0x7bb6b4d525857f71!2sContai%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1778841076870!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>

      </div>

    </div>
  </div>
</div>

<div class="copyright text-center">
  <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

    <div class="d-flex flex-column align-items-center align-items-lg-start">
      <div>
        © Copyright <strong><span>MyWebsite</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

    <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
      <a href=""><i class="bi bi-twitter-x"></i></a>
      <a href=""><i class="bi bi-facebook"></i></a>
      <a href=""><i class="bi bi-instagram"></i></a>
      <a href=""><i class="bi bi-linkedin"></i></a>
    </div>

  </div>
</div>

</footer>
<!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>
</html>
