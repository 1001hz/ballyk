<?php
/**
 *
 * Template Name: Holes
 *
 */

get_header(); 

while ( have_posts() ) : the_post();

get_template_part( 'template-parts/header/header', get_post_format() );
?>

  

	<div class="section">
		<div class="section__inner">
    
    <?php
			the_content();
    ?>
    <ul class="holes">
    <?php
        $args = array('post_type' => 'bk_hole', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'menu_order');
        $holes = get_posts($args);

        foreach($holes as $post) :
            $arrHoleMeta = get_post_custom( $post->ID );
            
            $par = $arrHoleMeta['bk_hole_par'][0];
            $distance = $arrHoleMeta['bk_hole_distance'][0];
            $details = $arrHoleMeta['bk_hole_details'][0];
        ?>


        <li class="holes__item">
          <div class="accordion">
            <h2 class="holes__title">
              <?php echo $post->post_title; ?>
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </h2>
            
            <div>
              <i class="fa fa-flag" aria-hidden="true"></i>
              Par <?php echo $par ?>
            </div>    
            
            <div>
              <i class="fa fa-arrows-h" aria-hidden="true"></i>
              <?php echo $distance ?> Yards
            </div>
          </div>
          <div class="holes__detail">
            <?php echo apply_filters( 'the_content', $details ); ?>
            
          </div>

        </li>


		<?php endforeach; ?>
        </ul>
		</div>
	</div>
<?php
endwhile;
?>



<?php get_footer(); ?>
