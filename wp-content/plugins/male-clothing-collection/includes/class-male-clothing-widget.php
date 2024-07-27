<?php
class Male_Clothing_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'male_clothing_widget',
            __('Male Clothing Collection', 'text_domain'),
            array('description' => __('A Widget to display male clothing products', 'text_domain'))
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];
        echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        echo '<div class="male-clothing-collection">';
        // Display your clothing collection here
        echo '</div>';
        echo $args['after_widget'];
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('New title', 'text_domain');
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}

function register_male_clothing_widget() {
    register_widget('Male_Clothing_Widget');
}
add_action('widgets_init', 'register_male_clothing_widget');
?>
