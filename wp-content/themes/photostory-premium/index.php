<?php
/**
 * The main template file.
 * @package PhotoStory
 * @since PhotoStory 1.0.0
*/
get_header(); ?>  
  <div id="content">
<?php if ( dynamic_sidebar( 'sidebar-7' ) ) : else : ?>
<?php endif; ?> 
<?php if ($photostory_display_latest_posts != 'Hide') { ?>   
    <section class="home-latest-posts">
      <h2 class="entry-headline"><?php esc_attr_e($photostory_latest_posts_headline); ?></h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php get_template_part( 'content', 'archives' ); ?>
<?php endwhile; endif; ?>
<?php photostory_content_nav( 'nav-below' ); ?>
   </section>
<?php } ?>
<?php if ( dynamic_sidebar( 'sidebar-6' ) ) : else : ?>
<?php endif; ?>  
  </div> <!-- end of content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>