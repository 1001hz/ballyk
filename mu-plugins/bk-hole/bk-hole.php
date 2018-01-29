<?php
define('BKHOLE_PLUGIN_DIR', dirname(__FILE__));
define('BKHOLE_PLUGIN_URL', plugin_dir_url( __FILE__ ));

include(BKHOLE_PLUGIN_DIR . '/inc/custom-post.php');
include(BKHOLE_PLUGIN_DIR . '/inc/metaboxes.php');
include(BKHOLE_PLUGIN_DIR . '/inc/shortcode.php');