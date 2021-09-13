<?php

class Team_Member extends WP_Widget
{

    function __construct()
    {

        parent::__construct(
            'Team-Member',  // Base ID
            'Team Member',   // Name
            array(
                'description' => 'This box represent team member section including picture'
            )
        );

        add_action('widgets_init', function () {
            register_widget('Team_Member');
        });
    }

    public $args = array(
        'before_title'  => '<h4 class="service-box-wrap">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>'
    );

    public function widget($args, $instance)
    {

        // entire widgets outer class 

        echo '<div class="team-member">';
        echo $args['before_widget'];
        // picture and post
        echo '<div class="thumb-post">';
        // image here
        echo '<img src="';
        echo  esc_html__($instance['image'], 'text_domain');
        echo '" alt="">';
        echo '<span class="member-role">';
        // post
        echo  esc_html__($instance['icon'], 'text_domain');
        echo '</span>';
        echo '</div>';
        // content wapper
        echo '<div class="member-content">';
        echo '<h4 class="member-name">';
        echo  esc_html__($instance['topic'], 'text_domain');
        echo '</h4>';
        echo '<p>';
        echo  esc_html__($instance['text'], 'text_domain');
        echo '</p>';
        echo '</div>';
        echo $args['after_widget'];
        echo '</div>';
    }

    public function form($instance)
    {

        $icon = !empty($instance['icon']) ? $instance['icon'] : esc_html__('', 'text_domain');
        $image = !empty($instance['image']) ? $instance['image'] : esc_html__('', 'text_domain');
        $topic = !empty($instance['topic']) ? $instance['topic'] : esc_html__('', 'text_domain');
        $text = !empty($instance['text']) ? $instance['text'] : esc_html__('', 'text_domain');
?>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('icon')); ?>"><?php echo esc_html__('Post:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('icon')); ?>" name="<?php echo esc_attr($this->get_field_name('icon')); ?>" type="text" value="<?php echo esc_attr($icon); ?>">
        </p>
        <!--  -->
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('image')); ?>"><?php echo esc_html__('Image:', 'text_domain'); ?></label>
            <a href="#" class="aw_upload_image_button button button-secondary"><?php _e('Upload Image'); ?></a>
            <input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('image')); ?>" id="aw_custom_image" value="<?php echo esc_attr($image); ?>" />
        </p>
        <!--  -->
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('topic')); ?>"><?php echo esc_html__('Name:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('topic')); ?>" name="<?php echo esc_attr($this->get_field_name('topic')); ?>" type="text" value="<?php echo esc_attr($topic); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('Text')); ?>"><?php echo esc_html__('Text:', 'text_domain'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('text')); ?>" name="<?php echo esc_attr($this->get_field_name('text')); ?>" type="text" cols="30" rows="10"><?php echo esc_attr($text); ?></textarea>
        </p>
<?php

    }

    public function update($new_instance, $old_instance)
    {

        $instance = array();

        $instance['icon'] = (!empty($new_instance['icon'])) ? strip_tags($new_instance['icon']) : '';
        $instance['image'] = (!empty($new_instance['image'])) ? strip_tags($new_instance['image']) : '';
        $instance['topic'] = (!empty($new_instance['topic'])) ? strip_tags($new_instance['topic']) : '';
        $instance['text'] = (!empty($new_instance['text'])) ? $new_instance['text'] : '';

        return $instance;
    }
}
$team_member = new Team_Member();
?>