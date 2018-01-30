<?php
/**
 *
 * Template Name: Other Competitions
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
            if($arrMedalsMeta['bk_medals_type'][0] === 'other') {
              $sponsor = $arrMedalsMeta['bk_medals_sponsor'][0];
              $first = $arrMedalsMeta['bk_medals_first'][0];
              $second = $arrMedalsMeta['bk_medals_second'][0];
              $third = $arrMedalsMeta['bk_medals_third'][0];
              $fourth = $arrMedalsMeta['bk_medals_fourth'][0];
              $fifth = $arrMedalsMeta['bk_medals_fifth'][0];
              $sixth = $arrMedalsMeta['bk_medals_sixth'][0];

              $title = $arrMedalsMeta['bk_medals_type_other'][0];
            }
            else {
              continue;
            }
            
        ?>


<li class="medals__item">
          <div class="">
            <h2 class="medals__title">
              <?php echo $post->post_title; ?>
              
            </h2>

            <div class="medals__sponsor">
              <div class="medals__sponsor-heading">Sponsored by</div>
              <div class="medals__sponsor-name"><?php echo $sponsor ?></div>
            </div>    
            
            <ul class="medals__winners">
              <li class="medals__winner">
                <div class="medals__medal-wrapper">
                  <i class="medals__medal medals__medal--first fa fa-trophy" aria-hidden="true"></i>
                </div>
                <div class="medals__winner-details">  
                  <div class="medals__winner-position">First</div>
                  <div class="medals__winner-name"><?php echo $first ?></div>
                </div>
              </li>
              
              <li class="medals__winner">
                <div class="medals__medal-wrapper">
                  <i class="medals__medal medals__medal--second fa fa-trophy" aria-hidden="true"></i>
                </div>
                <div class="medals__winner-details">  
                  <div class="medals__winner-position">Second</div>
                  <div class="medals__winner-name"><?php echo $second ?></div>
                </div>
              </li>
              
              <li class="medals__winner">
                <div class="medals__medal-wrapper">
                  <i class="medals__medal medals__medal--third fa fa-trophy" aria-hidden="true"></i>
                </div>
                <div class="medals__winner-details">  
                  <div class="medals__winner-position">Third</div>
                  <div class="medals__winner-name"><?php echo $third ?></div>
                </div>
              </li>

              <?php if(isset($fourth)) { ?>
                <li class="medals__winner">
                <div class="medals__medal-wrapper">
                  <i class="medals__medal fa fa-trophy" aria-hidden="true"></i>
                </div>
                <div class="medals__winner-details">  
                  <div class="medals__winner-position">Fourth</div>
                  <div class="medals__winner-name"><?php echo $fourth ?></div>
                </div>
              </li>
              <?php } ?>
              <?php if(isset($fifth)) { ?>
                <li class="medals__winner">
                <div class="medals__medal-wrapper">
                  <i class="medals__medal fa fa-trophy" aria-hidden="true"></i>
                </div>
                <div class="medals__winner-details">  
                  <div class="medals__winner-position">Fifth</div>
                  <div class="medals__winner-name"><?php echo $fifth ?></div>
                </div>
              </li>
              <?php } ?>
              
              <?php if(isset($sixth)) { ?>
                <li class="medals__winner">
                <div class="medals__medal-wrapper">
                  <i class="medals__medal fa fa-trophy" aria-hidden="true"></i>
                </div>
                <div class="medals__winner-details">  
                  <div class="medals__winner-position">Sixth</div>
                  <div class="medals__winner-name"><?php echo $sixth ?></div>
                </div>
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
