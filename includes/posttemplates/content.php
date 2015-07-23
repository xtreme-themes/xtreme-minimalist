<div class="<?php xtreme_post_class() ?>" id="post-<?php the_ID() ?>">
	<?php xtreme_byline() ?>
	<?php xtreme_post_subtitle('h3') ?>
	<?php xtreme_post_headline( 'h2', true ) ?>
	<?php
	$size = apply_filters( 'xtreme_loop_thumbnail_size', 'thumbnail' );
	$align = apply_filters( 'xtreme_loop_thumbnail_align', 'alignleft' );
	xtreme_post_thumbnail( $size, $align );
	?>
	<div class="entry-content">
		<?php xtreme_excerpt(32, '', '[...]') ?>
	</div>
	<p class="utility">
		<?php edit_post_link( __( 'Edit', XF_TEXTDOMAIN ), '<span class="postedit">', '&nbsp;|&nbsp;</span>') ?>
		<span class="postcomments"><?php comments_popup_link( __('no Comments', XF_TEXTDOMAIN), __('1 Comment', XF_TEXTDOMAIN), __('% Comments', XF_TEXTDOMAIN) ) ?></span>&nbsp;|&nbsp;
		<span class="read-more"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( __('Permanent Link to %s', XF_TEXTDOMAIN), the_title_attribute( 'echo=0' )) ?>"><?php _e('Read more...', XF_TEXTDOMAIN) ?></a></span>
	</p>
</div>
