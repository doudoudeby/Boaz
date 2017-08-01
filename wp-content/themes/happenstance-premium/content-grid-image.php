<?php
/**
 * The template for displaying content of Image Post entries as Grid - Masonry.
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
        <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } else {
echo '<img class="attachment-post-thumbnail" src="';
echo happenstance_catch_that_image();
echo '" alt="';
echo the_title();
echo '" />';
} ?></a>
<?php if ( $happenstance_display_meta_post_entry != 'Hide' ) { ?>
<?php if ( has_category() ) { ?>
        <p class="grid-category"><i class="icon_folder-alt" aria-hidden="true"></i><?php the_category(', '); ?></p>
<?php } ?>
<?php if ( has_tag() ) { ?>
        <p class="grid-tags"><?php the_tags( '<i class="icon_tag_alt" aria-hidden="true"></i>', ', ', '' ); ?></p>
<?php }} ?>
      </div>
      </article>