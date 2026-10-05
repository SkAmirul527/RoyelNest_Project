<?php
get_header();
?>
<!DOCTYPE html>
<html lang="en">
<body class="index-page">
  <main class="main">

    <!-- Hotel Hero Section -->
    <section id="hotel-hero" class="hotel-hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="hero-content">
              <h1>Luxury Redefined in Every Stay</h1>
              <p class="lead">Experience royal comfort and timeless elegance at RoyalNest, where every stay feels extraordinary.</p>
              <div class="hero-features">
                <div class="feature-item">
                  <i class="bi bi-wifi"></i>
                  <span>Complimentary WiFi</span>
                </div>
                <div class="feature-item">
                  <i class="bi bi-car-front"></i>
                  <span>Valet Parking</span>
                </div>
                <div class="feature-item">
                  <i class="bi bi-cup-hot"></i>
                  <span>24/7 Room Service</span>
                </div>
              </div>
              <div class="hero-buttons">
                <a href="<?php echo get_permalink(get_page_by_title('Booking')); ?>" class="btn btn-primary">Book Now</a>
                <a href="<?php echo get_permalink(get_page_by_title('Rooms')); ?>" class="btn btn-outline">View Rooms</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="hero-images">
              <div class="main-image">
                <img src=" <?php echo get_template_directory_uri(); ?>/assets/hotel/showcase-3.webp" alt="Luxury Hotel" class="img-fluid">
              </div>
              <div class="floating-card" data-aos="zoom-in" data-aos-delay="400">
                <div class="card-content">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <h6>Exceptional Experience</h6>
                  <p>At RoyalNest, every detail is thoughtfully designed to deliver comfort, elegance, and unforgettable moments throughout your stay.</p>
                  <div class="guest-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person/person-f-3.webp" alt="Guest" class="guest-avatar">
                    <span>Sarah Johnson</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="hero-stats" data-aos="fade-up">
          <div class="row text-center">
            <div class="col-md-3 col-6">
              <div class="stat-item">
                <span class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1">150</span>
                <span class="stat-label">Luxury Rooms</span>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="stat-item">
                <span class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1">5</span>
                <span class="stat-label">Star Rating</span>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="stat-item">
                <span class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1">24</span>
                <span class="stat-label">Hour Service</span>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="stat-item">
                <span class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="1">98</span>
                <span class="stat-label">Guest Satisfaction</span>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hotel Hero Section -->

    <!-- About Home Section -->
    <section id="about-home" class="about-home section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="about-content">
              <h2>Welcome to RoyalNest</h2>
              <p class="lead">Where luxury meets tranquility in the heart of nature's paradise.</p>
              <p>Nestled among rolling hills and pristine landscapes, RoyalNest has been offering exceptional hospitality for over three decades. Our commitment to excellence and attention to detail creates an unforgettable experience for discerning travelers seeking both comfort and adventure.</p>
              <p>From our elegantly appointed suites to our world-class amenities, every aspect of your stay is designed to exceed expectations. Discover breathtaking views, exquisite dining, and personalized service that makes every moment special.</p>

              <div class="stats-row">
                <div class="stat-item">
                  <div class="stat-number">185</div>
                  <div class="stat-label">Luxury Rooms</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">98%</div>
                  <div class="stat-label">Guest Satisfaction</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">30</div>
                  <div class="stat-label">Years of Excellence</div>
                </div>
              </div><!-- End Stats Row -->

              <div class="about-actions">
                <a href="<?php echo get_permalink(get_page_by_title('About Us')); ?>" class="btn-primary">Our Story</a>
                <a href="<?php echo get_permalink(get_page_by_title('Rooms')); ?>" class="btn-secondary">View Rooms</a>
              </div>
            </div>
          </div><!-- End About Content -->

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-images">
              <div class="main-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/showcase-8.webp" alt="Grandview Resort Main View" class="img-fluid">
              </div>
              <div class="secondary-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/room-12.webp" alt="Luxury Suite Interior" class="img-fluid">
              </div>
              <div class="experience-badge">
                <div class="badge-content">
                  <span class="badge-number">30+</span>
                  <span class="badge-text">Years<br>Experience</span>
                </div>
              </div>
            </div>
          </div><!-- End About Images -->

        </div>

      </div>

    </section><!-- /About Home Section -->

    <!-- Rooms Showcase Section -->
    <section id="rooms-showcase" class="rooms-showcase section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Rooms</span>
        <h2>Rooms</h2>
        <p>Thoughtfully crafted rooms where comfort, style, and tranquility come together.</p>
      </div><!-- End Section Title -->

  
      <div class="row mt-6">

<?php
$args = array(
  'post_type'      => 'room',
  'posts_per_page' => 4, // Show only 4 rooms on the homepage
);

$rooms = new WP_Query($args);

if ($rooms->have_posts()) :
  $delay = 400;
  while ($rooms->have_posts()) : $rooms->the_post();
?>

  <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
    <div class="minimal-room-card">

      <div class="room-image">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('medium_large', ['class' => 'img-fluid']); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/room-1.webp" class="img-fluid" alt="<?php the_title(); ?>">
        <?php endif; ?>

        <div class="hover-overlay">
          <a href="<?php the_permalink(); ?>" class="view-room">
            <i class="bi bi-eye"></i>
          </a>
        </div>
      </div>

      <div class="room-summary">
        <h5><?php the_title(); ?></h5>

        <!-- OPTIONAL PRICE (Custom Field) -->
        <?php if (get_post_meta(get_the_ID(), 'room_price', true)) : ?>
          <div class="price-tag">
            $<?php echo esc_html(get_post_meta(get_the_ID(), 'room_price', true)); ?>
            <span>/night</span>
          </div>
        <?php endif; ?>

        <div class="basic-amenities">
          <i class="bi bi-wifi"></i>
          <i class="bi bi-tv"></i>
          <i class="bi bi-snow"></i>
        </div>
      </div>

    </div>
  </div>

<?php
  $delay += 50;
  endwhile;
  wp_reset_postdata();
else :
  echo '<p class="text-center">No rooms found.</p>';
endif;
?>

</div>

<!-- EXPLORE ALL ROOMS BUTTON -->
<div class="text-center mt-5">
  <a href="<?php echo home_url('/rooms'); ?>" class="btn btn-dark px-5 py-3 rounded-pill">
    Explore All Rooms
  </a>
</div>

    </section><!-- /Rooms Showcase Section -->

    <!-- Amenities Cards Section -->
    <section id="amenities-cards" class="amenities-cards section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Amenities</span>
        <h2>Amenities</h2>
        <p>Thoughtfully curated amenities designed to elevate your stay with comfort, style, and sophistication.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="facility-card">
              <div class="facility-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/amenities-1.webp" alt="Wireless Internet" class="img-fluid">
                <div class="facility-overlay">
                  <i class="bi bi-wifi"></i>
                </div>
              </div>
              <div class="facility-info">
                <h4>High-Speed Internet</h4>
                <p>Seamless, high-speed connectivity to keep you effortlessly connected throughout your stay.</p>
                <div class="facility-features">
                  <span><i class="bi bi-check-circle"></i> 24/7 Available</span>
                  <span><i class="bi bi-check-circle"></i> High Speed</span>
                </div>
              </div>
            </div>
          </div><!-- End Facility Card -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
            <div class="facility-card">
              <div class="facility-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/amenities-3.webp" alt="Swimming Pool" class="img-fluid">
                <div class="facility-overlay">
                  <i class="bi bi-droplet"></i>
                </div>
              </div>
              <div class="facility-info">
                <h4>Rooftop Pool</h4>
                <p>An elegant rooftop escape offering serene views and refined relaxation.</p>
                <div class="facility-features">
                  <span><i class="bi bi-check-circle"></i> Heated Pool</span>
                  <span><i class="bi bi-check-circle"></i> City Views</span>
                </div>
              </div>
            </div>
          </div><!-- End Facility Card -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="facility-card">
              <div class="facility-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/amenities-5.webp" alt="Valet Parking" class="img-fluid">
                <div class="facility-overlay">
                  <i class="bi bi-car-front"></i>
                </div>
              </div>
              <div class="facility-info">
                <h4>Valet Parking</h4>
                <p>Effortless arrivals and departures with discreet, professional valet service.</p>
                <div class="facility-features">
                  <span><i class="bi bi-check-circle"></i> Secure</span>
                  <span><i class="bi bi-check-circle"></i> Valet Service</span>
                </div>
              </div>
            </div>
          </div><!-- End Facility Card -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="facility-card">
              <div class="facility-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/amenities-2.webp" alt="Fitness Center" class="img-fluid">
                <div class="facility-overlay">
                  <i class="bi bi-heart-pulse"></i>
                </div>
              </div>
              <div class="facility-info">
                <h4>Modern Fitness Center</h4>
                <p>A fully equipped fitness space designed for wellness, balance, and performance.</p>
                <div class="facility-features">
                  <span><i class="bi bi-check-circle"></i> 24/7 Access</span>
                  <span><i class="bi bi-check-circle"></i> Personal Training</span>
                </div>
              </div>
            </div>
          </div><!-- End Facility Card -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="facility-card">
              <div class="facility-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/dining-2.webp" alt="Fine Dining" class="img-fluid">
                <div class="facility-overlay">
                  <i class="bi bi-cup-hot"></i>
                </div>
              </div>
              <div class="facility-info">
                <h4>Signature Restaurant</h4>
                <p>Exquisite dining experiences crafted with premium ingredients and refined flavors.</p>
                <div class="facility-features">
                  <span><i class="bi bi-check-circle"></i> Fine Dining</span>
                  <span><i class="bi bi-check-circle"></i> Wine Selection</span>
                </div>
              </div>
            </div>
          </div><!-- End Facility Card -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
            <div class="facility-card">
              <div class="facility-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/amenities-4.webp" alt="Spa Services" class="img-fluid">
                <div class="facility-overlay">
                  <i class="bi bi-flower1"></i>
                </div>
              </div>
              <div class="facility-info">
                <h4>Luxury Spa</h4>
                <p>A tranquil sanctuary offering personalized treatments for complete rejuvenation.</p>
                <div class="facility-features">
                  <span><i class="bi bi-check-circle"></i> Full Service</span>
                  <span><i class="bi bi-check-circle"></i> Wellness Programs</span>
                </div>
              </div>
            </div>
          </div><!-- End Facility Card -->

        </div>

      </div>

    </section><!-- /Amenities Cards Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Testimonials</span>
        <h2>Testimonials</h2>
        <p>Stories of memorable stays, thoughtful service, and timeless luxury at RoyalNest.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonials-wrapper">

          <div class="row g-4">

            <!-- Testimonial Item 1 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="testimonial-card">
                <div class="quote-mark">
                  <i class="bi bi-quote"></i>
                </div>
                <div class="testimonial-content">
                  <p>RoyalNest represents the perfect balance of elegance, comfort, and personalized hospitality.
Every guest experience is thoughtfully designed to feel warm, memorable, and truly premium.</p>
                </div>
                <div class="testimonial-author">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person/person-m-5.webp" alt="Client" class="img-fluid rounded-circle" loading="lazy">
                  <div class="author-info">
                    <h4>Robert Johnson</h4>
                    <span>Chief Executive Officer</span>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <!-- Testimonial Item 2 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <div class="testimonial-card">
                <div class="quote-mark">
                  <i class="bi bi-quote"></i>
                </div>
                <div class="testimonial-content">
                  <p>RoyalNest is more than a hotel — it is a luxury brand built on trust, style, and exceptional service.
Guests don’t just stay here, they connect with the experience.</p>
                </div>
                <div class="testimonial-author">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person/person-f-7.webp" alt="Client" class="img-fluid rounded-circle" loading="lazy">
                  <div class="author-info">
                    <h4>Sarah Williams</h4>
                    <span>Marketing Director</span>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <!-- Testimonial Item 3 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
              <div class="testimonial-card">
                <div class="quote-mark">
                  <i class="bi bi-quote"></i>
                </div>
                <div class="testimonial-content">
                  <p>At RoyalNest, every room and service is curated with attention to detail.
Comfort, innovation, and guest satisfaction guide every decision we make.</p>
                </div>
                <div class="testimonial-author">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person/person-m-9.webp" alt="Client" class="img-fluid rounded-circle" loading="lazy">
                  <div class="author-info">
                    <h4>Michael Davis</h4>
                    <span>Product Manager</span>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <!-- Testimonial Item 4 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
              <div class="testimonial-card">
                <div class="quote-mark">
                  <i class="bi bi-quote"></i>
                </div>
                <div class="testimonial-content">
                  <p>The spaces at RoyalNest are crafted to feel calm, refined, and welcoming.
                  Our design philosophy blends modern luxury with a sense of home.</p>
                </div>
                <div class="testimonial-author">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person/person-f-3.webp" alt="Client" class="img-fluid rounded-circle" loading="lazy">
                  <div class="author-info">
                    <h4>Emily Thompson</h4>
                    <span>Design Lead</span>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Events Cards Section -->
    <section id="events-cards" class="events-cards section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Events</span>
        <h2>Events</h2>
        <p>RoyalNest offers premium spaces and services for weddings, meetings, and memorable celebrations.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

          <div class="col-lg-4 col-md-6">
            <div class="event-item" data-aos="fade-up" data-aos-delay="100">
              <div class="event-header">
                <div class="event-icon">
                  <i class="bi bi-heart-fill"></i>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/event-1.webp" alt="Wedding Celebrations" class="img-fluid">
              </div>
              <div class="event-content">
                <h4>Wedding Celebrations</h4>
                <p>
Where timeless romance meets royal elegance, creating weddings that are truly unforgettable.
</p>
                <div class="event-features">
                  <span class="feature-item"><i class="bi bi-check-circle"></i> Premium Venues</span>
                  <span class="feature-item"><i class="bi bi-check-circle"></i> Full Catering</span>
                </div>
                <a href="<?php echo home_url('/events'); ?>" class="event-link">
                  Explore Details <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Event Item -->

          <div class="col-lg-4 col-md-6">
            <div class="event-item" data-aos="fade-up" data-aos-delay="200">
              <div class="event-header">
                <div class="event-icon">
                  <i class="bi bi-building"></i>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/event-4.webp" alt="Business Conferences" class="img-fluid">
              </div>
              <div class="event-content">
                <h4>Business Conferences</h4>
                <p>
Refined spaces equipped with modern facilities for seamless and impactful corporate events.
</p>
                <div class="event-features">
                  <span class="feature-item"><i class="bi bi-check-circle"></i> Modern Tech</span>
                  <span class="feature-item"><i class="bi bi-check-circle"></i> WiFi Access</span>
                </div>
                <a href="<?php echo home_url('/events'); ?>" class="event-link">
                  Explore Details <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Event Item -->

          <div class="col-lg-4 col-md-6">
            <div class="event-item" data-aos="fade-up" data-aos-delay="300">
              <div class="event-header">
                <div class="event-icon">
                  <i class="bi bi-calendar-event"></i>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/event-8.webp" alt="Special Occasions" class="img-fluid">
              </div>
              <div class="event-content">
                <h4>Special Occasions</h4>
                <p>
Thoughtfully designed settings that elevate every celebration with style and sophistication.
</p>
                <div class="event-features">
                  <span class="feature-item"><i class="bi bi-check-circle"></i> Custom Setup</span>
                  <span class="feature-item"><i class="bi bi-check-circle"></i> Event Coordination</span>
                </div>
                <a href="<?php echo home_url('/events'); ?>" class="event-link">
                  Explore Details <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Event Item -->

          <div class="col-lg-4 col-md-6">
            <div class="event-item" data-aos="fade-up" data-aos-delay="100">
              <div class="event-header">
                <div class="event-icon">
                  <i class="bi bi-people"></i>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/event-5.webp" alt="Corporate Retreats" class="img-fluid">
              </div>
              <div class="event-content">
                <h4>Corporate Retreats</h4>
                <p>
An inspiring blend of comfort and privacy, ideal for focused discussions and team connections.
</p>
                <div class="event-features">
                  <span class="feature-item"><i class="bi bi-check-circle"></i> Team Building</span>
                  <span class="feature-item"><i class="bi bi-check-circle"></i> Outdoor Activities</span>
                </div>
                <a href="<?php echo home_url('/events'); ?>" class="event-link">
                  Explore Details <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Event Item -->

          <div class="col-lg-4 col-md-6">
            <div class="event-item" data-aos="fade-up" data-aos-delay="200">
              <div class="event-header">
                <div class="event-icon">
                  <i class="bi bi-music-note-beamed"></i>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/event-6.webp" alt="Entertainment Events" class="img-fluid">
              </div>
              <div class="event-content">
                <h4>Entertainment Events</h4>
                <p>Stylish venues crafted for vibrant performances and unforgettable entertainment experiences.
</p>
                <div class="event-features">
                  <span class="feature-item"><i class="bi bi-check-circle"></i> Live Music</span>
                  <span class="feature-item"><i class="bi bi-check-circle"></i> Dance Floor</span>
                </div>
                <a href="<?php echo home_url('/events'); ?>" class="event-link">
                  Explore Details <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Event Item -->

          <div class="col-lg-4 col-md-6">
            <div class="event-item" data-aos="fade-up" data-aos-delay="300">
              <div class="event-header">
                <div class="event-icon">
                  <i class="bi bi-star"></i>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/event-9.webp" alt="VIP Gatherings" class="img-fluid">
              </div>
              <div class="event-content">
                <h4>VIP Gatherings</h4>
                <p>
Exclusive environments offering discreet service, bespoke details, and refined luxury.
</p>
                <div class="event-features">
                  <span class="feature-item"><i class="bi bi-check-circle"></i> Exclusive Access</span>
                  <span class="feature-item"><i class="bi bi-check-circle"></i> Premium Service</span>
                </div>
                <a href="<?php echo home_url('/events'); ?>" class="event-link">
                  Explore Details <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Event Item -->

        </div>

      </div>

    </section><!-- /Events Cards Section -->

  

    <!-- Gallery Showcase Section -->
    <section id="gallery-showcase" class="gallery-showcase section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Gallery</span>
        <h2>Gallery</h2>
        <p>Explore the elegance, comfort, and timeless beauty of RoyalNest through our curated gallery.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="gallery-carousel swiper init-swiper" data-aos="fade-up" data-aos-delay="200">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 3000
              },
              "slidesPerView": 1,
              "spaceBetween": 20,
              "centeredSlides": true,
              "breakpoints": {
                "576": {
                  "slidesPerView": 2,
                  "centeredSlides": false
                },
                "768": {
                  "slidesPerView": 3,
                  "centeredSlides": false
                },
                "992": {
                  "slidesPerView": 4,
                  "centeredSlides": false
                },
                "1200": {
                  "slidesPerView": 5,
                  "centeredSlides": false
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-1.webp" alt="Luxurious Suite" class="img-fluid" loading="lazy">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-1.webp" class="gallery-overlay glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-5.webp" alt="Modern Lobby" class="img-fluid" loading="lazy">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-5.webp" class="gallery-overlay glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-12.webp" alt="Elegant Dining Area" class="img-fluid" loading="lazy">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-12.webp" class="gallery-overlay glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-8.webp" alt="Grand Ballroom Setup" class="img-fluid" loading="lazy">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-8.webp" class="gallery-overlay glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-15.webp" alt="Relaxing Poolside" class="img-fluid" loading="lazy">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-15.webp" class="gallery-overlay glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-3.webp" alt="Cozy Guest Room" class="img-fluid" loading="lazy">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-3.webp" class="gallery-overlay glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-18.webp" alt="Spa and Wellness Center" class="img-fluid" loading="lazy">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-18.webp" class="gallery-overlay glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-7.webp" alt="Conference Facilities" class="img-fluid" loading="lazy">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/hotel/gallery-7.webp" class="gallery-overlay glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="300">
          <a href="<?php echo home_url('/gallery'); ?>" class="btn btn-gallery">
            <i class="bi bi-collection me-2"></i>Discover Our Full Gallery
          </a>
        </div>

      </div>

    </section><!-- /Gallery Showcase Section -->

  </main>


</body>

</html>


<?php get_footer(); ?>