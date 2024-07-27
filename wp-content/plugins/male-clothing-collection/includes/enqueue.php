<?php
function male_clothing_collection_enqueue_scripts() {
    wp_enqueue_style('male-clothing-collection-style', plugin_dir_url(__FILE__) . '../css/male-clothing-collection.css');
    wp_enqueue_script('male-clothing-collection-script', plugin_dir_url(__FILE__) . '../js/male-clothing-collection.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'male_clothing_collection_enqueue_scripts');
?>
