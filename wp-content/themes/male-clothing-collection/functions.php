<?php
function register_male_clothing_widget_area() {
    register_sidebar(array(
        'name'          => __('Male Clothing Collection Widget Area', 'text_domain'),
        'id'            => 'male-clothing-collection-widget-area',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'register_male_clothing_widget_area');
?>
