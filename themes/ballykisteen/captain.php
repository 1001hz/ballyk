<?php
/**
 *
 * Template Name: Captain
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
    
    <?php
        $args = array('post_type' => 'bk_captain', 'post_status' => 'publish', 'posts_per_page' => 1, 'orderby' => 'menu_order');
        $captains = get_posts($args);

        foreach($captains as $post) :
            $arrCaptainMeta = get_post_custom( $post->ID );
            
            $address = $arrCaptainMeta['bk_captain_message'][0];
            $captainImg = wp_get_attachment_url($arrCaptainMeta['bk_captain_image'][0]);
            $year = $arrCaptainMeta['bk_captain_year'][0];
        ?>


        <div class="captain__image-wrapper">
          <img src="<?php echo $captainImg; ?>" alt="Captain's image" /> 
          <p class="captain__image-text">
            <?php echo $post->post_title; ?> - Captain <?php echo $year ?>
          </p>      
        </div>

        <div class="captain__text-wrapper">
          <?php echo $address; ?>
        </div>

		<?php endforeach; ?>
          
		</div>
	</div>
<?php
endwhile;
?>



<?php get_footer(); ?>
