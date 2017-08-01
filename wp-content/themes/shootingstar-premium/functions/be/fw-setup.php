<?php
/**
 * Framework setup.
 * @package ShootingStar
 * @since ShootingStar 1.0.0
*/

function shootingstar_bar_menu() {
	global $wp_admin_bar;
	if ( !is_super_admin() || !is_admin_bar_showing() )
		return;
		$admin_dir = get_admin_url();
		
	$wp_admin_bar->add_menu( array(
	'id' => 'custom_menu',
	'title' => __( 'Theme Options', 'shootingstar' ),
	'href' => $admin_dir .'admin.php?page=fw-options.php',
	'meta' => array('title' => 'ShootingStar Setup', 'class' => 'shootingstarpanel') ) );
}
add_action('admin_bar_menu', 'shootingstar_bar_menu', '1000');
?>