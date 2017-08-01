<?php
/**
 * Template Name: Full Width without Title
 * The template file for full-width pages without the page title.
 * @package PhotoStory
 * @since PhotoStory 1.0.3
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
  <div id="content">
<?php photostory_get_display_image_page(); ?>    
    <div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '<p class="page-link"><span>' . __( 'Pages:', 'photostory' ) . '</span>', 'after' => '</p>' ) ); ?>
<?php edit_post_link( __( 'Edit', 'photostory' ), '<p>', '</p>' ); ?>
<?php endwhile; endif; ?>
<?php photostory_social_buttons_page(); ?>
<?php comments_template( '', true ); ?>
    </div>  
  </div> <!-- end of content -->
<?php get_footer(); ?>