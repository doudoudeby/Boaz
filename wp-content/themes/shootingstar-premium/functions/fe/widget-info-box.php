<?php
/**
 * Plugin Name: ShootingStar Info-Box Widget
 * Description: Displays a box with your custom text and link.
 * Author: Tomas Toman	
 * Version: 1.0
*/

add_action('widgets_init', create_function('', 'return register_widget("shootingstar_info_box");'));
class shootingstar_info_box extends WP_Widget {
	function __construct() {
		$widget_ops = array('classname' => 'homepage-info-box', 'description' => __('Displays a box with your custom text and icon.', 'shootingstar') );
		$control_ops = array('width' => 200, 'height' => 400);
		parent::__construct('infobox', __('ShootingStar Info-Box', 'shootingstar'), $widget_ops, $control_ops);
	}
	function form($instance) {
		// outputs the options form on admin
    if ( $instance ) {
			$icon = esc_attr( $instance[ 'icon' ] );
		}
		else {
			$icon = __( '', 'shootingstar' );
		}
    
    if ( $instance ) {
			$title = esc_attr( $instance[ 'title' ] );
		}
		else {
			$title = __( '', 'shootingstar' );
		} 

	  if ( $instance ) {
			$content = esc_attr( $instance[ 'content' ] );
		}
		else {
			$content = __( '', 'shootingstar' );
		} ?>
<!-- Icon -->
<p>
	<label for="<?php echo $this->get_field_id('icon'); ?>">
		<?php _e('Icon:', 'shootingstar'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('icon'); ?>" name="<?php echo $this->get_field_name('icon'); ?>" type="text" value="<?php echo $icon; ?>" />
  <p style="font-size: 10px; color: #999; margin: 0; padding: 0px;">
	<?php _e('Insert here the name of an icon (example: <strong>icon_calendar</strong>).', 'shootingstar'); ?>
</p>
</p>
<!-- Title -->
<p>
	<label for="<?php echo $this->get_field_id('title'); ?>">
		<?php _e('Title:', 'shootingstar'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<!-- Content -->
<p>
	<label for="<?php echo $this->get_field_id('content'); ?>">
		<?php _e('Text:', 'shootingstar'); ?>
	</label>
  <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>"><?php echo $content; ?></textarea>
</p> 
<?php } 

function update($new_instance, $old_instance) {
		// processes widget options to be saved
		$instance = $old_instance;
    $instance['icon'] = sanitize_text_field($new_instance['icon']);
    $instance['title'] = sanitize_text_field($new_instance['title']);
		$instance['content'] = esc_textarea($new_instance['content']);
	return $instance;
	}

function widget($args, $instance) {
		// outputs the content of the widget
		 extract( $args );
      $icon = apply_filters('widget_icon', $instance['icon']);
      $title = apply_filters('widget_title', $instance['title']);
			$content = apply_filters('widget_content', $instance['content']); ?>
<?php echo $before_widget; ?>
      <div class="info-box">
<?php if ( $icon != ''  ) { ?>
        <div class="info-box-icon"><span class="<?php echo $icon; ?>" aria-hidden="true"></span></div>
<?php } ?>
        <p class="info-box-headline"><?php echo $title; ?></p>
        <p class="info-box-content"><?php echo $content; ?></p>
      </div>
<?php echo $after_widget; ?>
<?php
	}
}
?>