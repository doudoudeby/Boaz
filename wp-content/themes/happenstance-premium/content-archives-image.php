<?php
/**
 * The template for displaying content of Image Post entries as One Column.
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
      <article <?php post_class('post-entry'); ?>>
<?php if ( $happenstance_display_meta_post_entry != 'Hide' ) { ?>
        <p class="post-meta">
          <span class="post-info-author"><i class="icon_pencil-edit" aria-hidden="true"></i><?php the_author_posts_link(); ?></span>
          <span class="post-info-date"><i class="icon_clock_alt" aria-hidden="true"></i><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date(); ?></a></span>
<?php if ( comments_open() ) : ?>
          <span class="post-info-comments"><i class="icon_comment_alt" aria-hidden="true"></i><a href="<?php comments_link(); ?>"><?php printf( _n( '1 Comment', '%1$s Comments', get_comments_number(), 'happenstance' ), number_format_i18n( get_comments_number() ), get_the_title() ); ?></a></span>
<?php endif; ?>
        </p>
<?php } ?>
        <div class="post-entry-content-wrapper">
          <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } else {
echo '<img class="attachment-post-thumbnail image-post-thumbnail" src="';
echo happenstance_catch_that_image();
echo '" alt="';
echo the_title();
echo '" />';
} ?></a>
          <div class="post-entry-content"></div>
        </div>
<?php happenstance_social_buttons_post_entry(); ?>
<?php if ( $happenstance_display_meta_post_entry != 'Hide' && has_category() ) { ?>
        <div class="post-info">
          <p class="post-category"><span class="post-info-category"><i class="icon_folder-alt" aria-hidden="true"></i><?php the_category(', '); ?></span></p>
<?php if ( has_tag() ) { ?>
          <p class="post-tags"><?php the_tags( '<span class="post-info-tags"><i class="icon_tag_alt" aria-hidden="true"></i>', ', ', '</span>' ); ?></p>
<?php } ?>
        </div>
<?php } ?>
      </article>