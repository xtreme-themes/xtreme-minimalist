<article class="<?php xtreme_post_class() ?>" id="post-<?php the_ID() ?>">
	<header>
		<?php xtreme_html5_byline(); ?>
		<?php if ( current_theme_supports( 'xtreme-subtitles' ) ) : ?>
		<hgroup>
		<?php xtreme_post_subtitle( 'h3' ) ?>
		<?php endif; ?>
		<?php xtreme_post_headline( 'h2', false ) ?>
		<?php if ( current_theme_supports( 'xtreme-subtitles' ) ) : ?>
		</hgroup>
		<?php endif; ?>
	</header>
	<div class="entry-content">
		<?php the_content() ?>
		<?php wp_link_pages( array( 'before' => '<nav><strong>' . __( 'Pages:', XF_TEXTDOMAIN ) . '</strong> ', 'after' => '</nav>', 'next_or_number' => 'number' ) ) ?>
		<?php edit_post_link( __( 'Edit', XF_TEXTDOMAIN ), '<div class="postedit">', '</div>' ) ?>
	</div>
	<?php do_action( 'xtreme_single_footer' ) ?>
</article>
