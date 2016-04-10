<?php
/**
 * Template Name: Team
 */
?>
<section class="team-container container animated fadeInLeft">
  <div class="row">
    <?php $args = array( 'post_type' => 'skater', 'posts_per_page' => -1 ); ?>
    <?php $loop = new WP_Query( $args ); ?>


    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="col-md-3 animated zoomInDown">
        <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="" />
      </div>
    <?php endwhile; ?>

    </div>
  </div>
</section>
