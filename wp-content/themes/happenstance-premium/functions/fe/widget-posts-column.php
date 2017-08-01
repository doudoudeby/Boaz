<?php
/**
 * Plugin Name: HappenStance Posts-Column Widget
 * Description: Displays the latest posts from the selected category as a column with highlighted first post.
 * Author: Tomas Toman	
 * Version: 1.0
*/

add_action('widgets_init', create_function('', 'return register_widget("happenstance_homepage_column");'));
class happenstance_homepage_column extends WP_Widget {
	function __construct() {
		$widget_ops = array('classname' => 'homepage-column-posts', 'description' => __('Displays the latest posts from the selected category as a column with highlighted first post.', 'happenstance') );
		$control_ops = array('width' => 200, 'height' => 400);
		parent::__construct('happenstancecolumn', __('HappenStance Posts-Column', 'happenstance'), $widget_ops, $control_ops);
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
  <section class="home-column-posts">
<?php $args1 = array(
  'cat' => $category,
  'showposts' => $numberposts,
	'post_type' => 'post',
	'post_status' => 'publish'
);
$my_query = new WP_Query( $args1 );
$category_link = get_category_link( $category ); ?> 
                
<h2 class="entry-headline"><span class="entry-headline-text"><a href="<?php if ( $category != '-1' ) { echo esc_url( $category_link ); } else { echo '#'; } ?>"><?php echo $title; ?></a></span></h2>

<?php if ($my_query->have_posts()) : $count = 0;
while ($my_query->have_posts()) : $my_query->the_post();
$count++; 
if ($count == 1) { ?>      
      <article class="post-entry post-entry-column-first">
        <div class="post-content">
<?php if ( has_post_thumbnail() ) { ?>
      <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
<?php } ?>
          <div class="post-entry-content">
            <h2 class="post-entry-headline"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="post-meta">
              <span class="post-info-author"><i class="icon_pencil-edit" aria-hidden="true"></i> <?php the_author_posts_link(); ?></span>
              <span class="post-info-date"><i class="icon_clock_alt" aria-hidden="true"></i> <a href="<?php echo get_permalink(); ?>"><?php echo get_the_date(); ?></a></span>
<?php if ( comments_open() ) { ?>
              <span class="post-info-comments"><i class="icon_comment_alt" aria-hidden="true"></i> <a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></span>
<?php } ?>
<?php if ( has_tag() ) { ?>
<?php the_tags( '<span class="post-info-tags"><i class="icon_tag_alt" aria-hidden="true"></i> ', ', ', '</span>' ); ?>
<?php } ?>
            </p>
<?php the_excerpt(); ?>
          </div>
        </div>
      </article>
      
<?php } else { ?>
      <article class="post-entry post-entry-column">
        <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'square-thumb' ); ?></a>
        <div class="post-content">
          <h2 class="post-entry-headline"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="post-meta">
            <span class="post-info-author"><i class="icon_pencil-edit" aria-hidden="true"></i> <?php the_author_posts_link(); ?></span>
            <span class="post-info-date"><i class="icon_clock_alt" aria-hidden="true"></i> <a href="<?php echo get_permalink(); ?>"><?php echo get_the_date(); ?></a></span>
<?php if ( comments_open() ) { ?>
            <span class="post-info-comments"><i class="icon_comment_alt" aria-hidden="true"></i> <a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></span>
<?php } ?>
          </p>
        </div>
      </article>
<?php } ?>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
  </section>
<?php echo $after_widget; ?>
<?php
	}
}
?>