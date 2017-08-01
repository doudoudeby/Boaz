<?php
/**
 * Plugin Name: PhotoStory Social Widget
 * Description: Display links to profiles on the most popular social networks.
 * Author: WPlook Team and Tomas Toman	
 * Version: 1.3
*/

add_action('widgets_init', create_function('', 'return register_widget("photostorysocial");'));
class photostorysocial extends WP_Widget {
	function photostorysocial() {
		$widget_ops = array('classname' => 'photostorysocial', 'description' => __('A Social widget by PhotoStory', 'photostory') );
		$control_ops = array('width' => 200, 'height' => 400);
		$this->WP_Widget('photostorytsoc', __('PhotoStory Social Widget', 'photostory'), $widget_ops, $control_ops);
	}
	function form($instance) {
		// outputs the options form on admin
if ( $instance ) {
			$title = esc_attr( $instance[ 'title' ] );
		}

		else {
			$title = __( '', 'photostory' );
		} 

	if ( $instance ) {
			$twitter = esc_url( $instance[ 'twitter' ] );
		}
		else {
			$twitter = __( '', 'photostory' );
		} 

		if ( $instance ) {
			$facebook = esc_url( $instance[ 'facebook' ] );
		}
		else {
			$facebook = __( '', 'photostory' );
		} 
		if ( $instance ) {
			$rss = esc_url( $instance[ 'rss' ] );
		}
		else {
			$rss = __( '', 'photostory' );
		} 
        if ( $instance ) {
			$googleplus = esc_url( $instance[ 'googleplus' ] );
		}
		else {
			$googleplus = __( '', 'photostory' );
		} 
        if ( $instance ) {
			$youtube = esc_url( $instance[ 'youtube' ] );
		}
		else {
			$youtube = __( '', 'photostory' );
		}
		
		if ( $instance ) {
			$linkedin = esc_url( $instance[ 'linkedin' ] );
		}
		else {
			$linkedin = __( '', 'photostory' );
		} 
        if ( $instance ) {
			$delicious = esc_url( $instance[ 'delicious' ] );
		}
		else {
			$delicious = __( '', 'photostory' );
		} 
        if ( $instance ) {
			$pinterest = esc_url( $instance[ 'pinterest' ] );
		}
		else {
			$pinterest = __( '', 'photostory' );
		}
     	 if ( $instance ) {
			$flickr = esc_url( $instance[ 'flickr' ] );
		}
		else {
			$flickr = __( '', 'photostory' );
		}		
		?>
<!-- Title-->
<p>
	<label for="<?php echo $this->get_field_id('title'); ?>">
		<?php _e('Title:', 'photostory'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<!-- Twitter-->
<p>
	<label for="<?php echo $this->get_field_id('twitter'); ?>"> <img style="float: left; margin: 0 5px 0px 0; width: 12px; height: 12px;" src="<?php echo esc_url(get_template_directory_uri());  ?>/functions/be/images/icons/twitter.png" />
		<?php _e('Twitter:', 'photostory'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>" />
<p style="font-size: 10px; color: #999; margin: 0; padding: 0px;">
	<?php _e('Insert the full URL of your Twitter profile.', 'photostory'); ?>
</p>
</p>
<!-- Facebook-->
<p>
	<label for="<?php echo $this->get_field_id('facebook'); ?>"> <img style="float: left; margin: 0 5px 0px 0; width: 12px; height: 12px;" src="<?php echo esc_url(get_template_directory_uri());  ?>/functions/be/images/icons/facebook.png" />
		<?php _e('Facebook:', 'photostory'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>" />
<p style="font-size: 10px; color: #999; margin: 0; padding: 0px;">
	<?php _e('Insert the full URL of your Facebook profile, page or group.', 'photostory'); ?>
</p>
</p>
<!-- RSS-->
<p>
	<label for="<?php echo $this->get_field_id('rss'); ?>"> <img style="float: left; margin: 0 5px 0px 0; width: 12px; height: 12px;" src="<?php echo esc_url(get_template_directory_uri());  ?>/functions/be/images/icons/rss.png" />
		<?php _e('RSS:', 'photostory'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('rss'); ?>" name="<?php echo $this->get_field_name('rss'); ?>" type="text" value="<?php echo $rss; ?>" />
<p style="font-size: 10px; color: #999; margin: 0; padding: 0px;">
	<?php _e('Insert the Url of your RSS. You may include your RSS from Feedburner.', 'photostory'); ?>
</p>
</p>
<!-- Google Plus-->
<p>
	<label for="<?php echo $this->get_field_id('googleplus'); ?>"> <img style="float: left; margin: 0 5px 0px 0; width: 12px; height: 12px;" src="<?php echo esc_url(get_template_directory_uri());  ?>/functions/be/images/icons/google-plus.png" />
		<?php _e('Google Plus:', 'photostory'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('googleplus'); ?>" name="<?php echo $this->get_field_name('googleplus'); ?>" type="text" value="<?php echo $googleplus; ?>" />
<p style="font-size: 10px; color: #999; margin: 0; padding: 0px;">
	<?php _e('Insert the full URL of your Google Plus profile', 'photostory'); ?>
</p>
</p>
<!-- You Tube-->
<p>
	<label for="<?php echo $this->get_field_id('youtube'); ?>"> <img style="float: left; margin: 0 5px 0px 0; width: 12px; height: 12px;" src="<?php echo esc_url(get_template_directory_uri());  ?>/functions/be/images/icons/youtube.png" />
		<?php _e('You Tube:', 'photostory'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo $youtube; ?>" />
<p style="font-size: 10px; color: #999; margin: 0; padding: 0px;">
	<?php _e('Insert the full URL of your YouTube profile.', 'photostory'); ?>
</p>
</p>
<!-- Linkedin-->
<p>
	<label for="<?php echo $this->get_field_id('linkedin'); ?>"> <img style="float: left; margin: 0 5px 0px 0; width: 12px; height: 12px;" src="<?php echo esc_url(get_template_directory_uri());  ?>/functions/be/images/icons/linkedin.png" />
		<?php _e('Linkedin:', 'photostory'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo $linkedin; ?>" />
<p style="font-size: 10px; color: #999; margin: 0; padding: 0px;">
	<?php _e('Insert the full URL of your Linkedin profile.', 'photostory'); ?>
</p>
</p>
<!-- Delicious-->
<p>
	<label for="<?php echo $this->get_field_id('delicious'); ?>"> <img style="float: left; margin: 0 5px 0px 0; width: 12px; height: 12px;" src="<?php echo esc_url(get_template_directory_uri());  ?>/functions/be/images/icons/delicious.png" />
		<?php _e('Delicious:', 'photostory'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('delicious'); ?>" name="<?php echo $this->get_field_name('delicious'); ?>" type="text" value="<?php echo $delicious; ?>" />
<p style="font-size: 10px; color: #999; margin: 0; padding: 0px;">
	<?php _e('Insert the full URL of your Delicious profile.', 'photostory'); ?>
</p>
</p>
<!--Pinterest-->
<p>
	<label for="<?php echo $this->get_field_id('pinterest'); ?>"> <img style="float: left; margin: 0 5px 0px 0; width: 12px; height: 12px;" src="<?php echo esc_url(get_template_directory_uri());  ?>/functions/be/images/icons/pinterest.png" />
		<?php _e('Pinterest:', 'photostory'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>" name="<?php echo $this->get_field_name('pinterest'); ?>" type="text" value="<?php echo $pinterest; ?>" />
<p style="font-size: 10px; color: #999; margin: 0; padding: 0px;">
	<?php _e('Insert the full URL of your Pinterest profile.', 'photostory'); ?>
</p>
</p>
<!-- Flickr-->
<p>
	<label for="<?php echo $this->get_field_id('flickr'); ?>"> <img style="float: left; margin: 0 5px 0px 0; width: 12px; height: 12px;" src="<?php echo esc_url(get_template_directory_uri());  ?>/functions/be/images/icons/flickr.png" />
		<?php _e('Flickr:', 'photostory'); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id('flickr'); ?>" name="<?php echo $this->get_field_name('flickr'); ?>" type="text" value="<?php echo $flickr; ?>" />
<p style="font-size: 10px; color: #999; margin: 0; padding: 0px;">
	<?php _e('Insert the full URL of your Flickr profile.', 'photostory'); ?>
</p>
</p>
<?php 

	} 

function update($new_instance, $old_instance) {
		// processes widget options to be saved
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field($new_instance['title']);
		$instance['twitter'] = sanitize_text_field($new_instance['twitter']);
		$instance['facebook'] = $new_instance['facebook'];
		$instance['rss'] = $new_instance['rss'];
		$instance['googleplus'] = $new_instance['googleplus'];
		$instance['youtube'] = $new_instance['youtube'];
		$instance['linkedin'] = $new_instance['linkedin'];
		$instance['delicious'] = $new_instance['delicious'];
		$instance['pinterest'] = $new_instance['pinterest'];
		$instance['flickr'] = $new_instance['flickr'];
	return $instance;
	}

function widget($args, $instance) {
		// outputs the content of the widget
		 extract( $args );
			$title = apply_filters('widget_title', $instance['title']);
			$twitter = apply_filters('widget_twitter', $instance['twitter']);
			$facebook = apply_filters('widget_facebook', $instance['facebook']);
			$rss = apply_filters('widget_rss', $instance['rss']);
			$googleplus = apply_filters('widget_googleplus', $instance['googleplus']);
			$youtube = apply_filters('widget_youtube', $instance['youtube']);
			$linkedin = apply_filters('widget_linkedin', $instance['linkedin']);
			$delicious = apply_filters('widget_delicious', $instance['delicious']);
			$pinterest = apply_filters('widget_pinterest', $instance['pinterest']);
			$flickr = apply_filters('widget_flickr', $instance['flickr']);

			?>
<?php if ($title=="") $title = "Social Widget"; ?>
<?php echo $before_widget; ?>
<?php if ( $title )
		echo $before_title . $title . $after_title; 
		echo "<div class='social-widget-body'>";
    // Facebook
		if ($facebook != "") {
			echo "<div class='social-item'>"."<a href='$facebook'><img src=\"". esc_url(get_template_directory_uri())  ."/images/icons/facebook.png\" alt=\"Facebook \" /></a><p><a href='$facebook'>Facebook</a></p>" ."</div>";
		}
		// Twitter
		if ($twitter != "") {
			echo "<div class='social-item'>"."<a href='$twitter'><img src=\"". esc_url(get_template_directory_uri())  ."/images/icons/twitter.png\" alt=\"Twitter \" /></a><p><a href='$twitter'>Twitter</a></p>" ."</div>";
		}		
		// Google Plus
		if ($googleplus != "") {
			echo "<div class='social-item'>"."<a href='$googleplus'><img src=\"". esc_url(get_template_directory_uri())  ."/images/icons/google-plus.png\" alt=\"Google Plus \" /></a><p><a href='$googleplus'>Google +</a></p>" ."</div>";
		}		
		// You Tube
		if ($youtube != "") {
			echo "<div class='social-item'>"."<a href='$youtube'><img src=\"". esc_url(get_template_directory_uri())  ."/images/icons/youtube.png\" alt=\"You Tube \" /></a><p><a href='$youtube'>You Tube</a></p>" ."</div>";
		}			
		// Linkedin
		if ($linkedin != "") {
			echo "<div class='social-item'>"."<a href='$linkedin'><img src=\"". esc_url(get_template_directory_uri())  ."/images/icons/linkedin.png\" alt=\"Linkedin \" /></a><p><a href='$linkedin'>Linkedin</a></p>" ."</div>";
		}			
		// Delicious
		if ($delicious != "") {
			echo "<div class='social-item'>"."<a href='$delicious'><img src=\"". esc_url(get_template_directory_uri())  ."/images/icons/delicious.png\" alt=\"Delicious\" /></a><p><a href='$delicious'>Delicious</a></p>" ."</div>";
		}			
		// Pinterest
		if ($pinterest != "") {
			echo "<div class='social-item'>"."<a href='$pinterest'><img src=\"". esc_url(get_template_directory_uri()) ."/images/icons/pinterest.png\" alt=\"Pinterest \" /></a><p><a href='$pinterest'>Pinterest</a></p>" ."</div>";
		}			
		// Flickr
	if ($flickr != "") {
			echo "<div class='social-item'>"."<a href='$flickr'><img src=\"". esc_url(get_template_directory_uri()) ."/images/icons/flickr.png\" alt=\"Flickr \" /></a><p><a href='$flickr'>Flickr</a></p>" ."</div>";
		}
    // RSS
		if ($rss != "") {
			echo "<div class='social-item'>"."<a href='$rss'><img src=\"". esc_url(get_template_directory_uri())  ."/images/icons/rss.png\" alt=\"RSS \" /></a><p><a href='$rss'>RSS</a></p>" ."</div>";
		}	
		echo "<div class='clear'></div></div>";
	 	echo $after_widget; ?>
<?php
	}
}
?>