<?php
/**
 * Framework options.
 * @package HappenStance
 * @since HappenStance 1.0.0
*/   
      
$happenstance_options = array (

array( "name" => $happenstance_themename ." Options",
	"type" => "title"),

array( "type" => "open"),

// Start Tabs
array( "name" => "Start Tabs",
		"type" => "tabs-open",
		"icon" => "layout"),

	// Home
	array( "name" => "<i class='icon_house' aria-hidden='true'></i>Welcome",
			"id" => "tab_menu_0",
			"type" => "tab",
			"icon" => "layout",
			"class" => " selected first"),
	
	// General Settings
	array( "name" => "<i class='icon_key' aria-hidden='true'></i>General Settings",
			"id" => "tab_menu_1",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
      
	// Header Settings
	array( "name" => "<i class='icon_cog' aria-hidden='true'></i>Header",
			"id" => "tab_menu_2",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
      
	// Posts/Pages Settings
	array( "name" => "<i class='icon_documents' aria-hidden='true'></i>Posts/Pages",
			"id" => "tab_menu_3",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
      
  // Post Entries Settings
	array( "name" => "<i class='icon_tags' aria-hidden='true'></i>Post Entries",
			"id" => "tab_menu_4",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
		
	// Colors
	array( "name" => "<i class='icon_image' aria-hidden='true'></i>Colors",
			"id" => "tab_menu_5",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
      
	// Fonts
	array( "name" => "<i class='icon_pens' aria-hidden='true'></i>Fonts",
			"id" => "tab_menu_6",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
	
	// Social Networking Tab
	array( "name" => "<i class='icon_group' aria-hidden='true'></i>Social Networking",
			"id" => "tab_menu_7",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
	
	// Other settings Tab
	array( "name" => "<i class='icon_tools' aria-hidden='true'></i>Other Settings",
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
	array( "name" => "Welcome to HappenStance!",
		"type" => "heading",
		"icon" => "layout"),
	
	array("name" => "First of all, I would like to thank you for choosing HappenStance! I firmly believe that you will be satisfied with this theme.",
		"type" => "infotext"),
	
		array( "name" => "About HappenStance",
		"type" => "heading",
		"icon" => "layout"),
	
	array("name" => "HappenStance is an easily customizable theme which can be used for your Blog, Magazine, Business, eCommerce or Events website. It is a fully responsive and Retina ready theme that allows for easy viewing on any device.",
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
		"desc" => "Select one of the preconfigured Color Schemes. You can create your own color scheme under Colors tab.",
		"id" => $happenstance_shortname."_css",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Blue (default)',
							'b' => 'Gray',
              'c' => 'Green',
							'd' => 'Orange',
							'e' => 'Pink',
              'f' => 'Purple',
              'g' => 'Red',
              'h' => 'Turquoise',),
		"type" => "select"),
    
  array( "name" => "Layout Style",
		"desc" => "Choose the layout style of your website.",
		"id" => $happenstance_shortname."_layout",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Boxed',
							'b' => 'Wide'),
		"type" => "select"),
    
	array( "name" => "Favicon URL",
		"desc" => "Upload your own favicon image (16x16px) or directly insert its URL. If you are using WordPress 4.3 or above, you can set a 'Site Icon' in 'Appearance - Customize - Site Identity' instead.",
		"id" => $happenstance_shortname."_favicon_url",
		"type" => "upload-favicon",
		"std" => ""),
    
  array( "name" => "Display Breadcrumb Navigation",
		"desc" => "Set the Breadcrumb Navigation to be visible or not. The Breadcrumb NavXT plugin has to be installed for displaying it.",
		"id" => $happenstance_shortname."_display_breadcrumb",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Display Scroll-top Button",
		"desc" => "Set the scroll-top button to be visible or not.",
		"id" => $happenstance_shortname."_display_scroll_top",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
	array( "name" => "Background Settings (for Boxed layout)",
		"type" => "heading",
		"icon" => "layout"),
  
  array( "name" => "Background Image Size",
		"desc" => "Choose if the main Background Image should completely cover its area (Cover) or if it should preserve its dimensions (Auto). This option works only in the Boxed layout.",
		"id" => $happenstance_shortname."_background_image_size",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Auto',
							'b' => 'Cover'),
		"type" => "select"),
    
  array( "name" => "Background Pattern",
		"desc" => "Set the main background pattern (hatches) to be visible or not. This option works only in the Boxed layout.",
		"id" => $happenstance_shortname."_display_background_pattern",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
	array( "name" => "Background Pattern Opacity",
		"desc" => "Select transparency of the main background pattern (10 = greatest transparency, 100 = opaque background pattern). This option works only in the Boxed layout.",
		"id" => $happenstance_shortname."_background_pattern_opacity",
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
    
  array( "name" => "Display Shadow",
		"desc" => "Set the main page container shadow to be visible or not. This option works only in the Boxed layout.",
		"id" => $happenstance_shortname."_display_main_shadow",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
	array( "name" => "Sidebar Settings",
		"type" => "heading",
		"icon" => "layout"),
    
  array( "name" => "Display Sidebar on Posts/Pages",
		"desc" => "Set the right sidebar to be visible or not on the single posts and pages.",
		"id" => $happenstance_shortname."_display_sidebar",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Display Sidebar on Archives",
		"desc" => "Set the right sidebar to be visible or not on the archive pages (including all archives, homepage and search results).",
		"id" => $happenstance_shortname."_display_sidebar_archives",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),	
    
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
		"id" => $happenstance_shortname."_display_header_image",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Everywhere',
							'b' => 'Only on Homepage'),
		"type" => "select"),
    
	array( "name" => "Logo URL",
		"desc" => "Upload your own logo in .jpg, .gif or .png format or directly insert its URL. The logo will automatically replace the Site Title.",
		"id" => $happenstance_shortname."_logo_url",
		"type" => "upload-logo",
		"std" => ""),
    
  array( "name" => "Display Site Description",
		"desc" => "Set the Site Description to be visible or not in your header.",
		"id" => $happenstance_shortname."_display_site_description",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Display Search Form",
		"desc" => "Set the header Search Form to be visible or not.",
		"id" => $happenstance_shortname."_display_search_form",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Fixed Menu",
		"desc" => "Select whether to enable or disable fixing of the Main Header Menu at the top of the browser window.",
		"id" => $happenstance_shortname."_fixed_menu",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Enable',
							'b' => 'Disable',),
		"type" => "select"),
    
	array( "name" => "Carousel Box Settings",
		"type" => "heading",
		"icon" => "layout"),
    
  array( "name" => "Display Carousel Box",
		"desc" => "Set the Carousel Box to be visible or not in your header.",
		"id" => $happenstance_shortname."_display_carousel",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Carousel Content",
		"desc" => "Set what to display in the Carousel Box. You can set the Carousel Menu in the <a href='nav-menus.php'>Menus</a> panel.",
		"id" => $happenstance_shortname."_carousel_content",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Latest Posts',
              'b' => 'Latest Events',
							'c' => 'Carousel Menu'),
		"type" => "select"),
    
  array( "name" => "Number of Latest Posts in Carousel",
	"desc" => "Fill here the number of latest posts to be displayed in the Carousel Box.",
		"id" => $happenstance_shortname."_carousel_posts_number",
		"type" => "text",
		"std" => "6"), 
    
  // Contact information  
	array( "name" => "Contact Information",
		"type" => "heading",
		"icon" => "layout"),
    
  array( "name" => "Postal Address",
	  "desc" => "Fill here your postal address to be displayed in header.",
		"id" => $happenstance_shortname."_header_address",
		"type" => "text",
		"std" => ""),
    
  array( "name" => "Email Address",
	  "desc" => "Fill here your email address to be displayed in header.",
		"id" => $happenstance_shortname."_header_email",
		"type" => "text",
		"std" => ""),
    
  array( "name" => "Phone Number",
	  "desc" => "Fill here your phone number to be displayed in header.",
		"id" => $happenstance_shortname."_header_phone",
		"type" => "text",
		"std" => ""),
    
  array( "name" => "Skype Name",
	  "desc" => "Fill here your Skype name to be displayed in header.",
		"id" => $happenstance_shortname."_header_skype",
		"type" => "text",
		"std" => ""),
    
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
		"id" => $happenstance_shortname."_display_image_post",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Display Manual Excerpt on single posts",
		"desc" => "Set the manually defined excerpts to be visible or not on the single posts.",
		"id" => $happenstance_shortname."_display_excerpt_post",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Hide',
							'b' => 'Display'),
		"type" => "select"),
    
  array( "name" => "Display Meta Box on single posts",
		"desc" => "Set the Meta Box (with the publish date, author, comments, category and tags) to be visible or not on the single posts.",
		"id" => $happenstance_shortname."_display_meta_post",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
	array( "name" => "Next/Previous Post Navigation",
		"desc" => "This feature gives the possibility to easy navigate between the posts in chronological order.",
		"id" => $happenstance_shortname."_next_preview_post",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Display Related Posts on single posts",
		"desc" => "Set the Related Posts box to be visible or not on the single posts.",
		"id" => $happenstance_shortname."_display_related_posts",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Related Posts headline",
	"desc" => "Fill here the headline of Related Posts box.",
		"id" => $happenstance_shortname."_related_posts_headline",
		"type" => "text",
		"std" => "Related Posts"),
    
  array( "name" => "Number of Related Posts",
	"desc" => "Fill here the number of related posts to be displayed on the single posts.",
		"id" => $happenstance_shortname."_related_posts_number",
		"type" => "text",
		"std" => "6"),
    
  array( "name" => "Related Posts format",
		"desc" => "Set here if you want to display the Related Posts as a Slider or as an Unordered List.",
		"id" => $happenstance_shortname."_related_posts_format",
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
		"id" => $happenstance_shortname."_display_image_page",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
array( "name" => "tab_content_3",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close Posts/Pages settings


// Open Post Entries settings
array( "name" => "tab_content_4",
		"type" => "tabcontent-open",
		"display" => "none",
		"icon" => "layout"), 
       
  array( "name" => "Post Entries and Blog Page Settings",
		"type" => "heading",
		"icon" => "layout"),
    
  array( "name" => "Post Entries Format",
		"desc" => "Set the way how the post entries to be displayed.",
		"id" => $happenstance_shortname."_post_entry_format",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'One Column',
              'b' => 'Grid - Masonry'),
		"type" => "select"),
    
  array( "name" => "Number of Columns in the Grid",
		"desc" => "Set the number of columns to be displayed in the Grid - Masonry format.",
		"id" => $happenstance_shortname."_grid_columns",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => '3',
              'b' => '4',
              'c' => '2'),
		"type" => "select"),
    
  array( "name" => "Display Meta Box on Post Entries",
		"desc" => "Set the Meta Box (with the publish date, author, comments, category and tags) to be visible or not on the post entries.",
		"id" => $happenstance_shortname."_display_meta_post_entry",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),  
    
  array( "name" => "Featured Images Size",
		"desc" => "Select the size of Featured Images displayed on post archive pages. The 'Thumbnail size' can be set in 'Settings - Media'.",
		"id" => $happenstance_shortname."_featured_image_size",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Full Size',
              'b' => 'Thumbnail Size'),
		"type" => "select"),
    
  array( "name" => "Featured Images Hover Effect",
		"desc" => "Select an effect for the Featured Images after placing the mouse cursor on them.",
		"id" => $happenstance_shortname."_featured_image_hover",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'None',
              'b' => 'Fade',
              'c' => 'Focus',
              'd' => 'Shadow',
              'e' => 'Tilt'),
		"type" => "select"),
    
  array( "name" => "Content/Excerpt Displaying",
		"desc" => "Select whether you want to display the full content or the post excerpts on your archive pages (including all archives, homepage and search results).",
		"id" => $happenstance_shortname."_content_archives",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Excerpt',
							'b' => 'Content',),
		"type" => "select"),
    
  array( "name" => "Excerpt Length",
	"desc" => "Set here the number of words you wish to display in the excerpt.",
		"id" => $happenstance_shortname."_excerpt_length",
		"type" => "text",
		"std" => "40"),
    
  array( "name" => "Blog Page",
		"type" => "heading",
		"icon" => "layout"),
  
  array( "name" => "Latest Posts section headline",
	"desc" => "Fill here the headline of the Latest Posts section displayed on your Blog page.",
		"id" => $happenstance_shortname."_latest_posts_headline",
		"type" => "text",
		"std" => "Latest Posts"),    

array( "name" => "tab_content_4",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close Post Entries settings


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
// Close fonts

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
		"id" => $happenstance_shortname."_share_buttons_language",
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
              'i' => 'hu_HU',
              'j' => 'it_IT',
              'k' => 'nl_NL',
              'l' => 'pl_PL',
              'm' => 'pt_PT',
              'n' => 'ru_RU',
              'o' => 'sk_SK'),
		"type" => "select"),
	
	array( "name" => "Share Buttons on Pages",
		"desc" => "This shows Facebook, Twitter and Google '+1' share buttons below your pages content.",
		"id" => $happenstance_shortname."_share_buttons_page",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
	
	array( "name" => "Share Buttons on Posts",
		"desc" => "This shows Facebook, Twitter and Google '+1' share buttons below your posts content.",
		"id" => $happenstance_shortname."_share_buttons_post",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
	array( "name" => "Share Buttons on Post Entries",
		"desc" => "This shows Facebook, Twitter and Google '+1' share buttons on the Post Entries (on homepage/archive pages). Note: share buttons are displayed only in the One Column layout, not in the Grid - Masonry layout.",
		"id" => $happenstance_shortname."_share_buttons_post_entry",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Share Buttons on Events",
		"desc" => "This shows Facebook, Twitter and Google '+1' share buttons on the individual Events.",
		"id" => $happenstance_shortname."_share_buttons_events",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
    
  array( "name" => "Share Buttons on Products",
		"desc" => "This shows Facebook, Twitter and Google '+1' share buttons on the individual WooCommerce Products.",
		"id" => $happenstance_shortname."_share_buttons_products",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"), 


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
		"id" => $happenstance_shortname."_own_css",
		"type" => "textarea",
		"std" => ""),
    
  array( "name" => "Custom JavaScript - Header",
		"desc" => "Fill here your custom JavaScript code which will appear in the 'head' section. <br />Please do not forget to wrap your JavaScript code between the &lt;script type='text/javascript'&gt;&lt;/script&gt; tags!",
		"id" => $happenstance_shortname."_own_javascript_header",
		"type" => "textarea",
		"std" => ""),
    
  array( "name" => "Custom JavaScript - Footer",
		"desc" => "Fill here your custom JavaScript code which will appear just before the closing 'body' tag. <br />Please do not forget to wrap your JavaScript code between the &lt;script type='text/javascript'&gt;&lt;/script&gt; tags!",
		"id" => $happenstance_shortname."_own_javascript_footer",
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


add_action('admin_head', 'happenstance_admin_css');

function happenstance_admin_css() { ?>
     
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
function happenstance_add_admin() {
	global $happenstance_options; global $happenstance_themename; global $happenstance_shortname;
	if ( isset ( $_GET['page'] ) && ( $_GET['page'] == basename(__FILE__) ) ) {
		if ( isset ($_REQUEST['action']) && ( 'save' == $_REQUEST['action'] ) ){
      if ( !empty($_POST) && check_admin_referer('happenstance_save_options','happenstance_save_options_field' ) ) {
			foreach ( $happenstance_options as $value ) {
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
			foreach ($happenstance_options as $value) {
				if ( array_key_exists('id', $value) ) {
					delete_option( $value['id'] );
				}
			}
			header("Location: themes.php?page=".basename(__FILE__)."&reset=true");
		}
	}
	add_theme_page($happenstance_themename." Options", 'Theme Options', 'edit_theme_options', 'fw-options.php', 'happenstance_admin', '', '1');
}

function happenstance_admin() {
	global $happenstance_themename, $happenstance_shortname, $happenstance_options, $happenstance_themever, $fwver, $happenstance_manualurl; 
	if (isset($_REQUEST["saved"]) && !empty($_REQUEST["saved"])) echo '<div id="message" class="updated fade"><p><strong>'.$happenstance_themename.' settings saved.</strong></p></div>';
	if (isset($_REQUEST["reset"]) && !empty($_REQUEST["reset"])) echo '<div id="message" class="error fade"><p><strong>'.$happenstance_themename.' '.__( 'settings reset.', 'happenstance' ).'</strong></p></div>';
  wp_enqueue_style('happenstance-framework-style', get_template_directory_uri() . '/functions/be/css.css');
  wp_enqueue_style('happenstance-framework-icons', get_template_directory_uri() . '/css/elegantfont.css');
?>

	<div id="wrap_fm"><!-- [ Header ]-->
		<div class="header_fm">
			<div class="logo_fm">Theme Options</div>
			<div class="frame_vers_fm">
				<div class="theme_version_fm"><?php echo $happenstance_themename;?> <strong><?php echo $happenstance_themever;?></strong></div>
				<div class="clear"></div>
			</div>
		</div>

		<!-- [ Top Menu ]-->
		<div class="top_menu_fm">
			<a title="Theme Documentation" target="_blank"class="doc_fm" href="<?php echo $happenstance_manualurl; ?>">Documentation</a><a title="Theme Support" target="_blank" class="support_fm" href="http://themes.tomastoman.cz/support">Support</a>
		</div>


	<form method="post">
	<?php 
	foreach ($happenstance_options as $value) {
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
			<input id="submit" class="button-primary" name="save" type="submit" value="<?php _e( 'Save all changes' , 'happenstance' ); ?>" /> <input type="hidden" name="action" value="save" />
      <?php wp_nonce_field( 'happenstance_save_options','happenstance_save_options_field' ); ?>
			</form>
		</div>
	 	<div class="col_50">
		 	<form method="post">
				<input class="reset button-primary" name="reset" type="submit" value="<?php _e( 'Reset all settings' , 'happenstance' ); ?>" />
				<input type="hidden" name="action" value="reset" />
			</form>
		</div>	
		<div class="clear"></div>
	</div>
	<!-- end form -->
</div></div>


<?php break;case 'text': ?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	<div class="input_fm"><input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(get_option( $value['id'] )); } else { echo esc_attr($value['std']); } ?>" /></div>
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>
  
<?php break;case 'url': ?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	<div class="input_fm"><input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_url(get_option( $value['id'] )); } else { echo esc_url($value['std']); } ?>" /></div>
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>
  
<?php break;case 'upload-favicon': ?>
<?php wp_enqueue_media();
wp_enqueue_script('happenstance-my-admin-js-favicon', get_template_directory_uri() . '/js/custom-uploader-favicon.js', array('jquery')); ?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
  <input class="upload_image" type="text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_url(get_option( $value['id'] )); } else { echo esc_url($value['std']); } ?>" /> 
  <input class="upload_image_button button" type="button" value="<?php _e( 'Upload Image' , 'happenstance' ); ?>" />
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>
  
<?php break;case 'upload-logo': ?>
<?php wp_enqueue_script('happenstance-my-admin-js-logo', get_template_directory_uri() . '/js/custom-uploader-logo.js', array('jquery')); ?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
  <input class="upload_logo" type="text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_url(get_option( $value['id'] )); } else { echo esc_url($value['std']); } ?>" /> 
  <input class="upload_logo_button button" type="button" value="<?php _e( 'Upload Image' , 'happenstance' ); ?>" />
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>
  
<?php break;case 'color': ?>
<?php wp_register_script( 'happenstance_jscolor', get_template_directory_uri() . '/js/jscolor/jscolor.js', array(), '1.4.1', true );
wp_enqueue_script('happenstance_jscolor'); ?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	<div class="input_fm"><input class="color {hash:true,caps:false,adjust:false,pickerClosable:true}" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(get_option( $value['id'] )); } else { echo esc_attr($value['std']); } ?>" /></div>
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>

<?php break; case 'textarea':?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	<div class="input_fm"><textarea name="<?php echo $value['id']; ?>" style="height: 100px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo esc_attr($value['std']); } ?></textarea></div>
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>

<?php break; case 'select': ?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	<div class="input_fm"><select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?>
	<option <?php if ( get_option( $value['id'] ) == $option) { selected( get_option( $value['id'] ), $option, true ); } elseif ($option == $value['std']) { selected( get_option( $value['id'] ), $option, true ); } ?>><?php echo $option; ?></option>
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

add_action('admin_menu', 'happenstance_add_admin');
?>