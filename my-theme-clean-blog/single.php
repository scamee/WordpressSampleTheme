<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php get_header(); ?>

</head>

<body>

  <!-- Navigation -->
  <?php get_template_part('components/header'); ?>

  <!-- Page Header -->
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php $img = get_image_default(); ?>
      <header class="masthead" style="background-image: url('<?php echo $img[0] ?>')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="post-heading">
                <h1><?php the_title(); ?></h1>
                <span class="meta">Posted by
                  <a href="#"><?php the_author(); ?></a>
                  on <?php the_date(); ?></span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Post Content -->
      <article>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <?php the_post_thumbnail(array(32, 32)); ?>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>

  <hr>

  <!-- Footer -->
  <footer>
    <?php get_template_part('components/footer'); ?>
  </footer>

  <?php get_footer(); ?>

</body>

</html>