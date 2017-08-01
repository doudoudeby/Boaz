<?php
/**
 * The header template file.
 * @package ShootingStar
 * @since ShootingStar 1.0.0
*/
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php global $shootingstar_options;
foreach ($shootingstar_options as $value) {
	if (isset($value['id']) && get_option( $value['id'] ) === FALSE && isset($value['std'])) {
		${$value['id']} = $value['std'];
	}
	elseif (isset($value['id'])) { ${$value['id']} = get_option( $value['id'] ); }
} ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" /> 
  <meta name="viewport" content="width=device-width" /> 
<?php if ( ! function_exists( '_wp_render_title_tag' ) ) { ?><title><?php wp_title( '|', true, 'right' ); ?></title><?php } ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">   
<?php if ($shootingstar_favicon_url != ''){ ?>
	<link rel="shortcut icon" href="<?php echo esc_url($shootingstar_favicon_url); ?>" />
<?php } ?>
<?php wp_head(); ?> 
<?php if ($shootingstar_own_javascript_header != ''){ ?>
<?php echo stripslashes_deep($shootingstar_own_javascript_header); ?>
<?php } ?> 
</head>
 
<body <?php body_class(); ?> id="wrapper">
<?php if ( $shootingstar_display_background_pattern != 'Hide' ) { ?>
<div class="pattern"></div> 
<?php } ?>   
<div id="container">
  <header id="header">
<?php if ( !is_page_template('template-landing-page.php') ) { ?>
<?php if ( $shootingstar_display_carousel != 'Hide' ) { ?>
  <div id="ticker-wrapper">
    <div class="ticker-box">
      <div class="ticker-arrow-1"></div>
      <div class="ticker-arrow-2"></div>
<?php if ( $shootingstar_carousel_content != 'Carousel Menu' ) { ?>
<?php $args_ticker = array(
  'showposts' => $shootingstar_carousel_posts_number,
	'post_type' => 'post',
  'ignore_sticky_posts' => true,
	'post_status' => 'publish' );
$ticker_query = new WP_Query( $args_ticker ); ?>
      <ul id="ticker">
<?php if ($ticker_query->have_posts()) : while ($ticker_query->have_posts()) : $ticker_query->the_post(); ?>
        <li><a href="<?php echo get_permalink(); ?>">&raquo; <?php the_title(); ?></a></li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
      </ul>
<?php } else { ?>
<?php if ( has_nav_menu( 'carousel-navigation' ) ) { wp_nav_menu( array( 'menu_id'=>'ticker', 'theme_location'=>'carousel-navigation', 'link_before'=>'&raquo; ' ) ); } ?>
<?php } ?>
    </div>
  </div>
<?php } ?>
<?php if ( has_nav_menu( 'top-navigation' ) || $shootingstar_header_address != '' || $shootingstar_header_email != '' || $shootingstar_header_phone != '' || $shootingstar_header_skype != '' ) {  ?>
  <div class="top-navigation-wrapper">
    <div class="top-navigation">
<?php if ( $shootingstar_header_address != '' || $shootingstar_header_email != '' || $shootingstar_header_phone != '' || $shootingstar_header_skype != '' ){ ?>
      <p class="header-contact">
<?php if ( $shootingstar_header_address != '' ){ ?>
        <span class="header-contact-address"><i class="icon_house" aria-hidden="true"></i><?php echo stripslashes_deep($shootingstar_header_address); ?></span>
<?php } ?>
<?php if ( $shootingstar_header_email != '' ){ ?>
        <span class="header-contact-email"><i class="icon_mail" aria-hidden="true"></i><?php echo esc_attr($shootingstar_header_email); ?></span>
<?php } ?>
<?php if ( $shootingstar_header_phone != '' ){ ?>
        <span class="header-contact-phone"><i class="icon_phone" aria-hidden="true"></i><?php echo esc_attr($shootingstar_header_phone); ?></span>
<?php } ?>
<?php if ( $shootingstar_header_skype != '' ){ ?>
        <span class="header-contact-skype"><i class="social_skype" aria-hidden="true"></i><?php echo esc_attr($shootingstar_header_skype); ?></span>
      </p>
<?php }} ?>
<?php if ( has_nav_menu( 'top-navigation' ) ) { wp_nav_menu( array( 'menu_id'=>'top-nav', 'theme_location'=>'top-navigation', 'link_before'=>'<i class="', 'link_after'=>'" aria-hidden="true"></i>' ) ); } ?> 
    </div>
  </div>
<?php }} ?>    
  <div class="header-content-wrapper">
    <div class="header-content">
<?php if ( $shootingstar_logo_url == '' ) { ?>
      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
<?php } else { ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="header-logo" src="<?php echo esc_url($shootingstar_logo_url); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
<?php } ?>
<?php if ( $shootingstar_display_site_description != 'Hide' ) { ?>
      <p class="site-description"><?php bloginfo( 'description' ); ?></p>
<?php } ?>
<?php if ( $shootingstar_display_search_form != 'Hide' && !is_page_template('template-landing-page.php') ) { ?>
<?php get_search_form(); ?>
<?php } ?>
    </div>
  </div>
<?php if ( !is_page_template('template-landing-page.php') ) { ?>
  <div class="menu-box-container">
  <div class="menu-box-wrapper">
    <div class="menu-box">
<?php if ( $shootingstar_display_home_icon != 'Hide' ) { ?>
      <a class="link-home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="icon_house" aria-hidden="true"></i></a>
<?php } ?>
<?php wp_nav_menu( array( 'menu_id'=>'nav', 'theme_location'=>'main-navigation' ) ); ?>
    </div>
  </div>
  </div>
<?php } ?>    
<?php if ( is_home() || is_front_page() ) { ?>
<?php if ( dynamic_sidebar( 'sidebar-6' ) ) : else : ?>
<?php if ( get_header_image() != '' ) { ?>    
    <div class="header-image"><img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>" /></div>
<?php } ?>
<?php endif; ?>
<?php } else { ?>
<?php if ( is_page() || is_single() ) { ?>
<?php if ( get_post_meta($post->ID, "_my_meta_value_key_slideshow", true ) ) { ?>
  <div id="slideshow-wrapper">
<?php if ( function_exists('cyclone_slider') ) { cyclone_slider(get_post_meta($post->ID, "_my_meta_value_key_slideshow", true)); } ?>
  </div>
<?php } else { ?>
<?php if ( get_header_image() != '' && $shootingstar_display_header_image != 'Only on Homepage' ) { ?>
  <div class="header-image"><img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>" /></div>
<?php }}} else { ?>
<?php if ( get_header_image() != '' && $shootingstar_display_header_image != 'Only on Homepage' ) { ?>    
    <div class="header-image"><img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>" /></div>
<?php }}} ?>
  </header> <!-- end of header -->

<div id="main-content-wrapper">
<div id="main-content">
<div id="content" class="hentry">