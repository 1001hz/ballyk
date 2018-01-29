<?php

add_filter( 'rwmb_meta_boxes', 'bk_fixtures_mb' );

function bk_fixtures_mb($meta_boxes) {



	$meta_boxes[] = array(
		'id'  => 'bk_fixtures_mb',
        'title'  => 'Fixtures',
		'post_types' => 'bk_fixtures',
		'priority'   => 'low',
		'fields' => array(
			array(
				'name' => 'Details',
				'id'    => 'bk_fixtures_details',
				'type' => 'wysiwyg'
      ),
      
      array(
				'name' => 'Month',
				'id'    => 'bk_fixtures_month',
				'type'  => 'select',
				'options' => array(
					1=>"Jan",2=>"Feb",3=>"Mar", 4=>"April", 5=>"May", 6=>"June", 
					7=>"July", 8=>"Aug", 9=>"Sept", 10=>"Oct", 11=>"Nov", 12=>"Dec"
				)
      ),
      
      array(
				'name' => 'Year',
				'id'    => 'bk_fixtures_year',
				'type' => 'text'
      ),

		)
	);

    return $meta_boxes;
}


add_action('add_meta_boxes', 'bk_fixtures_shortcode');

function bk_fixtures_shortcode() {
    add_meta_box(
        'bk_fixtures_shortcode',
        'Shortcode',
        'bk_fixtures_shortcode_cb',
        'bk_fixtures'
    );

}

function bk_fixtures_shortcode_cb() {
	// Use nonce for verification
	wp_nonce_field(plugin_basename(__FILE__), 'dynamicMeta_noncename');
?>
    <div id="meta_inner">
        <span id="addMetabox" data-postid="<?php echo get_the_ID(); ?>">
			<pre style="background-color: #d9edf7; border: 1px solid #bce8f1; color: #31708f; border-radius: 4px; padding:15px;">[faqs]</pre>
        </span>
    </div>
<?php
}
?>