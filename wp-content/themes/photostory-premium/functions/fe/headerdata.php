<?php
/**
 * Headerdata of Theme options.
 * @package PhotoStory
 * @since PhotoStory 1.0.0
*/  
global $photostory_options;
foreach ($photostory_options as $value) {
	if (isset($value['id']) && get_option( $value['id'] ) === FALSE && isset($value['std'])) {
		$$value['id'] = $value['std'];
	}
	elseif (isset($value['id'])) { $$value['id'] = get_option( $value['id'] ); }
}

// additional js and css
if(	!is_admin()){
function photostory_fonts_include () {
// Google Fonts
$bodyfont = get_option('photostory_body_google_fonts');
$headingfont = get_option('photostory_headings_google_fonts');
$descriptionfont = get_option('photostory_description_google_fonts');
$headlinefont = get_option('photostory_headline_google_fonts');
$headlineboxfont = get_option('photostory_headline_box_google_fonts');
$postentryfont = get_option('photostory_postentry_google_fonts');
$sidebarfont = get_option('photostory_sidebar_google_fonts');
$menufont = get_option('photostory_menu_google_fonts');

$fonturl = "//fonts.googleapis.com/css?family=";

$bodyfonturl = $fonturl.$bodyfont;
$headingfonturl = $fonturl.$headingfont;
$descriptionfonturl = $fonturl.$descriptionfont;
$headlinefonturl = $fonturl.$headlinefont;
$headlineboxfonturl = $fonturl.$headlineboxfont;
$postentryfonturl = $fonturl.$postentryfont;
$sidebarfonturl = $fonturl.$sidebarfont;
$menufonturl = $fonturl.$menufont;
	// Google Fonts
     if ($bodyfont != 'default' && $bodyfont != ''){
      wp_enqueue_style('photostory-google-font1', $bodyfonturl); 
		 }
     if ($headingfont != 'default' && $headingfont != ''){
      wp_enqueue_style('photostory-google-font2', $headingfonturl);
		 }
     if ($descriptionfont != 'default' && $descriptionfont != ''){
      wp_enqueue_style('photostory-google-font3', $descriptionfonturl);
		 }
     if ($headlinefont != 'default' && $headlinefont != ''){
      wp_enqueue_style('photostory-google-font4', $headlinefonturl); 
		 }
     if ($postentryfont != 'default' && $postentryfont != ''){
      wp_enqueue_style('photostory-google-font5', $postentryfonturl); 
		 }
     if ($sidebarfont != 'default' && $sidebarfont != ''){
      wp_enqueue_style('photostory-google-font6', $sidebarfonturl);
		 }
     if ($menufont != 'default' && $menufont != ''){
      wp_enqueue_style('photostory-google-font7', $menufonturl);
		 }
     if ($headlineboxfont != 'default' && $headlineboxfont != ''){
      wp_enqueue_style('photostory-google-font8', $headlineboxfonturl); 
		 }
}
add_action( 'wp_enqueue_scripts', 'photostory_fonts_include' );
}

// additional js and css
function photostory_css_include () {    
		if (get_option('photostory_css') == 'Blue' ){
			wp_enqueue_style('photostory-style-blue', get_template_directory_uri().'/css/blue.css');
		}
    
    if (get_option('photostory_css') == 'Green' ){
			wp_enqueue_style('photostory-style-green', get_template_directory_uri().'/css/green.css');
		}
    
    if (get_option('photostory_css') == 'Orange' ){
			wp_enqueue_style('photostory-style-orange', get_template_directory_uri().'/css/orange.css');
		}

		if (get_option('photostory_css') == 'Pink' ){
			wp_enqueue_style('photostory-style-pink', get_template_directory_uri().'/css/pink.css');
		}
    
    if (get_option('photostory_css') == 'Purple' ){
			wp_enqueue_style('photostory-style-purple', get_template_directory_uri().'/css/purple.css');
		}

		if (get_option('photostory_css') == 'Red' ){
			wp_enqueue_style('photostory-style-red', get_template_directory_uri().'/css/red.css');
		}
    
		if (get_option('photostory_css') == 'Tan' ){
			wp_enqueue_style('photostory-style-tan', get_template_directory_uri().'/css/tan.css');
		}
    
		if (get_option('photostory_css') == 'Turquoise' ){
			wp_enqueue_style('photostory-style-turquoise', get_template_directory_uri().'/css/turquoise.css');
		}
}
add_action( 'wp_enqueue_scripts', 'photostory_css_include' );

//social scripts
if(	!is_admin() && ($photostory_share_buttons_page == '' || $photostory_share_buttons_page == 'Display' || $photostory_share_buttons_post == '' || $photostory_share_buttons_post == 'Display' || $photostory_share_buttons_post_entry == '' || $photostory_share_buttons_post_entry == 'Display') ) {

function photostory_scripts_social() {
$share_buttons_language = get_option('photostory_share_buttons_language') . '/all.js#xfbml=1';
$share_buttons_language_url = "//connect.facebook.net/";
$share_buttons_language_full_url = $share_buttons_language_url.$share_buttons_language;
	// Register all javascript files
	wp_enqueue_script('photostory_js_google', '//apis.google.com/js/plusone.js', '', '', 'footer');
  if ( get_option('photostory_share_buttons_language') != '' ) {
	wp_enqueue_script('photostory_js_facebook', $share_buttons_language_full_url, '', '', 'footer'); } else {
  wp_enqueue_script('photostory_js_facebook', '//connect.facebook.net/en_US/all.js#xfbml=1', '', '', 'footer'); }
	wp_enqueue_script('photostory_js_twitter', '//platform.twitter.com/widgets.js', '', '', 'footer');
	}   
add_action('wp_enqueue_scripts', 'photostory_scripts_social');	
}	

// Custom background
function photostory_get_custom_background() {
    $background_color = get_background_color();
    $background_image = get_background_image(); 
    if ($background_color != '' || $background_image != '') { ?>
		<?php _e('html body { background: none; }'); ?>
<?php } 
}

// Background Image Size
function photostory_background_image_size() {
    $background_image_size = get_option('photostory_background_image_size'); 
		if ($background_image_size == 'Cover') { ?>
		<?php _e('#wrapper { background-size: cover; }'); ?>
<?php } 
}

// Background Pattern Opacity
function photostory_get_background_pattern_opacity() {
    $background_pattern_opacity = get_option('photostory_background_pattern_opacity'); 
		if ($background_pattern_opacity != '' && $background_pattern_opacity != '100' && $background_pattern_opacity != 'Default') { ?>
		<?php _e('#wrapper .pattern { opacity: 0.'); ?><?php echo $background_pattern_opacity ?><?php _e('; filter: alpha(opacity='); ?><?php echo $background_pattern_opacity ?><?php _e('); }'); ?>
<?php } 
    elseif ($background_pattern_opacity == '100') { ?>
    <?php _e('#wrapper .pattern { opacity: 1; filter: alpha(opacity=100); }');
}  
} 

// Content Background Opacity
function photostory_get_content_background_opacity() {
    $content_background_opacity = get_option('photostory_content_background_opacity'); 
		if ($content_background_opacity != '' && $content_background_opacity != '100' && $content_background_opacity != 'Default') { ?>
		<?php _e('#wrapper .content-background { opacity: 0.'); ?><?php echo $content_background_opacity ?><?php _e('; filter: alpha(opacity='); ?><?php echo $content_background_opacity ?><?php _e('); }'); ?>
<?php } 
    elseif ($content_background_opacity == '100') { ?>
    <?php _e('#wrapper .content-background { opacity: 1; filter: alpha(opacity=100); }');
}  
} 

// Display sidebar
function photostory_display_sidebar() {
    $display_sidebar = get_option('photostory_display_sidebar'); 
		if ($display_sidebar == 'Hide') { ?>
		<?php _e('#wrapper #container #main-content #content { width: 100%; }'); ?>
<?php } 
}

// Display Menu Box - container width
function photostory_display_menu() {
    $display_menu = get_option('photostory_display_menu'); 
		if ($display_menu == 'Hide') { ?>
		<?php _e('#wrapper #container { max-width: 825px; } @media screen and (max-width: 1100px) { #wrapper #container #page {margin-top: 0;} }'); ?>
<?php } 
}

// Menu Box Position
function photostory_menu_position() {
    $menu_position = get_option('photostory_menu_position'); 
		if ($menu_position == 'Absolute') { ?>
		<?php _e('body #container .menu-box { position: absolute; left: 0; top: 0; } #wrapper .menu-box .scroll-top { display: none !important; } .rtl #container .menu-box { left: auto; right: 0; }'); ?>
<?php } 
}

// Display Meta Box on posts - post entries styling
function photostory_display_meta_post_entry() {
    $display_meta_post_entry = get_option('photostory_display_meta_post'); 
		if ($display_meta_post_entry == 'Hide') { ?>
		<?php _e('#wrapper #main-content .post-entry .post-entry-content { margin-bottom: -4px; } #wrapper #main-content .post-entry .social-share { margin-bottom: 5px; padding: 0; }'); ?>
<?php } 
}

// Menu Box background color
function photostory_get_main_menu_background_color() {
    $main_menu_background_color = get_option('photostory_main_menu_background_color'); 
		if ($main_menu_background_color != '#' && $main_menu_background_color != '') { ?>
		<?php _e('#wrapper #container .menu-box .content-background, .js #container .selectnav { background-color: '); ?><?php echo $main_menu_background_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Menu Box drop-down submenus background color
function photostory_get_main_submenu_background_color() {
    $main_submenu_background_color = get_option('photostory_main_submenu_background_color'); 
		if ($main_submenu_background_color != '#' && $main_submenu_background_color != '') { ?>
		<?php _e('#wrapper .menu-box ul ul { background-color: '); ?><?php echo $main_submenu_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Menu Box drop-down submenus hover color
function photostory_get_main_submenu_hover_color() {
    $main_submenu_hover_color = get_option('photostory_main_submenu_hover_color'); 
		if ($main_submenu_hover_color != '#' && $main_submenu_hover_color != '') { ?>
		<?php _e('html #wrapper #container .menu-box ul ul a:hover, html #wrapper #container .menu-box ul ul :hover > a { background-color: '); ?><?php echo $main_submenu_hover_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Main Content background color
function photostory_get_main_content_background_color() {
    $main_content_background_color = get_option('photostory_main_content_background_color'); 
		if ($main_content_background_color != '#' && $main_content_background_color != '') { ?>
		<?php _e('#wrapper #container .content-background { background-color: '); ?><?php echo $main_content_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Post Author’s Comments background color
function photostory_get_author_comments_background_color() {
    $author_comments_background_color = get_option('photostory_author_comments_background_color'); 
		if ($author_comments_background_color != '#' && $author_comments_background_color != '') { ?>
		<?php _e('#wrapper #comments .bypostauthor { background-color: '); ?><?php echo $author_comments_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Sticky Post background color
function photostory_get_sticky_post_background_color() {
    $sticky_post_background_color = get_option('photostory_sticky_post_background_color'); 
		if ($sticky_post_background_color != '#' && $sticky_post_background_color != '') { ?>
		<?php _e('#wrapper #container #main-content .sticky { background-color: '); ?><?php echo $sticky_post_background_color ?><?php _e('; }'); ?>
<?php } 
}

// PhotoStory Posts-Thumbnail items hover color
function photostory_get_posts_thumbnail_background_color() {
    $posts_thumbnail_background_color = get_option('photostory_posts_thumbnail_background_color'); 
		if ($posts_thumbnail_background_color != '#' && $posts_thumbnail_background_color != '') { ?>
		<?php _e('#wrapper #container .post-entry-thumbnail .thumbnail-hover { background-color: '); ?><?php echo $posts_thumbnail_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Highlighted text background color
function photostory_get_highlight_background_color() {
    $highlight_background_color = get_option('photostory_highlight_background_color'); 
		if ($highlight_background_color != '#' && $highlight_background_color != '') { ?>
		<?php _e('#wrapper #container .highlight-text { background-color: '); ?><?php echo $highlight_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Searchform border color
function photostory_get_searchform_border_color() {
    $searchform_border_color = get_option('photostory_searchform_border_color'); 
		if ($searchform_border_color != '#' && $searchform_border_color != '') { ?>
		<?php _e('html #wrapper #searchform .searchform-wrapper #s { border-color: '); ?><?php echo $searchform_border_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Search Button background color
function photostory_get_searchform_button_background_color() {
    $searchform_button_background_color = get_option('photostory_searchform_button_background_color'); 
		if ($searchform_button_background_color != '#' && $searchform_button_background_color != '') { ?>
		<?php _e('#wrapper #searchform .searchform-wrapper .send { background-color: '); ?><?php echo $searchform_button_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Search Button hover color
function photostory_get_searchform_button_hover_color() {
    $searchform_button_hover_color = get_option('photostory_searchform_button_hover_color'); 
		if ($searchform_button_hover_color != '#' && $searchform_button_hover_color != '') { ?>
		<?php _e('#wrapper #searchform .searchform-wrapper .send:hover { background-color: '); ?><?php echo $searchform_button_hover_color ?><?php _e('; }'); ?>
<?php } 
}

// Form Fields background color
function photostory_get_form_fields_background_color() {
    $form_fields_background_color = get_option('photostory_form_fields_background_color'); 
		if ($form_fields_background_color != '#' && $form_fields_background_color != '') { ?>
		<?php _e('#searchform .searchform-wrapper #s, #wrapper input[type="text"], #wrapper input[type="file"], #wrapper input[type="password"], #wrapper input[type="number"], #wrapper input[type="search"], #wrapper input[type="email"], #wrapper input[type="url"], #wrapper textarea, #wrapper select { background-color: '); ?><?php echo $form_fields_background_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Form Fields border color
function photostory_get_form_fields_border_color() {
    $form_fields_border_color = get_option('photostory_form_fields_border_color'); 
		if ($form_fields_border_color != '#' && $form_fields_border_color != '') { ?>
		<?php _e('body #searchform .searchform-wrapper #s, #wrapper input[type="text"], #wrapper input[type="file"], #wrapper input[type="password"], #wrapper input[type="number"], #wrapper input[type="search"], #wrapper input[type="email"], #wrapper input[type="url"], #wrapper textarea, #wrapper select { border-color: '); ?><?php echo $form_fields_border_color ?><?php _e('; }'); ?>
<?php } 
}

// Buttons background color
function photostory_get_form_buttons_background_color() {
    $form_buttons_background_color = get_option('photostory_form_buttons_background_color'); 
		if ($form_buttons_background_color != '#' && $form_buttons_background_color != '') { ?>
		<?php _e('#wrapper input[type="submit"], #wrapper input[type="reset"], #wrapper .custom-button, html #wrapper #container .panel-row-style-photostory .origin-widget-button a { background-color: '); ?><?php echo $form_buttons_background_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Buttons hover color
function photostory_get_form_buttons_hover_color() {
    $form_buttons_hover_color = get_option('photostory_form_buttons_hover_color'); 
		if ($form_buttons_hover_color != '#' && $form_buttons_hover_color != '') { ?>
		<?php _e('#wrapper input[type="submit"]:hover, #wrapper input[type="reset"]:hover, #wrapper .custom-button:hover, html #wrapper #container .panel-row-style-photostory .origin-widget-button a:hover { background: '); ?><?php echo $form_buttons_hover_color ?><?php _e(' !important; }'); ?>
<?php } 
}

// Table Headers background color
function photostory_get_table_headers_background_color() {
    $table_headers_background_color = get_option('photostory_table_headers_background_color'); 
		if ($table_headers_background_color != '#' && $table_headers_background_color != '') { ?>
		<?php _e('#wrapper table th { background-color: '); ?><?php echo $table_headers_background_color ?><?php _e('; }'); ?>
<?php } 
}

// TEXT COLORS AND FONTS
// Body font and color
function photostory_get_body_font() {
    $bodyfont = get_option('photostory_body_google_fonts');
    $body_color = get_option('photostory_body_color'); 
		if ($bodyfont != 'default' && $body_color != '#' && $bodyfont != '') { ?>
		<?php _e('html body, #wrapper table td, #wrapper blockquote, #wrapper q, #wrapper #container #comments .comment, #wrapper #container #comments .comment time, #wrapper #container #commentform .form-allowed-tags, #wrapper #container #commentform p, #wrapper input, #wrapper button, #wrapper select { font-family: "'); ?><?php echo $bodyfont ?><?php _e('", Arial, Helvetica, sans-serif; color: '); ?><?php echo $body_color ?><?php _e('; }'); }
    elseif ($bodyfont != 'default' && $body_color == '#') { ?>
    <?php _e('html body, #wrapper table td, #wrapper blockquote, #wrapper q, #wrapper #container #comments .comment, #wrapper #container #comments .comment time, #wrapper #container #commentform .form-allowed-tags, #wrapper #container #commentform p, #wrapper input, #wrapper button, #wrapper select { font-family: "'); ?><?php echo $bodyfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); }
    elseif ($bodyfont == 'default' && $body_color != '#') { ?>
    <?php _e('html body, #wrapper table td, #wrapper blockquote, #wrapper q, #wrapper #container #comments .comment, #wrapper #container #comments .comment time, #wrapper #container #commentform .form-allowed-tags, #wrapper #container #commentform p, #wrapper input, #wrapper button, #wrapper select { color: '); ?><?php echo $body_color ?><?php _e('; }'); ?>
<?php } 
}

// Main Content area font size
function photostory_get_body_google_fonts_size() {
    $body_google_fonts_size = get_option('photostory_body_google_fonts_size'); 
		if ($body_google_fonts_size != '13' && $body_google_fonts_size != '') { ?>
		<?php _e('body p, body ul, body ol, body li, body dl, body address, body table { font-size: '); ?><?php echo $body_google_fonts_size ?><?php _e('px; }'); ?>
<?php } 
}

// Site title font
function photostory_get_headings_google_fonts() {
    $headingfont = get_option('photostory_headings_google_fonts'); 
		if ($headingfont != 'default' && $headingfont != '') { ?>
		<?php _e('#wrapper #header .site-title { font-family: "'); ?><?php echo $headingfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Site title font size
function photostory_get_headings_google_fonts_size() {
    $headingfont_size = get_option('photostory_headings_google_fonts_size'); 
		if ($headingfont_size != '50' && $headingfont_size != '') { ?>
		<?php _e('#wrapper #header .site-title { font-size: '); ?><?php echo $headingfont_size ?><?php _e('px; }'); ?>
<?php } 
}

// Site title color
function photostory_get_site_title_color() {
    $site_title_color = get_option('photostory_site_title_color'); 
		if ($site_title_color != '#' && $site_title_color != '') { ?>
		<?php _e('#wrapper #header .site-title a { color: '); ?><?php echo $site_title_color ?><?php _e('; }'); ?>
<?php } 
}

// Site title hover color
function photostory_get_site_title_hover_color() {
    $site_title_hover_color = get_option('photostory_site_title_hover_color'); 
		if ($site_title_hover_color != '#' && $site_title_hover_color != '') { ?>
		<?php _e('#wrapper #header .site-title a:hover { color: '); ?><?php echo $site_title_hover_color ?><?php _e('; }'); ?>
<?php } 
}

// Site description font and color
function photostory_get_description_font() {
    $descriptionfont = get_option('photostory_description_google_fonts');
    $site_description_color = get_option('photostory_site_description_color'); 
		if ($descriptionfont != 'default' && $site_description_color != '#' && $descriptionfont != '') { ?>
		<?php _e('#wrapper #header .site-description {font-family: "'); ?><?php echo $descriptionfont ?><?php _e('", Arial, Helvetica, sans-serif; color: '); ?><?php echo $site_description_color ?><?php _e('; }'); }
    elseif ($descriptionfont != 'default' && $site_description_color == '#') { ?>
    <?php _e('#wrapper #header .site-description {font-family: "'); ?><?php echo $descriptionfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); }
    elseif ($descriptionfont == 'default' && $site_description_color != '#') { ?>
    <?php _e('#wrapper #header .site-description { color: '); ?><?php echo $site_description_color ?><?php _e('; }'); ?>
<?php } 
}

// Site description font size
function photostory_get_description_font_size() {
    $descriptionfont_size = get_option('photostory_description_google_fonts_size'); 
		if ($descriptionfont_size != '28' && $descriptionfont_size != '') { ?>
		<?php _e('#wrapper #header .site-description { font-size: '); ?><?php echo $descriptionfont_size ?><?php _e('px; }'); ?>
<?php } 
}

// Page/post main headlines color
function photostory_get_main_headlines_color() {
    $main_headlines_color = get_option('photostory_main_headlines_color'); 
		if ($main_headlines_color != '#' && $main_headlines_color != '') { ?>
		<?php _e('#wrapper #container .content-headline h1 { color: '); ?><?php echo $main_headlines_color ?><?php _e('; }'); ?>
<?php } 
}

// Headlines font and color
function photostory_get_headlines_font() {
    $headlinefont = get_option('photostory_headline_google_fonts');
    $headlines_color = get_option('photostory_headlines_color'); 
		if ($headlinefont != 'default' && $headlines_color != '#' && $headlinefont != '') { ?>
		<?php _e('#wrapper h1, #wrapper h2, #wrapper h3, #wrapper h4, #wrapper h5, #wrapper h6, #wrapper #container .navigation .section-heading, #wrapper .info-box .info-box-headline { font-family: "'); ?><?php echo $headlinefont ?><?php _e('", Arial, Helvetica, sans-serif; color: '); ?><?php echo $headlines_color ?><?php _e('; }'); }
    elseif ($headlinefont != 'default' && $headlines_color == '#') { ?>
		<?php _e('#wrapper h1, #wrapper h2, #wrapper h3, #wrapper h4, #wrapper h5, #wrapper h6, #wrapper #container .navigation .section-heading, #wrapper .info-box .info-box-headline { font-family: "'); ?><?php echo $headlinefont ?><?php _e('", Arial, Helvetica, sans-serif; }'); } 
    elseif ($headlinefont == 'default' && $headlines_color != '#') { ?>
		<?php _e('#wrapper h1, #wrapper h2, #wrapper h3, #wrapper h4, #wrapper h5, #wrapper h6, #wrapper #container .navigation .section-heading, #wrapper .info-box .info-box-headline { color: '); ?><?php echo $headlines_color ?><?php _e('; }');?>
<?php } 
}

// H1 Headlines font size
function photostory_get_headline_h1_size() {
    $headline_h1_size = get_option('photostory_headline_h1_size'); 
		if ($headline_h1_size != '25' && $headline_h1_size != '') { ?>
		<?php _e('#wrapper h1 { font-size: '); ?><?php echo $headline_h1_size ?><?php _e('px; }'); ?>
<?php } 
}

// H2 Headlines font size
function photostory_get_headline_h2_size() {
    $headline_h2_size = get_option('photostory_headline_h2_size'); 
		if ($headline_h2_size != '20' && $headline_h2_size != '') { ?>
		<?php _e('#wrapper h2 { font-size: '); ?><?php echo $headline_h2_size ?><?php _e('px; }'); ?>
<?php } 
}

// H3 Headlines font size
function photostory_get_headline_h3_size() {
    $headline_h3_size = get_option('photostory_headline_h3_size'); 
		if ($headline_h3_size != '18' && $headline_h3_size != '') { ?>
		<?php _e('#wrapper h3 { font-size: '); ?><?php echo $headline_h3_size ?><?php _e('px; }'); ?>
<?php } 
}

// H4 Headlines font size
function photostory_get_headline_h4_size() {
    $headline_h4_size = get_option('photostory_headline_h4_size'); 
		if ($headline_h4_size != '16' && $headline_h4_size != '') { ?>
		<?php _e('#wrapper h4 { font-size: '); ?><?php echo $headline_h4_size ?><?php _e('px; }'); ?>
<?php } 
}

// H5 Headlines font size
function photostory_get_headline_h5_size() {
    $headline_h5_size = get_option('photostory_headline_h5_size'); 
		if ($headline_h5_size != '14' && $headline_h5_size != '') { ?>
		<?php _e('#wrapper h5 { font-size: '); ?><?php echo $headline_h5_size ?><?php _e('px; }'); ?>
<?php } 
}

// H6 Headlines font size
function photostory_get_headline_h6_size() {
    $headline_h6_size = get_option('photostory_headline_h6_size'); 
		if ($headline_h6_size != '13' && $headline_h6_size != '') { ?>
		<?php _e('#wrapper h6 { font-size: '); ?><?php echo $headline_h6_size ?><?php _e('px; }'); ?>
<?php } 
}

// PhotoStory Posts Widgets headlines font
function photostory_get_headline_box_google_fonts() {
    $headline_box_google_fonts = get_option('photostory_headline_box_google_fonts'); 
		if ($headline_box_google_fonts != 'default' && $headline_box_google_fonts != '') { ?>
		<?php _e('#wrapper #container #main-content section .entry-headline { font-family: "'); ?><?php echo $headline_box_google_fonts ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// PhotoStory Posts Widgets headlines color
function photostory_get_homepage_headlines_color() {
    $homepage_headlines_color = get_option('photostory_homepage_headlines_color'); 
		if ($homepage_headlines_color != '#' && $homepage_headlines_color != '') { ?>
		<?php _e('#wrapper #container #main-content section .entry-headline { color: '); ?><?php echo $homepage_headlines_color ?><?php _e('; }'); ?>
<?php } 
}

// PhotoStory Posts Widgets headlines font size
function photostory_get_headline_box_google_fonts_size() {
    $headline_box_google_fonts_size = get_option('photostory_headline_box_google_fonts_size'); 
		if ($headline_box_google_fonts_size != '25' && $headline_box_google_fonts_size != '') { ?>
		<?php _e('#wrapper #container #main-content section .entry-headline { font-size: '); ?><?php echo $headline_box_google_fonts_size ?><?php _e('px; }'); ?>
<?php } 
}

// Post entry font
function photostory_get_postentry_font() {
    $postentryfont = get_option('photostory_postentry_google_fonts'); 
		if ($postentryfont != 'default' && $postentryfont != '') { ?>
		<?php _e('#wrapper #main-content .post-entry .post-entry-headline, #wrapper #main-content .slides li, #wrapper #main-content .home-list-posts ul li { font-family: "'); ?><?php echo $postentryfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Post entry font size
function photostory_get_postentry_font_size() {
    $postentryfont_size = get_option('photostory_postentry_google_fonts_size'); 
		if ($postentryfont_size != '21' && $postentryfont_size != '') { ?>
		<?php _e('#wrapper #main-content .post-entry .post-entry-headline { font-size: '); ?><?php echo $postentryfont_size ?><?php _e('px; }'); ?>
<?php } 
}

// Post entry color
function photostory_get_postentry_color() {
    $post_entry_color = get_option('photostory_post_entry_color'); 
		if ($post_entry_color != '#' && $post_entry_color != '') { ?>
		<?php _e('#wrapper #main-content .post-entry .post-entry-headline a, #wrapper #main-content .slides li a, #wrapper #main-content .home-list-posts ul li a { color: '); ?><?php echo $post_entry_color ?><?php _e('; }'); ?>
<?php } 
}  

// Post entry hover color
function photostory_get_postentry_hover_color() {
    $post_entry_hover_color = get_option('photostory_post_entry_hover_color'); 
		if ($post_entry_hover_color != '#' && $post_entry_hover_color != '') { ?>
		<?php _e('#wrapper #main-content .post-entry .post-entry-headline a:hover, #wrapper #main-content .slides li a:hover, #wrapper #main-content .home-list-posts ul li a:hover { color: '); ?><?php echo $post_entry_hover_color ?><?php _e(' !important; }'); ?>
<?php } 
} 

// Sidebar widget headlines font and color
function photostory_get_sidebar_widget_font() {
    $sidebarfont = get_option('photostory_sidebar_google_fonts');
    $sidebar_widget_color = get_option('photostory_sidebar_widget_color');
		if ($sidebarfont != 'default' && $sidebar_widget_color != '#' && $sidebarfont != '') { ?>
		<?php _e('#wrapper #container #sidebar .sidebar-widget .sidebar-headline { font-family: "'); ?><?php echo $sidebarfont ?><?php _e('", Arial, Helvetica, sans-serif; color: '); ?><?php echo $sidebar_widget_color ?><?php _e('; }'); }
    elseif ($sidebarfont != 'default' && $sidebar_widget_color == '#') { ?>
		<?php _e('#wrapper #container #sidebar .sidebar-widget .sidebar-headline { font-family: "'); ?><?php echo $sidebarfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); }
    elseif ($sidebarfont == 'default' && $sidebar_widget_color != '#') { ?>
		<?php _e('#wrapper #container #sidebar .sidebar-widget .sidebar-headline { color: '); ?><?php echo $sidebar_widget_color ?><?php _e('; }'); ?>
<?php } 
}

// Sidebar widget headlines font size
function photostory_get_sidebar_widget_font_size() {
    $sidebarfont_size = get_option('photostory_sidebar_google_fonts_size'); 
		if ($sidebarfont_size != '19' && $sidebarfont_size != '') { ?>
		<?php _e('#wrapper #container #sidebar .sidebar-widget .sidebar-headline { font-size: '); ?><?php echo $sidebarfont_size ?><?php _e('px; }'); ?>
<?php } 
}

// Sidebar Text color
function photostory_get_sidebar_text_color() {
    $sidebar_text_color = get_option('photostory_sidebar_text_color'); 
		if ($sidebar_text_color != '#' && $sidebar_text_color != '') { ?>
		<?php _e('#wrapper #container #sidebar .sidebar-widget p, #wrapper #container #sidebar .sidebar-widget ul li, #wrapper #container #sidebar .sidebar-widget ol li, #wrapper #container #sidebar .sidebar-widget table td, #wrapper #container #sidebar .sidebar-widget caption { color: '); ?><?php echo $sidebar_text_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer widget headlines font and color
function photostory_get_footer_widget_font() {
    $sidebarfont = get_option('photostory_sidebar_google_fonts');
    $footer_widget_color = get_option('photostory_footer_widget_color');
		if ($sidebarfont != 'default' && $footer_widget_color != '#' && $sidebarfont != '') { ?>
		<?php _e('#wrapper #wrapper-footer #footer .footer-widget .footer-headline { font-family: "'); ?><?php echo $sidebarfont ?><?php _e('", Arial, Helvetica, sans-serif; color: '); ?><?php echo $footer_widget_color ?><?php _e('; }'); }
    elseif ($sidebarfont != 'default' && $footer_widget_color == '#') { ?>
		<?php _e('#wrapper #wrapper-footer #footer .footer-widget .footer-headline { font-family: "'); ?><?php echo $sidebarfont ?><?php _e('", Arial, Helvetica, sans-serif; }'); }
    elseif ($sidebarfont == 'default' && $footer_widget_color != '#') { ?>
		<?php _e('#wrapper #wrapper-footer #footer .footer-widget .footer-headline { color: '); ?><?php echo $footer_widget_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer widget headlines font size
function photostory_get_footer_widget_font_size() {
    $footerfont_size = get_option('photostory_footer_google_fonts_size'); 
		if ($footerfont_size != '19' && $footerfont_size != '') { ?>
		<?php _e('#wrapper #wrapper-footer #footer .footer-widget .footer-headline { font-size: '); ?><?php echo $footerfont_size ?><?php _e('px; }'); ?>
<?php } 
}

// Footer Text color
function photostory_get_footer_text_color() {
    $footer_text_color = get_option('photostory_footer_text_color'); 
		if ($footer_text_color != '#' && $footer_text_color != '') { ?>
		<?php _e('#wrapper #footer .footer-widget p, #wrapper #footer .footer-widget ul li, #wrapper #footer .footer-widget ol li, #wrapper #footer .footer-widget table td, #wrapper .footer-signature .footer-signature-content p { color: '); ?><?php echo $footer_text_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer Notices Text color
function photostory_get_footer_notices_text_color() {
    $footer_notices_text_color = get_option('photostory_footer_notices_text_color'); 
		if ($footer_notices_text_color != '#' && $footer_notices_text_color != '') { ?>
		<?php _e('#wrapper #wrapper-footer .footer-signature .footer-signature-content p { color: '); ?><?php echo $footer_notices_text_color ?><?php _e('; }'); ?>
<?php } 
}

// Main content links color
function photostory_get_content_links_color() {
    $content_links_color = get_option('photostory_content_links_color'); 
		if ($content_links_color != '#' && $content_links_color != '') { ?>
		<?php _e('#wrapper #content a { color: '); ?><?php echo $content_links_color ?><?php _e('; }'); ?>
<?php } 
}

// Sidebar links color
function photostory_get_sidebar_links_color() {
    $sidebar_links_color = get_option('photostory_sidebar_links_color'); 
		if ($sidebar_links_color != '#' && $sidebar_links_color != '') { ?>
		<?php _e('#wrapper #container #sidebar a { color: '); ?><?php echo $sidebar_links_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer links color
function photostory_get_footer_links_color() {
    $footer_links_color = get_option('photostory_footer_links_color'); 
		if ($footer_links_color != '#' && $footer_links_color != '') { ?>
		<?php _e('#wrapper #wrapper-footer #footer a { color: '); ?><?php echo $footer_links_color ?><?php _e('; }'); ?>
<?php } 
}

// Footer Notices links color
function photostory_get_footer_notices_links_color() {
    $footer_notices_links_color = get_option('photostory_footer_notices_links_color'); 
		if ($footer_notices_links_color != '#' && $footer_notices_links_color != '') { ?>
		<?php _e('#wrapper #wrapper-footer .footer-signature .footer-signature-content a { color: '); ?><?php echo $footer_notices_links_color ?><?php _e('; }'); ?>
<?php } 
}

// Menu Box links color
function photostory_get_main_header_menu_color() {
    $main_header_menu_color = get_option('photostory_main_header_menu_color'); 
		if ($main_header_menu_color != '#' && $main_header_menu_color != '') { ?>
		<?php _e('#wrapper #container .menu-box a, #wrapper #container .menu-box a:visited, .js #container .selectnav { color: '); ?><?php echo $main_header_menu_color ?><?php _e('; }'); ?>
<?php } 
}

// Menu Box links hover color
function photostory_get_main_header_menu_hover_color() {
    $main_header_menu_hover_color = get_option('photostory_main_header_menu_hover_color'); 
		if ($main_header_menu_hover_color != '#' && $main_header_menu_hover_color != '') { ?>
		<?php _e('#wrapper #container .menu-box a:hover, #wrapper #container .menu-box :hover > a { color: '); ?><?php echo $main_header_menu_hover_color ?><?php _e('; }'); ?>
<?php } 
}

// Menu Box links hover background color
function photostory_get_main_header_menu_hover_background_color() {
    $main_header_menu_hover_background_color = get_option('photostory_main_header_menu_hover_background_color'); 
		if ($main_header_menu_hover_background_color != '#' && $main_header_menu_hover_background_color != '') { ?>
		<?php _e('#wrapper #container .menu-box a:hover, #wrapper #container .menu-box :hover > a { background-color: '); ?><?php echo $main_header_menu_hover_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Active Menu Box links color
function photostory_get_active_main_header_menu_color() {
    $active_main_header_menu_color = get_option('photostory_active_main_header_menu_color');
    if ($active_main_header_menu_color != '#' && $active_main_header_menu_color != '') { ?>
		<?php _e('html #wrapper #container .menu-box .current-menu-item > a, html #wrapper #container .menu-box .current-menu-ancestor > a, html #wrapper #container .menu-box .current_page_item > a, html #wrapper #container .menu-box .current-page-ancestor > a { color: '); ?><?php echo $active_main_header_menu_color ?><?php _e('; }'); ?>
<?php } 
}

// Active Menu Box links background color
function photostory_get_active_main_header_menu_background_color() {
    $active_main_header_menu_background_color = get_option('photostory_active_main_header_menu_background_color');
    if ($active_main_header_menu_background_color != '#' && $active_main_header_menu_background_color != '') { ?>
		<?php _e('html #wrapper #container .menu-box .current-menu-item > a, html #wrapper #container .menu-box .current-menu-ancestor > a, html #wrapper #container .menu-box .current_page_item > a, html #wrapper #container .menu-box .current-page-ancestor > a { background-color: '); ?><?php echo $active_main_header_menu_background_color ?><?php _e('; }'); ?>
<?php } 
}

// Menu font
function photostory_get_menu_font() {
    $menufont = get_option('photostory_menu_google_fonts'); 
		if ($menufont != 'default' && $menufont != '') { ?>
		<?php _e('#wrapper #container .menu-box ul li a { font-family: "'); ?><?php echo $menufont ?><?php _e('", Arial, Helvetica, sans-serif; }'); ?>
<?php } 
}

// Menu font size
function photostory_get_menu_font_size() {
    $menufont_size = get_option('photostory_menu_google_fonts_size'); 
		if ($menufont_size != '17' && $menufont_size != '') { ?>
		<?php _e('#wrapper #container .menu-box ul li a { font-size: '); ?><?php echo $menufont_size ?><?php _e('px; }'); ?>
<?php } 
}

// User defined CSS.
function photostory_get_own_css() {
    $own_css = get_option('photostory_own_css'); 
		if ($own_css != '') { ?>
		<?php echo $own_css ?>
<?php } 
}

// Display custom CSS.
function photostory_custom_styles() { ?>
<?php echo ("<style type='text/css'>"); ?>
<?php photostory_get_own_css(); ?>
<?php photostory_get_custom_background(); ?>
<?php photostory_background_image_size(); ?>
<?php photostory_get_background_pattern_opacity(); ?>
<?php photostory_get_content_background_opacity(); ?>
<?php photostory_display_sidebar(); ?>
<?php photostory_display_menu(); ?>
<?php photostory_menu_position(); ?>
<?php photostory_display_meta_post_entry(); ?>
<?php photostory_get_main_menu_background_color(); ?>
<?php photostory_get_main_submenu_background_color(); ?>
<?php photostory_get_main_submenu_hover_color(); ?>
<?php photostory_get_main_content_background_color(); ?>
<?php photostory_get_author_comments_background_color(); ?>
<?php photostory_get_sticky_post_background_color(); ?>
<?php photostory_get_posts_thumbnail_background_color(); ?>
<?php photostory_get_highlight_background_color(); ?>
<?php photostory_get_searchform_border_color(); ?>
<?php photostory_get_searchform_button_background_color(); ?>
<?php photostory_get_searchform_button_hover_color(); ?>
<?php photostory_get_form_fields_background_color(); ?>
<?php photostory_get_form_fields_border_color(); ?>
<?php photostory_get_form_buttons_background_color(); ?>
<?php photostory_get_form_buttons_hover_color(); ?>
<?php photostory_get_table_headers_background_color(); ?>
<?php photostory_get_body_font(); ?>
<?php photostory_get_body_google_fonts_size(); ?>
<?php photostory_get_headings_google_fonts(); ?>
<?php photostory_get_headings_google_fonts_size(); ?>
<?php photostory_get_site_title_color(); ?>
<?php photostory_get_site_title_hover_color(); ?>
<?php photostory_get_description_font(); ?>
<?php photostory_get_description_font_size(); ?>
<?php photostory_get_main_headlines_color(); ?>
<?php photostory_get_headlines_font(); ?>
<?php photostory_get_headline_h1_size(); ?>
<?php photostory_get_headline_h2_size(); ?>
<?php photostory_get_headline_h3_size(); ?>
<?php photostory_get_headline_h4_size(); ?>
<?php photostory_get_headline_h5_size(); ?>
<?php photostory_get_headline_h6_size(); ?>
<?php photostory_get_headline_box_google_fonts(); ?>
<?php photostory_get_homepage_headlines_color(); ?>
<?php photostory_get_headline_box_google_fonts_size(); ?>
<?php photostory_get_postentry_font(); ?>
<?php photostory_get_postentry_font_size(); ?>
<?php photostory_get_postentry_color(); ?>
<?php photostory_get_postentry_hover_color(); ?>
<?php photostory_get_sidebar_widget_font(); ?>
<?php photostory_get_sidebar_widget_font_size(); ?>
<?php photostory_get_sidebar_text_color(); ?>
<?php photostory_get_footer_widget_font(); ?>
<?php photostory_get_footer_widget_font_size(); ?>
<?php photostory_get_footer_text_color(); ?>
<?php photostory_get_footer_notices_text_color(); ?>
<?php photostory_get_content_links_color(); ?>
<?php photostory_get_sidebar_links_color(); ?>
<?php photostory_get_footer_links_color(); ?>
<?php photostory_get_footer_notices_links_color(); ?>
<?php photostory_get_main_header_menu_color(); ?>
<?php photostory_get_main_header_menu_hover_color(); ?>
<?php photostory_get_main_header_menu_hover_background_color(); ?>
<?php photostory_get_active_main_header_menu_color(); ?>
<?php photostory_get_active_main_header_menu_background_color(); ?>
<?php photostory_get_menu_font(); ?>
<?php photostory_get_menu_font_size(); ?>
<?php echo ("</style>"); ?>
<?php
} 
add_action('wp_enqueue_scripts', 'photostory_custom_styles');	?>