<?php
/**
 * Template Name: Team
 */
?>

<!-- Team Modal -->
<?php $skaters = array( 'post_type' => 'skater', 'posts_per_page' => -1 ); ?>
<?php $loop = new WP_Query( $skaters ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="modal fade" id="<?php global $post; echo $post->post_name; ?>-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

				<div class="row">
					<div class=" col-md-4 animated fadeInRight">
						<div class="modal-img-container">
							<img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="">
						</div>

					</div>
					<div class="bio-container col-md-8 animated zoomIn">
            <h1><?php echo the_title(); ?></h1>
            <?php if ( get_field( 'nickname' ) ): ?>
              <p>Nickname:  <?php echo get_field( 'nickname' ); ?></p>
            <?php endif ?>
            <?php if ( get_field( 'born' ) ): ?>
              <p>Born: <?php echo get_field( 'born' ) ?></p>
            <?php endif ?>
            <?php if ( get_field( 'birthplace' ) ): ?>
              <p>Birthplace:  <?php echo get_field( 'birthplace' ); ?></p>
            <?php endif ?>
            <?php if ( get_field( 'residence' ) ): ?>
              <p>Residence:  <?php echo get_field( 'residence' ); ?></p>
            <?php endif ?>
            <?php if ( get_field( 'sponsors' ) ): ?>
              <p>Sponsors:  <?php echo get_field( 'sponsors' ); ?></p>
            <?php endif ?>
            <?php if ( get_field( 'profession' ) ): ?>
              <p>Profession:  <?php echo get_field( 'profession' ); ?></p>
            <?php endif ?>
            <?php if ( get_field( 'skate' ) ): ?>
              <p>Skate?:  <?php echo get_field( 'skate' ); ?></p>
            <?php endif ?>
            <?php if ( get_field( 'stance' ) ): ?>
              <p>Stance:  <?php echo get_field( 'stance' ); ?></p>
            <?php endif ?>
            <?php if ( get_field( 'contact' ) ): ?>
              <p>Contact:  <?php echo get_field( 'contact' ); ?></p>
            <?php endif ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile;  wp_reset_query();?>



<section class="team-container container">
	<div class="row">
	  <div class="col-md-12 padding">
	    <h1 class="animated bounceInRight">Enroute Team</h1>
	  </div>
	</div>
  <div class="row">
    <?php $skater = array( 'post_type' => 'skater', 'posts_per_page' => -1, 'order' => 'ASC' ); ?>
    <?php $loop = new WP_Query( $skater ); ?>

    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <a href="<?php global $post; echo $post->post_name; ?>-modal" data-toggle="modal" data-target="#<?php global $post; echo $post->post_name; ?>-modal">
        <section class="img-container col-md-3 padding col-sm-4 col-xs-6 animated zoomIn">
          <div class="img-border">
            <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="" />
          </div>
					<p>
						<?php echo the_title(); ?>
					</p>
        </section>
      </a>
    <?php endwhile; ?>

    </div>
  </div>
</section>
