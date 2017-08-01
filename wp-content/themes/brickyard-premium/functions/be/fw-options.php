<?php
/**
 * Framework options.
 * @package BrickYard
 * @since BrickYard 1.0.0
*/   
      
$brickyard_options = array (

array( "name" => $brickyard_themename ." Options",
	"type" => "title"),

array( "type" => "open"),

// Start Tabs
array( "name" => "Start Tabs",
		"type" => "tabs-open",
		"icon" => "layout"),

	// Home
	array( "name" => "Welcome",
			"id" => "tab_menu_0",
			"type" => "tab",
			"icon" => "layout",
			"class" => " selected first"),
	
	// General Settings
	array( "name" => "General Settings",
			"id" => "tab_menu_1",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
      
	// Header Settings
	array( "name" => "Header Settings",
			"id" => "tab_menu_2",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
      
	// Posts/Pages Settings
	array( "name" => "Posts/Pages Settings",
			"id" => "tab_menu_3",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
      
  // Homepage Settings
	array( "name" => "Homepage Settings",
			"id" => "tab_menu_4",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
		
	// Colors
	array( "name" => "Colors",
			"id" => "tab_menu_5",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
      
	// Fonts
	array( "name" => "Fonts",
			"id" => "tab_menu_6",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
	
	// Social Networking Tab
	array( "name" => "Social Networking",
			"id" => "tab_menu_7",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
	
	// Other settings Tab
	array( "name" => "Other Settings",
			"type" => "tab",
			"id" => "tab_menu_8",
			"class" => ""),
	

// General setting Tab
array( "name" => "Close Tabs",
		"type" => "tabs-close",
		"icon" => "layout"),


array( "name" => "Start Container",
		"type" => "container-open",
		"icon" => "layout"),

// Home Container 0
array( "name" => "tab_content_0",
		"type" => "tabcontent-open",
		"display" => "block",
		"icon" => "layout"),

	// Home
	array( "name" => "Welcome to BrickYard!",
		"type" => "heading",
		"icon" => "layout"),
	
	array("name" => "First of all, I would like to thank you for choosing BrickYard! I firmly believe that you will be satisfied with this theme.",
		"type" => "infotext"),
	
		array( "name" => "About BrickYard",
		"type" => "heading",
		"icon" => "layout"),
	
	array("name" => "BrickYard is an easily customizable WordPress blog and magazine theme. It is a fully responsive theme that allows for easy viewing on any device.",
		"type" => "infotext"),

array( "name" => "tab_content_0",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close Home

// General setting Tab Container 1
array( "name" => "tab_content_1",
		"type" => "tabcontent-open",
		"display" => "none",
		"icon" => "layout"),

	// General settings
	array( "name" => "General Settings",
		"type" => "heading",
		"icon" => "layout"),		

	array( "name" => "Color Scheme",
		"desc" => "Select one of the preconfigured Color Schemes. You can create your own color scheme under the tab Color.",
		"id" => $brickyard_shortname."_css",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Orange (default)',
							'b' => 'Blue',
              'c' => 'Green',
							'd' => 'Pink',
              'e' => 'Purple',
              'f' => 'Red',
              'g' => 'Turquoise',),
		"type" => "select"),
    
  array( "name" => "Background Image Size",
		"desc" => "Choose if the main Background Image should completely cover its area (Cover) or if it should preserve its dimensions (Auto).",
		"id" => $brickyard_shortname."_background_image_size",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Auto',
							'b' => 'Cover'),
		"type" => "select"),
    
  array( "name" => "Background Pattern",
		"desc" => "Set the main background pattern (hatching) to be visible or not.",
		"id" => $brickyard_shortname."_display_background_pattern",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
	array( "name" => "Background Pattern Opacity",
		"desc" => "Select transparency of the main background pattern (10 = greatest transparency, 100 = opaque background pattern).",
		"id" => $brickyard_shortname."_background_pattern_opacity",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Default',
							'b' => '100',
							'c' => '90',
							'd' => '80',
              'e' => '70',
              'f' => '60',
              'g' => '50',
              'h' => '40',
              'i' => '30',
              'j' => '20',
              'k' => '10',),
		"type" => "select"),
    
  array( "name" => "Display Sidebar",
		"desc" => "Set the right sidebar to be visible or not.",
		"id" => $brickyard_shortname."_display_sidebar",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Content/Excerpt Displaying",
		"desc" => "Select whether you want to display the full content or the excerpts on your archive pages (including all archives, homepage and search results).",
		"id" => $brickyard_shortname."_content_archives",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Excerpt',
							'b' => 'Content',),
		"type" => "select"),
    
  array( "name" => "Excerpt Length",
	"desc" => "Set here the number of words you wish to display in post excerpts on your archive pages.",
		"id" => $brickyard_shortname."_excerpt_length",
		"type" => "text",
		"std" => "40"),
    
  array( "name" => "Display Breadcrumb Navigation",
		"desc" => "Set the Breadcrumb Navigation to be visible or not. The Breadcrumb NavXT plugin has to be installed for displaying it.",
		"id" => $brickyard_shortname."_display_breadcrumb",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
	array( "name" => "Favicon URL",
		"desc" => "Upload your own favicon image (16x16px) or directly insert its URL. If you are using WordPress 4.3 or above, you can set a 'Site Icon' in 'Appearance - Customize - Site Identity' instead.",
		"id" => $brickyard_shortname."_favicon_url",
		"type" => "upload-favicon",
		"std" => ""),	
    
array( "name" => "tab_content_1",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close General settings
   	

// Open Header settings
  array( "name" => "tab_content_2",
		"type" => "tabcontent-open",
		"display" => "none",
		"icon" => "layout"),
    
	array( "name" => "Header Settings",
		"type" => "heading",
		"icon" => "layout"),
    
  array( "name" => "Display Header Image",
		"desc" => "Set the <a href='themes.php?page=custom-header'>Header Image</a> to be visible on all pages or only on the homepage.",
		"id" => $brickyard_shortname."_display_header_image",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Everywhere',
							'b' => 'Only on Homepage'),
		"type" => "select"),
    
	array( "name" => "Logo URL",
		"desc" => "Upload your own logo in .jpg, .gif or .png format or directly insert its URL. The logo will automatically replace the Site Title.",
		"id" => $brickyard_shortname."_logo_url",
		"type" => "upload-logo",
		"std" => ""),
    
  array( "name" => "Display Site Description",
		"desc" => "Set the Site Description to be visible or not in your header.",
		"id" => $brickyard_shortname."_display_site_description",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Display Search Form",
		"desc" => "Set the header Search Form to be visible or not.",
		"id" => $brickyard_shortname."_display_search_form",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
array( "name" => "tab_content_2",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close Header settings
 
  
// Open Posts/Pages settings
  array( "name" => "tab_content_3",
		"type" => "tabcontent-open",
		"display" => "none",
		"icon" => "layout"),
    
	array( "name" => "Post Settings",
		"type" => "heading",
		"icon" => "layout"),
    
  array( "name" => "Display Featured Image on single posts",
		"desc" => "Set the Featured Image to be visible or not on the single posts.",
		"id" => $brickyard_shortname."_display_image_post",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Display Meta Box on posts",
		"desc" => "Set the Meta Box (with publish date, author, comments, category and tags) to be visible or not on the single posts and the post entries.",
		"id" => $brickyard_shortname."_display_meta_post",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
	array( "name" => "Next/Previous Post Navigation",
		"desc" => "This feature gives the possibility to easy navigate between the posts in chronological order.",
		"id" => $brickyard_shortname."_next_preview_post",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Display Related Posts on single posts",
		"desc" => "Set the Related Posts box to be visible or not on the single posts.",
		"id" => $brickyard_shortname."_display_related_posts",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Related Posts headline",
	"desc" => "Fill here the headline of Related Posts box.",
		"id" => $brickyard_shortname."_related_posts_headline",
		"type" => "text",
		"std" => "Related Posts"),
    
  array( "name" => "Number of Related Posts",
	"desc" => "Fill here the number of related posts to be displayed on the single posts.",
		"id" => $brickyard_shortname."_related_posts_number",
		"type" => "text",
		"std" => "6"),
    
  array( "name" => "Related Posts format",
		"desc" => "Set here if you want to display the Related Posts as a Slider or as an Unordered List.",
		"id" => $brickyard_shortname."_related_posts_format",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Slider',
							'b' => 'Unordered List'),
		"type" => "select"),

// PAGES
	array( "name" => "Page Settings",
		"type" => "heading",
		"icon" => "layout"),
    
  array( "name" => "Display Featured Image on pages",
		"desc" => "Set the Featured Image to be visible or not on the pages.",
		"id" => $brickyard_shortname."_display_image_page",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
array( "name" => "tab_content_3",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close Posts/Pages settings


// Open Homepage settings
array( "name" => "tab_content_4",
		"type" => "tabcontent-open",
		"display" => "none",
		"icon" => "layout"), 
    
	// Latest Posts    
  array( "name" => "Latest Posts",
		"type" => "heading",
		"icon" => "layout"),
    
  array( "name" => "Display Latest Posts",
		"desc" => "Set the default Latest Posts section  to be visible or not on your Latest Posts homepage.",
		"id" => $brickyard_shortname."_display_latest_posts",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
              'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Latest Posts section headline",
	"desc" => "Fill here the headline of the Latest Posts section.",
		"id" => $brickyard_shortname."_latest_posts_headline",
		"type" => "text",
		"std" => "Latest Posts"),
    
	// Latest Posts from a specific category    
	array( "name" => "Latest Posts from a specific category",
		"type" => "heading",
		"icon" => "layout"),

  array( "type" => "infotext",
		"name" => "For displaying boxes with the latest posts from a specific category, go to the <a href='widgets.php'>Widgets</a> settings. Insert as many BrickYard Posts Widgets as you want into '<strong>Latest Posts Homepage widget area</strong>'. You can choose from 6 different BrickYard Posts Widgets:<ol><li>BrickYard Posts-Column</li><li>BrickYard Posts-Default</li><li>BrickYard Posts-Grid</li><li>BrickYard Posts-List</li><li>BrickYard Posts-Slider</li><li>BrickYard Posts-Thumbnail</li></ol>All the Widgets are described directly in the <a href='widgets.php'>Widgets</a> settings."),
    
	// Homepage Slideshow    
  array( "name" => "Homepage Header Slideshow",
		"type" => "heading",
		"icon" => "layout"),
    
  array( "type" => "infotext",
		"name" => "For displaying a Slideshow instead of the static Header Image, the Cyclone Slider 2 plugin has to be installed. For creating a new Slideshow, go to the <a href='edit.php?post_type=cycloneslider'>Cyclone Slider</a> settings. After creating the Slideshow, go to the <a href='widgets.php'>Widgets</a> settings. Insert one Cyclone Slider Widget into '<strong>Homepage slideshow</strong>' widget area and select the desired Slideshow from a drop-down list."),

array( "name" => "tab_content_4",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close Homepage settings

// Colors Tab Container
array( "name" => "tab_content_5",
		"type" => "tabcontent-open",
		"display" => "none",
		"icon" => "layout"),
        
  array( "name" => "Color Settings",
		"type" => "heading",
		"icon" => "layout"),   	
    
	array("name" => "Since version 2.0.0, the Color settings have been moved to the <a href='customize.php'>Customizer</a>.",
		"type" => "infotext"), 
	
	array( "name" => "tab_content_5",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close Color settings

// Open Fonts
array( "name" => "tab_content_6",
		"type" => "tabcontent-open",
		"display" => "none",
		"icon" => "layout"),

	array( "name" => "Font Settings",
		"type" => "heading",
		"icon" => "layout"),
    
	array("name" => "Since version 2.0.0, the Font settings have been moved to the <a href='customize.php'>Customizer</a>.",
		"type" => "infotext"),		

array( "name" => "tab_content_6",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close Fonts

// Open Social Networking
array( "name" => "tab_content_7",
		"type" => "tabcontent-open",
		"display" => "none",
		"icon" => "layout"),

	array( "name" => "Share Buttons",
		"type" => "heading",
		"icon" => "layout"),
    
  array( "name" => "Share Buttons Language",
		"desc" => "Set here a language of the Facebook Like and Share buttons.",
		"id" => $brickyard_shortname."_share_buttons_language",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'en_US',
							'b' => 'cs_CZ',
              'c' => 'da_DK',
              'd' => 'de_DE',
              'e' => 'el_GR',
              'f' => 'es_ES',
              'g' => 'fr_FR', 
              'h' => 'hi_IN',
              'i' => 'it_IT',
              'j' => 'nl_NL',
              'k' => 'pl_PL',
              'l' => 'pt_BR',
              'm' => 'ru_RU',
              'n' => 'sk_SK'),
		"type" => "select"),
	
	array( "name" => "Share Buttons on Pages",
		"desc" => "This shows Facebook, Twitter and Google '+1' share buttons below your pages.",
		"id" => $brickyard_shortname."_share_buttons_page",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
	
	array( "name" => "Share Buttons on Posts",
		"desc" => "This shows Facebook, Twitter and Google '+1' share buttons below your posts.",
		"id" => $brickyard_shortname."_share_buttons_post",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
	array( "name" => "Share Buttons on Post Entries",
		"desc" => "This shows Facebook, Twitter and Google '+1' share buttons on the Post Entries (on homepage/archive pages).",
		"id" => $brickyard_shortname."_share_buttons_post_entry",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Share Buttons on Products",
		"desc" => "This shows Facebook, Twitter and Google '+1' share buttons on the individual WooCommerce Products.",
		"id" => $brickyard_shortname."_share_buttons_products",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
	array( "name" => "Social Networks Links in Header",
		"type" => "heading",
		"icon" => "layout"),
    
	array( "name" => "Facebook Link",
		"desc" => "Insert here the full URL address of your Facebook profile or page. Example: http://www.facebook.com/mypage",
		"id" => $brickyard_shortname."_header_facebook_link",
		"type" => "text",
		"std" => ""),  
    
	array( "name" => "Twitter Link",
		"desc" => "Insert here the full URL address of your Twitter profile. Example: http://www.twitter.com/myprofile",
		"id" => $brickyard_shortname."_header_twitter_link",
		"type" => "text",
		"std" => ""), 
    
	array( "name" => "Google+ Link",
		"desc" => "Insert here the full URL address of your Google+ profile or page. Example: http://plus.google.com/myprofile",
		"id" => $brickyard_shortname."_header_google_link",
		"type" => "text",
		"std" => ""), 
    
	array( "name" => "RSS Link",
		"desc" => "Insert here the full URL address of your RSS Feed. Example: http://www.yoursite.com/feed",
		"id" => $brickyard_shortname."_header_rss_link",
		"type" => "text",
		"std" => ""), 


array( "name" => "tab_content_7",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close Social Networking


// Open Other settings
array( "name" => "tab_content_8",
		"type" => "tabcontent-open",
		"display" => "none",
		"icon" => "layout"),

	array( "name" => "Other Settings",
		"type" => "heading",
		"icon" => "layout"),
		

array( "type" => "infotext",
		"name" => "OPTIONS: <a href='widgets.php'>Widgets</a> | <a href='nav-menus.php'>Menus</a> | <a href='themes.php?page=custom-header'>Header Image</a> | <a href='themes.php?page=custom-background'>Background Settings</a>"),
    
  array( "name" => "Custom CSS",
		"desc" => "Fill here your own cascading style sheet information (CSS).<br />Example: #content p {font-size: 15px;} #sidebar p {font-size: 14px;}",
		"id" => $brickyard_shortname."_own_css",
		"type" => "textarea",
		"std" => ""),
    
  array( "name" => "Custom JavaScript - Header",
		"desc" => "Fill here your custom JavaScript code which will appear in the 'head' section. <br />Please do not forget to wrap your JavaScript code between the &lt;script type='text/javascript'&gt;&lt;/script&gt; tags!",
		"id" => $brickyard_shortname."_own_javascript_header",
		"type" => "textarea",
		"std" => ""),
    
  array( "name" => "Custom JavaScript - Footer",
		"desc" => "Fill here your custom JavaScript code which will appear just before the closing 'body' tag. <br />Please do not forget to wrap your JavaScript code between the &lt;script type='text/javascript'&gt;&lt;/script&gt; tags!",
		"id" => $brickyard_shortname."_own_javascript_footer",
		"type" => "textarea",
		"std" => ""),

array( "name" => "tab_content_8",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close Other settings

array("name" => "Close Container",
		"type" => "container-close",
		"icon" => "layout"),

array( "type" => "close") 
); 


add_action('admin_head', 'brickyard_admin_css');

function brickyard_admin_css() { ?>
     
	<script language="JavaScript">
		jQuery.noConflict();
		jQuery(document).ready(function($) {
	
		$(".tabs .tab[id^=tab_menu]").click(function() {
			var curMenu=$(this);
			$(".tabs .tab[id^=tab_menu]").removeClass("selected");
			curMenu.addClass("selected");
	
			var index=curMenu.attr("id").split("tab_menu_")[1];
			$(".curvedContainer .tabcontent").css("display","none");
			$(".curvedContainer #tab_content_"+index).css("display","block");
		});
	});
	</script>

<?php }
function brickyard_add_admin() {
	global $brickyard_options; global $brickyard_themename; global $brickyard_shortname;
	if ( isset ( $_GET['page'] ) && ( $_GET['page'] == basename(__FILE__) ) ) {
		if ( isset ($_REQUEST['action']) && ( 'save' == $_REQUEST['action'] ) ){
      if ( !empty($_POST) && check_admin_referer('brickyard_save_options','brickyard_save_options_field' ) ) {
			foreach ( $brickyard_options as $value ) {
				if ( array_key_exists('id', $value) ) {
					if ( isset( $_REQUEST[ $value['id'] ] ) ) {
						update_option( $value['id'], $_REQUEST[ $value['id'] ]  );
					}
					else {
						delete_option( $value['id'] );
					}
				}
			}
			header("Location: themes.php?page=".basename(__FILE__)."&saved=true");
		}
    }else if ( isset ($_REQUEST['action']) && ( 'reset' == $_REQUEST['action'] ) ) {
			foreach ($brickyard_options as $value) {
				if ( array_key_exists('id', $value) ) {
					delete_option( $value['id'] );
				}
			}
			header("Location: themes.php?page=".basename(__FILE__)."&reset=true");
		}
	}
	add_theme_page($brickyard_themename." Options", 'Theme Options', 'edit_theme_options', 'fw-options.php', 'brickyard_admin', '', '1');
}



function brickyard_admin() {
	global $brickyard_themename, $brickyard_shortname, $brickyard_options, $brickyard_themever, $fwver, $brickyard_manualurl; 
	if (isset($_REQUEST["saved"]) && !empty($_REQUEST["saved"])) echo '<div id="message" class="updated fade"><p><strong>'.$brickyard_themename.' settings saved.</strong></p></div>';
	if (isset($_REQUEST["reset"]) && !empty($_REQUEST["reset"])) echo '<div id="message" class="error fade"><p><strong>'.$brickyard_themename.' '.__( 'settings reset.', 'brickyard' ).'</strong></p></div>';
  wp_enqueue_style('brickyard-framework-style', get_template_directory_uri() . '/functions/be/css.css');
?>

	<div id="wrap_fm"><!-- [ Header ]-->
		<div class="header_fm">
			<div class="logo_fm">Theme Options</div>
			<div class="frame_vers_fm">
				<div class="theme_version_fm"><?php echo $brickyard_themename;?> <strong><?php echo $brickyard_themever;?></strong></div>
				<div class="clear"></div>
			</div>
		</div>

		<!-- [ Top Menu ]-->
		<div class="top_menu_fm">
			<a title="Theme Documentation" target="_blank"class="doc_fm" href="<?php echo $brickyard_manualurl; ?>">Documentation</a><a title="Theme Support" target="_blank" class="support_fm" href="http://themes.tomastoman.cz/support/">Support</a>
		</div>


	<form method="post">
	<?php 
	foreach ($brickyard_options as $value) {
	switch ( $value['type'] ) {
	case "open":
	?> 
	<?php break; case "title": ?> 

	<!-- [ Body ]-->
	<div id="wrap_body_fm">
	<div class="tabscontainer">


	<?php break; case "close": ?> 

	<!-- start form -->
	<div class="col_100">
		<div class="col_50">
			<input id="submit" class="button-primary" name="save" type="submit" value="Save all changes" /> <input type="hidden" name="action" value="save" />
      <?php wp_nonce_field( 'brickyard_save_options','brickyard_save_options_field' ); ?>
			</form>
		</div>
	 	<div class="col_50">
		 	<form method="post">
				<input class="reset" name="reset" type="submit" value="Reset to default settings" />
				<input type="hidden" name="action" value="reset" />
			</form>
		</div>	
		<div class="clear"></div>
	</div>
	<!-- end form -->
</div></div>



<?php break;case 'text': ?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	<div class="input_fm"><input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo $value['std']; } ?>" /></div>
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>
  
<?php break;case 'upload-favicon': ?>
<?php wp_enqueue_media();
wp_enqueue_script('brickyard-my-admin-js-favicon', get_template_directory_uri() . '/js/custom-uploader-favicon.js', array('jquery')); ?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
  <input class="upload_image" type="text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo $value['std']; } ?>" /> 
  <input class="upload_image_button button" type="button" value="Upload Image" />
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>
  
<?php break;case 'upload-logo': ?>
<?php wp_enqueue_script('brickyard-my-admin-js-logo', get_template_directory_uri() . '/js/custom-uploader-logo.js', array('jquery')); ?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
  <input class="upload_logo" type="text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo $value['std']; } ?>" /> 
  <input class="upload_logo_button button" type="button" value="Upload Image" />
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>

<?php break; case 'textarea':?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	<div class="input_fm"><textarea name="<?php echo $value['id']; ?>" style="height: 100px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo $value['std']; } ?></textarea></div>
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>

<?php break; case 'select': ?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	<div class="input_fm"><select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?>
	<option <?php if ( get_option( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
	<?php } ?>
	</select></div>
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>
	
	<?php break; case "heading":?>
	<h1><?php echo $value['name']; ?></h1>
	
	<?php break; case "subheader":?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	
  <?php break; case "infotext":?>
	<div class="infotext"><?php echo $value['name']; ?></div>
	
	<?php break; case "paragraph":?>
	<div class="desc_fm"><small><?php echo $value['name']; ?></small></div>
  	
	<?php break; case "tabs-open":?>	
	<div class="tabs">
	
	<?php break; case "tabs-close":?>	
	</div>	
	
	<?php break; case "tab":?>	
	<div class="tab<?php echo $value['class']; ?>" id="<?php echo $value['id']; ?>">
	<div class="link"><?php echo $value['name']; ?></div>
	<div class="arrow"></div>
	</div>
 	
 	<?php break; case "container-open":?>	
	<div class="curvedContainer">
 	
 	<?php break; case "container-close":?>	
	</div>	
 	
	<?php break; case "tabcontent-open":?>	
	<div class="tabcontent" id="<?php echo $value['name']; ?>" style="display:<?php echo $value['display']; ?>" >
	
	<?php break; case "tabcontent-close":?>	
	</div>
	
 	
<?php break;

}
}
?>

<?php
}

add_action('admin_menu', 'brickyard_add_admin');
?>