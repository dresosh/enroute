<?php
/**
 * Template Name: Blog
 */
?>
<section class="blog-container container animated fadeInUp">
    <div class="row">
      <div class="col-md-12">
        <h1 class="animated bounceInDown">Enroute Blog</h1>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8 post-container">

          <?php $args = array( 'post_type' => 'blog', 'posts_per_page' => -1 ) ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <div class="single-post">
            <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-icon-color="transparent">
              <a class="a2a_button_facebook"></a>
              <a class="a2a_button_twitter"></a>
              <a class="a2a_button_email"></a>
              <a class="a2a_button_sms"></a>
              <a class="a2a_button_whatsapp"></a>
            </div>
            <h3><?php the_time( get_option( 'date_format' ) ); ?></h3>
            <h2><?php the_title(); ?></h2>
            <p>
              <?php the_content(); ?>
            </p>
          </div>

          <?php endwhile; ?>


        </div>
      </div>
    </div>
</section>
