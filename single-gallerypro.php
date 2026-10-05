<?php
/**
 * Single Gallery Template
 */
get_header();
?>

<style>
/* ===== Single Gallery Design ===== */
.single-gallery-section {
  padding: 90px 20px;
  background: #f8fafc;
}

.single-gallery-container {
  max-width: 1100px;
  margin: auto;
  background: #ffffff;
  border-radius: 22px;
  overflow: hidden;
  box-shadow: 0 30px 70px rgba(0,0,0,0.15);
}

/* Image */
.single-gallery-image {
  width: 100%;
  height: 480px;
  overflow: hidden;
}

.single-gallery-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Content */
.single-gallery-content {
  padding: 50px 55px;
}

.single-gallery-title {
  font-size: 2.4rem;
  color: #020617;
  margin-bottom: 18px;
}

.single-gallery-description {
  font-size: 1.05rem;
  line-height: 1.8;
  color: #475569;
}

/* Back Button */
.gallery-back {
  margin-top: 35px;
}

.gallery-back a {
  display: inline-block;
  padding: 12px 28px;
  border-radius: 30px;
  background: linear-gradient(135deg, #0d9488, #10b981);
  color: #ffffff;
  text-decoration: none;
  font-weight: 600;
  transition: 0.3s;
}

.gallery-back a:hover {
  transform: translateY(-2px);
}

/* Mobile */
@media (max-width: 768px) {
  .single-gallery-image {
    height: 280px;
  }

  .single-gallery-content {
    padding: 30px 25px;
  }

  .single-gallery-title {
    font-size: 1.8rem;
  }
}
</style>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0"><?php the_title(); ?></h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
          <li><a href="<?php echo esc_url(home_url('/gallery')); ?>">Gallery</a></li>
          <li class="current"><?php the_title(); ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Single Gallery Section -->
  <section class="single-gallery-section">
    <div class="single-gallery-container">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Featured Image -->
        <?php if (has_post_thumbnail()) : ?>
          <div class="single-gallery-image">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <!-- Content -->
        <div class="single-gallery-content">
          <h2 class="single-gallery-title"><?php the_title(); ?></h2>

          <div class="single-gallery-description">
            <?php the_content(); ?>
          </div>

          <div class="gallery-back">
            <a href="<?php echo esc_url(home_url('/gallery')); ?>">← Back to Gallery</a>
          </div>
        </div>

      <?php endwhile; endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>