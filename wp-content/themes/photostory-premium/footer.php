<?php
/**
 * The footer template file.
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
  </div> <!-- end of main-content -->

<footer id="wrapper-footer">
<div class="content-background"></div>
<?php if ( !is_page_template('template-landing-page.php') ) { ?>
<?php if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) { ?>
  <div id="footer">
    <div class="footer-widget-area footer-widget-area-1">
<?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div>   
    <div class="footer-widget-area footer-widget-area-2">
<?php dynamic_sidebar( 'sidebar-3' ); ?>
    </div>   
    <div class="footer-widget-area footer-widget-area-3">
<?php dynamic_sidebar( 'sidebar-4' ); ?>
    </div>
  </div>
<?php }} ?>
<?php if ( dynamic_sidebar( 'sidebar-5' ) ) : else : ?>
<?php endif; ?>
</footer>  <!-- end of wrapper-footer -->
</div> <!-- end of page -->
</div> <!-- end of container -->
<?php wp_footer(); ?> 
<?php if ($photostory_own_javascript_footer != ''){ ?>
<?php echo stripslashes_deep($photostory_own_javascript_footer); ?>
<?php } ?>     
</body>
</html>