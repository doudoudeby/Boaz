<?php
/**
 * Framework setup.
 * @package PhotoStory
 * @since PhotoStory 1.0.0
*/

function photostory_bar_menu() {
	global $wp_admin_bar;
	if ( !is_super_admin() || !is_admin_bar_showing() )
		return;
		$admin_dir = get_admin_url();
		
	$wp_admin_bar->add_menu( array(
	'id' => 'custom_menu',
	'title' => __( 'Theme Options', 'photostory' ),
	'href' => $admin_dir .'admin.php?page=fw-options.php',
	'meta' => array('title' => 'PhotoStory Setup', 'class' => 'photostorypanel') ) );
}
add_action('admin_bar_menu', 'photostory_bar_menu', '1000');
?>