<?php
function nilam_pro_enqueue(){
 wp_enqueue_style("nilam-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts","nilam_pro_enqueue");

function nilam_pro_setup(){
 add_theme_support("elementor");
 add_theme_support("post-thumbnails");
}
add_action("after_setup_theme","nilam_pro_setup");
?>