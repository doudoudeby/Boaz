<?php
/**
 * Plugin Name: HappenStance Posts-Slider Widget
 * Description: Displays the latest posts from the selected category as a slider.
 * Author: Tomas Toman	
 * Version: 1.0
*/

add_action('widgets_init', create_function('', 'return register_widget("happenstance_homepage_slider");'));
class happenstance_homepage_slider extends WP_Widget {
	function __construct() {
		$widget_ops = array('classname' => 'homepage-slider-posts', 'description' => __('Displays the latest posts from the selected category as a slider.', 'happenstance') );
		$control_ops = array('width' => 200, 'height' => 400);
		parent::__construct('happenstanceslider', __('HappenStance Posts-Slider', 'happenstance'), $widget_ops, $control_ops);
	}
	function form($instance) {
		// outputs the options form on admin
    if ( $instance ) {
			$title = esc_attr( $instance[ 'title' ] );
		}
		else {
			$title = __( '', 'happenstance' );
		} 

	  if ( $instance ) {
			$category = esc_attr( $instance[ 'category' ] );
		}
		else {
			$category = __( '', 'happenstance' );
		} 

		if ( $instance ) {
			$numberposts = esc_attr( $instance[ 'numberposts' ] );
		}
		else {
			$numberposts = __( '5', 'happenstance' );
    } ?>
<!-- Title -->
<p>
	<label for="<?php echo $this->get_field_id('title'); ?>">
		<?php _e('Title:', 'happenstance'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<!-- Category -->
<p>
	<label for="<?php echo $this->get_field_id('category'); ?>">
		<?php _e('Category:', 'happenstance'); ?>
	</label>
<?php wp_dropdown_categories( array(
    'name' => $this->get_field_name('category'),
    'id' => $this->get_field_id('category'),
    'class' => 'widefat',
    'selected' => $instance["category"],
    'show_option_none' => '- not selected -'
) ); ?>
<p style="font-size: 10px; color: #999; margin: 0; padding: 0px;">
	<?php _e('Select a category of posts.', 'happenstance'); ?>
</p>
</p>
<!-- Number of posts -->
<p>
	<label for="<?php echo $this->get_field_id('numberposts'); ?>">
		<?php _e('Number of posts:', 'happenstance'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('numberposts'); ?>" name="<?php echo $this->get_field_name('numberposts'); ?>" type="text" value="<?php echo $numberposts; ?>" />
<p style="font-size: 10px; color: #999; margin: 0; padding: 0px;">
	<?php _e('Insert here the number of latest posts from the selected category which you want to display.', 'happenstance'); ?>
</p>
</p>
<?php } 

function update($new_instance, $old_instance) {
		// processes widget options to be saved
		$instance = $old_instance;
    $instance['title'] = sanitize_text_field($new_instance['title']);
		$instance['category'] = $new_instance['category'];
		$instance['numberposts'] = sanitize_text_field($new_instance['numberposts']);
	return $instance;
	}

function widget($args, $instance) {
		// outputs the content of the widget
		 extract( $args );
      $title = apply_filters('widget_title', $instance['title']);
			$category = apply_filters('widget_category', $instance['category']);
			$numberposts = apply_filters('widget_numberposts', $instance['numberposts']); ?>
<?php echo $before_widget; ?>
  <section class="home-slider-posts">
<?php $args1 = array(
  'cat' => $category,
  'showposts' => $numberposts,
	'post_type' => 'post',
	'post_status' => 'publish'
);
$my_query = new WP_Query( $args1 );
$category_link = get_category_link( $category ); ?> 
                
    <h2 class="entry-headline"><span class="entry-headline-text"><a href="<?php if ( $category != '-1' ) { echo esc_url( $category_link ); } else { echo '#'; } ?>"><?php echo $title; ?></a></span></h2>
      <div class="flexslider">
        <ul class="slides">
<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>            
          <li><a title="<?php the_title(); ?>" href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { ?><?php the_post_thumbnail( 'slider-thumb' ); ?><?php } else { ?><img class="attachment-slider-thumb wp-post-image" src="<?php echo get_template_directory_uri(); ?>/images/slide.jpg" alt="<?php the_title(); ?>" /><?php } ?></a><a title="<?php the_title(); ?>" class="slider-link" href="<?php echo get_permalink(); ?>"><?php happenstance_short_title(); ?></a></li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
        </ul>
      </div>
  </section>
<?php echo $after_widget; ?>
<?php
	}
}
?>