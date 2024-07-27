<?php
function mcc_display_products($atts) {
    ob_start();

    // Fetch products (replace with actual product retrieval code)
    $products = [
        ['name' => 'Shirt', 'price' => '$25'],
        ['name' => 'Pants', 'price' => '$40'],
        // Add more products as needed
    ];

    echo '<div class="mcc-product-collection">';
    foreach ($products as $product) {
        echo '<div class="mcc-product">';
        echo '<h2>' . esc_html($product['name']) . '</h2>';
        echo '<p>' . esc_html($product['price']) . '</p>';
        echo '</div>';
    }
    echo '</div>';

    return ob_get_clean();
}
add_shortcode('male_clothing_collection', 'mcc_display_products');
