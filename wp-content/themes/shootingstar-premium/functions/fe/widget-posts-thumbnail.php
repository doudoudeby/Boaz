<?php
/**
 * Plugin Name: ShootingStar Posts-Thumbnail Widget
 * Description: Displays the latest posts from the selected category as the thumbnails.
 * Author: Tomas Toman	
 * Version: 1.0
*/

add_action('widgets_init', create_function('', 'return register_widget("shootingstar_homepage_thumbnail");'));
class shootingstar_homepage_thumbnail extends WP_Widget {
	function __construct() {
		$widget_ops = array('classname' => 'homepage-thumbnail-posts', 'description' => __('Displays the latest posts from the selected category as the thumbnails.', 'shootingstar') );
		$control_ops = array('width' => 200, 'height' => 400);
		parent::__construct('shootingstarthumbnail', __('ShootingStar Posts-Thumbnail', 'shootingstar'), $widget_ops, $control_ops);
	}
	function form($instance) {
		// outputs the options form on admin
    if ( $instance ) {
			$title = esc_attr( $instance[ 'title' ] );
		}
		else {
			$title = __( '', 'shootingstar' );
		} 

	  if ( $instance ) {
			$category = esc_attr( $instance[ 'category' ] );
		}
		else {
			$category = __( '', 'shootingstar' );
		} 

		if ( $instance ) {
			$numberposts = esc_attr( $instance[ 'numberposts' ] );
		}
		else {
			$numberposts = __( '5', 'shootingstar' );
    } ?>
<!-- Title -->
<p>
	<label for="<?php echo $this->get_field_id('title'); ?>">
		<?php _e('Title:', 'shootingstar'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<!-- Category -->
<p>
	<label for="<?php echo $this->get_field_id('category'); ?>">
		<?php _e('Category:', 'shootingstar'); ?>
	</label>
<?php wp_dropdown_categories( array(
    'name' => $this->get_field_name('category'),
    'id' => $this->get_field_id('category'),
    'class' => 'widefat',
    'selected' => $instance["category"],
    'show_option_none' => '- not selected -'
) ); ?>
<p style="font-size: 10px; color: #999; margin: 0; padding: 0px;">
	<?php _e('Select a category of posts.', 'shootingstar'); ?>
</p>
</p>
<!-- Number of posts -->
<p>
	<label for="<?php echo $this->get_field_id('numberposts'); ?>">
		<?php _e('Number of posts:', 'shootingstar'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('numberposts'); ?>" name="<?php echo $this->get_field_name('numberposts'); ?>" type="text" value="<?php echo $numberposts; ?>" />
<p style="font-size: 10px; color: #999; margin: 0; padding: 0px;">
	<?php _e('Insert here the number of latest posts from the selected category which you want to display.', 'shootingstar'); ?>
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
  <section class="home-thumbnail-posts">
<?php $args1 = array(
  'cat' => $category,
  'showposts' => $numberposts,
	'post_type' => 'post',
	'post_status' => 'publish'
);
$my_query = new WP_Query( $args1 );
$category_link = get_category_link( $category ); ?> 
                
    <h2 class="entry-headline"><span class="entry-headline-text"><a href="<?php if ( $category != '-1' ) { echo esc_url( $category_link ); } else { echo '#'; } ?>"><?php echo $title; ?></a></span></h2>
      <div class="post-entry-thumbnails-wrapper">
<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>            
        <article class="post-entry-thumbnail">
        <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"><span class="thumbnail-hover" aria-hidden="true"><i class="icon_zoom-in_alt" aria-hidden="true"></i></span><?php if ( has_post_thumbnail() ) { ?><?php the_post_thumbnail( 'thumbnail-thumb' ); ?><?php } else { ?><img class="attachment-thumbnail-thumb wp-post-image" src="<?php echo get_template_directory_uri(); ?>/images/thumbnail.jpg" alt="<?php the_title(); ?>" /><?php } ?></a>
        </article>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
      </div>
  </section>
<?php echo $after_widget; ?>
<?php
	}
}
?>