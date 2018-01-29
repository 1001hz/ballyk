<?php
define('BKMEDALS_PLUGIN_DIR', dirname(__FILE__));
define('BKMEDALS_PLUGIN_URL', plugin_dir_url( __FILE__ ));

include(BKMEDALS_PLUGIN_DIR . '/inc/custom-post.php');
include(BKMEDALS_PLUGIN_DIR . '/inc/metaboxes.php');
include(BKMEDALS_PLUGIN_DIR . '/inc/shortcode.php');