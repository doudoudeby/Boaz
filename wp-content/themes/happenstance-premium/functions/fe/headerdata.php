<?php
/**
 * Headerdata of Theme options.
 * @package HappenStance
 * @since HappenStance 1.0.0
*/  
global $happenstance_options;
foreach ($happenstance_options as $value) {
	if (isset($value['id']) && get_option( $value['id'] ) === FALSE && isset($value['std'])) {
		${$value['id']} = $value['std'];
	}
	elseif (isset($value['id'])) { ${$value['id']} = get_option( $value['id'] ); }
}

// additional CSS
if(	!is_admin()){
function happenstance_fonts_include () {
// Google Fonts
$bodyfont = get_theme_mod('happenstance_body_google_fonts', get_option('happenstance_body_google_fonts', 'default'));
$headingfont = get_theme_mod('happenstance_headings_google_fonts', get_option('happenstance_headings_google_fonts', 'default'));
$descriptionfont = get_theme_mod('happenstance_description_google_fonts', get_option('happenstance_description_google_fonts', 'default'));
$headlinefont = get_theme_mod('happenstance_headline_google_fonts', get_option('happenstance_headline_google_fonts', 'default'));
$headlineboxfont = get_theme_mod('happenstance_headline_box_google_fonts', get_option('happenstance_headline_box_google_fonts', 'default'));
$postentryfont = get_theme_mod('happenstance_postentry_google_fonts', get_option('happenstance_postentry_google_fonts', 'default'));
$sidebarfont = get_theme_mod('happenstance_sidebar_google_fonts', get_option('happenstance_sidebar_google_fonts', 'default'));
$menufont = get_theme_mod('happenstance_menu_google_fonts', get_option('happenstance_menu_google_fonts', 'default'));

$fonturl = "//fonts.googleapis.com/css?family=";
$character_set = "&amp;subset=" . get_theme_mod('happenstance_character_set', get_option('happenstance_character_set', 'latin'));

$bodyfonturl = $fonturl.$bodyfont.$character_set;
$headingfonturl = $fonturl.$headingfont.$character_set;
$descriptionfonturl = $fonturl.$descriptionfont.$character_set;
$headlinefonturl = $fonturl.$headlinefont.$character_set;
$headlineboxfonturl = $fonturl.$headlineboxfont.$character_set;
$postentryfonturl = $fonturl.$postentryfont.$character_set;
$sidebarfonturl = $fonturl.$sidebarfont.$character_set;
$menufonturl = $fonturl.$menufont.$character_set;
	// Google Fonts
     if ($bodyfont != 'default' && $bodyfont != ''){
      wp_enqueue_style('happenstance-google-font1', $bodyfonturl); 
		 }
     if ($headingfont != 'default' && $headingfont != ''){
      wp_enqueue_style('happenstance-google-font2', $headingfonturl);
		 }
     if ($descriptionfont != 'default' && $descriptionfont != ''){
      wp_enqueue_style('happenstance-google-font3', $descriptionfonturl);
		 }
     if ($headlinefont != 'default' && $headlinefont != ''){
      wp_enqueue_style('happenstance-google-font4', $headlinefonturl); 
		 }
     if ($postentryfont != 'default' && $postentryfont != ''){
      wp_enqueue_style('happenstance-google-font5', $postentryfonturl); 
		 }
     if ($sidebarfont != 'default' && $sidebarfont != ''){
      wp_enqueue_style('happenstance-google-font6', $sidebarfonturl);
		 }
     if ($menufont != 'default' && $menufont != ''){
      wp_enqueue_style('happenstance-google-font8', $menufonturl);
		 }
     if ($headlineboxfont != 'default' && $headlineboxfont != ''){
      wp_enqueue_style('happenstance-google-font10', $headlineboxfonturl); 
		 }  
}
add_action( 'wp_enqueue_scripts', 'happenstance_fonts_include' );
}

// additional CSS
function happenstance_css_include () {
		if ( get_option('happenstance_css') == 'Gray' ){
			wp_enqueue_style('happenstance-style-gray', get_template_directory_uri().'/css/colors/gray.css');
		}
    
		if ( get_option('happenstance_css') == 'Green' ){
			wp_enqueue_style('happenstance-style-green', get_template_directory_uri().'/css/colors/green.css');
		}

		if ( get_option('happenstance_css') == 'Orange' ){
			wp_enqueue_style('happenstance-style-orange', get_template_directory_uri().'/css/colors/orange.css');
		}

		if ( get_option('happenstance_css') == 'Pink' ){
			wp_enqueue_style('happenstance-style-pink', get_template_directory_uri().'/css/colors/pink.css');
		}
    
    if ( get_option('happenstance_css') == 'Purple' ){
			wp_enqueue_style('happenstance-style-purple', get_template_directory_uri().'/css/colors/purple.css');
		}
    
    if ( get_option('happenstance_css') == 'Red' ){
			wp_enqueue_style('happenstance-style-red', get_template_directory_uri().'/css/colors/red.css');
		}

		if ( get_option('happenstance_css') == 'Turquoise' ){
			wp_enqueue_style('happenstance-style-turquoise', get_template_directory_uri().'/css/colors/turquoise.css');
		}
    
    if ( get_option('happenstance_layout') == 'Wide' ){
			wp_enqueue_style('happenstance-wide-layout', get_template_directory_uri().'/css/wide-layout.css');
		}
}
add_action( 'wp_enqueue_scripts', 'happenstance_css_include' );

//social scripts
if(	!is_admin() && ($happenstance_share_buttons_page == '' || $happenstance_share_buttons_page == 'Display' || $happenstance_share_buttons_post == '' || $happenstance_share_buttons_post == 'Display' || $happenstance_share_buttons_post_entry == '' || $happenstance_share_buttons_post_entry == 'Display' || $happenstance_share_buttons_products == '' || $happenstance_share_buttons_products == 'Display' || $happenstance_share_buttons_events == '' || $happenstance_share_buttons_events == 'Display') ) {

function happenstance_scripts_social() {
$share_buttons_language = get_option('happenstance_share_buttons_language') . '/all.js#xfbml=1';
$share_buttons_language_url = "//connect.facebook.net/";
$share_buttons_language_full_url = $share_buttons_language_url.$share_buttons_language;
	// Register all javascript files
	wp_enqueue_script('happenstance_js_google', '//apis.google.com/js/plusone.js', '', '', 'footer');
  if ( get_option('happenstance_share_buttons_language') != '' ) {
	wp_enqueue_script('happenstance_js_facebook', $share_buttons_language_full_url, '', '', 'footer'); } else {
  wp_enqueue_script('happenstance_js_facebook', '//connect.facebook.net/en_US/all.js#xfbml=1', '', '', 'footer'); }
	wp_enqueue_script('happenstance_js_twitter', '//platform.twitter.com/widgets.js', '', '', 'footer');
	}   
add_action('wp_enqueue_scripts', 'happenstance_scripts_social');	
}	

// Background color - Entry headlines
function happenstance_background_color() {
    $background_color = get_background_color();
    $layout_style = get_option('happenstance_layout'); 
		if ($background_color != '' && $layout_style == 'Wide') { ?>
		<?php _e('.entry-headline .entry-headline-text, .sidebar-headline .sidebar-headline-text { background-color: #'); ?><?php echo $background_color ?><?php _e('; }'); ?>
<?php } 
}

// Background Image Size
function happenstance_background_image_size() {
    $background_image_size = get_option('happenstance_background_image_size'); 
		if ($background_image_size == 'Cover') { ?>
		<?php _e('#wrapper { background-size: cover; }'); ?>
<?php } 
}

// Background Pattern Opacity
function happenstance_get_background_pattern_opacity() {
    $background_pattern_opacity = get_option('happenstance_background_pattern_opacity'); 
		if ($background_pattern_opacity != '' && $background_pattern_opacity != '100' && $background_pattern_opacity != 'Default') { ?>
		<?php _e('#wrapper .pattern { opacity: 0.'); ?><?php echo $background_pattern_opacity ?><?php _e('; filter: alpha(opacity='); ?><?php echo $background_pattern_opacity ?><?php _e('); }'); ?>
<?php } 
    elseif ($background_pattern_opacity == '100') { ?>
    <?php _e('#wrapper .pattern { opacity: 1; filter: alpha(opacity=100); }');
}  
} 

// Display Shadow
function happenstance_display_main_shadow() {
    $display_main_shadow = get_option('happenstance_display_main_shadow'); 
		if ($display_main_shadow == 'Hide') { ?>
		<?php _e('#wrapper #container-shadow { -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; }'); ?>
<?php } 
}

// Display Sidebar on Posts/Pages
function happenstance_display_sidebar() {
    $display_sidebar = get_option('happenstance_display_sidebar'); 
		if ($display_sidebar == 'Hide') { ?>
		<?php _e('.page #container #main-content #content, .single #container #main-content #content, .error404 #container #main-content #content, .tribe-events-page-template #container #main-content #content { width: 100%; }'); ?>
<?php } 
}

// Display Sidebar on Archives
function happenstance_display_sidebar_archives() {
    $display_sidebar_archives = get_option('happenstance_display_sidebar_archives'); 
		if ($display_sidebar_archives == 'Hide') { ?>
		<?php _e('.blog #container #main-content #content, .archive #container #main-content #content, .search #container #main-content #content { width: 100%; } .archive #sidebar { display: none; }'); ?>
<?php } 
}

// Display header Search Form - header content width
function happenstance_display_search_form() {
    $display_search_form = get_option('happenstance_display_search_form'); 
		if ($display_search_form == 'Hide') { ?>
		<?php _e('#wrapper #header .header-content .site-title, #wrapper #header .header-content .site-description, #wrapper #header .header-content .header-logo { max-width: 100%; }'); ?>
<?php } 
}

// Header Contact Information - Social Networks Links position
function happenstance_get_social_links_position() {
    $header_address = get_option('happenstance_header_address'); 
    $header_email = get_option('happenstance_header_email');
    $header_phone = get_option('happenstance_header_phone');
    $header_skype = get_option('happenstance_header_skype');
		if ($header_address != '' || $header_email != '' || $header_phone != '' || $header_skype != '') { ?>
		<?php _e('.top-navigation ul { float: right; } body .top-navigation a, body .top-navigation a:visited { padding: 0 0 0 16px; }'); ?>
<?php } 
}

// Number of Columns in the Grid
function happenstance_grid_columns() {
    $grid_columns = get_option('happenstance_grid_columns'); 
		if ($grid_columns == '4') { ?>
		<?php _e('body .grid-entry, body #main-content .js-masonry .sticky { width: 25%; }'); }
    elseif ($grid_columns == '2') { ?>
    <?php _e('body .grid-entry, body #main-content .js-masonry .sticky { width: 50%; }'); ?>
<?php } 
}

// Featured Images Hover Effect
function happenstance_featured_image_hover() {
    $featured_image_hover = get_option('happenstance_featured_image_hover'); 
		if ($featured_image_hover == 'Fade') { ?>
		<?php _e('#wrapper .post-entry .attachment-post-thumbnail, #wrapper .post-entry .attachment-thumbnail, #wrapper .post-entry .attachment-square-thumb, #wrapper .grid-entry .attachment-post-thumbnail, #wrapper .grid-entry .attachment-thumbnail, #wrapper .tribe-events-list .tribe-events-event-image img { -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; -ms-transition: all 1s ease; transition: all 1s ease; } #wrapper .post-entry .attachment-post-thumbnail:hover, #wrapper .post-entry .attachment-thumbnail:hover, #wrapper .post-entry .attachment-square-thumb:hover, #wrapper .grid-entry .attachment-post-thumbnail:hover, #wrapper .grid-entry .attachment-thumbnail:hover, #wrapper .tribe-events-list .tribe-events-event-image img:hover { opacity: 0.8; filter: alpha(opacity=80); }'); }
    elseif ($featured_image_hover == 'Tilt') { ?>
    <?php _e('#wrapper .post-entry .attachment-post-thumbnail, #wrapper .post-entry .attachment-thumbnail, #wrapper .post-entry .attachment-square-thumb, #wrapper .grid-entry .attachment-post-thumbnail, #wrapper .grid-entry .attachment-thumbnail, #wrapper .tribe-events-list .tribe-events-event-image img { -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; -ms-transition: all 1s ease; transition: all 1s ease; overflow: hidden; } #wrapper .post-entry .attachment-post-thumbnail:hover, #wrapper .post-entry .attachment-thumbnail:hover, #wrapper .post-entry .attachment-square-thumb:hover, #wrapper .grid-entry .attachment-post-thumbnail:hover, #wrapper .grid-entry .attachment-thumbnail:hover, #wrapper .tribe-events-list .tribe-events-event-image img:hover { -webkit-transform: rotate(2deg); -moz-transform: rotate(2deg); -o-transform: rotate(2deg); -ms-transform: rotate(2deg); transform: rotate(2deg); }'); }
    elseif ($featured_image_hover == 'Focus') { ?>
    <?php _e('#wrapper .post-entry .attachment-post-thumbnail, #wrapper .post-entry .attachment-thumbnail, #wrapper .post-entry .attachment-square-thumb, #wrapper .grid-entry .attachment-post-thumbnail, #wrapper .grid-entry .attachment-thumbnail, #wrapper .tribe-events-list .tribe-events-event-image img { -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; -ms-transition: all 1s ease; transition: all 1s ease; overflow: hidden; } #wrapper .post-entry .attachment-post-thumbnail:hover, #wrapper .post-entry .attachment-thumbnail:hover, #wrapper .post-entry .attachment-square-thumb:hover, #wrapper .grid-entry .attachment-post-thumbnail:hover, #wrapper .grid-entry .attachment-thumbnail:hover, #wrapper .tribe-events-list .tribe-events-event-image img:hover { border-radius: 50%; } '); }
    elseif ($featured_image_hover == 'Shadow') { ?>
    <?php _e('#wrapper .post-entry .attachment-post-thumbnail, #wrapper .post-entry .attachment-thumbnail, #wrapper .post-entry .attachment-square-thumb, #wrapper .grid-entry .attachment-post-thumbnail, #wrapper .grid-entry .attachment-thumbnail, #wrapper .tribe-events-list .tribe-events-event-image img { -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; -ms-transition: all 1s ease; transition: all 1s ease; } #wrapper .post-entry .attachment-post-thumbnail:hover, #wrapper .post-entry .attachment-thumbnail:hover, #wrapper .post-entry .attachment-square-thumb:hover, #wrapper .grid-entry .attachment-post-thumbnail:hover, #wrapper .grid-entry .attachment-thumbnail:hover, #wrapper .tribe-events-list .tribe-events-event-image img:hover { -webkit-box-shadow: 0 0 5px #333333; -moz-box-shadow: 0 0 5px #333333; box-shadow: 0 0 5px #333333; }'); ?>
<?php } 
}

// Display Meta Box on posts - post entries styling
function happenstance_display_meta_post_entry() {
    $display_meta_post_entry = get_option('happenstance_display_meta_post_entry'); 
		if ($display_meta_post_entry == 'Hide') { ?>
		<?php _e('#wrapper #main-content .post-entry .attachment-post-thumbnail, #wrapper #main-content .post-entry .attachment-thumbnail { margin-bottom: 17px; } #wrapper #main-content .post-entry .post-entry-content { margin-bottom: -4px; } #wrapper #main-content .post-entry .social-share { margin-bottom: 5px; padding: 0; } .grid-entry .video-thumbnail { margin-top: 10px; }'); ?>
<?php } 
}

// Carousel Box background color
function happenstance_get_carousel_background_color() {
    $carousel_background_color = get_theme_mod('happenstance_carousel_background_color', get_option('happenstance_carousel_background_color', '')); 
		if ($carousel_background_color != '#' && $carousel_background_color != '') { ?>
		<?php _e('#wrapper .ticker-box { background-color: '); ?><?php echo $carousel_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Carousel Arrows color
function happenstance_get_arrows_background_color() {
    $arrows_background_color = get_theme_mod('happenstance_arrows_background_color', get_option('happenstance_arrows_background_color', '')); 
		if ($arrows_background_color != '#' && $arrows_background_color != '') { ?>
		<?php _e('#wrapper #ticker-wrapper, #wrapper .ticker-box .ticker-arrow-1, #wrapper .ticker-box .ticker-arrow-2 { background-color: '); ?><?php echo $arrows_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Carousel Box Links color
function happenstance_get_carousel_links_color() {
    $carousel_links_color = get_theme_mod('happenstance_carousel_links_color', get_option('happenstance_carousel_links_color', '')); 
		if ($carousel_links_color != '#' && $carousel_links_color != '') { ?>
		<?php _e('#wrapper #ticker-wrapper ul li a { color: '); ?><?php echo $carousel_links_color ?><?php _e('; }'); ?>
<?php } 
}

// Carousel Box Links hover color
function happenstance_get_carousel_links_hover_color() {
    $carousel_links_hover_color = get_theme_mod('happenstance_carousel_links_hover_color', get_option('happenstance_carousel_links_hover_color', '')); 
		if ($carousel_links_hover_color != '#' && $carousel_links_hover_color != '') { ?>
		<?php _e('#wrapper #ticker-wrapper ul li a:hover { color: '); ?><?php echo $carousel_links_hover_color ?><?php _e('; }'); ?>
<?php } 
}

// Social Networks Links background color
function happenstance_get_top_menu_background_color() {
    $top_menu_background_color = get_theme_mod('happenstance_top_menu_background_color', get_option('happenstance_top_menu_background_color', '')); 
		if ($top_menu_background_color != '#' && $top_menu_background_color != '') { ?>
		<?php _e('#wrapper .top-navigation-wrapper { background-color: '); ?><?php echo $top_menu_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Social Networks Links border-bottom color
function happenstance_get_top_menu_border_color() {
    $top_menu_border_color = get_theme_mod('happenstance_top_menu_border_color', get_option('happenstance_top_menu_border_color', '')); 
		if ($top_menu_border_color != '#' && $top_menu_border_color != '') { ?>
		<?php _e('#wrapper .top-navigation-wrapper { border-color: '); ?><?php echo $top_menu_border_color ?><?php _e('; }'); ?>
<?php } 
}

// Social Networks Links color
function happenstance_get_social_icons_color() {
    $social_icons_color = get_theme_mod('happenstance_social_icons_color', get_option('happenstance_social_icons_color', '')); 
		if ($social_icons_color != '#' && $social_icons_color != '') { ?>
		<?php _e('#wrapper .top-navigation a, #wrapper .top-navigation a:visited { color: '); ?><?php echo $social_icons_color ?><?php _e('; }'); ?>
<?php } 
}

// Social Networks Links hover color
function happenstance_get_social_icons_hover_color() {
    $social_icons_hover_color = get_theme_mod('happenstance_social_icons_hover_color', get_option('happenstance_social_icons_hover_color', '')); 
		if ($social_icons_hover_color != '#' && $social_icons_hover_color != '') { ?>
		<?php _e('#wrapper .top-navigation ul a:hover, #wrapper .top-navigation ul :hover > a { color: '); ?><?php echo $social_icons_hover_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Menu background color
function happenstance_get_main_menu_background_color() {
    $main_menu_background_color = get_theme_mod('happenstance_main_menu_background_color', get_option('happenstance_main_menu_background_color', '')); 
		if ($main_menu_background_color != '#' && $main_menu_background_color != '') { ?>
		<?php _e('#wrapper #header .menu-box-wrapper, .js #container #header .menu-box .selectnav { background-color: '); ?><?php echo $main_menu_background_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Main Menu border color
function happenstance_get_main_menu_border_color() {
    $main_menu_border_color = get_theme_mod('happenstance_main_menu_border_color', get_option('happenstance_main_menu_border_color', '')); 
		if ($main_menu_border_color != '#' && $main_menu_border_color != '') { ?>
		<?php _e('#wrapper #header .menu-box-wrapper { border-color: '); ?><?php echo $main_menu_border_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Menu Links border color
function happenstance_get_main_menu_links_border_color() {
    $main_menu_links_border_color = get_theme_mod('happenstance_main_menu_links_border_color', get_option('happenstance_main_menu_links_border_color', '')); 
		if ($main_menu_links_border_color != '#' && $main_menu_links_border_color != '') { ?>
		<?php _e('#wrapper .menu-box .link-home, #wrapper .menu-box a { border-color: '); ?><?php echo $main_menu_links_border_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Menu drop-down submenus background color
function happenstance_get_main_submenu_background_color() {
    $main_submenu_background_color = get_theme_mod('happenstance_main_submenu_background_color', get_option('happenstance_main_submenu_background_color', '')); 
		if ($main_submenu_background_color != '#' && $main_submenu_background_color != '') { ?>
		<?php _e('#wrapper .menu-box ul ul { background-color: '); ?><?php echo $main_submenu_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Menu drop-down submenus border color
function happenstance_get_main_submenu_border_color() {
    $main_submenu_border_color = get_theme_mod('happenstance_main_submenu_border_color', get_option('happenstance_main_submenu_border_color', '')); 
		if ($main_submenu_border_color != '#' && $main_submenu_border_color != '') { ?>
		<?php _e('#wrapper #header .menu-box ul ul, #wrapper #header .menu-box ul ul li { border-color: '); ?><?php echo $main_submenu_border_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Menu drop-down submenus hover color
function happenstance_get_main_submenu_hover_color() {
    $main_submenu_hover_color = get_theme_mod('happenstance_main_submenu_hover_color', get_option('happenstance_main_submenu_hover_color', '')); 
		if ($main_submenu_hover_color != '#' && $main_submenu_hover_color != '') { ?>
		<?php _e('html #wrapper #header .menu-box ul ul a:hover, html #wrapper #header .menu-box ul ul :hover > a { background-color: '); ?><?php echo $main_submenu_hover_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Header Content background color
function happenstance_get_header_content_background_color() {
    $header_content_background_color = get_theme_mod('happenstance_header_content_background_color', get_option('happenstance_header_content_background_color', '')); 
		if ($header_content_background_color != '#' && $header_content_background_color != '') { ?>
		<?php _e('#wrapper #header .header-content-wrapper, #wrapper #header .header-content { background-color: '); ?><?php echo $header_content_background_color ?><?php _e('; } '); ?>
<?php } 
}

// Main Content background color
function happenstance_get_main_content_background_color() {
    $main_content_background_color = get_theme_mod('happenstance_main_content_background_color', get_option('happenstance_main_content_background_color', '')); 
		if ($main_content_background_color != '#' && $main_content_background_color != '') { ?>
		<?php _e('#wrapper #wrapper-content, #wrapper #main-content, #wrapper .entry-headline .entry-headline-text, #sidebar .sidebar-headline .sidebar-headline-text, #wrapper .tribe-events-list-separator-month span, #wrapper .happenstance_widget_content .tab_title.selected a { background-color: '); ?><?php echo $main_content_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Post Author’s Comments background color
function happenstance_get_author_comments_background_color() {
    $author_comments_background_color = get_theme_mod('happenstance_author_comments_background_color', get_option('happenstance_author_comments_background_color', '')); 
		if ($author_comments_background_color != '#' && $author_comments_background_color != '') { ?>
		<?php _e('#wrapper #comments .bypostauthor { background-color: '); ?><?php echo $author_comments_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Sticky Post background color
function happenstance_get_sticky_post_background_color() {
    $sticky_post_background_color = get_theme_mod('happenstance_sticky_post_background_color', get_option('happenstance_sticky_post_background_color', '')); 
		if ($sticky_post_background_color != '#' && $sticky_post_background_color != '') { ?>
		<?php _e('#wrapper #container #main-content .sticky, #wrapper #main-content .js-masonry .sticky .grid-entry-inner { background-color: '); ?><?php echo $sticky_post_background_color ?><?php _e('; }'); ?>
<?php } 
}

// HappenStance Posts-Thumbnail items hover color
function happenstance_get_posts_thumbnail_background_color() {
    $posts_thumbnail_background_color = get_theme_mod('happenstance_posts_thumbnail_background_color', get_option('happenstance_posts_thumbnail_background_color', '')); 
		if ($posts_thumbnail_background_color != '#' && $posts_thumbnail_background_color != '') { ?>
		<?php _e('#wrapper #container .post-entry-thumbnail .thumbnail-hover { background-color: '); ?><?php echo $posts_thumbnail_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Highlighted text background color
function happenstance_get_highlight_background_color() {
    $highlight_background_color = get_theme_mod('happenstance_highlight_background_color', get_option('happenstance_highlight_background_color', '')); 
		if ($highlight_background_color != '#' && $highlight_background_color != '') { ?>
		<?php _e('#wrapper #container .highlight-text { background-color: '); ?><?php echo $highlight_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer background color
function happenstance_get_footer_background_color() {
    $footer_background_color = get_theme_mod('happenstance_footer_background_color', get_option('happenstance_footer_background_color', '')); 
		if ($footer_background_color != '#' && $footer_background_color != '') { ?>
		<?php _e('html #wrapper #container #wrapper-footer, #wrapper .footer-headline-text { background-color: '); ?><?php echo $footer_background_color ?><?php _e('; } '); ?>
<?php } 
}

// Footer Notices background color
function happenstance_get_footer_notices_background_color() {
    $footer_notices_background_color = get_theme_mod('happenstance_footer_notices_background_color', get_option('happenstance_footer_notices_background_color', '')); 
		if ($footer_notices_background_color != '#' && $footer_notices_background_color != '') { ?>
		<?php _e('#wrapper #wrapper-footer .footer-signature { background-color: '); ?><?php echo $footer_notices_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Searchform border color
function happenstance_get_searchform_border_color() {
    $searchform_border_color = get_theme_mod('happenstance_searchform_border_color', get_option('happenstance_searchform_border_color', '')); 
		if ($searchform_border_color != '#' && $searchform_border_color != '') { ?>
		<?php _e('html #wrapper #searchform .searchform-wrapper #s { border-color: '); ?><?php echo $searchform_border_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Search Button background color
function happenstance_get_searchform_button_background_color() {
    $searchform_button_background_color = get_theme_mod('happenstance_searchform_button_background_color', get_option('happenstance_searchform_button_background_color', '')); 
		if ($searchform_button_background_color != '#' && $searchform_button_background_color != '') { ?>
		<?php _e('#wrapper #searchform .searchform-wrapper .send { background-color: '); ?><?php echo $searchform_button_background_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Search Button hover color
function happenstance_get_searchform_button_hover_color() {
    $searchform_button_hover_color = get_theme_mod('happenstance_searchform_button_hover_color', get_option('happenstance_searchform_button_hover_color', '')); 
		if ($searchform_button_hover_color != '#' && $searchform_button_hover_color != '') { ?>
		<?php _e('#wrapper #searchform .searchform-wrapper .send:hover { background-color: '); ?><?php echo $searchform_button_hover_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Form Fields background color
function happenstance_get_form_fields_background_color() {
    $form_fields_background_color = get_theme_mod('happenstance_form_fields_background_color', get_option('happenstance_form_fields_background_color', '')); 
		if ($form_fields_background_color != '#' && $form_fields_background_color != '') { ?>
		<?php _e('#searchform .searchform-wrapper #s, #wrapper input[type="text"], #wrapper input[type="file"], #wrapper input[type="password"], #wrapper input[type="number"], #wrapper input[type="search"], #wrapper input[type="email"], #wrapper input[type="url"], #wrapper textarea, #wrapper select { background-color: '); ?><?php echo $form_fields_background_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Form Fields border color
function happenstance_get_form_fields_border_color() {
    $form_fields_border_color = get_theme_mod('happenstance_form_fields_border_color', get_option('happenstance_form_fields_border_color', '')); 
		if ($form_fields_border_color != '#' && $form_fields_border_color != '') { ?>
		<?php _e('body #searchform .searchform-wrapper #s, #wrapper input[type="text"], #wrapper input[type="file"], #wrapper input[type="password"], #wrapper input[type="number"], #wrapper input[type="search"], #wrapper input[type="email"], #wrapper input[type="url"], #wrapper textarea, #wrapper select { border-color: '); ?><?php echo $form_fields_border_color ?><?php _e('; }'); ?>
<?php } 
}

// Buttons background color
function happenstance_get_form_buttons_background_color() {
    $form_buttons_background_color = get_theme_mod('happenstance_form_buttons_background_color', get_option('happenstance_form_buttons_background_color', '')); 
		if ($form_buttons_background_color != '#' && $form_buttons_background_color != '') { ?>
		<?php _e('#wrapper input[type="submit"], #wrapper input[type="reset"], #wrapper .custom-button, html #wrapper #container .panel-row-style-happenstance .origin-widget-button a, #wrapper #container .post-entry .read-more-button, #wrapper #container .grid-entry .read-more-button { background-color: '); ?><?php echo $form_buttons_background_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Buttons hover color
function happenstance_get_form_buttons_hover_color() {
    $form_buttons_hover_color = get_theme_mod('happenstance_form_buttons_hover_color', get_option('happenstance_form_buttons_hover_color', '')); 
		if ($form_buttons_hover_color != '#' && $form_buttons_hover_color != '') { ?>
		<?php _e('#wrapper input[type="submit"]:hover, #wrapper input[type="reset"]:hover, #wrapper .custom-button:hover, html #wrapper #container .panel-row-style-happenstance .origin-widget-button a:hover, #wrapper #container .post-entry .read-more-button:hover, #wrapper #container .grid-entry .read-more-button:hover { background: '); ?><?php echo $form_buttons_hover_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Table Headers background color
function happenstance_get_table_headers_background_color() {
    $table_headers_background_color = get_theme_mod('happenstance_table_headers_background_color', get_option('happenstance_table_headers_background_color', '')); 
		if ($table_headers_background_color != '#' && $table_headers_background_color != '') { ?>
		<?php _e('#wrapper table th { background-color: '); ?><?php echo $table_headers_background_color ?><?php _e('; }'); ?>
<?php } 
}

// TEXT COLORS AND FONTS
// Body font
function happenstance_get_body_font() {
    $bodyfont = get_theme_mod('happenstance_body_google_fonts', get_option('happenstance_body_google_fonts', 'default')); 
		if ($bodyfont != 'default' && $bodyfont != '') { ?>
		<?php _e('html body, #wrapper blockquote, #wrapper q, #wrapper #container #comments .comment, #wrapper #container #comments .comment time, #wrapper #container #commentform .form-allowed-tags, #wrapper #container #commentform p, #wrapper input, #wrapper textarea, #wrapper button, #wrapper select, #wrapper #content .breadcrumb-navigation, #wrapper #main-content .post-meta, html #wrapper .tribe-events-schedule h3, html #wrapper .tribe-events-schedule span, #wrapper #tribe-events-content .tribe-events-calendar .tribe-events-month-event-title { font-family: "'); ?><?php echo $bodyfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Body color
function happenstance_get_body_color() {
    $body_color = get_theme_mod('happenstance_body_color', get_option('happenstance_body_color', '')); 
		if ($body_color != '#' && $body_color != '') { ?>
		<?php _e('html body, #wrapper blockquote, #wrapper q, #wrapper #container #comments .comment, #wrapper #container #comments .comment time, #wrapper #container #commentform .form-allowed-tags, #wrapper #container #commentform p, #wrapper input, #wrapper textarea, #wrapper button, #wrapper select, #wrapper #content .breadcrumb-navigation, #wrapper #main-content .post-meta, html #wrapper .tribe-events-schedule h3, html #wrapper .tribe-events-schedule span, #wrapper #tribe-events-content .tribe-events-calendar .tribe-events-month-event-title { color: '); ?><?php echo $body_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Content area font size
function happenstance_get_body_google_fonts_size() {
    $body_google_fonts_size = get_theme_mod('happenstance_body_google_fonts_size', get_option('happenstance_body_google_fonts_size', '13')); 
		if ($body_google_fonts_size != '13' && $body_google_fonts_size != '') { ?>
		<?php _e('body p, body ul, body ol, body li, body dl, body address, body table { font-size: '); ?><?php echo $body_google_fonts_size ?><?php _e('px; }'); ?>
<?php } 
}

// Site title font
function happenstance_get_headings_google_fonts() {
    $headingfont = get_theme_mod('happenstance_headings_google_fonts', get_option('happenstance_headings_google_fonts', 'default')); 
		if ($headingfont != 'default' && $headingfont != '') { ?>
		<?php _e('#wrapper #header .site-title { font-family: "'); ?><?php echo $headingfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Site title font size
function happenstance_get_headings_google_fonts_size() {
    $headingfont_size = get_theme_mod('happenstance_headings_google_fonts_size', get_option('happenstance_headings_google_fonts_size', '48')); 
		if ($headingfont_size != '48' && $headingfont_size != '') { ?>
		<?php _e('#wrapper #header .site-title { font-size: '); ?><?php echo $headingfont_size ?><?php _e('px; }'); ?>
<?php } 
}

// Site title color
function happenstance_get_site_title_color() {
    $site_title_color = get_theme_mod('happenstance_site_title_color', get_option('happenstance_site_title_color', '')); 
		if ($site_title_color != '#' && $site_title_color != '') { ?>
		<?php _e('#wrapper #header .site-title a { color: '); ?><?php echo $site_title_color ?><?php _e('; }'); ?>
<?php } 
}

// Site title hover color
function happenstance_get_site_title_hover_color() {
    $site_title_hover_color = get_theme_mod('happenstance_site_title_hover_color', get_option('happenstance_site_title_hover_color', '')); 
		if ($site_title_hover_color != '#' && $site_title_hover_color != '') { ?>
		<?php _e('#wrapper #header .site-title a:hover { color: '); ?><?php echo $site_title_hover_color ?><?php _e('; }'); ?>
<?php } 
}

// Contact Information color
function happenstance_get_contact_color() {
    $contact_color = get_theme_mod('happenstance_contact_color', get_option('happenstance_contact_color', '')); 
		if ($contact_color != '#' && $contact_color != '') { ?>
		<?php _e('#wrapper .header-contact { color: '); ?><?php echo $contact_color ?><?php _e('; }'); ?>
<?php } 
}

// Contact Information Icons color
function happenstance_get_contact_icons_color() {
    $contact_icons_color = get_theme_mod('happenstance_contact_icons_color', get_option('happenstance_contact_icons_color', '')); 
		if ($contact_icons_color != '#' && $contact_icons_color != '') { ?>
		<?php _e('#wrapper .header-contact span i { color: '); ?><?php echo $contact_icons_color ?><?php _e('; }'); ?>
<?php } 
}

// Site description font
function happenstance_get_description_font() {
    $descriptionfont = get_theme_mod('happenstance_description_google_fonts', get_option('happenstance_description_google_fonts', 'default')); 
		if ($descriptionfont != 'default' && $descriptionfont != '') { ?>
		<?php _e('#wrapper #header .site-description { font-family: "'); ?><?php echo $descriptionfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Site description color
function happenstance_get_site_description_color() {
    $site_description_color = get_theme_mod('happenstance_site_description_color', get_option('happenstance_site_description_color', '')); 
		if ($site_description_color != '#' && $site_description_color != '') { ?>
		<?php _e('#wrapper #header .site-description { color: '); ?><?php echo $site_description_color ?><?php _e('; }'); ?>
<?php } 
}

// Site description font size
function happenstance_get_description_font_size() {
    $descriptionfont_size = get_theme_mod('happenstance_description_google_fonts_size', get_option('happenstance_description_google_fonts_size', '20')); 
		if ($descriptionfont_size != '20' && $descriptionfont_size != '') { ?>
		<?php _e('#wrapper #header .site-description { font-size: '); ?><?php echo $descriptionfont_size ?><?php _e('px; }'); ?>
<?php } 
}

// Page/Post Title color
function happenstance_get_main_headlines_color() {
    $main_headlines_color = get_theme_mod('happenstance_main_headlines_color', get_option('happenstance_main_headlines_color', '')); 
		if ($main_headlines_color != '#' && $main_headlines_color != '') { ?>
		<?php _e('#wrapper #main-content #content .content-headline .entry-headline, .blog #main-content #content .entry-headline, html #wrapper #container .tribe-events-single-event-title, html #wrapper #container .tribe-events-page-title { color: '); ?><?php echo $main_headlines_color ?><?php _e('; }'); ?>
<?php } 
}

// Page/post headlines font
function happenstance_get_headlines_font() {
    $headlinefont = get_theme_mod('happenstance_headline_google_fonts', get_option('happenstance_headline_google_fonts', 'default')); 
    if ($headlinefont != 'default' && $headlinefont != '') { ?>
    <?php _e('#wrapper h1, #wrapper h2, #wrapper h3, #wrapper h4, #wrapper h5, #wrapper h6, #wrapper #container .navigation .section-heading, #wrapper .info-box .info-box-headline, #wrapper #comments .entry-headline { font-family: "'); ?><?php echo $headlinefont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Page/post headlines color
function happenstance_get_headlines_color() {
    $headlines_color = get_theme_mod('happenstance_headlines_color', get_option('happenstance_headlines_color', '')); 
		if ($headlines_color != '#' && $headlines_color != '') { ?>
		<?php _e('#wrapper h1, #wrapper h2, #wrapper h3, #wrapper h4, #wrapper h5, #wrapper h6, #wrapper #container .navigation .section-heading, #wrapper .info-box .info-box-headline, #wrapper #comments .entry-headline { color: '); ?><?php echo $headlines_color ?><?php _e('; }'); ?>
<?php } 
}

// H1 Headlines font size
function happenstance_get_headline_h1_size() {
    $headline_h1_size = get_theme_mod('happenstance_headline_h1_size', get_option('happenstance_headline_h1_size', '27')); 
		if ($headline_h1_size != '27' && $headline_h1_size != '') { ?>
		<?php _e('#wrapper h1, html #wrapper #container .tribe-events-single-event-title, html #wrapper #container .tribe-events-page-title { font-size: '); ?><?php echo $headline_h1_size ?><?php _e('px; }'); ?>
<?php } 
}

// H2 Headlines font size
function happenstance_get_headline_h2_size() {
    $headline_h2_size = get_theme_mod('happenstance_headline_h2_size', get_option('happenstance_headline_h2_size', '21')); 
		if ($headline_h2_size != '21' && $headline_h2_size != '') { ?>
		<?php _e('#wrapper h2, #wrapper #comments .entry-headline { font-size: '); ?><?php echo $headline_h2_size ?><?php _e('px; }'); ?>
<?php } 
}

// H3 Headlines font size
function happenstance_get_headline_h3_size() {
    $headline_h3_size = get_theme_mod('happenstance_headline_h3_size', get_option('happenstance_headline_h3_size', '18')); 
		if ($headline_h3_size != '18' && $headline_h3_size != '') { ?>
		<?php _e('#wrapper h3 { font-size: '); ?><?php echo $headline_h3_size ?><?php _e('px; }'); ?>
<?php } 
}

// H4 Headlines font size
function happenstance_get_headline_h4_size() {
    $headline_h4_size = get_theme_mod('happenstance_headline_h4_size', get_option('happenstance_headline_h4_size', '16')); 
		if ($headline_h4_size != '16' && $headline_h4_size != '') { ?>
		<?php _e('#wrapper h4 { font-size: '); ?><?php echo $headline_h4_size ?><?php _e('px; }'); ?>
<?php } 
}

// H5 Headlines font size
function happenstance_get_headline_h5_size() {
    $headline_h5_size = get_theme_mod('happenstance_headline_h5_size', get_option('happenstance_headline_h5_size', '14')); 
		if ($headline_h5_size != '14' && $headline_h5_size != '') { ?>
		<?php _e('#wrapper h5 { font-size: '); ?><?php echo $headline_h5_size ?><?php _e('px; }'); ?>
<?php } 
}

// H6 Headlines font size
function happenstance_get_headline_h6_size() {
    $headline_h6_size = get_theme_mod('happenstance_headline_h6_size', get_option('happenstance_headline_h6_size', '13')); 
		if ($headline_h6_size != '13' && $headline_h6_size != '') { ?>
		<?php _e('#wrapper h6 { font-size: '); ?><?php echo $headline_h6_size ?><?php _e('px; }'); ?>
<?php } 
}

// Breadcrumb Navigation/Post Meta color
function happenstance_get_meta_color() {
    $meta_color = get_theme_mod('happenstance_meta_color', get_option('happenstance_meta_color', '')); 
		if ($meta_color != '#' && $meta_color != '') { ?>
		<?php _e('#wrapper #main-content .breadcrumb-navigation, #wrapper #main-content .post-meta, #wrapper #main-content .post-info, #wrapper .grid-entry .grid-category, #wrapper .grid-entry .grid-tags { color: '); ?><?php echo $meta_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Breadcrumb Navigation/Post Meta Links color
function happenstance_get_meta_links_color() {
    $meta_links_color = get_theme_mod('happenstance_meta_links_color', get_option('happenstance_meta_links_color', '')); 
		if ($meta_links_color != '#' && $meta_links_color != '') { ?>
		<?php _e('#wrapper #main-content .breadcrumb-navigation a, #wrapper #main-content .post-meta a, #wrapper #main-content .post-info a, #wrapper .grid-entry .grid-category a, #wrapper .grid-entry .grid-tags a { color: '); ?><?php echo $meta_links_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// HappenStance Posts Widgets headlines font
function happenstance_get_headline_box_google_fonts() {
    $headline_box_google_fonts = get_theme_mod('happenstance_headline_box_google_fonts', get_option('happenstance_headline_box_google_fonts', 'default')); 
		if ($headline_box_google_fonts != 'default' && $headline_box_google_fonts != '') { ?>
		<?php _e('#wrapper #container #main-content section .entry-headline { font-family: "'); ?><?php echo $headline_box_google_fonts ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// HappenStance Posts Widgets headlines color
function happenstance_get_homepage_headlines_color() {
    $homepage_headlines_color = get_theme_mod('happenstance_homepage_headlines_color', get_option('happenstance_homepage_headlines_color', '')); 
		if ($homepage_headlines_color != '#' && $homepage_headlines_color != '') { ?>
		<?php _e('#wrapper #container #main-content section .entry-headline { color: '); ?><?php echo $homepage_headlines_color ?><?php _e('; }'); ?>
<?php } 
}

// HappenStance Posts Widgets headlines font size
function happenstance_get_headline_box_google_fonts_size() {
    $headline_box_google_fonts_size = get_theme_mod('happenstance_headline_box_google_fonts_size', get_option('happenstance_headline_box_google_fonts_size', '27')); 
		if ($headline_box_google_fonts_size != '27' && $headline_box_google_fonts_size != '') { ?>
		<?php _e('#wrapper #container #main-content section .entry-headline { font-size: '); ?><?php echo $headline_box_google_fonts_size ?><?php _e('px; }'); ?>
<?php } 
}

// Post entry font
function happenstance_get_postentry_font() {
    $postentryfont = get_theme_mod('happenstance_postentry_google_fonts', get_option('happenstance_postentry_google_fonts', 'default')); 
		if ($postentryfont != 'default' && $postentryfont != '') { ?>
		<?php _e('#wrapper #main-content .post-entry .post-entry-headline, #wrapper #main-content .grid-entry .grid-entry-headline, #wrapper #main-content .slides li a, #wrapper #main-content .home-list-posts ul li a, html #wrapper #main-content .tribe-events-list-event-title { font-family: "'); ?><?php echo $postentryfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Post entry font size
function happenstance_get_postentry_font_size() {
    $postentryfont_size = get_theme_mod('happenstance_postentry_google_fonts_size', get_option('happenstance_postentry_google_fonts_size', '21')); 
		if ($postentryfont_size != '21' && $postentryfont_size != '') { ?>
		<?php _e('#wrapper #main-content .post-entry .post-entry-headline, #wrapper #main-content .grid-entry .grid-entry-headline, html #wrapper #main-content .tribe-events-list-event-title { font-size: '); ?><?php echo $postentryfont_size ?><?php _e('px; }'); ?>
<?php } 
}

// Post entry color
function happenstance_get_postentry_color() {
    $post_entry_color = get_theme_mod('happenstance_post_entry_color', get_option('happenstance_post_entry_color', '')); 
		if ($post_entry_color != '#' && $post_entry_color != '') { ?>
		<?php _e('#wrapper #main-content .post-entry .post-entry-headline a, #wrapper #main-content .grid-entry .grid-entry-headline a, #wrapper #main-content .slides li a, #wrapper #main-content .home-list-posts ul li a, html #wrapper #main-content .tribe-events-list-event-title a { color: '); ?><?php echo $post_entry_color ?><?php _e('; }'); ?>
<?php } 
}  

// Post entry hover color
function happenstance_get_postentry_hover_color() {
    $post_entry_hover_color = get_theme_mod('happenstance_post_entry_hover_color', get_option('happenstance_post_entry_hover_color', '')); 
		if ($post_entry_hover_color != '#' && $post_entry_hover_color != '') { ?>
		<?php _e('#wrapper #main-content .post-entry .post-entry-headline a:hover, #wrapper #main-content .grid-entry .grid-entry-headline a:hover, #wrapper #main-content .slides li a:hover, #wrapper #main-content .home-list-posts ul li a:hover, html #wrapper #main-content .tribe-events-list-event-title a:hover { color: '); ?><?php echo $post_entry_hover_color ?><?php _e(' !important; }'); ?>
<?php } 
} 

// Sidebar and Footer widget headlines font
function happenstance_get_sidebar_widget_font() {
    $sidebarfont = get_theme_mod('happenstance_sidebar_google_fonts', get_option('happenstance_sidebar_google_fonts', 'default')); 
    if ($sidebarfont != 'default' && $sidebarfont != '') { ?>
    <?php _e('#wrapper #container #sidebar .sidebar-widget .sidebar-headline, #wrapper .happenstance_widget_content .tab_title a, #wrapper #wrapper-footer #footer .footer-widget .footer-headline { font-family: "'); ?><?php echo $sidebarfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Sidebar widget headlines color
function happenstance_get_sidebar_widget_color() {
    $sidebar_widget_color = get_theme_mod('happenstance_sidebar_widget_color', get_option('happenstance_sidebar_widget_color', '')); 
		if ($sidebar_widget_color != '#' && $sidebar_widget_color != '') { ?>
		<?php _e('#wrapper #container #sidebar .sidebar-widget .sidebar-headline, #wrapper .happenstance_widget_content .tab_title a { color: '); ?><?php echo $sidebar_widget_color ?><?php _e('; }'); ?>
<?php } 
}

// Sidebar widget headlines font size
function happenstance_get_sidebar_widget_font_size() {
    $sidebarfont_size = get_theme_mod('happenstance_sidebar_google_fonts_size', get_option('happenstance_sidebar_google_fonts_size', '19')); 
		if ($sidebarfont_size != '19' && $sidebarfont_size != '') { ?>
		<?php _e('#wrapper #container #sidebar .sidebar-widget .sidebar-headline { font-size: '); ?><?php echo $sidebarfont_size ?><?php _e('px; }'); ?>
<?php } 
}

// Sidebar Text color
function happenstance_get_sidebar_text_color() {
    $sidebar_text_color = get_theme_mod('happenstance_sidebar_text_color', get_option('happenstance_sidebar_text_color', '')); 
		if ($sidebar_text_color != '#' && $sidebar_text_color != '') { ?>
		<?php _e('#wrapper #container #sidebar .sidebar-widget p, #wrapper #container #sidebar .sidebar-widget ul li, #wrapper #container #sidebar .sidebar-widget ol li, #wrapper #container #sidebar .sidebar-widget table { color: '); ?><?php echo $sidebar_text_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer widget headlines color
function happenstance_get_footer_widget_color() {
    $footer_widget_color = get_theme_mod('happenstance_footer_widget_color', get_option('happenstance_footer_widget_color', '')); 
		if ($footer_widget_color != '#' && $footer_widget_color != '') { ?>
		<?php _e('#wrapper #wrapper-footer #footer .footer-widget .footer-headline { color: '); ?><?php echo $footer_widget_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer widget headlines font size
function happenstance_get_footer_widget_font_size() {
    $footerfont_size = get_theme_mod('happenstance_footer_google_fonts_size', get_option('happenstance_footer_google_fonts_size', '19')); 
		if ($footerfont_size != '19' && $footerfont_size != '') { ?>
		<?php _e('#wrapper #wrapper-footer #footer .footer-widget .footer-headline { font-size: '); ?><?php echo $footerfont_size ?><?php _e('px; }'); ?>
<?php } 
}

// Footer Text color
function happenstance_get_footer_text_color() {
    $footer_text_color = get_theme_mod('happenstance_footer_text_color', get_option('happenstance_footer_text_color', '')); 
		if ($footer_text_color != '#' && $footer_text_color != '') { ?>
		<?php _e('#wrapper #footer .footer-widget p, #wrapper #footer .footer-widget ul li, #wrapper #footer .footer-widget ol li, #wrapper #footer .footer-widget table { color: '); ?><?php echo $footer_text_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer Notices Text color
function happenstance_get_footer_notices_text_color() {
    $footer_notices_text_color = get_theme_mod('happenstance_footer_notices_text_color', get_option('happenstance_footer_notices_text_color', '')); 
		if ($footer_notices_text_color != '#' && $footer_notices_text_color != '') { ?>
		<?php _e('#wrapper #wrapper-footer .footer-signature .footer-signature-content, #wrapper #wrapper-footer .footer-signature .footer-signature-content p { color: '); ?><?php echo $footer_notices_text_color ?><?php _e('; }'); ?>
<?php } 
}

// Main content links color
function happenstance_get_content_links_color() {
    $content_links_color = get_theme_mod('happenstance_content_links_color', get_option('happenstance_content_links_color', '')); 
		if ($content_links_color != '#' && $content_links_color != '') { ?>
		<?php _e('#wrapper #content a { color: '); ?><?php echo $content_links_color ?><?php _e('; }'); ?>
<?php } 
}

// Sidebar links color
function happenstance_get_sidebar_links_color() {
    $sidebar_links_color = get_theme_mod('happenstance_sidebar_links_color', get_option('happenstance_sidebar_links_color', '')); 
		if ($sidebar_links_color != '#' && $sidebar_links_color != '') { ?>
		<?php _e('#wrapper #container #sidebar a { color: '); ?><?php echo $sidebar_links_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer links color
function happenstance_get_footer_links_color() {
    $footer_links_color = get_theme_mod('happenstance_footer_links_color', get_option('happenstance_footer_links_color', '')); 
		if ($footer_links_color != '#' && $footer_links_color != '') { ?>
		<?php _e('#wrapper #wrapper-footer #footer a { color: '); ?><?php echo $footer_links_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer Notices links color
function happenstance_get_footer_notices_links_color() {
    $footer_notices_links_color = get_theme_mod('happenstance_footer_notices_links_color', get_option('happenstance_footer_notices_links_color', '')); 
		if ($footer_notices_links_color != '#' && $footer_notices_links_color != '') { ?>
		<?php _e('#wrapper #wrapper-footer .footer-signature .footer-signature-content a { color: '); ?><?php echo $footer_notices_links_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Header menu links color
function happenstance_get_main_header_menu_color() {
    $main_header_menu_color = get_theme_mod('happenstance_main_header_menu_color', get_option('happenstance_main_header_menu_color', '')); 
		if ($main_header_menu_color != '#' && $main_header_menu_color != '') { ?>
		<?php _e('#wrapper #header .menu-box a, #wrapper #header .menu-box a:visited, .js #container #header .menu-box .selectnav { color: '); ?><?php echo $main_header_menu_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Header menu links hover color
function happenstance_get_main_header_menu_hover_color() {
    $main_header_menu_hover_color = get_theme_mod('happenstance_main_header_menu_hover_color', get_option('happenstance_main_header_menu_hover_color', '')); 
		if ($main_header_menu_hover_color != '#' && $main_header_menu_hover_color != '') { ?>
		<?php _e('#wrapper #header .menu-box a:hover, #wrapper #header .menu-box :hover > a { color: '); ?><?php echo $main_header_menu_hover_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Header menu links hover background color
function happenstance_get_main_header_menu_hover_background_color() {
    $main_header_menu_hover_background_color = get_theme_mod('happenstance_main_header_menu_hover_background_color', get_option('happenstance_main_header_menu_hover_background_color', '')); 
		if ($main_header_menu_hover_background_color != '#' && $main_header_menu_hover_background_color != '') { ?>
		<?php _e('#wrapper #header .menu-box a:hover, #wrapper #header .menu-box :hover > a { background-color: '); ?><?php echo $main_header_menu_hover_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Active Main Header menu links color
function happenstance_get_active_main_header_menu_color() {
    $active_main_header_menu_color = get_theme_mod('happenstance_active_main_header_menu_color', get_option('happenstance_active_main_header_menu_color', ''));
    if ($active_main_header_menu_color != '#' && $active_main_header_menu_color != '') { ?>
		<?php _e('html #wrapper #header .menu-box .current-menu-item > a, html #wrapper #header .menu-box .current-menu-ancestor > a, html #wrapper #header .menu-box .current_page_item > a, html #wrapper #header .menu-box .current-page-ancestor > a, html .home #container #header .menu-box .link-home { color: '); ?><?php echo $active_main_header_menu_color ?><?php _e('; }'); ?>
<?php } 
}

// Active Main Header menu links background color
function happenstance_get_active_main_header_menu_background_color() {
    $active_main_header_menu_background_color = get_theme_mod('happenstance_active_main_header_menu_background_color', get_option('happenstance_active_main_header_menu_background_color', ''));
    if ($active_main_header_menu_background_color != '#' && $active_main_header_menu_background_color != '') { ?>
		<?php _e('html #wrapper #header .menu-box .current-menu-item > a, html #wrapper #header .menu-box .current-menu-ancestor > a, html #wrapper #header .menu-box .current_page_item > a, html #wrapper #header .menu-box .current-page-ancestor > a, html .home #container #header .menu-box .link-home { background-color: '); ?><?php echo $active_main_header_menu_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Header menu font
function happenstance_get_menu_font() {
    $menufont = get_theme_mod('happenstance_menu_google_fonts', get_option('happenstance_menu_google_fonts', 'default')); 
		if ($menufont != 'default' && $menufont != '') { ?>
		<?php _e('#wrapper #header .menu-box ul li a { font-family: "'); ?><?php echo $menufont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Main Header menu font size
function happenstance_get_menu_font_size() {
    $menufont_size = get_theme_mod('happenstance_menu_google_fonts_size', get_option('happenstance_menu_google_fonts_size', '14')); 
		if ($menufont_size != '14' && $menufont_size != '') { ?>
		<?php _e('#wrapper #header .menu-box ul li a { font-size: '); ?><?php echo $menufont_size ?><?php _e('px; }'); ?>
<?php } 
}

// User defined CSS
function happenstance_get_own_css() {
    $own_css = get_option('happenstance_own_css'); 
		if ($own_css != '') { ?>
		<?php echo esc_attr($own_css); ?>
<?php } 
}

// Display custom CSS
function happenstance_custom_styles() { ?>
<?php echo ("<style type='text/css'>"); ?>
<?php happenstance_get_own_css(); ?>
<?php happenstance_background_color(); ?>
<?php happenstance_background_image_size(); ?>
<?php happenstance_get_background_pattern_opacity(); ?>
<?php happenstance_display_main_shadow(); ?>
<?php happenstance_display_sidebar(); ?>
<?php happenstance_display_sidebar_archives(); ?>
<?php happenstance_display_search_form(); ?>
<?php happenstance_get_social_links_position(); ?>
<?php happenstance_grid_columns(); ?>
<?php happenstance_featured_image_hover(); ?>
<?php happenstance_display_meta_post_entry(); ?>
<?php happenstance_get_carousel_background_color(); ?>
<?php happenstance_get_arrows_background_color(); ?>
<?php happenstance_get_carousel_links_color(); ?>
<?php happenstance_get_carousel_links_hover_color(); ?>
<?php happenstance_get_top_menu_background_color(); ?>
<?php happenstance_get_top_menu_border_color(); ?>
<?php happenstance_get_social_icons_color(); ?>
<?php happenstance_get_social_icons_hover_color(); ?>
<?php happenstance_get_main_menu_background_color(); ?>
<?php happenstance_get_main_menu_border_color(); ?>
<?php happenstance_get_main_menu_links_border_color(); ?>
<?php happenstance_get_main_submenu_background_color(); ?>
<?php happenstance_get_main_submenu_border_color(); ?>
<?php happenstance_get_main_submenu_hover_color(); ?>
<?php happenstance_get_header_content_background_color(); ?>
<?php happenstance_get_main_content_background_color(); ?>
<?php happenstance_get_author_comments_background_color(); ?>
<?php happenstance_get_sticky_post_background_color(); ?>
<?php happenstance_get_posts_thumbnail_background_color(); ?>
<?php happenstance_get_highlight_background_color(); ?>
<?php happenstance_get_footer_background_color(); ?>
<?php happenstance_get_footer_notices_background_color(); ?>
<?php happenstance_get_searchform_border_color(); ?>
<?php happenstance_get_searchform_button_background_color(); ?>
<?php happenstance_get_searchform_button_hover_color(); ?>
<?php happenstance_get_form_fields_background_color(); ?>
<?php happenstance_get_form_fields_border_color(); ?>
<?php happenstance_get_form_buttons_background_color(); ?>
<?php happenstance_get_form_buttons_hover_color(); ?>
<?php happenstance_get_table_headers_background_color(); ?>
<?php happenstance_get_body_font(); ?>
<?php happenstance_get_body_color(); ?>
<?php happenstance_get_body_google_fonts_size(); ?>
<?php happenstance_get_headings_google_fonts(); ?>
<?php happenstance_get_headings_google_fonts_size(); ?>
<?php happenstance_get_site_title_color(); ?>
<?php happenstance_get_site_title_hover_color(); ?>
<?php happenstance_get_contact_color(); ?>
<?php happenstance_get_contact_icons_color(); ?>
<?php happenstance_get_description_font(); ?>
<?php happenstance_get_site_description_color(); ?>
<?php happenstance_get_description_font_size(); ?>
<?php happenstance_get_main_headlines_color(); ?>
<?php happenstance_get_headlines_font(); ?>
<?php happenstance_get_headlines_color(); ?>
<?php happenstance_get_headline_h1_size(); ?>
<?php happenstance_get_headline_h2_size(); ?>
<?php happenstance_get_headline_h3_size(); ?>
<?php happenstance_get_headline_h4_size(); ?>
<?php happenstance_get_headline_h5_size(); ?>
<?php happenstance_get_headline_h6_size(); ?>
<?php happenstance_get_meta_color(); ?>
<?php happenstance_get_meta_links_color(); ?>
<?php happenstance_get_headline_box_google_fonts(); ?>
<?php happenstance_get_homepage_headlines_color(); ?>
<?php happenstance_get_headline_box_google_fonts_size(); ?>
<?php happenstance_get_postentry_font(); ?>
<?php happenstance_get_postentry_font_size(); ?>
<?php happenstance_get_postentry_color(); ?>
<?php happenstance_get_postentry_hover_color(); ?>
<?php happenstance_get_sidebar_widget_font(); ?>
<?php happenstance_get_sidebar_widget_color(); ?>
<?php happenstance_get_sidebar_widget_font_size(); ?>
<?php happenstance_get_sidebar_text_color(); ?>
<?php happenstance_get_footer_widget_color(); ?>
<?php happenstance_get_footer_widget_font_size(); ?>
<?php happenstance_get_footer_text_color(); ?>
<?php happenstance_get_footer_notices_text_color(); ?>
<?php happenstance_get_content_links_color(); ?>
<?php happenstance_get_sidebar_links_color(); ?>
<?php happenstance_get_footer_links_color(); ?>
<?php happenstance_get_footer_notices_links_color(); ?>
<?php happenstance_get_main_header_menu_color(); ?>
<?php happenstance_get_main_header_menu_hover_color(); ?>
<?php happenstance_get_main_header_menu_hover_background_color(); ?>
<?php happenstance_get_active_main_header_menu_color(); ?>
<?php happenstance_get_active_main_header_menu_background_color(); ?>
<?php happenstance_get_menu_font(); ?>
<?php happenstance_get_menu_font_size(); ?>
<?php echo ("</style>"); ?>
<?php
} 
add_action('wp_enqueue_scripts', 'happenstance_custom_styles');	?>