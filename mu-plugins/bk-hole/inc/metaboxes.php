<?php

add_filter( 'rwmb_meta_boxes', 'bk_hole_mb' );

function bk_hole_mb($meta_boxes) {



	$meta_boxes[] = array(
		'id'  => 'bk_hole_mb',
        'title'  => 'hole',
		'post_types' => 'bk_hole',
		'priority'   => 'low',
		'fields' => array(
			array(
				'name' => 'Par',
				'id'    => 'bk_hole_par',
				'type' => 'text'
      ),
			array(
				'name' => 'Distance',
				'id'    => 'bk_hole_distance',
				'type' => 'text'
      ),
			array(
				'name' => 'Details',
				'id'    => 'bk_hole_details',
				'type' => 'wysiwyg'
      )

		)
	);

    return $meta_boxes;
}


add_action('add_meta_boxes', 'bk_hole_shortcode');

function bk_hole_shortcode() {
    add_meta_box(
        'bk_hole_shortcode',
        'Shortcode',
        'bk_hole_shortcode_cb',
        'bk_hole'
    );

}

function bk_hole_shortcode_cb() {
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