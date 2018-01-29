<header class="section__header">
		<?php
	
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
    if(!isset($thumbnail[0])){
      $thumbnail[0] = get_stylesheet_directory_uri() . '/assets/images/golf-course3.jpg';
    }
		?>
		<div class="section__header-image" style="background-image: url(<?php echo $thumbnail[0]; ?>)">
		</div>

		<div class="section__header-content">
		<div class="section__header-title">Ballykisteen Golf Club</div>	
		<?php the_title( '<h1 class="section__header-heading">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->