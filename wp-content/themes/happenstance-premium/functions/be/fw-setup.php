<?php
/**
 * Framework setup.
 * @package HappenStance
 * @since HappenStance 1.0.0
*/

function happenstance_bar_menu() {
	global $wp_admin_bar;
	if ( !is_super_admin() || !is_admin_bar_showing() )
		return;
		$admin_dir = get_admin_url();
		
	$wp_admin_bar->add_menu( array(
	'id' => 'custom_menu',
	'title' => __( 'Theme Options', 'happenstance' ),
	'href' => $admin_dir .'admin.php?page=fw-options.php',
	'meta' => array('title' => 'HappenStance Setup', 'class' => 'happenstancepanel') ) );
}
add_action('admin_bar_menu', 'happenstance_bar_menu', '1000');
?>