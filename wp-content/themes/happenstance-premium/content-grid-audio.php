<?php
/**
 * The template for displaying content of Audio Post entries as Grid - Masonry.
 * @package HappenStance
 * @since HappenStance 1.0.0
*/
?>
<?php global $happenstance_options;
foreach ($happenstance_options as $value) {
	if (isset($value['id']) && get_option( $value['id'] ) === FALSE && isset($value['std'])) {
		${$value['id']} = $value['std'];
	}
	elseif (isset($value['id'])) { ${$value['id']} = get_option( $value['id'] ); }
} ?>
      <article <?php post_class('grid-entry'); ?>>
      <div class="grid-entry-inner">
<?php if ( has_post_thumbnail() ) { ?>
<?php if ( $happenstance_featured_image_size != 'Thumbnail Size' ) { ?>
          <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
<?php } else { ?>
          <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
<?php }} ?>
        <h2 class="grid-entry-headline"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php if ( $happenstance_display_meta_post_entry != 'Hide' ) { ?>
        <p class="post-meta">
          <span class="post-info-author"><i class="icon_pencil-edit" aria-hidden="true"></i><?php the_author_posts_link(); ?></span>
          <span class="post-info-date"><i class="icon_clock_alt" aria-hidden="true"></i><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date(); ?></a></span>
<?php if ( comments_open() ) : ?>
          <span class="post-info-comments"><i class="icon_comment_alt" aria-hidden="true"></i><a href="<?php comments_link(); ?>"><?php printf( _n( '1 Comment', '%1$s Comments', get_comments_number(), 'happenstance' ), number_format_i18n( get_comments_number() ), get_the_title() ); ?></a></span>
<?php endif; ?>
        </p>
<?php } ?>
<?php happenstance_catch_that_audio(); ?> 
<?php if ( $happenstance_display_meta_post_entry != 'Hide' ) { ?>
<?php if ( has_category() ) { ?>
        <p class="grid-category"><i class="icon_folder-alt" aria-hidden="true"></i><?php the_category(', '); ?></p>
<?php } ?>
<?php if ( has_tag() ) { ?>
        <p class="grid-tags"><?php the_tags( '<i class="icon_tag_alt" aria-hidden="true"></i>', ', ', '' ); ?></p>
<?php }} ?>
      </div>
      </article>