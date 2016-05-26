<?php
/**
 * Template Name: Home
 */
?>
<section class="home-container container animated fadeInUp">
  <div class="row">
    <div class="heading col-md-12 animated fadeInRight">
      <?php if( get_field('heading') ): ?>
        <h1><?php echo get_field( 'heading' ); ?></h1>
      <?php endif; ?>
    </div>
    <div class="slideshow col-md-12">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <!-- Slide Buttons go here -->
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <?php

          $images = get_field('slideshow');

          if( $images ): ?>

          <?php foreach( $images as $image ): ?>
            <div class="item">
              <div class="img" style="background-image: url(<?php echo $image['url']; ?>);"></div>
              <!-- <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> -->
              <!-- <p><?php echo $image['caption']; ?></p> -->
            </div>
          <?php endforeach; ?>

          <?php endif; ?>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  </div>

</section>
