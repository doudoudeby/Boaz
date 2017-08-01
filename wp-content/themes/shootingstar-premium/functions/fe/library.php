<?php 
/**
 * Library of Theme options functions.
 * @package ShootingStar
 * @since ShootingStar 1.0.0
*/
?>
<?php global $shootingstar_options;
foreach ($shootingstar_options as $value) {
	if (isset($value['id']) && get_option( $value['id'] ) === FALSE && isset($value['std'])) {
		${$value['id']} = $value['std'];
	}
	elseif (isset($value['id'])) { ${$value['id']} = get_option( $value['id'] ); }
} ?>
<?php 

// Display Breadcrumb navigation
function shootingstar_get_breadcrumb() { 
		if (get_option('shootingstar_display_breadcrumb') != 'Hide') { ?>
<?php if(function_exists( 'bcn_display' ) && !is_front_page()){ _e('<p class="breadcrumb-navigation">'); ?><?php bcn_display(); ?><?php _e('</p>');} ?>
<?php } 
} 

// Display featured images on single posts
function shootingstar_get_display_image_post() { 
		if (get_option('shootingstar_display_image_post') == '' || get_option('shootingstar_display_image_post') == 'Display') { ?>
<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail(); ?>
<?php endif; ?>
<?php } 
}

// Display featured images on pages
function shootingstar_get_display_image_page() { 
		if (get_option('shootingstar_display_image_page') == '' || get_option('shootingstar_display_image_page') == 'Display') { ?>
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

function shootingstar_open_graph() {
		if ( is_single() || is_page() ){
		global $wp_query;
		$shootingstar_postid = $wp_query->post->ID;
		$shootingstar_title = single_post_title('', false);
    $shootingstar_title_esc = esc_attr($shootingstar_title);
		$shootingstar_url = get_permalink($shootingstar_postid);
		$shootingstar_blogname = get_bloginfo('name');
			echo "\n<meta property='og:title' content='$shootingstar_title_esc' />",
				"\n<meta property='og:site_name' content='$shootingstar_blogname' />",
				"\n<meta property='og:url' content='$shootingstar_url' />",
				"\n<meta property='og:type' content='article' />";
} }
		add_action('wp_head', 'shootingstar_open_graph');
//
add_image_size( 'shootingstar-fb-thumb', 320, 213, true );

function shootingstar_fb_thumb() {
if ( is_single() || is_page() ) {
	if (has_post_thumbnail()) {
	$fbthumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'shootingstar-fb-thumb');
	$fbthumburl = $fbthumb[0];
	echo "\n<meta property='og:image' content='$fbthumburl' />\n";
	}
	}
}
add_action( 'wp_head', 'shootingstar_fb_thumb' );

//show social icons on page
function shootingstar_social_buttons_page() { 
if (get_option('shootingstar_share_buttons_page') == '' || get_option('shootingstar_share_buttons_page') == 'Display') { ?>
	<div class="social-share">
  <fb:like href="<?php echo get_permalink(); ?>" send="true" layout="button_count" width="200" show_faces="true"></fb:like>
	<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>">Tweet</a>
	<g:plusone size="medium" href="<?php echo get_permalink(); ?>"></g:plusone>
	</div>
<?php } }

//show social icons on post
function shootingstar_social_buttons_post() { 
if (get_option('shootingstar_share_buttons_post') == '' || get_option('shootingstar_share_buttons_post') == 'Display') {
?>
	<div class="social-share">
  <fb:like href="<?php echo get_permalink(); ?>" send="true" layout="button_count" width="200" show_faces="true"></fb:like>
	<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>">Tweet</a>
	<g:plusone size="medium" href="<?php echo get_permalink(); ?>"></g:plusone>
	</div>
<?php } }

//show social icons on products
function shootingstar_social_buttons_products() { 
if (get_option('shootingstar_share_buttons_products') == '' || get_option('shootingstar_share_buttons_products') == 'Display') { ?>
	<div class="social-share">
  <fb:like href="<?php echo get_permalink(); ?>" send="true" layout="button_count" width="200" show_faces="true"></fb:like>
	<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>">Tweet</a>
	<g:plusone size="medium" href="<?php echo get_permalink(); ?>"></g:plusone>
	</div>
<?php }} ?>