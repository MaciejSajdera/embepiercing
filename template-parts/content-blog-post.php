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

    <div class="entry-content blog-post__container flex flex-col md:flex-row-reverse items-start">

        <div class="post-thumbnail w-full flex md:w-2/3 md:float-right md:pl-8 md:pb-8">

            <img class="" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE); ?>" />

        </div>

        <div class="post-content flex-auto">

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

	<div class="post-navigation">

        <div>
            <?php previous_post_link('%link', '<span class="post-navigation__prev">Poprzedni</span> <p>%title</p>'); ?>
        </div>

        <div>
            <?php next_post_link('%link', '<span class="post-navigation__next">Następny</span> <p>%title</p>'); ?>
        </div>

	</div>

    <div class="flex flex-col content-center items-center md:hidden mt--4">
        <p class="mb--1">Udostępnij:</p>
        <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->