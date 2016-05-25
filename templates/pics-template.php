<?php
/**
 * Template Name: Pics
 */
?>
<section class="pics-container container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="animated bounceInRight">Enroute Pics</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-sm-8 col-xs-6 padding animated zoomIn">
      <div class="title-cover">
        <?php the_title(); ?>
      </div>
      <?php

      $image = get_field('main_pic');

      if( !empty($image) ): ?>
        <a href="<?php echo $image['url']; ?>">
          <div class="main-pics" style="background-position: <?php echo get_field('pic_pos'); ?>; background-image: url(<?php echo $image['url']; ?>);"></div>
        </a>

      <?php endif; ?>
    </div>
    <?php

    $images = get_field('gallery');

    if( $images ): ?>
        <div>
            <?php foreach( $images as $image ): ?>
                <section class="col-md-3 col-sm-4 col-xs-6 padding pics animated zoomIn">
                  <div class="title-cover">
                    <h2><?php echo $image['caption']; ?></h2>
                  </div>
                    <a href="<?php echo $image['url']; ?>">
                      <div class="img-pic" style="background-size: cover; background-image: url(<?php echo $image['url']; ?>);"></div>
                         <!-- <imgs src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /> -->
                    </a>
                </section>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
  </div>
</section>
