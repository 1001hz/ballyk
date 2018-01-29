<?php

add_filter( 'rwmb_meta_boxes', 'bk_captain_mb' );

function bk_captain_mb($meta_boxes) {



	$meta_boxes[] = array(
		'id'  => 'bk_captain_mb',
        'title'  => 'Captain',
		'post_types' => 'bk_captain',
		'priority'   => 'low',
		'fields' => array(
      array(
				'name' => 'Year',
				'id'    => 'bk_captain_year',
				'type' => 'text'
      ),

			array(
				'name' => 'Message',
				'id'    => 'bk_captain_message',
				'type' => 'wysiwyg'
      ),
      
      array(
				'name'             => __( 'Image Upload', 'image' ),
				'id'               => "bk_captain_image",
				'type'             => 'plupload_image',
				//'desc'  => __( 'Upload a square/circluar image image only! This automatically becomes circular and has a grey border applied.', 'wptricks' ),
				'max_file_uploads' => 1,
			),

		)
	);

    return $meta_boxes;
}


add_action('add_meta_boxes', 'bk_captain_shortcode');

function bk_captain_shortcode() {
    add_meta_box(
        'bk_captain_shortcode',
        'Shortcode',
        'bk_captain_shortcode_cb',
        'bk_captain'
    );

}

function bk_captain_shortcode_cb() {
	// Use nonce for verification
	wp_nonce_field(plugin_basename(__FILE__), 'dynamicMeta_noncename');
?>
    
<?php
}
?>