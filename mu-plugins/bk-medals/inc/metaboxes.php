<?php

add_filter( 'rwmb_meta_boxes', 'bk_medals_mb' );

function bk_medals_mb($meta_boxes) {



	$meta_boxes[] = array(
		'id'  => 'bk_medals_mb',
        'title'  => 'Competition',
		'post_types' => 'bk_medals',
		'priority'   => 'low',
		'fields' => array(
			array(
				'name'    => 'Type',
				'id'      => 'bk_medals_type',
				'type'    => 'radio',
				// Array of 'value' => 'Label' pairs for radio options.
				// Note: the 'value' is stored in meta field, not the 'Label'
				'options' => array(
					'monthly_medal' => 'Monthly Medal',
					'captains' => "Captain's Prize",
					'vcaptains' => "Vice Captain's Prize",
					'presidents' => "President's Prize",
					'singles' => "Single's Matchplay",
					'other' => "Other"
				),
				// Show choices in the same line?
				'inline' => false,
			),
			array(
				'name' => 'If Other',
				'id'    => 'bk_medals_type_other',
				'type' => 'text'
      ),
			array(
				'name' => 'Sponsor',
				'id'    => 'bk_medals_sponsor',
				'type' => 'text'
			),
			array(
				'name' => 'Points for First',
				'id'    => 'bk_medals_pfirst',
				'type' => 'text'
      ),
			array(
				'name' => 'Points for Second',
				'id'    => 'bk_medals_psecond',
				'type' => 'text'
      ),
			array(
				'name' => 'Points for Third',
				'id'    => 'bk_medals_pthird',
				'type' => 'text'
	  )
	  ,
			array(
				'name' => 'Points for Fourth',
				'id'    => 'bk_medals_pfourth',
				'type' => 'text'
	  )
	  ,
			array(
				'name' => 'Points for Fifth',
				'id'    => 'bk_medals_pfifth',
				'type' => 'text'
      ),
	  array(
		  'name' => 'Points for Sixth',
		  'id'    => 'bk_medals_psixth',
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
	  ,
			array(
				'name' => 'Fifth',
				'id'    => 'bk_medals_fifth',
				'type' => 'text'
      ),
	  array(
		  'name' => 'Sixth',
		  'id'    => 'bk_medals_sixth',
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