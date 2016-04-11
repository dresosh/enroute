<?php
/**
 * Template Name: Clips
 */
?>

<?php $skaters = array( 'post_type' => 'clip', 'posts_per_page' => -1 ); ?>
<?php $loop = new WP_Query( $skaters ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="modal fade" id="<?php global $post; echo $post->post_name; ?>-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

				<div class="row">
            <div class="col-md-12">
              <iframe class="img-responsive" width="1280" height="720" src="<?php echo get_field('clip'); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile;  wp_reset_query();?>



<section class="clip-container container animated flipInY">
  <div class="row">
      <?php $skater = array( 'post_type' => 'clip', 'posts_per_page' => 20, 'order' => 'ASC' ); ?>
      <?php $loop = new WP_Query( $skater ); ?>

      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <!-- <p>
        <?php echo get_field('clip'); ?>
      </p> -->
      <a href="<?php global $post; echo $post->post_name; ?>-modal" data-toggle="modal" data-target="#<?php global $post; echo $post->post_name; ?>-modal">
        <div class="col-md-4">
          <img class="img-responsive" src="<?php echo the_post_thumbnail_url(); ?>" alt="" />
        </div>
      </a>
    <?php endwhile; ?>
  </div>
</section>
