<?php
get_header();
?>

<style>
/* ===== ROOM DETAILS PAGE ===== */
.room-details {
  padding: 80px 0;
  background: #f8fafc;
}

.room-details-container {
  max-width: 1100px;
  margin: auto;
  background: #ffffff;
  border-radius: 18px;
  box-shadow: 0 15px 40px rgba(0,0,0,0.08);
  overflow: hidden;
}

.room-details-image img {
  width: 100%;
  height: 480px;
  object-fit: cover;
}

.room-details-content {
  padding: 40px;
}

.room-title {
  font-size: 2.2rem;
  font-weight: 700;
  color: #020617;
  margin-bottom: 15px;
}

.room-meta {
  color: #64748b;
  font-size: 14px;
  margin-bottom: 25px;
}

.room-description {
  font-size: 16px;
  line-height: 1.8;
  color: #334155;
  margin-bottom: 35px;
}

/* ===== BUTTONS ===== */
.room-actions {
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
}

.btn-back,
.btn-book {
  padding: 14px 30px;
  border-radius: 10px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
}

/* Back Button */
.btn-back {
  background: #0f172a;
  color: #ffffff;
}

.btn-back:hover {
  background: #020617;
}

/* Book Now Button */
.btn-book {
  background: linear-gradient(135deg, #d4af37, #b8962e);
  color: #020617;
}

.btn-book:hover {
  background: #b8962e;
  color: #ffffff;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
  .room-details-image img {
    height: 300px;
  }

  .room-details-content {
    padding: 25px;
  }

  .room-title {
    font-size: 1.8rem;
  }
}
</style>

<div class="room-details">
  <div class="room-details-container">

    <!-- Room Image -->
    <div class="room-details-image">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('full'); ?>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/hotel/room-3.webp" alt="<?php the_title(); ?>">
      <?php endif; ?>
    </div>

    <!-- Room Content -->
    <div class="room-details-content">

      <h1 class="room-title"><?php the_title(); ?></h1>

      <div class="room-meta">
        Luxury Room • Free Wi-Fi • Air Condition • 24/7 Service
      </div>

      <div class="room-description">
		
        <?php the_content(); ?>
      </div>

      <div class="room-actions">
        <a href="<?php echo home_url('/rooms'); ?>" class="btn-back">
          ← Back to Rooms
        </a>

        <a href="<?php echo home_url('/book'); ?>" class="btn-book">
          Book This Room
        </a>
      </div>

    </div>

  </div>
</div>

<?php get_footer(); ?>