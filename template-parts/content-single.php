<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php echo get_template_part('/template-parts/partials/page-header'); ?>

	<div class="entry-content">

		<?php

			/* translators: %s: Name of current post */
			the_content(
				sprintf(
					__( 'Continue reading %s', 'embepiercing' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				)
			);

			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'embepiercing' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'embepiercing' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		?>
	</div>

</article>
