<?php
/*
Plugin Name: Male Clothing Collection
Plugin URI: https://example.com/
Description: A plugin to display a collection of male clothing products.
Version: 1.0
Author: Your Name
Author URI: https://example.com/
License: GPL2
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Enqueue the styles and scripts
include_once plugin_dir_path( __FILE__ ) . 'includes/enqueue.php';

// Include the widget class
include_once plugin_dir_path( __FILE__ ) . 'includes/class-male-clothing-widget.php';
?>
