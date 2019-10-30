<?php

/** This is sidebar widget */

/**
 * Adds simple_widget widget.
 */
class sidebarr_widget extends WP_Widget{

    /**
     * Register widget with WordPress.
     */
    function __construct(){
        parent::__construct(
            'sidebarr', // Base ID
            esc_html__('Sidebar Widget', 'ion_theme'), // Name
            array('description' => esc_html__('This is footer widget', 'ion_theme'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance){
        
        if (!empty($instance['title'])) {
            //echo wp_kses($args['before_title'],'') . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        } ?>
        
        <h4><?php echo wp_kses($instance['title'],''); ?></h4>
        <ul class="alt">
            <li><a href="#"><?php echo wp_kses($instance['text_o'],'') ; ?></a></li>
            <li><a href="#"><?php echo wp_kses($instance['text_tw'],''); ?></a></li>
            <li><a href="#"><?php echo wp_kses($instance['text_th'],''); ?></a></li>
            <li><a href="#"><?php echo wp_kses($instance['text_f'],''); ?></a></li>
        </ul>
    
    <?php
        }

        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         *
         * @param array $instance Previously saved values from database.
         */
        public function form($instance){
            $title = !empty($instance['title']) ? $instance['title'] : esc_html__('Title Name', 'ion_theme');
            $text_o = !empty($instance['text_o']) ? $instance['text_o'] : esc_html__('Text One', 'ion_theme');
            $text_tw = !empty($instance['text_tw']) ? $instance['text_tw'] : esc_html__('Text Two', 'ion_theme');
            $text_th = !empty($instance['text_th']) ? $instance['text_th'] : esc_html__('Text Three', 'ion_theme');
            $text_f = !empty($instance['text_f']) ? $instance['text_f'] : esc_html__('Text Four', 'ion_theme');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_o')); ?>"><?php esc_attr_e('Text One:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_o')); ?>" name="<?php echo esc_attr($this->get_field_name('text_o')); ?>" type="text" value="<?php echo esc_attr($text_o); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_tw')); ?>"><?php esc_attr_e('Text Two:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_tw')); ?>" name="<?php echo esc_attr($this->get_field_name('text_tw')); ?>" type="text" value="<?php echo esc_attr($text_tw); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_th')); ?>"><?php esc_attr_e('Text Three:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_th')); ?>" name="<?php echo esc_attr($this->get_field_name('text_th')); ?>" type="text" value="<?php echo esc_attr($text_th); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_f')); ?>"><?php esc_attr_e('Text Four:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_f')); ?>" name="<?php echo esc_attr($this->get_field_name('text_f')); ?>" type="text" value="<?php echo esc_attr($text_f); ?>">
        </p>
<?php
    }
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance){
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['text_o'] = (!empty($new_instance['text_o'])) ? strip_tags($new_instance['text_o']) : '';
        $instance['text_tw'] = (!empty($new_instance['text_tw'])) ? strip_tags($new_instance['text_tw']) : '';
        $instance['text_th'] = (!empty($new_instance['text_th'])) ? strip_tags($new_instance['text_th']) : '';
        $instance['text_f'] = (!empty($new_instance['text_f'])) ? strip_tags($new_instance['text_f']) : '';

        return $instance;
    }
}

function register_sidebarr_widget(){
    register_widget('sidebarr_widget');
}
add_action('widgets_init', 'register_sidebarr_widget');



/** This is footer widget */
/**
 * Adds simple_widget widget.
 */
class footer_widget extends WP_Widget{

    /**
     * Register widget with WordPress.
     */
    function __construct(){
        parent::__construct(
            'footerr', // Base ID
            esc_html__('Footer Widget', 'ion_theme'), // Name
            array('description' => esc_html__('This is footer widget', 'ion_theme'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance){
        echo wp_kses($args['before_widget'],'');
        if (!empty($instance['title'])) {
            //echo wp_kses($args['before_title'],'') . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        } ?>
        
        <h3><?php echo wp_kses($instance['title'],''); ?></h3>
        <ul class="alt">
            <li><a href="#"><?php echo wp_kses($instance['text_o'],'') ; ?></a></li>
            <li><a href="#"><?php echo wp_kses($instance['text_tw'],'') ; ?></a></li>
            <li><a href="#"><?php echo wp_kses($instance['text_th'],'') ; ?></a></li>
            <li><a href="#"><?php echo wp_kses($instance['text_f'],'') ; ?></a></li>
        </ul>
    
    <?php
        }

        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         *
         * @param array $instance Previously saved values from database.
         */
        public function form($instance){
            $title = !empty($instance['title']) ? $instance['title'] : esc_html__('Title Name', 'ion_theme');
            $text_o = !empty($instance['text_o']) ? $instance['text_o'] : esc_html__('Text One', 'ion_theme');
            $text_tw = !empty($instance['text_tw']) ? $instance['text_tw'] : esc_html__('Text Two', 'ion_theme');
            $text_th = !empty($instance['text_th']) ? $instance['text_th'] : esc_html__('Text Three', 'ion_theme');
            $text_f = !empty($instance['text_f']) ? $instance['text_f'] : esc_html__('Text Four', 'ion_theme');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_o')); ?>"><?php esc_attr_e('Text One:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_o')); ?>" name="<?php echo esc_attr($this->get_field_name('text_o')); ?>" type="text" value="<?php echo esc_attr($text_o); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_tw')); ?>"><?php esc_attr_e('Text Two:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_tw')); ?>" name="<?php echo esc_attr($this->get_field_name('text_tw')); ?>" type="text" value="<?php echo esc_attr($text_tw); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_th')); ?>"><?php esc_attr_e('Text Three:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_th')); ?>" name="<?php echo esc_attr($this->get_field_name('text_th')); ?>" type="text" value="<?php echo esc_attr($text_th); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_f')); ?>"><?php esc_attr_e('Text Four:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_f')); ?>" name="<?php echo esc_attr($this->get_field_name('text_f')); ?>" type="text" value="<?php echo esc_attr($text_f); ?>">
        </p>
<?php
    }
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance){
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['text_o'] = (!empty($new_instance['text_o'])) ? strip_tags($new_instance['text_o']) : '';
        $instance['text_tw'] = (!empty($new_instance['text_tw'])) ? strip_tags($new_instance['text_tw']) : '';
        $instance['text_th'] = (!empty($new_instance['text_th'])) ? strip_tags($new_instance['text_th']) : '';
        $instance['text_f'] = (!empty($new_instance['text_f'])) ? strip_tags($new_instance['text_f']) : '';

        return $instance;
    }
}

function register_footer_widget(){
    register_widget('footer_widget');
}
add_action('widgets_init', 'register_footer_widget');



/** This is copyright widget */
/**
 * Adds simple_widget widget.
 */
class copyright_widget extends WP_Widget{

    /**
     * Register widget with WordPress.
     */
    function __construct(){
        parent::__construct(
            'copyright', // Base ID
            esc_html__('Copyright Widget', 'ion_theme'), // Name
            array('description' => esc_html__('This is Copyright widget', 'ion_theme'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance){
        echo wp_kses($args['before_widget'],'');
        if (!empty($instance['title'])) {
            //echo wp_kses($args['before_title'],'') . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        } ?>
        
        <li><?php echo wp_kses($instance['text_o'],''); ?></li>
		<li><?php echo wp_kses($instance['text_tw'],''); ?></li>
        <li><?php echo wp_kses($instance['text_th'],''); ?></li>
    
    <?php
        }

        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         *
         * @param array $instance Previously saved values from database.
         */
        public function form($instance){
            $title = !empty($instance['title']) ? $instance['title'] : esc_html__('', 'ion_theme');
            $text_o = !empty($instance['text_o']) ? $instance['text_o'] : esc_html__('Text One', 'ion_theme');
            $text_tw = !empty($instance['text_tw']) ? $instance['text_tw'] : esc_html__('Text Two', 'ion_theme');
            $text_th = !empty($instance['text_th']) ? $instance['text_th'] : esc_html__('Text Three', 'ion_theme');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_o')); ?>"><?php esc_attr_e('Text One:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_o')); ?>" name="<?php echo esc_attr($this->get_field_name('text_o')); ?>" type="text" value="<?php echo esc_attr($text_o); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_tw')); ?>"><?php esc_attr_e('Text Two:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_tw')); ?>" name="<?php echo esc_attr($this->get_field_name('text_tw')); ?>" type="text" value="<?php echo esc_attr($text_tw); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_th')); ?>"><?php esc_attr_e('Text Three:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_th')); ?>" name="<?php echo esc_attr($this->get_field_name('text_th')); ?>" type="text" value="<?php echo esc_attr($text_th); ?>">
        </p>
<?php
    }
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance){
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['text_o'] = (!empty($new_instance['text_o'])) ? strip_tags($new_instance['text_o']) : '';
        $instance['text_tw'] = (!empty($new_instance['text_tw'])) ? strip_tags($new_instance['text_tw']) : '';
        $instance['text_th'] = (!empty($new_instance['text_th'])) ? strip_tags($new_instance['text_th']) : '';

        return $instance;
    }
}

function register_copyright_widget(){
    register_widget('copyright_widget');
}
add_action('widgets_init', 'register_copyright_widget');


/** This is social widget */

/**
 * Adds simple_widget widget.
 */
class social_widget extends WP_Widget{

    /**
     * Register widget with WordPress.
     */
    function __construct(){
        parent::__construct(
            'social', // Base ID
            esc_html__('Social Widget', 'ion_theme'), // Name
            array('description' => esc_html__('This is social widget', 'ion_theme'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance){
        echo wp_kses( $args['before_widget'],'');
        if (!empty($instance['titlee'])) {
            //echo wp_kses($args['before_title'],'') . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        } ?>
    <section>
		<h4><?php echo wp_kses($instance['titlee'],''); ?></h4>
    </section>
    <li><a href="<?php echo wp_kses($instance['t_link'],''); ?>" class="icon <?php echo wp_kses($instance['t_icon_class'],''); ?>"><span class="label"></span></a></li>
    <li><a href="<?php echo wp_kses($instance['f_link'],''); ?>" class="icon <?php echo wp_kses($instance['f_icon_class'],''); ?>"><span class="label"></span></a></li>
    <li><a href="<?php echo wp_kses($instance['i_link'],''); ?>" class="icon <?php echo wp_kses($instance['i_icon_class'],''); ?>"><span class="label"></span></a></li>
    <li><a href="<?php echo wp_kses($instance['l_link'],''); ?>" class="icon <?php echo wp_kses($instance['l_icon_class'],''); ?>"><span class="label"></span></a></li>
    <li><a href="<?php echo wp_kses($instance['p_link'],''); ?>" class="icon <?php echo wp_kses($instance['p_icon_class'],''); ?>"><span class="label"></span></a></li>

    <?php
        }

        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         *
         * @param array $instance Previously saved values from database.
         */
        public function form($instance){
            $titlee = !empty($instance['titlee']) ? $instance['titlee'] : esc_html__('', 'ion_theme');
            $t_icon_class = !empty($instance['t_icon_class']) ? $instance['t_icon_class'] : esc_html__('Twitter Icon Class', 'ion_theme');
            $t_link = !empty($instance['t_link']) ? $instance['t_link'] : esc_html__('Twitter Link', 'ion_theme');
            $f_icon_class = !empty($instance['f_icon_class']) ? $instance['f_icon_class'] : esc_html__('Facebook Icon Class', 'ion_theme');
            $f_link = !empty($instance['f_link']) ? $instance['f_link'] : esc_html__('Facebook Link', 'ion_theme');
            $i_icon_class = !empty($instance['i_icon_class']) ? $instance['i_icon_class'] : esc_html__('Instagram Icon Class', 'ion_theme');
            $i_link = !empty($instance['i_link']) ? $instance['i_link'] : esc_html__('Instagram Link', 'ion_theme');
            $l_icon_class = !empty($instance['l_icon_class']) ? $instance['l_icon_class'] : esc_html__('Linkedin Icon Class', 'ion_theme');
            $l_link = !empty($instance['l_link']) ? $instance['l_link'] : esc_html__('Linkedin Link', 'ion_theme');
            $p_icon_class = !empty($instance['p_icon_class']) ? $instance['p_icon_class'] : esc_html__('Pinterest Icon Class', 'ion_theme');
            $p_link = !empty($instance['p_link']) ? $instance['p_link'] : esc_html__('Pinterest Link', 'ion_theme');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('titlee')); ?>"><?php esc_attr_e('Title:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('titlee')); ?>" name="<?php echo esc_attr($this->get_field_name('titlee')); ?>" type="text" value="<?php echo esc_attr($titlee); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('t_icon_class')); ?>"><?php esc_attr_e('Twitter Icon Class:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('t_icon_class')); ?>" name="<?php echo esc_attr($this->get_field_name('t_icon_class')); ?>" type="text" value="<?php echo esc_attr($t_icon_class); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('t_link')); ?>"><?php esc_attr_e('Twitter Link:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('t_link')); ?>" name="<?php echo esc_attr($this->get_field_name('t_link')); ?>" type="text" value="<?php echo esc_attr($t_link); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('f_icon_class')); ?>"><?php esc_attr_e('Facebook Icon Class:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('f_icon_class')); ?>" name="<?php echo esc_attr($this->get_field_name('f_icon_class')); ?>" type="text" value="<?php echo esc_attr($f_icon_class); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('f_link')); ?>"><?php esc_attr_e('Facebook Link:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('f_link')); ?>" name="<?php echo esc_attr($this->get_field_name('f_link')); ?>" type="text" value="<?php echo esc_attr($f_link); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('i_icon_class')); ?>"><?php esc_attr_e('Instagram Icon Class:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('i_icon_class')); ?>" name="<?php echo esc_attr($this->get_field_name('i_icon_class')); ?>" type="text" value="<?php echo esc_attr($i_icon_class); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('i_link')); ?>"><?php esc_attr_e('Instagram Link:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('i_link')); ?>" name="<?php echo esc_attr($this->get_field_name('i_link')); ?>" type="text" value="<?php echo esc_attr($i_link); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('l_icon_class')); ?>"><?php esc_attr_e('Linkedin Icon Class:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('l_icon_class')); ?>" name="<?php echo esc_attr($this->get_field_name('l_icon_class')); ?>" type="text" value="<?php echo esc_attr($l_icon_class); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('l_link')); ?>"><?php esc_attr_e('Linkedin Link:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('l_link')); ?>" name="<?php echo esc_attr($this->get_field_name('l_link')); ?>" type="text" value="<?php echo esc_attr($l_link); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('p_icon_class')); ?>"><?php esc_attr_e('Pinterest Icon Class:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('p_icon_class')); ?>" name="<?php echo esc_attr($this->get_field_name('p_icon_class')); ?>" type="text" value="<?php echo esc_attr($p_icon_class); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('p_link')); ?>"><?php esc_attr_e('Pinterest Link:', 'ion_theme'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('p_link')); ?>" name="<?php echo esc_attr($this->get_field_name('p_link')); ?>" type="text" value="<?php echo esc_attr($p_link); ?>">
        </p>
<?php
    }
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance){
        $instance = array();
        $instance['titlee'] = (!empty($new_instance['titlee'])) ? strip_tags($new_instance['titlee']) : '';
        $instance['t_icon_class'] = (!empty($new_instance['t_icon_class'])) ? strip_tags($new_instance['t_icon_class']) : '';
        $instance['t_link'] = (!empty($new_instance['t_link'])) ? strip_tags($new_instance['t_link']) : '';
        $instance['f_icon_class'] = (!empty($new_instance['f_icon_class'])) ? strip_tags($new_instance['f_icon_class']) : '';
        $instance['f_link'] = (!empty($new_instance['f_link'])) ? strip_tags($new_instance['f_link']) : '';
        $instance['i_icon_class'] = (!empty($new_instance['i_icon_class'])) ? strip_tags($new_instance['i_icon_class']) : '';
        $instance['i_link'] = (!empty($new_instance['i_link'])) ? strip_tags($new_instance['i_link']) : '';
        $instance['l_icon_class'] = (!empty($new_instance['l_icon_class'])) ? strip_tags($new_instance['l_icon_class']) : '';
        $instance['l_link'] = (!empty($new_instance['l_link'])) ? strip_tags($new_instance['l_link']) : '';
        $instance['p_icon_class'] = (!empty($new_instance['p_icon_class'])) ? strip_tags($new_instance['p_icon_class']) : '';
        $instance['p_link'] = (!empty($new_instance['p_link'])) ? strip_tags($new_instance['p_link']) : '';

        return $instance;
    }
}

function register_social_widget(){
    register_widget('social_widget');
}
add_action('widgets_init', 'register_social_widget');