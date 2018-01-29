<?php
define('BKCAPTAIN_PLUGIN_DIR', dirname(__FILE__));
define('BKCAPTAIN_PLUGIN_URL', plugin_dir_url( __FILE__ ));

include(BKCAPTAIN_PLUGIN_DIR . '/inc/custom-post.php');
include(BKCAPTAIN_PLUGIN_DIR . '/inc/metaboxes.php');
include(BKCAPTAIN_PLUGIN_DIR . '/inc/shortcode.php');