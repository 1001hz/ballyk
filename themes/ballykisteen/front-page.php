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

		<img class="banner__logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.gif" alt="Ballykisteen Golf Club Logo" />
		
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

		<article class="notice">
			<h2 class="notice__title">Spring League 2018</h2>
			<div class="notice__date">20 January 2018</div>
			<p class="notice__content">The 2018 Golf season is ready to start with the commencement of the D.O.E. David Kavanagh sponsored Spring League. This competition is a 4 man team event. This Spring League is set to run over 5 qualifying weeks for a Final on March 25th. The top 3 scores per team to count as part of their total. Entry fee is 10 euro per person. This is a great opportunity to prepare yourself for the coming season. Please get your teams entered in the Pro Shop as quickly as possible. See Rules Here</p>
		</article>

		<article class="notice">
			<h2 class="notice__title">AGM for 2017</h2>
			<div class="notice__date">10 December 2018</div>
			<p class="notice__content">The 2018 Golf season is ready to start with the commencement of the D.O.E. David Kavanagh sponsored Spring League. This competition is a 4 man team event. This Spring League is set to run over 5 qualifying weeks for a Final on March 25th. The top 3 scores per team to count as part of their total. Entry fee is 10 euro per person. This is a great opportunity to prepare yourself for the coming season. Please get your teams entered in the Pro Shop as quickly as possible. See Rules Here</p>
		</article>
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
	</div>
</div>

<?php get_footer();