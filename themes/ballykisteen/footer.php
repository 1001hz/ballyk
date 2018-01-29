<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 *
 * @package WordPress
 * @subpackage Ballyk
 * @since 1.0
 * @version 1.2
 */

?>

</main><!-- #content -->

		<footer class="footer">

			<div class="footer__inner">
				
			<div class="footer__section">

				<div class="footer__address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<a href="https://goo.gl/maps/sKkpQjdvKbq">
					<span class="footer__title">Ballykisteen Golf Club</span><br />
					<span itemprop="addressLocality">Monard</span>,<br />
					<span itemprop="addressRegion">Tipperary,<br /> Ireland</span>
					</a>
				</div>

				<div class="footer__email">
					<a href="mailto:golf@ballykisteenhotel.com"><span itemprop="email">golf@ballykisteenhotel.com</span></a>
				</div>

			</div>
			<div class="footer__section">

				<div class="footer__social">
				<a href="http://www.facebook.com/groups/113620798665837">
					<span class="footer__social-icon">
						
						<i class="fa fa-facebook" aria-hidden="true"></i>
						
					</span>
					<span class="footer__social-text">Golf Club</span>
					</a>
				</div>
				<div class="footer__social">
				<a href="http://www.facebook.com/pages/Ballykisteen-Junior-Golf-Club/100246313384832">
							
					<span class="footer__social-icon footer__social-icon--alt">
						<i class="fa fa-facebook" aria-hidden="true"></i>
						
					</span>
					<span class="footer__social-text">Junior Club</span>
					</a>
				</div>

				<div class="footer__label">Phone</div>
				<div class="footer__phone" itemprop="telephone">
					<a href="tel:+3536232117">+353 (0)62 32117
					</a>
				</div>
			
			</div>

			</div>

		</footer><!-- #colophon -->
	
<?php wp_footer(); ?>

</body>
</html>
