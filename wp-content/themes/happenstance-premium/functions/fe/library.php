<?php 
/**
 * Library of Theme options functions.
 * @package HappenStance
 * @since HappenStance 1.0.0
*/
?>
<?php global $happenstance_options;
foreach ($happenstance_options as $value) {
	if (isset($value['id']) && get_option( $value['id'] ) === FALSE && isset($value['std'])) {
		${$value['id']} = $value['std'];
	}
	elseif (isset($value['id'])) { ${$value['id']} = get_option( $value['id'] ); }
} ?>
<?php 

// Display Breadcrumb navigation
function happenstance_get_breadcrumb() { 
		if (get_option('happenstance_display_breadcrumb') != 'Hide') { ?>
<?php if (function_exists( 'bcn_display' ) && !is_front_page()){ _e('<p class="breadcrumb-navigation">'); ?><?php bcn_display(); ?><?php _e('</p>');} ?>
<?php } 
} 

// Display featured images on single posts
function happenstance_get_display_image_post() { 
		if (get_option('happenstance_display_image_post') == '' || get_option('happenstance_display_image_post') == 'Display') { ?>
<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail(); ?>
<?php endif; ?>
<?php } 
}

// Display featured images on pages
function happenstance_get_display_image_page() { 
		if (get_option('happenstance_display_image_page') == '' || get_option('happenstance_display_image_page') == 'Display') { ?>
<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail(); ?>
<?php endif; ?>
<?php } 
} 

//Social Buttons 

//Embed for twiter
 add_filter('oembed_providers','twitter_oembed');
function twitter_oembed($a) {
	$a['#http(s)?://(www\.)?twitter.com/.+?/status(es)?/.*#i'] = array( 'http://api.twitter.com/1/statuses/oembed.{format}', true);
	return $a;
}

function happenstance_open_graph() {
		if ( is_single() || is_page() ){
		global $wp_query;
		$happenstance_postid = $wp_query->post->ID;
		$happenstance_title = single_post_title('', false);
    $happenstance_title_esc = esc_attr($happenstance_title);
		$happenstance_url = get_permalink($happenstance_postid);
		$happenstance_blogname = get_bloginfo('name');
			echo "\n<meta property='og:title' content='$happenstance_title_esc' />",
				"\n<meta property='og:site_name' content='$happenstance_blogname' />",
				"\n<meta property='og:url' content='$happenstance_url' />",
				"\n<meta property='og:type' content='article' />";
} }
		add_action('wp_head', 'happenstance_open_graph');
//
add_image_size( 'happenstance-fb-thumb', 320, 213, true );

function happenstance_fb_thumb() {
if ( is_single() || is_page() ) {
	if (has_post_thumbnail()) {
	$fbthumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'happenstance-fb-thumb');
	$fbthumburl = $fbthumb[0];
	echo "\n<meta property='og:image' content='$fbthumburl' />\n";
	}
	}
}
add_action( 'wp_head', 'happenstance_fb_thumb' );

//show social icons on page
function happenstance_social_buttons_page() { 
if (get_option('happenstance_share_buttons_page') == '' || get_option('happenstance_share_buttons_page') == 'Display') { ?>
	<div class="social-share">
  <fb:like href="<?php echo get_permalink(); ?>" send="true" layout="button_count" width="200" show_faces="true"></fb:like>
	<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>">Tweet</a>
	<g:plusone size="medium" href="<?php echo get_permalink(); ?>"></g:plusone>
	</div>
<?php } }

//show social icons on post
function happenstance_social_buttons_post() { 
if (get_option('happenstance_share_buttons_post') == '' || get_option('happenstance_share_buttons_post') == 'Display') {
?>
	<div class="social-share">
  <fb:like href="<?php echo get_permalink(); ?>" send="true" layout="button_count" width="200" show_faces="true"></fb:like>
	<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>">Tweet</a>
	<g:plusone size="medium" href="<?php echo get_permalink(); ?>"></g:plusone>
	</div>
<?php } }

//show social icons on post entries
function happenstance_social_buttons_post_entry() { 
if (get_option('happenstance_share_buttons_post_entry') == '' || get_option('happenstance_share_buttons_post_entry') == 'Display') {
?>
<?php if ( !is_search() ) { ?>
	<div class="social-share">
  <fb:like href="<?php echo get_permalink(); ?>" send="true" layout="button_count" width="200" show_faces="true"></fb:like>
	<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>">Tweet</a>
	<g:plusone size="medium" href="<?php echo get_permalink(); ?>"></g:plusone>
	</div>
<?php }}}

//show social icons on events
function happenstance_social_buttons_events() { 
if (get_option('happenstance_share_buttons_events') == '' || get_option('happenstance_share_buttons_events') == 'Display') { ?>
	<div class="social-share">
  <fb:like href="<?php echo get_permalink(); ?>" send="true" layout="button_count" width="200" show_faces="true"></fb:like>
	<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>">Tweet</a>
	<g:plusone size="medium" href="<?php echo get_permalink(); ?>"></g:plusone>
	</div>
<?php }}

//show social icons on products
function happenstance_social_buttons_products() { 
if (get_option('happenstance_share_buttons_products') == '' || get_option('happenstance_share_buttons_products') == 'Display') { ?>
	<div class="social-share">
  <fb:like href="<?php echo get_permalink(); ?>" send="true" layout="button_count" width="200" show_faces="true"></fb:like>
	<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>">Tweet</a>
	<g:plusone size="medium" href="<?php echo get_permalink(); ?>"></g:plusone>
	</div>
<?php } } ?>