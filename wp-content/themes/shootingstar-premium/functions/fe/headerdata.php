<?php
/**
 * Headerdata of Theme options.
 * @package ShootingStar
 * @since ShootingStar 1.0.0
*/  
global $shootingstar_options;
foreach ($shootingstar_options as $value) {
	if (isset($value['id']) && get_option( $value['id'] ) === FALSE && isset($value['std'])) {
		${$value['id']} = $value['std'];
	}
	elseif (isset($value['id'])) { ${$value['id']} = get_option( $value['id'] ); }
}

// additional js and css
if(	!is_admin()){
function shootingstar_fonts_include () {
// Google Fonts
$bodyfont = get_theme_mod('shootingstar_body_google_fonts');
$headingfont = get_theme_mod('shootingstar_headings_google_fonts');
$descriptionfont = get_theme_mod('shootingstar_description_google_fonts');
$headlinefont = get_theme_mod('shootingstar_headline_google_fonts');
$headlineboxfont = get_theme_mod('shootingstar_headline_box_google_fonts');
$postentryfont = get_theme_mod('shootingstar_postentry_google_fonts');
$sidebarfont = get_theme_mod('shootingstar_sidebar_google_fonts');
$menufont = get_theme_mod('shootingstar_menu_google_fonts');

$fonturl = "//fonts.googleapis.com/css?family=";
$character_set = "&amp;subset=" . get_theme_mod('shootingstar_character_set');

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
      wp_enqueue_style('shootingstar-google-font1', $bodyfonturl); 
		 }
     if ($headingfont != 'default' && $headingfont != ''){
      wp_enqueue_style('shootingstar-google-font2', $headingfonturl);
		 }
     if ($descriptionfont != 'default' && $descriptionfont != ''){
      wp_enqueue_style('shootingstar-google-font3', $descriptionfonturl);
		 }
     if ($headlinefont != 'default' && $headlinefont != ''){
      wp_enqueue_style('shootingstar-google-font4', $headlinefonturl); 
		 }
     if ($postentryfont != 'default' && $postentryfont != ''){
      wp_enqueue_style('shootingstar-google-font5', $postentryfonturl); 
		 }
     if ($sidebarfont != 'default' && $sidebarfont != ''){
      wp_enqueue_style('shootingstar-google-font6', $sidebarfonturl);
		 }
     if ($menufont != 'default' && $menufont != ''){
      wp_enqueue_style('shootingstar-google-font8', $menufonturl);
		 }
     if ($headlineboxfont != 'default' && $headlineboxfont != ''){
      wp_enqueue_style('shootingstar-google-font10', $headlineboxfonturl); 
		 }
}
add_action( 'wp_enqueue_scripts', 'shootingstar_fonts_include' );
}

// additional css
function shootingstar_css_include () {    
    if (get_option('shootingstar_css') == 'Green' ){
			wp_enqueue_style('shootingstar-style-green', get_template_directory_uri().'/css/colors/green.css');
		}
    
		if (get_option('shootingstar_css') == 'Orange' ){
			wp_enqueue_style('shootingstar-style-orange', get_template_directory_uri().'/css/colors/orange.css');
		}

		if (get_option('shootingstar_css') == 'Pink' ){
			wp_enqueue_style('shootingstar-style-pink', get_template_directory_uri().'/css/colors/pink.css');
		}
    
    if (get_option('shootingstar_css') == 'Purple' ){
			wp_enqueue_style('shootingstar-style-purple', get_template_directory_uri().'/css/colors/purple.css');
		}
    
		if (get_option('shootingstar_css') == 'Red' ){
			wp_enqueue_style('shootingstar-style-red', get_template_directory_uri().'/css/colors/red.css');
		}

		if (get_option('shootingstar_css') == 'Turquoise' ){
			wp_enqueue_style('shootingstar-style-turquoise', get_template_directory_uri().'/css/colors/turquoise.css');
		}
}
add_action( 'wp_enqueue_scripts', 'shootingstar_css_include' );

//social scripts
if(	!is_admin() && ($shootingstar_share_buttons_page == '' || $shootingstar_share_buttons_page == 'Display' || $shootingstar_share_buttons_post == '' || $shootingstar_share_buttons_post == 'Display' || $shootingstar_share_buttons_products == '' || $shootingstar_share_buttons_products == 'Display') ) {

function shootingstar_scripts_social() {
$share_buttons_language = get_option('shootingstar_share_buttons_language') . '/all.js#xfbml=1';
$share_buttons_language_url = "//connect.facebook.net/";
$share_buttons_language_full_url = $share_buttons_language_url.$share_buttons_language;
	// Register all javascript files
	wp_enqueue_script('shootingstar_js_google', '//apis.google.com/js/plusone.js', '', '', 'footer');
  if ( get_option('shootingstar_share_buttons_language') != '' ) {
	wp_enqueue_script('shootingstar_js_facebook', $share_buttons_language_full_url, '', '', 'footer'); } else {
  wp_enqueue_script('shootingstar_js_facebook', '//connect.facebook.net/en_US/all.js#xfbml=1', '', '', 'footer'); }
	wp_enqueue_script('shootingstar_js_twitter', '//platform.twitter.com/widgets.js', '', '', 'footer');
	}   
add_action('wp_enqueue_scripts', 'shootingstar_scripts_social');	
}	

// Background Image Size
function shootingstar_background_image_size() {
    $background_image_size = get_option('shootingstar_background_image_size'); 
		if ($background_image_size == 'Cover') { ?>
		<?php _e('#wrapper { background-size: cover; }'); ?>
<?php } 
} 

// Background Pattern Opacity
function shootingstar_get_background_pattern_opacity() {
    $background_pattern_opacity = get_option('shootingstar_background_pattern_opacity'); 
		if ($background_pattern_opacity != '' && $background_pattern_opacity != '100' && $background_pattern_opacity != 'Default') { ?>
		<?php _e('#wrapper .pattern { opacity: 0.'); ?><?php echo $background_pattern_opacity ?><?php _e('; filter: alpha(opacity='); ?><?php echo $background_pattern_opacity ?><?php _e('); }'); ?>
<?php } 
    elseif ($background_pattern_opacity == '100') { ?>
    <?php _e('#wrapper .pattern { opacity: 1; filter: alpha(opacity=100); }');
}  
} 

// Display sidebar
function shootingstar_display_sidebar() {
    $display_sidebar = get_option('shootingstar_display_sidebar'); 
		if ($display_sidebar == 'Hide') { ?>
		<?php _e('#wrapper #container #main-content #content { width: 100%; }'); ?>
<?php } 
}

// Display header Search Form - header content width
function shootingstar_display_search_form() {
    $display_search_form = get_option('shootingstar_display_search_form'); 
		if ($display_search_form == 'Hide') { ?>
		<?php _e('#wrapper #header .header-content .site-title, #wrapper #header .header-content .site-description, #wrapper #header .header-content .header-logo { max-width: 100%; }'); ?>
<?php } 
}

// Display Home Icon in Menu
function shootingstar_display_home_icon() {
    $display_home_icon = get_option('shootingstar_display_home_icon'); 
		if ($display_home_icon == 'Hide') { ?>
		<?php _e('.menu-box #nav { border-left: 1px solid #535353; float: left; } .rtl .menu-box #nav { border-left: none; border-right: 1px solid #535353; float: right; } html #wrapper .selectnav { width: 100% !important; }'); ?>
<?php } 
}

// Header Contact Information - Social Networks Links position
function shootingstar_get_social_links_position() {
    $header_address = get_option('shootingstar_header_address'); 
    $header_email = get_option('shootingstar_header_email');
    $header_phone = get_option('shootingstar_header_phone');
    $header_skype = get_option('shootingstar_header_skype');
		if ($header_address != '' || $header_email != '' || $header_phone != '' || $header_skype != '') { ?>
		<?php _e('body .top-navigation ul { float: right; } body .top-navigation a, body .top-navigation a:visited { padding: 0 0 0 16px; }'); ?>
<?php } 
}

// Display Meta Box on post entries - styling
function shootingstar_display_meta_post_entry() {
    $display_meta_post_entry = get_option('shootingstar_display_meta_post_entry'); 
		if ($display_meta_post_entry == 'Hide') { ?>
		<?php _e('#wrapper #main-content .post-entry .attachment-post-thumbnail { margin-bottom: 25px; } #wrapper #content .panel-row-style .home-latest-posts .post-entry { padding-bottom: 10px !important; }'); ?>
<?php } 
}

// Featured Images Hover Effect
function shootingstar_featured_image_hover() {
    $featured_image_hover = get_option('shootingstar_featured_image_hover'); 
		if ($featured_image_hover == 'Fade') { ?>
		<?php _e('#wrapper .post-entry .attachment-post-thumbnail, #wrapper .post-entry .attachment-square-thumb, #wrapper .post-entry-grid .attachment-post-thumbnail { -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; -ms-transition: all 1s ease; transition: all 1s ease; } #wrapper .post-entry .attachment-post-thumbnail:hover, #wrapper .post-entry .attachment-square-thumb:hover, #wrapper .grid-entry .attachment-post-thumbnail:hover { opacity: 0.85; filter: alpha(opacity=85); }'); }
    elseif ($featured_image_hover == 'Tilt') { ?>
    <?php _e('#wrapper .post-entry .attachment-post-thumbnail, #wrapper .post-entry .attachment-square-thumb, #wrapper .post-entry-grid .attachment-post-thumbnail { -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; -ms-transition: all 1s ease; transition: all 1s ease; overflow: hidden; } #wrapper .post-entry .attachment-post-thumbnail:hover, #wrapper .post-entry .attachment-square-thumb:hover, #wrapper .grid-entry .attachment-post-thumbnail:hover { -webkit-transform: rotate(2deg); -moz-transform: rotate(2deg); -o-transform: rotate(2deg); -ms-transform: rotate(2deg); transform: rotate(2deg); }'); }
    elseif ($featured_image_hover == 'Focus') { ?>
    <?php _e('#wrapper .post-entry .attachment-post-thumbnail, #wrapper .post-entry .attachment-square-thumb, #wrapper .post-entry-grid .attachment-post-thumbnail { -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; -ms-transition: all 1s ease; transition: all 1s ease; overflow: hidden; } #wrapper .post-entry .attachment-post-thumbnail:hover, #wrapper .post-entry .attachment-square-thumb:hover, #wrapper .grid-entry .attachment-post-thumbnail:hover { border-radius: 50%; } '); }
    elseif ($featured_image_hover == 'Shadow') { ?>
    <?php _e('#wrapper .post-entry .attachment-post-thumbnail, #wrapper .post-entry .attachment-square-thumb, #wrapper .post-entry-grid .attachment-post-thumbnail { -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; -ms-transition: all 1s ease; transition: all 1s ease; } #wrapper .post-entry .attachment-post-thumbnail:hover, #wrapper .post-entry .attachment-square-thumb:hover, #wrapper .grid-entry .attachment-post-thumbnail:hover { -webkit-box-shadow: 0 0 5px #333333; -moz-box-shadow: 0 0 5px #333333; box-shadow: 0 0 5px #333333; }'); ?>
<?php } 
}

// Carousel Box background color
function shootingstar_get_carousel_background_color() {
    $carousel_background_color = get_theme_mod('shootingstar_carousel_background_color'); 
		if ($carousel_background_color != '#' && $carousel_background_color != '') { ?>
		<?php _e('#wrapper .ticker-box { background-color: '); ?><?php echo $carousel_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Carousel Arrows color
function shootingstar_get_arrows_background_color() {
    $arrows_background_color = get_theme_mod('shootingstar_arrows_background_color'); 
		if ($arrows_background_color != '#' && $arrows_background_color != '') { ?>
		<?php _e('#wrapper #ticker-wrapper, #wrapper .ticker-box .ticker-arrow-1, #wrapper .ticker-box .ticker-arrow-2 { background-color: '); ?><?php echo $arrows_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Carousel Box Links color
function shootingstar_get_carousel_links_color() {
    $carousel_links_color = get_theme_mod('shootingstar_carousel_links_color'); 
		if ($carousel_links_color != '#' && $carousel_links_color != '') { ?>
		<?php _e('#wrapper #ticker-wrapper ul li a { color: '); ?><?php echo $carousel_links_color ?><?php _e('; }'); ?>
<?php } 
}

// Carousel Box Links hover color
function shootingstar_get_carousel_links_hover_color() {
    $carousel_links_hover_color = get_theme_mod('shootingstar_carousel_links_hover_color'); 
		if ($carousel_links_hover_color != '#' && $carousel_links_hover_color != '') { ?>
		<?php _e('#wrapper #ticker-wrapper ul li a:hover { color: '); ?><?php echo $carousel_links_hover_color ?><?php _e('; }'); ?>
<?php } 
}

// Social Networks Links background color
function shootingstar_get_top_menu_background_color() {
    $top_menu_background_color = get_theme_mod('shootingstar_top_menu_background_color'); 
		if ($top_menu_background_color != '#' && $top_menu_background_color != '') { ?>
		<?php _e('#wrapper .top-navigation-wrapper { background-color: '); ?><?php echo $top_menu_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Social Networks Links border-bottom color
function shootingstar_get_top_menu_border_color() {
    $top_menu_border_color = get_theme_mod('shootingstar_top_menu_border_color'); 
		if ($top_menu_border_color != '#' && $top_menu_border_color != '') { ?>
		<?php _e('#wrapper .top-navigation-wrapper { border-color: '); ?><?php echo $top_menu_border_color ?><?php _e('; }'); ?>
<?php } 
}

// Social Networks Links color
function shootingstar_get_social_icons_color() {
    $social_icons_color = get_theme_mod('shootingstar_social_icons_color'); 
		if ($social_icons_color != '#' && $social_icons_color != '') { ?>
		<?php _e('#wrapper .top-navigation a, #wrapper .top-navigation a:visited { color: '); ?><?php echo $social_icons_color ?><?php _e('; }'); ?>
<?php } 
}

// Social Networks Links hover color
function shootingstar_get_social_icons_hover_color() {
    $social_icons_hover_color = get_theme_mod('shootingstar_social_icons_hover_color'); 
		if ($social_icons_hover_color != '#' && $social_icons_hover_color != '') { ?>
		<?php _e('#wrapper .top-navigation ul a:hover, #wrapper .top-navigation ul :hover > a { color: '); ?><?php echo $social_icons_hover_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Menu background color
function shootingstar_get_main_menu_background_color() {
    $main_menu_background_color = get_theme_mod('shootingstar_main_menu_background_color'); 
		if ($main_menu_background_color != '#' && $main_menu_background_color != '') { ?>
		<?php _e('#wrapper #header .menu-box-wrapper, .js #container #header .menu-box .selectnav { background-color: '); ?><?php echo $main_menu_background_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Main Menu border color
function shootingstar_get_main_menu_border_color() {
    $main_menu_border_color = get_theme_mod('shootingstar_main_menu_border_color'); 
		if ($main_menu_border_color != '#' && $main_menu_border_color != '') { ?>
		<?php _e('#wrapper #header .menu-box-wrapper { border-color: '); ?><?php echo $main_menu_border_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Menu Links border color
function shootingstar_get_main_menu_links_border_color() {
    $main_menu_links_border_color = get_theme_mod('shootingstar_main_menu_links_border_color'); 
		if ($main_menu_links_border_color != '#' && $main_menu_links_border_color != '') { ?>
		<?php _e('#wrapper .menu-box .link-home, #wrapper .menu-box a, #wrapper .menu-box #nav { border-color: '); ?><?php echo $main_menu_links_border_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Menu drop-down submenus background color
function shootingstar_get_main_submenu_background_color() {
    $main_submenu_background_color = get_theme_mod('shootingstar_main_submenu_background_color'); 
		if ($main_submenu_background_color != '#' && $main_submenu_background_color != '') { ?>
		<?php _e('#wrapper .menu-box ul ul { background-color: '); ?><?php echo $main_submenu_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Menu drop-down submenus items text color
function shootingstar_get_main_submenu_text_color() {
    $main_submenu_text_color = get_theme_mod('shootingstar_main_submenu_text_color'); 
		if ($main_submenu_text_color != '#' && $main_submenu_text_color != '') { ?>
		<?php _e('html #wrapper #header .menu-box ul ul li a { color: '); ?><?php echo $main_submenu_text_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Main Menu drop-down submenus border color
function shootingstar_get_main_submenu_border_color() {
    $main_submenu_border_color = get_theme_mod('shootingstar_main_submenu_border_color'); 
		if ($main_submenu_border_color != '#' && $main_submenu_border_color != '') { ?>
		<?php _e('#wrapper #header .menu-box ul ul, #wrapper #header .menu-box ul ul li { border-color: '); ?><?php echo $main_submenu_border_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Menu drop-down submenus hover color
function shootingstar_get_main_submenu_hover_color() {
    $main_submenu_hover_color = get_theme_mod('shootingstar_main_submenu_hover_color'); 
		if ($main_submenu_hover_color != '#' && $main_submenu_hover_color != '') { ?>
		<?php _e('html #wrapper #header .menu-box ul ul a:hover, html #wrapper #header .menu-box ul ul :hover > a { background-color: '); ?><?php echo $main_submenu_hover_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Header Content background color
function shootingstar_get_header_content_background_color() {
    $header_content_background_color = get_theme_mod('shootingstar_header_content_background_color'); 
		if ($header_content_background_color != '#' && $header_content_background_color != '') { ?>
		<?php _e('#wrapper #header .header-content-wrapper, #wrapper #header .header-image, #wrapper #header #slideshow-wrapper { background-color: '); ?><?php echo $header_content_background_color ?><?php _e('; } '); ?>
<?php } 
}

// Main Content background color
function shootingstar_get_main_content_background_color() {
    $main_content_background_color = get_theme_mod('shootingstar_main_content_background_color'); 
		if ($main_content_background_color != '#' && $main_content_background_color != '') { ?>
		<?php _e('#wrapper #main-content .entry-content, #wrapper #main-content .sidebar-widget, .page-template-template-page-builder-php #main-content .panel, .page-template-template-page-builder-full-width-php #main-content .panel, #wrapper .shootingstar_widget_content .tab_title.selected a, #wrapper #nav-below, #wrapper #infscr-loading, #wrapper .post-entry, #wrapper .entry-headline-wrapper, html .search .navigation { background-color: '); ?><?php echo $main_content_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Shadows color
function shootingstar_get_shadows_color() {
    $shadows_color = get_theme_mod('shootingstar_shadows_color'); 
		if ($shadows_color != '#' && $shadows_color != '') { ?>
		<?php _e('#wrapper #header, #wrapper #nav-below, #wrapper #wrapper-footer, #wrapper .post-entry, #wrapper .entry-content, html .search .navigation, #wrapper #infscr-loading, #wrapper .sidebar-widget, #wrapper .entry-headline-wrapper, .page-template-template-page-builder-php #main-content .panel, .page-template-template-page-builder-full-width-php #main-content .panel { -webkit-box-shadow: 0 0 3px '); ?><?php echo $shadows_color ?><?php _e('; -moz-box-shadow: 0 0 3px '); ?><?php echo $shadows_color ?><?php _e('; box-shadow: 0 0 3px '); ?><?php echo $shadows_color ?><?php _e('; }'); ?>
<?php } 
}

// Post Author’s Comments background color
function shootingstar_get_author_comments_background_color() {
    $author_comments_background_color = get_theme_mod('shootingstar_author_comments_background_color'); 
		if ($author_comments_background_color != '#' && $author_comments_background_color != '') { ?>
		<?php _e('#wrapper #comments .bypostauthor { background-color: '); ?><?php echo $author_comments_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Sticky Post background color
function shootingstar_get_sticky_post_background_color() {
    $sticky_post_background_color = get_theme_mod('shootingstar_sticky_post_background_color'); 
		if ($sticky_post_background_color != '#' && $sticky_post_background_color != '') { ?>
		<?php _e('#wrapper #container #main-content .sticky { background-color: '); ?><?php echo $sticky_post_background_color ?><?php _e('; }'); ?>
<?php } 
}

// ShootingStar Posts-Thumbnail items hover color
function shootingstar_get_posts_thumbnail_background_color() {
    $posts_thumbnail_background_color = get_theme_mod('shootingstar_posts_thumbnail_background_color'); 
		if ($posts_thumbnail_background_color != '#' && $posts_thumbnail_background_color != '') { ?>
		<?php _e('#wrapper #container .post-entry-thumbnail .thumbnail-hover { background-color: '); ?><?php echo $posts_thumbnail_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Highlighted text background color
function shootingstar_get_highlight_background_color() {
    $highlight_background_color = get_theme_mod('shootingstar_highlight_background_color'); 
		if ($highlight_background_color != '#' && $highlight_background_color != '') { ?>
		<?php _e('#wrapper #container .highlight-text { background-color: '); ?><?php echo $highlight_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer background color
function shootingstar_get_footer_background_color() {
    $footer_background_color = get_theme_mod('shootingstar_footer_background_color'); 
		if ($footer_background_color != '#' && $footer_background_color != '') { ?>
		<?php _e('html #wrapper #container #wrapper-footer { background-color: '); ?><?php echo $footer_background_color ?><?php _e('; } '); ?>
<?php } 
}

// Footer Notices background color
function shootingstar_get_footer_notices_background_color() {
    $footer_notices_background_color = get_theme_mod('shootingstar_footer_notices_background_color'); 
		if ($footer_notices_background_color != '#' && $footer_notices_background_color != '') { ?>
		<?php _e('#wrapper #wrapper-footer .footer-signature { background-color: '); ?><?php echo $footer_notices_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Searchform border color
function shootingstar_get_searchform_border_color() {
    $searchform_border_color = get_theme_mod('shootingstar_searchform_border_color'); 
		if ($searchform_border_color != '#' && $searchform_border_color != '') { ?>
		<?php _e('html #wrapper #searchform .searchform-wrapper #s { border-color: '); ?><?php echo $searchform_border_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Search Button background color
function shootingstar_get_searchform_button_background_color() {
    $searchform_button_background_color = get_theme_mod('shootingstar_searchform_button_background_color'); 
		if ($searchform_button_background_color != '#' && $searchform_button_background_color != '') { ?>
		<?php _e('#wrapper #searchform .searchform-wrapper .send { background-color: '); ?><?php echo $searchform_button_background_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Search Button hover color
function shootingstar_get_searchform_button_hover_color() {
    $searchform_button_hover_color = get_theme_mod('shootingstar_searchform_button_hover_color'); 
		if ($searchform_button_hover_color != '#' && $searchform_button_hover_color != '') { ?>
		<?php _e('#wrapper #searchform .searchform-wrapper .send:hover { background-color: '); ?><?php echo $searchform_button_hover_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Form Fields background color
function shootingstar_get_form_fields_background_color() {
    $form_fields_background_color = get_theme_mod('shootingstar_form_fields_background_color'); 
		if ($form_fields_background_color != '#' && $form_fields_background_color != '') { ?>
		<?php _e('#searchform .searchform-wrapper #s, #wrapper input[type="text"], #wrapper input[type="file"], #wrapper input[type="password"], #wrapper input[type="number"], #wrapper input[type="search"], #wrapper input[type="email"], #wrapper input[type="url"], #wrapper textarea, #wrapper select { background-color: '); ?><?php echo $form_fields_background_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Form Fields border color
function shootingstar_get_form_fields_border_color() {
    $form_fields_border_color = get_theme_mod('shootingstar_form_fields_border_color'); 
		if ($form_fields_border_color != '#' && $form_fields_border_color != '') { ?>
		<?php _e('body #searchform .searchform-wrapper #s, #wrapper input[type="text"], #wrapper input[type="file"], #wrapper input[type="password"], #wrapper input[type="number"], #wrapper input[type="search"], #wrapper input[type="email"], #wrapper input[type="url"], #wrapper textarea, #wrapper select { border-color: '); ?><?php echo $form_fields_border_color ?><?php _e('; }'); ?>
<?php } 
}

// Buttons background color
function shootingstar_get_form_buttons_background_color() {
    $form_buttons_background_color = get_theme_mod('shootingstar_form_buttons_background_color'); 
		if ($form_buttons_background_color != '#' && $form_buttons_background_color != '') { ?>
		<?php _e('#wrapper input[type="submit"], #wrapper input[type="reset"], #wrapper .custom-button, html #wrapper #container .panel-row-style-shootingstar .origin-widget-button a, #wrapper #container .post-entry .read-more-button { background-color: '); ?><?php echo $form_buttons_background_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Buttons hover color
function shootingstar_get_form_buttons_hover_color() {
    $form_buttons_hover_color = get_theme_mod('shootingstar_form_buttons_hover_color'); 
		if ($form_buttons_hover_color != '#' && $form_buttons_hover_color != '') { ?>
		<?php _e('#wrapper input[type="submit"]:hover, #wrapper input[type="reset"]:hover, #wrapper .custom-button:hover, html #wrapper #container .panel-row-style-shootingstar .origin-widget-button a:hover, #wrapper #container .post-entry .read-more-button:hover { background: '); ?><?php echo $form_buttons_hover_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Table Headers background color
function shootingstar_get_table_headers_background_color() {
    $table_headers_background_color = get_theme_mod('shootingstar_table_headers_background_color'); 
		if ($table_headers_background_color != '#' && $table_headers_background_color != '') { ?>
		<?php _e('#wrapper table th { background-color: '); ?><?php echo $table_headers_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Blockquotes background color
function shootingstar_get_blockquotes_background_color() {
    $blockquotes_background_color = get_theme_mod('shootingstar_blockquotes_background_color'); 
		if ($blockquotes_background_color != '#' && $blockquotes_background_color != '') { ?>
		<?php _e('#wrapper blockquote, #wrapper q { background-color: '); ?><?php echo $blockquotes_background_color ?><?php _e('; }'); ?>
<?php } 
}

// TEXT COLORS AND FONTS
// Body font
function shootingstar_get_body_font() {
    $bodyfont = get_theme_mod('shootingstar_body_google_fonts'); 
		if ($bodyfont != 'default' && $bodyfont != '') { ?>
		<?php _e('html body, #wrapper blockquote, #wrapper q, #wrapper #container #comments .comment, #wrapper #container #comments .comment time, #wrapper #container #commentform .form-allowed-tags, #wrapper #container #commentform p, #wrapper input, #wrapper button, #wrapper textarea, #wrapper select, #wrapper #content .breadcrumb-navigation, #wrapper #main-content .post-meta { font-family: "'); ?><?php echo $bodyfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Body color
function shootingstar_get_body_color() {
    $body_color = get_theme_mod('shootingstar_body_color'); 
		if ($body_color != '#' && $body_color != '') { ?>
		<?php _e('html body, #wrapper blockquote, #wrapper q, #wrapper #container #comments .comment, #wrapper #container #comments .comment time, #wrapper #container #commentform .form-allowed-tags, #wrapper #container #commentform p, #wrapper input, #wrapper button, #wrapper textarea, #wrapper select, #wrapper #content .breadcrumb-navigation, #wrapper #main-content .post-meta { color: '); ?><?php echo $body_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Content area font size
function shootingstar_get_body_google_fonts_size() {
    $body_google_fonts_size = get_theme_mod('shootingstar_body_google_fonts_size'); 
		if ($body_google_fonts_size != '14' && $body_google_fonts_size != '') { ?>
		<?php _e('body p, body ul, body ol, body li, body dl, body address, body table { font-size: '); ?><?php echo $body_google_fonts_size ?><?php _e('px; }'); ?>
<?php } 
}

// Site title font
function shootingstar_get_headings_google_fonts() {
    $headingfont = get_theme_mod('shootingstar_headings_google_fonts'); 
		if ($headingfont != 'default' && $headingfont != '') { ?>
		<?php _e('#wrapper #header .site-title { font-family: "'); ?><?php echo $headingfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Site title font size
function shootingstar_get_headings_google_fonts_size() {
    $headingfont_size = get_theme_mod('shootingstar_headings_google_fonts_size'); 
		if ($headingfont_size != '50' && $headingfont_size != '') { ?>
		<?php _e('#wrapper #header .site-title { font-size: '); ?><?php echo $headingfont_size ?><?php _e('px; }'); ?>
<?php } 
}

// Site title color
function shootingstar_get_site_title_color() {
    $site_title_color = get_theme_mod('shootingstar_site_title_color'); 
		if ($site_title_color != '#' && $site_title_color != '') { ?>
		<?php _e('#wrapper #header .site-title a { color: '); ?><?php echo $site_title_color ?><?php _e('; }'); ?>
<?php } 
}

// Site title hover color
function shootingstar_get_site_title_hover_color() {
    $site_title_hover_color = get_theme_mod('shootingstar_site_title_hover_color'); 
		if ($site_title_hover_color != '#' && $site_title_hover_color != '') { ?>
		<?php _e('#wrapper #header .site-title a:hover { color: '); ?><?php echo $site_title_hover_color ?><?php _e('; }'); ?>
<?php } 
}

// Contact Information color
function shootingstar_get_contact_color() {
    $contact_color = get_theme_mod('shootingstar_contact_color'); 
		if ($contact_color != '#' && $contact_color != '') { ?>
		<?php _e('#wrapper .header-contact { color: '); ?><?php echo $contact_color ?><?php _e('; }'); ?>
<?php } 
}

// Contact Information Icons color
function shootingstar_get_contact_icons_color() {
    $contact_icons_color = get_theme_mod('shootingstar_contact_icons_color'); 
		if ($contact_icons_color != '#' && $contact_icons_color != '') { ?>
		<?php _e('#wrapper .header-contact span i { color: '); ?><?php echo $contact_icons_color ?><?php _e('; }'); ?>
<?php } 
}

// Site description font
function shootingstar_get_description_font() {
    $descriptionfont = get_theme_mod('shootingstar_description_google_fonts'); 
    if ($descriptionfont != 'default' && $descriptionfont != '') { ?>
    <?php _e('#wrapper #header .site-description { font-family: "'); ?><?php echo $descriptionfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Site description color
function shootingstar_get_description_color() {
    $site_description_color = get_theme_mod('shootingstar_site_description_color'); 
		if ($site_description_color != '#' && $site_description_color != '') { ?>
		<?php _e('#wrapper #header .site-description { color: '); ?><?php echo $site_description_color ?><?php _e('; }'); ?>
<?php } 
}

// Site description font size
function shootingstar_get_description_font_size() {
    $descriptionfont_size = get_theme_mod('shootingstar_description_google_fonts_size'); 
		if ($descriptionfont_size != '21' && $descriptionfont_size != '') { ?>
		<?php _e('#wrapper #header .site-description { font-size: '); ?><?php echo $descriptionfont_size ?><?php _e('px; }'); ?>
<?php } 
}

// Page/post title color
function shootingstar_get_main_headlines_color() {
    $main_headlines_color = get_theme_mod('shootingstar_main_headlines_color'); 
		if ($main_headlines_color != '#' && $main_headlines_color != '') { ?>
		<?php _e('#wrapper #main-content .entry-headline-wrapper .entry-headline { color: '); ?><?php echo $main_headlines_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Page/post headlines font
function shootingstar_get_headlines_font() {
    $headlinefont = get_theme_mod('shootingstar_headline_google_fonts'); 
    if ($headlinefont != 'default' && $headlinefont != '') { ?>
    <?php _e('#wrapper h1, #wrapper h2, #wrapper h3, #wrapper h4, #wrapper h5, #wrapper h6, #wrapper #container .navigation .section-heading, #wrapper .info-box .info-box-headline, #wrapper #comments .entry-headline { font-family: "'); ?><?php echo $headlinefont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Page/post headlines color
function shootingstar_get_headlines_color() {
    $headlines_color = get_theme_mod('shootingstar_headlines_color'); 
		if ($headlines_color != '#' && $headlines_color != '') { ?>
		<?php _e('#wrapper h1, #wrapper h2, #wrapper h3, #wrapper h4, #wrapper h5, #wrapper h6, #wrapper #container .navigation .section-heading, #wrapper .info-box .info-box-headline, #wrapper #comments .entry-headline { color: '); ?><?php echo $headlines_color ?><?php _e('; }'); ?>
<?php } 
}

// H1 Headlines font size
function shootingstar_get_headline_h1_size() {
    $headline_h1_size = get_theme_mod('shootingstar_headline_h1_size'); 
		if ($headline_h1_size != '28' && $headline_h1_size != '') { ?>
		<?php _e('#wrapper h1 { font-size: '); ?><?php echo $headline_h1_size ?><?php _e('px; }'); ?>
<?php } 
}

// H2 Headlines font size
function shootingstar_get_headline_h2_size() {
    $headline_h2_size = get_theme_mod('shootingstar_headline_h2_size'); 
		if ($headline_h2_size != '22' && $headline_h2_size != '') { ?>
		<?php _e('#wrapper h2, #wrapper #comments .entry-headline { font-size: '); ?><?php echo $headline_h2_size ?><?php _e('px; }'); ?>
<?php } 
}

// H3 Headlines font size
function shootingstar_get_headline_h3_size() {
    $headline_h3_size = get_theme_mod('shootingstar_headline_h3_size'); 
		if ($headline_h3_size != '19' && $headline_h3_size != '') { ?>
		<?php _e('#wrapper h3 { font-size: '); ?><?php echo $headline_h3_size ?><?php _e('px; }'); ?>
<?php } 
}

// H4 Headlines font size
function shootingstar_get_headline_h4_size() {
    $headline_h4_size = get_theme_mod('shootingstar_headline_h4_size'); 
		if ($headline_h4_size != '17' && $headline_h4_size != '') { ?>
		<?php _e('#wrapper h4 { font-size: '); ?><?php echo $headline_h4_size ?><?php _e('px; }'); ?>
<?php } 
}

// H5 Headlines font size
function shootingstar_get_headline_h5_size() {
    $headline_h5_size = get_theme_mod('shootingstar_headline_h5_size'); 
		if ($headline_h5_size != '15' && $headline_h5_size != '') { ?>
		<?php _e('#wrapper h5 { font-size: '); ?><?php echo $headline_h5_size ?><?php _e('px; }'); ?>
<?php } 
}

// H6 Headlines font size
function shootingstar_get_headline_h6_size() {
    $headline_h6_size = get_theme_mod('shootingstar_headline_h6_size'); 
		if ($headline_h6_size != '14' && $headline_h6_size != '') { ?>
		<?php _e('#wrapper h6 { font-size: '); ?><?php echo $headline_h6_size ?><?php _e('px; }'); ?>
<?php } 
}

// Breadcrumb Navigation/Post Meta color
function shootingstar_get_meta_color() {
    $meta_color = get_theme_mod('shootingstar_meta_color'); 
		if ($meta_color != '#' && $meta_color != '') { ?>
		<?php _e('#wrapper #main-content .breadcrumb-navigation, #wrapper #main-content .post-meta, #wrapper #main-content .post-info { color: '); ?><?php echo $meta_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Breadcrumb Navigation/Post Meta Links color
function shootingstar_get_meta_links_color() {
    $meta_links_color = get_theme_mod('shootingstar_meta_links_color'); 
		if ($meta_links_color != '#' && $meta_links_color != '') { ?>
		<?php _e('#wrapper #main-content .breadcrumb-navigation a, #wrapper #main-content .post-meta a, #wrapper #main-content .post-info a { color: '); ?><?php echo $meta_links_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// ShootingStar Posts Widgets headlines font
function shootingstar_get_headline_box_google_fonts() {
    $headline_box_google_fonts = get_theme_mod('shootingstar_headline_box_google_fonts'); 
		if ($headline_box_google_fonts != 'default' && $headline_box_google_fonts != '') { ?>
		<?php _e('#wrapper #container #main-content section .entry-headline { font-family: "'); ?><?php echo $headline_box_google_fonts ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// ShootingStar Posts Widgets headlines color
function shootingstar_get_homepage_headlines_color() {
    $homepage_headlines_color = get_theme_mod('shootingstar_homepage_headlines_color'); 
		if ($homepage_headlines_color != '#' && $homepage_headlines_color != '') { ?>
		<?php _e('#wrapper #container #main-content section .entry-headline { color: '); ?><?php echo $homepage_headlines_color ?><?php _e('; }'); ?>
<?php } 
}

// ShootingStar Posts Widgets headlines font size
function shootingstar_get_headline_box_google_fonts_size() {
    $headline_box_google_fonts_size = get_theme_mod('shootingstar_headline_box_google_fonts_size'); 
		if ($headline_box_google_fonts_size != '28' && $headline_box_google_fonts_size != '') { ?>
		<?php _e('#wrapper #container #main-content section .entry-headline { font-size: '); ?><?php echo $headline_box_google_fonts_size ?><?php _e('px; }'); ?>
<?php } 
}

// Post entry font
function shootingstar_get_postentry_font() {
    $postentryfont = get_theme_mod('shootingstar_postentry_google_fonts'); 
		if ($postentryfont != 'default' && $postentryfont != '') { ?>
		<?php _e('#wrapper #main-content .post-entry .post-entry-headline, #wrapper #main-content .slides li a, #wrapper #main-content .home-list-posts ul li a { font-family: "'); ?><?php echo $postentryfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Post entry font size
function shootingstar_get_postentry_font_size() {
    $postentryfont_size = get_theme_mod('shootingstar_postentry_google_fonts_size'); 
		if ($postentryfont_size != '25' && $postentryfont_size != '') { ?>
		<?php _e('#wrapper #main-content .post-entry .post-entry-headline, #wrapper #container #main-content .post-entry-grid .post-entry-headline { font-size: '); ?><?php echo $postentryfont_size ?><?php _e('px; }'); ?>
<?php } 
}

// Post entry color
function shootingstar_get_postentry_color() {
    $post_entry_color = get_theme_mod('shootingstar_post_entry_color'); 
		if ($post_entry_color != '#' && $post_entry_color != '') { ?>
		<?php _e('#wrapper #main-content .post-entry .post-entry-headline a, #wrapper #main-content .slides li a, #wrapper #main-content .home-list-posts ul li a { color: '); ?><?php echo $post_entry_color ?><?php _e('; }'); ?>
<?php } 
}  

// Post entry hover color
function shootingstar_get_postentry_hover_color() {
    $post_entry_hover_color = get_theme_mod('shootingstar_post_entry_hover_color'); 
		if ($post_entry_hover_color != '#' && $post_entry_hover_color != '') { ?>
		<?php _e('#wrapper #main-content .post-entry .post-entry-headline a:hover, #wrapper #main-content .slides li a:hover, #wrapper #main-content .home-list-posts ul li a:hover { color: '); ?><?php echo $post_entry_hover_color ?><?php _e(' !important; }'); ?>
<?php } 
} 

// Sidebar and Footer widget headlines font
function shootingstar_get_sidebar_widget_font() {
    $sidebarfont = get_theme_mod('shootingstar_sidebar_google_fonts'); 
    if ($sidebarfont != 'default' && $sidebarfont != '') { ?>
    <?php _e('#wrapper #container #sidebar .sidebar-widget .sidebar-headline, #wrapper .shootingstar_widget_content .tab_title a, #wrapper #wrapper-footer #footer .footer-widget .footer-headline { font-family: "'); ?><?php echo $sidebarfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Sidebar widget headlines color
function shootingstar_get_sidebar_widget_color() {
    $sidebar_widget_color = get_theme_mod('shootingstar_sidebar_widget_color'); 
		if ($sidebar_widget_color != '#' && $sidebar_widget_color != '') { ?>
		<?php _e('#wrapper #container #sidebar .sidebar-widget .sidebar-headline, #wrapper .shootingstar_widget_content .tab_title a { color: '); ?><?php echo $sidebar_widget_color ?><?php _e('; }'); ?>
<?php } 
}

// Sidebar widget headlines font size
function shootingstar_get_sidebar_widget_font_size() {
    $sidebarfont_size = get_theme_mod('shootingstar_sidebar_google_fonts_size'); 
		if ($sidebarfont_size != '21' && $sidebarfont_size != '') { ?>
		<?php _e('#wrapper #container #sidebar .sidebar-widget .sidebar-headline { font-size: '); ?><?php echo $sidebarfont_size ?><?php _e('px; }'); ?>
<?php } 
}

// Sidebar widget headlines border color
function shootingstar_get_sidebar_widget_border_color() {
    $sidebar_widget_border = get_theme_mod('shootingstar_sidebar_widget_border'); 
		if ($sidebar_widget_border != '#' && $sidebar_widget_border != '') { ?>
		<?php _e('#wrapper #container #sidebar .sidebar-widget .sidebar-headline { border-color: '); ?><?php echo $sidebar_widget_border ?><?php _e('; }'); ?>
<?php } 
}

// Sidebar Text color
function shootingstar_get_sidebar_text_color() {
    $sidebar_text_color = get_theme_mod('shootingstar_sidebar_text_color'); 
		if ($sidebar_text_color != '#' && $sidebar_text_color != '') { ?>
		<?php _e('#wrapper #container #sidebar .sidebar-widget p, #wrapper #container #sidebar .sidebar-widget ul li, #wrapper #container #sidebar .sidebar-widget ol li, #wrapper #container #sidebar .sidebar-widget table, #wrapper #container #sidebar .sidebar-widget .wpt-postmeta { color: '); ?><?php echo $sidebar_text_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer widget headlines color
function shootingstar_get_footer_widget_color() {
    $footer_widget_color = get_theme_mod('shootingstar_footer_widget_color'); 
		if ($footer_widget_color != '#' && $footer_widget_color != '') { ?>
		<?php _e('#wrapper #wrapper-footer #footer .footer-widget .footer-headline { color: '); ?><?php echo $footer_widget_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer widget headlines font size
function shootingstar_get_footer_widget_font_size() {
    $footerfont_size = get_theme_mod('shootingstar_footer_google_fonts_size'); 
		if ($footerfont_size != '21' && $footerfont_size != '') { ?>
		<?php _e('#wrapper #wrapper-footer #footer .footer-widget .footer-headline { font-size: '); ?><?php echo $footerfont_size ?><?php _e('px; }'); ?>
<?php } 
}

// Footer widget headlines border color
function shootingstar_get_footer_widget_border_color() {
    $footer_widget_border = get_theme_mod('shootingstar_footer_widget_border'); 
		if ($footer_widget_border != '#' && $footer_widget_border != '') { ?>
		<?php _e('#wrapper #wrapper-footer #footer .footer-widget .footer-headline { border-color: '); ?><?php echo $footer_widget_border ?><?php _e('; }'); ?>
<?php } 
}

// Footer Text color
function shootingstar_get_footer_text_color() {
    $footer_text_color = get_theme_mod('shootingstar_footer_text_color'); 
		if ($footer_text_color != '#' && $footer_text_color != '') { ?>
		<?php _e('#wrapper #footer .footer-widget p, #wrapper #footer .footer-widget ul li, #wrapper #footer .footer-widget ol li, #wrapper #footer .footer-widget table { color: '); ?><?php echo $footer_text_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer Notices Text color
function shootingstar_get_footer_notices_text_color() {
    $footer_notices_text_color = get_theme_mod('shootingstar_footer_notices_text_color'); 
		if ($footer_notices_text_color != '#' && $footer_notices_text_color != '') { ?>
		<?php _e('#wrapper #wrapper-footer .footer-signature .footer-signature-content p { color: '); ?><?php echo $footer_notices_text_color ?><?php _e('; }'); ?>
<?php } 
}

// Main content links color
function shootingstar_get_content_links_color() {
    $content_links_color = get_theme_mod('shootingstar_content_links_color'); 
		if ($content_links_color != '#' && $content_links_color != '') { ?>
		<?php _e('#wrapper #content a { color: '); ?><?php echo $content_links_color ?><?php _e('; }'); ?>
<?php } 
}

// Sidebar links color
function shootingstar_get_sidebar_links_color() {
    $sidebar_links_color = get_theme_mod('shootingstar_sidebar_links_color'); 
		if ($sidebar_links_color != '#' && $sidebar_links_color != '') { ?>
		<?php _e('#wrapper #container #sidebar a { color: '); ?><?php echo $sidebar_links_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer links color
function shootingstar_get_footer_links_color() {
    $footer_links_color = get_theme_mod('shootingstar_footer_links_color'); 
		if ($footer_links_color != '#' && $footer_links_color != '') { ?>
		<?php _e('#wrapper #wrapper-footer #footer a { color: '); ?><?php echo $footer_links_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer Notices links color
function shootingstar_get_footer_notices_links_color() {
    $footer_notices_links_color = get_theme_mod('shootingstar_footer_notices_links_color'); 
		if ($footer_notices_links_color != '#' && $footer_notices_links_color != '') { ?>
		<?php _e('#wrapper #wrapper-footer .footer-signature .footer-signature-content a { color: '); ?><?php echo $footer_notices_links_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Header menu links color
function shootingstar_get_main_header_menu_color() {
    $main_header_menu_color = get_theme_mod('shootingstar_main_header_menu_color'); 
		if ($main_header_menu_color != '#' && $main_header_menu_color != '') { ?>
		<?php _e('#wrapper #header .menu-box a, #wrapper #header .menu-box a:visited, .js #container #header .menu-box .selectnav { color: '); ?><?php echo $main_header_menu_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Header menu links hover color
function shootingstar_get_main_header_menu_hover_color() {
    $main_header_menu_hover_color = get_theme_mod('shootingstar_main_header_menu_hover_color'); 
		if ($main_header_menu_hover_color != '#' && $main_header_menu_hover_color != '') { ?>
		<?php _e('#wrapper #header .menu-box a:hover, #wrapper #header .menu-box :hover > a { color: '); ?><?php echo $main_header_menu_hover_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Header menu links hover background color
function shootingstar_get_main_header_menu_hover_background_color() {
    $main_header_menu_hover_background_color = get_theme_mod('shootingstar_main_header_menu_hover_background_color'); 
		if ($main_header_menu_hover_background_color != '#' && $main_header_menu_hover_background_color != '') { ?>
		<?php _e('#wrapper #header .menu-box a:hover, #wrapper #header .menu-box :hover > a { background-color: '); ?><?php echo $main_header_menu_hover_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Active Main Header menu links color
function shootingstar_get_active_main_header_menu_color() {
    $active_main_header_menu_color = get_theme_mod('shootingstar_active_main_header_menu_color');
    if ($active_main_header_menu_color != '#' && $active_main_header_menu_color != '') { ?>
		<?php _e('html #wrapper #header .menu-box .current-menu-item > a, html #wrapper #header .menu-box .current-menu-ancestor > a, html #wrapper #header .menu-box .current_page_item > a, html #wrapper #header .menu-box .current-page-ancestor > a, html .home #container #header .menu-box .link-home { color: '); ?><?php echo $active_main_header_menu_color ?><?php _e('; }'); ?>
<?php } 
}

// Active Main Header menu links background color
function shootingstar_get_active_main_header_menu_background_color() {
    $active_main_header_menu_background_color = get_theme_mod('shootingstar_active_main_header_menu_background_color');
    if ($active_main_header_menu_background_color != '#' && $active_main_header_menu_background_color != '') { ?>
		<?php _e('html #wrapper #header .menu-box .current-menu-item > a, html #wrapper #header .menu-box .current-menu-ancestor > a, html #wrapper #header .menu-box .current_page_item > a, html #wrapper #header .menu-box .current-page-ancestor > a, html .home #container #header .menu-box .link-home { background-color: '); ?><?php echo $active_main_header_menu_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Header menu font
function shootingstar_get_menu_font() {
    $menufont = get_theme_mod('shootingstar_menu_google_fonts'); 
		if ($menufont != 'default' && $menufont != '') { ?>
		<?php _e('#wrapper #header .menu-box ul li a { font-family: "'); ?><?php echo $menufont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Main Header menu font size
function shootingstar_get_menu_font_size() {
    $menufont_size = get_theme_mod('shootingstar_menu_google_fonts_size'); 
		if ($menufont_size != '15' && $menufont_size != '') { ?>
		<?php _e('#wrapper #header .menu-box ul li a { font-size: '); ?><?php echo $menufont_size ?><?php _e('px; }'); ?>
<?php } 
}

// User defined CSS.
function shootingstar_get_own_css() {
    $own_css = get_option('shootingstar_own_css'); 
		if ($own_css != '') { ?>
		<?php echo esc_attr($own_css); ?>
<?php } 
}

// Display custom CSS.
function shootingstar_custom_styles() { ?>
<?php echo ("<style type='text/css'>"); ?>
<?php shootingstar_get_own_css(); ?>
<?php shootingstar_background_image_size(); ?>
<?php shootingstar_get_background_pattern_opacity(); ?>
<?php shootingstar_display_sidebar(); ?>
<?php shootingstar_display_search_form(); ?>
<?php shootingstar_display_home_icon(); ?>
<?php shootingstar_get_social_links_position(); ?>
<?php shootingstar_display_meta_post_entry(); ?>
<?php shootingstar_featured_image_hover(); ?>
<?php shootingstar_get_carousel_background_color(); ?>
<?php shootingstar_get_arrows_background_color(); ?>
<?php shootingstar_get_carousel_links_color(); ?>
<?php shootingstar_get_carousel_links_hover_color(); ?>
<?php shootingstar_get_top_menu_background_color(); ?>
<?php shootingstar_get_top_menu_border_color(); ?>
<?php shootingstar_get_social_icons_color(); ?>
<?php shootingstar_get_social_icons_hover_color(); ?>
<?php shootingstar_get_main_menu_background_color(); ?>
<?php shootingstar_get_main_menu_border_color(); ?>
<?php shootingstar_get_main_menu_links_border_color(); ?>
<?php shootingstar_get_main_submenu_background_color(); ?>
<?php shootingstar_get_main_submenu_text_color(); ?>
<?php shootingstar_get_main_submenu_border_color(); ?>
<?php shootingstar_get_main_submenu_hover_color(); ?>
<?php shootingstar_get_header_content_background_color(); ?>
<?php shootingstar_get_main_content_background_color(); ?>
<?php shootingstar_get_shadows_color(); ?>
<?php shootingstar_get_author_comments_background_color(); ?>
<?php shootingstar_get_sticky_post_background_color(); ?>
<?php shootingstar_get_posts_thumbnail_background_color(); ?>
<?php shootingstar_get_highlight_background_color(); ?>
<?php shootingstar_get_footer_background_color(); ?>
<?php shootingstar_get_footer_notices_background_color(); ?>
<?php shootingstar_get_searchform_border_color(); ?>
<?php shootingstar_get_searchform_button_background_color(); ?>
<?php shootingstar_get_searchform_button_hover_color(); ?>
<?php shootingstar_get_form_fields_background_color(); ?>
<?php shootingstar_get_form_fields_border_color(); ?>
<?php shootingstar_get_form_buttons_background_color(); ?>
<?php shootingstar_get_form_buttons_hover_color(); ?>
<?php shootingstar_get_table_headers_background_color(); ?>
<?php shootingstar_get_blockquotes_background_color(); ?>
<?php shootingstar_get_body_font(); ?>
<?php shootingstar_get_body_color(); ?>
<?php shootingstar_get_body_google_fonts_size(); ?>
<?php shootingstar_get_headings_google_fonts(); ?>
<?php shootingstar_get_headings_google_fonts_size(); ?>
<?php shootingstar_get_site_title_color(); ?>
<?php shootingstar_get_site_title_hover_color(); ?>
<?php shootingstar_get_contact_color(); ?>
<?php shootingstar_get_contact_icons_color(); ?>
<?php shootingstar_get_description_font(); ?>
<?php shootingstar_get_description_color(); ?>
<?php shootingstar_get_description_font_size(); ?>
<?php shootingstar_get_main_headlines_color(); ?>
<?php shootingstar_get_headlines_font(); ?>
<?php shootingstar_get_headlines_color(); ?>
<?php shootingstar_get_headline_h1_size(); ?>
<?php shootingstar_get_headline_h2_size(); ?>
<?php shootingstar_get_headline_h3_size(); ?>
<?php shootingstar_get_headline_h4_size(); ?>
<?php shootingstar_get_headline_h5_size(); ?>
<?php shootingstar_get_headline_h6_size(); ?>
<?php shootingstar_get_meta_color(); ?>
<?php shootingstar_get_meta_links_color(); ?>
<?php shootingstar_get_headline_box_google_fonts(); ?>
<?php shootingstar_get_homepage_headlines_color(); ?>
<?php shootingstar_get_headline_box_google_fonts_size(); ?>
<?php shootingstar_get_postentry_font(); ?>
<?php shootingstar_get_postentry_font_size(); ?>
<?php shootingstar_get_postentry_color(); ?>
<?php shootingstar_get_postentry_hover_color(); ?>
<?php shootingstar_get_sidebar_widget_font(); ?>
<?php shootingstar_get_sidebar_widget_color(); ?>
<?php shootingstar_get_sidebar_widget_font_size(); ?>
<?php shootingstar_get_sidebar_widget_border_color(); ?>
<?php shootingstar_get_sidebar_text_color(); ?>
<?php shootingstar_get_footer_widget_color(); ?>
<?php shootingstar_get_footer_widget_font_size(); ?>
<?php shootingstar_get_footer_widget_border_color(); ?>
<?php shootingstar_get_footer_text_color(); ?>
<?php shootingstar_get_footer_notices_text_color(); ?>
<?php shootingstar_get_content_links_color(); ?>
<?php shootingstar_get_sidebar_links_color(); ?>
<?php shootingstar_get_footer_links_color(); ?>
<?php shootingstar_get_footer_notices_links_color(); ?>
<?php shootingstar_get_main_header_menu_color(); ?>
<?php shootingstar_get_main_header_menu_hover_color(); ?>
<?php shootingstar_get_main_header_menu_hover_background_color(); ?>
<?php shootingstar_get_active_main_header_menu_color(); ?>
<?php shootingstar_get_active_main_header_menu_background_color(); ?>
<?php shootingstar_get_menu_font(); ?>
<?php shootingstar_get_menu_font_size(); ?>
<?php echo ("</style>"); ?>
<?php
} 
add_action('wp_enqueue_scripts', 'shootingstar_custom_styles');	?>