<div class="<?php xtreme_post_class() ?>" id="post-<?php the_ID() ?>">
	<?php xtreme_byline() ?>
	<?php xtreme_post_subtitle('h3') ?>
	<?php xtreme_post_headline( 'h2', false ) ?>
	<div class="entry-content">
		<?php the_content() ?>
		<?php wp_link_pages( array( 'before' => '<p><strong>' . __( 'Pages:', XF_TEXTDOMAIN ) . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number' ) ) ?>
		<?php edit_post_link( __( 'Edit', XF_TEXTDOMAIN ), '<div class="postedit">', '</div>' ) ?>
	</div>
</div>