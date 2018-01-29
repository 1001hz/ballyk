<?php
/**
 *
 * Template Name: Medals
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
    <ul class="medals">
    <?php
        $args = array('post_type' => 'bk_medals', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'menu_order');
        $medals = get_posts($args);

        foreach($medals as $post) :
            $arrMedalsMeta = get_post_custom( $post->ID );
            
            $sponsor = $arrMedalsMeta['bk_medals_sponsor'][0];
            $first = $arrMedalsMeta['bk_medals_first'][0];
            $second = $arrMedalsMeta['bk_medals_second'][0];
            $third = $arrMedalsMeta['bk_medals_third'][0];
            $fourth = $arrMedalsMeta['bk_medals_fourth'][0];

        ?>


        <li class="medals__item">
          <div class="">
            <h2 class="medals__title">
              <?php echo $post->post_title; ?>
              
            </h2>

            <div>
              
              Sponsored by <br /><b><?php echo $sponsor ?></b>
            </div>    
            
            <ul class="medals__winners">
              <li>
              <i class="medals__winner medals__winner--first fa fa-trophy" aria-hidden="true"></i>
                1st <b><?php echo $first ?></b>
              </li>
              <li>
              <i class="medals__winner medals__winner--second fa fa-trophy" aria-hidden="true"></i>
                2nd <b><?php echo $second ?></b>
              </li>
              <li>
              <i class="medals__winner medals__winner--third fa fa-trophy" aria-hidden="true"></i>
                3rd <b><?php echo $third ?></b>
              </li>
              <?php if(isset($fourth)) { ?>
              <li>
              <i class="medals__winner medals__winner--fourth fa fa-trophy" aria-hidden="true"></i>
                4th <b><?php echo $fourth ?></b>
              </li>
              <?php } ?>
            </ul>    
            
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
