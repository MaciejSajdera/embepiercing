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

	<div class="mb-16 text-gold">
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
		?>
	</div><!-- .entry-breadcrumbs -->

    <div class="entry-content blog-post__container flex flex-col md:block items-start mb-16">

		<div class="md:hidden mb-8">
			<?php echo get_template_part('/template-parts/partials/blog-post-header'); ?>
		</div>

        <div class="post-thumbnail w-full mb-8 md:mb-0 md:w-1/2 md:float-right md:pl-8 md:pb-8">

			<?php if (strlen(get_the_post_thumbnail_url()) > 0) : ?>
            <img class="w-full h-[512px] object-cover overflow-hidden rounded-lg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE); ?>" />
			<?php endif; ?>
        </div>

        <div class="post-content inline w-full md:w-1/3 text-lg">

			<div class="hidden md:block mb-8">
				<?php echo get_template_part('/template-parts/partials/blog-post-header'); ?>
			</div>

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

		
			<div class="flex flex-col content-center items-center mt-16 mb-16">
				<p class="mb--1">Udostępnij:</p>
			<?php echo do_shortcode('[Sassy_Social_Share]'); ?>

			</div> <!-- .post-content -->
   	 	</div>


    </div><!-- .entry-content -->

	<div class="post-navigation flex justify-between items-center">

        <div>
            <?php previous_post_link('%link', '<p class="post-navigation__prev mb-2">Poprzedni</p> <p>%title</p>'); ?>
        </div>

        <div class="text-right">
            <?php next_post_link('%link', '<p class="post-navigation__next mb-2">Następny</p> <p>%title</p>'); ?>
        </div>

	</div>


</article><!-- #post-<?php the_ID(); ?> -->