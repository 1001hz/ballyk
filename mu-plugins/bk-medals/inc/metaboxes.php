<?php

add_filter( 'rwmb_meta_boxes', 'bk_medals_mb' );

function bk_medals_mb($meta_boxes) {



	$meta_boxes[] = array(
		'id'  => 'bk_medals_mb',
        'title'  => 'hole',
		'post_types' => 'bk_medals',
		'priority'   => 'low',
		'fields' => array(
			array(
				'name' => 'Sponsor',
				'id'    => 'bk_medals_sponsor',
				'type' => 'text'
      ),
			array(
				'name' => 'First',
				'id'    => 'bk_medals_first',
				'type' => 'text'
      ),
			array(
				'name' => 'Second',
				'id'    => 'bk_medals_second',
				'type' => 'text'
      ),
			array(
				'name' => 'Third',
				'id'    => 'bk_medals_third',
				'type' => 'text'
	  )
	  ,
			array(
				'name' => 'Fourth',
				'id'    => 'bk_medals_fourth',
				'type' => 'text'
      )

		)
	);

    return $meta_boxes;
}


add_action('add_meta_boxes', 'bk_medals_shortcode');

function bk_medals_shortcode() {
    add_meta_box(
        'bk_medals_shortcode',
        'Shortcode',
        'bk_medals_shortcode_cb',
        'bk_medals'
    );

}

function bk_medals_shortcode_cb() {
	// Use nonce for verification
	wp_nonce_field(plugin_basename(__FILE__), 'dynamicMeta_noncename');
?>
   
<?php
}
?>