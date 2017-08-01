<?php
/**
 * The template for displaying the content of Video post entries on search/archive pages.
 * @package ShootingStar
 * @since ShootingStar 1.0.0
*/
?>
<?php global $shootingstar_options;
foreach ($shootingstar_options as $value) {
	if (isset($value['id']) && get_option( $value['id'] ) === FALSE && isset($value['std'])) {
		${$value['id']} = $value['std'];
	}
	elseif (isset($value['id'])) { ${$value['id']} = get_option( $value['id'] ); }
} ?>
    <article <?php post_class('post-entry'); ?>>
<?php if ( get_post_meta($post->ID, "_my_meta_value_key", true) ) {
global $wp_embed; ?>
      <div class="thumbnail-large"><?php echo $wp_embed->run_shortcode('[embed width="770"]'.get_post_meta($post->ID, "_my_meta_value_key", true).'[/embed]'); ?></div>
<?php } ?>
      <div class="post-entry-inner">
        <h2 class="post-entry-headline title single-title entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php if ( $shootingstar_display_meta_post_entry != 'Hide' ) { ?>
        <p class="post-meta">
          <span class="post-info-author vcard author"><i class="icon_pencil-edit" aria-hidden="true"></i><span class="fn"><?php the_author_posts_link(); ?></span></span>
          <span class="post-info-date post_date date updated"><i class="icon_clock_alt" aria-hidden="true"></i><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date(); ?></a></span>
<?php if ( comments_open() ) : ?>
          <span class="post-info-comments"><i class="icon_comment_alt" aria-hidden="true"></i><a href="<?php comments_link(); ?>"><?php printf( _n( '1 Comment', '%1$s Comments', get_comments_number(), 'shootingstar' ), number_format_i18n( get_comments_number() ), get_the_title() ); ?></a></span>
<?php endif; ?>
        </p>
<?php } ?>
        <div class="post-entry-content-wrapper">
          <div class="post-entry-content">
<?php if ( $shootingstar_content_archives != 'Content' ) { ?>
<?php the_excerpt(); ?>
<?php } else { ?>
<?php global $more; $more = 0; ?><?php the_content(); ?>
<?php } ?>
          </div>
        </div>
<?php if ( $shootingstar_display_meta_post_entry != 'Hide' && has_category() ) { ?>
        <div class="post-info">
          <p class="post-category"><span class="post-info-category"><i class="icon_folder-alt" aria-hidden="true"></i><?php the_category(', '); ?></span></p>
<?php if ( has_tag() ) { ?>
          <p class="post-tags"><?php the_tags( '<span class="post-info-tags"><i class="icon_tag_alt" aria-hidden="true"></i>', ', ', '</span>' ); ?></p>
<?php } ?>
        </div>
<?php } ?>
      </div>
    </article>