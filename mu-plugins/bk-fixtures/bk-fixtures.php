<?php
define('BKFIXTURES_PLUGIN_DIR', dirname(__FILE__));
define('BKFIXTURES_PLUGIN_URL', plugin_dir_url( __FILE__ ));

include(BKFIXTURES_PLUGIN_DIR . '/inc/custom-post.php');
include(BKFIXTURES_PLUGIN_DIR . '/inc/metaboxes.php');
include(BKFIXTURES_PLUGIN_DIR . '/inc/shortcode.php');