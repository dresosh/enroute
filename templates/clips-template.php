<?php
/**
 * Template Name: Clips
 */
?>

<!-- Modal -->
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
              <iframe class="vid-responsive" width="1280" height="720" src="https://www.youtube.com/embed/<?php echo get_field('clip_id'); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile;  wp_reset_query();?>



<section class="clip-container container">
  <div class="row">
    <div class="col-md-12 padding">
      <h1 class="animated bounceInRight">Enroute Clips</h1>
    </div>
  </div>
  <div class="row">
      <?php $skater = array( 'post_type' => 'clip', 'posts_per_page' => 20, 'order' => 'DES' ); ?>
      <?php $loop = new WP_Query( $skater ); ?>

      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>


      <a href="<?php global $post; echo $post->post_name; ?>-modal" data-toggle="modal" data-target="#<?php global $post; echo $post->post_name; ?>-modal">
        <section class="col-md-4 col-sm-4 col-xs-6 padding vid-margin animated zoomIn">
          <div class="title-cover">
            <h2><?php the_title(); ?></h2>
          </div>
          <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo get_field('clip_id'); ?>/0.jpg" alt="" />
        </section>
      </a>
    <?php endwhile; ?>
  </div>
</section>
