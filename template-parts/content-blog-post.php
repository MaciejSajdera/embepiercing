<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bmxschool
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb--4'); ?>>
    <header class="entry-header mb--2">
        <div class="title-wrapper flex flex-drow-mcol content-between">

            <div class="hidden md:flex items-center">
                <p class="mr--1">Udostępnij:</p> <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
            </div>

        </div>

        <?php
		if ( 'post' === get_post_type() ) :
			?>
        <div class="entry-meta">
            <?php
				// posted_on();
				// posted_by();
				?>
        </div><!-- .entry-meta -->
        <?php endif; ?>

    </header><!-- .entry-header -->

    <div class="entry-content single__post">

        <div class="post-thumbnail">

            <img class="" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE); ?>" />

        </div>

        <div class="post-content">

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

        </div> <!-- .post-content -->
    </div><!-- .entry-content -->

    <div class="flex flex-col content-center items-center md:hidden mt--4">
        <p class="mb--1">Udostępnij:</p>
        <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->