<?php 
/**
 * Library of Theme options functions.
 * @package PhotoStory
 * @since PhotoStory 1.0.0
*/
?>
<?php global $photostory_options;
foreach ($photostory_options as $value) {
	if (isset($value['id']) && get_option( $value['id'] ) === FALSE && isset($value['std'])) {
		$$value['id'] = $value['std'];
	}
	elseif (isset($value['id'])) { $$value['id'] = get_option( $value['id'] ); }
} ?>
<?php 

// Display Breadcrumb navigation
function photostory_get_breadcrumb() { 
		if (get_option('photostory_display_breadcrumb') != 'Hide') { ?>
		<?php if(function_exists( 'bcn_display' ) && !is_front_page()){ _e('<p class="breadcrumb-navigation">'); ?><?php bcn_display(); ?><?php _e('</p>');} ?>
<?php } 
} 

// Display featured images on single posts
function photostory_get_display_image_post() { 
		if (get_option('photostory_display_image_post') == '' || get_option('photostory_display_image_post') == 'Display') { ?>
<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail(); ?>
<?php endif; ?>
<?php } 
}

// Display featured images on pages
function photostory_get_display_image_page() { 
		if (get_option('photostory_display_image_page') == '' || get_option('photostory_display_image_page') == 'Display') { ?>
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

function photostory_open_graph() {
		if ( is_single() || is_page() ){
		global $wp_query;
		$photostory_postid = $wp_query->post->ID;
		$photostory_title = single_post_title('', false);
    $photostory_title_esc = esc_attr($photostory_title);
		$photostory_url = get_permalink($photostory_postid);
		$photostory_blogname = get_bloginfo('name');
			echo "\n<meta property='og:title' content='$photostory_title_esc' />",
				"\n<meta property='og:site_name' content='$photostory_blogname' />",
				"\n<meta property='og:url' content='$photostory_url' />",
				"\n<meta property='og:type' content='article' />";
} }
		add_action('wp_head', 'photostory_open_graph');
//
add_image_size( 'photostory-fb-thumb', 320, 213, true );

function photostory_fb_thumb() {
if ( is_single() || is_page() ) {
	if (has_post_thumbnail()) {
	$fbthumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'photostory-fb-thumb');
	$fbthumburl = $fbthumb[0];
	echo "\n<meta property='og:image' content='$fbthumburl' />\n";
	}
	}
}
add_action( 'wp_head', 'photostory_fb_thumb' );

//show social icons on page
function photostory_social_buttons_page() { 
if (get_option('photostory_share_buttons_page') == '' || get_option('photostory_share_buttons_page') == 'Display') { ?>
	<div class="social-share<?php if ( !comments_open() ) { ?> social-share-without-comments<?php } ?>">
  <fb:like href="<?php echo get_permalink(); ?>" send="true" layout="button_count" width="200" show_faces="true"></fb:like>
	<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>">Tweet</a>
	<g:plusone size="medium" href="<?php echo get_permalink(); ?>"></g:plusone>
	</div>
<?php } }

//show social icons on post
function photostory_social_buttons_post() { 
if (get_option('photostory_share_buttons_post') == '' || get_option('photostory_share_buttons_post') == 'Display') {
?>
	<div class="social-share<?php if ( !comments_open() && get_option('photostory_next_preview_post') == 'Hide' && get_option('photostory_display_related_posts') == 'Hide' ) { ?> social-share-without-comments<?php } ?>">
  <fb:like href="<?php echo get_permalink(); ?>" send="true" layout="button_count" width="200" show_faces="true"></fb:like>
	<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>">Tweet</a>
	<g:plusone size="medium" href="<?php echo get_permalink(); ?>"></g:plusone>
	</div>
<?php } }

//show social icons on post entries
function photostory_social_buttons_post_entry() { 
if (get_option('photostory_share_buttons_post_entry') == '' || get_option('photostory_share_buttons_post_entry') == 'Display') {
?>
<?php if ( !is_search() ) { ?>
	<div class="social-share">
  <fb:like href="<?php echo get_permalink(); ?>" send="true" layout="button_count" width="200" show_faces="true"></fb:like>
	<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>">Tweet</a>
	<g:plusone size="medium" href="<?php echo get_permalink(); ?>"></g:plusone>
	</div>
<?php }}} ?>