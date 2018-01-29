<?php
/**
 *
 * Template Name: Fixtures
 *
 * @package wpnoonan
 * @subpackage Wpnoonan
 * @since Wpnoonan 1.0
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
    <ul class="fixture">
    <?php
        $args = array('post_type' => 'bk_fixtures', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'menu_order');
        $all_fixtures = get_posts($args);

        foreach($all_fixtures as $post) :
            $arrFixtureMeta = get_post_custom( $post->ID );
            $months = array(
              1=>"Jan",2=>"Feb",3=>"Mar", 4=>"April", 5=>"May", 6=>"June", 
              7=>"July", 8=>"Aug", 9=>"Sept", 10=>"Oct", 11=>"Nov", 12=>"Dec"
            );
            $details = $arrFixtureMeta['bk_fixtures_details'][0];
            $month = $months[$arrFixtureMeta['bk_fixtures_month'][0]];
            $year = $arrFixtureMeta['bk_fixtures_year'][0];
        ?>

        <li>
          <h2 class="fixture__title">
            <?php echo $post->post_title; ?>
          </h2>
          <div class="fixture__date">
            <i class="fa fa-calendar-o" aria-hidden="true"></i>
            <?php echo $month?> - <?php echo $year?>
          </div>
          <div>
            <?php echo $details; ?>
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
