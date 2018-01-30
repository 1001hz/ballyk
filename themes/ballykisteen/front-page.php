<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Ballyk
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="banner">
	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
	?>
	<div class="banner__image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
		
	</div>

	<div class="banner__content">

		<img class="banner__logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Ballykisteen Golf Club Logo" />
		
		<div class="banner__title">
			Ballykisteen Golf Club
		</div>

	</div>
			
<?php endif; ?>
</div><!-- .banner -->

<div class="section section--center section--alt">
	<div class="section__inner">
		<h1 class="appear">
			<?php
				the_title();
			?>
		</h1>

		<div class="appear">
			<?php 
			$content_post = get_post($post->ID);
			$content = $content_post->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]&gt;', $content);
			echo $content;
			?>
		</div>
	</div>
</div>

<div class="section">
	<div  class="section__inner">
		<div class="section__sub-heading">Notices</div>

		<?php
				$args = array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'menu_order');
        $posts = get_posts($args);

        foreach($posts as $post) :
            
        ?>
<article class="notice">
			<h2 class="notice__title"><?php echo $post->post_title; ?></h2>
			<div class="notice__date"><?php echo date('F j, Y', strtotime($post->post_date)); ?></div>
			<p class="notice__content"><?php echo apply_filters( 'the_content', $post->post_content ); ?></p>
		</article>


		<?php endforeach; ?>

	</div>
</div>

<div class="section section--highlight">
	<div class="section__inner">
		<div class="section__highlight-bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team.JPG)"></div>
		<div class="section__sub-heading section__sub-heading--highlight">Competitions</div>

		<div class="comp">
			<div class="comp__title">Spring League 2018</div>
			<ul>
				<li class="comp__team-item">
					<div class="comp__team-heading accordion">
						<span class="comp__team-name">A</span>
						<span class="comp__team-score">218</span>
						<span class="comp__open"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
					</div>
					<div class="comp__team-details">
						<div class="comp__team-list">
							<ul>
								<li>
									<span class="comp__player-icon">
										<i class="fa fa-user-o" aria-hidden="true"></i>
									</span>
									<span class="comp__player-name">James Keane</span>
								</li>

								<li>
									<span class="comp__player-icon">
										<i class="fa fa-user-o" aria-hidden="true"></i>
									</span>
									<span class="comp__player-name">James Keane</span>
								</li>

								<li>
									<span class="comp__player-icon">
										<i class="fa fa-user-o" aria-hidden="true"></i>
									</span>
									<span class="comp__player-name">James Keane</span>
								</li>
							</ul>
						</div>
						<div class="comp__team-score-list">
							<ul>
								<li>
									100 <span class="comp__wk">(WK1)</span>
								</li>
								<li>
									100 <span class="comp__wk">(WK1)</span>
								</li>
								<li>
									100 <span class="comp__wk">(WK1)</span>
								</li>
								<li>
									100 <span class="comp__wk">(WK1)</span>
								</li>
								<li>
									100 <span class="comp__wk">(WK1)</span>
								</li>
							</ul>
						</div>
					</div>
				</li>
				
				<li class="comp__team-item">
					<div class="comp__team-heading accordion">
						<span class="comp__team-name">A</span>
						<span class="comp__team-score">218</span>
						<span class="comp__open"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
					</div>
					<div class="comp__team-details">
						<div class="comp__team-list">
							<ul>
								<li>
									<span class="comp__player-icon">
										<i class="fa fa-user-o" aria-hidden="true"></i>
									</span>
									<span class="comp__player-name">James Keane</span>
								</li>

								<li>
									<span class="comp__player-icon">
										<i class="fa fa-user-o" aria-hidden="true"></i>
									</span>
									<span class="comp__player-name">James Keane</span>
								</li>

								<li>
									<span class="comp__player-icon">
										<i class="fa fa-user-o" aria-hidden="true"></i>
									</span>
									<span class="comp__player-name">James Keane</span>
								</li>
							</ul>
						</div>
						<div class="comp__team-score-list">
							<ul>
								<li>
									100 (WK1)
								</li>
							</ul>
						</div>
					</div>
				</li>


				<li class="comp__team-item">
					<div class="comp__team-heading accordion">
						<span class="comp__team-name">A</span>
						<span class="comp__team-score">218</span>
						<span class="comp__open"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
					</div>
					<div class="comp__team-details">
						<div class="comp__team-list">
							<ul>
								<li>
									<span class="comp__player-icon">
										<i class="fa fa-user-o" aria-hidden="true"></i>
									</span>
									<span class="comp__player-name">James Keane</span>
								</li>

								<li>
									<span class="comp__player-icon">
										<i class="fa fa-user-o" aria-hidden="true"></i>
									</span>
									<span class="comp__player-name">James Keane</span>
								</li>

								<li>
									<span class="comp__player-icon">
										<i class="fa fa-user-o" aria-hidden="true"></i>
									</span>
									<span class="comp__player-name">James Keane</span>
								</li>
							</ul>
						</div>
						<div class="comp__team-score-list">
							<ul>
								<li>
									100 (WK1)
								</li>
							</ul>
						</div>
					</div>
				</li>


			</ul>
		</div>

		<?php get_sidebar(); ?>
			
	</div>
</div>

<?php get_footer();