<?php
/**
 * Template Name: Pics
 */
?>

<!-- Main Pic Modal -->
<?php

$image = get_field('main_pic');

if( !empty($image) ): ?>

<div class="modal fade" id="<?php echo $image['caption']; ?>-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

				<div class="row">
            <div class="col-md-12">
              <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="" />
            </div>
				</div>
			</div>
		</div>
	</div>
</div>

</section>

<?php endif; ?>

<!-- Gallery Modal -->
<?php

$images = get_field('gallery');

if( $images ): ?>
    <div>
        <?php foreach( $images as $image ): ?>

<div class="modal fade" id="<?php echo $image['title']; ?>-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

				<div class="row">
            <div class="col-md-12">
              <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="" />
            </div>
				</div>
			</div>
		</div>
	</div>
</div>

</section>
<?php endforeach; ?>
</div>
<?php endif; ?>




<section class="pics-container container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="animated bounceInRight">Enroute Pics</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-sm-8 col-xs-6 padding animated zoomIn">
      <?php

      $image = get_field('main_pic');

      if( !empty($image) ): ?>
        <a href="<?php echo $image['caption']; ?>-modal" data-toggle="modal" data-target="#<?php echo $image['caption']; ?>-modal">
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
                  <a href="<?php echo $image['title']; ?>-modal" data-toggle="modal" data-target="#<?php echo $image['title']; ?>-modal">
                    <div class="title-cover">
                      <h2><?php echo $image['caption']; ?></h2>
                    </div>
                      <div class="img-pic" style="background-size: cover; background-image: url(<?php echo $image['url']; ?>);"></div>
                    </a>
                </section>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
  </div>
</section>
